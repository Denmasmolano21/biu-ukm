@extends('layouts.app')

@section('title', 'Kontak - Portal UKM Bina Insani University')

@section('content')
@include('layouts.navbar')

<!-- 🌿 Hero Section -->
<section class="bg-gradient-to-br from-emerald-500 to-teal-600 dark:bg-gray-900 py-28 relative overflow-hidden transition-colors duration-500">
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 drop-shadow-lg">
      Hubungi Kami
    </h1>
    <p class="text-emerald-50 text-lg max-w-2xl mx-auto leading-relaxed">
      Ada pertanyaan atau butuh informasi lebih lanjut? Jangan ragu untuk menghubungi kami.
    </p>
  </div>
</section>

<!-- 💌 Contact Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-700">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-3 gap-10">

      <!-- Form -->
      <div class="lg:col-span-2">
        <div
          class="bg-white dark:bg-gray-800/70 rounded-2xl shadow-lg backdrop-blur-md p-8 border border-gray-100 dark:border-gray-700 transition-all duration-500 hover:shadow-xl">
          <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Kirim Pesan</h2>

          <form class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">Nama Lengkap</label>
                <input type="text" placeholder="Masukkan nama lengkap"
                  class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 dark:bg-gray-700/60 dark:text-gray-100 transition-all">
              </div>
              <div>
                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">Email</label>
                <input type="email" placeholder="email@example.com"
                  class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 dark:bg-gray-700/60 dark:text-gray-100 transition-all">
              </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">Nomor Telepon</label>
                <input type="tel" placeholder="+62 812-3456-7890"
                  class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 dark:bg-gray-700/60 dark:text-gray-100 transition-all">
              </div>
              <div>
                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">Subjek</label>
                <select
                  class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 dark:bg-gray-700/60 dark:text-gray-100 transition-all">
                  <option>Pilih subjek</option>
                  <option>Informasi UKM</option>
                  <option>Pendaftaran</option>
                  <option>Kerjasama</option>
                  <option>Lainnya</option>
                </select>
              </div>
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mb-2">Pesan</label>
              <textarea rows="6" placeholder="Tulis pesan Anda di sini..."
                class="w-full px-4 py-3 border-2 border-gray-200 dark:border-gray-600 rounded-lg focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/30 dark:bg-gray-700/60 dark:text-gray-100 resize-none transition-all"></textarea>
            </div>

            <button type="submit"
              class="w-full bg-emerald-500 hover:bg-emerald-600 text-white px-8 py-4 rounded-lg font-semibold shadow-md hover:shadow-emerald-500/30 transition-all flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                </path>
              </svg>
              Kirim Pesan
            </button>
          </form>
        </div>
      </div>

      <!-- Info -->
      <div class="space-y-6">
        <div
          class="bg-white dark:bg-gray-800/70 rounded-2xl shadow-lg backdrop-blur-md p-6 border border-gray-100 dark:border-gray-700">
          <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Informasi Kontak</h3>

          <div class="space-y-5">
            @php
            $infos = [
            ['icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0
            11-6 0 3 3 0 016 0z', 'title' => 'Alamat', 'desc' => 'Jl. Raya Siliwangi No.6, Bekasi, Jawa Barat 17114'],
            ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042
            0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3
            14.284 3 6V5z', 'title' => 'Telepon', 'desc' => '(021) 8890 4142 • +62 812-3456-7890'],
            ['icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0
            002 2z', 'title' => 'Email', 'desc' => 'bem@binainsani.ac.id • info@binainsani.ac.id'],
            ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Jam Operasional', 'desc' => 'Senin -
            Jumat • 08.00 - 16.00 WIB']
            ];
            @endphp

            @foreach ($infos as $item)
            <div class="flex items-start group">
              <div
                class="w-10 h-10 rounded-lg flex items-center justify-center mr-3 bg-emerald-100 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 group-hover:scale-105 transition-transform">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="{{ $item['icon'] }}"></path>
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold text-gray-900 dark:text-gray-100">{{ $item['title'] }}</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">{{ $item['desc'] }}</div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Media Sosial -->
        <div
          class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl shadow-lg p-6 text-white transition-transform duration-500 hover:scale-[1.02]">
          <h3 class="text-lg font-bold mb-4">Media Sosial</h3>
          <p class="text-emerald-50 text-sm mb-4">Ikuti kami untuk update terbaru kegiatan UKM.</p>

          <div class="space-y-3">
            @php
            $socials = [
            ['name' => 'Facebook', 'desc' => 'BEM Bina Insani', 'icon' => 'fa-brands fa-facebook-f'],
            ['name' => 'Instagram', 'desc' => '@bem_binainsani', 'icon' => 'fa-brands fa-instagram'],
            ['name' => 'Twitter', 'desc' => '@BEMBinaInsani', 'icon' => 'fa-brands fa-x-twitter'],
            ['name' => 'YouTube', 'desc' => 'BEM Bina Insani', 'icon' => 'fa-brands fa-youtube']
            ];
            @endphp

            @foreach ($socials as $soc)
            <a href="#" class="flex items-center hover:bg-white/10 p-3 rounded-lg transition-all group">
              <div
                class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-3 group-hover:bg-white/30 transition">
                <i class="{{ $soc['icon'] }}"></i>
              </div>
              <div>
                <div class="text-sm font-semibold">{{ $soc['name'] }}</div>
                <div class="text-xs text-emerald-100">{{ $soc['desc'] }}</div>
              </div>
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 🗺️ Map -->
<section class="py-20 bg-white dark:bg-gray-800 transition-colors duration-700">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Lokasi Kami</h2>
    <p class="text-gray-600 dark:text-gray-400 mb-10">Universitas Bina Insani, Bekasi</p>
    <div
      class="bg-gray-200 dark:bg-gray-700 rounded-2xl overflow-hidden shadow-lg relative group h-[400px] transition-all duration-500 hover:shadow-emerald-500/20">
      <div
        class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/40 dark:to-teal-800/40 transition-colors duration-700">
        <div class="text-center">
          <svg class="w-16 h-16 text-emerald-600 dark:text-emerald-400 mx-auto mb-4" fill="currentColor"
            viewBox="0 0 24 24">
            <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <p class="text-gray-600 dark:text-gray-300 font-semibold">Jl. Raya Siliwangi No.6, Bekasi</p>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Embed Google Maps di sini</p>
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.footer')
@endsection