@extends('template')
@section('titulo', 'Sobre')
@section('conteudo')
<div class="flex flex-col mt-6">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-zinc-900 border-b border-zinc-800">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-zinc-100 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-zinc-100 px-6 py-4 text-left">
                                Nome
                            </th>
                            <th scope="col" class="text-sm font-medium text-zinc-100 px-6 py-4 text-left">
                                Email
                            </th>
                            <th scope="col" colspan="2" class="text-sm font-medium text-zinc-100 px-6 py-4 text-left">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $u)
                        <tr class="bg-zinc-800 border-b border-zinc-700">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-zinc-100">{{$u->id}}</td>
                            <td class="text-sm text-zinc-100 font-light px-6 py-4 whitespace-nowrap">
                                {{$u->nome}}
                            </td>
                            <td class="text-sm text-zinc-100 font-light px-6 py-4 whitespace-nowrap">
                                {{$u->email}}
                            </td>
                            <td class="text-sm text-zinc-100 font-light px-6 py-4 whitespace-nowrap">
                                <form action="/excluirusuario/{{$u->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Excluir" class="bg-red-500 hover:bg-red-700 text-zinc-100 px-3 py-1 rounded transition-colors cursor-pointer">
                                </form>
                            </td>
                            <td class="text-sm text-zinc-100 font-light px-6 py-4 whitespace-nowrap">
                                <a href="/frmeditusuario/{{$u->id}}" class="bg-red-400 hover:bg-red-600 text-zinc-900 px-3 py-1 rounded transition-colors">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection