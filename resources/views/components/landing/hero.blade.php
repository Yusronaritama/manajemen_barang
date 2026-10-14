@props(['stats' => []])

<section id="beranda" class="relative pt-32 pb-20 md:pt-40 md:pb-28 overflow-hidden bg-gradient-to-b from-slate-50 via-white to-slate-50/50">
    <!-- Subtle Background Glows -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-indigo-500/10 blur-[120px] rounded-full pointer-events-none -z-10"></div>
    <div class="absolute top-1/3 right-10 w-[350px] h-[350px] bg-violet-500/10 blur-[100px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Copy & CTAs -->
            <div class="lg:col-span-7 text-center lg:text-left">
                <!-- Eyebrow Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 border border-indigo-200/80 mb-6 shadow-sm">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-600"></span>
                    </span>
                    <span>Sistem Pengendalian Stok & Material Presisi</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.15] mb-6">
                    Kelola Stok Material & Alur Pengajuan Barang <br class="hidden sm:inline" />
                    <span class="bg-gradient-to-r from-indigo-600 via-indigo-500 to-violet-600 bg-clip-text text-transparent">
                        Lebih Cepat, Rapi, & Akurat
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0 mb-8 leading-relaxed">
                    Tinggalkan pencatatan manual yang rentan selisih. Platform terpadu untuk pencatatan master material multi-satuan, alur approval permintaan antara staf & gudang, serta monitoring mutasi stok secara real-time.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5 mb-10">
                    @auth
                        <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" 
                           class="w-full sm:w-auto px-7 py-3.5 rounded-xl text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 shadow-lg shadow-indigo-600/25 hover:shadow-indigo-600/35 transition-all flex items-center justify-center gap-2 group">
                            <span>Buka Dashboard Sistem</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    @else
                        <a href="{{ route('register') }}" 
                           class="w-full sm:w-auto px-7 py-3.5 rounded-xl text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 shadow-lg shadow-indigo-600/25 hover:shadow-indigo-600/35 transition-all flex items-center justify-center gap-2 group">
                            <span>Mulai Sekarang (Daftar Akun)</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                        <a href="{{ route('login') }}" 
                           class="w-full sm:w-auto px-6 py-3.5 rounded-xl text-sm font-bold text-slate-700 bg-white hover:bg-slate-50 border border-slate-200/90 shadow-sm hover:shadow transition-all text-center">
                            Masuk ke Sistem
                        </a>
                    @endauth

                    <a href="#katalog" 
                       class="w-full sm:w-auto px-5 py-3.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-indigo-600 hover:bg-indigo-50/50 transition-all text-center">
                        Jelajahi Live Tracker ↓
                    </a>
                </div>

                <!-- Demo Credentials Quick Pill -->
                <div class="inline-flex flex-wrap items-center justify-center lg:justify-start gap-2 py-2 px-3.5 rounded-2xl bg-slate-100/80 border border-slate-200 text-xs text-slate-600">
                    <span class="font-bold text-slate-800 flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                        </svg>
                        Akun Demo Bawaan:
                    </span>
                    <span class="bg-white px-2 py-0.5 rounded-md font-mono text-[11px] border border-slate-200">admin@example.com</span>
                    <span class="text-slate-400">/</span>
                    <span class="bg-white px-2 py-0.5 rounded-md font-mono text-[11px] border border-slate-200">user@example.com</span>
                    <span class="text-slate-500 font-semibold">(pass: password123)</span>
                </div>
            </div>

            <!-- Right Column: Interactive UI Showcase Mockup -->
            <div class="lg:col-span-5 relative">
                <!-- Floating Mini Badge 1 (Top Left) -->
                <div class="hidden sm:flex absolute -top-5 -left-6 z-20 bg-white/95 backdrop-blur-md p-3 rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 items-center gap-3 animate-bounce [animation-duration:4s]">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-[11px] font-bold text-emerald-700 uppercase">Permintaan Disetujui</div>
                        <div class="text-xs font-bold text-slate-800">12 unit material diserahkan</div>
                    </div>
                </div>

                <!-- Floating Mini Badge 2 (Bottom Right) -->
                <div class="hidden sm:flex absolute -bottom-5 -right-6 z-20 bg-white/95 backdrop-blur-md p-3.5 rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-[11px] font-bold text-indigo-700 uppercase">Akurasi Stok 99.8%</div>
                        <div class="text-xs font-semibold text-slate-500">Auto restock & log audit</div>
                    </div>
                </div>

                <!-- Main UI Mockup Card -->
                <div class="bg-white rounded-3xl p-6 sm:p-7 shadow-2xl shadow-slate-200/80 border border-slate-200/80 relative">
                    <!-- Top Window Bar -->
                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-5">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-rose-400 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-amber-400 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-400 inline-block"></span>
                            <span class="text-xs font-mono font-bold text-slate-400 ml-2">SIMBAR - Live Monitoring</span>
                        </div>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200">
                            ● Gudang Aktif
                        </span>
                    </div>

                    <!-- Mini Stat Cards Grid -->
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="p-3.5 rounded-2xl bg-indigo-50/50 border border-indigo-100">
                            <div class="text-[11px] font-bold text-indigo-600 uppercase">Master Barang</div>
                            <div class="text-2xl font-black text-slate-900 mt-0.5">{{ max($stats['total_materials'] ?? 3, 3) }} Item</div>
                            <div class="text-[10px] text-slate-500 font-medium">Terdaftar di sistem</div>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/70">
                            <div class="text-[11px] font-bold text-slate-500 uppercase">Total Unit Fisik</div>
                            <div class="text-2xl font-black text-slate-900 mt-0.5">{{ max($stats['total_stock'] ?? 75, 75) }} Unit</div>
                            <div class="text-[10px] text-slate-500 font-medium">Siap didistribusikan</div>
                        </div>
                    </div>

                    <!-- Material Items Preview List -->
                    <div class="space-y-2.5">
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Sampel Stok Gudang:</div>
                        
                        <div class="p-3 rounded-xl bg-slate-50/80 hover:bg-slate-50 border border-slate-200/60 flex items-center justify-between transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-600 font-mono text-xs font-bold flex items-center justify-center">
                                    01
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-slate-800">Laptop ASUS Pro</div>
                                    <div class="text-[10px] text-slate-400 font-mono">MAT-001 • Satuan: ROL</div>
                                </div>
                            </div>
                            <span class="px-2.5 py-1 rounded-full text-[11px] font-extrabold bg-emerald-100 text-emerald-800">
                                10 Tersedia
                            </span>
                        </div>

                        <div class="p-3 rounded-xl bg-slate-50/80 hover:bg-slate-50 border border-slate-200/60 flex items-center justify-between transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-indigo-100 text-indigo-600 font-mono text-xs font-bold flex items-center justify-center">
                                    02
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-slate-800">Mouse Logitech M185</div>
                                    <div class="text-[10px] text-slate-400 font-mono">MAT-002 • Satuan: lembar</div>
                                </div>
                            </div>
                            <span class="px-2.5 py-1 rounded-full text-[11px] font-extrabold bg-emerald-100 text-emerald-800">
                                50 Tersedia
                            </span>
                        </div>

                        <div class="p-3 rounded-xl bg-slate-50/80 hover:bg-slate-50 border border-slate-200/60 flex items-center justify-between transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-700 font-mono text-xs font-bold flex items-center justify-center">
                                    03
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-slate-800">Office Ergonomic Chair</div>
                                    <div class="text-[10px] text-slate-400 font-mono">MAT-003 • Satuan: KG</div>
                                </div>
                            </div>
                            <span class="px-2.5 py-1 rounded-full text-[11px] font-extrabold bg-amber-100 text-amber-800">
                                15 Siap
                            </span>
                        </div>
                    </div>

                    <!-- Bottom Card Prompt -->
                    <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span class="flex items-center gap-1.5 font-medium">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Sinkron otomatis database
                        </span>
                        <a href="#katalog" class="text-indigo-600 font-bold hover:underline">Lihat Semua →</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
