<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $loginUrls = [
        'ghana' => 'https://filehold.top-archive.com/FH/Filehold/WebClient/LoginForm.aspx',
        'tanzania' => 'https://taeaoneilorder.top-archive.com/oneilOrder/Credential/LogOn?ReturnUrl=%2foneilOrder%2f'
    ];

    public function showLoginModal()
    {
        return view('auth.login-modal');
    }

    public function redirectToCountryLogin($country)
    {
        if (array_key_exists($country, $this->loginUrls)) {
            return redirect()->away($this->loginUrls[$country]);
        }

        return back()->with('error', 'Invalid country selection');
    }
}
