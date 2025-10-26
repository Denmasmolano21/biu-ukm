{{-- 404 Page --}}
@extends('layouts.app')

@section('title', '404 - Halaman Tidak Ditemukan')

@section('content')
<!-- Floating Orbs Background -->
<div class="fixed inset-0 overflow-hidden pointer-events-none">
  <div class="absolute top-20 left-10 w-72 h-72 bg-rose-500 opacity-20 rounded-full blur-3xl animate-float-slow"></div>
  <div class="absolute bottom-20 right-10 w-96 h-96 bg-amber-500 opacity-20 rounded-full blur-3xl animate-float-slower">
  </div>
  <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-pink-500 opacity-15 rounded-full blur-3xl animate-float"></div>
</div>

<div
  class="relative flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-rose-100 via-white to-amber-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 transition-all duration-700 overflow-hidden">

  <!-- Content -->
  <div class="text-center relative z-10" data-aos="fade-up" data-aos-duration="800">

    <!-- Animated Icon -->
    <div class="mb-8 relative">
      <!-- Glow Effect -->
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="w-32 h-32 bg-rose-500/30 rounded-full blur-2xl animate-pulse"></div>
      </div>

      <!-- Icon with Rotation Ring -->
      <div class="relative">
        <div class="absolute inset-0 border-4 border-rose-500/20 rounded-full animate-spin-slow"></div>
        <svg class="w-28 h-28 text-rose-600 dark:text-rose-400 mx-auto relative z-10 animate-bounce" fill="none"
          stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
    </div>

    <!-- 404 Number with Gradient -->
    <h1
      class="text-8xl md:text-9xl font-black mb-6 bg-gradient-to-r from-rose-600 via-pink-500 to-amber-600 dark:from-rose-400 dark:via-pink-400 dark:to-amber-400 bg-clip-text text-transparent animate-gradient-x"
      data-aos="zoom-in" data-aos-delay="200">
      404
    </h1>

    <!-- Title -->
    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4" data-aos="fade-up"
      data-aos-delay="300">
      Oops! Halaman Tidak Ditemukan
    </h2>

    <!-- Description -->
    <p class="text-gray-600 dark:text-gray-300 mb-8 max-w-md mx-auto px-4" data-aos="fade-up" data-aos-delay="400">
      Sepertinya halaman yang kamu cari sudah berpindah atau tidak ada. Mari kembali ke beranda! 🚀
    </p>

    <!-- Button with Glassmorphism -->
    <div data-aos="fade-up" data-aos-delay="500">
      <a href="{{ url('/') }}"
        class="group relative inline-flex items-center gap-2 px-8 py-4 rounded-2xl bg-gradient-to-r from-rose-500 to-pink-600 hover:from-rose-600 hover:to-pink-700 text-white font-bold text-lg shadow-2xl shadow-rose-500/50 transition-all duration-300 hover:scale-105 hover:shadow-rose-400/70 overflow-hidden">

        <!-- Shine Effect -->
        <div
          class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/30 to-transparent skew-x-12">
        </div>

        <i class="fa-solid fa-home relative z-10"></i>
        <span class="relative z-10">Kembali ke Beranda</span>
        <i
          class="fa-solid fa-arrow-right relative z-10 transition-transform duration-300 group-hover:translate-x-1"></i>
      </a>
    </div>

  </div>

  <!-- Decorative Elements -->
  <div
    class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-rose-100/50 to-transparent dark:from-gray-900/50 pointer-events-none">
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
</style>
@endsection