<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A responsive landing page prototype for NIK NOOK Barbers Elbi in Los Baños.">
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
