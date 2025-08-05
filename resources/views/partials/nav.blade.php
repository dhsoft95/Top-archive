<div x-data="{ open: false, loginModalOpen: false, atTop: true }" @scroll.window="atTop = (window.scrollY < 10)">

    <nav
            class="fixed top-0 left-0 z-50 w-full bg-white shadow-md transition-all duration-300"
    >
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-3">
                <a href="#" class="flex-shrink-0">
                    <img src="assets/images/logo.png" alt="Top Archive" class="h-16 w-auto">
                </a>

                <div class="lg:hidden">
                    <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-500">
                        <span class="sr-only">Open main menu</span>
                        <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                        <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>
                </div>

                <div class="hidden lg:flex lg:items-center lg:justify-center lg:gap-x-2">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/about-us" :active="request()->is('about-us*')">About</x-nav-link>
                    <x-nav-link href="/services" :active="request()->is('services*')">Services</x-nav-link>
                    <x-nav-link href="/gallery" :active="request()->is('gallery*')">Gallery</x-nav-link>
                    <x-nav-link href="/blog" :active="request()->is('blog*')">Blog</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact*')">Contact</x-nav-link>
                </div>

                <div class="hidden lg:flex items-center gap-x-3">
                    <button @click="loginModalOpen = true" type="button" class="font-medium text-gray-600 hover:text-amber-600 transition-colors duration-200">
                        Log In
                    </button>
                    <a href="/contact" class="inline-flex items-center justify-center px-5 py-2.5 font-semibold text-gray-900 bg-amber-400 rounded-lg hover:bg-amber-500 transition-all duration-200 transform hover:scale-105 shadow-sm hover:shadow-md">
                        Work With Us
                    </a>
                </div>
            </div>
        </div>

        <div x-show="open" @click.away="open = false" class="lg:hidden" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" style="display: none;">
            <div class="absolute w-full bg-white shadow-lg px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <x-nav-link-mobile href="/" :active="request()->is('/')">Home</x-nav-link-mobile>
                <x-nav-link-mobile href="/about-us" :active="request()->is('about-us*')">About</x-nav-link-mobile>
                <x-nav-link-mobile href="/contact" :active="request()->is('contact*')">Contact</x-nav-link-mobile>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="flex flex-col gap-y-3 px-2">
                        <a href="/contact" class="inline-flex items-center justify-center w-full px-5 py-2.5 font-semibold text-gray-900 bg-amber-400 rounded-lg hover:bg-amber-500">Work With Us</a>
                        <button @click="loginModalOpen = true; open = false;" type="button" class="w-full font-medium text-gray-600 hover:text-amber-600">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div
            x-show="loginModalOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @keydown.escape.window="loginModalOpen = false"
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-60"
            style="display: none;"
    >
        <div
                @click.outside="loginModalOpen = false"
                x-show="loginModalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="relative w-full max-w-3xl p-5 bg-white rounded-2xl shadow-xl"
        >
            <div class="relative pb-4 text-center">
                <h5 class="m-0 text-2xl font-semibold text-gray-800">Client Login: Choose your location</h5>
                <button @click="loginModalOpen = false" type="button" class="absolute -top-2 -right-2 text-gray-400 bg-white rounded-full p-1 shadow-sm hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-amber-500">
                    <span class="sr-only">Close</span>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>

            <div class="pt-4">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div onclick="redirectToLogin('ghana')" class="p-4 text-center transition-all duration-300 border border-gray-200 rounded-xl shadow-sm cursor-pointer hover:shadow-lg hover:border-amber-400 hover:scale-105">
                        <img src="https://flagcdn.com/gh.svg" alt="Ghana Flag" class="h-[30px] w-auto mx-auto mb-4">
                        <h3 class="mb-2 text-2xl font-medium text-gray-800">Ghana 🇬🇭</h3>
                        <p class="m-0 text-base text-gray-500">EDMS</p>
                    </div>
                    <div onclick="redirectToLogin('tanzania')" class="p-4 text-center transition-all duration-300 border border-gray-200 rounded-xl shadow-sm cursor-pointer hover:shadow-lg hover:border-amber-400 hover:scale-105">
                        <img src="https://flagcdn.com/tz.svg" alt="Tanzania Flag" class="h-[30px] w-auto mx-auto mb-4">
                        <h3 class="mb-2 text-2xl font-medium text-gray-800">Tanzania 🇹🇿</h3>
                        <p class="m-0 text-base text-gray-500">Oneil Order</p>
                    </div>
                    <div class="p-4 text-center transition-all duration-300 border border-gray-200 rounded-xl shadow-sm cursor-not-allowed hover:shadow-lg hover:border-gray-300 hover:scale-105">
                        <img src="https://flagcdn.com/ng.svg" alt="Nigeria Flag" class="h-[30px] w-auto mx-auto mb-4">
                        <h3 class="mb-2 text-2xl font-medium text-gray-800">Nigeria 🇳🇬</h3>
                        <p class="m-0 text-base text-gray-500">EDMS</p>
                    </div>
                    <div class="p-4 text-center transition-all duration-300 border border-gray-200 rounded-xl shadow-sm cursor-not-allowed hover:shadow-lg hover:border-gray-300 hover:scale-105">
                        <img src="https://flagcdn.com/ug.svg" alt="Uganda Flag" class="h-[30px] w-auto mx-auto mb-4">
                        <h3 class="mb-2 text-2xl font-medium text-gray-800">Uganda 🇺🇬</h3>
                        <p class="m-0 text-base text-gray-500">EDMS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function redirectToLogin(country) {
        const loginUrls = {
            'ghana': 'https://filehold.top-archive.com/FH/Filehold/WebClient/LoginForm.aspx',
            'tanzania': 'https://taeaoneilorder.top-archive.com/oneilOrder/Credential/LogOn?ReturnUrl=%2foneilOrder%2f'
        };
        if (loginUrls[country]) {
            window.location.href = loginUrls[country];
        }
    }
</script>