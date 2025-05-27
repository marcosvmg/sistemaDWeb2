@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<h1>php fr {{$frm}}</h1>
<p>oi</p>
@if($frm == '(Laravel)')
    <ol>
        <li>Php</li>
        <li>Composer</li>
    </ol>
    @else
    <p>Nao foi</p>
    @endif
<h1>Caracteristicas </h1>
<ol>
    @foreach($vtg as $d)
    <li>{{}}</li>
    @endforeach

@endsection


