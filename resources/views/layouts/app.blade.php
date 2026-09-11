<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore haircut options, customer feedback, and direct inquiries for NIK NOOK Barbers Elbi in Los Baños.">
    <meta name="theme-color" content="#111313">
    <link rel="icon" href="{{ asset('images/nik-nook-favicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/nik-nook-favicon.png') }}">
    <title>@yield('title', 'NIK NOOK Barbers Elbi')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-brand-cream text-brand-ink antialiased">
    <a href="#main-content" class="fixed left-4 top-4 z-[100] -translate-y-24 rounded-full bg-brand-ink px-5 py-3 text-sm font-bold text-white transition-transform focus:translate-y-0">
        Skip to content
    </a>
    @yield('content')
</body>
</html>
