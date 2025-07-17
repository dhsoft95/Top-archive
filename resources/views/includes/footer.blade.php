<footer class="footer" style="margin-top: 100px">
    <!-- Add Font Awesome CDN in the head of your HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Add Bootstrap CSS and JS if not already included -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>--}}

    <!-- Fixed WhatsApp Button -->
    <div style="position: fixed; bottom: 25px; right: 25px; z-index: 1000;">
        <button class="whatsapp-btn" data-bs-toggle="modal" data-bs-target="#whatsappModal">
            <i class="fab fa-whatsapp"></i>
            <span class="whatsapp-btn-text">Chat with us</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <!-- Top Archive Column -->
            <div class="col-md-3 mb-4">
                <div class="footer-brand">
                    <div class="brand-logo-section">
                        <div class="brand-logo">
                            <img src="assets/images/logo.png" alt="{{ __('messages.company') }}" class="footer-logo">
                        </div>
                        <h5 class="brand-title">{{ __('messages.company') }}</h5>
                    </div>
                    <p class="brand-description">{{ __('messages.complete_archive') }}</p>
                    <div class="social-links">
                        <button class="social-link facebook" data-bs-toggle="modal" data-bs-target="#socialModal" data-country="tanzania">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button class="social-link instagram" data-bs-toggle="modal" data-bs-target="#socialModal" data-country="tanzania">
                            <i class="fab fa-instagram"></i>
                        </button>
                        <button class="social-link linkedin" data-bs-toggle="modal" data-bs-target="#socialModal" data-country="tanzania">
                            <i class="fab fa-linkedin-in"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Company Links Column -->
            <div class="col-md-2 mb-4">
                <div class="footer-section">
                    <h5 class="section-title">{{ __('messages.company') }}</h5>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Ghana Office -->
            <div class="col-md-2 mb-4">
                <div class="footer-section">
                    <h5 class="section-title">{{ __('messages.branches') }}</h5>
                    <div class="branch-info">
                        <div class="branch-header">
                            <span class="country-badge">GH</span>
                            <h6 class="branch-title">{{ __('messages.ghana_office') }}</h6>
                        </div>
                        <div class="branch-details">
                            <p><i class="fas fa-map-marker-alt"></i> P.M.B CT 118 Accra, Ghana</p>
                            <p><i class="fas fa-phone"></i> +233540119622</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tanzania Office -->
            <div class="col-md-2 mb-4">
                <div class="footer-section">
                    <div class="branch-info">
                        <div class="branch-header">
                            <span class="country-badge tz">TZ</span>
                            <h6 class="branch-title">{{ __('messages.tanzania_office') }}</h6>
                        </div>
                        <div class="branch-details">
                            <p><i class="fas fa-map-marker-alt"></i> 79958, Dar es Salaam, Tanzania</p>
                            <p><i class="fas fa-phone"></i> +255 78 8009555</p>
                            <p><i class="fas fa-envelope"></i> <a href="mailto:info.tz@top-archive.com">info.tz@top-archive.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nigeria Office -->
            <div class="col-md-3 mb-4">
                <div class="footer-section">
                    <div class="branch-info">
                        <div class="branch-header">
                            <span class="country-badge ng">NG</span>
                            <h6 class="branch-title">{{ __('messages.nigeria_office') }}</h6>
                        </div>
                        <div class="branch-details">
                            <p><i class="fas fa-map-marker-alt"></i> VI 75934, Lagos, Nigeria</p>
                            <p><i class="fas fa-phone"></i> +234 81 33031000</p>
                            <p><i class="fas fa-envelope"></i> <a href="mailto:info.nig@top-archive.com">info.nig@top-archive.com</a></p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="row footer-bottom mt-5 pt-4">
                <div class="col-md-4 mb-3">
                    <p class="copyright">&copy; {{ __('messages.copyright') }}</p>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <div class="footer-links-bottom">
                        <a href="#">{{ __('messages.terms') }}</a>
                        <a href="#">{{ __('messages.privacy') }}</a>
                        <a href="#">{{ __('messages.cookies') }}</a>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <div class="dropdown language-switcher">
                        <button class="btn btn-language dropdown-toggle" type="button" id="footerLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(app()->getLocale() == 'en')
                                <img src="https://flagcdn.com/w20/gb.png" alt="English" class="me-2">
                                English
                            @else
                                <img src="https://flagcdn.com/w20/tz.png" alt="Swahili" class="me-2">
                                Swahili
                            @endif
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ url('lang/en') }}">
                                    <img src="https://flagcdn.com/w20/gb.png" alt="English" class="me-2">
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ app()->getLocale() == 'sw' ? 'active' : '' }}" href="{{ url('lang/sw') }}">
                                    <img src="https://flagcdn.com/w20/tz.png" alt="Swahili" class="me-2">
                                    Swahili
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</footer>

<style>
    .footer {
        background: linear-gradient(135deg, #0f1419 0%, #1a1f2e 50%, #0f1419 100%);
        color: #ffffff;
        padding: 80px 0 40px;
        position: relative;
        overflow: hidden;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
                radial-gradient(circle at 20% 20%, rgba(255, 193, 7, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 193, 7, 0.05) 0%, transparent 50%);
        pointer-events: none;
    }

    .footer-brand .brand-logo-section {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 1rem;
    }

    .brand-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ffc107, #ffeb3b);
        border-radius: 15px;
        padding: 8px;
        box-shadow: 0 6px 20px rgba(255, 193, 7, 0.3);
        transition: all 0.3s ease;
    }

    .brand-logo:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(255, 193, 7, 0.4);
    }

    .footer-logo {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 8px;
    }

    .footer-brand .brand-title {
        background: linear-gradient(135deg, #ffc107, #ffeb3b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 700;
        font-size: 1.5rem;
        margin: 0;
        position: relative;
    }

    .brand-description {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 2rem;
    }

    .section-title {
        color: #ffffff;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 30px;
        height: 3px;
        background: linear-gradient(90deg, #ffc107, #ffeb3b);
        border-radius: 2px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
        transform: translateX(0);
        transition: all 0.3s ease;
    }

    .footer-links li:hover {
        transform: translateX(5px);
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
    }

    .footer-links a::before {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: #ffc107;
        transition: width 0.3s ease;
    }

    .footer-links a:hover {
        color: #ffc107;
    }

    .footer-links a:hover::before {
        width: 100%;
    }

    .branch-info {
        margin-bottom: 1.5rem;
    }

    .branch-header {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .country-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #ffc107, #ffeb3b);
        color: #000;
        border-radius: 10px;
        font-weight: 700;
        font-size: 0.8rem;
        margin-right: 12px;
        box-shadow: 0 4px 12px rgba(255, 193, 7, 0.3);
    }

    .country-badge.tz {
        background: linear-gradient(135deg, #4CAF50, #8BC34A);
    }

    .country-badge.ng {
        background: linear-gradient(135deg, #2196F3, #03DAC6);
    }

    .branch-title {
        color: #ffffff;
        font-weight: 600;
        margin: 0;
        font-size: 0.95rem;
    }

    .branch-details p {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 8px;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
    }

    .branch-details i {
        color: #ffc107;
        margin-right: 8px;
        width: 16px;
        font-size: 0.8rem;
    }

    .branch-details a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .ready-to-start {
        background: linear-gradient(135deg, rgba(255, 193, 7, 0.15), rgba(255, 235, 59, 0.1));
        border: 1px solid rgba(255, 193, 7, 0.2);
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        position: relative;
        overflow: hidden;
        max-width: 600px;
        margin: 0 auto;
    }

    .cta-title {
        color: #ffffff;
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }

    .btn-cta {
        background: linear-gradient(135deg, #ffc107, #ffeb3b);
        color: #000;
        border: none;
        padding: 12px 24px;
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
    }

    .btn-cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255, 193, 7, 0.4);
        color: #000;
    }

    .btn-cta i {
        transition: transform 0.3s ease;
    }

    .btn-cta:hover i {
        transform: translateX(3px);
    }

    .social-links {
        display: flex;
        gap: 12px;
        margin-top: 2rem;
    }

    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        border-radius: 12px;
        color: #ffffff;
        border: none;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .social-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 12px;
        transition: all 0.3s ease;
        z-index: -1;
    }

    .social-link.facebook::before {
        background: linear-gradient(135deg, #1877F2, #42A5F5);
    }

    .social-link.instagram::before {
        background: linear-gradient(135deg, #E4405F, #FCAF45, #405DE6);
    }

    .social-link.linkedin::before {
        background: linear-gradient(135deg, #0A66C2, #378FE9);
    }

    .social-link:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 25px rgba(255, 193, 7, 0.3);
    }

    .social-link i {
        font-size: 20px;
        z-index: 1;
    }

    .social-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 12px;
        transition: all 0.3s ease;
        z-index: -1;
    }

    .social-link.facebook::before {
        background: linear-gradient(135deg, #1877F2, #42A5F5);
    }

    .social-link.instagram::before {
        background: linear-gradient(135deg, #E4405F, #FCAF45, #405DE6);
    }

    .social-link.linkedin::before {
        background: linear-gradient(135deg, #0A66C2, #378FE9);
    }

    .social-link:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 25px rgba(255, 193, 7, 0.3);
    }

    .social-link i {
        font-size: 20px;
        z-index: 1;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 2rem;
        margin-top: 3rem;
    }

    .copyright {
        color: rgba(255, 255, 255, 0.7);
        margin: 0;
        font-size: 0.9rem;
    }

    .footer-links-bottom {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .footer-links-bottom a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.3s ease;
    }

    .footer-links-bottom a:hover {
        color: #ffc107;
    }

    .language-switcher .btn-language {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #ffffff;
        padding: 8px 16px;
        border-radius: 10px;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .language-switcher .btn-language:hover,
    .language-switcher .btn-language:focus {
        background: rgba(255, 193, 7, 0.2);
        border-color: rgba(255, 193, 7, 0.5);
        color: #ffffff;
        box-shadow: none;
    }

    .language-switcher .dropdown-menu {
        background: rgba(26, 31, 46, 0.95);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        backdrop-filter: blur(20px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .language-switcher .dropdown-item {
        color: rgba(255, 255, 255, 0.8);
        padding: 10px 16px;
        transition: all 0.3s ease;
    }

    .language-switcher .dropdown-item:hover {
        background: rgba(255, 193, 7, 0.2);
        color: #ffffff;
    }

    .language-switcher .dropdown-item.active {
        background: rgba(255, 193, 7, 0.3);
        color: #ffffff;
    }

    .whatsapp-btn {
        display: flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #25D366, #128C7E);
        color: white;
        border: none;
        padding: 14px 20px;
        border-radius: 25px;
        font-size: 15px;
        font-weight: 600;
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .whatsapp-btn:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.5);
    }

    .whatsapp-btn i {
        font-size: 18px;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    /* Social Media Modal Styles */
    .social-modal-content {
        border: none;
        border-radius: 24px;
        background: #ffc107;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .social-modal-body {
        padding: 30px;
    }

    .social-circle {
        width: 80px;
        height: 80px;
        background: linear-gradient(145deg, #25D366, #128C7E);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.2);
    }

    .social-circle i {
        font-size: 40px;
        color: white;
    }

    .modal-title-text {
        color: white;
        font-weight: 700;
    }

    .modal-subtitle-text {
        color: white;
        font-size: 0.95rem;
    }

    .social-platforms {
        margin-top: 20px;
    }

    .social-platform-item {
        display: flex;
        align-items: center;
        padding: 16px;
        margin-bottom: 12px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 16px;
        text-decoration: none;
        color: inherit;
        transition: all 0.3s ease;
    }

    .social-platform-item:hover {
        background: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .platform-icon {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: white;
        font-size: 0.9rem;
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.2);
    }

    .platform-info {
        flex: 1;
        margin-left: 16px;
    }

    .platform-info h6 {
        margin: 0;
        font-weight: 600;
        color: #000;
    }

    .platform-info p {
        margin: 4px 0 0;
        color: #444;
    }

    .platform-arrow {
        width: 32px;
        height: 32px;
        background: #ffc107;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000;
    }

    /* WhatsApp Modal Styles */
    .modal-content {
        border: none;
        border-radius: 20px;
        background: linear-gradient(135deg, #ffc107, #ffeb3b);
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        overflow: hidden;
    }

    .modal-header {
        padding: 20px 20px 0;
        border: none;
    }

    .btn-close {
        background: rgba(255, 255, 255, 0.9);
        padding: 8px;
        border-radius: 50%;
        opacity: 1;
        transition: all 0.3s ease;
    }

    .btn-close:hover {
        background: rgba(255, 255, 255, 1);
        transform: rotate(90deg);
    }

    .contact-modal-body {
        padding: 30px;
    }

    .whatsapp-circle {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #25D366, #128C7E);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.3);
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .whatsapp-circle i {
        font-size: 40px;
        color: white;
    }

    .contact-list {
        margin-top: 25px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        padding: 18px;
        margin-bottom: 12px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        text-decoration: none;
        color: inherit;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .contact-item:hover {
        background: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        border-color: rgba(37, 211, 102, 0.3);
    }

    .contact-item .country-flag {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #25D366, #128C7E);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: white;
        font-size: 0.9rem;
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.2);
    }

    .contact-info {
        flex: 1;
        margin-left: 16px;
    }

    .contact-info h6 {
        margin: 0;
        font-weight: 600;
        color: #000;
        font-size: 1rem;
    }

    .contact-info p {
        margin: 4px 0 0;
        color: #666;
        font-size: 0.9rem;
    }

    .contact-icon {
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #25D366, #128C7E);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: transform 0.3s ease;
    }

    .contact-item:hover .contact-icon {
        transform: translateX(5px);
    }

    @media (max-width: 768px) {
        .footer {
            padding: 60px 0 30px;
        }

        .footer-links-bottom {
            flex-direction: column;
            gap: 1rem;
        }

        .social-links {
            justify-content: center;
            gap: 15px;
        }

        .brand-logo-section {
            flex-direction: column;
            text-align: center;
            gap: 10px;
        }

        .brand-logo {
            width: 50px;
            height: 50px;
        }

        .brand-title {
            font-size: 1.3rem !important;
        }

        .branch-info {
            margin-bottom: 1rem;
        }

        .whatsapp-btn {
            padding: 12px 16px;
            font-size: 14px;
        }

        .whatsapp-btn-text {
            display: none;
        }

        .contact-modal-body {
            padding: 20px;
        }

        .social-modal-body {
            padding: 20px;
        }

        .social-circle {
            width: 60px;
            height: 60px;
        }

        .social-circle i {
            font-size: 30px;
        }

        .social-platform-item {
            padding: 12px;
        }

        .platform-icon {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }

        .ready-to-start {
            margin-top: 1rem;
        }

        .language-switcher {
            text-align: center !important;
        }

        /* Stack columns vertically on mobile */
        .footer .row .col-md-2,
        .footer .row .col-md-3 {
            margin-bottom: 2rem;
        }
    }

    @media (max-width: 576px) {
        .footer-bottom .col-md-4 {
            text-align: center !important;
            margin-bottom: 1rem;
        }
    }
</style>

<!-- WhatsApp Modal -->
<div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body contact-modal-body">
                <div class="text-center mb-4">
                    <div class="whatsapp-circle">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h4 class="mt-3" style="color: white; font-weight: 700;">Contact Us on WhatsApp</h4>
                    <p style="color: rgba(255,255,255,0.9); font-size: 0.95rem;">Select a location to start chat</p>
                </div>

                <div class="contact-list">
                    <a href="https://wa.me/233540119622" target="_blank" class="contact-item">
                        <div class="country-flag">GH</div>
                        <div class="contact-info">
                            <h6>Ghana Office</h6>
                            <p>+233540119622</p>
                        </div>
                        <div class="contact-icon">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>

                    <a href="https://wa.me/255788009555" target="_blank" class="contact-item">
                        <div class="country-flag">TZ</div>
                        <div class="contact-info">
                            <h6>Tanzania Office</h6>
                            <p>+255 78 8009555</p>
                        </div>
                        <div class="contact-icon">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>

                    <a href="https://wa.me/2348133031000" target="_blank" class="contact-item">
                        <div class="country-flag">NG</div>
                        <div class="contact-info">
                            <h6>Nigeria Office</h6>
                            <p>+234 81 33031000</p>
                        </div>
                        <div class="contact-icon">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Social Media Modal -->
<div class="modal fade" id="socialModal" tabindex="-1" aria-labelledby="socialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content social-modal-content">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body social-modal-body">
                <div class="text-center mb-4">
                    <div class="social-circle">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h4 class="mt-3 modal-title-text">Follow Us On Social Media</h4>
                    <p class="modal-subtitle-text">Connect with our <span id="countryName">office</span></p>
                </div>

                <div class="social-platforms" id="socialPlatforms">
                    <!-- Social media links will be populated here by JavaScript -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const socialModal = document.getElementById('socialModal');
        const socialPlatforms = document.getElementById('socialPlatforms');
        const countryName = document.getElementById('countryName');

        const socialData = {
            nigeria: {
                name: 'Nigeria',
                platforms: [
                    {
                        name: 'LinkedIn',
                        username: 'Top Archive Nigeria',
                        url: 'https://www.linkedin.com/in/top-archive-nigeria',
                        icon: 'fab fa-linkedin-in',
                        color: '#0A66C2'
                    },
                    {
                        name: 'Facebook',
                        username: 'Toparchive Ng',
                        url: 'https://www.facebook.com/profile.php?id=61572436930442',
                        icon: 'fab fa-facebook-f',
                        color: '#1877F2'
                    },
                    {
                        name: 'Instagram',
                        username: 'Top_Archive_ng',
                        url: 'https://www.instagram.com/top_archive_ng',
                        icon: 'fab fa-instagram',
                        color: '#E4405F'
                    },
                    {
                        name: 'Twitter',
                        username: '@TopArchiveNg',
                        url: 'https://x.com/TopArchiveNg',
                        icon: 'fab fa-twitter',
                        color: '#1DA1F2'
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
                        color: '#0A66C2'
                    },
                    {
                        name: 'Facebook',
                        username: 'Toparchive Ghana',
                        url: 'https://www.facebook.com/ToparchiveGhana',
                        icon: 'fab fa-facebook-f',
                        color: '#1877F2'
                    },
                    {
                        name: 'Instagram',
                        username: 'toparchive_ghana',
                        url: 'https://www.instagram.com/toparchive_ghana',
                        icon: 'fab fa-instagram',
                        color: '#E4405F'
                    },
                    {
                        name: 'Twitter',
                        username: '@TopArchiveGH',
                        url: 'https://x.com/TopArchiveGH',
                        icon: 'fab fa-twitter',
                        color: '#1DA1F2'
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
                        color: '#0A66C2'
                    },
                    {
                        name: 'Facebook',
                        username: 'Toparchive Tanzania',
                        url: 'https://www.facebook.com/Toparchivetanzania',
                        icon: 'fab fa-facebook-f',
                        color: '#1877F2'
                    },
                    {
                        name: 'Instagram',
                        username: 'toparchive_eatz',
                        url: 'https://www.instagram.com/toparchive_eatz',
                        icon: 'fab fa-instagram',
                        color: '#E4405F'
                    },
                    {
                        name: 'Twitter',
                        username: '@TopArchiveTZ',
                        url: 'https://x.com/TopArchiveTZ',
                        icon: 'fab fa-twitter',
                        color: '#1DA1F2'
                    }
                ]
            }
        };

        socialModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const country = button.getAttribute('data-country');
            const data = socialData[country];

            if (data) {
                countryName.textContent = data.name;

                socialPlatforms.innerHTML = '';

                data.platforms.forEach(platform => {
                    const platformLink = document.createElement('a');
                    platformLink.href = platform.url;
                    platformLink.target = '_blank';
                    platformLink.className = 'social-platform-item';
                    platformLink.innerHTML = `
                    <div class="platform-icon" style="background: ${platform.color}">
                        <i class="${platform.icon}"></i>
                    </div>
                    <div class="platform-info">
                        <h6>${platform.name}</h6>
                        <p>${platform.username}</p>
                    </div>
                    <div class="platform-arrow">
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                `;
                    socialPlatforms.appendChild(platformLink);
                });
            }
        });
    });
</script>