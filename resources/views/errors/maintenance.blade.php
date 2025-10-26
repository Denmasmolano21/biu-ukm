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