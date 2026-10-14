<footer class="bg-slate-900 text-slate-400 py-16 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-slate-800">
            <!-- Brand Info (Col 5) -->
            <div class="md:col-span-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-indigo-500 to-violet-500 flex items-center justify-center text-white shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-white tracking-tight">SIMBAR</span>
                </div>
                <p class="text-xs text-slate-400 leading-relaxed max-w-sm mb-4">
                    Sistem Informasi Manajemen Barang & Stok Material berbasis Laravel 12. Solusi terpercaya untuk alur approval barang, pemantauan inventaris gudang, dan log mutasi stok presisi.
                </p>
                <div class="flex items-center gap-2 text-[11px] font-mono text-slate-500">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 inline-block"></span>
                    <span>Laravel 12 • Vue 3 Modular • PHP 8.2+</span>
                </div>
            </div>

            <!-- Quick Links (Col 3) -->
            <div class="md:col-span-3">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Navigasi Halaman</h4>
                <ul class="space-y-2.5 text-xs">
                    <li><a href="#beranda" class="hover:text-white transition">Beranda</a></li>
                    <li><a href="#fitur" class="hover:text-white transition">Fitur Utama</a></li>
                    <li><a href="#alur" class="hover:text-white transition">Alur Persetujuan</a></li>
                    <li><a href="#katalog" class="hover:text-white transition">Live Stock Tracker</a></li>
                    <li><a href="#faq" class="hover:text-white transition">Bantuan & FAQ</a></li>
                </ul>
            </div>

            <!-- Access Links (Col 4) -->
            <div class="md:col-span-4">
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Akses & Otentikasi</h4>
                <ul class="space-y-2.5 text-xs mb-5">
                    <li><a href="{{ route('login') }}" class="hover:text-white transition">Login Akun Sistem</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="hover:text-white transition">Registrasi Akun Pemohon Baru</a></li>
                    @endif
                </ul>

                <div class="p-3.5 rounded-xl bg-slate-800/80 border border-slate-700/80 text-[11px] space-y-1">
                    <div class="text-slate-300 font-bold">Kredensial Default:</div>
                    <div class="font-mono text-slate-400">Admin: admin@example.com</div>
                    <div class="font-mono text-slate-400">User: user@example.com</div>
                    <div class="text-slate-500">Password: password123</div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
            <div>
                &copy; {{ date('Y') }} SIMBAR — Sistem Informasi Manajemen Barang. Hak Cipta Dilindungi.
            </div>
            <div class="flex items-center gap-4">
                <span class="hover:text-slate-400 cursor-pointer">Blade & PHP Engine</span>
                <span>•</span>
                <span class="hover:text-slate-400 cursor-pointer">Modular Architecture</span>
            </div>
        </div>

    </div>
</footer>
