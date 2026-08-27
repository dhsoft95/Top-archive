<div class="relative w-full h-[100svh] min-h-[560px] sm:min-h-[650px] lg:h-[92vh] lg:min-h-[750px] overflow-hidden" x-data="heroSlider()" x-init="init()">

    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div class="absolute inset-0 transition-opacity duration-700"
             :class="currentSlide === index ? 'opacity-100 z-10' : 'opacity-0 z-0'">

            <div class="absolute inset-0 bg-cover bg-center" :style="`background-image: url('${slide.image}')`"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/10"></div>
            <div class="absolute inset-0 bg-black/10"></div>


            <div class="relative h-full flex flex-col items-start justify-center text-left text-white px-6 sm:px-10 lg:px-20">
                <div class="flex flex-col items-start space-y-4 sm:space-y-6 max-w-xl">

                    <div class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium border rounded-full backdrop-blur-sm"
                         :class="slide.badgeClass">
                        <span x-html="slide.badgeIcon" class="w-3.5 h-3.5 sm:w-4 sm:h-4 mr-2 [&>svg]:w-full [&>svg]:h-full"></span>
                        <span x-text="slide.badge"></span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight [text-wrap:balance]"
                        style="text-shadow: 2px 2px 8px rgba(0,0,0,0.7);"
                        x-text="slide.title"></h1>

                    <p class="text-base sm:text-lg text-white/90 max-w-md sm:max-w-xl [text-wrap:balance]"
                       style="text-shadow: 1px 1px 4px rgba(0,0,0,0.7);"
                       x-text="slide.description"></p>

                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 w-full sm:w-auto">
                        <button class="group flex items-center justify-center w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 text-sm sm:text-base font-semibold rounded-lg bg-amber-400 hover:bg-amber-500 text-black transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <span x-text="slide.primaryCta"></span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <button x-show="slide.secondaryCta"
                                class="w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 text-sm sm:text-base font-semibold rounded-lg border-2 border-white text-white bg-white/5 hover:bg-white hover:text-black transition-all duration-300 transform hover:scale-105 shadow-lg backdrop-blur-sm">
                            <span x-text="slide.secondaryCta"></span>
                        </button>
                    </div>

                    <!-- Slide 1 trust badges -->
                    <div x-show="index === 0" class="flex flex-wrap items-center justify-start gap-4 sm:gap-6 pt-2 sm:pt-4 text-white/80">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-check-circle text-amber-400"></i>
                            <span class="text-xs sm:text-sm font-medium">25+ Years Experience</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-map-marker-alt text-amber-400"></i>
                            <span class="text-xs sm:text-sm font-medium">4 Countries in Africa</span>
                        </div>
                    </div>

                    <!-- Slide 3 industries -->
                    <div x-show="index === 2" class="grid grid-cols-3 gap-4 sm:gap-8 pt-2 sm:pt-4 text-white/80">
                        <div class="text-left">
                            <div class="text-sm sm:text-lg font-bold text-amber-400">Banking</div>
                            <div class="text-xs sm:text-sm mt-1">Insurance</div>
                        </div>
                        <div class="text-left">
                            <div class="text-sm sm:text-lg font-bold text-amber-400">Oil &amp; Gas</div>
                            <div class="text-xs sm:text-sm mt-1">Telecom</div>
                        </div>
                        <div class="text-left">
                            <div class="text-sm sm:text-lg font-bold text-amber-400">Government</div>
                            <div class="text-xs sm:text-sm mt-1">Shipping</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </template>

    <!-- Navigation Arrows -->
    <button @click="previousSlide()"
            class="hidden sm:flex absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 lg:w-12 lg:h-12 items-center justify-center rounded-full bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-sm text-white transition-all duration-300 hover:scale-110">
        <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <button @click="nextSlide()"
            class="hidden sm:flex absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 lg:w-12 lg:h-12 items-center justify-center rounded-full bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-sm text-white transition-all duration-300 hover:scale-110">
        <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Dot Indicators -->
    <div class="absolute bottom-6 sm:bottom-8 left-1/2 -translate-x-1/2 z-20 flex items-center gap-2 sm:gap-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="goToSlide(index)"
                    class="transition-all duration-300"
                    :class="currentSlide === index ? 'w-8 sm:w-12 h-2.5 sm:h-3 bg-amber-400 rounded-full' : 'w-2.5 h-2.5 sm:w-3 sm:h-3 bg-white/40 hover:bg-white/60 rounded-full'">
            </button>
        </template>
    </div>

    <!-- Scroll Indicator -->
    <div class="hidden sm:block absolute bottom-20 left-1/2 -translate-x-1/2 text-white/60 animate-bounce transition-opacity duration-300"
         :class="currentSlide === 0 ? 'opacity-100' : 'opacity-0'">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</div>

<script>
    function heroSlider() {
        return {
            currentSlide: 0,
            intervalId: null,
            autoplayDelay: 9000,

            slides: [
                {
                    image: "{{ asset('assets/slider/slider01.png') }}",
                    badge: 'Professional Excellence',
                    badgeClass: 'bg-white/10 border-white/20',
                    badgeIcon: '<svg fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>',
                    title: "{{ __('messages.hero_title') }}",
                    description: "{{ __('messages.hero_description') }}",
                    primaryCta: "{{ __('messages.work_with_us') }}",
                    secondaryCta: "{{ __('messages.get_assessment') }}",
                },
                {
                    image: "{{ asset('assets/slider/slider01.png') }}",
                    badge: 'Who We Are',
                    badgeClass: 'bg-amber-400/20 border-amber-400/40 text-amber-400',
                    badgeIcon: '<svg fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>',
                    title: 'Empowering Businesses in the Digital Age',
                    description: 'Our goal is to empower businesses with top-notch record storage and information management solutions. Our high-standard facilities ensure organized storage and easy access to important documents, giving your business a competitive edge.',
                    primaryCta: 'Explore Solutions',
                    secondaryCta: 'Our Services',
                },
                {
                    image: "{{ asset('assets/slider/digital.jpg') }}",
                    badge: 'Our Clients',
                    badgeClass: 'bg-blue-400/20 border-blue-400/40 text-blue-400',
                    badgeIcon: '<svg fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>',
                    title: 'Trusted by Leading Organizations',
                    description: 'Top Archive serves multinational corporations in banking, insurance, oil & gas, telecom, shipping, and government institutions. We offer tailored solutions with extensive technical and legal expertise.',
                    primaryCta: 'Start Your Journey',
                    secondaryCta: null,
                },
            ],

            init() {
                this.startAutoplay();
            },

            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                this.resetAutoplay();
            },

            previousSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                this.resetAutoplay();
            },

            goToSlide(index) {
                this.currentSlide = index;
                this.resetAutoplay();
            },

            startAutoplay() {
                this.intervalId = setInterval(() => this.nextSlide(), this.autoplayDelay);
            },

            resetAutoplay() {
                clearInterval(this.intervalId);
                this.startAutoplay();
            },
        };
    }
</script>