@extends('template')
@section('titulo', 'Contato')
@section('conteudo')
<div class="flex flex-col items-center justify-center mt-6">
    <div class="bg-zinc-900 rounded-2xl shadow-lg p-8 w-full max-w-md border border-zinc-800">
        <h1 class="text-3xl font-bold text-red-400 mb-4 text-center">Entre em Contato</h1>
        <form class="space-y-4">
            <div>
                <label class="block text-zinc-200 mb-1" for="nome">Nome</label>
                <input class="w-full px-4 py-2 rounded bg-zinc-800 text-zinc-100 border border-zinc-700 focus:border-red-400 focus:outline-none" type="text" id="nome" placeholder="Seu nome">
            </div>
            <div>
                <label class="block text-zinc-200 mb-1" for="email">Email</label>
                <input class="w-full px-4 py-2 rounded bg-zinc-800 text-zinc-100 border border-zinc-700 focus:border-red-400 focus:outline-none" type="email" id="email" placeholder="seu@email.com">
            </div>
            <div>
                <label class="block text-zinc-200 mb-1" for="mensagem">Mensagem</label>
                <textarea class="w-full px-4 py-2 rounded bg-zinc-800 text-zinc-100 border border-zinc-700 focus:border-red-400 focus:outline-none" id="mensagem" rows="4" placeholder="Digite sua mensagem..."></textarea>
            </div>
            <button type="submit" class="w-full py-2 rounded bg-red-500 text-zinc-100 font-semibold hover:bg-red-600 transition-colors">Enviar</button>
        </form>
    </div>
</div>
@endsection