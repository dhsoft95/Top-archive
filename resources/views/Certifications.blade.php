<section class="relative py-16 lg:py-24 bg-gradient-to-br from-gray-50 via-white to-yellow-50 overflow-hidden">
    <!-- Background decorations -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-yellow-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-bounce"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-yellow-50 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-ping"></div>
    </div>

    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <!-- Header Section -->
        <div class="text-center mb-12 lg:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 lg:mb-6">
                <span class="bg-gradient-to-r from-gray-900 via-yellow-600 to-gray-900 bg-clip-text text-transparent">
                    Certifications
                </span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-yellow-400 to-yellow-600 mx-auto mb-6 rounded-full"></div>
            <p class="text-lg lg:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Internationally recognized standards we adhere to across our operations
            </p>
        </div>

        <!-- Country Tabs -->
        <div class="flex justify-center mb-12 lg:mb-16">
            <div class="inline-flex bg-white rounded-full p-2 shadow-lg border border-gray-100">
                <button id="tanzania-tab" class="country-tab active flex items-center space-x-2 px-6 py-3 rounded-full font-semibold transition-all duration-300 text-gray-600" onclick="switchTab('tanzania')">
                    <i class="fas fa-flag text-sm"></i>
                    <span>Tanzania</span>
                </button>
                <button id="ghana-tab" class="country-tab flex items-center space-x-2 px-6 py-3 rounded-full font-semibold transition-all duration-300 text-gray-600" onclick="switchTab('ghana')">
                    <i class="fas fa-flag text-sm"></i>
                    <span>Ghana</span>
                </button>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Tanzania Tab -->
            <div id="tanzania-content" class="tab-pane active opacity-100 transform translate-y-0 transition-all duration-500">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 mb-16">
                    <!-- ISO 27001 Card -->
                    <div class="cert-card group bg-white rounded-3xl p-8 lg:p-10 shadow-xl border border-gray-100 hover:border-yellow-200 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl relative overflow-hidden">
                        <!-- Shimmer effect -->
                        <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent group-hover:translate-x-full transition-transform duration-1000"></div>

                        <div class="text-center space-y-6">
                            <div class="relative">
                                <div class="w-24 h-24 lg:w-28 lg:h-28 mx-auto bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <img src="{{ asset('images/certifications/27001-2013.png') }}" alt="ISO 27001 Certification" class="w-16 h-16 lg:w-20 lg:h-20 object-contain cursor-pointer" onclick="openModal('{{ asset('images/certifications/27001-2013.png') }}', 'ISO/IEC 27001:2013 Information Security Management Systems')">
                                </div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center cursor-pointer opacity-0 group-hover:opacity-100 transition-opacity duration-300" onclick="openModal('{{ asset('images/certifications/27001-2013.png') }}', 'ISO/IEC 27001:2013 Information Security Management Systems')">
                                    <i class="fas fa-search-plus text-white text-xs"></i>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-2">ISO/IEC 27001:2013</h3>
                                <p class="text-gray-600">Information Security Management Systems</p>
                            </div>

                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/95 to-yellow-500/95 rounded-3xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-sm">
                                <div class="text-center text-gray-900 p-6">
                                    <p class="mb-4 font-medium">Ensures we implement best practices for information security controls in our Tanzania operations.</p>
                                    <button class="bg-white/20 backdrop-blur-sm text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-white/30 transition-colors duration-200" onclick="openModal('{{ asset('images/certifications/27001-2013.png') }}', 'ISO/IEC 27001:2013 Information Security Management Systems')">
                                        <i class="fas fa-eye mr-2"></i>View Certificate
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ISO 9001 Card -->
                    <div class="cert-card group bg-white rounded-3xl p-8 lg:p-10 shadow-xl border border-gray-100 hover:border-yellow-200 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl relative overflow-hidden">
                        <!-- Shimmer effect -->
                        <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent group-hover:translate-x-full transition-transform duration-1000"></div>

                        <div class="text-center space-y-6">
                            <div class="relative">
                                <div class="w-24 h-24 lg:w-28 lg:h-28 mx-auto bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <img src="{{ asset('images/certifications/9001-2015.png') }}" alt="ISO 9001 Certification" class="w-16 h-16 lg:w-20 lg:h-20 object-contain cursor-pointer" onclick="openModal('{{ asset('images/certifications/9001-2015.png') }}', 'ISO 9001:2015 Quality Management Systems')">
                                </div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center cursor-pointer opacity-0 group-hover:opacity-100 transition-opacity duration-300" onclick="openModal('{{ asset('images/certifications/9001-2015.png') }}', 'ISO 9001:2015 Quality Management Systems')">
                                    <i class="fas fa-search-plus text-white text-xs"></i>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-2">ISO 9001:2015</h3>
                                <p class="text-gray-600">Quality Management Systems</p>
                            </div>

                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-400/95 to-blue-500/95 rounded-3xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-sm">
                                <div class="text-center text-white p-6">
                                    <p class="mb-4 font-medium">Demonstrates our commitment to consistent quality and customer satisfaction in Tanzania.</p>
                                    <button class="bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded-full font-semibold hover:bg-white/30 transition-colors duration-200" onclick="openModal('{{ asset('images/certifications/9001-2015.png') }}', 'ISO 9001:2015 Quality Management Systems')">
                                        <i class="fas fa-eye mr-2"></i>View Certificate
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ghana Tab -->
            <div id="ghana-content" class="tab-pane hidden opacity-0 transform translate-y-4 transition-all duration-500">
                <div class="flex justify-center mb-16">
                    <div class="w-full max-w-md">
                        <!-- ISO 9001 Card for Ghana -->
                        <div class="cert-card group bg-white rounded-3xl p-8 lg:p-10 shadow-xl border border-gray-100 hover:border-orange-200 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl relative overflow-hidden">
                            <!-- Shimmer effect -->
                            <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent group-hover:translate-x-full transition-transform duration-1000"></div>

                            <div class="text-center space-y-6">
                                <div class="relative">
                                    <div class="w-24 h-24 lg:w-28 lg:h-28 mx-auto bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        <img src="{{ asset('images/certifications/9001-2015.png') }}" alt="ISO 9001 Certification" class="w-16 h-16 lg:w-20 lg:h-20 object-contain cursor-pointer" onclick="openModal('{{ asset('images/certifications/9001-2015.png') }}', 'ISO 9001:2015 Quality Management Systems')">
                                    </div>
                                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-orange-400 rounded-full flex items-center justify-center cursor-pointer opacity-0 group-hover:opacity-100 transition-opacity duration-300" onclick="openModal('{{ asset('images/certifications/9001-2015.png') }}', 'ISO 9001:2015 Quality Management Systems')">
                                        <i class="fas fa-search-plus text-white text-xs"></i>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-2">ISO 9001:2015</h3>
                                    <p class="text-gray-600">Quality Management Systems</p>
                                </div>

                                <!-- Hover Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-br from-orange-400/95 to-orange-500/95 rounded-3xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 backdrop-blur-sm">
                                    <div class="text-center text-white p-6">
                                        <p class="mb-4 font-medium">Demonstrates our commitment to consistent quality and customer satisfaction in Ghana.</p>
                                        <button class="bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded-full font-semibold hover:bg-white/30 transition-colors duration-200" onclick="openModal('{{ asset('images/certifications/9001-2015.png') }}', 'ISO 9001:2015 Quality Management Systems')">
                                            <i class="fas fa-eye mr-2"></i>View Certificate
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Description Section -->
        <div class="border-t border-gray-200 pt-16">
            <div class="max-w-5xl mx-auto">
                <!-- Tanzania Description -->
                <div id="tanzania-description" class="description-content active opacity-100 transform translate-y-0 transition-all duration-500">
                    <div class="text-center mb-12">
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6">Our Certifications in Tanzania</h3>
                        <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                            TOP ARCHIVE EA LIMITED operates in Tanzania under comprehensive ISO certifications that ensure the highest standards of data security and quality management. Our international certifications demonstrate our commitment to excellence in information security and service delivery.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                        <div class="benefit-item group text-center">
                            <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Information Security</h4>
                            <p class="text-gray-600 leading-relaxed">ISO/IEC 27001:2013 certified for comprehensive information security management systems.</p>
                        </div>

                        <div class="benefit-item group text-center">
                            <div class="bg-gradient-to-br from-blue-400 to-blue-500 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <i class="fas fa-certificate text-white text-xl"></i>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Quality Assurance</h4>
                            <p class="text-gray-600 leading-relaxed">ISO 9001:2015 certification ensuring consistent quality in records management and digitization services.</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-400 rounded-xl p-6 lg:p-8">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-yellow-600 text-xl mt-1"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-gray-700 leading-relaxed">
                                    <span class="font-bold text-gray-900">Tanzania Operations:</span> Based at Plot 140 Nyerere Road, Kipawa, Dar es Salaam, our facility provides records management, off-site storage, digitization, software services, scanning, and archival consultation with full regulatory compliance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ghana Description -->
                <div id="ghana-description" class="description-content hidden opacity-0 transform translate-y-4 transition-all duration-500">
                    <div class="text-center mb-12">
                        <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6">Our Certifications in Ghana</h3>
                        <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
                            TOP ARCHIVE LIMITED operates in Ghana with ISO 9001:2015 certification ensuring the highest standards of quality management. Our international certification demonstrates our commitment to excellence in data processing and archiving services.
                        </p>
                    </div>

                    <div class="flex justify-center mb-12">
                        <div class="benefit-item group max-w-md text-center">
                            <div class="bg-gradient-to-br from-orange-400 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <i class="fas fa-star text-white text-xl"></i>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-4">Quality Excellence</h4>
                            <p class="text-gray-600 leading-relaxed">ISO 9001:2015 certification for data processing and archiving services with international quality standards.</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-orange-50 to-orange-100 border-l-4 border-orange-400 rounded-xl p-6 lg:p-8">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-orange-600 text-xl mt-1"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-gray-700 leading-relaxed">
                                    <span class="font-bold text-gray-900">Ghana Operations:</span> Located at Plot IND/A/6481, Heavy Industrial Area, Tema, our facility operates with ISO 9001:2015 certification, providing specialized data processing and archiving services with international quality standards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="certModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 invisible transition-all duration-300">
    <div class="bg-white rounded-3xl p-8 max-w-2xl w-full mx-4 transform scale-95 transition-transform duration-300">
        <div class="flex justify-between items-center mb-6">
            <h5 id="modalTitle" class="text-xl font-bold text-gray-900">Certification</h5>
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        <div class="text-center">
            <img id="modalImage" src="" alt="Certification" class="w-full h-auto rounded-xl shadow-lg">
        </div>
    </div>
</div>

<style>
    .country-tab.active {
        background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        color: #1f2937;
        box-shadow: 0 10px 25px rgba(251, 191, 36, 0.3);
    }
    .country-tab:not(.active):hover {
        color: #1f2937;
        background-color: #f9fafb;
    }
</style>

<script>
    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {

        // Tab switching function
        window.switchTab = function(country) {
            // Update tab buttons
            document.querySelectorAll('.country-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            document.getElementById(country + '-tab').classList.add('active');

            // Update tab content
            document.querySelectorAll('.tab-pane').forEach(pane => {
                pane.classList.remove('active');
                pane.classList.add('hidden', 'opacity-0', 'translate-y-4');
            });

            setTimeout(() => {
                document.getElementById(country + '-content').classList.remove('hidden');
                setTimeout(() => {
                    document.getElementById(country + '-content').classList.add('active', 'opacity-100');
                    document.getElementById(country + '-content').classList.remove('opacity-0', 'translate-y-4');
                }, 50);
            }, 250);

            // Update descriptions
            document.querySelectorAll('.description-content').forEach(desc => {
                desc.classList.remove('active', 'opacity-100');
                desc.classList.add('opacity-0', 'translate-y-4');
                setTimeout(() => {
                    desc.classList.add('hidden');
                }, 300);
            });

            setTimeout(() => {
                document.getElementById(country + '-description').classList.remove('hidden');
                setTimeout(() => {
                    document.getElementById(country + '-description').classList.add('active', 'opacity-100');
                    document.getElementById(country + '-description').classList.remove('opacity-0', 'translate-y-4');
                }, 50);
            }, 350);
        };

        // Modal functions
        window.openModal = function(imageSrc, title) {
            console.log('Opening modal with:', imageSrc, title); // Debug log
            const modal = document.getElementById('certModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');

            if (!modal || !modalImage || !modalTitle) {
                console.error('Modal elements not found');
                return;
            }

            modalImage.src = imageSrc;
            modalTitle.textContent = title;

            // Show modal
            modal.classList.remove('invisible', 'opacity-0');
            const modalContent = modal.querySelector('.bg-white');
            if (modalContent) {
                modalContent.classList.remove('scale-95');
                modalContent.classList.add('scale-100');
            }

            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        };

        window.closeModal = function() {
            const modal = document.getElementById('certModal');
            if (!modal) return;

            modal.classList.add('opacity-0');
            const modalContent = modal.querySelector('.bg-white');
            if (modalContent) {
                modalContent.classList.remove('scale-100');
                modalContent.classList.add('scale-95');
            }

            setTimeout(() => {
                modal.classList.add('invisible');
                document.body.style.overflow = ''; // Restore body scroll
            }, 300);
        };

        // Set up event listeners
        const modal = document.getElementById('certModal');
        if (modal) {
            // Close modal on outside click
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });
        }

        // Close modal on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Add click event listeners to all certificate images and buttons
        const certImages = document.querySelectorAll('.cert-card img');
        const viewButtons = document.querySelectorAll('.cert-card button');
        const searchIcons = document.querySelectorAll('.fa-search-plus');

        // Handle image clicks
        certImages.forEach(img => {
            img.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const title = this.closest('.cert-card').querySelector('h3').textContent + ' - ' +
                    this.closest('.cert-card').querySelector('p').textContent;
                openModal(this.src, title);
            });
        });

        // Handle button clicks
        viewButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const title = this.closest('.cert-card').querySelector('h3').textContent + ' - ' +
                    this.closest('.cert-card').querySelector('p').textContent;
                const img = this.closest('.cert-card').querySelector('img');
                if (img) {
                    openModal(img.src, title);
                }
            });
        });

        // Handle search icon clicks
        searchIcons.forEach(icon => {
            icon.closest('div').addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const title = this.closest('.cert-card').querySelector('h3').textContent + ' - ' +
                    this.closest('.cert-card').querySelector('p').textContent;
                const img = this.closest('.cert-card').querySelector('img');
                if (img) {
                    openModal(img.src, title);
                }
            });
        });
    });
</script>