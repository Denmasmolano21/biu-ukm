@extends('layouts.app')

@section('title', 'Maintenance - Portal UKM Bina Insani University')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-emerald-100 via-white to-teal-100 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 transition-all duration-700">
  <div class="text-center animate-fadeIn">
    <div class="mb-8">
      <svg class="w-24 h-24 text-emerald-600 dark:text-emerald-400 mx-auto animate-spin-slow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 6v6l4 2m6 0a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </div>
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-gray-100 mb-4">Sedang Dalam Pemeliharaan</h1>
    <p class="text-gray-600 dark:text-gray-300 max-w-lg mx-auto mb-8">
      Kami sedang melakukan pembaruan untuk meningkatkan kualitas layanan. Silakan kembali beberapa saat lagi.
    </p>
  </div>
</div>

@endsection
