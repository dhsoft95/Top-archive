<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewInquiryNotification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    // List of countries for dropdown
    private $countries = [
        'Tanzania', 'Ghana', 'Nigeria',
        'Kenya', 'Uganda', 'Rwanda', 'Burundi', 'Mozambique', 'Zambia', 'Malawi', 'DRC', // Tanzania neighbors
        'Togo', 'Burkina Faso', 'Ivory Coast', 'Benin', // Ghana neighbors
        'Benin', 'Cameroon', 'Chad', 'Niger', // Nigeria neighbors
        'South Africa', 'Egypt', 'Ethiopia', 'Morocco', 'Algeria', 'Tunisia',
        'Senegal', 'Mali', 'Angola', 'Zimbabwe', 'Botswana', 'Namibia',
        'Libya', 'Sudan', 'South Sudan', 'Somalia', 'Eritrea', 'Djibouti',
        'Gabon', 'Congo', 'Equatorial Guinea', 'Guinea', 'Guinea-Bissau',
        'Liberia', 'Sierra Leone', 'Gambia', 'Mauritania', 'Western Sahara',
        'Lesotho', 'Eswatini', 'Comoros', 'Mauritius', 'Seychelles', 'Cape Verde',
        'São Tomé and Príncipe'
    ];

    // Neighboring countries mapping
    private $neighboringCountries = [
        'Tanzania' => ['Kenya', 'Uganda', 'Rwanda', 'Burundi', 'DRC', 'Zambia', 'Malawi', 'Mozambique'],
        'Ghana' => ['Togo', 'Burkina Faso', 'Ivory Coast'],
        'Nigeria' => ['Benin', 'Niger', 'Chad', 'Cameroon']
    ];

    // Country to office routing
    private $officeRouting = [
        'Tanzania' => 'info.tz@top-archive.com',
        'Ghana' => 'info@top-archive.com',
        'Nigeria' => 'info.ng@top-archive.com'
    ];

    /**
     * Display the contact form
     */
    public function index()
    {
        return view('contact', ['countries' => $this->countries]);
    }

    /**
     * Process the contact form submission
     */
    public function store(Request $request)
    {
        // Skip reCAPTCHA verification in local environment
        if (app()->environment('local')) {
            $recaptchaSuccess = true;
        } else {
            // Validate the form data with recaptcha
            $validator = Validator::make($request->all(), [
                'g-recaptcha-response' => 'required'
            ], [
                'g-recaptcha-response.required' => 'Please complete the reCAPTCHA verification.'
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // Verify reCAPTCHA
            $recaptchaResult = $this->verifyRecaptcha($request->input('g-recaptcha-response'));
            $recaptchaSuccess = $recaptchaResult['success'] ?? false;
        }

        // Validate the form data
        $validator = Validator::make($request->all(), [
            'country' => 'required|string',
            'other_country' => 'required_if:country,Other',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ], [
            'other_country.required_if' => 'Please specify your country name.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (!$recaptchaSuccess) {
            return redirect()->back()
                ->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.'])
                ->withInput();
        }

        // Get country value (handle "Other" option)
        $country = $request->country;
        if ($country === 'Other') {
            $country = $request->other_country;
        }

        // Determine which office to route to
        $targetEmail = $this->determineTargetOffice($country);

        try {
            // Create inquiry record - only using fields that exist in the database
            $inquiry = new Inquiry();
            $inquiry->country = $country;
            $inquiry->first_name = $request->first_name;
            $inquiry->last_name = $request->last_name;
            $inquiry->email = $request->email;
            $inquiry->phone = $request->phone;
            $inquiry->message = $request->message;
            $inquiry->target_office = $targetEmail;
            $inquiry->save();

            // Send email notification
            Mail::to($targetEmail)->send(new NewInquiryNotification($inquiry));

            // Redirect with success message
            return redirect()->route('contact.thank-you')
                ->with('success', 'Thank you for your inquiry. We will contact you shortly.');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Contact form submission error: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->back()
                ->with('error', 'Sorry, there was a problem submitting your inquiry. Please try again later.')
                ->withInput();
        }
    }

    /**
     * Display thank you page
     */
    public function thankYou()
    {
        return view('contact.thank-you');
    }

    /**
     * Verify Google reCAPTCHA v2
     */
    private function verifyRecaptcha($recaptchaResponse)
    {
        try {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $recaptchaResponse,
                'remoteip' => request()->ip()
            ]);

            return $response->json();
        } catch (\Exception $e) {
            \Log::error('reCAPTCHA verification error: ' . $e->getMessage());
            return ['success' => false];
        }
    }

    /**
     * Determine which office should receive the inquiry
     */
    private function determineTargetOffice($country)
    {
        // If country is one of our office countries, route directly
        if (array_key_exists($country, $this->officeRouting)) {
            return $this->officeRouting[$country];
        }

        // Check if country is neighboring to any of our office countries
        foreach ($this->neighboringCountries as $officeCountry => $neighbors) {
            if (in_array($country, $neighbors)) {
                return $this->officeRouting[$officeCountry];
            }
        }

        // Default to Ghana office (main office) for other countries
        return $this->officeRouting['Ghana'];
    }
}