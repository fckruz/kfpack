@extends('frontend.layouts.main')

@section('title', 'Página Inicial')

@section('content')

<div class="min-h-screen bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Tailwind v4 funcionando! 🎉</h1>
        <p class="text-gray-600 mb-4">Esta é a nova versão do Tailwind CSS.</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors">
            Botão de teste
        </button>
    </div>
</div>

@endsection