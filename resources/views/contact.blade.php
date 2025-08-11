@extends('layouts.app')

@section('title', 'Contact Us - Top Archive')

@section('content')
    {{--    @include('includes.nav')--}}

    <!-- Hero Header -->
    <div class="relative bg-gradient-to-br from-slate-900 via-gray-900 to-black overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>

    <div class="relative container mx-auto px-4 py-20 lg:py-32">
        <div class="text-center max-w-5xl mx-auto">
            <div class="inline-flex items-center px-4 py-2 bg-yellow-500/20 text-yellow-300 rounded-full text-sm font-semibold mb-6 backdrop-blur-sm border border-yellow-500/30">
                ✨ Free Professional Assessment
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-8 leading-tight">
                Ready to Transform Your
                <span class="block bg-gradient-to-r from-yellow-400 via-amber-400 to-orange-400 bg-clip-text text-transparent">
                        Business Success?
                    </span>
            </h1>
            <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
                Connect with our expert team across Africa for personalized guidance, strategic insights, and professional support tailored to your unique needs.
            </p>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-black text-yellow-400 mb-2">24hrs</div>
                    <div class="text-gray-300">Response Time</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-black text-yellow-400 mb-2">3</div>
                    <div class="text-gray-300">Office Locations</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-black text-yellow-400 mb-2">100%</div>
                    <div class="text-gray-300">Free Assessment</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-yellow-400/20 to-transparent rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-amber-400/20 to-transparent rounded-full blur-3xl"></div>
    </div>

    <!-- Contact Section -->
    <div class="bg-gray-50 py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <!-- Office Locations -->
                <div class="mb-20">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-black text-gray-900 mb-4">Our Offices Across Africa</h2>
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                            Choose the location nearest to you or reach out to any of our offices for support
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Tanzania Office -->
                        <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 transform hover:-translate-y-2 border border-gray-100">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-2xl">🇹🇿</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Tanzania</h3>
                                <p class="text-yellow-600 font-semibold mb-6">East Africa Hub</p>

                                <div class="space-y-4 text-left">
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-gray-600">79958, Dar es Salaam, Tanzania</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span class="text-gray-600">+255 78 8009555</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.026a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="text-gray-600">info.tz@top-archive.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ghana Office -->
                        <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 transform hover:-translate-y-2 border border-gray-100">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-2xl">🇬🇭</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Ghana</h3>
                                <p class="text-green-600 font-semibold mb-6">West Africa Hub</p>

                                <div class="space-y-4 text-left">
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-gray-600">P.M.B CT 118 Accra, Ghana</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span class="text-gray-600">+233540119622</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.026a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="text-gray-600">info@top-archive.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nigeria Office -->
                        <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 transform hover:-translate-y-2 border border-gray-100">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-2xl">🇳🇬</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Nigeria</h3>
                                <p class="text-green-600 font-semibold mb-6">Commercial Hub</p>

                                <div class="space-y-4 text-left">
                                    <div class="flex items-start space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        </svg>
                                        <span class="text-gray-600">VI 79234, Lagos, Nigeria</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span class="text-gray-600">+234 81 33031000</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.026a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span class="text-gray-600">info.ng@top-archive.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                        <!-- Form Header -->
                        <div class="bg-gradient-to-r from-yellow-500 to-amber-500 px-8 py-12 text-center">
                            <h2 class="text-3xl md:text-4xl font-black text-white mb-4">Get Your Free Assessment</h2>
                            <p class="text-yellow-100 text-lg max-w-2xl mx-auto">
                                Tell us about your project and we'll provide personalized recommendations within 24 hours
                            </p>
                        </div>

                        <!-- Form Content -->
                        <div class="p-8 md:p-12">


                            <form method="POST" action="{{ route('contact.store') }}" class="space-y-8">
                                @csrf

                                <!-- Country Selection with Search -->
                                <div>
                                    <label for="country" class="block text-sm font-bold text-gray-700 mb-3">Country of Origin *</label>
                                    <div class="relative">
                                        <div class="country-select-wrapper">
                                            <input type="text"
                                                   id="countrySearch"
                                                   class="w-full px-4 py-4 border {{ $errors->has('country') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-yellow-500 focus:border-yellow-500' }} rounded-xl focus:ring-2 transition-colors duration-200 bg-white cursor-pointer"
                                                   placeholder="Search for your country..."
                                                   autocomplete="off"
                                                   readonly>
                                            <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>

                                        <!-- Hidden select for form submission -->
                                        <select name="country" id="country" class="hidden">
                                            <option value="" disabled selected>Select your country</option>
                                            @foreach($countries as $country)
                                                <option value="{{ $country }}" {{ old('country') == $country ? 'selected' : '' }}>{{ $country }}</option>
                                            @endforeach
                                            <option value="Other" {{ old('country') == 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>

                                        <!-- Dropdown -->
                                        <div id="countryDropdown" class="absolute z-50 w-full mt-2 bg-white border border-gray-300 rounded-xl shadow-xl hidden max-h-60 overflow-y-auto">
                                            <div class="p-3 border-b border-gray-200">
                                                <input type="text"
                                                       id="countryFilter"
                                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 text-sm"
                                                       placeholder="Type to search countries...">
                                            </div>
                                            <div id="countryOptions" class="py-2">
                                                @foreach($countries as $country)
                                                    <div class="country-option px-4 py-3 hover:bg-yellow-50 cursor-pointer transition-colors duration-150" data-value="{{ $country }}">
                                                        {{ $country }}
                                                    </div>
                                                @endforeach
                                                <div class="country-option px-4 py-3 hover:bg-yellow-50 cursor-pointer transition-colors duration-150" data-value="Other">
                                                    Other
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('country')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <!-- Other Country (Hidden by default) -->
                                <div id="otherCountryGroup" class="hidden">
                                    <label for="other_country" class="block text-sm font-bold text-gray-700 mb-3">Please specify your country *</label>
                                    <input type="text" name="other_country" id="other_country" placeholder="Enter your country" value="{{ old('other_country') }}" class="w-full px-4 py-4 border {{ $errors->has('other_country') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-yellow-500 focus:border-yellow-500' }} rounded-xl focus:ring-2 transition-colors duration-200">
                                    @error('other_country')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <!-- Name Fields -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="first_name" class="block text-sm font-bold text-gray-700 mb-3">First Name *</label>
                                        <input type="text" name="first_name" id="first_name" placeholder="Enter your first name" value="{{ old('first_name') }}" class="w-full px-4 py-4 border {{ $errors->has('first_name') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-yellow-500 focus:border-yellow-500' }} rounded-xl focus:ring-2 transition-colors duration-200">
                                        @error('first_name')
                                        <p class="mt-2 text-sm text-red-600 flex items-center">
                                            <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-bold text-gray-700 mb-3">Last Name *</label>
                                        <input type="text" name="last_name" id="last_name" placeholder="Enter your last name" value="{{ old('last_name') }}" class="w-full px-4 py-4 border {{ $errors->has('last_name') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-yellow-500 focus:border-yellow-500' }} rounded-xl focus:ring-2 transition-colors duration-200">
                                        @error('last_name')
                                        <p class="mt-2 text-sm text-red-600 flex items-center">
                                            <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Contact Fields -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="email" class="block text-sm font-bold text-gray-700 mb-3">Email Address *</label>
                                        <input type="email" name="email" id="email" placeholder="Enter your email address" value="{{ old('email') }}" class="w-full px-4 py-4 border {{ $errors->has('email') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-yellow-500 focus:border-yellow-500' }} rounded-xl focus:ring-2 transition-colors duration-200">
                                        @error('email')
                                        <p class="mt-2 text-sm text-red-600 flex items-center">
                                            <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-bold text-gray-700 mb-3">Phone Number *</label>
                                        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" value="{{ old('phone') }}" class="w-full px-4 py-4 border {{ $errors->has('phone') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-yellow-500 focus:border-yellow-500' }} rounded-xl focus:ring-2 transition-colors duration-200">
                                        @error('phone')
                                        <p class="mt-2 text-sm text-red-600 flex items-center">
                                            <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Message -->
                                <div>
                                    <label for="message" class="block text-sm font-bold text-gray-700 mb-3">Tell us about your project *</label>
                                    <textarea name="message" id="message" rows="6" placeholder="Describe your project, goals, challenges, or how we can help you succeed..." class="w-full px-4 py-4 border {{ $errors->has('message') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-yellow-500 focus:border-yellow-500' }} rounded-xl focus:ring-2 transition-colors duration-200 resize-none">{{ old('message') }}</textarea>
                                    @error('message')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>

                                <!-- reCAPTCHA -->
                                <div class="flex justify-center">
                                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <div class="text-red-600 text-sm mt-2">
                                            {{ $errors->first('g-recaptcha-response') }}
                                        </div>
                                    @endif
                                </div>

                                <!-- Submit Button -->
                                <div class="pt-4">
                                    <button type="submit" class="w-full bg-gradient-to-r from-yellow-500 to-amber-500 text-white font-black py-5 px-8 rounded-xl hover:from-yellow-600 hover:to-amber-600 focus:ring-4 focus:ring-yellow-300 transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-2xl text-lg">
                                        <span class="flex items-center justify-center">
                                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                            </svg>
                                            Get My Free Assessment
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <!-- Include reCAPTCHA JS -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const countrySearch = document.getElementById('countrySearch');
            const countrySelect = document.getElementById('country');
            const countryDropdown = document.getElementById('countryDropdown');
            const countryFilter = document.getElementById('countryFilter');
            const countryOptions = document.querySelectorAll('.country-option');
            const otherCountryGroup = document.getElementById('otherCountryGroup');

            // Show dropdown when clicking on search input
            countrySearch.addEventListener('click', function() {
                countryDropdown.classList.toggle('hidden');
                countryFilter.focus();
            });

            // Hide dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.country-select-wrapper') && !e.target.closest('#countryDropdown')) {
                    countryDropdown.classList.add('hidden');
                }
            });

            // Filter countries
            countryFilter.addEventListener('input', function() {
                const filter = this.value.toLowerCase();
                countryOptions.forEach(option => {
                    const text = option.textContent.toLowerCase();
                    if (text.includes(filter)) {
                        option.style.display = 'block';
                    } else {
                        option.style.display = 'none';
                    }
                });
            });

            // Select country
            countryOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const value = this.getAttribute('data-value');
                    const text = this.textContent;

                    countrySearch.value = text;
                    countrySelect.value = value;
                    countryDropdown.classList.add('hidden');

                    // Show/hide other country field
                    if (value === 'Other') {
                        otherCountryGroup.classList.remove('hidden');
                    } else {
                        otherCountryGroup.classList.add('hidden');
                    }
                });
            });

            // Initialize with selected value
            const selectedOption = countrySelect.querySelector('option[selected]');
            if (selectedOption && selectedOption.value) {
                countrySearch.value = selectedOption.textContent;
                if (selectedOption.value === 'Other') {
                    otherCountryGroup.classList.remove('hidden');
                }
            }
        });
    </script>

    <style>
        .country-select-wrapper {
            position: relative;
        }

        #countryDropdown {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .country-option:hover {
            background-color: #fef3c7;
        }

        .country-option.selected {
            background-color: #fbbf24;
            color: white;
        }
    </style>
@endsection