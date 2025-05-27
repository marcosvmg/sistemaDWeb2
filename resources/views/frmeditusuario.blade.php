@extends('template')
@section('titulo', 'Editar Usuário')
@section('conteudo')
<div class="flex flex-col justify-center mt-6 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-zinc-900 py-8 px-4 shadow sm:rounded-lg sm:px-10 border border-zinc-800">
      <form action="/atualizarusuario/{{$user->id}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-4">
          <label class="block text-sm font-medium text-zinc-200" for="nome">Nome:</label>
          <input class="appearance-none block w-full px-3 py-2 border border-zinc-700 rounded-md shadow-sm placeholder-zinc-500 bg-zinc-800 text-zinc-100 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" type="text" name="nome" id="nome" value="{{$user->nome}}" required>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium text-zinc-200" for="email">E-mail:</label>
          <input class="appearance-none block w-full px-3 py-2 border border-zinc-700 rounded-md shadow-sm placeholder-zinc-500 bg-zinc-800 text-zinc-100 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" type="email" name="email" id="email" value="{{$user->email}}" required>
        </div>
        <div class="mb-6">
          <label class="block text-sm font-medium text-zinc-200" for="senha">Senha:</label>
          <input class="appearance-none block w-full px-3 py-2 border border-zinc-700 rounded-md shadow-sm placeholder-zinc-500 bg-zinc-800 text-zinc-100 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" type="password" name="senha" id="senha" placeholder="Deixe em branco para manter a senha atual">
        </div>
        <button class="bg-red-500 group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-zinc-100 transition-colors duration-300 hover:bg-transparent hover:border-red-500 hover:text-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" type="submit" style="cursor:pointer;">
          Atualizar
        </button>
      </form>
    </div>
  </div>
</div>
@endsection