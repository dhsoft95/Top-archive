<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        .services {
            /*background-color: #FFF8E7;*/
            background-color: #dad3d3;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .service-badge {
            background-color: #FFB800;
            color: #fff;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            color: #2C3E50;
            margin-bottom: 20px;
            text-align: center;
        }

        .section-description {
            color: #6C757D;
            max-width: 700px;
            margin: 0 auto 60px;
            font-size: 18px;
            line-height: 1.6;
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 20px;
        }

        .service-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 0;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(255, 184, 0, 0.15);
        }

        .service-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .service-content {
            padding: 0 30px 30px;
        }

        .service-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #FFB800, #FFD700);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .service-card:hover:before {
            transform: scaleX(1);
        }

        .icon-wrapper {
            margin: -40px auto 25px;
            position: relative;
            z-index: 1;
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: #FFF8E7;
            border-radius: 50%;
            border: #FFB800 solid 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            position: relative;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.67), rgba(0, 0, 0, 0.67));
        }

        .service-icon i {
            font-size: 32px;
            color: #1f2023;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon i {
            color: #FFFFFF;
        }

        .service-card h3 {
            color: #2C3E50;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .service-card p {
            color: #6C757D;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .learn-more {
            color: #FFB800;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .learn-more:hover {
            color: #FF9800;
        }

        .arrow-icon {
            fill: currentColor;
            transition: transform 0.3s ease;
        }

        .learn-more:hover .arrow-icon {
            transform: translateX(5px);
        }

        @media (max-width: 768px) {
            .services {
                padding: 60px 0;
            }

            .section-title {
                font-size: 30px;
            }

            .service-content {
                padding: 0 20px 20px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<section class="services">
    <div class="container">
        <div class="text-center mb-5">
            <span class="service-badge">OUR SERVICES</span>
            <h2 class="title" style="text-align: center; font-size: 30px;">What We Offer</h2>
            <p class="section-description">Top Archive provides customized, secure, and efficient archiving solutions so you can focus on your core business</p>
        </div>

        <div class="services-grid">
            <!-- Document Storage -->
            <div class="service-card">
                <img src="assets/images/services-1.jpg" alt="Document Storage" class="service-image">
                <div class="service-content">
                    <div class="icon-wrapper">
                        <div class="service-icon">
                            <i class="bi bi-archive-fill"></i>
                        </div>
                    </div>
                    <h3>Document Storage</h3>
                    <p>Active file management and long-term box storage, keeping records secure and accessible.</p>
                    <a href="" data-bs-toggle="modal" data-bs-target="#storageModal" class="learn-more">
                        Learn More
                        <svg class="arrow-icon" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Document Management -->
            <div class="service-card">
                <img src="assets/images/services-2.jpg" alt="Document Management" class="service-image">
                <div class="service-content">
                    <div class="icon-wrapper">
                        <div class="service-icon">
                            <i class="bi bi-folder2-open"></i>
                        </div>
                    </div>
                    <h3>Document Management</h3>
                    <p>Quick access to your business information, resource utilisation, information control and cost-effectiveness.</p>
                    <a href="#"  data-bs-toggle="modal" data-bs-target="#managementModal" class="learn-more">
                        Learn More
                        <svg class="arrow-icon" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Digital Archive -->
            <div class="service-card">
                <img src="assets/images/services-3.jpg" alt="Digital Archive" class="service-image">
                <div class="service-content">
                    <div class="icon-wrapper">
                        <div class="service-icon">
                            <i class="bi bi-cloud-arrow-up-fill"></i>
                        </div>
                    </div>
                    <h3>Digital Archive - EDMS</h3>
                    <p>Access your documents digitally from any device, 24/7, from anywhere.</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#digitalModal" class="learn-more">
                        Learn More
                        <svg class="arrow-icon" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Document Destruction -->
            <div class="service-card">
                <img src="assets/images/services-4.jpg" alt="Document Destruction" class="service-image">
                <div class="service-content">
                    <div class="icon-wrapper">
                        <div class="service-icon">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                    </div>
                    <h3>Document Destruction</h3>
                    <p>Secure, confidential, and cost-effective document destruction with a certificate of destruction for your records.</p>
                    <a href="#"  data-bs-toggle="modal" data-bs-target="#destructionModalLabel" class="learn-more">
                        Learn More
                        <svg class="arrow-icon" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Storage & Logistics -->
            <div class="service-card">
                <img src="assets/images/services-5.jpg" alt="Storage & Logistics" class="service-image">
                <div class="service-content">
                    <div class="icon-wrapper">
                        <div class="service-icon">
                            <i class="bi bi-truck"></i>
                        </div>
                    </div>
                    <h3>Storage & Logistics</h3>
                    <p>Warehousing, transportation, loading and unloading, door-to-door distribution, inventory management, packing and re-branding.</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#logisticsModal"  class="learn-more">
                        Learn More
                        <svg class="arrow-icon" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>