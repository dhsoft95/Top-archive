<!-- Navigation Bar with Modal Trigger -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png" alt="Top Archive" height="68" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about-us*') ? 'active' : '' }}" href="/about-us">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('services*') ? 'active' : '' }}" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('gallery*') ? 'active' : '' }}" href="/gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog*') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-outline-secondary me-2" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Log In
                </button>
                <a href="/contact" class="btn btn-warning" type="button">Work With Us</a>
            </div>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
        <div class="modal-content" style="border-radius: 24px; padding: 20px;">
            <div class="modal-header border-0 px-4 pt-4 pb-0 position-relative">
                <h5 class="modal-title w-100 text-center" style="font-size: 24px; color: #2D3748; margin: 0;">Client Login: Choose your location</h5>
                <button type="button" class="btn-close position-absolute" data-bs-dismiss="modal" aria-label="Close" style="right: 24px; top: 24px; box-shadow: none;"></button>
            </div>

            <div class="modal-body p-4">
                <div class="row g-4">
                    <!-- Ghana -->
                    <div class="col-md-6">
                        <div onclick="redirectToLogin('ghana')" class="card border h-100" style="border-radius: 16px; box-shadow: 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                            <div class="card-body text-center p-4">
                                <img src="https://flagcdn.com/gh.svg" alt="Ghana Flag" style="width: auto; height: 30px; margin-bottom: 16px;">
                                <h3 style="font-size: 24px; color: #2D3748; margin-bottom: 8px; font-weight: 500;">Ghana</h3>
                                <p style="color: #718096; margin: 0; font-size: 16px;">EDMS</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tanzania -->
                    <div class="col-md-6">
                        <div onclick="redirectToLogin('tanzania')" class="card border h-100" style="border-radius: 16px; box-shadow: 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                            <div class="card-body text-center p-4">
                                <img src="https://flagcdn.com/tz.svg" alt="Tanzania Flag" style="width: auto; height: 30px; margin-bottom: 16px;">
                                <h3 style="font-size: 24px; color: #2D3748; margin-bottom: 8px; font-weight: 500;">Tanzania</h3>
                                <p style="color: #718096; margin: 0; font-size: 16px;">Oneil Order</p>
                            </div>
                        </div>
                    </div>

                    <!-- Nigeria -->
                    <div class="col-md-6">
                        <div class="card border h-100" style="border-radius: 16px; box-shadow: 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                            <div class="card-body text-center p-4">
                                <img src="https://flagcdn.com/ng.svg" alt="Nigeria Flag" style="width: auto; height: 30px; margin-bottom: 16px;">
                                <h3 style="font-size: 24px; color: #2D3748; margin-bottom: 8px; font-weight: 500;">Nigeria</h3>
                                <p style="color: #718096; margin: 0; font-size: 16px;">EDMS</p>
                            </div>
                        </div>
                    </div>

                    <!-- Uganda -->
                    <div class="col-md-6">
                        <div class="card border h-100" style="border-radius: 16px; box-shadow: 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                            <div class="card-body text-center p-4">
                                <img src="https://flagcdn.com/ug.svg" alt="Uganda Flag" style="width: auto; height: 30px; margin-bottom: 16px;">
                                <h3 style="font-size: 24px; color: #2D3748; margin-bottom: 8px; font-weight: 500;">Uganda</h3>
                                <p style="color: #718096; margin: 0; font-size: 16px;">EDMS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .modal-content {
        background: #FFFFFF;
    }

    .modal-title {
        background: none !important;
    }

    .modal-header {
        min-height: 60px;
    }

    .btn-close:focus {
        box-shadow: none;
    }

    .card {
        border-color: #E2E8F0;
        cursor: pointer;
    }

    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0px 4px 6px rgba(0,0,0,0.1) !important;
    }

    .modal {
        z-index: 1050;
    }
    .modal.fade .modal-dialog {
        transition: transform 0.3s ease-out;
    }
    .modal-backdrop {
        background-color: white;
    }
    .modal-backdrop.show {
        opacity: 0.85;
    }
</style>

<script>
    // Login redirect function
    function redirectToLogin(country) {
        const loginUrls = {
            'ghana': 'https://filehold.top-archive.com/FH/Filehold/WebClient/LoginForm.aspx',
            'tanzania': 'https://taeaoneilorder.top-archive.com/oneilOrder/Credential/LogOn?ReturnUrl=%2foneilOrder%2f'
        };

        if (loginUrls[country]) {
            window.location.href = loginUrls[country];
        }
    }
    // Initialize modal
    document.addEventListener('DOMContentLoaded', function() {
        const loginModal = document.getElementById('loginModal');
        if (loginModal) {
            const modal = new bootstrap.Modal(loginModal);
            // Optional: Add click handler if needed
            const loginButton = document.querySelector('[data-bs-target="#loginModal"]');
            if (loginButton) {
                loginButton.addEventListener('click', function() {
                    modal.show();
                });
            }
        }
    });
</script>
