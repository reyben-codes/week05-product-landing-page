<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A responsive landing page prototype for NIK NOOK Barbers Elbi in Los Baños.">
    <title>@yield('title', 'NIK NOOK Barbers Elbi')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-zinc-900 antialiased">
    @yield('content')
</body>
</html>
