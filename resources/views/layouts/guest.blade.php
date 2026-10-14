<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIMBAR') }} - Otentikasi Sistem</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body { font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif; }
            .font-mono { font-family: 'JetBrains Mono', monospace; }
        </style>

        <!-- Scripts & Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-800 antialiased bg-slate-50 min-h-screen selection:bg-indigo-600 selection:text-white">
        @if(!empty($noBox) && $noBox)
            {{ $slot }}
        @else
            <div class="min-h-screen flex flex-col sm:justify-center items-center py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-slate-50 via-white to-slate-100">
                <div class="mb-6 text-center">
                    <a href="{{ url('/') }}" class="inline-flex items-center gap-3 group">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-indigo-600 via-indigo-500 to-violet-500 flex items-center justify-center text-white shadow-lg shadow-indigo-500/25 group-hover:scale-105 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="flex items-center gap-2">
                                <span class="text-2xl font-extrabold tracking-tight text-slate-900">SIMBAR</span>
                                <span class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-indigo-50 text-indigo-700 border border-indigo-200">v2.0</span>
                            </div>
                            <p class="text-xs text-slate-500 font-medium">Sistem Manajemen Stok & Material</p>
                        </div>
                    </a>
                </div>

                <div class="w-full sm:max-w-md bg-white p-8 rounded-3xl shadow-xl shadow-slate-200/80 border border-slate-200/80">
                    {{ $slot }}
                </div>

                <div class="mt-8 text-center text-xs text-slate-400">
                    <a href="{{ url('/') }}" class="hover:text-indigo-600 transition inline-flex items-center gap-1.5 font-medium">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Halaman Beranda
                    </a>
                </div>
            </div>
        @endif
    </body>
</html>
