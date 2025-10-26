<!-- 🌿 Navigation -->
<nav id="navbar"
  class="fixed top-0 w-full z-50 bg-white/90 dark:bg-gray-900/70 backdrop-blur-md shadow-sm transition-all duration-500 border-b border-transparent dark:border-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">

      <!-- 🌱 Logo -->
      <a href="/" class="flex items-center space-x-3 group">
        <img src="{{ asset('logo-text-biu.png') }}" alt="Portal UKM Logo"
          class="h-10 w-auto transition-transform duration-300 group-hover:scale-105">
      </a>

      <!-- 🌤️ Desktop Menu -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="/ukm"
          class="relative text-gray-700 dark:text-gray-200 font-medium transition-all duration-200 hover:text-emerald-600 dark:hover:text-emerald-400 after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-[2px] after:bg-emerald-500 after:transition-all after:duration-300 hover:after:w-full">
          Beranda
        </a>
        <a href="/tentangkami"
          class="relative text-gray-700 dark:text-gray-200 font-medium transition-all duration-200 hover:text-emerald-600 dark:hover:text-emerald-400 after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-[2px] after:bg-emerald-500 after:transition-all after:duration-300 hover:after:w-full">
          Tentang
        </a>
        <a href="/kontak"
          class="relative text-gray-700 dark:text-gray-200 font-medium transition-all duration-200 hover:text-emerald-600 dark:hover:text-emerald-400 after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-[2px] after:bg-emerald-500 after:transition-all after:duration-300 hover:after:w-full">
          Kontak
        </a>

        <a href="/daftarukm"
          class="bg-gradient-to-r from-emerald-500 to-emerald-600 text-white px-6 py-2.5 rounded-lg font-semibold transition-all duration-300 shadow-md hover:shadow-emerald-400/30 hover:scale-105">
          Daftar UKM
        </a>

        <!-- 🌙 Dark Mode Toggle (Desktop) -->
        <button id="theme-toggle" aria-label="Toggle dark mode"
          class="bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-yellow-300 p-3 rounded-full shadow-md hover:scale-110 transition-all duration-300">
          <i id="theme-icon" class="fa-solid fa-moon text-xl"></i>
        </button>
      </div>

      <!-- 📱 Mobile Controls -->
      <div class="flex md:hidden items-center space-x-3">
        <button id="theme-toggle-mobile" aria-label="Toggle dark mode"
          class="bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-yellow-300 p-2.5 rounded-full shadow-sm hover:scale-110 transition-all duration-300">
          <i id="theme-icon-mobile" class="fa-solid fa-moon text-lg"></i>
        </button>

        <button id="mobile-menu-btn"
          class="p-2 text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 rounded-md transition duration-200">
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

  <!-- 📖 Mobile Menu -->
  <div id="mobile-menu"
    class="hidden md:hidden bg-white/95 dark:bg-gray-900/95 backdrop-blur-md border-t border-gray-100 dark:border-gray-700 shadow-inner transition-all duration-500">
    <div class="px-4 py-4 space-y-3 animate-fadeIn">
      <a href="/ukm"
        class="block text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium py-2">Beranda</a>
      <a href="/tentangkami"
        class="block text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium py-2">Tentang</a>
      <a href="/kontak"
        class="block text-gray-700 dark:text-gray-200 hover:text-emerald-600 dark:hover:text-emerald-400 font-medium py-2">Kontak</a>
      <a href="/daftarukm"
        class="block w-full text-center bg-gradient-to-r from-emerald-500 to-emerald-600 text-white px-6 py-2.5 rounded-lg font-medium mt-2 shadow-md hover:shadow-emerald-400/30 hover:scale-[1.02]">Daftar
        UKM</a>
    </div>
  </div>
</nav>