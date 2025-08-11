<div class="relative w-full h-[70vh] min-h-[600px] overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/hero.jpg') }}')"></div>

    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

    <div class="relative h-full flex flex-col items-center justify-center text-center text-white p-4">

        <div class="flex flex-col items-center space-y-6 max-w-3xl">

            <div class="inline-flex items-center px-4 py-2 text-sm font-medium bg-white/10 border border-white/20 rounded-full backdrop-blur-sm">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                </svg>
                Professional Excellence
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight [text-wrap:balance]" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">
                {{ __('messages.hero_title') }}
            </h1>

            <p class="text-lg text-white/90 [text-wrap:balance]" style="text-shadow: 1px 1px 4px rgba(0,0,0,0.7);">
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
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-sm font-medium">Trusted by 1000+ Companies</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                    <span class="text-sm font-medium">ISO Certified</span>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white/60 animate-bounce">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
    </div>
</div>