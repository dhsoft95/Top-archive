<section class="relative py-16 lg:py-20 bg-white">
    <!-- Simple Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-white"></div>

    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
        <!-- Clean Header -->
        <div class="text-center mb-12 lg:mb-16">
            <div class="inline-flex items-center space-x-2 bg-gray-100 rounded-full px-4 py-2 border border-gray-200 mb-6">
                <div class="w-2 h-2 bg-[#fbbf23] rounded-full"></div>
                <span class="text-sm font-medium text-gray-600 uppercase tracking-wide">Certifications</span>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Our Certifications
            </h2>

            <div class="w-16 h-1 bg-[#fbbf23] mx-auto mb-6 rounded-full"></div>

            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Internationally recognized standards demonstrating our commitment to excellence and security.
            </p>
        </div>

        <!-- Simple Tab Navigation -->
        <div class="flex justify-center mb-12 lg:mb-16">
            <div class="inline-flex bg-white rounded-xl p-1 shadow-sm border border-gray-200">
                <button id="tanzania-tab" class="country-tab active flex items-center space-x-2 px-6 py-3 rounded-lg font-medium transition-all duration-300" onclick="switchTab('tanzania')">
                    <div class="w-6 h-6 bg-[#fbbf23] rounded-md flex items-center justify-center">
                        <i class="fas fa-flag text-white text-xs"></i>
                    </div>
                    <span>Tanzania</span>
                </button>

                <button id="ghana-tab" class="country-tab flex items-center space-x-2 px-6 py-3 rounded-lg font-medium transition-all duration-300" onclick="switchTab('ghana')">
                    <div class="w-6 h-6 bg-gray-400 rounded-md flex items-center justify-center">
                        <i class="fas fa-flag text-white text-xs"></i>
                    </div>
                    <span>Ghana</span>
                </button>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Tanzania Tab -->
            <div id="tanzania-content" class="tab-pane active">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <!-- ISO 27001 Card -->
                    <div class="group bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-[#fbbf23] rounded-lg flex items-center justify-center">
                                <i class="fas fa-shield-alt text-white text-lg"></i>
                            </div>
                            <button onclick="openModal('{{ asset('images/certifications/Certificate - ISO 27001-2013 Information Security Management Systems.pdf') }}', 'ISO/IEC 27001:2013 Information Security Management Systems', 'pdf')"
                                    class="w-8 h-8 bg-gray-100 hover:bg-[#fbbf23] rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fas fa-external-link-alt text-gray-600 group-hover:text-white text-xs"></i>
                            </button>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-2">ISO/IEC 27001:2013</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Information Security Management Systems certification ensuring robust data protection.</p>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <span class="text-xs font-medium text-[#fbbf23] bg-amber-50 px-2 py-1 rounded">Information Security</span>
                            <div class="text-xs text-gray-500">Tanzania</div>
                        </div>
                    </div>

                    <!-- ISO 9001 Card -->
                    <div class="group bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-[#fbbf23] rounded-lg flex items-center justify-center">
                                <i class="fas fa-certificate text-white text-lg"></i>
                            </div>
                            <button onclick="openModal('{{ asset('images/certifications/Certificate - ISO 9001-2015 Quality Management Systems.pdf') }}', 'ISO 9001:2015 Quality Management Systems', 'pdf')"
                                    class="w-8 h-8 bg-gray-100 hover:bg-[#fbbf23] rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fas fa-external-link-alt text-gray-600 group-hover:text-white text-xs"></i>
                            </button>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-2">ISO 9001:2015</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Quality Management Systems certification demonstrating consistent quality and customer satisfaction.</p>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <span class="text-xs font-medium text-[#fbbf23] bg-amber-50 px-2 py-1 rounded">Quality Management</span>
                            <div class="text-xs text-gray-500">Tanzania</div>
                        </div>
                    </div>

                    <!-- Data Processor Card -->
                    <div class="group bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-[#fbbf23] rounded-lg flex items-center justify-center">
                                <i class="fas fa-database text-white text-lg"></i>
                            </div>
                            <button onclick="openModal('{{ asset('images/certifications/Data Processor Certificate - Top Archive EA Limited.pdf') }}', 'Data Processor Certificate', 'pdf')"
                                    class="w-8 h-8 bg-gray-100 hover:bg-[#fbbf23] rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fas fa-external-link-alt text-gray-600 group-hover:text-white text-xs"></i>
                            </button>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-2">Data Processor</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Official certification for secure and compliant data processing operations.</p>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <span class="text-xs font-medium text-[#fbbf23] bg-amber-50 px-2 py-1 rounded">Data Processing</span>
                            <div class="text-xs text-gray-500">Tanzania</div>
                        </div>
                    </div>

                    <!-- Business License Card -->
                    <div class="group bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center">
                                <i class="fas fa-briefcase text-white text-lg"></i>
                            </div>
                            <button onclick="openModal('{{ asset('images/certifications/Business License - Top Archive EA Limited.pdf') }}', 'Business License', 'pdf')"
                                    class="w-8 h-8 bg-gray-100 hover:bg-gray-600 rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fas fa-external-link-alt text-gray-600 group-hover:text-white text-xs"></i>
                            </button>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-2">Business License</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Official business registration and operating license for Tanzania operations.</p>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <span class="text-xs font-medium text-gray-600 bg-gray-50 px-2 py-1 rounded">Business Registration</span>
                            <div class="text-xs text-gray-500">Tanzania</div>
                        </div>
                    </div>

                    <!-- Certificate of Formation Card -->
                    <div class="group bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center">
                                <i class="fas fa-file-contract text-white text-lg"></i>
                            </div>
                            <button onclick="openModal('{{ asset('images/certifications/Certificate of Formation - Top Archive EA Limited.pdf') }}', 'Certificate of Formation', 'pdf')"
                                    class="w-8 h-8 bg-gray-100 hover:bg-gray-600 rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fas fa-external-link-alt text-gray-600 group-hover:text-white text-xs"></i>
                            </button>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-2">Certificate of Formation</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Corporate formation certificate establishing Top Archive EA Limited in Tanzania.</p>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <span class="text-xs font-medium text-gray-600 bg-gray-50 px-2 py-1 rounded">Corporate Formation</span>
                            <div class="text-xs text-gray-500">Tanzania</div>
                        </div>
                    </div>

                    <!-- Tax Clearance Card -->
                    <div class="group bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center">
                                <i class="fas fa-receipt text-white text-lg"></i>
                            </div>
                            <button onclick="openModal('{{ asset('images/certifications/Tax Clearance Certificate - Top Archive EA Limited.pdf') }}', 'Tax Clearance Certificate', 'pdf')"
                                    class="w-8 h-8 bg-gray-100 hover:bg-gray-600 rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fas fa-external-link-alt text-gray-600 group-hover:text-white text-xs"></i>
                            </button>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-2">Tax Clearance</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Current tax clearance certificate demonstrating compliance with taxation requirements.</p>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <span class="text-xs font-medium text-gray-600 bg-gray-50 px-2 py-1 rounded">Tax Compliance</span>
                            <div class="text-xs text-gray-500">Tanzania</div>
                        </div>
                    </div>
                </div>

                <!-- Description Section -->
                <div id="tanzania-description" class="description-content active bg-gray-50 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Tanzania Operations</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Our Tanzania operations are fully certified and compliant with international standards for information security, quality management, and data processing. These certifications demonstrate our commitment to maintaining the highest standards of security, quality, and regulatory compliance in all our East African operations.
                    </p>
                </div>
            </div>

            <!-- Ghana Tab -->
            <div id="ghana-content" class="tab-pane hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <!-- Business Registration Card -->
                    <div class="group bg-white rounded-xl p-6 shadow-sm border border-gray-200 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-gray-600 rounded-lg flex items-center justify-center">
                                <i class="fas fa-building text-white text-lg"></i>
                            </div>
                            <button onclick="openModal('{{ asset('images/certifications/Business Registration - Top Archive West Africa Limited.pdf') }}', 'Business Registration Certificate', 'pdf')"
                                    class="w-8 h-8 bg-gray-100 hover:bg-gray-600 rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fas fa-external-link-alt text-gray-600 group-hover:text-white text-xs"></i>
                            </button>
                        </div>

                        <h3 class="text-lg font-bold text-gray-900 mb-2">Business Registration</h3>
                        <p class="text-gray-600 text-sm mb-4 leading-relaxed">Official business registration certificate for Top Archive West Africa Limited operations in Ghana.</p>

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <span class="text-xs font-medium text-gray-600 bg-gray-50 px-2 py-1 rounded">Business Registration</span>
                            <div class="text-xs text-gray-500">Ghana</div>
                        </div>
                    </div>
                </div>

                <!-- Description Section -->
                <div id="ghana-description" class="description-content hidden bg-gray-50 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Ghana Operations</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Our Ghana operations through Top Archive West Africa Limited are fully registered and compliant with local business regulations. We maintain the same high standards of service delivery and security protocols across all our West African operations.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="certModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 invisible opacity-0 transition-all duration-300">
        <div class="bg-white rounded-xl p-6 max-w-2xl w-full mx-4 transform scale-95 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <h3 id="modalTitle" class="text-xl font-bold text-gray-900"></h3>
                <button onclick="closeModal()" class="w-8 h-8 bg-gray-100 hover:bg-gray-200 rounded-lg flex items-center justify-center transition-colors">
                    <i class="fas fa-times text-gray-600"></i>
                </button>
            </div>

            <div id="modalImage" class="hidden">
                <img src="" alt="" class="w-full h-auto rounded-lg">
            </div>

            <div id="pdfViewer" class="hidden text-center py-8">
                <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-file-pdf text-[#fbbf23] text-2xl"></i>
                </div>
                <h4 id="pdfTitle" class="text-lg font-semibold text-gray-900 mb-2"></h4>
                <a id="pdfLink" href="#" target="_blank"
                   class="inline-flex items-center space-x-2 bg-[#fbbf23] hover:bg-amber-500 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-external-link-alt"></i>
                    <span>Open PDF Certificate</span>
                </a>
                <p class="text-sm text-gray-500 mt-2">File will open in a new tab</p>
            </div>
        </div>
    </div>
</section>

<style>
    .country-tab.active {
        background: #fbbf23;
        color: white;
    }

    .country-tab.active .bg-gray-400 {
        background: white !important;
    }

    .country-tab.active i {
        color: #fbbf23 !important;
    }

    .tab-pane {
        transition: all 0.3s ease;
    }

    .description-content {
        transition: all 0.3s ease;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.switchTab = function(country) {
            // Update tab buttons
            document.querySelectorAll('.country-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            document.getElementById(country + '-tab').classList.add('active');

            // Update tab content
            document.querySelectorAll('.tab-pane').forEach(pane => {
                pane.classList.remove('active');
                pane.classList.add('hidden');
            });

            document.getElementById(country + '-content').classList.remove('hidden');
            document.getElementById(country + '-content').classList.add('active');

            // Update description
            document.querySelectorAll('.description-content').forEach(desc => {
                desc.classList.remove('active');
                desc.classList.add('hidden');
            });

            document.getElementById(country + '-description').classList.remove('hidden');
            document.getElementById(country + '-description').classList.add('active');
        };

        window.openModal = function(fileSrc, title, fileType = 'image') {
            const modal = document.getElementById('certModal');
            const modalImage = document.getElementById('modalImage');
            const pdfViewer = document.getElementById('pdfViewer');
            const pdfLink = document.getElementById('pdfLink');
            const pdfTitle = document.getElementById('pdfTitle');
            const modalTitle = document.getElementById('modalTitle');

            modalTitle.textContent = title;

            if (fileType === 'pdf') {
                modalImage.classList.add('hidden');
                pdfViewer.classList.remove('hidden');
                pdfLink.href = fileSrc;
                pdfTitle.textContent = title;
            } else {
                pdfViewer.classList.add('hidden');
                modalImage.classList.remove('hidden');
                modalImage.src = fileSrc;
                modalImage.alt = title;
            }

            modal.classList.remove('invisible');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.querySelector('.bg-white').classList.remove('scale-95');
                modal.querySelector('.bg-white').classList.add('scale-100');
            }, 50);

            document.body.style.overflow = 'hidden';
        };

        window.closeModal = function() {
            const modal = document.getElementById('certModal');
            modal.classList.add('opacity-0');
            modal.querySelector('.bg-white').classList.remove('scale-100');
            modal.querySelector('.bg-white').classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('invisible');
                document.body.style.overflow = '';
            }, 300);
        };

        // Event listeners
        const modal = document.getElementById('certModal');
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === this) closeModal();
            });
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeModal();
        });
    });
</script>