@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<form action="/addproduto" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" name="nome" id="nome"><br>
<input type="number" name="preco" id="preco"><br>
<input type="number" name="quantidade" id="quantidade"><br>
<input type="file" name="imagem" id="imagem" accept="imagem/+"><br>
<input type="submit" value="Cadastrar">
</form>
@endsection
