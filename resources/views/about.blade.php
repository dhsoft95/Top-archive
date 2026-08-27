@extends('layouts.app')
@section('title', 'Top Archive - About')
@section('content')
    {{--    @include('includes.nav')--}}

    <div class="min-h-screen bg-white">
        <!-- Hero Story Section -->
        <section class="relative pt-32 pb-16 lg:pt-40 lg:pb-20 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
            <!-- Background pattern -->
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400/20 via-transparent to-yellow-400/10"></div>
                <div class="absolute top-0 left-1/4 w-64 h-64 bg-yellow-400/20 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-yellow-400/15 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-yellow-400/10 rounded-full blur-3xl"></div>
            </div>

            <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left content -->
                    <div class="space-y-8">
                        <div class="inline-flex items-center gap-2 bg-yellow-400/20 text-yellow-400 px-4 py-2 rounded-full text-sm font-medium">
                            <i class="fas fa-history"></i>
                            <span>Our History</span>
                        </div>

                        <h1 class="text-4xl lg:text-5xl font-bold leading-tight">
                            30+ Years of Excellence in
                            <span class="text-yellow-400">Document Management</span>
                        </h1>

                        <p class="text-lg lg:text-xl text-gray-300 leading-relaxed" style="text-align: justify">
                            Top Archive excels in Africa's Physical Archive, record management, and archiving field. With 30 years of experience and a dedicated skilled team, we serve major clients in Ghana, Nigeria and Tanzania. Count on us for top-notch archive storage and information management solutions.
                        </p>
                    </div>

                    <!-- Right content - Video -->
                    <div class="relative">
                        <div class="relative h-80 lg:h-96 rounded-2xl overflow-hidden shadow-2xl group cursor-pointer bg-gray-800" onclick="openVideoModal()">
                            <img src="{{ asset('assets/images/man-works-warehouse.png') }}" alt="Warehouse Storage" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                            <!-- Play button -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-yellow-400/30 rounded-full animate-ping scale-150"></div>
                                    <div class="w-16 h-16 bg-yellow-400 hover:bg-yellow-300 rounded-full flex items-center justify-center transition-all duration-300 group-hover:scale-110 shadow-xl">
                                        <div class="w-0 h-0 border-l-[12px] border-l-gray-900 border-t-[8px] border-t-transparent border-b-[8px] border-b-transparent ml-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Sections -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
                <div class="grid lg:grid-cols-2 gap-16">

                    <!-- Who We Are -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <div class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-medium">
                                <i class="fas fa-users"></i>
                                <span>Who we are</span>
                            </div>
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                                Who We Are
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Our goal is to empower businesses in the digital age with top-notch record storage and information management solutions. Our top-notch standard facilities ensure organized storage and easy access to important documents, giving your business a competitive edge and boosting productivity. We cater to businesses of all sizes.
                        </p>
                    </div>

                    <!-- What We Do -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <div class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-medium">
                                <i class="fas fa-cogs"></i>
                                <span>What we do</span>
                            </div>
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                                What We Do
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed" style="text-align: justify">
                            We optimise your office space and streamline document management. Our skilled team organizes, catalogues, stores and digitizes documents using advanced electronic document management systems (EDMS) and electronic records management systems (ERMS), to give you easy access to your records.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission, Vision & Values Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
                <div class="grid lg:grid-cols-2 gap-16 mb-16">

                    <!-- Mission -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <div class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-medium">
                                <i class="fas fa-bullseye"></i>
                                <span>Our Mission</span>
                            </div>
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                                Mission
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed" style="text-align: justify">
                            To satisfy all our customers and other stakeholders and interested parties whenever possible, meeting and exceeding their expectations.
                        </p>
                    </div>

                    <!-- Vision -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <div class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-medium">
                                <i class="fas fa-eye"></i>
                                <span>Our Vision</span>
                            </div>
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                                Vision
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed" style="text-align: justify">
                            To be the leading Records Management company and solutions provider in East and Central Africa.
                        </p>
                    </div>
                </div>

                <!-- Values -->
                <div class="text-center space-y-8">
                    <div class="space-y-4">
                        <div class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-medium mx-auto">
                            <i class="fas fa-star"></i>
                            <span>Our Values</span>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                            Values
                        </h2>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
                        @foreach(['Integrity', 'Reliability', 'Punctuality', 'Confidentiality'] as $value)
                            <div class="bg-white border border-gray-200 rounded-2xl p-6">
                                <div class="w-12 h-12 bg-yellow-100 text-yellow-700 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-check"></i>
                                </div>
                                <p class="text-gray-900 font-semibold">{{ $value }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Clients Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl text-center">
                <div class="space-y-8">
                    <div class="space-y-4">
                        <div class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-medium mx-auto">
                            <i class="fas fa-handshake"></i>
                            <span>Our Clients</span>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                            Our Clients
                        </h2>
                    </div>

                    <p class="text-lg lg:text-xl text-gray-600 leading-relaxed max-w-4xl mx-auto" style="text-align: center">
                        Top Archive serves a diverse clientele, including multinational corporations in sectors like banking, insurance, oil & gas, telecom, shipping, and government institutions. We've acquired extensive technical and legal expertise in managing records across various industries, offering tailored solutions to meet each client's specific needs.
                    </p>
                </div>
            </div>
        </section>

        <!-- Management Team Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
                <div class="text-center space-y-4 mb-12">
                    <div class="inline-flex items-center gap-2 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-medium mx-auto">
                        <i class="fas fa-user-tie"></i>
                        <span>Our Team</span>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                        Management Team
                    </h2>
                </div>

                <div class="swiper teamSwiper">
                    <div class="swiper-wrapper pb-12">
                        @php
                            $team = [
                                ['name' => 'Paul Muhato', 'title' => 'Managing Director', 'image' => 'assets/images/team/paul-muhato.png'],
                                ['name' => 'Sophia Tendeka', 'title' => 'Operations Manager', 'image' => 'assets/images/team/sophia-tendek.jpg'],
                                ['name' => 'Jenory Mandole', 'title' => 'Cataloguing Manager', 'image' => 'assets/images/team/jenory-mandole.jpg'],
                                ['name' => 'Edson Nyamwihura', 'title' => 'Business Development Executive', 'image' => 'assets/images/team/edson-nyamwihura.png'],
                                ['name' => 'Israel Mwakilembe', 'title' => 'Finance Manager', 'image' => 'assets/images/team/israel-mwakilembe.jpg'],
                            ];
                        @endphp

                        @foreach($team as $member)
                            <div class="swiper-slide h-auto">
                                <div class="bg-white rounded-2xl overflow-hidden border border-gray-200 h-full">
                                    <div class="aspect-[4/5] overflow-hidden bg-gray-100">
                                        <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-6 text-center">
                                        <p class="text-lg font-bold text-gray-900">{{ $member['name'] }}</p>
                                        <p class="text-sm text-gray-600 mt-1">{{ $member['title'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{--                    <div class="swiper-pagination"></div>--}}

                    <div class="swiper-button-prev !text-yellow-600"></div>
                    <div class="swiper-button-next !text-yellow-600"></div>
                </div>
            </div>
        </section>
    </div>

    <!-- Include CTA and Footer -->
    @include('partials.cta')
    @include('partials.footer')

    <!-- Video Modal -->
    <div id="videoModal" class="fixed inset-0 bg-black/90 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 invisible transition-all duration-300">
        <div class="relative bg-black rounded-2xl overflow-hidden max-w-5xl w-full mx-4 transform scale-95 transition-transform duration-300 shadow-2xl">
            <button onclick="closeVideoModal()" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/10 hover:bg-white/20 text-white rounded-full flex items-center justify-center transition-all duration-300">
                <i class="fas fa-times"></i>
            </button>
            <div class="relative w-full aspect-video">
                <video id="localVideo" class="w-full h-full" controls playsinline>
                    <source src="{{ asset('assets/TOP_ARCHIVE.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>

    <script>
        function openVideoModal() {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('localVideo');

            modal.classList.remove('invisible', 'opacity-0');
            modal.querySelector('.bg-black').classList.remove('scale-95');
            modal.querySelector('.bg-black').classList.add('scale-100');
            document.body.classList.add('overflow-hidden');

            video.play();
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('localVideo');

            video.pause();
            video.currentTime = 0;
            modal.classList.add('opacity-0');
            modal.querySelector('.bg-black').classList.remove('scale-100');
            modal.querySelector('.bg-black').classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('invisible');
                document.body.classList.remove('overflow-hidden');
            }, 300);
        }

        document.getElementById('videoModal').addEventListener('click', function(e) {
            if (e.target === this) closeVideoModal();
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeVideoModal();
        });

        new Swiper('.teamSwiper', {
            slidesPerView: 1.2,
            spaceBetween: 24,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 24 },
                1024: { slidesPerView: 4, spaceBetween: 24 },
            },
        });
    </script>
@endsection