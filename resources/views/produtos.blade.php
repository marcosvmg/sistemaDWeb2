@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<div class="container mx-auto mt-6 flex justify-center">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-6xl">
        @foreach ($prod as $p)
        <div class="flex flex-col items-center bg-zinc-900 rounded-3xl shadow-lg w-full max-w-xs mx-auto">
            <div class="px-6 py-8 sm:p-10 sm:pb-6 w-full">
                <div class="flex flex-col items-center w-full text-center">
                    <img src="{{$p['imagem']}}" alt="img" width="320" class="rounded-xl mb-2">
                    <h2 class="text-lg font-medium tracking-tighter text-zinc-100 lg:text-3xl">
                        {{$p['nome']}}
                    </h2>
                    <p class="mt-2 text-sm text-zinc-400">Produto disponível para compra.</p>
                </div>
                <div class="mt-6">
                    <p>
                        <span class="text-5xl font-light tracking-tight text-red-400">
                            R$ {{$p['preco']}}
                        </span>
                        <span class="text-base font-medium text-zinc-400"> /un </span>
                    </p>
                </div>
            </div>
            <div class="flex px-6 pb-8 sm:px-8 w-full">
                <a
                    aria-describedby="tier-company"
                    class="flex items-center justify-center w-full px-6 py-2.5 text-center text-zinc-100 duration-200 bg-red-500 border-2 border-red-500 rounded-full hover:bg-transparent hover:border-red-500 hover:text-red-400 focus:outline-none focus-visible:outline-red-500 text-sm focus-visible:ring-red-500 transition-colors"
                    href="#"
                >
                    Comprar
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
