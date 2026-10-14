<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>{{ config('app.name', 'SIMBAR') }} - Sistem Informasi Manajemen Stok & Inventaris Material</title>
    <meta name="title" content="SIMBAR - Sistem Informasi Manajemen Stok & Inventaris Material">
    <meta name="description" content="Platform modern manajemen inventaris material gudang, alur persetujuan (approval) permintaan barang, dan pencatatan riwayat mutasi stok secara real-time.">
    <meta name="keywords" content="manajemen barang, manajemen stok, inventaris gudang, approval barang, laravel, vue, php">
    <meta name="author" content="SIMBAR Team">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="SIMBAR - Sistem Informasi Manajemen Stok & Material">
    <meta property="og:description" content="Kelola stok material dan alur pengajuan barang lebih cepat, rapi, dan akurat dengan pelacakan real-time.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }
        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }
    </style>

    <!-- Scripts & Styles via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased selection:bg-indigo-600 selection:text-white flex flex-col min-h-screen">
    
    <!-- Header / Navbar Component -->
    <x-landing.navbar :stats="$stats" />

    <!-- Main Content Sections -->
    <main class="flex-grow">
        <!-- Hero Section -->
        <x-landing.hero :stats="$stats" />

        <!-- Live Statistics Strip -->
        <x-landing.stats :stats="$stats" />

        <!-- Core Features -->
        <x-landing.features />

        <!-- 4-Step Approval & Stock Workflow -->
        <x-landing.workflow />

        <!-- Interactive Vue 3 Live Catalog & Stock Tracker -->
        <x-landing.catalog :products="$products" />

        <!-- Admin vs User Roles Comparison -->
        <x-landing.roles />

        <!-- Frequently Asked Questions -->
        <x-landing.faq />

        <!-- High-Conversion Call To Action -->
        <x-landing.cta />
    </main>

    <!-- Footer Component -->
    <x-landing.footer />

</body>
</html>
