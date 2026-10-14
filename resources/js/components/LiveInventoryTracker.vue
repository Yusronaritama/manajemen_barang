<template>
  <div class="w-full">
    <!-- Header & Search Toolbar -->
    <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl shadow-slate-100 border border-slate-200/80 mb-8">
      <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
        <div>
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-indigo-50 text-indigo-700 border border-indigo-100 mb-2">
            <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
            Modular Vue 3 Live Component
          </div>
          <h3 class="text-2xl font-bold text-slate-900 tracking-tight">Katalog & Live Stock Tracker</h3>
          <p class="text-slate-500 text-sm mt-1">Cari, pantau ketersediaan real-time, atau simulasikan alur permintaan barang.</p>
        </div>

        <!-- Controls: Search & View Toggle -->
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
          <!-- Search Box -->
          <div class="relative min-w-[260px]">
            <input
              v-model="searchQuery"
              type="text"
              placeholder="Cari kode (MAT-...) atau nama..."
              class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 bg-slate-50/50 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all"
            />
            <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            <button
              v-if="searchQuery"
              @click="searchQuery = ''"
              class="absolute right-3 top-3 text-slate-400 hover:text-slate-600 text-xs bg-slate-200 rounded-full w-4 h-4 flex items-center justify-center"
            >
              &times;
            </button>
          </div>

          <!-- View Mode Toggle -->
          <div class="inline-flex items-center bg-slate-100 p-1 rounded-xl border border-slate-200">
            <button
              type="button"
              @click="viewMode = 'grid'"
              :class="viewMode === 'grid' ? 'bg-white text-indigo-600 shadow-sm font-semibold' : 'text-slate-600 hover:text-slate-900'"
              class="px-3 py-1.5 rounded-lg text-xs flex items-center gap-1.5 transition-all"
            >
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
              </svg>
              Grid
            </button>
            <button
              type="button"
              @click="viewMode = 'table'"
              :class="viewMode === 'table' ? 'bg-white text-indigo-600 shadow-sm font-semibold' : 'text-slate-600 hover:text-slate-900'"
              class="px-3 py-1.5 rounded-lg text-xs flex items-center gap-1.5 transition-all"
            >
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
              </svg>
              Tabel
            </button>
          </div>
        </div>
      </div>

      <!-- Filter Tabs -->
      <div class="flex flex-wrap items-center gap-2 mt-6 pt-5 border-t border-slate-100">
        <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider mr-2">Filter Status:</span>
        <button
          v-for="filter in filterOptions"
          :key="filter.id"
          @click="activeFilter = filter.id"
          :class="activeFilter === filter.id 
            ? 'bg-indigo-600 text-white shadow-sm shadow-indigo-200' 
            : 'bg-slate-100/80 text-slate-600 hover:bg-slate-200/60'"
          class="px-3 py-1.5 rounded-lg text-xs font-medium transition-all flex items-center gap-1.5"
        >
          <span>{{ filter.label }}</span>
          <span 
            :class="activeFilter === filter.id ? 'bg-indigo-700/60 text-white' : 'bg-slate-200 text-slate-600'"
            class="px-1.5 py-0.2 rounded text-[10px] font-bold"
          >
            {{ getCountForFilter(filter.id) }}
          </span>
        </button>
      </div>
    </div>

    <!-- Empty State -->
    <div v-if="filteredProducts.length === 0" class="bg-white rounded-2xl p-12 text-center border border-slate-200/80 shadow-sm">
      <div class="w-16 h-16 mx-auto mb-4 bg-slate-100 text-slate-400 rounded-2xl flex items-center justify-center">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
      </div>
      <h4 class="text-lg font-bold text-slate-800">Tidak ada material ditemukan</h4>
      <p class="text-sm text-slate-500 mt-1 max-w-sm mx-auto">Coba sesuaikan kata kunci pencarian atau ganti filter status untuk melihat barang lainnya.</p>
      <button 
        @click="resetFilters" 
        class="mt-4 px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl text-xs font-semibold hover:bg-indigo-100 transition"
      >
        Reset Filter
      </button>
    </div>

    <!-- GRID VIEW -->
    <div v-else-if="viewMode === 'grid'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div
        v-for="item in filteredProducts"
        :key="item.id || item.code"
        class="group relative bg-white rounded-2xl p-6 border border-slate-200/80 hover:border-indigo-300 hover:shadow-xl hover:shadow-indigo-500/5 transition-all duration-300 flex flex-col justify-between"
      >
        <div>
          <!-- Top Row: SKU & Stock Badge -->
          <div class="flex items-center justify-between gap-2 mb-4">
            <span class="inline-flex items-center font-mono text-xs font-bold px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 border border-slate-200">
              {{ item.code }}
            </span>
            <span
              :class="getStockBadgeClass(item.stock)"
              class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold"
            >
              <span class="w-1.5 h-1.5 rounded-full" :class="getStockDotClass(item.stock)"></span>
              {{ getStockStatusLabel(item.stock) }}
            </span>
          </div>

          <!-- Title & Description -->
          <h4 class="text-lg font-bold text-slate-900 group-hover:text-indigo-600 transition-colors">
            {{ item.name }}
          </h4>
          <p class="text-xs text-slate-500 line-clamp-2 mt-1 mb-5">
            {{ item.description || 'Spesifikasi material standar untuk operasional.' }}
          </p>
        </div>

        <!-- Stock Stat & Action -->
        <div class="pt-4 border-t border-slate-100">
          <div class="flex items-center justify-between mb-4">
            <div>
              <div class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Ketersediaan</div>
              <div class="text-xl font-black text-slate-900 flex items-baseline gap-1">
                {{ item.stock }}
                <span class="text-xs font-medium text-slate-500 uppercase">{{ item.unit }}</span>
              </div>
            </div>
            <!-- Progress Bar Indicator -->
            <div class="w-24 text-right">
              <div class="text-[10px] text-slate-400 font-medium mb-1">Kapasitas</div>
              <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                <div 
                  class="h-full rounded-full transition-all duration-500" 
                  :class="getProgressBarClass(item.stock)"
                  :style="{ width: Math.min(100, Math.max(10, (item.stock / 50) * 100)) + '%' }"
                ></div>
              </div>
            </div>
          </div>

          <button
            @click="openSimulator(item)"
            class="w-full py-2.5 px-4 bg-slate-50 hover:bg-indigo-600 hover:text-white text-slate-700 rounded-xl text-xs font-bold transition-all flex items-center justify-center gap-2 group/btn border border-slate-200/80 hover:border-indigo-600 shadow-sm"
          >
            <span>Simulasikan Permintaan</span>
            <svg class="w-3.5 h-3.5 group-hover/btn:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- TABLE VIEW -->
    <div v-else class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-slate-100 text-left">
          <thead class="bg-slate-50/75">
            <tr>
              <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Kode SKU</th>
              <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Nama Material</th>
              <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Satuan</th>
              <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Stok Realtime</th>
              <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Status</th>
              <th class="px-6 py-4 text-right text-xs font-bold text-slate-500 uppercase tracking-wider">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100 bg-white">
            <tr
              v-for="item in filteredProducts"
              :key="item.id || item.code"
              class="hover:bg-slate-50/70 transition-colors"
            >
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="font-mono text-xs font-bold px-2 py-1 bg-slate-100 text-slate-800 rounded">
                  {{ item.code }}
                </span>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm font-bold text-slate-900">{{ item.name }}</div>
                <div class="text-xs text-slate-400 line-clamp-1">{{ item.description || '-' }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-xs font-semibold text-slate-600 uppercase">
                {{ item.unit }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="text-base font-black text-slate-900">{{ item.stock }}</span>
                <span class="text-xs text-slate-400 ml-1">{{ item.unit }}</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span
                  :class="getStockBadgeClass(item.stock)"
                  class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold"
                >
                  <span class="w-1.5 h-1.5 rounded-full" :class="getStockDotClass(item.stock)"></span>
                  {{ getStockStatusLabel(item.stock) }}
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right">
                <button
                  @click="openSimulator(item)"
                  class="px-3.5 py-1.5 rounded-lg text-xs font-bold bg-indigo-50 text-indigo-600 hover:bg-indigo-600 hover:text-white transition-all shadow-sm"
                >
                  Simulasi
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Quick Modal Simulator -->
    <div
      v-if="selectedItem"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm transition-all animate-fadeIn"
      @click.self="selectedItem = null"
    >
      <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl border border-slate-100 relative">
        <!-- Close Button -->
        <button
          @click="selectedItem = null"
          class="absolute top-5 right-5 text-slate-400 hover:text-slate-600 p-2 rounded-full hover:bg-slate-100 transition"
        >
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>

        <div class="flex items-center gap-3 mb-5">
          <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
            </svg>
          </div>
          <div>
            <span class="text-xs font-mono font-bold text-indigo-600 uppercase">{{ selectedItem.code }}</span>
            <h3 class="text-xl font-bold text-slate-900 leading-tight">{{ selectedItem.name }}</h3>
          </div>
        </div>

        <div class="bg-slate-50 rounded-2xl p-4 border border-slate-100 mb-6">
          <div class="flex justify-between items-center text-sm mb-2">
            <span class="text-slate-500">Stok Saat Ini:</span>
            <span class="font-bold text-slate-900">{{ selectedItem.stock }} {{ selectedItem.unit }}</span>
          </div>
          <div class="flex justify-between items-center text-sm">
            <span class="text-slate-500">Status Ketersediaan:</span>
            <span class="font-semibold text-emerald-600">{{ getStockStatusLabel(selectedItem.stock) }}</span>
          </div>
        </div>

        <!-- Simulation Input -->
        <div class="space-y-4 mb-6">
          <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">
            Simulasi Jumlah Permintaan ({{ selectedItem.unit }}):
          </label>
          <div class="flex items-center gap-3">
            <button
              type="button"
              @click="simulatedQty = Math.max(1, simulatedQty - 1)"
              class="w-10 h-10 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 font-bold text-lg flex items-center justify-center"
            >
              -
            </button>
            <input
              v-model.number="simulatedQty"
              type="number"
              min="1"
              :max="selectedItem.stock"
              class="flex-1 text-center py-2 px-3 border border-slate-200 rounded-xl text-lg font-bold text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500"
            />
            <button
              type="button"
              @click="simulatedQty = Math.min(selectedItem.stock || 999, simulatedQty + 1)"
              class="w-10 h-10 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 font-bold text-lg flex items-center justify-center"
            >
              +
            </button>
          </div>

          <!-- Calculation Feedback -->
          <div
            v-if="simulatedQty > selectedItem.stock"
            class="p-3 rounded-xl bg-rose-50 border border-rose-200 text-rose-700 text-xs flex items-center gap-2"
          >
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
            Jumlah simulasi melebihi stok yang tersedia (Maksimal: {{ selectedItem.stock }} {{ selectedItem.unit }}).
          </div>
          <div
            v-else
            class="p-3 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs flex items-center justify-between"
          >
            <span>Sisa Stok Pasca-Approval:</span>
            <span class="font-bold font-mono">{{ selectedItem.stock - simulatedQty }} {{ selectedItem.unit }}</span>
          </div>
        </div>

        <p class="text-xs text-slate-400 mb-6 italic leading-relaxed">
          * Catatan: Simulasi ini menunjukkan alur approval. Permintaan sebenarnya memerlukan login akun User dan persetujuan verifikasi dari Administrator.
        </p>

        <!-- Modal Actions -->
        <div class="flex items-center gap-3">
          <a
            :href="orderUrl || loginUrl"
            class="flex-1 py-3 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-xl text-center text-xs shadow-lg shadow-indigo-600/20 transition-all"
          >
            Ajukan di Sistem
          </a>
          <button
            @click="selectedItem = null"
            class="py-3 px-4 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl text-xs transition"
          >
            Tutup
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LiveInventoryTracker',
  props: {
    initialProducts: {
      type: Array,
      default: () => []
    },
    loginUrl: {
      type: String,
      default: '/login'
    },
    registerUrl: {
      type: String,
      default: '/register'
    },
    orderUrl: {
      type: String,
      default: '/user/catalog'
    }
  },
  data() {
    return {
      searchQuery: '',
      activeFilter: 'all',
      viewMode: 'grid',
      selectedItem: null,
      simulatedQty: 1,
      filterOptions: [
        { id: 'all', label: 'Semua' },
        { id: 'available', label: 'Stok Aman (>10)' },
        { id: 'low', label: 'Menipis (1-10)' },
        { id: 'empty', label: 'Habis (0)' }
      ]
    };
  },
  computed: {
    productsList() {
      if (this.initialProducts && this.initialProducts.length > 0) {
        return this.initialProducts;
      }
      // Fallback demo data if DB is completely empty
      return [
        { id: 1, code: 'MAT-001', name: 'Laptop ASUS VivoBook', unit: 'UNIT', stock: 12, description: 'Spesifikasi kerja kantor dan divisi data.' },
        { id: 2, code: 'MAT-002', name: 'Mouse Wireless Logitech', unit: 'PCS', stock: 45, description: 'Perangkat penunjang operasional staf.' },
        { id: 3, code: 'MAT-003', name: 'Kursi Kerja Ergonomis', unit: 'UNIT', stock: 8, description: 'Peralatan kantor ruang administrasi.' },
        { id: 4, code: 'MAT-004', name: 'Kertas HVS A4 80gsm', unit: 'RIM', stock: 120, description: 'Kebutuhan dokumen cetak dan arsip berkas.' },
        { id: 5, code: 'MAT-005', name: 'Kabel UTP Cat6 305m', unit: 'ROL', stock: 4, description: 'Infrastruktur jaringan internal dan server.' },
        { id: 6, code: 'MAT-006', name: 'Tinta Printer Hitam 003', unit: 'BOTOL', stock: 0, description: 'Tinta cadangan operasional print invoice.' }
      ];
    },
    filteredProducts() {
      return this.productsList.filter((item) => {
        // Search query match
        const q = this.searchQuery.toLowerCase().trim();
        const matchesSearch = !q || 
          (item.name && item.name.toLowerCase().includes(q)) ||
          (item.code && item.code.toLowerCase().includes(q)) ||
          (item.unit && item.unit.toLowerCase().includes(q)) ||
          (item.description && item.description.toLowerCase().includes(q));

        if (!matchesSearch) return false;

        // Status filter match
        const stock = Number(item.stock) || 0;
        if (this.activeFilter === 'available') return stock > 10;
        if (this.activeFilter === 'low') return stock > 0 && stock <= 10;
        if (this.activeFilter === 'empty') return stock === 0;

        return true;
      });
    }
  },
  methods: {
    getCountForFilter(filterId) {
      return this.productsList.filter((item) => {
        const stock = Number(item.stock) || 0;
        if (filterId === 'available') return stock > 10;
        if (filterId === 'low') return stock > 0 && stock <= 10;
        if (filterId === 'empty') return stock === 0;
        return true;
      }).length;
    },
    getStockStatusLabel(stock) {
      const s = Number(stock) || 0;
      if (s === 0) return 'Habis';
      if (s <= 10) return 'Menipis';
      return 'Tersedia';
    },
    getStockBadgeClass(stock) {
      const s = Number(stock) || 0;
      if (s === 0) return 'bg-rose-50 text-rose-700 border border-rose-200';
      if (s <= 10) return 'bg-amber-50 text-amber-700 border border-amber-200';
      return 'bg-emerald-50 text-emerald-700 border border-emerald-200';
    },
    getStockDotClass(stock) {
      const s = Number(stock) || 0;
      if (s === 0) return 'bg-rose-500';
      if (s <= 10) return 'bg-amber-500';
      return 'bg-emerald-500';
    },
    getProgressBarClass(stock) {
      const s = Number(stock) || 0;
      if (s === 0) return 'bg-rose-500';
      if (s <= 10) return 'bg-amber-500';
      return 'bg-emerald-500';
    },
    openSimulator(item) {
      this.selectedItem = item;
      this.simulatedQty = item.stock > 0 ? 1 : 0;
    },
    resetFilters() {
      this.searchQuery = '';
      this.activeFilter = 'all';
    }
  }
};
</script>

<style scoped>
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.97); }
  to { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
  animation: fadeIn 0.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}
</style>
