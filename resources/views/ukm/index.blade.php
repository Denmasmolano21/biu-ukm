@extends('layouts.app')

@section('title', 'Beranda UKM - Portal UKM BIU')

@section('content')

<!-- Navbar -->
@include('layouts.navbar')

<!-- Hero Section -->
<section
  class="bg-emerald-600 dark:bg-gray-900 py-24 relative overflow-hidden transition-colors duration-500">
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold text-white dark:text-emerald-300 drop-shadow-lg mb-4">
      Semua Unit Kegiatan Mahasiswa
    </h1>
    <p class="text-lg text-emerald-50 dark:text-emerald-200 max-w-2xl mx-auto">
      Temukan UKM yang sesuai dengan minat dan bakatmu ✨
    </p>
  </div>
</section>

<!-- Filter & Search Section -->
<section
  class="bg-white/80 dark:bg-gray-900 backdrop-blur-md border-b border-gray-200 dark:border-gray-700 sticky top-20 z-40 shadow-md transition-all duration-300 hover:shadow-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
    <form method="GET" action="{{ route('ukm.index') }}" id="filterForm">
      <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
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

        <!-- Filter Buttons -->
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

<!-- UKM List Section -->
<section id="ukm-section"
  class="py-14 bg-gradient-to-b from-gray-50 to-white dark:from-gray-900 dark:to-gray-800 transition-colors duration-500">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Results Info -->
    <div class="mb-8 flex flex-col sm:flex-row items-center justify-between gap-3">
      <p class="text-gray-600 dark:text-gray-300 text-sm md:text-base">
        Menampilkan <span class="font-semibold text-emerald-600">{{ $ukms->total() }} UKM</span>
      </p>
      <select name="sort" onchange="document.getElementById('filterForm').submit()"
        class="border border-gray-200 dark:border-gray-700 rounded-lg px-4 py-2 text-sm bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 focus:ring-2 focus:ring-emerald-300 dark:focus:ring-emerald-400 focus:outline-none transition-all">
        <option value="nama_asc" {{ request('sort')==='nama_asc' ? 'selected' : '' }}>Urutkan: A-Z</option>
        <option value="nama_desc" {{ request('sort')==='nama_desc' ? 'selected' : '' }}>Urutkan: Z-A</option>
        <option value="populer" {{ request('sort')==='populer' ? 'selected' : '' }}>Terpopuler</option>
        <option value="terbaru" {{ request('sort')==='terbaru' ? 'selected' : '' }}>Terbaru</option>
      </select>
    </div>

    @if($ukms->count() > 0)
    <!-- UKM Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($ukms as $ukm)
      <div
        class="group bg-white dark:bg-gray-800 rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden hover:-translate-y-1">
        <div
          class="h-44 bg-gradient-to-br from-{{ $ukm->kategori->warna }}-400 to-{{ $ukm->kategori->warna }}-600 dark:from-{{ $ukm->kategori->warna }}-800 dark:to-{{ $ukm->kategori->warna }}-900 flex items-center justify-center relative overflow-hidden">
          @if($ukm->gambar_profil)
          <img src="{{ $ukm->gambar_profil }}" alt="{{ $ukm->nama }}" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
          @endif
          <div
            class="w-20 h-20 bg-white/90 dark:bg-gray-900/80 backdrop-blur-md rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300 {{ $ukm->gambar_profil ? 'absolute' : '' }}">
            <span
              class="text-2xl font-bold text-{{ $ukm->kategori->warna }}-600 dark:text-{{ $ukm->kategori->warna }}-400">{{
              $ukm->singkatan }}</span>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-start justify-between mb-2">
            <div>
              <h3
                class="text-lg font-bold text-gray-900 dark:text-gray-100 group-hover:text-{{ $ukm->kategori->warna }}-600 dark:group-hover:text-{{ $ukm->kategori->warna }}-400 transition-colors">
                {{ $ukm->nama }}
              </h3>
              <span class="text-xs text-gray-500 dark:text-gray-400">{{ $ukm->kategori->nama }}</span>
            </div>
            <span
              class="bg-{{ $ukm->kategori->warna }}-100 dark:bg-{{ $ukm->kategori->warna }}-800 text-{{ $ukm->kategori->warna }}-700 dark:text-{{ $ukm->kategori->warna }}-300 text-xs px-2 py-1 rounded-full font-semibold">
              {{ $ukm->kategori->nama }}
            </span>
          </div>
          <p class="text-sm text-gray-600 dark:text-gray-300 mb-4 line-clamp-2">{{ Str::limit($ukm->deskripsi, 100) }}
          </p>
          <div class="flex items-center justify-between text-sm">
            <div class="flex items-center text-gray-500 dark:text-gray-400">
              <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                </path>
              </svg>
              {{ $ukm->jumlah_anggota }} Anggota
            </div>
            <a href="{{ route('ukm.show', $ukm->slug) }}"
              class="text-{{ $ukm->kategori->warna }}-600 dark:text-{{ $ukm->kategori->warna }}-400 hover:text-{{ $ukm->kategori->warna }}-700 dark:hover:text-{{ $ukm->kategori->warna }}-300 font-semibold flex items-center transition-colors">
              Detail
              <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
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
    <div class="text-center py-16 text-gray-700 dark:text-gray-300">
      <svg class="w-24 h-24 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
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
  // Filter Kategori
  function filterKategori(kategori) {
    document.getElementById('kategoriInput').value = kategori;
    document.getElementById('filterForm').submit();
  }

  // Auto submit on search
  let searchTimeout;
  document.querySelector('input[name="search"]').addEventListener('input', function() {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(() => {
      document.getElementById('filterForm').submit();
    }, 500);
  });

  // Add sort to form
  document.querySelector('select[name="sort"]').addEventListener('change', function() {
    const form = document.getElementById('filterForm');
    const sortInput = document.createElement('input');
    sortInput.type = 'hidden';
    sortInput.name = 'sort';
    sortInput.value = this.value;
    form.appendChild(sortInput);
    form.submit();
  });
</script>
@endpush
@endsection