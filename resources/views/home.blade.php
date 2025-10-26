@extends('layouts.app')

@section('title', 'Home - Portal UKM BIU')

@section('content')
<!-- Tombol Dark Mode -->
<button id="theme-toggle"
  class="fixed top-5 right-5 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white p-3 rounded-full shadow-md hover:scale-110 transition-all duration-300 z-50"
  data-aos="fade-down" data-aos-delay="100" data-aos-duration="600">
  <i id="theme-icon" class="fa-solid fa-moon text-xl"></i>
</button>

<!-- Hero Section -->
<section
  class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-bl from-emerald-200 via-teal-50 to-white dark:from-emerald-950 dark:via-gray-900 dark:to-gray-800 transition-all duration-500">

  <!-- Floating Orbs Background (Inside Section) -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div
      class="absolute top-20 left-10 w-72 h-72 bg-emerald-500 opacity-30 dark:opacity-20 rounded-full blur-3xl animate-float-slow">
    </div>
    <div
      class="absolute bottom-20 right-10 w-96 h-96 bg-teal-500 opacity-30 dark:opacity-20 rounded-full blur-3xl animate-float-slower">
    </div>
    <div
      class="absolute top-1/2 left-1/3 w-64 h-64 bg-lime-500 opacity-25 dark:opacity-15 rounded-full blur-3xl animate-float">
    </div>
  </div>

  <!-- Particle System (Inside Section) -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div id="particles-container" class="absolute inset-0"></div>
  </div>
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div
      class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 lg:gap-16 items-center transform md:scale-105 lg:scale-110 origin-center transition-transform duration-500 ease-out">

      <!-- Gambar dengan 3D Rotating Rings -->
      <div class="order-1 md:order-2 flex justify-center md:justify-end" data-aos="zoom-in-up" data-aos-delay="400"
        data-aos-duration="800">
        <div class="relative animate-float">
          <!-- 3D Rotating Rings -->
          <div class="absolute inset-0 border-4 border-emerald-500/30 rounded-full animate-spin-slow"></div>
          <div class="absolute inset-4 border-2 border-teal-500/20 rounded-full animate-spin-reverse"></div>

          <!-- Logo -->
          <img src="{{ asset('logo-biu.png') }}" alt="Logo Bina Insani University"
            class="w-40 sm:w-56 md:w-[26rem] lg:w-[30rem] xl:w-[34rem] h-auto object-contain relative z-10" />
        </div>
      </div>

      <!-- Teks -->
      <div class="order-2 md:order-1 space-y-6 text-center md:text-left">
        <span data-aos="fade-right" data-aos-delay="100" data-aos-duration="600"
          class="inline-flex items-center gap-2 bg-emerald-100 dark:bg-emerald-800/40 text-gray-700 dark:text-gray-200 px-4 sm:px-5 py-1.5 sm:py-2 rounded-full text-sm sm:text-base md:text-lg font-semibold shadow-sm relative">
          <span class="relative flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
          </span>
          Portal UKM Bina Insani
        </span>

        <h1 data-aos="fade-right" data-aos-delay="200" data-aos-duration="700" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight px-2 sm:px-0
          bg-gradient-to-r from-emerald-600 via-lime-300 to-emerald-600
          dark:from-emerald-300 dark:via-green-400 dark:to-emerald-300
          bg-[length:300%_100%] bg-clip-text text-transparent animate-shimmer">
          Tentukan
          <span class="bg-clip-text text-transparent">
            Unit Kegiatan Mahasiswa
          </span>
          Terbaikmu!
        </h1>

        <p data-aos="fade-right" data-aos-delay="300" data-aos-duration="800"
          class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 dark:text-gray-300 leading-relaxed max-w-xl mx-auto md:mx-0">
          Bergabunglah dengan berbagai UKM di <span class="font-semibold">Universitas Bina Insani</span> dan kembangkan
          potensi serta minatmu bersama mahasiswa lain.
        </p>

        <div class="flex flex-wrap justify-center md:justify-start gap-4 sm:gap-5 pt-2">
          <!-- Tombol Jelajahi -->
          <a href="/ukm" class="group relative overflow-hidden bg-gradient-to-r from-emerald-500 to-emerald-600 
                   text-white px-6 py-2 sm:px-8 sm:py-3 md:px-10 md:py-4 rounded-2xl font-semibold 
                   text-base sm:text-lg shadow-md transition-all duration-300 ease-in-out 
                   hover:scale-105 hover:shadow-emerald-400/40 hover:shadow-lg" data-aos="fade-up" data-aos-delay="400"
            data-aos-duration="900">
            <span class="relative z-10 flex items-center">
              Jelajahi
              <i class="fa-solid fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
            </span>
            <span
              class="absolute inset-0 bg-gradient-to-r from-emerald-400 via-emerald-500 to-emerald-700 opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-sm"></span>
          </a>

          <!-- Tombol Tentang Kami -->
          <a href="/tentangkami" class="group relative overflow-hidden bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 
                   text-gray-700 dark:text-gray-200 px-6 py-2 sm:px-8 sm:py-3 md:px-10 md:py-4 rounded-2xl 
                   font-semibold text-base sm:text-lg shadow-md transition-all duration-300 ease-in-out 
                   hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="800" data-aos-duration="900">
            <span class="relative z-10">Tentang Kami</span>
            <span
              class="absolute inset-0 bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 blur-sm">
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Custom Animations CSS -->
<style>
  /* Floating Orbs Animations */
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

  /* 3D Rotating Rings Animations */
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

  .animate-float {
    animation: float 6s ease-in-out infinite;
  }

  .animate-float-slow {
    animation: float-slow 20s ease-in-out infinite;
  }

  .animate-float-slower {
    animation: float-slower 25s ease-in-out infinite;
  }

  .animate-spin-slow {
    animation: spin-slow 15s linear infinite;
  }

  .animate-spin-reverse {
    animation: spin-reverse 20s linear infinite;
  }
</style>

<!-- Particle System JavaScript -->
<script>
  // Create floating particles
function createParticles() {
  const container = document.getElementById('particles-container');
  if (!container) return;
  
  const particleCount = 30;
  
  for (let i = 0; i < particleCount; i++) {
    const particle = document.createElement('div');
    particle.className = 'particle';
    particle.style.cssText = `
      position: absolute;
      width: ${Math.random() * 4 + 2}px;
      height: ${Math.random() * 4 + 2}px;
      background: ${Math.random() > 0.5 ? '#10b981' : '#14b8a6'};
      border-radius: 50%;
      left: ${Math.random() * 100}%;
      top: ${Math.random() * 100}%;
      opacity: ${Math.random() * 0.5 + 0.2};
      animation: particle-float ${Math.random() * 10 + 10}s linear infinite;
      animation-delay: ${Math.random() * 5}s;
    `;
    container.appendChild(particle);
  }
}

// Particle animation keyframes
const style = document.createElement('style');
style.textContent = `
  @keyframes particle-float {
    0% { transform: translate(0, 0) rotate(0deg); }
    25% { transform: translate(100px, -100px) rotate(90deg); }
    50% { transform: translate(200px, 0) rotate(180deg); }
    75% { transform: translate(100px, 100px) rotate(270deg); }
    100% { transform: translate(0, 0) rotate(360deg); }
  }
`;
document.head.appendChild(style);

// Initialize particles on load
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', createParticles);
} else {
  createParticles();
}
</script>

@endsection