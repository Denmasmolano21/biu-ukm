<!-- Navigation -->
<nav class="bg-white/80 dark:bg-gray-900 backdrop-blur-md sticky top-0 z-50 shadow-sm transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">
      <!-- Logo -->
      <a href="/" class="flex items-center space-x-3 group">
        <img src="{{ asset('logo-text-biu.png') }}" alt="Portal UKM Logo"
          class="h-10 w-auto transition-transform duration-300 group-hover:scale-105">
      </a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-6">
        <a href="/ukm"
          class="text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium transition-colors duration-200">Beranda</a>
        <a href="/tentangkami"
          class="text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium transition-colors duration-200">Tentang</a>
        <a href="/kontak"
          class="text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium transition-colors duration-200">Kontak</a>
        <a href="/daftarukm"
          class="bg-emerald-500 hover:bg-emerald-600 text-white px-6 py-2.5 rounded-lg font-medium transition-all duration-300 shadow-sm hover:shadow-md">Daftar
          UKM</a>
      </div>
      <button id="theme-toggle"
        class="hidden md:flex bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-yellow-300 p-3 rounded-full shadow-md hover:scale-110 transition-all duration-300 z-50"
        aria-label="Toggle dark mode">
        <i id="theme-icon" class="fa-solid fa-moon text-xl"></i>
      </button>

      <!-- Mobile + Dark Mode -->
      <div class="flex md:hidden items-center space-x-3">
        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn"
          class="p-2 text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 rounded-md transition-colors duration-200 focus:outline-none">
          <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu"
    class="hidden md:hidden bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-700 shadow-inner transition-all duration-300">
    <div class="px-4 py-4 space-y-3">
      <a href="/ukm"
        class="block text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium py-2 transition-colors duration-200">Beranda</a>
      <a href="/tentangkami"
        class="block text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium py-2 transition-colors duration-200">Tentang</a>
      <a href="/kontak"
        class="block text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium py-2 transition-colors duration-200">Kontak</a>
      <a href="/daftarukm"
        class="block w-full text-center bg-emerald-500 hover:bg-emerald-600 text-white px-6 py-2.5 rounded-lg font-medium mt-2 transition-all duration-300 shadow-sm hover:shadow-md">
        Daftar UKM
      </a>
    </div>
  </div>
</nav>

<!-- Scripts -->
<script>
  // Mobile Menu Toggle
  const menuBtn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  const closeIcon = document.getElementById('close-icon');

  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });
</script>