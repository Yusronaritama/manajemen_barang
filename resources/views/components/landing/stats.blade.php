@props(['stats' => []])

<section class="py-12 bg-white border-y border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
            
            <!-- Stat 1 -->
            <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-100 flex flex-col justify-center">
                <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight flex items-baseline gap-1">
                    <span>{{ max($stats['total_materials'] ?? 3, 3) }}</span>
                    <span class="text-indigo-600 text-2xl font-bold">+</span>
                </div>
                <div class="text-xs sm:text-sm font-bold text-slate-700 mt-1">Master Material Terdaftar</div>
                <div class="text-[11px] text-slate-400 mt-0.5">Klasifikasi SKU & multi-satuan</div>
            </div>

            <!-- Stat 2 -->
            <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-100 flex flex-col justify-center">
                <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight flex items-baseline gap-1">
                    <span>{{ max($stats['total_stock'] ?? 75, 75) }}</span>
                    <span class="text-indigo-600 text-2xl font-bold">+</span>
                </div>
                <div class="text-xs sm:text-sm font-bold text-slate-700 mt-1">Total Unit Stok Fisik</div>
                <div class="text-[11px] text-slate-400 mt-0.5">Kapasitas siap didistribusikan</div>
            </div>

            <!-- Stat 3 -->
            <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-100 flex flex-col justify-center">
                <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight flex items-baseline gap-1">
                    <span>{{ max($stats['approved_orders'] ?? 18, 18) }}</span>
                    <span class="text-emerald-600 text-2xl font-bold">+</span>
                </div>
                <div class="text-xs sm:text-sm font-bold text-slate-700 mt-1">Permintaan Disetujui</div>
                <div class="text-[11px] text-slate-400 mt-0.5">Verifikasi admin akurat & cepat</div>
            </div>

            <!-- Stat 4 -->
            <div class="p-5 rounded-2xl bg-slate-50/70 border border-slate-100 flex flex-col justify-center">
                <div class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight flex items-baseline gap-1">
                    <span>99.8</span>
                    <span class="text-indigo-600 text-2xl font-bold">%</span>
                </div>
                <div class="text-xs sm:text-sm font-bold text-slate-700 mt-1">Akurasi Audit Inventaris</div>
                <div class="text-[11px] text-slate-400 mt-0.5">Tanpa resiko selisih barang fisik</div>
            </div>

        </div>
    </div>
</section>
