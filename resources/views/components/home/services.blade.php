{{-- Modern Services Section with Split Layout --}}
<section class="relative bg-white py-16 sm:py-20 lg:py-24 overflow-hidden">

    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] right-[-5%] w-96 h-96 rounded-full bg-amber-50/60 blur-3xl"></div>
        <div class="absolute bottom-[-15%] left-[-10%] w-[500px] h-[500px] rounded-full bg-yellow-50/50 blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="inline-block bg-amber-100 text-amber-800 text-xs font-semibold tracking-wider uppercase px-4 py-2 rounded-full mb-4">
                {{ __('Our Services') }}
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                {{ __('What We') }} <span class="text-amber-600">{{ __('Offer') }}</span>
            </h2>
            <p class="text-xl text-gray-600 leading-relaxed">
                {{ __('Professional archiving solutions designed to streamline your business operations') }}
            </p>
        </div>

        {{-- Services List --}}
        <div class="space-y-0">
            {{-- Service 1: Physical Archive --}}
            <div class="group relative">
                <div class="grid md:grid-cols-2 gap-0 items-center min-h-[500px]">
                    {{-- Content Side --}}
                    <div class="order-2 md:order-1 bg-slate-50 p-8 lg:p-16 h-full flex flex-col justify-center">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-2xl bg-amber-400 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                </svg>
                            </div>
                            <span class="text-amber-600 font-bold text-lg">01</span>
                        </div>

                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                            {{ __('Physical Archive') }}
                        </h3>

                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            {{ __('Active file management and long-term box storage, keeping records secure and accessible.') }}
                        </p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Offsite Record Storage') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('24/7 Security & Monitoring') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Climate-Controlled Facility') }}</span>
                            </li>
                        </ul>

                        <button onclick="openModal('storageModal')" class="inline-flex items-center text-amber-600 font-semibold text-lg group-hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="w-6 h-6 ml-2 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>

                    {{-- Image Side --}}
                    <div class="order-1 md:order-2 relative h-[400px] md:h-full overflow-hidden">
                        <img src="assets/images/services-1.jpg" alt=": Physical Archive" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-l from-slate-50 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>

            {{-- Service 2: Document Management --}}
            <div class="group relative">
                <div class="grid md:grid-cols-2 gap-0 items-center min-h-[500px]">
                    {{-- Image Side --}}
                    <div class="relative h-[400px] md:h-full overflow-hidden">
                        <img src="assets/images/document_management.png" alt="Document Management" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-white via-transparent to-transparent"></div>
                    </div>

                    {{-- Content Side --}}
                    <div class="bg-white p-8 lg:p-16 h-full flex flex-col justify-center">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-2xl bg-amber-400 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542" />
                                </svg>
                            </div>
                            <span class="text-amber-600 font-bold text-lg">02</span>
                        </div>

                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                            {{ __('Document Management') }}
                        </h3>

                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            {{ __('Quick access to business information, resource utilisation, and cost-effectiveness.') }}
                        </p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Archive Policy Development') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Professional Training Programs') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Compliance & Disaster Recovery') }}</span>
                            </li>
                        </ul>

                        <button onclick="openModal('managementModal')" class="inline-flex items-center text-amber-600 font-semibold text-lg group-hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="w-6 h-6 ml-2 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Service 3: Digital Archive --}}
            <div class="group relative">
                <div class="grid md:grid-cols-2 gap-0 items-center min-h-[500px]">
                    {{-- Content Side --}}
                    <div class="order-2 md:order-1 bg-slate-50 p-8 lg:p-16 h-full flex flex-col justify-center">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-2xl bg-amber-400 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 16.5V9.75m0 0l-3.75 3.75M12 9.75l3.75 3.75M6.75 12a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0z" />
                                </svg>
                            </div>
                            <span class="text-amber-600 font-bold text-lg">03</span>
                        </div>

                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                            {{ __('Digital Archive - EDMS') }}
                        </h3>

                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            {{ __('Access your documents digitally from any device, 24/7, from anywhere.') }}
                        </p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Professional Scanning & Digitization') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Cloud-Based Access Anywhere') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Advanced Search & Indexing') }}</span>
                            </li>
                        </ul>

                        <button onclick="openModal('digitalModal')" class="inline-flex items-center text-amber-600 font-semibold text-lg group-hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="w-6 h-6 ml-2 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>

                    {{-- Image Side --}}
                    <div class="order-1 md:order-2 relative h-[400px] md:h-full overflow-hidden">
                        <img src="assets/images/Digital_Archive.png" alt="Digital Archive" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-l from-slate-50 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>

            {{-- Service 4: Document Destruction --}}
            <div class="group relative">
                <div class="grid md:grid-cols-2 gap-0 items-center min-h-[500px]">
                    {{-- Image Side --}}
                    <div class="relative h-[400px] md:h-full overflow-hidden">
                        <img src="assets/images/Screenshot 2026-08-24 at 14.53.23.png" alt="Document Destruction" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-white via-transparent to-transparent"></div>
                    </div>

                    {{-- Content Side --}}
                    <div class="bg-white p-8 lg:p-16 h-full flex flex-col justify-center">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-2xl bg-amber-400 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622" />
                                </svg>
                            </div>
                            <span class="text-amber-600 font-bold text-lg">04</span>
                        </div>

                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                            {{ __('Document Destruction') }}
                        </h3>

                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            {{ __('Secure, confidential destruction with a certificate for your records.') }}
                        </p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Certified Secure Shredding') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Eco-Friendly Recycling') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Chain of Custody Documentation') }}</span>
                            </li>
                        </ul>

                        <button onclick="openModal('destructionModal')" class="inline-flex items-center text-amber-600 font-semibold text-lg group-hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="w-6 h-6 ml-2 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Service 5: Storage & Logistics --}}
            <div class="group relative">
                <div class="grid md:grid-cols-2 gap-0 items-center min-h-[500px]">
                    {{-- Content Side --}}
                    <div class="order-2 md:order-1 bg-slate-50 p-8 lg:p-16 h-full flex flex-col justify-center">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-2xl bg-amber-400 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25" />
                                </svg>
                            </div>
                            <span class="text-amber-600 font-bold text-lg">05</span>
                        </div>

                        <h3 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                            {{ __('Storage & Logistics') }}
                        </h3>

                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            {{ __('Warehousing, transportation, distribution, and inventory management.') }}
                        </p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Nationwide Distribution Network') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Real-Time Inventory Tracking') }}</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-amber-600 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">{{ __('Flexible Warehousing Solutions') }}</span>
                            </li>
                        </ul>

                        <button onclick="openModal('logisticsModal')" class="inline-flex items-center text-amber-600 font-semibold text-lg group-hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="w-6 h-6 ml-2 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>

                    {{-- Image Side --}}
                    <div class="order-1 md:order-2 relative h-[400px] md:h-full overflow-hidden">
                        <img src="assets/images/services-5.jpg" alt="Storage & Logistics" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-l from-slate-50 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Physical Archive Modal --}}
    <div id="storageModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex min-h-screen items-center justify-center p-4">
            <div class="modal-backdrop fixed inset-0 bg-gray-900/75 transition-opacity" onclick="closeModal('storageModal')"></div>
            <div class="modal-content relative w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white shadow-2xl transition-all">
                <div class="flex items-center justify-between border-b border-gray-200 bg-slate-50 px-6 py-4">
                    <h3 class="text-xl font-bold text-gray-900">{{ __(': Physical Archive Solutions') }}</h3>
                    <button onclick="closeModal('storageModal')" class="rounded-lg p-2 text-gray-400 hover:bg-gray-200 hover:text-gray-600 transition-colors">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="modal-scroll max-h-96 overflow-y-auto px-6 py-6">
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <p class="text-lg text-gray-700 font-medium">{{ __('Active file management and long-term box storage, keeping records secure and accessible.') }}</p>
                            <p class="text-gray-600">{{ __('Top Archive offers several : Physical Archive solutions depending on the needs of your business.') }}</p>
                        </div>
                        <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                            <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                {{ __('Offsite Record Storage') }}
                            </h4>
                            <p class="text-gray-600">{{ __('Long-term archival box storage and active file management keep the company\'s records secure and accessible. Outsource the management of your records to Top Archive\'s records repository, furnished with a modern shelving system that provides space, an unlimited storage area, and the highest level of document security, to create more space at your prime office location and protect the records from on-site disasters.') }}</p>
                        </div>
                        <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                            <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                {{ __('Security Features') }}
                            </h4>
                            <p class="text-gray-600 mb-3">{{ __('Top Archive boasts a highly secure record storage facility with cutting-edge security systems:') }}</p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <span class="text-amber-600 mr-2 mt-1">→</span>
                                    <span class="text-gray-600">{{ __('Comprehensive CCTV system inside and outside the facility') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-amber-600 mr-2 mt-1">→</span>
                                    <span class="text-gray-600">{{ __('Intrusion alarm system with UPS and GSM connection') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-amber-600 mr-2 mt-1">→</span>
                                    <span class="text-gray-600">{{ __('Biometric access control') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-amber-600 mr-2 mt-1">→</span>
                                    <span class="text-gray-600">{{ __('Smoke detection system') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-amber-600 mr-2 mt-1">→</span>
                                    <span class="text-gray-600">{{ __('Independent fire suppression system') }}</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-amber-600 mr-2 mt-1">→</span>
                                    <span class="text-gray-600">{{ __('Backup generator and smart UPS for IT systems') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-200 bg-slate-50 px-6 py-4">
                    <div class="flex justify-end">
                        <button onclick="closeModal('storageModal')" class="rounded-lg bg-gray-200 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-300 transition-colors">
                            {{ __('Close') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
</script>