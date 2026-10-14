@props(['products' => []])

<section id="katalog" class="py-24 bg-slate-50/70 border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200/70 mb-3">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                Monitoring Data Realtime
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Live Inventory & Simulasi Alur Permintaan
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-4 leading-relaxed">
                Jelajahi data stok material gudang yang saat ini aktif di sistem. Gunakan fitur simulasi untuk melihat bagaimana alur pengurangan kuota dihitung.
            </p>
        </div>

        <!-- Vue Mount Container -->
        <div id="vue-live-inventory">
            <!-- Vue Component -->
            <live-inventory-tracker 
                :initial-products='@json($products)'
                login-url="{{ route('login') }}"
                register-url="{{ route('register') }}"
                order-url="{{ Route::has('user.products.index') ? route('user.products.index') : route('login') }}"
            >
                <!-- Blade Fallback (Visible if Vue hasn't mounted yet or JS is loading) -->
                <div class="bg-white rounded-2xl p-8 border border-slate-200 shadow-sm">
                    <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-100">
                        <div>
                            <h3 class="text-xl font-bold text-slate-800">Daftar Material Gudang</h3>
                            <p class="text-xs text-slate-500">Memuat modul interaktif live tracker...</p>
                        </div>
                        <span class="text-xs font-mono font-bold bg-indigo-50 text-indigo-700 px-3 py-1 rounded-lg">
                            {{ count($products) }} Material
                        </span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @forelse($products as $product)
                            <div class="p-5 rounded-xl border border-slate-200 bg-slate-50/50">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="font-mono text-xs font-bold text-indigo-600">{{ $product->code }}</span>
                                    <span class="text-xs px-2 py-0.5 rounded-full {{ $product->stock > 10 ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800' }}">
                                        {{ $product->stock > 0 ? 'Tersedia' : 'Habis' }}
                                    </span>
                                </div>
                                <h4 class="font-bold text-slate-900 text-sm">{{ $product->name }}</h4>
                                <div class="text-xs text-slate-500 mt-1">Stok: {{ $product->stock }} {{ $product->unit }}</div>
                            </div>
                        @empty
                            <div class="col-span-3 text-center py-8 text-slate-400 text-sm italic">
                                Belum ada data material di sistem.
                            </div>
                        @endforelse
                    </div>
                </div>
            </live-inventory-tracker>
        </div>

    </div>
</section>
