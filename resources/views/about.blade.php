@extends('layouts.app')

{{-- @section('title', 'Tentang - Portal UKM Bina Insani University')

@section('content')
@include('layouts.navbar')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-emerald-500 to-teal-600 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
      Tentang Portal UKM
    </h1>
    <p class="text-emerald-50 text-lg max-w-2xl mx-auto">
      Pusat informasi dan koordinasi seluruh Unit Kegiatan Mahasiswa Universitas Bina Insani
    </p>
  </div>
</section>

<!-- About Content -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div>
        <div class="inline-block bg-emerald-100 text-emerald-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">
          Tentang Kami
        </div>
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Portal UKM Bina Insani University</h2>
        <p class="text-gray-600 mb-4">
          Portal UKM adalah platform digital yang dikembangkan untuk memfasilitasi dan mengkoordinasikan seluruh
          kegiatan Unit Kegiatan Mahasiswa di Universitas Bina Insani. Kami berkomitmen untuk menjadi jembatan antara
          mahasiswa dengan berbagai UKM yang ada di kampus.
        </p>
        <p class="text-gray-600 mb-4">
          Melalui portal ini, mahasiswa dapat dengan mudah menemukan informasi lengkap tentang UKM, mulai dari profil,
          kegiatan, hingga cara bergabung. Kami percaya bahwa kegiatan kemahasiswaan adalah bagian penting dari
          pengembangan soft skill dan karakter mahasiswa.
        </p>
        <p class="text-gray-600">
          Bergabunglah dengan UKM pilihan Anda dan kembangkan potensi diri bersama ribuan mahasiswa lain di Universitas
          Bina Insani!
        </p>
      </div>
      <div class="relative">
        <div class="aspect-square bg-gradient-to-br from-emerald-400 to-teal-500 rounded-3xl shadow-2xl"></div>
        <div
          class="absolute -bottom-6 -left-6 w-32 h-32 bg-white rounded-2xl shadow-xl flex items-center justify-center">
          <div class="text-center">
            <div class="text-3xl font-bold text-emerald-600">25+</div>
            <div class="text-xs text-gray-600">UKM Aktif</div>
          </div>
        </div>
        <div class="absolute -top-6 -right-6 w-32 h-32 bg-white rounded-2xl shadow-xl flex items-center justify-center">
          <div class="text-center">
            <div class="text-3xl font-bold text-teal-600">500+</div>
            <div class="text-xs text-gray-600">Mahasiswa</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BEM Section -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Badan Eksekutif Mahasiswa</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        BEM Universitas Bina Insani adalah organisasi kemahasiswaan tertinggi yang mengkoordinasikan seluruh kegiatan
        mahasiswa
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
      <!-- Vision -->
      <div class="bg-white rounded-2xl shadow-lg p-8">
        <div class="w-16 h-16 bg-emerald-500 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
            </path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
            </path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi BEM</h3>
        <p class="text-gray-600">
          Mewujudkan mahasiswa Bina Insani yang kreatif, inovatif, dan berprestasi dengan menjunjung tinggi nilai-nilai
          akademik dan kemahasiswaan yang berintegritas.
        </p>
      </div>

      <!-- Mission -->
      <div class="bg-white rounded-2xl shadow-lg p-8">
        <div class="w-16 h-16 bg-teal-500 rounded-xl flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
            </path>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi BEM</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <span class="text-emerald-500 mr-2 mt-1">•</span>
            Mengembangkan potensi mahasiswa melalui berbagai kegiatan
          </li>
          <li class="flex items-start">
            <span class="text-emerald-500 mr-2 mt-1">•</span>
            Menjadi wadah aspirasi dan kreativitas mahasiswa
          </li>
          <li class="flex items-start">
            <span class="text-emerald-500 mr-2 mt-1">•</span>
            Membangun jejaring dan kerjasama antar UKM
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Structure Section -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Struktur Organisasi BEM</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Kepengurusan BEM Universitas Bina Insani periode 2024/2025
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <!-- Ketua BEM -->
      <div
        class="bg-gradient-to-br from-emerald-50 to-white rounded-xl shadow-lg p-6 text-center border-2 border-emerald-100">
        <div
          class="w-24 h-24 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-2xl shadow-lg">
          RP
        </div>
        <div class="text-sm text-emerald-600 font-semibold mb-1">Ketua BEM</div>
        <h3 class="text-xl font-bold text-gray-900 mb-1">Rudi Prasetyo</h3>
        <p class="text-sm text-gray-600">Teknik Informatika</p>
      </div>

      <!-- Wakil Ketua -->
      <div
        class="bg-gradient-to-br from-teal-50 to-white rounded-xl shadow-lg p-6 text-center border-2 border-teal-100">
        <div
          class="w-24 h-24 bg-gradient-to-br from-teal-500 to-teal-600 rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-2xl shadow-lg">
          NF
        </div>
        <div class="text-sm text-teal-600 font-semibold mb-1">Wakil Ketua</div>
        <h3 class="text-xl font-bold text-gray-900 mb-1">Nina Febriani</h3>
        <p class="text-sm text-gray-600">Sistem Informasi</p>
      </div>

      <!-- Sekretaris -->
      <div
        class="bg-gradient-to-br from-emerald-50 to-white rounded-xl shadow-lg p-6 text-center border-2 border-emerald-100">
        <div
          class="w-24 h-24 bg-gradient-to-br from-emerald-400 to-teal-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white font-bold text-2xl shadow-lg">
          LM
        </div>
        <div class="text-sm text-emerald-600 font-semibold mb-1">Sekretaris</div>
        <h3 class="text-xl font-bold text-gray-900 mb-1">Linda Mariana</h3>
        <p class="text-sm text-gray-600">Manajemen</p>
      </div>
    </div>

    <div class="grid md:grid-cols-4 gap-6 mt-6">
      <!-- Departemen -->
      <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-3 flex items-center justify-center">
          <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
            </path>
          </svg>
        </div>
        <div class="text-sm text-gray-500 mb-1">Dept. Internal</div>
        <p class="font-semibold text-gray-900">Ahmad Fauzi</p>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-3 flex items-center justify-center">
          <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
            </path>
          </svg>
        </div>
        <div class="text-sm text-gray-500 mb-1">Dept. Eksternal</div>
        <p class="font-semibold text-gray-900">Dewi Safitri</p>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-3 flex items-center justify-center">
          <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
            </path>
          </svg>
        </div>
        <div class="text-sm text-gray-500 mb-1">Dept. PSDM</div>
        <p class="font-semibold text-gray-900">Budi Santoso</p>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-gray-200 rounded-full mx-auto mb-3 flex items-center justify-center">
          <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
            </path>
          </svg>
        </div>
        <div class="text-sm text-gray-500 mb-1">Dept. Kominfo</div>
        <p class="font-semibold text-gray-900">Rina Wati</p>
      </div>
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="py-16 bg-gradient-to-br from-emerald-50 to-teal-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Nilai-Nilai Kami</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Prinsip yang menjadi landasan dalam setiap kegiatan kemahasiswaan
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-emerald-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Kolaboratif</h3>
        <p class="text-sm text-gray-600">Bekerja sama untuk mencapai tujuan bersama</p>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-teal-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Inovatif</h3>
        <p class="text-sm text-gray-600">Menciptakan ide-ide kreatif dan solutif</p>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-emerald-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Integritas</h3>
        <p class="text-sm text-gray-600">Menjunjung tinggi kejujuran dan etika</p>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
        <div class="w-16 h-16 bg-teal-100 rounded-full mx-auto mb-4 flex items-center justify-center">
          <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Berprestasi</h3>
        <p class="text-sm text-gray-600">Selalu berusaha memberikan yang terbaik</p>
      </div>
    </div>
  </div>
</section>
@include('layouts.footer')
@endsection --}}


{{-- Maintenance Page --}}
@extends('layouts.app')

@section('title', 'Maintenance - Portal UKM Bina Insani University')

@section('content')
<!-- Floating Orbs Background -->
<div class="fixed inset-0 overflow-hidden pointer-events-none">
  <div class="absolute top-20 left-10 w-72 h-72 bg-emerald-500 opacity-20 rounded-full blur-3xl animate-float-slow">
  </div>
  <div class="absolute bottom-20 right-10 w-96 h-96 bg-teal-500 opacity-20 rounded-full blur-3xl animate-float-slower">
  </div>
  <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-cyan-500 opacity-15 rounded-full blur-3xl animate-float"></div>
</div>

<div
  class="relative flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-emerald-100 via-white to-teal-100 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 transition-all duration-700 overflow-hidden">

  <!-- Content -->
  <div class="text-center relative z-10 max-w-3xl mx-auto px-4" data-aos="fade-up" data-aos-duration="800">

    <!-- Animated Tools Icon -->
    <div class="mb-8 relative">
      <!-- Glow Effect -->
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-32 h-32 bg-emerald-500/30 rounded-full blur-2xl animate-pulse"></div>
      </div>

      <!-- Icon Group with Animations -->
      <div class="relative inline-flex items-center justify-center">
        <!-- Rotating Ring -->
        <div class="absolute inset-0 border-4 border-emerald-500/20 rounded-full animate-spin-slow"></div>

        <!-- Main Icon -->
        <div class="relative bg-white dark:bg-slate-800 p-6 rounded-full shadow-2xl">
          <svg class="w-20 h-20 text-emerald-600 dark:text-emerald-400 animate-pulse-slow" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>

        <!-- Orbiting Dots -->
        <div class="absolute inset-0 animate-spin-reverse">
          <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-3 h-3 bg-emerald-500 rounded-full shadow-lg shadow-emerald-500/50">
          </div>
          <div
            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3 h-3 bg-teal-500 rounded-full shadow-lg shadow-teal-500/50">
          </div>
        </div>
      </div>
    </div>

    <!-- Title with Gradient -->
    <h1
      class="text-4xl md:text-5xl lg:text-6xl font-black mb-6 bg-gradient-to-r from-emerald-600 via-teal-500 to-cyan-600 dark:from-emerald-400 dark:via-teal-300 dark:to-cyan-400 bg-clip-text text-transparent animate-gradient-x"
      data-aos="zoom-in" data-aos-delay="200">
      Sedang Dalam Pemeliharaan
    </h1>

    <!-- Description Card -->
    <div
      class="backdrop-blur-xl bg-white/50 dark:bg-slate-800/50 border border-white/20 dark:border-slate-700/50 rounded-3xl p-8 shadow-2xl mb-8"
      data-aos="fade-up" data-aos-delay="300">
      <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed mb-6">
        Kami sedang melakukan <span class="font-bold text-emerald-600 dark:text-emerald-400">pembaruan sistem</span>
        untuk meningkatkan kualitas layanan dan pengalaman Anda.
      </p>

      <!-- Progress Bar -->
      <div class="w-full bg-gray-200 dark:bg-slate-700 rounded-full h-3 overflow-hidden mb-4">
        <div
          class="bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500 h-full rounded-full animate-progress shadow-lg shadow-emerald-500/50"
          style="width: 65%;"></div>
      </div>

      <p class="text-sm text-gray-500 dark:text-gray-400">
        Estimasi waktu: <span class="font-semibold text-emerald-600 dark:text-emerald-400">2-3 jam</span>
      </p>
    </div>

    <!-- Info Cards -->
    <div class="grid md:grid-cols-3 gap-4 mb-8" data-aos="fade-up" data-aos-delay="400">
      <!-- Card 1 -->
      <div
        class="backdrop-blur-xl bg-white/30 dark:bg-slate-800/30 border border-white/20 dark:border-slate-700/30 rounded-2xl p-6 hover:scale-105 transition-all duration-300 group">
        <div
          class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:rotate-12 transition-transform duration-300">
          <i class="fa-solid fa-tools text-2xl text-emerald-600 dark:text-emerald-400"></i>
        </div>
        <h3 class="font-bold text-gray-800 dark:text-gray-200 mb-2">Peningkatan Fitur</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">Menambahkan fitur baru yang lebih canggih</p>
      </div>

      <!-- Card 2 -->
      <div
        class="backdrop-blur-xl bg-white/30 dark:bg-slate-800/30 border border-white/20 dark:border-slate-700/30 rounded-2xl p-6 hover:scale-105 transition-all duration-300 group">
        <div
          class="w-12 h-12 bg-teal-500/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:rotate-12 transition-transform duration-300">
          <i class="fa-solid fa-shield-alt text-2xl text-teal-600 dark:text-teal-400"></i>
        </div>
        <h3 class="font-bold text-gray-800 dark:text-gray-200 mb-2">Keamanan</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">Meningkatkan sistem keamanan</p>
      </div>

      <!-- Card 3 -->
      <div
        class="backdrop-blur-xl bg-white/30 dark:bg-slate-800/30 border border-white/20 dark:border-slate-700/30 rounded-2xl p-6 hover:scale-105 transition-all duration-300 group">
        <div
          class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mx-auto mb-3 group-hover:rotate-12 transition-transform duration-300">
          <i class="fa-solid fa-rocket text-2xl text-cyan-600 dark:text-cyan-400"></i>
        </div>
        <h3 class="font-bold text-gray-800 dark:text-gray-200 mb-2">Performa</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">Optimasi kecepatan loading</p>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="backdrop-blur-xl bg-emerald-500/10 dark:bg-emerald-500/5 border border-emerald-500/30 rounded-2xl p-6"
      data-aos="fade-up" data-aos-delay="500">
      <p class="text-gray-700 dark:text-gray-300 mb-3">
        <i class="fa-solid fa-info-circle text-emerald-600 dark:text-emerald-400 mr-2"></i>
        Butuh informasi lebih lanjut?
      </p>
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="mailto:info@binainsani.ac.id"
          class="inline-flex items-center gap-2 text-emerald-600 dark:text-emerald-400 hover:text-emerald-700 dark:hover:text-emerald-300 transition-colors duration-300 font-semibold">
          <i class="fa-solid fa-envelope"></i>
          info@binainsani.ac.id
        </a>
        <span class="text-gray-400">•</span>
        <a href="tel:+622188987733"
          class="inline-flex items-center gap-2 text-emerald-600 dark:text-emerald-400 hover:text-emerald-700 dark:hover:text-emerald-300 transition-colors duration-300 font-semibold">
          <i class="fa-solid fa-phone"></i>
          (021) 8898-7733
        </a>
      </div>
    </div>
  </div>

  <!-- Decorative Bottom Gradient -->
  <div
    class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-emerald-100/50 to-transparent dark:from-slate-900/50 pointer-events-none">
  </div>
</div>

<!-- Custom Animations -->
<style>
  @keyframes float {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-20px);
    }
  }

  @keyframes float-slow {

    0%,
    100% {
      transform: translate(0, 0);
    }

    50% {
      transform: translate(30px, -30px);
    }
  }

  @keyframes float-slower {

    0%,
    100% {
      transform: translate(0, 0);
    }

    50% {
      transform: translate(-30px, 30px);
    }
  }

  @keyframes gradient-x {

    0%,
    100% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }
  }

  @keyframes spin-slow {
    from {
      transform: rotate(0deg);
    }

    to {
      transform: rotate(360deg);
    }
  }

  @keyframes spin-reverse {
    from {
      transform: rotate(360deg);
    }

    to {
      transform: rotate(0deg);
    }
  }

  @keyframes pulse-slow {

    0%,
    100% {
      opacity: 1;
    }

    50% {
      opacity: 0.5;
    }
  }

  @keyframes progress {
    0% {
      transform: translateX(-100%);
    }

    100% {
      transform: translateX(400%);
    }
  }

  .animate-float {
    animation: float 6s ease-in-out infinite;
  }

  .animate-float-slow {
    animation: float-slow 20s ease-in-out infinite;
  }

  .animate-float-slower {
    animation: float-slower 25s ease-in-out infinite;
  }

  .animate-gradient-x {
    animation: gradient-x 8s ease infinite;
    background-size: 200% auto;
  }

  .animate-spin-slow {
    animation: spin-slow 15s linear infinite;
  }

  .animate-spin-reverse {
    animation: spin-reverse 20s linear infinite;
  }

  .animate-pulse-slow {
    animation: pulse-slow 3s ease-in-out infinite;
  }

  .animate-progress {
    animation: progress 2s ease-in-out infinite;
  }
</style>
@endsection