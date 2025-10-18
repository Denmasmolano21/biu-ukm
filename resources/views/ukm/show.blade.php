@extends('layouts.app')

@section('title', $ukm->meta_title ?? $ukm->nama . ' - Portal UKM Bina Insani University')
@section('meta_description', $ukm->meta_description ?? Str::limit($ukm->deskripsi, 155))

@section('content')
@include('layouts.navbar')

<!-- Hero Section -->
<section
  class="bg-gradient-to-br from-{{ $ukm->kategori->warna }}-400 via-{{ $ukm->kategori->warna }}-500 to-{{ $ukm->kategori->warna }}-600 py-16 relative overflow-hidden">
  <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/soft-wallpaper.png')]">
  </div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Breadcrumb -->
    <nav class="mb-8 text-sm">
      <ol class="flex items-center space-x-2 text-white/80">
        <li><a href="/" class="hover:text-white transition-colors">Home</a></li>
        <li><span class="mx-2">/</span></li>
        <li><a href="{{ route('ukm.index') }}" class="hover:text-white transition-colors">UKM</a></li>
        <li><span class="mx-2">/</span></li>
        <li class="text-white font-medium">{{ $ukm->nama }}</li>
      </ol>
    </nav>

    <div class="flex flex-col md:flex-row items-center gap-8">
      <!-- Logo UKM -->
      <div class="flex-shrink-0">
        <div class="w-32 h-32 bg-white/95 backdrop-blur-md rounded-3xl flex items-center justify-center shadow-2xl">
          @if($ukm->gambar_profil)
          <img src="{{ Storage::url($ukm->gambar_profil) }}" alt="{{ $ukm->nama }}"
            class="w-full h-full object-cover rounded-3xl">
          @else
          <span class="text-5xl font-bold text-{{ $ukm->kategori->warna }}-600">{{ $ukm->singkatan }}</span>
          @endif
        </div>
      </div>

      <!-- Info UKM -->
      <div class="flex-1 text-center md:text-left">
        <div
          class="inline-block px-4 py-1 bg-white/20 backdrop-blur-md rounded-full text-white text-sm font-medium mb-3">
          {{ $ukm->kategori->nama }}
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">{{ $ukm->nama }}</h1>
        <p class="text-white/90 text-lg mb-6 max-w-3xl">{{ $ukm->deskripsi }}</p>

        <!-- Stats -->
        <div class="flex flex-wrap gap-6 justify-center md:justify-start">
          <div class="flex items-center text-white">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
              </path>
            </svg>
            <span class="text-2xl font-bold">{{ $ukm->jumlah_anggota }}</span>
            <span class="ml-2 text-white/80">Anggota</span>
          </div>
          @if($ukm->tahun_berdiri)
          <div class="flex items-center text-white">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
              <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span class="text-2xl font-bold">{{ $ukm->tahun_berdiri }}</span>
            <span class="ml-2 text-white/80">Berdiri</span>
          </div>
          @endif
          <div class="flex items-center text-white">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
              <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              <path
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
              </path>
            </svg>
            <span class="text-2xl font-bold">{{ number_format($ukm->views) }}</span>
            <span class="ml-2 text-white/80">Views</span>
          </div>
        </div>

        @if($ukm->is_open_recruitment)
        <div class="mt-6">
          <span
            class="inline-flex items-center px-6 py-3 bg-white text-{{ $ukm->kategori->warna }}-600 rounded-full font-bold shadow-lg animate-pulse">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z">
              </path>
            </svg>
            Sedang Buka Recruitment!
          </span>
        </div>
        @endif
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="py-12 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Main Column -->
      <div class="lg:col-span-2 space-y-8">

        <!-- Visi Misi -->
        @if($ukm->visi || $ukm->misi)
        <div class="bg-white rounded-2xl shadow-md p-8">
          @if($ukm->visi)
          <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
              <svg class="w-6 h-6 mr-2 text-{{ $ukm->kategori->warna }}-500" fill="currentColor" viewBox="0 0 24 24">
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                </path>
              </svg>
              Visi
            </h2>
            <p class="text-gray-700 leading-relaxed">{{ $ukm->visi }}</p>
          </div>
          @endif
          @if($ukm->misi)
          <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
              <svg class="w-6 h-6 mr-2 text-{{ $ukm->kategori->warna }}-500" fill="currentColor" viewBox="0 0 24 24">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Misi
            </h2>
            <p class="text-gray-700 leading-relaxed whitespace-pre-line">{{ $ukm->misi }}</p>
          </div>
          @endif
        </div>
        @endif

        <!-- Dokumentasi/Galeri -->
        @if($ukm->dokumentasi->count() > 0)
        <div class="bg-white rounded-2xl shadow-md p-8">
          <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
            <svg class="w-6 h-6 mr-2 text-{{ $ukm->kategori->warna }}-500" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
              </path>
            </svg>
            Galeri Kegiatan
          </h2>
          <div class="grid sm:grid-cols-2 gap-4">
            @foreach($ukm->dokumentasi as $dok)
            <div
              class="group relative rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300">
              <img src="{{ Storage::url($dok->gambar) }}" alt="{{ $dok->judul }}"
                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
              @if($dok->judul || $dok->tanggal_kegiatan)
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                  @if($dok->judul)
                  <h3 class="font-bold text-lg mb-1">{{ $dok->judul }}</h3>
                  @endif
                  @if($dok->tanggal_kegiatan)
                  <p class="text-sm text-white/90">{{ $dok->tanggal_kegiatan->format('d M Y') }}</p>
                  @endif
                </div>
              </div>
              @endif
            </div>
            @endforeach
          </div>
        </div>
        @endif

        <!-- Pengurus -->
        @if($ukm->pengurus->count() > 0)
        <div class="bg-white rounded-2xl shadow-md p-8">
          <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
            <svg class="w-6 h-6 mr-2 text-{{ $ukm->kategori->warna }}-500" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
              </path>
            </svg>
            Struktur Pengurus
          </h2>
          <div class="grid sm:grid-cols-2 gap-6">
            @foreach($ukm->pengurus as $pengurus)
            <div
              class="flex items-center space-x-4 p-4 rounded-xl border border-gray-200 hover:border-{{ $ukm->kategori->warna }}-300 hover:shadow-md transition-all">
              <div class="flex-shrink-0">
                @if($pengurus->foto)
                <img src="{{ Storage::url($pengurus->foto) }}" alt="{{ $pengurus->nama }}"
                  class="w-16 h-16 rounded-full object-cover">
                @else
                <div class="w-16 h-16 rounded-full bg-{{ $ukm->kategori->warna }}-100 flex items-center justify-center">
                  <span class="text-{{ $ukm->kategori->warna }}-600 font-bold text-xl">{{ substr($pengurus->nama, 0, 1)
                    }}</span>
                </div>
                @endif
              </div>
              <div>
                <h3 class="font-bold text-gray-900">{{ $pengurus->nama }}</h3>
                <p class="text-sm text-{{ $ukm->kategori->warna }}-600 font-medium">{{ $pengurus->jabatan }}</p>
                @if($pengurus->divisi)
                <p class="text-xs text-gray-500">{{ $pengurus->divisi }}</p>
                @endif
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif

      </div>

      <!-- Sidebar -->
      <div class="lg:col-span-1 space-y-6">

        <!-- Contact Info -->
        @if($ukm->kontak)
        <div class="bg-white rounded-2xl shadow-md p-6 sticky top-24">
          <h3 class="text-xl font-bold text-gray-900 mb-4">Hubungi Kami</h3>
          <div class="space-y-3">
            @if(isset($ukm->kontak['email']))
            <a href="mailto:{{ $ukm->kontak['email'] }}"
              class="flex items-center text-gray-700 hover:text-{{ $ukm->kategori->warna }}-600 transition-colors">
              <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
              </svg>
              {{ $ukm->kontak['email'] }}
            </a>
            @endif
            @if(isset($ukm->kontak['phone']))
            <a href="tel:{{ $ukm->kontak['phone'] }}"
              class="flex items-center text-gray-700 hover:text-{{ $ukm->kategori->warna }}-600 transition-colors">
              <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                </path>
              </svg>
              {{ $ukm->kontak['phone'] }}
            </a>
            @endif
            @if(isset($ukm->kontak['instagram']))
            <a href="https://instagram.com/{{ $ukm->kontak['instagram'] }}" target="_blank"
              class="flex items-center text-gray-700 hover:text-{{ $ukm->kategori->warna }}-600 transition-colors">
              <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                </path>
              </svg>
              @{{ $ukm->kontak['instagram'] }}
            </a>
            @endif
            @if(isset($ukm->kontak['whatsapp']))
            <a href="https://wa.me/{{ $ukm->kontak['whatsapp'] }}" target="_blank"
              class="flex items-center text-gray-700 hover:text-{{ $ukm->kategori->warna }}-600 transition-colors">
              <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z">
                </path>
              </svg>
              WhatsApp
            </a>
            @endif
          </div>
        </div>
        @endif

        <!-- Quick Info -->
        <div
          class="bg-gradient-to-br from-{{ $ukm->kategori->warna }}-50 to-{{ $ukm->kategori->warna }}-100 rounded-2xl p-6">
          <h3 class="text-lg font-bold text-gray-900 mb-4">Info Singkat</h3>
          <div class="space-y-3 text-sm">
            <div class="flex justify-between">
              <span class="text-gray-600">Ketua</span>
              <span class="font-semibold text-gray-900">{{ $ukm->nama_ketua }}</span>
            </div>
            @if($ukm->nama_wakil_ketua)
            <div class="flex justify-between">
              <span class="text-gray-600">Wakil Ketua</span>
              <span class="font-semibold text-gray-900">{{ $ukm->nama_wakil_ketua }}</span>
            </div>
            @endif
            @if($ukm->nama_sekretaris)
            <div class="flex justify-between">
              <span class="text-gray-600">Sekretaris</span>
              <span class="font-semibold text-gray-900">{{ $ukm->nama_sekretaris }}</span>
            </div>
            @endif
            @if($ukm->nama_bendahara)
            <div class="flex justify-between">
              <span class="text-gray-600">Bendahara</span>
              <span class="font-semibold text-gray-900">{{ $ukm->nama_bendahara }}</span>
            </div>
            @endif
          </div>
        </div>

        <!-- CTA Button -->
        @if($ukm->is_open_recruitment)
        <div class="bg-white rounded-2xl shadow-md p-6 text-center">
          <h3 class="text-lg font-bold text-gray-900 mb-2">Tertarik Bergabung?</h3>
          <p class="text-sm text-gray-600 mb-4">Recruitment sedang dibuka!</p>
          <button
            class="w-full px-6 py-3 bg-{{ $ukm->kategori->warna }}-500 text-white rounded-xl font-semibold hover:bg-{{ $ukm->kategori->warna }}-600 transition-colors shadow-md hover:shadow-lg">
            Daftar Sekarang
          </button>
        </div>
        @endif

      </div>
    </div>

    <!-- Related UKM -->
    @if($relatedUkms->count() > 0)
    <div class="mt-16">
      <div class="flex items-center justify-between mb-8">
        <h2 class="text-3xl font-bold text-gray-900">UKM Terkait</h2>
        <a href="{{ route('ukm.index', ['kategori' => $ukm->kategori->slug]) }}"
          class="text-{{ $ukm->kategori->warna }}-600 hover:text-{{ $ukm->kategori->warna }}-700 font-semibold flex items-center">
          Lihat Semua
          <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($relatedUkms as $related)
        <div
          class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden hover:-translate-y-1">
          <div
            class="h-32 bg-gradient-to-br from-{{ $related->kategori->warna }}-400 to-{{ $related->kategori->warna }}-600 flex items-center justify-center">
            <div
              class="w-16 h-16 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
              <span class="text-xl font-bold text-{{ $related->kategori->warna }}-600">{{ $related->singkatan }}</span>
            </div>
          </div>
          <div class="p-5">
            <h3
              class="text-lg font-bold text-gray-900 group-hover:text-{{ $related->kategori->warna }}-600 transition-colors mb-2">
              {{ $related->nama }}
            </h3>
            <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ Str::limit($related->deskripsi, 80) }}</p>
            <div class="flex items-center justify-between text-sm">
              <div class="flex items-center text-gray-500">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                  </path>
                </svg>
                {{ $related->jumlah_anggota }}
              </div>
              <a href="{{ route('ukm.show', $related->slug) }}"
                class="text-{{ $related->kategori->warna }}-600 hover:text-{{ $related->kategori->warna }}-700 font-semibold">
                Detail →
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif

  </div>
</section>

@include('layouts.footer')

@endsection