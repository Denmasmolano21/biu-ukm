<!doctype html>
<html lang="id" class="transition-colors duration-700">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Portal UKM - Bina Insani University')</title>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('logo-biu.png') }}" type="image/png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

  <!-- AOS Animation -->
  <link rel="stylesheet" href="{{ asset('aos.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

  <!-- Styles / Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
  class="bg-[--color-bg-light] text-[--color-text-light] dark:bg-[--color-bg-dark] dark:text-[--color-text-dark] min-h-screen flex flex-col transition-all duration-700 ease-in-out">

  <!-- Konten -->
  <main class="flex-1">
    @yield('content')
  </main>

  <!-- Script -->
  <script src="{{ asset('aos.js') }}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const htmlEl = document.documentElement;
      const body = document.body;

      const navbar = document.getElementById('navbar');
      const menuBtn = document.getElementById('mobile-menu-btn');
      const menu = document.getElementById('mobile-menu');
      const menuIcon = document.getElementById('menu-icon');
      const closeIcon = document.getElementById('close-icon');

      // Semua tombol & ikon dark mode (desktop + mobile)
      const toggleButtons = [document.getElementById('theme-toggle'), document.getElementById('theme-toggle-mobile')].filter(Boolean);
      const icons = [document.getElementById('theme-icon'), document.getElementById('theme-icon-mobile')].filter(Boolean);

      // === 🌗 Setup Tema Awal ===
      const savedTheme = localStorage.getItem('theme');
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
      const isDark = savedTheme === 'dark' || (!savedTheme && prefersDark);

      if (isDark) {
        htmlEl.classList.add('dark');
        icons.forEach(i => i?.classList.replace('fa-moon', 'fa-sun'));
      } else {
        htmlEl.classList.remove('dark');
        icons.forEach(i => i?.classList.replace('fa-sun', 'fa-moon'));
      }

      // === 🪄 Toggle Tema Sinkron ===
      toggleButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          const darkMode = htmlEl.classList.toggle('dark');
          localStorage.setItem('theme', darkMode ? 'dark' : 'light');
          body.classList.add('mode-switch', 'active');

          icons.forEach(i => {
            if (!i) return;
            i.classList.toggle('fa-sun', darkMode);
            i.classList.toggle('fa-moon', !darkMode);
          });

          // Transisi lembut shimmer/blur
          setTimeout(() => body.classList.remove('active'), 250);
          setTimeout(() => body.classList.remove('mode-switch'), 600);
        });
      });

      // === 🌿 Navbar Shadow + Background on Scroll ===
      if (navbar) {
        const baseClasses = ['transition-all', 'duration-500', 'backdrop-blur-md'];
        navbar.classList.add(...baseClasses);

        // Set initial background
        navbar.classList.add('bg-white/80', 'dark:bg-gray-900/60');

        window.addEventListener('scroll', () => {
          if (window.scrollY > 50) {
            navbar.classList.add(
              'shadow-lg',
              'bg-white/95',
              'dark:bg-gray-900/95',
              'border-b',
              'border-gray-200',
              'dark:border-gray-800'
            );
            navbar.classList.remove('bg-white/80', 'dark:bg-gray-900/60');
          } else {
            navbar.classList.remove(
              'shadow-lg',
              'bg-white/95',
              'dark:bg-gray-900/95',
              'border-b',
              'border-gray-200',
              'dark:border-gray-800'
            );
            navbar.classList.add('bg-white/80', 'dark:bg-gray-900/60');
          }
        });
      }

      // === 📱 Mobile Menu Toggle ===
      if (menuBtn && menu && menuIcon && closeIcon) {
        menuBtn.addEventListener('click', () => {
          menu.classList.toggle('hidden');
          menuIcon.classList.toggle('hidden');
          closeIcon.classList.toggle('hidden');
        });
      }

      // === 🎞️ AOS Init ===
      AOS.init({
        duration: 900,
        easing: 'ease-in-out-sine',
        delay: 100,
        once: true,
      });
    });
  </script>
</body>

</html>