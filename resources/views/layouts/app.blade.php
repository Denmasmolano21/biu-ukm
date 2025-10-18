<!doctype html>
<html lang="id">

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
  class="bg-[--color-bg-light] text-[--color-text-light] dark:bg-[--color-bg-dark] dark:text-[--color-text-dark] transition-colors duration-500 min-h-screen flex flex-col">

  <!-- Main Content -->
  <main class="flex-1">
    @yield('content')
  </main>

  <script src="{{ asset('aos.js') }}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById('theme-toggle');
    const icon = document.getElementById('theme-icon');
    const htmlEl = document.documentElement;

    if (!toggleBtn || !icon) return; // keamanan

    // Inisialisasi awal
    if (localStorage.theme === 'dark'
      || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
    ) {
      htmlEl.classList.add('dark');
      icon.classList.replace('fa-moon', 'fa-sun');
    } else {
      htmlEl.classList.remove('dark');
      icon.classList.replace('fa-sun', 'fa-moon');
    }

    // Event toggle
    toggleBtn.addEventListener('click', () => {
      const isDark = htmlEl.classList.toggle('dark');
      if (isDark) {
        icon.classList.replace('fa-moon', 'fa-sun');
        localStorage.theme = 'dark';
      } else {
        icon.classList.replace('fa-sun', 'fa-moon');
        localStorage.theme = 'light';
      }
    });
  });
  </script>
  <script>
    AOS.init({
    offset: 120,
    duration: 800,
    easing: 'ease-in-out',
    delay: 0,
    });
  </script>

</body>

</html>