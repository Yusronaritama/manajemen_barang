<section class="py-20 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="relative rounded-3xl p-8 sm:p-14 bg-gradient-to-r from-indigo-600 via-indigo-700 to-violet-800 text-white overflow-hidden shadow-2xl shadow-indigo-600/30 text-center">
            <!-- Background Decorative Circles -->
            <div class="absolute -top-24 -left-24 w-72 h-72 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-72 h-72 bg-violet-400/20 rounded-full blur-2xl pointer-events-none"></div>

            <div class="relative z-10 max-w-2xl mx-auto">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-white/15 backdrop-blur-md text-indigo-100 mb-6 border border-white/20">
                    🚀 Siap Mengoptimalkan Gudang Anda?
                </span>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight mb-5">
                    Mulai Kelola Inventaris & Stok Tanpa Hambatan Sekarang
                </h2>

                <p class="text-indigo-100 text-sm sm:text-base leading-relaxed mb-8">
                    Solusi terpadu untuk pencatatan bahan baku, alur persetujuan terpusat, dan rekap mutasi transparan. Coba sekarang secara instan.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-3.5">
                    @auth
                        <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" 
                           class="w-full sm:w-auto px-8 py-3.5 rounded-xl font-bold text-sm bg-white text-indigo-700 hover:bg-indigo-50 shadow-lg shadow-black/10 transition-all flex items-center justify-center gap-2">
                            <span>Buka Dashboard Sistem</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    @else
                        <a href="{{ route('register') }}" 
                           class="w-full sm:w-auto px-8 py-3.5 rounded-xl font-bold text-sm bg-white text-indigo-700 hover:bg-indigo-50 shadow-lg shadow-black/10 transition-all flex items-center justify-center gap-2">
                            <span>Daftar Akun Baru (Gratis)</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                        <a href="{{ route('login') }}" 
                           class="w-full sm:w-auto px-7 py-3.5 rounded-xl font-bold text-sm bg-indigo-500/40 hover:bg-indigo-500/60 text-white border border-white/20 transition-all text-center">
                            Masuk ke Akun
                        </a>
                    @endauth
                </div>
            </div>

        </div>

    </div>
</section>
