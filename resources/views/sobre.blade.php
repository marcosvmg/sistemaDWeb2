@extends('template')
@section('titulo', 'Sobre Laravel')
@section('conteudo')
<div class="container mx-auto px-4 py-8 bg-zinc-900 mt-6 rounded-lg">
    <h1 class="text-3xl font-bold text-zinc-100 mb-6">Laravel Framework {{ $frm }}</h1>
    
    @if($frm == '(Laravel)')
        <div class="bg-zinc-800 border-l-4 border-red-500 p-4 mb-6">
            <h2 class="text-xl font-semibold text-red-400 mb-2">Pré-requisitos para Laravel</h2>
            <ol class="list-decimal pl-5 space-y-1">
                <li class="text-zinc-300">PHP ≥ 8.1</li>
                <li class="text-zinc-300">Composer (Gerenciador de dependências)</li>
                <li class="text-zinc-300">Extensões PHP: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON</li>
                <li class="text-zinc-300">Banco de dados (MySQL, PostgreSQL, SQLite)</li>
            </ol>
        </div>
    @else
        <p class="text-red-400 bg-zinc-800 p-3 rounded mb-6">Framework não especificado ou inválido</p>
    @endif

    <section class="mb-8">
        <h2 class="text-2xl font-bold text-zinc-100 mb-4">Principais Características</h2>
        <ol class="grid md:grid-cols-2 gap-4">
            @foreach($vtg as $d)
            <li class="bg-zinc-800 p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
                <h3 class="font-semibold text-lg text-red-400">{{ $d['titulo'] }}</h3>
                <p class="text-zinc-400 mt-1">{{ $d['descricao'] }}</p>
            </li>
            @endforeach
        </ol>
    </section>

    <section class="bg-zinc-800 p-6 rounded-xl">
        <h2 class="text-2xl font-bold text-zinc-100 mb-4">Por que usar Laravel?</h2>
        <ul class="space-y-3">
            <li class="flex items-start">
                <svg class="h-5 w-5 text-green-400 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="text-zinc-300">Eloquent ORM - O mais avançado ORM para PHP</span>
            </li>
            <li class="flex items-start">
                <svg class="h-5 w-5 text-green-400 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="text-zinc-300">Sistema de roteamento intuitivo</span>
            </li>
            <li class="flex items-start">
                <svg class="h-5 w-5 text-green-400 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="text-zinc-300">Blade - Sistema de templates elegante</span>
            </li>
        </ul>
    </section>
</div>
@endsection


