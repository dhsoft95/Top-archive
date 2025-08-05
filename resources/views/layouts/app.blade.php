<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Top Archive') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

<!-- Navbar -->
@include('partials.nav')

<!-- Page Content -->
<main class="flex-grow">
    {{-- The container class is removed from here --}}
    @yield('content')
</main>

<!-- Footer -->
{{--@include('includes.footer')--}}

</body>
</html>