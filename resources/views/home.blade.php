<<<<<<< HEAD





@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')

<div class="flex justify-center items-start flex-wrap gap-4 mt-6">
  @foreach($cards as $h)
  <div class="relative flex flex-col space-4 text-zinc-200 bg-zinc-900 shadow-md bg-clip-border rounded-xl w-96">
      <div class="relative mx-4 mt-4 overflow-hidden text-zinc-200 bg-zinc-900 bg-clip-border rounded-xl h-64 ">
          <img src="{{$h['imagem']}}" alt="card-image" class="object-cover w-full h-full" />
      </div>
      <div class="p-6">
          <div class="flex items-center justify-between mb-2">
              <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                  {{$h['nome']}}
              </p>
              <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                  {{$h['preco']}}
              </p>
          </div>
          <p class="block font-sans text-sm antialiased font-normal leading-normal text-zinc-200 opacity-75">
              {{$h['texto']}}
          </p>
      </div>
      <div class="p-6 pt-0">
          <button
              class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
              type="button">
              Add to Cart
          </button>
      </div>
  </div>
  @endforeach
</div>


@endsection
=======

    <style>
.container{
    display:flex;
}
        .card{
         padding:1rem;
         margin:0.6rem;
         display:flex;
         justify-content:center;
        }
    </style>
 
    


 @extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<div class="container">
@foreach ($cards as $h)

<div class="card">
<img class="card-img-top" src="{{$h['imagem']}}" alt="Card image" style="width:10rem">
    <div class="card-body">
        <h4 class="card-title"><p>{{$h['nome']}}</p></h4>
        <p class="card-text">{{$h['texto']}}</p>
       <h5 class="card-title"><p>{{$h['preco']}}</p></h5>
       <button class="btn btn-danger"> Saiba mais</button>
    </div>
  </div>
@endforeach
    </div>


@endsection


>>>>>>> 814161f31cb024661fb29cf301d5536652a0276c
