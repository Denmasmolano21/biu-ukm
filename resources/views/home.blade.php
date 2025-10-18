@extends('layouts.app')

@section('title', 'Home - Portal UKM BIU')

@section('content')
<!-- Tombol Dark Mode -->
<button id="theme-toggle"
  class="fixed top-5 right-5 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white p-3 rounded-full shadow-md hover:scale-110 transition-all duration-300 z-50">
  <i id="theme-icon" class="fa-solid fa-moon text-xl"></i>
</button>

<!-- Hero Section -->
<section
  class="min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-bl from-emerald-200 via-teal-50 to-white dark:from-emerald-950 dark:via-gray-900 dark:to-gray-800 transition-all duration-500">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div
      class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 lg:gap-16 items-center transform md:scale-105 lg:scale-110 origin-center transition-transform duration-500 ease-out">

      <!-- Gambar -->
      <div class="order-1 md:order-2 flex justify-center md:justify-end" data-aos="zoom-in" data-aos-delay="200">
        <div class="animate-float">
          <img src="{{ asset('logo-biu.png') }}" alt="Logo Bina Insani University"
            class="w-40 sm:w-56 md:w-[26rem] lg:w-[30rem] xl:w-[34rem] h-auto object-contain" />
        </div>
      </div>

      <!-- Teks -->
      <div class="order-2 md:order-1 space-y-6 text-center md:text-left" data-aos="fade-right" data-aos-delay="100">
        <span
          class="inline-flex items-center gap-2 bg-emerald-100 dark:bg-emerald-800/40 text-gray-700 dark:text-gray-200 px-4 sm:px-5 py-1.5 sm:py-2 rounded-full text-sm sm:text-base md:text-lg font-semibold shadow-sm relative">
          <span class="relative flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
          </span>
          Portal UKM Bina Insani
        </span>

        <h1
          class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight px-2 sm:px-0 bg-gradient-to-r from-emerald-700 via-emerald-400 to-emerald-700 dark:from-emerald-300 dark:via-emerald-500 dark:to-emerald-300 bg-[length:300%_100%] bg-clip-text text-transparent animate-shimmer">
          Tentukan <span
            class="bg-clip-text text-transparent animate-shimmer dark:text-emerald-400">Unit
            Kegiatan Mahasiswa</span> Terbaikmu!
        </h1>

        <p
          class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 dark:text-gray-300 leading-relaxed max-w-xl mx-auto md:mx-0">
          Bergabunglah dengan berbagai UKM di <span class="font-semibold">Universitas Bina Insani</span> dan kembangkan
          potensi serta minatmu bersama mahasiswa lain.
        </p>

        <div class="flex flex-wrap justify-center md:justify-start gap-4 sm:gap-5 pt-2">
          <a href="/ukm"
            class="group bg-emerald-500 text-white px-6 py-2 sm:px-8 sm:py-3 md:px-10 md:py-4 rounded-2xl font-semibold text-base sm:text-lg shadow-md transition-all duration-300 ease-in-out hover:bg-emerald-600 hover:shadow-xl hover:scale-105">
            Jelajahi
            <i class="fa-solid fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
          </a>

          <a href="/tentangkami"
            class="group bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 px-6 py-2 sm:px-8 sm:py-3 md:px-10 md:py-4 rounded-2xl font-semibold text-base sm:text-lg shadow-md transition-all duration-300 ease-in-out hover:bg-gray-100 dark:hover:bg-gray-700 hover:shadow-xl hover:scale-105">
            Tentang Kami
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection