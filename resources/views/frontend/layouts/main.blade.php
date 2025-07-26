<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    <title>@yield('title', 'Agência de Tecnologia e Branding') - KF PACK</title>

    <!-- STYLES -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body>

    <!-- HEADER -->
     @include('frontend.layouts.components.header')
    
    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('frontend.layouts.components.footer')
    
    @stack('scripts')
</body>
</html>
