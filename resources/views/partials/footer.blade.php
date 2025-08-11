<!-- Fixed WhatsApp Button -->
<div class="fixed bottom-6 right-6 z-50">
    <button onclick="openWhatsAppModal()" class="whatsapp-btn group flex items-center gap-3 bg-gradient-to-r from-green-500 to-green-600 text-white border-none px-5 py-3.5 rounded-full text-sm font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 hover:scale-105">
        <i class="fab fa-whatsapp text-lg animate-pulse"></i>
        <span class="whatsapp-btn-text hidden sm:block">Chat with us</span>
    </button>
</div>

<footer class="relative mt-24 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white pt-20 pb-10 overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-yellow-400/10 via-transparent to-yellow-400/5"></div>
        <div class="absolute top-20 left-20 w-32 h-32 bg-yellow-400/10 rounded-full blur-xl"></div>
        <div class="absolute bottom-20 right-20 w-40 h-40 bg-yellow-400/5 rounded-full blur-xl"></div>
    </div>

    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-12">
            <!-- Top Archive Column -->
            <div class="lg:col-span-2">
                <div class="footer-brand">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl p-2 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <img src="assets/images/logo.png" alt="{{ __('messages.company') }}" class="w-full h-full object-contain rounded-xl">
                        </div>
                        <h5 class="text-xl font-bold bg-gradient-to-r from-yellow-400 to-yellow-500 bg-clip-text text-transparent">
                            {{ __('messages.company') }}
                        </h5>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed mb-8 max-w-sm">
                        {{ __('messages.complete_archive') }}
                    </p>
                    <div class="flex gap-3">
                        <button onclick="openSocialModal('tanzania')" class="social-link w-11 h-11 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                            <i class="fab fa-facebook-f text-white"></i>
                        </button>
                        <button onclick="openSocialModal('tanzania')" class="social-link w-11 h-11 bg-gradient-to-br from-pink-500 to-purple-600 rounded-xl flex items-center justify-center hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                            <i class="fab fa-instagram text-white"></i>
                        </button>
                        <button onclick="openSocialModal('tanzania')" class="social-link w-11 h-11 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Company Links Column -->
            <div class="lg:col-span-1">
                <div class="footer-section">
                    <h5 class="text-white font-semibold text-lg mb-6 relative">
                        {{ __('messages.company') }}
                        <div class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full"></div>
                    </h5>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-300 hover:text-yellow-400 transition-colors duration-300 hover:translate-x-1 inline-block">Home</a></li>
                        <li><a href="/about" class="text-gray-300 hover:text-yellow-400 transition-colors duration-300 hover:translate-x-1 inline-block">About</a></li>
                        <li><a href="/services" class="text-gray-300 hover:text-yellow-400 transition-colors duration-300 hover:translate-x-1 inline-block">Services</a></li>
                        <li><a href="/gallery" class="text-gray-300 hover:text-yellow-400 transition-colors duration-300 hover:translate-x-1 inline-block">Gallery</a></li>
                        <li><a href="/blog" class="text-gray-300 hover:text-yellow-400 transition-colors duration-300 hover:translate-x-1 inline-block">Blog</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-yellow-400 transition-colors duration-300 hover:translate-x-1 inline-block">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Ghana Office -->
            <div class="lg:col-span-1">
                <div class="footer-section">
                    <h5 class="text-white font-semibold text-lg mb-6 relative">
                        {{ __('messages.branches') }}
                        <div class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full"></div>
                    </h5>
                    <div class="branch-info">
                        <div class="flex items-center mb-4">
                            <span class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 rounded-lg flex items-center justify-center text-xs font-bold mr-3">GH</span>
                            <h6 class="text-white font-medium text-sm">{{ __('messages.ghana_office') }}</h6>
                        </div>
                        <div class="space-y-2 text-sm">
                            <p class="text-gray-300 flex items-center">
                                <i class="fas fa-map-marker-alt text-yellow-400 w-4 mr-2"></i>
                                P.M.B CT 118 Accra, Ghana
                            </p>
                            <p class="text-gray-300 flex items-center">
                                <i class="fas fa-phone text-yellow-400 w-4 mr-2"></i>
                                +233540119622
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tanzania & Nigeria Offices -->
            <div class="lg:col-span-1">
                <div class="footer-section space-y-6">
                    <!-- Tanzania Office -->
                    <div class="branch-info">
                        <div class="flex items-center mb-4">
                            <span class="w-8 h-8 bg-gradient-to-br from-green-400 to-green-500 text-white rounded-lg flex items-center justify-center text-xs font-bold mr-3">TZ</span>
                            <h6 class="text-white font-medium text-sm">{{ __('messages.tanzania_office') }}</h6>
                        </div>
                        <div class="space-y-2 text-sm">
                            <p class="text-gray-300 flex items-center">
                                <i class="fas fa-map-marker-alt text-yellow-400 w-4 mr-2"></i>
                                79958, Dar es Salaam, Tanzania
                            </p>
                            <p class="text-gray-300 flex items-center">
                                <i class="fas fa-phone text-yellow-400 w-4 mr-2"></i>
                                +255 78 8009555
                            </p>
                            <p class="text-gray-300 flex items-center">
                                <i class="fas fa-envelope text-yellow-400 w-4 mr-2"></i>
                                <a href="mailto:info.tz@top-archive.com" class="hover:text-yellow-400 transition-colors">info.tz@top-archive.com</a>
                            </p>
                        </div>
                    </div>

                    <!-- Nigeria Office -->
                    <div class="branch-info">
                        <div class="flex items-center mb-4">
                            <span class="w-8 h-8 bg-gradient-to-br from-blue-400 to-cyan-400 text-white rounded-lg flex items-center justify-center text-xs font-bold mr-3">NG</span>
                            <h6 class="text-white font-medium text-sm">{{ __('messages.nigeria_office') }}</h6>
                        </div>
                        <div class="space-y-2 text-sm">
                            <p class="text-gray-300 flex items-center">
                                <i class="fas fa-map-marker-alt text-yellow-400 w-4 mr-2"></i>
                                VI 75934, Lagos, Nigeria
                            </p>
                            <p class="text-gray-300 flex items-center">
                                <i class="fas fa-phone text-yellow-400 w-4 mr-2"></i>
                                +234 81 33031000
                            </p>
                            <p class="text-gray-300 flex items-center">
                                <i class="fas fa-envelope text-yellow-400 w-4 mr-2"></i>
                                <a href="mailto:info.nig@top-archive.com" class="hover:text-yellow-400 transition-colors">info.nig@top-archive.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="border-t border-gray-700 mt-16 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-center md:text-left">
                    <p class="text-gray-400 text-sm">&copy; {{ __('messages.copyright') }}</p>
                </div>
                <div class="flex gap-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">{{ __('messages.terms') }}</a>
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">{{ __('messages.privacy') }}</a>
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">{{ __('messages.cookies') }}</a>
                </div>
                <div class="language-switcher">
                    <div class="relative">
                        <button onclick="toggleLanguageDropdown()" class="flex items-center gap-2 bg-gray-800/50 border border-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700/50 transition-all duration-300 backdrop-blur-sm">
                            @if(app()->getLocale() == 'en')
                                <img src="https://flagcdn.com/w20/gb.png" alt="English" class="w-4 h-3">
                                <span class="text-sm">English</span>
                            @else
                                <img src="https://flagcdn.com/w20/tz.png" alt="Swahili" class="w-4 h-3">
                                <span class="text-sm">Swahili</span>
                            @endif
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div id="languageDropdown" class="hidden absolute bottom-full right-0 mb-2 bg-gray-800/95 border border-gray-600 rounded-lg shadow-xl backdrop-blur-sm overflow-hidden">
                            <a href="{{ url('lang/en') }}" class="flex items-center gap-2 px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white transition-colors {{ app()->getLocale() == 'en' ? 'bg-yellow-400/20 text-yellow-400' : '' }}">
                                <img src="https://flagcdn.com/w20/gb.png" alt="English" class="w-4 h-3">
                                <span class="text-sm">English</span>
                            </a>
                            <a href="{{ url('lang/sw') }}" class="flex items-center gap-2 px-4 py-3 text-gray-300 hover:bg-gray-700/50 hover:text-white transition-colors {{ app()->getLocale() == 'sw' ? 'bg-yellow-400/20 text-yellow-400' : '' }}">
                                <img src="https://flagcdn.com/w20/tz.png" alt="Swahili" class="w-4 h-3">
                                <span class="text-sm">Swahili</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- WhatsApp Modal -->
<div id="whatsappModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 invisible transition-all duration-300">
    <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-3xl p-8 max-w-md w-full mx-4 transform scale-95 transition-transform duration-300">
        <div class="flex justify-between items-center mb-6">
            <h5 class="text-xl font-bold text-gray-900">Contact Us on WhatsApp</h5>
            <button onclick="closeWhatsAppModal()" class="text-gray-700 hover:text-gray-900 transition-colors bg-white/20 rounded-full w-8 h-8 flex items-center justify-center">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="text-center mb-6">
            <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4 animate-bounce">
                <i class="fab fa-whatsapp text-white text-2xl"></i>
            </div>
            <p class="text-gray-800 text-sm">Select a location to start chat</p>
        </div>

        <div class="space-y-3">
            <a href="https://wa.me/233540119622" target="_blank" class="flex items-center p-4 bg-white/90 rounded-2xl hover:bg-white hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center text-white font-bold text-sm mr-4">GH</div>
                <div class="flex-1">
                    <h6 class="font-semibold text-gray-900">Ghana Office</h6>
                    <p class="text-gray-600 text-sm">+233540119622</p>
                </div>
                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white group-hover:translate-x-1 transition-transform">
                    <i class="fas fa-chevron-right text-xs"></i>
                </div>
            </a>

            <a href="https://wa.me/255788009555" target="_blank" class="flex items-center p-4 bg-white/90 rounded-2xl hover:bg-white hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center text-white font-bold text-sm mr-4">TZ</div>
                <div class="flex-1">
                    <h6 class="font-semibold text-gray-900">Tanzania Office</h6>
                    <p class="text-gray-600 text-sm">+255 78 8009555</p>
                </div>
                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white group-hover:translate-x-1 transition-transform">
                    <i class="fas fa-chevron-right text-xs"></i>
                </div>
            </a>

            <a href="https://wa.me/2348133031000" target="_blank" class="flex items-center p-4 bg-white/90 rounded-2xl hover:bg-white hover:-translate-y-1 transition-all duration-300 group">
                <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center text-white font-bold text-sm mr-4">NG</div>
                <div class="flex-1">
                    <h6 class="font-semibold text-gray-900">Nigeria Office</h6>
                    <p class="text-gray-600 text-sm">+234 81 33031000</p>
                </div>
                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white group-hover:translate-x-1 transition-transform">
                    <i class="fas fa-chevron-right text-xs"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Social Media Modal -->
<div id="socialModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 invisible transition-all duration-300">
    <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-3xl p-8 max-w-md w-full mx-4 transform scale-95 transition-transform duration-300">
        <div class="flex justify-between items-center mb-6">
            <h5 class="text-xl font-bold text-gray-900">Follow Us On Social Media</h5>
            <button onclick="closeSocialModal()" class="text-gray-700 hover:text-gray-900 transition-colors bg-white/20 rounded-full w-8 h-8 flex items-center justify-center">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="text-center mb-6">
            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4 animate-pulse">
                <i class="fas fa-share-alt text-white text-2xl"></i>
            </div>
            <p class="text-gray-800 text-sm">Connect with our <span id="countryName">office</span></p>
        </div>

        <div id="socialPlatforms" class="space-y-3">
            <!-- Social media links will be populated here by JavaScript -->
        </div>
    </div>
</div>

<script>
    // Language dropdown toggle
    function toggleLanguageDropdown() {
        const dropdown = document.getElementById('languageDropdown');
        dropdown.classList.toggle('hidden');
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('languageDropdown');
        const button = event.target.closest('button[onclick="toggleLanguageDropdown()"]');

        if (!button && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });

    // WhatsApp Modal Functions
    function openWhatsAppModal() {
        const modal = document.getElementById('whatsappModal');
        modal.classList.remove('invisible', 'opacity-0');
        modal.querySelector('.bg-gradient-to-br').classList.remove('scale-95');
        modal.querySelector('.bg-gradient-to-br').classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeWhatsAppModal() {
        const modal = document.getElementById('whatsappModal');
        modal.classList.add('opacity-0');
        modal.querySelector('.bg-gradient-to-br').classList.remove('scale-100');
        modal.querySelector('.bg-gradient-to-br').classList.add('scale-95');

        setTimeout(() => {
            modal.classList.add('invisible');
            document.body.style.overflow = '';
        }, 300);
    }

    // Social Media Modal Functions
    const socialData = {
        nigeria: {
            name: 'Nigeria',
            platforms: [
                {
                    name: 'LinkedIn',
                    username: 'Top Archive Nigeria',
                    url: 'https://www.linkedin.com/in/top-archive-nigeria',
                    icon: 'fab fa-linkedin-in',
                    color: 'from-blue-600 to-blue-700'
                },
                {
                    name: 'Facebook',
                    username: 'Toparchive Ng',
                    url: 'https://www.facebook.com/profile.php?id=61572436930442',
                    icon: 'fab fa-facebook-f',
                    color: 'from-blue-500 to-blue-600'
                },
                {
                    name: 'Instagram',
                    username: 'Top_Archive_ng',
                    url: 'https://www.instagram.com/top_archive_ng',
                    icon: 'fab fa-instagram',
                    color: 'from-pink-500 to-purple-600'
                },
                {
                    name: 'Twitter',
                    username: '@TopArchiveNg',
                    url: 'https://x.com/TopArchiveNg',
                    icon: 'fab fa-twitter',
                    color: 'from-blue-400 to-blue-500'
                }
            ]
        },
        ghana: {
            name: 'Ghana',
            platforms: [
                {
                    name: 'LinkedIn',
                    username: 'Top Archive Ghana',
                    url: 'https://www.linkedin.com/company/top-archive-ghana',
                    icon: 'fab fa-linkedin-in',
                    color: 'from-blue-600 to-blue-700'
                },
                {
                    name: 'Facebook',
                    username: 'Toparchive Ghana',
                    url: 'https://www.facebook.com/ToparchiveGhana',
                    icon: 'fab fa-facebook-f',
                    color: 'from-blue-500 to-blue-600'
                },
                {
                    name: 'Instagram',
                    username: 'toparchive_ghana',
                    url: 'https://www.instagram.com/toparchive_ghana',
                    icon: 'fab fa-instagram',
                    color: 'from-pink-500 to-purple-600'
                },
                {
                    name: 'Twitter',
                    username: '@TopArchiveGH',
                    url: 'https://x.com/TopArchiveGH',
                    icon: 'fab fa-twitter',
                    color: 'from-blue-400 to-blue-500'
                }
            ]
        },
        tanzania: {
            name: 'Tanzania',
            platforms: [
                {
                    name: 'LinkedIn',
                    username: 'Top Archive Tanzania',
                    url: 'https://www.linkedin.com/company/top-archive-ea-limited/',
                    icon: 'fab fa-linkedin-in',
                    color: 'from-blue-600 to-blue-700'
                },
                {
                    name: 'Facebook',
                    username: 'Toparchive Tanzania',
                    url: 'https://www.facebook.com/Toparchivetanzania',
                    icon: 'fab fa-facebook-f',
                    color: 'from-blue-500 to-blue-600'
                },
                {
                    name: 'Instagram',
                    username: 'toparchive_eatz',
                    url: 'https://www.instagram.com/toparchive_eatz',
                    icon: 'fab fa-instagram',
                    color: 'from-pink-500 to-purple-600'
                },
                {
                    name: 'Twitter',
                    username: '@TopArchiveTZ',
                    url: 'https://x.com/TopArchiveTZ',
                    icon: 'fab fa-twitter',
                    color: 'from-blue-400 to-blue-500'
                }
            ]
        }
    };

    function openSocialModal(country) {
        const modal = document.getElementById('socialModal');
        const socialPlatforms = document.getElementById('socialPlatforms');
        const countryName = document.getElementById('countryName');
        const data = socialData[country];

        if (data) {
            countryName.textContent = data.name;
            socialPlatforms.innerHTML = '';

            data.platforms.forEach(platform => {
                const platformLink = document.createElement('a');
                platformLink.href = platform.url;
                platformLink.target = '_blank';
                platformLink.className = 'flex items-center p-4 bg-white/90 rounded-2xl hover:bg-white hover:-translate-y-1 transition-all duration-300 group';
                platformLink.innerHTML = `
                    <div class="w-12 h-12 bg-gradient-to-br ${platform.color} rounded-xl flex items-center justify-center text-white mr-4">
                        <i class="${platform.icon}"></i>
                    </div>
                    <div class="flex-1">
                        <h6 class="font-semibold text-gray-900">${platform.name}</h6>
                        <p class="text-gray-600 text-sm">${platform.username}</p>
                    </div>
                    <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-gray-900 group-hover:translate-x-1 transition-transform">
                        <i class="fas fa-external-link-alt text-xs"></i>
                    </div>
                `;
                socialPlatforms.appendChild(platformLink);
            });
        }

        modal.classList.remove('invisible', 'opacity-0');
        modal.querySelector('.bg-gradient-to-br').classList.remove('scale-95');
        modal.querySelector('.bg-gradient-to-br').classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeSocialModal() {
        const modal = document.getElementById('socialModal');
        modal.classList.add('opacity-0');
        modal.querySelector('.bg-gradient-to-br').classList.remove('scale-100');
        modal.querySelector('.bg-gradient-to-br').classList.add('scale-95');

        setTimeout(() => {
            modal.classList.add('invisible');
            document.body.style.overflow = '';
        }, 300);
    }

    // Close modals on outside click
    document.getElementById('whatsappModal').addEventListener('click', function(e) {
        if (e.target === this) closeWhatsAppModal();
    });

    document.getElementById('socialModal').addEventListener('click', function(e) {
        if (e.target === this) closeSocialModal();
    });

    // Close modals on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeWhatsAppModal();
            closeSocialModal();
        }
    });
</script>
