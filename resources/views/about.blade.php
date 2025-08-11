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
                            25 Years of Excellence in
                            <span class="text-yellow-400">Document Management</span>
                        </h1>

                        <p class="text-lg lg:text-xl text-gray-300 leading-relaxed">
                            Top Archive is a leading provider in Africa's document storage, record management, and archiving industry. With 25 years of experience and a dedicated, skilled team, we serve major clients in Ghana, Nigeria, Tanzania, and Uganda. Trust us for comprehensive and superior solutions in archive storage and information management
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
                            <div class="inline-flex items-center gap-2 bg-yellow-400/10 text-yellow-600 px-4 py-2 rounded-full text-sm font-medium">
                                <i class="fas fa-users"></i>
                                <span>Who we are</span>
                            </div>
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                                Who We Are
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Our principle is to empower Businesses in the Digital Age with World-Class Record Storage and Information Management Solutions. Our high-standard, world-class facilities ensure streamlined storage and management of records, enabling quick access to vital business documents and information. Gain a competitive edge and enhance productivity with our comprehensive solutions for small, medium, and large-scale businesses.
                        </p>
                    </div>

                    <!-- What We Do -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <div class="inline-flex items-center gap-2 bg-yellow-400/10 text-yellow-600 px-4 py-2 rounded-full text-sm font-medium">
                                <i class="fas fa-cogs"></i>
                                <span>What we do</span>
                            </div>
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                                What We Do
                            </h2>
                        </div>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Optimise your office space and streamline document management. Our skilled team organises, catalogues, stores, and digitises documents using advanced electronic document management systems (EDMS)  and records management systems (ERMS). Access and retrieve records easily on your computer, supporting your daily business needs. Don't wait; take control of your documents today.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Clients Section -->
        <section class="py-16 bg-gradient-to-b from-gray-50 to-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl text-center">
                <div class="space-y-8">
                    <div class="space-y-4">
                        <div class="inline-flex items-center gap-2 bg-yellow-400/10 text-yellow-600 px-4 py-2 rounded-full text-sm font-medium mx-auto">
                            <i class="fas fa-handshake"></i>
                            <span>Our Clients</span>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                            Our Clients
                        </h2>
                    </div>

                    <p class="text-lg lg:text-xl text-gray-600 leading-relaxed max-w-4xl mx-auto">
                        Top Archive's client list includes multinational companies spanning a range of industries, including banking, insurance, oil & gas, telecom, shipping, and major government institutions. Our company has gained invaluable technical and legal expertise in managing records/information from every kind of industry, alongside our ability to respond accurately with solutions customised to the client's needs.
                    </p>
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
                <iframe id="youtubeVideo" src="" class="w-full h-full" title="YouTube video" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <script>
        function openVideoModal() {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('youtubeVideo');

            // Replace with your actual YouTube video URL
            video.src = 'https://www.youtube.com/embed/YOUR_VIDEO_ID?autoplay=1';

            modal.classList.remove('invisible', 'opacity-0');
            modal.querySelector('.bg-black').classList.remove('scale-95');
            modal.querySelector('.bg-black').classList.add('scale-100');
            document.body.classList.add('overflow-hidden');
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('youtubeVideo');

            video.src = '';
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
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

@endsection