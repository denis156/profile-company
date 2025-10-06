<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth no-scrollbar overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Primary Meta Tags --}}
    <title>{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}</title>
    <meta name="title" content="{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}">
    <meta name="description"
        content="PT. Fathiyah Nugraha Group - Perusahaan terpercaya di bidang perdagangan batuan dan pasir, distributor semen, dan jasa perkapalan. Berpengalaman sejak 2022 dengan armada lengkap dan legalitas resmi IPP.">
    <meta name="keywords"
        content="PT Fathiyah Nugraha Group, FNG, perdagangan batuan Kendari, perdagangan pasir, distributor semen, jasa perkapalan, stone crusher, pasir, semen, IPP resmi, Sulawesi Tenggara">
    <meta name="author" content="PT. Fathiyah Nugraha Group">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7 days">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}">
    <meta property="og:description"
        content="PT. Fathiyah Nugraha Group - Perusahaan terpercaya di bidang perdagangan batuan dan pasir, distributor semen, dan jasa perkapalan sejak 2022.">
    <meta property="og:image" content="{{ asset('image/fng_logo.svg') }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title"
        content="{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}">
    <meta property="twitter:description"
        content="PT. Fathiyah Nugraha Group - Perusahaan terpercaya di bidang perdagangan batuan dan pasir, distributor semen, dan jasa perkapalan sejak 2022.">
    <meta property="twitter:image" content="{{ asset('image/fng_logo.svg') }}">

    {{-- Geo Tags --}}
    <meta name="geo.region" content="ID-SN">
    <meta name="geo.placename" content="Kendari">
    <meta name="geo.position" content="-3.9778;122.5150">
    <meta name="ICBM" content="-3.9778, 122.5150">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('image/fng_fav.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('image/fng_fav.svg') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    {{-- AOS CSS CDN --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-dvh antialiased bg-base-100 font-sans overflow-x-hidden">

    {{-- Navbar --}}
    <livewire:landing-page.components.navbar />

    {{-- Main --}}
    <main>
        {{ $slot }}
        {{-- Floating Action Button --}}
        <livewire:landing-page.components.fab />
    </main>

    {{-- Footer --}}
    <livewire:landing-page.components.footer />

    {{--  TOAST area --}}
    <x-toast />
    @livewireScripts
</body>

{{-- AOS JS CDN --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- AOS INIT --}}
<script>
    AOS.init({
        once: true, // Animasi hanya sekali
        duration: 800, // Durasi animasi (default: 400ms) - lebih lambat & smooth
        easing: 'ease-out-cubic', // Easing function untuk smooth motion
        offset: 120, // Offset dari viewport (pixel) - trigger lebih awal
        delay: 0, // Delay default
        anchorPlacement: 'top-bottom', // Element position vs viewport
    });
    AOS.refreshHard();
</script>

</html>
