@extends('layouts.app')

@section('title', '404 - Halaman Tidak Ditemukan')

@section('content')
<div
  class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-rose-100 via-white to-amber-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 transition-all duration-700">
  <div class="text-center animate-fadeIn">
    <div class="mb-8">
      <svg class="w-28 h-28 text-rose-600 dark:text-rose-400 mx-auto animate-bounce" fill="none" stroke="currentColor"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </div>
    <h1 class="text-5xl font-bold text-gray-800 dark:text-gray-100 mb-4">404</h1>
    <p class="text-gray-600 dark:text-gray-300 mb-6">Halaman yang kamu cari tidak ditemukan.</p>
    <a href="{{ url('/') }}"
      class="px-6 py-3 rounded-full bg-rose-600 hover:bg-rose-700 text-white font-semibold shadow-lg transition-all duration-300 hover:scale-105">
      Kembali ke Beranda
    </a>
  </div>
</div>
@endsection