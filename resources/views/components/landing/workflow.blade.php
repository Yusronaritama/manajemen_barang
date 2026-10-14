<section id="alur" class="py-24 bg-white relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-indigo-50 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-violet-50 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-20">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 border border-indigo-200/60 mb-3">
                Alur Kerja Transparan
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Bagaimana Sistem Memproses Permintaan Material?
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-4 leading-relaxed">
                4 tahapan alur otomatis yang menghubungkan staf unit kerja dengan tim gudang secara presisi tanpa lembar disposisi manual.
            </p>
        </div>

        <!-- 4 Step Flow Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            
            <!-- Step 1 -->
            <div class="relative bg-slate-50/70 rounded-3xl p-7 border border-slate-200/80 hover:bg-white hover:shadow-xl hover:shadow-indigo-500/5 transition-all">
                <div class="flex items-center justify-between mb-6">
                    <span class="w-12 h-12 rounded-2xl bg-indigo-600 text-white font-extrabold text-base flex items-center justify-center shadow-md shadow-indigo-600/30">
                        01
                    </span>
                    <span class="px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-indigo-100 text-indigo-700">
                        Oleh Admin
                    </span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Pencatatan Master & Stok Awal</h3>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Administrator mendaftarkan kode SKU, nama material, unit satuan, serta mencatat saldo stok barang yang masuk ke gudang.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="relative bg-slate-50/70 rounded-3xl p-7 border border-slate-200/80 hover:bg-white hover:shadow-xl hover:shadow-indigo-500/5 transition-all">
                <div class="flex items-center justify-between mb-6">
                    <span class="w-12 h-12 rounded-2xl bg-slate-900 text-white font-extrabold text-base flex items-center justify-center shadow-md shadow-slate-900/30">
                        02
                    </span>
                    <span class="px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-200 text-slate-700">
                        Oleh Staf / User
                    </span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Pengajuan Kebutuhan dari Katalog</h3>
                <p class="text-xs text-slate-500 leading-relaxed">
                    User memilih item yang dibutuhkan pada menu katalog, mengisi jumlah permintaan spesifik, dan mengirimkan formulir order.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="relative bg-slate-50/70 rounded-3xl p-7 border border-slate-200/80 hover:bg-white hover:shadow-xl hover:shadow-indigo-500/5 transition-all">
                <div class="flex items-center justify-between mb-6">
                    <span class="w-12 h-12 rounded-2xl bg-amber-500 text-white font-extrabold text-base flex items-center justify-center shadow-md shadow-amber-500/30">
                        03
                    </span>
                    <span class="px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-amber-100 text-amber-800">
                        Verifikasi Admin
                    </span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Review Ketersediaan & Approval</h3>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Admin menerima notifikasi daftar order, mengecek kecukupan kuota stok fisik, lalu melakukan klik tombol Setujui atau Tolak.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="relative bg-slate-50/70 rounded-3xl p-7 border border-slate-200/80 hover:bg-white hover:shadow-xl hover:shadow-indigo-500/5 transition-all">
                <div class="flex items-center justify-between mb-6">
                    <span class="w-12 h-12 rounded-2xl bg-emerald-600 text-white font-extrabold text-base flex items-center justify-center shadow-md shadow-emerald-600/30">
                        04
                    </span>
                    <span class="px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-emerald-100 text-emerald-800">
                        Otomatis Sistem
                    </span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Stok Berkurang & Material Diserahkan</h3>
                <p class="text-xs text-slate-500 leading-relaxed">
                    Sistem otomatis memotong saldo gudang, mencatat log mutasi, dan memunculkan barang di dasbor "Material Saya" milik pemohon.
                </p>
            </div>

        </div>

        <!-- Flow Summary Banner -->
        <div class="mt-14 p-6 sm:p-8 rounded-3xl bg-indigo-50/60 border border-indigo-100 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center shrink-0 shadow-md shadow-indigo-600/25">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="text-base font-bold text-slate-900">Alur Bebas Kertas & Sepenuhnya Terekam Digital</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Semua permintaan memiliki jejak audit waktu, pengaju, pemroses, dan catatan status.</p>
                </div>
            </div>

            <a href="#katalog" class="px-5 py-2.5 rounded-xl bg-indigo-600 text-white text-xs font-bold hover:bg-indigo-700 transition shadow-sm shrink-0">
                Uji Simulasi Sekarang →
            </a>
        </div>

    </div>
</section>
