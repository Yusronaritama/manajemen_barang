<x-guest-layout :no-box="true">
    <div class="min-h-screen w-full flex flex-col lg:flex-row bg-white">
        
        <!-- ========================================== -->
        <!-- LEFT BRANDING & VALUE PROPOSITION HERO     -->
        <!-- ========================================== -->
        <div class="lg:w-1/2 bg-gradient-to-br from-slate-950 via-slate-900 to-indigo-950 text-white p-8 sm:p-12 lg:p-16 flex flex-col justify-between relative overflow-hidden shrink-0">
            <!-- Background Glows -->
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-500/15 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-violet-500/15 rounded-full blur-3xl pointer-events-none"></div>

            <!-- Top Brand Header -->
            <div class="relative z-10">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-3.5 group">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-indigo-500 to-violet-500 flex items-center justify-center text-white shadow-lg shadow-indigo-500/30 group-hover:scale-105 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="text-2xl font-black tracking-tight text-white">SIMBAR</span>
                            <span class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-indigo-500/20 text-indigo-300 border border-indigo-400/30">v2.0</span>
                        </div>
                        <p class="text-xs text-slate-400 font-medium">Sistem Manajemen Stok & Material</p>
                    </div>
                </a>
            </div>

            <!-- Center Content: Title, Value Props, & Preview -->
            <div class="relative z-10 my-10 lg:my-auto max-w-lg">
                <!-- Eyebrow Pill -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 mb-6">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                    Portal Otentikasi Terpadu
                </div>

                <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight mb-4">
                    Monitoring Stok Presisi & Alur Permintaan Barang Cepat.
                </h1>

                <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-8">
                    Akses kontrol penuh inventaris gudang, verifikasi persetujuan order staf, dan pencatatan mutasi bahan penunjang secara akurat.
                </p>

                <!-- Value Props List -->
                <div class="space-y-4">
                    <div class="flex items-center gap-3.5 p-3.5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <div class="w-10 h-10 rounded-xl bg-indigo-500/20 text-indigo-400 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-white">Alur Persetujuan Transparan</div>
                            <div class="text-[11px] text-slate-400">Verifikasi admin langsung tanpa berkas lembar disposisi.</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3.5 p-3.5 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-white">Akurasi Audit Stok 99.8%</div>
                            <div class="text-[11px] text-slate-400">Pencatatan mutasi otomatis saat barang masuk dan keluar.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Note -->
            <div class="relative z-10 pt-6 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                <span class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    Server & Database Aktif
                </span>
                <span>Protected by Laravel 12</span>
            </div>

        </div>

        <!-- ========================================== -->
        <!-- RIGHT FORM PORTAL                          -->
        <!-- ========================================== -->
        <div class="lg:w-1/2 p-6 sm:p-12 lg:p-16 flex flex-col justify-between bg-slate-50/50">
            
            <!-- Top Navigation Link -->
            <div class="flex items-center justify-between mb-8">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-600 hover:text-indigo-600 transition group">
                    <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Beranda
                </a>

                @if (Route::has('register'))
                    <span class="text-xs text-slate-500">
                        Belum punya akun? 
                        <a href="{{ route('register') }}" class="font-bold text-indigo-600 hover:underline">Daftar Akun</a>
                    </span>
                @endif
            </div>

            <!-- Form Card Container -->
            <div 
                x-data="{ 
                    email: '{{ old('email', '') }}', 
                    password: '', 
                    showPassword: false,
                    fillAccount(userEmail, userPass) {
                        this.email = userEmail;
                        this.password = userPass;
                    }
                }" 
                class="w-full max-w-md mx-auto my-auto bg-white p-8 sm:p-10 rounded-3xl shadow-xl shadow-slate-200/80 border border-slate-200/80"
            >
                <!-- Form Header -->
                <div class="mb-7">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">Masuk ke Sistem</h2>
                    <p class="text-slate-500 text-xs sm:text-sm mt-1.5 leading-relaxed">
                        Masukkan email dan kata sandi Anda untuk mengakses portal manajemen stok.
                    </p>
                </div>

                <!-- Session Status Notification -->
                @if (session('status'))
                    <div class="mb-5 p-3.5 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-medium flex items-center gap-2">
                        <svg class="w-4 h-4 shrink-0 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>{{ session('status') }}</span>
                    </div>
                @endif

                <!-- Quick One-Click Demo Credentials (Super Convenient!) -->
                <div class="mb-6 p-3.5 rounded-2xl bg-indigo-50/60 border border-indigo-100/80">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[11px] font-bold text-indigo-800 flex items-center gap-1.5 uppercase tracking-wider">
                            <svg class="w-3.5 h-3.5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                            </svg>
                            Isi Cepat Akun Demo:
                        </span>
                        <span class="text-[10px] text-indigo-600 font-semibold">Klik salah satu</span>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button 
                            type="button" 
                            @click="fillAccount('admin@example.com', 'password123')"
                            class="px-2.5 py-1.5 rounded-xl text-left bg-white hover:bg-indigo-600 hover:text-white text-slate-700 border border-indigo-200/80 shadow-xs transition-all group"
                        >
                            <div class="text-[11px] font-bold text-indigo-700 group-hover:text-white">Admin (Gudang)</div>
                            <div class="text-[10px] font-mono text-slate-400 group-hover:text-indigo-100 truncate">admin@example.com</div>
                        </button>

                        <button 
                            type="button" 
                            @click="fillAccount('user@example.com', 'password123')"
                            class="px-2.5 py-1.5 rounded-xl text-left bg-white hover:bg-emerald-600 hover:text-white text-slate-700 border border-emerald-200/80 shadow-xs transition-all group"
                        >
                            <div class="text-[11px] font-bold text-emerald-700 group-hover:text-white">User (Pemohon)</div>
                            <div class="text-[10px] font-mono text-slate-400 group-hover:text-emerald-100 truncate">user@example.com</div>
                        </button>
                    </div>
                </div>

                <!-- Main Login Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                            Alamat Email
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                </svg>
                            </div>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                x-model="email"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="nama@instansi.com"
                                class="w-full pl-10 pr-4 py-2.5 text-sm text-slate-800 bg-slate-50/50 rounded-xl border @error('email') border-rose-400 focus:ring-rose-500/20 focus:border-rose-500 @else border-slate-200 focus:ring-indigo-500/20 focus:border-indigo-500 @enderror focus:bg-white focus:outline-none focus:ring-2 transition-all placeholder:text-slate-400"
                            />
                        </div>
                        @error('email')
                            <p class="mt-1.5 text-xs text-rose-600 flex items-center gap-1 font-medium">
                                <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
                                Kata Sandi
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-xs font-semibold text-indigo-600 hover:text-indigo-800 transition">
                                    Lupa sandi?
                                </a>
                            @endif
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <input
                                id="password"
                                :type="showPassword ? 'text' : 'password'"
                                name="password"
                                x-model="password"
                                required
                                autocomplete="current-password"
                                placeholder="••••••••"
                                class="w-full pl-10 pr-11 py-2.5 text-sm text-slate-800 bg-slate-50/50 rounded-xl border @error('password') border-rose-400 focus:ring-rose-500/20 focus:border-rose-500 @else border-slate-200 focus:ring-indigo-500/20 focus:border-indigo-500 @enderror focus:bg-white focus:outline-none focus:ring-2 transition-all placeholder:text-slate-400"
                            />
                            <!-- Toggle Password Visibility -->
                            <button
                                type="button"
                                @click="showPassword = !showPassword"
                                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 transition"
                                tabindex="-1"
                            >
                                <svg x-show="!showPassword" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                <svg x-show="showPassword" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l18 18"/>
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1.5 text-xs text-rose-600 flex items-center gap-1 font-medium">
                                <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center justify-between pt-1">
                        <label for="remember_me" class="inline-flex items-center gap-2 cursor-pointer group">
                            <input
                                id="remember_me"
                                type="checkbox"
                                name="remember"
                                class="w-4 h-4 rounded text-indigo-600 border-slate-300 focus:ring-indigo-500/30 cursor-pointer"
                            />
                            <span class="text-xs font-medium text-slate-600 group-hover:text-slate-800 transition">
                                Ingat sesi login saya
                            </span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full py-3.5 px-6 rounded-xl font-bold text-sm text-white bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 shadow-lg shadow-indigo-600/25 hover:shadow-indigo-600/35 transition-all flex items-center justify-center gap-2 group cursor-pointer"
                    >
                        <span>Masuk ke Dashboard</span>
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </form>

                <!-- Alternate Register Link -->
                @if (Route::has('register'))
                    <div class="mt-6 pt-5 border-t border-slate-100 text-center">
                        <p class="text-xs text-slate-500">
                            Belum terdaftar sebagai pengguna? 
                            <a href="{{ route('register') }}" class="font-bold text-indigo-600 hover:underline">
                                Buat Akun Baru
                            </a>
                        </p>
                    </div>
                @endif
            </div>

            <!-- Footer / Copyright -->
            <div class="text-center text-xs text-slate-400 mt-8">
                &copy; {{ date('Y') }} SIMBAR • Sistem Informasi Manajemen Barang & Stok Material.
            </div>

        </div>

    </div>
</x-guest-layout>
