@extends('layouts.app')

@section('title', 'Contact Us - Top Archive')

@section('content')
    {{--    @include('includes.nav')--}}
    <!-- Header -->
    <div class="contact-header">
        <div class="container">
            <h1>Contact Us And Get A Free<br>Professional Assessment</h1>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="container">
        <div class="row gx-5">
            <!-- Left Column - Contact Details -->
            <div class="col-lg-4">
                <!-- Tanzania Office -->
                <div class="office-info">
                    <h3>Dar Es Salaam, Tanzania</h3>
                    <p>79958, Dar es Salaam, Tanzania</p>
                    <p>+255 78 8009555</p>
                    <p>info.tz@top-archive.com</p>
                </div>

                <!-- Ghana Office -->
                <div class="office-info">
                    <h3>Accra, Ghana</h3>
                    <p>P.M.B CT 118 Accra, Ghana</p>
                    <p>+233540119622</p>
                    <p>info@top-archive.com</p>
                </div>

                <!-- Nigeria Office -->
                <div class="office-info">
                    <h3>Lagos, Nigeria</h3>
                    <p>VI 79234, Lagos, Nigeria</p>
                    <p>+234 81 33031000</p>
                    <p>info.ng@top-archive.com</p>
                </div>
            </div>

            <!-- Right Column - Form -->
            <div class="col-lg-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
                    @csrf

                    <div class="form-group">
                        <select class="form-control" name="country" id="country">
                            <option value="" disabled selected>Country of Origin</option>
                            @foreach($countries as $country)
                                <option value="{{ $country }}" {{ old('country') == $country ? 'selected' : '' }}>{{ $country }}</option>
                            @endforeach
                            <option value="Other" {{ old('country') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>

                    <div class="form-group" id="otherCountryGroup" style="display: none;">
                        <input type="text" class="form-control" name="other_country" placeholder="Please specify your country" value="{{ old('other_country') }}">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message" rows="5">{{ old('message') }}</textarea>
                    </div>

                    <!-- reCAPTCHA v2 Checkbox -->
                    <div class="form-group mt-4">
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        @if ($errors->has('g-recaptcha-response'))
                            <div class="text-danger mt-2">
                                {{ $errors->first('g-recaptcha-response') }}
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="submit-btn mt-3">Submit Request</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include reCAPTCHA JS -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        // Show/hide the "Other country" field based on selection
        document.addEventListener('DOMContentLoaded', function() {
            const countrySelect = document.getElementById('country');
            const otherCountryGroup = document.getElementById('otherCountryGroup');

            // Initial state
            if (countrySelect.value === 'Other') {
                otherCountryGroup.style.display = 'block';
            }

            // On change
            countrySelect.addEventListener('change', function() {
                if (this.value === 'Other') {
                    otherCountryGroup.style.display = 'block';
                } else {
                    otherCountryGroup.style.display = 'none';
                }
            });
        });
    </script>
@endsection