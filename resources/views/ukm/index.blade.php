@extends('layouts.app')

@section('title', 'Beranda UKM - Portal UKM BIU')

@section('content')

@include('layouts.navbar')

<!-- 🌟 Hero Section -->
<section
  class="bg-gradient-to-br from-emerald-500 to-teal-600 dark:bg-gray-900 py-28 relative overflow-hidden transition-colors duration-500">
  <div class="relative max-w-6xl mx-auto mt-10 px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold text-white dark:text-emerald-300 dark:text-white mb-4 drop-shadow-md">
      Jelajahi Semua UKM di Bina Insani University
    </h1>
    <p class="text-lg text-emerald-50 dark:text-emerald-200 max-w-2xl mx-auto">
      Temukan wadah untuk mengembangkan minat, bakat, dan relasi baru ✨
    </p>
  </div>
</section>

<!-- 🧭 Filter & Search -->
<section
  class="bg-white/80 dark:bg-gray-900 backdrop-blur-md sticky top-20 z-40 border-b border-gray-200 dark:border-gray-700 shadow-md transition-all duration-300 hover:shadow-lg">
  <div class="max-w-6xl mx-auto px-6 py-6">
    <form method="GET" action="{{ route('ukm.index') }}" id="filterForm">
      <div class="flex flex-col md:flex-row items-center justify-between gap-4">
        <!-- Search -->
        <div class="w-full md:w-96">
          <div class="relative">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari UKM..."
              class="w-full pl-12 pr-4 py-3 border border-gray-200 dark:border-gray-700 rounded-full bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 shadow-inner focus:border-emerald-500 focus:ring-2 focus:ring-emerald-300 dark:focus:ring-emerald-400 transition-all">
            <svg class="w-5 h-5 text-gray-400 dark:text-gray-300 absolute left-4 top-3.5" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
        </div>

        <!-- Filter Kategori -->
        <div class="flex flex-wrap gap-2 justify-center md:justify-end">
          <button type="button" onclick="filterKategori('semua')"
            class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 hover:scale-105 focus:ring-2 focus:ring-emerald-300
              {{ request('kategori', 'semua') === 'semua' ? 'bg-emerald-500 text-white shadow-md' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 hover:bg-emerald-50 dark:hover:bg-emerald-700/50 hover:text-emerald-600 dark:hover:text-emerald-300' }}">
            Semua
          </button>
          @foreach ($kategoris as $kategori)
          <button type="button" onclick="filterKategori('{{ $kategori->slug }}')"
            class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 hover:scale-105 focus:ring-2 focus:ring-emerald-300
              {{ request('kategori') === $kategori->slug ? 'bg-emerald-500 text-white shadow-md' : 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 hover:bg-emerald-50 dark:hover:bg-emerald-700/50 hover:text-emerald-600 dark:hover:text-emerald-300' }}">
            {{ $kategori->nama }}
          </button>
          @endforeach
        </div>
        <input type="hidden" name="kategori" id="kategoriInput" value="{{ request('kategori', 'semua') }}">
      </div>
    </form>
  </div>
</section>

<!-- 🧱 Daftar UKM -->
<section id="ukm-section"
  class="py-20 bg-gradient-to-b from-gray-50 to-white dark:from-gray-900 dark:to-gray-800 transition-colors duration-500">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Info hasil -->
    <div class="mb-8 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-gray-600 dark:text-gray-300 text-sm md:text-base">
        Menampilkan <span class="font-semibold text-emerald-600">{{ $ukms->total() }}</span> UKM ditemukan
      </p>
      <select name="sort" onchange="document.getElementById('filterForm').submit()"
        class="border border-gray-200 dark:border-gray-700 rounded-lg px-4 py-2 text-sm bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 focus:ring-2 focus:ring-emerald-300 dark:focus:ring-emerald-400 transition-all">
        <option value="nama_asc" {{ request('sort')==='nama_asc' ? 'selected' : '' }}>Urutkan: A-Z</option>
        <option value="nama_desc" {{ request('sort')==='nama_desc' ? 'selected' : '' }}>Urutkan: Z-A</option>
        <option value="populer" {{ request('sort')==='populer' ? 'selected' : '' }}>Terpopuler</option>
        <option value="terbaru" {{ request('sort')==='terbaru' ? 'selected' : '' }}>Terbaru</option>
      </select>
    </div>

    @if($ukms->count())
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
      @foreach ($ukms as $ukm)
      <div
        class="group bg-white dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden hover:-translate-y-1">
        <div class="relative h-44 overflow-hidden">
          @if($ukm->gambar_profil)
          <img src="{{ $ukm->gambar_profil }}" alt="{{ $ukm->nama }}" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          @endif
          <div class="absolute inset-0 flex items-center justify-center">
            <div
              class="w-20 h-20 bg-white/90 dark:bg-gray-900/80 rounded-full backdrop-blur-sm flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
              <span class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">{{ $ukm->singkatan }}</span>
            </div>
          </div>
        </div>

        <div class="p-6 space-y-3">
          <h3
            class="text-lg font-bold text-gray-900 dark:text-gray-100 group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">
            {{ $ukm->nama }}
          </h3>
          <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-2">{{ Str::limit($ukm->deskripsi, 100) }}</p>
          <div class="flex items-center justify-between text-sm mt-4">
            <div class="text-gray-500 dark:text-gray-400 flex items-center gap-1">
              <i class="fa-solid fa-users"></i> {{ $ukm->jumlah_anggota }} Anggota
            </div>
            <a href="{{ route('ukm.show', $ukm->slug) }}"
              class="text-emerald-600 dark:text-emerald-400 hover:underline flex items-center gap-1 font-medium">
              Detail <i class="fa-solid fa-chevron-right text-xs"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12 flex justify-center">
      {{ $ukms->links() }}
    </div>
    @else
    <!-- Empty State -->
    <div class="text-center py-20 text-gray-700 dark:text-gray-300">
      <i class="fa-regular fa-face-sad-tear text-5xl mb-4 text-gray-400"></i>
      <h3 class="text-xl font-semibold mb-2">UKM tidak ditemukan</h3>
      <p class="mb-6">Coba ubah filter atau kata kunci pencarian</p>
      <a href="{{ route('ukm.index') }}"
        class="inline-block px-6 py-3 bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 transition-colors">
        Reset Filter
      </a>
    </div>
    @endif
  </div>
</section>

@include('layouts.footer')

@push('scripts')
<script>
  function filterKategori(kategori) {
    document.getElementById('kategoriInput').value = kategori;
    document.getElementById('filterForm').submit();
  }

  let searchTimeout;
  document.querySelector('input[name="search"]').addEventListener('input', function () {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => {
      document.getElementById('filterForm').submit();
    }, 500);
  });
</script>
@endpush

@endsection