
@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')

<form action="/atualizarusuario/{{$user->id}}" method="POST">
@csrf
@method('put')
<input type="text" name="nome" id="nome" value="{{$user->nome}}"><br>
<input type="email" name="email" id="email" value="{{$user->email}}"><br>
<input type="number" name="senha" id="senha" placeholder="deixe em branco pra senha atual"><br>
<input type="submit" value="Atualizar">
</form>

@endsection