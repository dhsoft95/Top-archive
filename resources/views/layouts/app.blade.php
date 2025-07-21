<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>@yield('title', 'Top Archive - Africa\'s Leading Document Management & Storage Solutions')</title>
    <meta name="title" content="Top Archive - Africa's Leading Document Management & Storage Solutions">
    <meta name="description" content="Top Archive is Africa's Leading Archive Storage & Information Management Provider. Trusted for over 25 years, we have served major clients in Ghana, Nigeria and Tanzania.">
    <meta name="keywords" content="document storage, archive management, information management, document scanning, record keeping, secure storage, document digitization, Ghana archives, Nigeria document management, Tanzania storage solutions, African document services, records management, digital transformation, document preservation, file storage, confidential destruction, data protection, business continuity, document retrieval, corporate archives">
    <meta name="author" content="Top Archive">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="generator" content="Top Archive">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Top Archive - Africa's Leading Document Management & Storage Solutions">
    <meta property="og:description" content="Top Archive is Africa's Leading Archive Storage & Information Management Provider. Trusted for over 25 years in Ghana, Nigeria and Tanzania.">
    <meta property="og:image" content="{{ asset('path/to/your/logo.png') }}">
    <meta property="og:site_name" content="Top Archive">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Top Archive - Africa's Leading Document Management & Storage Solutions">
    <meta property="twitter:description" content="Top Archive is Africa's Leading Archive Storage & Information Management Provider. Trusted for over 25 years in Ghana, Nigeria and Tanzania.">
    <meta property="twitter:image" content="{{ asset('path/to/your/logo.png') }}">

    <!-- Favicon -->
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicon/site.webmanifest') }}" />

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://unpkg.com">

    <!-- Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom CSS - Should always be last -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <!-- Theme Colors -->
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">

    @stack('styles')
</head>
<body>
@include('includes.nav')

<main>
    @yield('content')
</main>

<div style="position: fixed; bottom: 25px; right: 25px; z-index: 1000;">
    <button class="whatsapp-btn" style="text-align: left!important;" data-bs-toggle="modal" data-bs-target="#whatsappModal">
        <i class="fab fa-whatsapp"></i>
        <span class="whatsapp-btn-text">Chat with us</span>
    </button>
</div>

@include('includes.footer')

<!-- Scripts -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/gallery.js') }}"></script>
<script type="module" src="{{ asset('js/main.js') }}"></script>
@stack('scripts')
</body>
</html>