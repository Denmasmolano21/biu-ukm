@extends('layouts.app')

@section('title', '500 - Kesalahan Server')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-orange-100 via-white to-amber-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 transition-all duration-700">
  <div class="text-center animate-fadeIn">
    <div class="mb-8">
      <svg class="w-28 h-28 text-orange-600 dark:text-orange-400 mx-auto animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
      </svg>
    </div>
    <h1 class="text-5xl font-bold text-gray-800 dark:text-gray-100 mb-4">500</h1>
    <p class="text-gray-600 dark:text-gray-300 mb-6">Terjadi kesalahan pada server. Kami sedang memperbaikinya.</p>
    <a href="{{ url('/') }}" class="px-6 py-3 rounded-full bg-orange-600 hover:bg-orange-700 text-white font-semibold shadow-lg transition-all duration-300 hover:scale-105">
      Coba Lagi
    </a>
  </div>
</div>
@endsection
