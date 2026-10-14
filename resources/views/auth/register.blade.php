<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Daftar Akun Baru</h2>
        <p class="text-xs text-slate-500 mt-1">Lengkapi data diri Anda untuk mengakses katalog & permohonan material.</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nama Lengkap</label>
            <input 
                id="name" 
                class="w-full px-3.5 py-2.5 text-sm text-slate-800 bg-slate-50/50 rounded-xl border @error('name') border-rose-400 focus:ring-rose-500/20 @else border-slate-200 focus:ring-indigo-500/20 focus:border-indigo-500 @enderror focus:bg-white focus:outline-none focus:ring-2 transition-all placeholder:text-slate-400" 
                type="text" 
                name="name" 
                value="{{ old('name') }}" 
                placeholder="Contoh: Budi Santoso"
                required 
                autofocus 
                autocomplete="name" 
            />
            @error('name')
                <p class="mt-1 text-xs text-rose-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Alamat Email</label>
            <input 
                id="email" 
                class="w-full px-3.5 py-2.5 text-sm text-slate-800 bg-slate-50/50 rounded-xl border @error('email') border-rose-400 focus:ring-rose-500/20 @else border-slate-200 focus:ring-indigo-500/20 focus:border-indigo-500 @enderror focus:bg-white focus:outline-none focus:ring-2 transition-all placeholder:text-slate-400" 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                placeholder="nama@instansi.com"
                required 
                autocomplete="username" 
            />
            @error('email')
                <p class="mt-1 text-xs text-rose-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Kata Sandi</label>
            <input 
                id="password" 
                class="w-full px-3.5 py-2.5 text-sm text-slate-800 bg-slate-50/50 rounded-xl border @error('password') border-rose-400 focus:ring-rose-500/20 @else border-slate-200 focus:ring-indigo-500/20 focus:border-indigo-500 @enderror focus:bg-white focus:outline-none focus:ring-2 transition-all placeholder:text-slate-400"
                type="password"
                name="password"
                placeholder="Minimal 8 karakter"
                required 
                autocomplete="new-password" 
            />
            @error('password')
                <p class="mt-1 text-xs text-rose-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Konfirmasi Kata Sandi</label>
            <input 
                id="password_confirmation" 
                class="w-full px-3.5 py-2.5 text-sm text-slate-800 bg-slate-50/50 rounded-xl border @error('password_confirmation') border-rose-400 focus:ring-rose-500/20 @else border-slate-200 focus:ring-indigo-500/20 focus:border-indigo-500 @enderror focus:bg-white focus:outline-none focus:ring-2 transition-all placeholder:text-slate-400"
                type="password"
                name="password_confirmation" 
                placeholder="Ulangi kata sandi"
                required 
                autocomplete="new-password" 
            />
            @error('password_confirmation')
                <p class="mt-1 text-xs text-rose-600 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="pt-2">
            <button 
                type="submit" 
                class="w-full py-3 px-5 rounded-xl font-bold text-sm text-white bg-indigo-600 hover:bg-indigo-700 shadow-md shadow-indigo-600/20 transition-all flex items-center justify-center gap-2 cursor-pointer"
            >
                <span>Daftarkan Akun</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </div>

        <div class="pt-4 border-t border-slate-100 text-center">
            <p class="text-xs text-slate-500">
                Sudah memiliki akun terdaftar? 
                <a href="{{ route('login') }}" class="font-bold text-indigo-600 hover:underline">
                    Masuk Sekarang
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
