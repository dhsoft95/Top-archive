
<section class="certifications-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" style="color: black">Certifications</h2>
{{--            <div class="section-title-underline"></div>--}}
            <p class="section-subtitle">Internationally recognized standards we adhere to across our operations</p>
        </div>

        <!-- Country Tabs -->
        <div class="country-tabs-wrapper">
            <ul class="nav nav-pills country-tabs justify-content-center" id="countryTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tanzania-tab" data-bs-toggle="pill" data-bs-target="#tanzania" type="button" role="tab" aria-controls="tanzania" aria-selected="true">
                        <i class="fas fa-flag"></i>
                        Tanzania
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="ghana-tab" data-bs-toggle="pill" data-bs-target="#ghana" type="button" role="tab" aria-controls="ghana" aria-selected="false">
                        <i class="fas fa-flag"></i>
                        Ghana
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="countryTabsContent">
            <!-- Tanzania Tab -->
            <div class="tab-pane fade show active" id="tanzania" role="tabpanel" aria-labelledby="tanzania-tab">
                <div class="country-certifications">
                    <div class="row justify-content-center">
                        <!-- ISO 27001 Certification -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="certification-card">
                                <div class="certification-icon">
                                    <img src="{{ asset('images/certifications/27001-2013.png') }}" alt="ISO 27001 Certification" class="img-fluid certification-image" data-cert-image="{{ asset('images/certifications/27001-2013.png') }}" data-cert-title="ISO/IEC 27001:2013 Information Security Management Systems">
                                    <div class="view-larger">
                                        <i class="fas fa-search-plus"></i>
                                        <span>View</span>
                                    </div>
                                </div>
                                <div class="certification-content">
                                    <h3>ISO/IEC 27001:2013</h3>
                                    <p>Information Security Management Systems</p>
                                </div>
                                <div class="certification-hover">
                                    <div class="hover-content">
                                        <p>Ensures we implement best practices for information security controls in our Tanzania operations.</p>
                                        <button class="btn btn-light btn-sm mt-2 view-cert-btn" data-cert-image="{{ asset('images/certifications/27001-2013.png') }}" data-cert-title="ISO/IEC 27001:2013 Information Security Management Systems">
                                            <i class="fas fa-eye"></i> View Certificate
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ISO 9001 Certification -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="certification-card">
                                <div class="certification-icon">
                                    <img src="{{ asset('images/certifications/9001-2015.png') }}" alt="ISO 9001 Certification" class="img-fluid certification-image" data-cert-image="{{ asset('images/certifications/9001-2015.png') }}" data-cert-title="ISO 9001:2015 Quality Management Systems">
                                    <div class="view-larger">
                                        <i class="fas fa-search-plus"></i>
                                        <span>View</span>
                                    </div>
                                </div>
                                <div class="certification-content">
                                    <h3>ISO 9001:2015</h3>
                                    <p>Quality Management Systems</p>
                                </div>
                                <div class="certification-hover">
                                    <div class="hover-content">
                                        <p>Demonstrates our commitment to consistent quality and customer satisfaction in Tanzania.</p>
                                        <button class="btn btn-light btn-sm mt-2 view-cert-btn" data-cert-image="{{ asset('images/certifications/9001-2015.png') }}" data-cert-title="ISO 9001:2015 Quality Management Systems">
                                            <i class="fas fa-eye"></i> View Certificate
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ghana Tab -->
            <div class="tab-pane fade" id="ghana" role="tabpanel" aria-labelledby="ghana-tab">
                <div class="country-certifications">
                    <div class="row justify-content-center">
                        <!-- ISO 9001 Certification -->
                        <div class="col-lg-12 col-md-12 mb-4">
                            <div class="certification-card">
                                <div class="certification-icon">
                                    <img src="{{ asset('images/certifications/9001-2015.png') }}" alt="ISO 9001 Certification" class="img-fluid certification-image" data-cert-image="{{ asset('images/certifications/9001-2015.png') }}" data-cert-title="ISO 9001:2015 Quality Management Systems">
                                    <div class="view-larger">
                                        <i class="fas fa-search-plus"></i>
                                        <span>View</span>
                                    </div>
                                </div>
                                <div class="certification-content">
                                    <h3>ISO 9001:2015</h3>
                                    <p>Quality Management Systems</p>
                                </div>
                                <div class="certification-hover">
                                    <div class="hover-content">
                                        <p>Demonstrates our commitment to consistent quality and customer satisfaction in Ghana.</p>
                                        <button class="btn btn-light btn-sm mt-2 view-cert-btn" data-cert-image="{{ asset('images/certifications/9001-2015.png') }}" data-cert-title="ISO 9001:2015 Quality Management Systems">
                                            <i class="fas fa-eye"></i> View Certificate
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
        <div class="certifications-description mt-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Tanzania Description -->
                    <div class="description-content country-description active" id="tanzania-description">
                        <h3 class="description-title">Our Certifications in Tanzania</h3>
                        <p class="description-text">
                            TOP ARCHIVE EA LIMITED operates in Tanzania under comprehensive ISO certifications that ensure the highest standards of data security and quality management. Our international certifications demonstrate our commitment to excellence in information security and service delivery.
                        </p>

                        <div class="row mt-4">
                            <div class="col-md-6 mb-3">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h4>Information Security</h4>
                                    <p>ISO/IEC 27001:2013 certified for comprehensive information security management systems.</p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-certificate"></i>
                                    </div>
                                    <h4>Quality Assurance</h4>
                                    <p>ISO 9001:2015 certification ensuring consistent quality in records management and digitization services.</p>
                                </div>
                            </div>
                        </div>

                        <div class="compliance-note mt-4">
                            <div class="compliance-content">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="compliance-text">
                                    <strong>Tanzania Operations:</strong> Based at Plot 140 Nyerere Road, Kipawa, Dar es Salaam, our facility provides records management, off-site storage, digitization, software services, scanning, and archival consultation with full regulatory compliance.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ghana Description -->
                    <div class="description-content country-description" id="ghana-description">
                        <h3 class="description-title">Our Certifications in Ghana</h3>
                        <p class="description-text">
                            TOP ARCHIVE LIMITED operates in Ghana with ISO 9001:2015 certification ensuring the highest standards of quality management. Our international certification demonstrates our commitment to excellence in data processing and archiving services.
                        </p>

                        <div class="row mt-4">
                            <div class="col-md-12 mb-3">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>Quality Excellence</h4>
                                    <p>ISO 9001:2015 certification for data processing and archiving services with international quality standards.</p>
                                </div>
                            </div>
                        </div>

                        <div class="compliance-note mt-4">
                            <div class="compliance-content">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="compliance-text">
                                    <strong>Ghana Operations:</strong> Located at Plot IND/A/6481, Heavy Industrial Area, Tema, our facility operates with ISO 9001:2015 certification, providing specialized data processing and archiving services with international quality standards.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certification Modal -->
<div class="modal fade" id="certModal" tabindex="-1" aria-labelledby="certModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="certModalLabel">Certification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalCertImage" src="" alt="Certification" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Bootstrap tabs
        const triggerTabList = document.querySelectorAll('#countryTabs button[data-bs-toggle="pill"]');

        triggerTabList.forEach(triggerEl => {
            triggerEl.addEventListener('click', function(e) {
                e.preventDefault();

                // Get target country
                const target = this.getAttribute('data-bs-target').replace('#', '');

                // Hide all descriptions
                const descriptions = document.querySelectorAll('.country-description');
                descriptions.forEach(desc => {
                    desc.classList.remove('active');
                });

                // Show corresponding description
                setTimeout(() => {
                    const targetDescription = document.getElementById(target + '-description');
                    if (targetDescription) {
                        targetDescription.classList.add('active');
                    }
                }, 150);
            });
        });

        // Initialize modal functionality
        const modal = new bootstrap.Modal(document.getElementById('certModal'));
        const certImages = document.querySelectorAll('.certification-image');
        const viewButtons = document.querySelectorAll('.view-cert-btn');
        const viewLargerButtons = document.querySelectorAll('.view-larger');
        const modalImage = document.getElementById('modalCertImage');
        const modalTitle = document.getElementById('certModalLabel');

        // Handle image clicks
        certImages.forEach(img => {
            img.addEventListener('click', function(e) {
                e.preventDefault();
                const certImage = this.getAttribute('data-cert-image');
                const certTitle = this.getAttribute('data-cert-title');

                modalImage.src = certImage;
                modalTitle.textContent = certTitle;
                modal.show();
            });
        });

        // Handle view button clicks (in hover overlay)
        viewButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const certImage = this.getAttribute('data-cert-image');
                const certTitle = this.getAttribute('data-cert-title');

                modalImage.src = certImage;
                modalTitle.textContent = certTitle;
                modal.show();
            });
        });

        // Handle view larger button clicks (top-right corner)
        viewLargerButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const img = this.previousElementSibling;
                const certImage = img.getAttribute('data-cert-image');
                const certTitle = img.getAttribute('data-cert-title');

                modalImage.src = certImage;
                modalTitle.textContent = certTitle;
                modal.show();
            });
        });
    });
</script>

<style>
    .certifications-section {
        padding: 70px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #f5f5f5 100%);
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 2.3rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
    }

    .section-title-underline {
        height: 3px;
        width: 60px;
        background: #ffc107;
        margin: 0 auto 20px;
        border-radius: 2px;
    }

    .section-subtitle {
        font-size: 1rem;
        color: #6c757d;
        max-width: 700px;
        margin: 0 auto;
    }

    /* Country Tabs Styling */
    .country-tabs-wrapper {
        margin-bottom: 40px;
    }

    .country-tabs {
        border: none;
        gap: 15px;
    }

    .country-tabs .nav-link {
        background: #fff;
        border: 2px solid #e9ecef;
        color: #6c757d;
        padding: 12px 25px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .country-tabs .nav-link i {
        margin-right: 8px;
        font-size: 0.9rem;
    }

    .country-tabs .nav-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-color: #ffc107;
        color: #333;
    }

    .country-tabs .nav-link.active {
        background: linear-gradient(135deg, #ffc107 0%, #ffab00 100%);
        border-color: #ffc107;
        color: #333;
        box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
    }

    .country-tabs .nav-link.active::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .country-tabs .nav-link.active:hover::before {
        left: 100%;
    }

    /* Tab Content */
    .country-certifications {
        padding-top: 20px;
    }

    .certification-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        padding: 25px 15px;
        height: 100%;
        text-align: center;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .certification-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        border-color: rgba(255, 193, 7, 0.3);
    }

    .certification-icon {
        margin-bottom: 15px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .certification-icon img {
        max-height: 90px;
        max-width: 85%;
        transition: transform 0.3s ease;
        border-radius: 8px;
    }

    .certification-card:hover .certification-icon img {
        transform: scale(1.1) rotate(2deg);
    }

    .certification-content h3 {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 8px;
        color: #343a40;
    }

    .certification-content p {
        color: #6c757d;
        font-size: 0.9rem;
        margin-bottom: 15px;
    }

    /* Improved Country Badge Styling */
    .country-badge {
        display: inline-flex;
        align-items: center;
        padding: 10px 18px;
        border-radius: 25px;
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;
        cursor: pointer;
        margin-top: 5px;
    }

    .country-badge i {
        margin-right: 8px;
        font-size: 0.9rem;
        animation: wave 2s ease-in-out infinite;
    }

    .country-badge:hover {
        transform: translateY(-2px) scale(1.05);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .country-badge::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s ease;
    }

    .country-badge:hover::before {
        left: 100%;
    }

    /* Country-specific badge styles */
    .country-badge.tanzania {
        background: linear-gradient(135deg, #ffc107 0%, #ffab00 100%);
        color: #333;
        border-color: #ffab00;
    }

    .country-badge.tanzania:hover {
        background: linear-gradient(135deg, #ffab00 0%, #ff8f00 100%);
        box-shadow: 0 8px 25px rgba(255, 193, 7, 0.4);
    }

    .country-badge.nigeria {
        background: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);
        color: #fff;
        border-color: #27ae60;
    }

    .country-badge.nigeria:hover {
        background: linear-gradient(135deg, #229954 0%, #27ae60 100%);
        box-shadow: 0 8px 25px rgba(39, 174, 96, 0.4);
    }

    .country-badge.ghana {
        background: linear-gradient(135deg, #e67e22 0%, #f39c12 100%);
        color: #fff;
        border-color: #e67e22;
    }

    .country-badge.ghana:hover {
        background: linear-gradient(135deg, #d35400 0%, #e67e22 100%);
        box-shadow: 0 8px 25px rgba(230, 126, 34, 0.4);
    }

    /* Pulse animation for badges */
    @keyframes wave {
        0%, 100% { transform: rotate(0deg); }
        25% { transform: rotate(-5deg); }
        75% { transform: rotate(5deg); }
    }

    @keyframes pulse {
        0% { box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); }
        50% { box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2); }
        100% { box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); }
    }

    .certification-card:hover .country-badge {
        animation: pulse 2s ease-in-out infinite;
    }

    .certification-hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(255, 193, 7, 0.95) 0%, rgba(255, 171, 0, 0.95) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
        border-radius: 12px;
    }

    .certification-card:hover .certification-hover {
        opacity: 1;
    }

    .hover-content {
        padding: 20px;
        color: #333;
        text-align: center;
    }

    .hover-content p {
        margin-bottom: 0;
        font-size: 0.9rem;
        line-height: 1.5;
        font-weight: 500;
    }

    /* Animation for tab switching */
    .tab-pane {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.3s ease;
    }

    .tab-pane.show.active {
        opacity: 1;
        transform: translateY(0);
    }

    @media (max-width: 991px) {
        .certification-card {
            margin-bottom: 25px;
        }

        .country-tabs {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .country-tabs .nav-link {
            padding: 10px 20px;
            font-size: 0.9rem;
        }

        .country-badge {
            padding: 8px 15px;
            font-size: 0.8rem;
        }

        .country-badge i {
            margin-right: 6px;
            font-size: 0.8rem;
        }
    }

    /* Description Section Styling */
    .certifications-description {
        padding-top: 50px;
        border-top: 1px solid #e9ecef;
    }

    .description-content {
        text-align: center;
    }

    /* Country-specific descriptions */
    .country-description {
        display: none;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.3s ease;
    }

    .country-description.active {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .description-title {
        font-size: 1.8rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
    }

    .description-text {
        font-size: 1.1rem;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .benefit-item {
        text-align: center;
        padding: 20px 15px;
    }

    .benefit-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ffc107 0%, #ffab00 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        transition: transform 0.3s ease;
    }

    .benefit-icon:hover {
        transform: scale(1.1);
    }

    .benefit-icon i {
        font-size: 1.5rem;
        color: #333;
    }

    .benefit-item h4 {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }

    .benefit-item p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.4;
        margin-bottom: 0;
    }

    .compliance-note {
        background: #f8f9fa;
        border-left: 4px solid #ffc107;
        padding: 20px;
        border-radius: 8px;
    }

    .compliance-content {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .compliance-content i {
        font-size: 1.2rem;
        color: #ffc107;
        margin-top: 2px;
        flex-shrink: 0;
    }

    .compliance-text {
        font-size: 0.95rem;
        color: #495057;
        line-height: 1.5;
        text-align: left;
    }

    .compliance-text strong {
        color: #333;
    }

    @media (max-width: 991px) {
        .certifications-description {
            padding-top: 40px;
        }

        .description-title {
            font-size: 1.5rem;
        }

        .description-text {
            font-size: 1rem;
        }

        .benefit-item {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 767px) {
        .section-title {
            font-size: 1.8rem;
        }

        .certification-icon {
            height: 90px;
        }

        .certification-icon img {
            max-height: 80px;
        }

        .country-tabs .nav-link {
            padding: 8px 15px;
            font-size: 0.8rem;
        }

        .country-tabs .nav-link i {
            margin-right: 5px;
        }

        .country-badge {
            padding: 6px 12px;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
        }

        .country-badge i {
            margin-right: 5px;
            font-size: 0.7rem;
        }

        .description-title {
            font-size: 1.3rem;
        }

        .description-text {
            font-size: 0.95rem;
        }

        .compliance-content {
            flex-direction: column;
            gap: 10px;
        }

        .compliance-content i {
            align-self: center;
        }

        .compliance-text {
            text-align: center;
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<script>
    // Add smooth animation when switching tabs
    document.addEventListener('DOMContentLoaded', function() {
        const triggerTabList = document.querySelectorAll('#countryTabs button')

        triggerTabList.forEach(triggerEl => {
            const tabTrigger = new bootstrap.Tab(triggerEl)

            triggerEl.addEventListener('click', event => {
                event.preventDefault()

                // Get the target country from the button id
                const targetCountry = triggerEl.id.replace('-tab', '')

                // Hide all descriptions first
                document.querySelectorAll('.country-description').forEach(desc => {
                    desc.classList.remove('active')
                })

                // Show the corresponding description with a slight delay
                setTimeout(() => {
                    tabTrigger.show()
                    const targetDescription = document.getElementById(targetCountry + '-description')
                    if (targetDescription) {
                        targetDescription.classList.add('active')
                    }
                }, 50)
            })
        })
    })
</script>