@props(['stats' => []])

<nav x-data="{ mobileOpen: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     :class="scrolled ? 'bg-white/80 backdrop-blur-md shadow-sm border-slate-200/80 py-3' : 'bg-transparent py-5 border-transparent'"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 via-indigo-500 to-violet-500 flex items-center justify-center text-white shadow-md shadow-indigo-500/25 group-hover:scale-105 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <span class="text-xl font-extrabold tracking-tight text-slate-900">SIMBAR</span>
                        <span class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-indigo-50 text-indigo-700 border border-indigo-200">v2.0</span>
                    </div>
                    <p class="text-[11px] font-medium text-slate-500 leading-none">Manajemen Stok & Material</p>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-1 bg-slate-100/70 p-1.5 rounded-full border border-slate-200/60 backdrop-blur-sm">
                <a href="#beranda" class="px-4 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-indigo-600 hover:bg-white transition-all">Beranda</a>
                <a href="#fitur" class="px-4 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-indigo-600 hover:bg-white transition-all">Fitur</a>
                <a href="#alur" class="px-4 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-indigo-600 hover:bg-white transition-all">Alur Kerja</a>
                <a href="#katalog" class="px-4 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-indigo-600 hover:bg-white transition-all flex items-center gap-1.5">
                    <span>Live Tracker</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span>
                </a>
                <a href="#faq" class="px-4 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-indigo-600 hover:bg-white transition-all">Bantuan</a>
            </div>

            <!-- Desktop Auth Actions -->
            <div class="hidden sm:flex items-center gap-3">
                @auth
                    <div class="flex items-center gap-2 bg-slate-50 border border-slate-200 px-3 py-1.5 rounded-xl">
                        <span class="w-2 h-2 rounded-full {{ Auth::user()->role === 'admin' ? 'bg-indigo-500' : 'bg-emerald-500' }}"></span>
                        <div class="text-left">
                            <span class="block text-xs font-bold text-slate-800 leading-none">{{ Auth::user()->name }}</span>
                            <span class="text-[10px] font-semibold uppercase {{ Auth::user()->role === 'admin' ? 'text-indigo-600' : 'text-emerald-600' }}">
                                {{ Auth::user()->role === 'admin' ? 'Administrator' : 'User' }}
                            </span>
                        </div>
                    </div>

                    <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" 
                       class="px-4 py-2 rounded-xl text-xs font-bold text-white bg-indigo-600 hover:bg-indigo-700 shadow-sm shadow-indigo-600/20 transition-all flex items-center gap-1.5">
                        <span>Ke Dashboard</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="px-4 py-2 rounded-xl text-xs font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition-all">
                        Masuk
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                           class="px-4 py-2 rounded-xl text-xs font-bold text-white bg-indigo-600 hover:bg-indigo-700 shadow-sm shadow-indigo-600/20 hover:shadow-indigo-600/30 transition-all">
                            Daftar Akun
                        </a>
                    @endif
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileOpen = !mobileOpen" 
                    type="button" 
                    class="md:hidden p-2 rounded-xl text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-colors"
                    aria-label="Buka Menu Navigasi">
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div x-show="mobileOpen" 
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-white/95 backdrop-blur-lg border-b border-slate-200 px-4 pt-3 pb-6 mt-3 space-y-3 shadow-xl">
        <a @click="mobileOpen = false" href="#beranda" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-50">Beranda</a>
        <a @click="mobileOpen = false" href="#fitur" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-50">Fitur</a>
        <a @click="mobileOpen = false" href="#alur" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-50">Alur Kerja</a>
        <a @click="mobileOpen = false" href="#katalog" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-50">Live Tracker</a>
        <a @click="mobileOpen = false" href="#faq" class="block px-3 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-50">Bantuan & FAQ</a>
        
        <div class="pt-3 border-t border-slate-100 space-y-2">
            @auth
                <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" 
                   class="block w-full py-2.5 px-4 text-center rounded-xl text-xs font-bold text-white bg-indigo-600">
                    Buka Dashboard ({{ Auth::user()->name }})
                </a>
            @else
                <a href="{{ route('login') }}" 
                   class="block w-full py-2.5 px-4 text-center rounded-xl text-xs font-semibold text-slate-700 bg-slate-100">
                    Masuk ke Akun
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" 
                       class="block w-full py-2.5 px-4 text-center rounded-xl text-xs font-bold text-white bg-indigo-600">
                        Daftar Akun Baru
                    </a>
                @endif
            @endauth
        </div>
    </div>
</nav>
