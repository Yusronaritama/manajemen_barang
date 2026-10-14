<section id="faq" class="py-24 bg-slate-50/70 border-t border-slate-200/80">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 border border-indigo-200/60 mb-3">
                Pertanyaan Populer
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Tanya Jawab Seputar SIMBAR
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-3">
                Informasi seputar cara kerja sistem, akun login, dan manajemen mutasi barang.
            </p>
        </div>

        <!-- Accordion Container -->
        <div x-data="{ active: 1 }" class="space-y-4">
            
            <!-- Item 1 -->
            <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm transition-all">
                <button
                    @click="active = (active === 1 ? null : 1)"
                    type="button"
                    class="w-full px-6 py-5 text-left flex items-center justify-between gap-4 font-bold text-slate-900 hover:text-indigo-600 transition-colors"
                >
                    <span class="text-base sm:text-lg">Bagaimana cara login jika saya belum membuat akun?</span>
                    <span class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0 text-slate-500 font-bold text-sm">
                        <span x-show="active !== 1">+</span>
                        <span x-show="active === 1" x-cloak>−</span>
                    </span>
                </button>
                <div x-show="active === 1" x-cloak class="px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Anda dapat mendaftar akun baru melalui menu <a href="{{ route('register') }}" class="text-indigo-600 font-bold hover:underline">Daftar Akun</a>, atau langsung menggunakan akun demo yang telah terisi (Seeder):
                    <div class="mt-3 p-3 bg-slate-50 rounded-xl font-mono text-xs text-slate-700 border border-slate-200/80 space-y-1">
                        <div><strong>Admin:</strong> admin@example.com / password123</div>
                        <div><strong>User:</strong> user@example.com / password123</div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm transition-all">
                <button
                    @click="active = (active === 2 ? null : 2)"
                    type="button"
                    class="w-full px-6 py-5 text-left flex items-center justify-between gap-4 font-bold text-slate-900 hover:text-indigo-600 transition-colors"
                >
                    <span class="text-base sm:text-lg">Apakah sistem ini mendukung berbagai jenis satuan barang?</span>
                    <span class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0 text-slate-500 font-bold text-sm">
                        <span x-show="active !== 2">+</span>
                        <span x-show="active === 2" x-cloak>−</span>
                    </span>
                </button>
                <div x-show="active === 2" x-cloak class="px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Ya, sangat fleksibel. Administrator dapat menentukan satuan bebas sesuai kebutuhan material fisik, misalnya <strong>ROL, Lembar, KG, Meter, Pcs, Box, hingga Rim</strong>. Satuan ini akan otomatis ditampilkan pada katalog dan formulir pengajuan staf.
                </div>
            </div>

            <!-- Item 3 -->
            <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm transition-all">
                <button
                    @click="active = (active === 3 ? null : 3)"
                    type="button"
                    class="w-full px-6 py-5 text-left flex items-center justify-between gap-4 font-bold text-slate-900 hover:text-indigo-600 transition-colors"
                >
                    <span class="text-base sm:text-lg">Kapan stok barang di gudang akan otomatis dipotong?</span>
                    <span class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0 text-slate-500 font-bold text-sm">
                        <span x-show="active !== 3">+</span>
                        <span x-show="active === 3" x-cloak>−</span>
                    </span>
                </button>
                <div x-show="active === 3" x-cloak class="px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Stok gudang tidak langsung berkurang saat user mengajukan form pesanan. Sistem baru akan memotong saldo stok secara instan setelah <strong>Administrator menekan tombol Approve (Setujui)</strong> di menu manajemen pesanan. Hal ini memastikan tidak ada selisih stok jika pesanan dibatalkan.
                </div>
            </div>

            <!-- Item 4 -->
            <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm transition-all">
                <button
                    @click="active = (active === 4 ? null : 4)"
                    type="button"
                    class="w-full px-6 py-5 text-left flex items-center justify-between gap-4 font-bold text-slate-900 hover:text-indigo-600 transition-colors"
                >
                    <span class="text-base sm:text-lg">Bagaimana cara Administrator menambah stok baru (Restock)?</span>
                    <span class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0 text-slate-500 font-bold text-sm">
                        <span x-show="active !== 4">+</span>
                        <span x-show="active === 4" x-cloak>−</span>
                    </span>
                </button>
                <div x-show="active === 4" x-cloak class="px-6 pb-6 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                    Pada menu Admin di dashboard, terdapat modul <strong>Add Stock</strong>. Admin cukup memilih material yang ingin ditambah, memasukkan jumlah kuantitas penambahan dan keterangan (misal: "Pengadaan Vendor Batch 12"), lalu sistem akan langsung memperbarui saldo stok dan mencatat riwayat log mutasinya.
                </div>
            </div>

        </div>

    </div>
</section>
