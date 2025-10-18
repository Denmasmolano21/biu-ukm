@extends('layouts.app')

@section('title', 'Kontak - Portal UKM Bina Insani University')

@section('content')
<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Pertanyaan Umum</h2>
      <p class="text-gray-600">Temukan jawaban untuk pertanyaan yang sering diajukan</p>
    </div>

    <div class="space-y-4">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
          <span class="font-semibold text-gray-900">Bagaimana cara mendaftar UKM?</span>
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="px-6 pb-4 text-gray-600 text-sm">
          Anda dapat mendaftar UKM melalui portal ini dengan mengklik tombol "Daftar Sekarang" pada halaman detail UKM
          yang Anda minati. Isi formulir pendaftaran dan tunggu konfirmasi dari pengurus UKM.
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
          <span class="font-semibold text-gray-900">Apakah ada biaya untuk bergabung dengan UKM?</span>
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
          <span class="font-semibold text-gray-900">Berapa banyak UKM yang bisa saya ikuti?</span>
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
      </div>

      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
          <span class="font-semibold text-gray-900">Kapan waktu pendaftaran UKM dibuka?</span>
          <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>
@endsection