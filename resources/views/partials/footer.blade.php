<!-- Fixed WhatsApp Button -->
<div class="fixed bottom-6 right-6 z-50">
    <button onclick="openWhatsAppModal()" class="whatsapp-btn group flex items-center gap-3 bg-green-600 hover:bg-green-700 text-white px-4 py-3 rounded-full text-sm font-medium shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
        <i class="fab fa-whatsapp text-lg"></i>
        <span class="whatsapp-btn-text hidden sm:block">Chat with us</span>
    </button>
</div>

<footer class="bg-slate-900 text-white"  style="margin-top: 40px;">
    <!-- Main Footer Content -->
    <div class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- Company Info -->
            <div class="lg:col-span-1">
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-white mb-2">Top Archive</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Professional archiving and document management solutions across Africa.
                    </p>
                </div>

                <!-- Social Links -->
                <div class="flex gap-3">
                    <button onclick="openSocialModal('tanzania')" class="w-10 h-10 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </button>
                    <button onclick="openSocialModal('tanzania')" class="w-10 h-10 bg-slate-800 hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 rounded-lg flex items-center justify-center transition-all duration-300">
                        <i class="fab fa-instagram text-sm"></i>
                    </button>
                    <button onclick="openSocialModal('tanzania')" class="w-10 h-10 bg-slate-800 hover:bg-blue-500 rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </button>
                    <button onclick="openSocialModal('tanzania')" class="w-10 h-10 bg-slate-800 hover:bg-blue-400 rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-twitter text-sm"></i>
                    </button>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-6">{{ __('messages.company') }}</h4>
                <ul class="space-y-3">
                    <li><a href="/" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Home</a></li>
                    <li><a href="/about" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">About</a></li>
                    <li><a href="/services" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Services</a></li>
                    <li><a href="/gallery" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Gallery</a></li>
                    <li><a href="/blog" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Blog</a></li>
                    <li><a href="/contact" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Contact</a></li>
                </ul>
            </div>

            <!-- Services (if you have specific services to highlight) -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-6">Services</h4>
                <ul class="space-y-3">
                    <li><a href="/services" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Document Management</a></li>
                    <li><a href="/services" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Digital Archiving</a></li>
                    <li><a href="/services" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Records Storage</a></li>
                    <li><a href="/services" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Consulting</a></li>
                    <li><a href="/services" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Training</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-semibold text-white mb-6">Contact</h4>
                <div class="space-y-4">
                    <!-- Main Contact -->
                    <div>
                        <p class="text-slate-400 text-sm mb-1">Headquarters</p>
                        <p class="text-white text-sm font-medium">+233540119622</p>
                        <p class="text-slate-400 text-sm">info@top-archive.com</p>
                    </div>

                    <!-- WhatsApp Contact -->
                    <div>
                        <button onclick="openWhatsAppModal()" class="inline-flex items-center gap-2 text-green-400 hover:text-green-300 transition-colors text-sm">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp Support</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offices Section -->
        <div class="border-t border-slate-800 mt-12 pt-12">
            <h4 class="text-lg font-semibold text-white mb-8 text-center">{{ __('messages.branches') }}</h4>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Ghana Office -->
                <div class="text-center p-6 bg-slate-800/50 rounded-xl hover:bg-slate-800/70 transition-all duration-300">
                    <div class="w-12 h-12 bg-yellow-500 text-slate-900 rounded-lg flex items-center justify-center text-sm font-bold mx-auto mb-4">
                        GH
                    </div>
                    <h5 class="text-white font-medium mb-3">{{ __('messages.ghana_office') }}</h5>
                    <div class="space-y-2 text-sm text-slate-400">
                        <p>P.M.B CT 118 Accra, Ghana</p>
                        <p class="text-white font-medium">+233540119622</p>
                        <p><a href="mailto:info.tz@top-archive.com" class="hover:text-white transition-colors">info@top-archive.com</a></p>
                    </div>
                </div>

                <!-- Tanzania Office -->
                <div class="text-center p-6 bg-slate-800/50 rounded-xl hover:bg-slate-800/70 transition-all duration-300">
                    <div class="w-12 h-12 bg-green-500 text-white rounded-lg flex items-center justify-center text-sm font-bold mx-auto mb-4">
                        TZ
                    </div>
                    <h5 class="text-white font-medium mb-3">{{ __('messages.tanzania_office') }}</h5>
                    <div class="space-y-2 text-sm text-slate-400">
                        <p>79958, Dar es Salaam, Tanzania</p>
                        <p class="text-white font-medium">+255 78 8009555</p>
                        <p><a href="mailto:info.tz@top-archive.com" class="hover:text-white transition-colors">info.tz@top-archive.com</a></p>
                    </div>
                </div>

                <!-- Nigeria Office -->
                <div class="text-center p-6 bg-slate-800/50 rounded-xl hover:bg-slate-800/70 transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-500 text-white rounded-lg flex items-center justify-center text-sm font-bold mx-auto mb-4">
                        NG
                    </div>
                    <h5 class="text-white font-medium mb-3">{{ __('messages.nigeria_office') }}</h5>
                    <div class="space-y-2 text-sm text-slate-400">
                        <p>VI 75934, Lagos, Nigeria</p>
                        <p class="text-white font-medium">+234 81 33031000</p>
                        <p><a href="mailto:info.nig@top-archive.com" class="hover:text-white transition-colors">info.nig@top-archive.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-slate-800 bg-slate-950">
        <div class="container mx-auto px-6 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <!-- Copyright -->
                <div class="text-slate-400 text-sm">
                    &copy; {{ date('Y') }} Top Archive. {{ __('messages.copyright') }}
                </div>

                <!-- Legal Links -->
                <div class="flex gap-6 text-sm">
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">{{ __('messages.terms') }}</a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">{{ __('messages.privacy') }}</a>
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">{{ __('messages.cookies') }}</a>
                </div>

                <!-- Language Switcher -->
                <div class="language-switcher">
                    <div class="relative">
                        <button onclick="toggleLanguageDropdown()" class="flex items-center gap-2 bg-slate-800 hover:bg-slate-700 text-white px-4 py-2 rounded-lg transition-all duration-300">
                            @if(app()->getLocale() == 'en')
                                <img src="https://flagcdn.com/w20/gb.png" alt="English" class="w-4 h-3">
                                <span class="text-sm">English</span>
                            @else
                                <img src="https://flagcdn.com/w20/tz.png" alt="Swahili" class="w-4 h-3">
                                <span class="text-sm">Swahili</span>
                            @endif
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div id="languageDropdown" class="hidden absolute bottom-full right-0 mb-2 bg-slate-800 border border-slate-700 rounded-lg shadow-xl overflow-hidden">
                            <a href="{{ url('lang/en') }}" class="flex items-center gap-2 px-4 py-3 text-slate-300 hover:bg-slate-700 hover:text-white transition-colors {{ app()->getLocale() == 'en' ? 'bg-slate-700 text-white' : '' }}">
                                <img src="https://flagcdn.com/w20/gb.png" alt="English" class="w-4 h-3">
                                <span class="text-sm">English</span>
                            </a>
                            <a href="{{ url('lang/sw') }}" class="flex items-center gap-2 px-4 py-3 text-slate-300 hover:bg-slate-700 hover:text-white transition-colors {{ app()->getLocale() == 'sw' ? 'bg-slate-700 text-white' : '' }}">
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
<div id="whatsappModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 invisible transition-all duration-300">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full mx-4 transform scale-95 transition-transform duration-300 shadow-2xl">
        <div class="flex justify-between items-center mb-6">
            <h5 class="text-xl font-bold text-slate-900">Contact Us on WhatsApp</h5>
            <button onclick="closeWhatsAppModal()" class="text-slate-500 hover:text-slate-700 transition-colors bg-slate-100 rounded-full w-8 h-8 flex items-center justify-center">
                <i class="fas fa-times text-sm"></i>
            </button>
        </div>

        <div class="text-center mb-6">
            <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fab fa-whatsapp text-white text-2xl"></i>
            </div>
            <p class="text-slate-600 text-sm">Choose your preferred office location</p>
        </div>

        <div class="space-y-3">
            <a href="https://wa.me/233540119622" target="_blank" class="flex items-center p-4 bg-slate-50 hover:bg-slate-100 rounded-xl hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center text-white font-bold text-sm mr-4">GH</div>
                <div class="flex-1">
                    <h6 class="font-semibold text-slate-900">Ghana Office</h6>
                    <p class="text-slate-600 text-sm">+233540119622</p>
                </div>
                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                    <i class="fas fa-arrow-right text-xs"></i>
                </div>
            </a>

            <a href="https://wa.me/255788009555" target="_blank" class="flex items-center p-4 bg-slate-50 hover:bg-slate-100 rounded-xl hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center text-white font-bold text-sm mr-4">TZ</div>
                <div class="flex-1">
                    <h6 class="font-semibold text-slate-900">Tanzania Office</h6>
                    <p class="text-slate-600 text-sm">+255 78 8009555</p>
                </div>
                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                    <i class="fas fa-arrow-right text-xs"></i>
                </div>
            </a>

            <a href="https://wa.me/2348133031000" target="_blank" class="flex items-center p-4 bg-slate-50 hover:bg-slate-100 rounded-xl hover:shadow-md transition-all duration-300 group">
                <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center text-white font-bold text-sm mr-4">NG</div>
                <div class="flex-1">
                    <h6 class="font-semibold text-slate-900">Nigeria Office</h6>
                    <p class="text-slate-600 text-sm">+234 81 33031000</p>
                </div>
                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                    <i class="fas fa-arrow-right text-xs"></i>
                </div>
            </a>
        </div>
    </div>
</div>



<!-- Social Media Modal -->
<div id="socialModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 invisible transition-all duration-300">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full mx-4 transform scale-95 transition-transform duration-300 shadow-2xl">
        <div class="flex justify-between items-center mb-6">
            <h5 class="text-xl font-bold text-slate-900">Follow Us On Social Media</h5>
            <button onclick="closeSocialModal()" class="text-slate-500 hover:text-slate-700 transition-colors bg-slate-100 rounded-full w-8 h-8 flex items-center justify-center">
                <i class="fas fa-times text-sm"></i>
            </button>
        </div>

        <div class="text-center mb-6">
            <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-share-alt text-white text-xl"></i>
            </div>
            <p class="text-slate-600 text-sm">Connect with our <span id="countryName">office</span></p>
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
        modal.querySelector('.bg-white').classList.remove('scale-95');
        modal.querySelector('.bg-white').classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeWhatsAppModal() {
        const modal = document.getElementById('whatsappModal');
        modal.classList.add('opacity-0');
        modal.querySelector('.bg-white').classList.remove('scale-100');
        modal.querySelector('.bg-white').classList.add('scale-95');

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
                    color: 'bg-blue-600'
                },
                {
                    name: 'Facebook',
                    username: 'Toparchive Ng',
                    url: 'https://www.facebook.com/profile.php?id=61572436930442',
                    icon: 'fab fa-facebook-f',
                    color: 'bg-blue-500'
                },
                {
                    name: 'Instagram',
                    username: 'Top_Archive_ng',
                    url: 'https://www.instagram.com/top_archive_ng',
                    icon: 'fab fa-instagram',
                    color: 'bg-gradient-to-r from-purple-500 to-pink-500'
                },
                {
                    name: 'Twitter',
                    username: '@TopArchiveNg',
                    url: 'https://x.com/TopArchiveNg',
                    icon: 'fab fa-twitter',
                    color: 'bg-blue-400'
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
                    color: 'bg-blue-600'
                },
                {
                    name: 'Facebook',
                    username: 'Toparchive Ghana',
                    url: 'https://www.facebook.com/ToparchiveGhana',
                    icon: 'fab fa-facebook-f',
                    color: 'bg-blue-500'
                },
                {
                    name: 'Instagram',
                    username: 'toparchive_ghana',
                    url: 'https://www.instagram.com/toparchive_ghana',
                    icon: 'fab fa-instagram',
                    color: 'bg-gradient-to-r from-purple-500 to-pink-500'
                },
                {
                    name: 'Twitter',
                    username: '@TopArchiveGH',
                    url: 'https://x.com/TopArchiveGH',
                    icon: 'fab fa-twitter',
                    color: 'bg-blue-400'
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
                    color: 'bg-blue-600'
                },
                {
                    name: 'Facebook',
                    username: 'Toparchive Tanzania',
                    url: 'https://www.facebook.com/Toparchivetanzania',
                    icon: 'fab fa-facebook-f',
                    color: 'bg-blue-500'
                },
                {
                    name: 'Instagram',
                    username: 'toparchive_eatz',
                    url: 'https://www.instagram.com/toparchive_eatz',
                    icon: 'fab fa-instagram',
                    color: 'bg-gradient-to-r from-purple-500 to-pink-500'
                },
                {
                    name: 'Twitter',
                    username: '@TopArchiveTZ',
                    url: 'https://x.com/TopArchiveTZ',
                    icon: 'fab fa-twitter',
                    color: 'bg-blue-400'
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
                platformLink.className = 'flex items-center p-4 bg-slate-50 hover:bg-slate-100 rounded-xl hover:shadow-md transition-all duration-300 group';
                platformLink.innerHTML = `
                    <div class="w-12 h-12 ${platform.color} rounded-xl flex items-center justify-center text-white mr-4">
                        <i class="${platform.icon}"></i>
                    </div>
                    <div class="flex-1">
                        <h6 class="font-semibold text-slate-900">${platform.name}</h6>
                        <p class="text-slate-600 text-sm">${platform.username}</p>
                    </div>
                    <div class="w-8 h-8 bg-slate-300 group-hover:bg-slate-400 rounded-full flex items-center justify-center text-slate-700 group-hover:scale-110 transition-all">
                        <i class="fas fa-external-link-alt text-xs"></i>
                    </div>
                `;
                socialPlatforms.appendChild(platformLink);
            });
        }

        modal.classList.remove('invisible', 'opacity-0');
        modal.querySelector('.bg-white').classList.remove('scale-95');
        modal.querySelector('.bg-white').classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    function closeSocialModal() {
        const modal = document.getElementById('socialModal');
        modal.classList.add('opacity-0');
        modal.querySelector('.bg-white').classList.remove('scale-100');
        modal.querySelector('.bg-white').classList.add('scale-95');

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

<style>
    /* Font Awesome CDN */
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

    /* Base styling */
    body {
        margin: 0;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    }
</style>