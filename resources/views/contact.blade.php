@extends('layouts.app')

@section('title', 'Kontak - Portal UKM Bina Insani University')

@section('content')
@include('layouts.navbar')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-emerald-500 to-teal-600 py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
      Hubungi Kami
    </h1>
    <p class="text-emerald-50 text-lg max-w-2xl mx-auto">
      Ada pertanyaan atau butuh informasi lebih lanjut? Jangan ragu untuk menghubungi kami
    </p>
  </div>
</section>

<!-- Contact Section -->
<section class="py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Contact Form -->
      <div class="lg:col-span-2">
        <div class="bg-white rounded-2xl shadow-lg p-8">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>
          <form class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" placeholder="Masukkan nama lengkap"
                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-emerald-500 focus:outline-none transition-colors">
              </div>
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                <input type="email" placeholder="email@example.com"
                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-emerald-500 focus:outline-none transition-colors">
              </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon</label>
                <input type="tel" placeholder="+62 812-3456-7890"
                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-emerald-500 focus:outline-none transition-colors">
              </div>
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                <select
                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-emerald-500 focus:outline-none transition-colors">
                  <option>Pilih subjek</option>
                  <option>Informasi UKM</option>
                  <option>Pendaftaran</option>
                  <option>Kerjasama</option>
                  <option>Lainnya</option>
                </select>
              </div>
            </div>

            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
              <textarea rows="6" placeholder="Tulis pesan Anda di sini..."
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-emerald-500 focus:outline-none transition-colors resize-none"></textarea>
            </div>

            <button type="submit"
              class="w-full bg-emerald-500 hover:bg-emerald-600 text-white px-8 py-4 rounded-lg font-semibold transition-colors shadow-lg hover:shadow-xl flex items-center justify-center">
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

      <!-- Contact Info -->
      <div class="space-y-6">
        <!-- Info Card -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
          <h3 class="text-lg font-bold text-gray-900 mb-4">Informasi Kontak</h3>
          <div class="space-y-4">
            <div class="flex items-start">
              <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-3">
                <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold text-gray-900">Alamat</div>
                <div class="text-sm text-gray-600">Jl. Raya Siliwangi No.6<br>Bekasi, Jawa Barat 17114</div>
              </div>
            </div>

            <div class="flex items-start">
              <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-3">
                <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                  </path>
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold text-gray-900">Telepon</div>
                <div class="text-sm text-gray-600">(021) 8890 4142<br>+62 812-3456-7890</div>
              </div>
            </div>

            <div class="flex items-start">
              <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-3">
                <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                  </path>
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold text-gray-900">Email</div>
                <div class="text-sm text-gray-600">bem@binainsani.ac.id<br>info@binainsani.ac.id</div>
              </div>
            </div>

            <div class="flex items-start">
              <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-3">
                <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold text-gray-900">Jam Operasional</div>
                <div class="text-sm text-gray-600">Senin - Jumat<br>08.00 - 16.00 WIB</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Social Media -->
        <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl shadow-lg p-6 text-white">
          <h3 class="text-lg font-bold mb-4">Media Sosial</h3>
          <p class="text-emerald-50 text-sm mb-4">Ikuti kami untuk update terbaru tentang kegiatan UKM</p>
          <div class="space-y-3">
            <a href="#" class="flex items-center hover:bg-white/10 p-3 rounded-lg transition-colors">
              <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-3">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold">Facebook</div>
                <div class="text-xs text-emerald-100">BEM Bina Insani</div>
              </div>
            </a>

            <a href="#" class="flex items-center hover:bg-white/10 p-3 rounded-lg transition-colors">
              <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-3">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold">Instagram</div>
                <div class="text-xs text-emerald-100">@bem_binainsani</div>
              </div>
            </a>

            <a href="#" class="flex items-center hover:bg-white/10 p-3 rounded-lg transition-colors">
              <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-3">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold">Twitter</div>
                <div class="text-xs text-emerald-100">@BEMBinaInsani</div>
              </div>
            </a>

            <a href="#" class="flex items-center hover:bg-white/10 p-3 rounded-lg transition-colors">
              <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-3">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path
                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold">YouTube</div>
                <div class="text-xs text-emerald-100">BEM Bina Insani</div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Lokasi Kami</h2>
      <p class="text-gray-600">Universitas Bina Insani, Bekasi</p>
    </div>
    <div class="bg-gray-200 rounded-2xl overflow-hidden shadow-lg" style="height: 400px;">
      <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-emerald-100 to-teal-100">
        <div class="text-center">
          <svg class="w-16 h-16 text-emerald-600 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
          <p class="text-gray-600 font-semibold">Jl. Raya Siliwangi No.6, Bekasi</p>
          <p class="text-sm text-gray-500 mt-2">Embed Google Maps di sini</p>
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.footer')
@endsection