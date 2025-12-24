<div class="relative w-full h-[85vh] min-h-[700px] overflow-hidden" x-data="heroSlider()">
    <!-- Slides Container -->
    <div class="relative h-full">
        <!-- Slide 1 -->
        <div class="absolute inset-0 transition-opacity duration-700"
             :class="currentSlide === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0'">
            <div class="absolute inset-0 bg-cover bg-center"
                 style="background-image: url('{{ asset('assets/images/hero.jpg') }}')"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

            <div class="relative h-full flex flex-col items-center justify-center text-center text-white p-4">
                <div class="flex flex-col items-center space-y-6 max-w-3xl">
                    <div class="inline-flex items-center px-4 py-2 text-sm font-medium bg-white/10 border border-white/20 rounded-full backdrop-blur-sm">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Professional Excellence
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight [text-wrap:balance]"
                        style="text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">
                        {{ __('messages.hero_title') }}
                    </h1>

                    <p class="text-lg text-white/90 max-w-2xl [text-wrap:balance]"
                       style="text-shadow: 1px 1px 4px rgba(0,0,0,0.7);">
                        {{ __('messages.hero_description') }}
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="w-full sm:w-auto px-8 py-3 font-semibold rounded-lg border-2 border-white text-white bg-white/5 hover:bg-white hover:text-black transition-all duration-300 transform hover:scale-105 shadow-lg backdrop-blur-sm">
                            {{ __('messages.get_assessment') }}
                        </button>

                        <button class="group flex items-center justify-center w-full sm:w-auto px-8 py-3 font-semibold rounded-lg bg-amber-400 hover:bg-amber-500 text-black transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <span>{{ __('messages.work_with_us') }}</span>
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center gap-6 pt-4 text-white/80">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">25+ Years Experience</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">4 Countries in Africa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="absolute inset-0 transition-opacity duration-700"
             :class="currentSlide === 1 ? 'opacity-100 z-10' : 'opacity-0 z-0'">
            <div class="absolute inset-0 bg-cover bg-center"
                 style="background-image: url('{{ asset('assets/slider/slider01.jpg') }}')"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

            <div class="relative h-full flex flex-col items-center justify-center text-center text-white p-4">
                <div class="flex flex-col items-center space-y-6 max-w-3xl">
                    <div class="inline-flex items-center px-4 py-2 text-sm font-medium bg-amber-400/20 border border-amber-400/40 rounded-full backdrop-blur-sm">
                        <svg class="w-4 h-4 mr-2 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                        </svg>
                        Who We Are
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight [text-wrap:balance]"
                        style="text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">
                        Empowering Businesses in the Digital Age
                    </h1>

                    <p class="text-lg text-white/90 max-w-2xl [text-wrap:balance]"
                       style="text-shadow: 1px 1px 4px rgba(0,0,0,0.7);">
                        Our goal is to empower businesses with top-notch record storage and information management solutions. Our high-standard facilities ensure organized storage and easy access to important documents, giving your business a competitive edge.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="w-full sm:w-auto px-8 py-3 font-semibold rounded-lg bg-amber-400 hover:bg-amber-500 text-black transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Explore Solutions
                        </button>
                        <button class="w-full sm:w-auto px-8 py-3 font-semibold rounded-lg border-2 border-white text-white bg-white/5 hover:bg-white hover:text-black transition-all duration-300 transform hover:scale-105 shadow-lg backdrop-blur-sm">
                            Our Services
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="absolute inset-0 transition-opacity duration-700"
             :class="currentSlide === 2 ? 'opacity-100 z-10' : 'opacity-0 z-0'">
            <div class="absolute inset-0 bg-cover bg-center"
                 style="background-image: url('{{ asset('assets/slider/digital.jpg') }}')"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

            <div class="relative h-full flex flex-col items-center justify-center text-center text-white p-4">
                <div class="flex flex-col items-center space-y-6 max-w-3xl">
                    <div class="inline-flex items-center px-4 py-2 text-sm font-medium bg-blue-400/20 border border-blue-400/40 rounded-full backdrop-blur-sm">
                        <svg class="w-4 h-4 mr-2 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                        </svg>
                        Our Clients
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight [text-wrap:balance]"
                        style="text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">
                        Trusted by Leading Organizations
                    </h1>

                    <p class="text-lg text-white/90 max-w-2xl [text-wrap:balance]"
                       style="text-shadow: 1px 1px 4px rgba(0,0,0,0.7);">
                        Top Archive serves multinational corporations in banking, insurance, oil & gas, telecom, shipping, and government institutions. We offer tailored solutions with extensive technical and legal expertise.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="group flex items-center justify-center w-full sm:w-auto px-8 py-3 font-semibold rounded-lg bg-amber-400 hover:bg-amber-500 text-black transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <span>Start Your Journey</span>
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="grid grid-cols-3 gap-8 pt-4 text-white/80">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-400">Banking</div>
                            <div class="text-sm mt-1">Insurance</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-400">Oil & Gas</div>
                            <div class="text-sm mt-1">Telecom</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-amber-400">Government</div>
                            <div class="text-sm mt-1">Shipping</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button @click="previousSlide()"
            class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-12 h-12 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-sm text-white transition-all duration-300 hover:scale-110">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <button @click="nextSlide()"
            class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-12 h-12 flex items-center justify-center rounded-full bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-sm text-white transition-all duration-300 hover:scale-110">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Dot Indicators -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex items-center gap-3">
        <template x-for="(slide, index) in 3" :key="index">
            <button @click="currentSlide = index"
                    class="transition-all duration-300"
                    :class="currentSlide === index ? 'w-12 h-3 bg-amber-400 rounded-full' : 'w-3 h-3 bg-white/40 hover:bg-white/60 rounded-full'">
            </button>
        </template>
    </div>

    <!-- Scroll Indicator (only on first slide) -->
    <div class="absolute bottom-20 left-1/2 -translate-x-1/2 text-white/60 animate-bounce transition-opacity duration-300"
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

            init() {
                this.startAutoplay();
            },

            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % 3;
                this.resetAutoplay();
            },

            previousSlide() {
                this.currentSlide = (this.currentSlide - 1 + 3) % 3;
                this.resetAutoplay();
            },

            startAutoplay() {
                this.intervalId = setInterval(() => {
                    this.nextSlide();
                }, 5000); // Auto-advance every 5 seconds
            },

            resetAutoplay() {
                clearInterval(this.intervalId);
                this.startAutoplay();
            }
        }
    }
</script>