@extends('layouts.app')
@section('title', 'Top Archive - About')
{{--@include('includes.serviceModal')--}}

@section('content')

    <section class="relative bg-slate-50 py-16 sm:py-20 lg:py-24 overflow-hidden">
        {{-- Enhanced Animation Styles --}}
        @push('styles')
            <style>
                @keyframes gentle-float {
                    0%, 100% { transform: translateY(0px); }
                    50% { transform: translateY(-20px); }
                }

                @keyframes slow-spin {
                    from { transform: rotate(0deg); }
                    to { transform: rotate(360deg); }
                }

                @keyframes fade-pulse {
                    0%, 100% { opacity: 0.6; }
                    50% { opacity: 0.8; }
                }

                @keyframes slideInUp {
                    from {
                        opacity: 0;
                        transform: translateY(60px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                @keyframes fadeInScale {
                    from {
                        opacity: 0;
                        transform: scale(0.8);
                    }
                    to {
                        opacity: 1;
                        transform: scale(1);
                    }
                }

                @keyframes iconBounce {
                    0%, 20%, 50%, 80%, 100% {
                        transform: translateY(0);
                    }
                    40% {
                        transform: translateY(-10px);
                    }
                    60% {
                        transform: translateY(-5px);
                    }
                }

                @keyframes modalFadeIn {
                    from {
                        opacity: 0;
                        transform: scale(0.95);
                    }
                    to {
                        opacity: 1;
                        transform: scale(1);
                    }
                }

                .float-gentle { animation: gentle-float 6s ease-in-out infinite; }
                .slow-spin { animation: slow-spin 30s linear infinite; }
                .fade-pulse { animation: fade-pulse 4s ease-in-out infinite; }

                .service-card {
                    opacity: 0;
                    animation: slideInUp 0.8s ease-out forwards;
                    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .service-card:nth-child(1) { animation-delay: 0.1s; }
                .service-card:nth-child(2) { animation-delay: 0.2s; }
                .service-card:nth-child(3) { animation-delay: 0.3s; }
                .service-card:nth-child(4) { animation-delay: 0.4s; }
                .service-card:nth-child(5) { animation-delay: 0.5s; }
                .service-card:nth-child(6) { animation-delay: 0.6s; }

                .service-card:hover {
                    transform: translateY(-12px) rotateX(5deg);
                    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                }

                .service-card:hover .service-image {
                    transform: scale(1.08);
                }

                .service-card:hover .service-icon {
                    transform: scale(1.1);
                    box-shadow: 0 0 30px rgba(245, 158, 11, 0.4);
                    animation: iconBounce 1s ease-in-out;
                }

                .service-card:hover .service-title {
                    color: #d97706;
                    transform: translateX(5px);
                }

                .service-card:hover .learn-more-arrow {
                    transform: translateX(8px);
                }

                .cta-card {
                    opacity: 0;
                    animation: fadeInScale 1s ease-out 0.8s forwards;
                }

                .section-header {
                    opacity: 0;
                    animation: slideInUp 0.8s ease-out forwards;
                }

                .section-badge {
                    opacity: 0;
                    animation: fadeInScale 0.6s ease-out 0.2s forwards;
                }

                .section-title {
                    opacity: 0;
                    animation: slideInUp 0.8s ease-out 0.3s forwards;
                }

                .section-description {
                    opacity: 0;
                    animation: slideInUp 0.8s ease-out 0.4s forwards;
                }

                /* Modal Animations */
                .modal-backdrop {
                    backdrop-filter: blur(4px);
                }

                .modal-content {
                    animation: modalFadeIn 0.3s ease-out;
                }

                /* Hover effects for content */
                .service-title {
                    transition: all 0.3s ease-in-out;
                }

                .service-description {
                    transition: opacity 0.3s ease-in-out;
                }

                .service-card:hover .service-description {
                    opacity: 0.8;
                }

                .learn-more-link:hover .learn-more-arrow {
                    animation: iconBounce 0.6s ease-in-out;
                }

                /* Loading state for images */
                .service-image {
                    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
                    background: linear-gradient(45deg, #f3f4f6, #e5e7eb);
                }

                /* Perspective for 3D effect */
                .services-grid {
                    perspective: 1000px;
                }

                /* Custom scrollbar for modal */
                .modal-scroll::-webkit-scrollbar {
                    width: 4px;
                }

                .modal-scroll::-webkit-scrollbar-track {
                    background: #f1f5f9;
                    border-radius: 2px;
                }

                .modal-scroll::-webkit-scrollbar-thumb {
                    background: #cbd5e0;
                    border-radius: 2px;
                }

                .modal-scroll::-webkit-scrollbar-thumb:hover {
                    background: #94a3b8;
                }
            </style>
        @endpush

        {{-- Simple Background Elements --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-[-10%] left-[-5%] w-72 h-72 rounded-full bg-amber-100/50 float-gentle"></div>
            <div class="absolute bottom-[-15%] right-[-10%] w-96 h-96 rounded-full bg-yellow-100/40 slow-spin"></div>
            <div class="absolute top-[30%] left-[40%] w-64 h-64 rounded-full bg-amber-50/60 fade-pulse"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            {{-- Section Header --}}
            <div class="section-header text-center max-w-3xl mx-auto mb-16">
            <span class="section-badge inline-block bg-amber-100 text-amber-800 text-xs font-semibold tracking-wider uppercase px-4 py-2 rounded-full mb-4">
                {{ __('Our Services') }}
            </span>
                <h2 class="section-title text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    {{ __('What We') }} <span class="text-amber-600">{{ __('Offer') }}</span>
                </h2>
                <p class="section-description text-xl text-gray-600 leading-relaxed">
                    {{ __('Professional archiving solutions designed to streamline your business operations') }}
                </p>
            </div>

            {{-- Services Grid --}}
            <div class="services-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Document Storage --}}
                <div class="service-card bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="relative h-48 overflow-hidden">
                        <img src="assets/images/services-1.jpg"
                             alt="Document Storage"
                             class="service-image w-full h-full object-cover"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>

                    <div class="p-8">
                        <div class="service-icon w-14 h-14 rounded-xl bg-amber-400 flex items-center justify-center mb-6 transition-all duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>
                        </div>

                        <h3 class="service-title text-2xl font-bold text-gray-900 mb-4">
                            {{ __('Document Storage') }}
                        </h3>

                        <p class="service-description text-gray-600 mb-6 leading-relaxed">
                            {{ __('Active file management and long-term box storage, keeping records secure and accessible.') }}
                        </p>

                        <button onclick="openModal('storageModal')" class="learn-more-link inline-flex items-center text-amber-600 font-semibold hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="learn-more-arrow w-5 h-5 ml-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Document Management --}}
                <div class="service-card bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="relative h-48 overflow-hidden">
                        <img src="assets/images/services-2.jpg"
                             alt="Document Management"
                             class="service-image w-full h-full object-cover"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>

                    <div class="p-8">
                        <div class="service-icon w-14 h-14 rounded-xl bg-amber-400 flex items-center justify-center mb-6 transition-all duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542" />
                            </svg>
                        </div>

                        <h3 class="service-title text-2xl font-bold text-gray-900 mb-4">
                            {{ __('Document Management') }}
                        </h3>

                        <p class="service-description text-gray-600 mb-6 leading-relaxed">
                            {{ __('Quick access to business information, resource utilisation, and cost-effectiveness.') }}
                        </p>

                        <button onclick="openModal('managementModal')" class="learn-more-link inline-flex items-center text-amber-600 font-semibold hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="learn-more-arrow w-5 h-5 ml-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Digital Archive --}}
                <div class="service-card bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="relative h-48 overflow-hidden">
                        <img src="assets/images/services-3.jpg"
                             alt="Digital Archive"
                             class="service-image w-full h-full object-cover"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>

                    <div class="p-8">
                        <div class="service-icon w-14 h-14 rounded-xl bg-amber-400 flex items-center justify-center mb-6 transition-all duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 16.5V9.75m0 0l-3.75 3.75M12 9.75l3.75 3.75M6.75 12a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0z" />
                            </svg>
                        </div>

                        <h3 class="service-title text-2xl font-bold text-gray-900 mb-4">
                            {{ __('Digital Archive - EDMS') }}
                        </h3>

                        <p class="service-description text-gray-600 mb-6 leading-relaxed">
                            {{ __('Access your documents digitally from any device, 24/7, from anywhere.') }}
                        </p>

                        <button onclick="openModal('digitalModal')" class="learn-more-link inline-flex items-center text-amber-600 font-semibold hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="learn-more-arrow w-5 h-5 ml-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Document Destruction --}}
                <div class="service-card bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="relative h-48 overflow-hidden">
                        <img src="assets/images/services-4.jpg"
                             alt="Document Destruction"
                             class="service-image w-full h-full object-cover"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>

                    <div class="p-8">
                        <div class="service-icon w-14 h-14 rounded-xl bg-amber-400 flex items-center justify-center mb-6 transition-all duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622" />
                            </svg>
                        </div>

                        <h3 class="service-title text-2xl font-bold text-gray-900 mb-4">
                            {{ __('Document Destruction') }}
                        </h3>

                        <p class="service-description text-gray-600 mb-6 leading-relaxed">
                            {{ __('Secure, confidential destruction with a certificate for your records.') }}
                        </p>

                        <button onclick="openModal('destructionModal')" class="learn-more-link inline-flex items-center text-amber-600 font-semibold hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="learn-more-arrow w-5 h-5 ml-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Storage & Logistics --}}
                <div class="service-card bg-white rounded-2xl overflow-hidden shadow-lg">
                    <div class="relative h-48 overflow-hidden">
                        <img src="assets/images/services-5.jpg"
                             alt="Storage & Logistics"
                             class="service-image w-full h-full object-cover"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>

                    <div class="p-8">
                        <div class="service-icon w-14 h-14 rounded-xl bg-amber-400 flex items-center justify-center mb-6 transition-all duration-300">
                            <svg class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25" />
                            </svg>
                        </div>

                        <h3 class="service-title text-2xl font-bold text-gray-900 mb-4">
                            {{ __('Storage & Logistics') }}
                        </h3>

                        <p class="service-description text-gray-600 mb-6 leading-relaxed">
                            {{ __('Warehousing, transportation, distribution, and inventory management.') }}
                        </p>

                        <button onclick="openModal('logisticsModal')" class="learn-more-link inline-flex items-center text-amber-600 font-semibold hover:text-amber-700 transition-colors duration-300">
                            {{ __('Learn More') }}
                            <svg class="learn-more-arrow w-5 h-5 ml-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Call to Action Card --}}
                <div class="cta-card bg-gradient-to-br from-amber-400 to-yellow-500 rounded-2xl p-8 flex flex-col items-center justify-center text-center shadow-lg">
                    <div class="w-16 h-16 rounded-xl bg-white/20 flex items-center justify-center mb-6 transition-all duration-300 hover:scale-110">
                        <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                        </svg>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-4">
                        {{ __('Have a Specific Need?') }}
                    </h3>

                    <p class="text-white/90 mb-8 leading-relaxed">
                        {{ __('We offer tailored solutions. Let\'s discuss how we can help your business.') }}
                    </p>

                    <a href="#" class="inline-block bg-white text-amber-600 font-bold py-3 px-8 rounded-xl hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                        {{ __('Contact Us') }}
                    </a>
                </div>
            </div>
        </div>

        {{-- Tailwind CSS Modals --}}

        {{-- Document Storage Modal --}}
        <div id="storageModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
            <div class="flex min-h-screen items-center justify-center p-4">
                <div class="modal-backdrop fixed inset-0 bg-gray-900/75 transition-opacity" onclick="closeModal('storageModal')"></div>
                <div class="modal-content relative w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white shadow-2xl transition-all">
                    {{-- Header --}}
                    <div class="flex items-center justify-between border-b border-gray-200 bg-slate-50 px-6 py-4">
                        <h3 class="text-xl font-bold text-gray-900">{{ __('Document Storage Solutions') }}</h3>
                        <button onclick="closeModal('storageModal')" class="rounded-lg p-2 text-gray-400 hover:bg-gray-200 hover:text-gray-600 transition-colors">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    {{-- Body --}}
                    <div class="modal-scroll max-h-96 overflow-y-auto px-6 py-6">
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <p class="text-lg text-gray-700 font-medium">{{ __('Active file management and long-term box storage, keeping records secure and accessible.') }}</p>
                                <p class="text-gray-600">{{ __('Top Archive offers several document storage solutions depending on the needs of your business.') }}</p>
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

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572z" />
                                    </svg>
                                    {{ __('On-site Restructuring and Improvement Projects') }}
                                </h4>
                                <p class="text-gray-600 mb-3">{{ __('We provide comprehensive records management solutions including:') }}</p>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Setting up in-house archives from scratch') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Support restructuring existing records systems') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Expert assessment of current challenges') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Tailored solutions for secure preservation') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Space utilization optimization') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Future expansion planning') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                    {{ __('Records Storage Boxes') }}
                                </h4>
                                <p class="text-gray-600">{{ __('Top Archive utilises industry-standard archive boxes and cutting-edge barcoding technology for document storage, ensuring efficient tracking and inventory management of records. Benefit from our high-quality solutions to meet industry requirements and optimise your record management processes.') }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
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

        {{-- Document Management Modal --}}
        <div id="managementModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
            <div class="flex min-h-screen items-center justify-center p-4">
                <div class="modal-backdrop fixed inset-0 bg-gray-900/75 transition-opacity" onclick="closeModal('managementModal')"></div>
                <div class="modal-content relative w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white shadow-2xl transition-all">
                    {{-- Header --}}
                    <div class="flex items-center justify-between border-b border-gray-200 bg-slate-50 px-6 py-4">
                        <h3 class="text-xl font-bold text-gray-900">{{ __('Document Management Services') }}</h3>
                        <button onclick="closeModal('managementModal')" class="rounded-lg p-2 text-gray-400 hover:bg-gray-200 hover:text-gray-600 transition-colors">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    {{-- Body --}}
                    <div class="modal-scroll max-h-96 overflow-y-auto px-6 py-6">
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <p class="text-lg text-gray-700 font-medium">{{ __('We offer quick access to your business information, resource utilisation, information control and cost-effectiveness.') }}</p>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                    {{ __('Your Trusted Partner') }}
                                </h4>
                                <p class="text-gray-600">{{ __('Top Archive provides complete records management, disaster recovery support, and cost-saving consulting. Stay compliant, protect critical data, and ensure business continuity with our trusted solutions.') }}</p>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    {{ __('Archive Policy Development') }}
                                </h4>
                                <p class="text-gray-600">{{ __('We review your records management processes to develop clear policies, manuals, and strategies tailored to your institution\'s guidelines. We also support change management to help staff adopt improved best practices.') }}</p>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                    {{ __('Training Programs') }}
                                </h4>
                                <p class="text-gray-600 mb-3">{{ __('Our expert-led training covers:') }}</p>
                                <ul class="space-y-2 mb-3">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Best practices in document management') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Digital transformation strategies') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Legal requirements and compliance') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Disaster planning and recovery') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Information security protocols') }}</span>
                                    </li>
                                </ul>
                                <p class="text-gray-600">{{ __('Participants receive certification upon completion, helping your staff manage information assets effectively and securely.') }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
                    <div class="border-t border-gray-200 bg-slate-50 px-6 py-4">
                        <div class="flex justify-end">
                            <button onclick="closeModal('managementModal')" class="rounded-lg bg-gray-200 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-300 transition-colors">
                                {{ __('Close') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Digital Archive Modal --}}
        <div id="digitalModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
            <div class="flex min-h-screen items-center justify-center p-4">
                <div class="modal-backdrop fixed inset-0 bg-gray-900/75 transition-opacity" onclick="closeModal('digitalModal')"></div>
                <div class="modal-content relative w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white shadow-2xl transition-all">
                    {{-- Header --}}
                    <div class="flex items-center justify-between border-b border-gray-200 bg-slate-50 px-6 py-4">
                        <h3 class="text-xl font-bold text-gray-900">{{ __('Digital Archive Solutions - EDMS') }}</h3>
                        <button onclick="closeModal('digitalModal')" class="rounded-lg p-2 text-gray-400 hover:bg-gray-200 hover:text-gray-600 transition-colors">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    {{-- Body --}}
                    <div class="modal-scroll max-h-96 overflow-y-auto px-6 py-6">
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <p class="text-lg text-gray-700 font-medium">{{ __('Access your documents digitally from any device, 24/7, from anywhere.') }}</p>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                    </svg>
                                    {{ __('Scanning/Digitization') }}
                                </h4>
                                <p class="text-gray-600">{{ __('Outsource your document digitization needs to Top Archive, a leader in converting documents into digital formats using advanced scanners and professional software for reliable and efficient service.') }}</p>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ __('What is document digitization?') }}
                                </h4>
                                <p class="text-gray-600">{{ __('Digitizing converts paper documents into digital formats, preserving texts, images, audio, video, and more. With digitized files, sharing is seamless across any location using advanced data management software.') }}</p>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ __('Benefits of Digital Documents') }}
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Easy to preserve') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Easy to store, retrieve and update') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Easy to clone') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Easy to share') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    {{ __('Document Digitizing Process') }}
                                </h4>
                                <ol class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1 font-semibold">1.</span>
                                        <span class="text-gray-600">{{ __('Needs assessment') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1 font-semibold">2.</span>
                                        <span class="text-gray-600">{{ __('Collecting and aligning documents') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1 font-semibold">3.</span>
                                        <span class="text-gray-600">{{ __('Scanning the documents') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1 font-semibold">4.</span>
                                        <span class="text-gray-600">{{ __('Transferring to a digital format') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1 font-semibold">5.</span>
                                        <span class="text-gray-600">{{ __('Indexing the documents') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1 font-semibold">6.</span>
                                        <span class="text-gray-600">{{ __('Organizing the documents') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1 font-semibold">7.</span>
                                        <span class="text-gray-600">{{ __('Uploading the digitized documents') }}</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
                    <div class="border-t border-gray-200 bg-slate-50 px-6 py-4">
                        <div class="flex justify-end">
                            <button onclick="closeModal('digitalModal')" class="rounded-lg bg-gray-200 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-300 transition-colors">
                                {{ __('Close') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Document Destruction Modal --}}
        <div id="destructionModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
            <div class="flex min-h-screen items-center justify-center p-4">
                <div class="modal-backdrop fixed inset-0 bg-gray-900/75 transition-opacity" onclick="closeModal('destructionModal')"></div>
                <div class="modal-content relative w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white shadow-2xl transition-all">
                    {{-- Header --}}
                    <div class="flex items-center justify-between border-b border-gray-200 bg-slate-50 px-6 py-4">
                        <h3 class="text-xl font-bold text-gray-900">{{ __('Document Destruction Services') }}</h3>
                        <button onclick="closeModal('destructionModal')" class="rounded-lg p-2 text-gray-400 hover:bg-gray-200 hover:text-gray-600 transition-colors">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    {{-- Body --}}
                    <div class="modal-scroll max-h-96 overflow-y-auto px-6 py-6">
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <p class="text-lg text-gray-700 font-medium">{{ __('Top Archive provides secure, confidential, and cost-effective document destruction with a certificate of destruction for your records.') }}</p>
                                <div class="rounded-lg bg-blue-50 border border-blue-200 p-4">
                                    <div class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <p class="text-blue-800 text-sm">{{ __('Document destruction is only carried out upon the client\'s request and based on the client\'s records retention policy.') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    {{ __('Convenient, cost-effective and confidential') }}
                                </h4>
                                <p class="text-gray-600 mb-3">{{ __('Top Archive ensures secure document destruction with:') }}</p>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Reliable shredding services') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Trained staff') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Accountability through documented chain of custody') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Eco-friendly disposal methods') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    {{ __('Unrecoverable and recyclable') }}
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('All materials securely destroyed to an unrecoverable state') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Shredded paper recycled for environmental sustainability') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Certificate of destruction provided for your records') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
                    <div class="border-t border-gray-200 bg-slate-50 px-6 py-4">
                        <div class="flex justify-end">
                            <button onclick="closeModal('destructionModal')" class="rounded-lg bg-gray-200 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-300 transition-colors">
                                {{ __('Close') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Storage & Logistics Modal --}}
        <div id="logisticsModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
            <div class="flex min-h-screen items-center justify-center p-4">
                <div class="modal-backdrop fixed inset-0 bg-gray-900/75 transition-opacity" onclick="closeModal('logisticsModal')"></div>
                <div class="modal-content relative w-full max-w-4xl transform overflow-hidden rounded-2xl bg-white shadow-2xl transition-all">
                    {{-- Header --}}
                    <div class="flex items-center justify-between border-b border-gray-200 bg-slate-50 px-6 py-4">
                        <h3 class="text-xl font-bold text-gray-900">{{ __('Storage & Logistics Solutions') }}</h3>
                        <button onclick="closeModal('logisticsModal')" class="rounded-lg p-2 text-gray-400 hover:bg-gray-200 hover:text-gray-600 transition-colors">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    {{-- Body --}}
                    <div class="modal-scroll max-h-96 overflow-y-auto px-6 py-6">
                        <div class="space-y-6">
                            <div class="space-y-4">
                                <p class="text-lg text-gray-700 font-medium">{{ __('Comprehensive storage and logistics solutions for your business needs.') }}</p>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                    {{ __('Our Services') }}
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Warehousing') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Transportation') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Loading and unloading') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Door-to-door distribution') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Inventory management') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Packing and re-branding') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Clearing and forwarding') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    {{ __('Cost Optimization') }}
                                </h4>
                                <p class="text-gray-600 mb-3">{{ __('We reduce operational costs by:') }}</p>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Optimizing inventory management with FIFO/LIFO methods') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Maintaining ideal stock levels') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Closely monitoring valuable inventory') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                    {{ __('Advanced Solutions') }}
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Enhanced security measures') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Streamlined inventory management') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Comprehensive tracking systems') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="rounded-lg bg-slate-50 border border-gray-200 p-4 hover:shadow-md transition-shadow">
                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-3">
                                    <svg class="w-5 h-5 text-amber-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9" />
                                    </svg>
                                    {{ __('Nationwide Coverage') }}
                                </h4>
                                <p class="text-gray-600 mb-3">{{ __('Our comprehensive service includes:') }}</p>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Collection and packing') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Barcoding and inventory management') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Dispatching to end clients') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Service coverage beyond city limits') }}</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-amber-600 mr-2 mt-1">→</span>
                                        <span class="text-gray-600">{{ __('Nationwide logistics network') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Footer --}}
                    <div class="border-t border-gray-200 bg-slate-50 px-6 py-4">
                        <div class="flex justify-end">
                            <button onclick="closeModal('logisticsModal')" class="rounded-lg bg-gray-200 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-300 transition-colors">
                                {{ __('Close') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- JavaScript for Modal Functionality --}}
    <script>
        // Wait for DOM to be ready
        document.addEventListener('DOMContentLoaded', function() {
            // Define modal functions globally
            window.openModal = function(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';

                    // Focus trap for accessibility
                    const focusableElements = modal.querySelectorAll(
                        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
                    );
                    const firstFocusableElement = focusableElements[0];
                    const lastFocusableElement = focusableElements[focusableElements.length - 1];

                    if (firstFocusableElement) {
                        setTimeout(() => firstFocusableElement.focus(), 100);
                    }

                    // Handle tab key for focus trap
                    const handleTabKey = function(e) {
                        if (e.key === 'Tab') {
                            if (e.shiftKey) {
                                if (document.activeElement === firstFocusableElement) {
                                    lastFocusableElement.focus();
                                    e.preventDefault();
                                }
                            } else {
                                if (document.activeElement === lastFocusableElement) {
                                    firstFocusableElement.focus();
                                    e.preventDefault();
                                }
                            }
                        }
                    };

                    modal.addEventListener('keydown', handleTabKey);

                    // Store the handler so we can remove it later
                    modal._tabKeyHandler = handleTabKey;
                }
            };

            window.closeModal = function(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';

                    // Remove the tab key handler
                    if (modal._tabKeyHandler) {
                        modal.removeEventListener('keydown', modal._tabKeyHandler);
                        delete modal._tabKeyHandler;
                    }
                }
            };

            // Close modal when pressing Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    const openModals = document.querySelectorAll('[id$="Modal"]:not(.hidden)');
                    openModals.forEach(modal => {
                        window.closeModal(modal.id);
                    });
                }
            });

            // Close modal when clicking backdrop
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('modal-backdrop')) {
                    const modal = e.target.closest('[id$="Modal"]');
                    if (modal) {
                        window.closeModal(modal.id);
                    }
                }
            });
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    @include('partials.footer')
@endsection