<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Usuario;

class AppController extends Controller
{
 public function sobre() {
    $frame = "(Laravel)";
    $vantagem = [
    ['titulo' => 'Eloquent ORM', 'descricao' => 'ORM avançado com mapeamento objeto-relacional'],
    ['titulo' => 'Artisan', 'descricao' => 'Interface de linha de comando poderosa'],
    // 
];
    return view('sobre', [
    'frm' => '(Laravel)',
    'vtg' => $vantagem
]);
 }

 public function home () {
   $cards = [
      [
          'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
          'nome' => 'Nuvem',
          'texto' => 'Plataforma de infraestrutura totalmente gerenciada para implantação e hospedagem PHP.',
          'preco' => 'A partir de US$ 0,00/mês'
      ],
      [
          'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
          'nome' => 'Forja',
          'texto' => 'Gerenciamento de servidores para aplicativos no DigitalOcean, Vultr, Amazon, Hetzner e muito mais',
          'preco' => 'A partir de US$ 12,00/mês'
      ],
      [
          'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png',
          'nome' => 'Vigília Noturna',
          'texto' => 'Monitoramento e insights incomparáveis sobre o desempenho do seu aplicativo Laravel.',
          'preco' => 'Preços em breve'
      ],
      [
          'imagem' => 'https://static-00.iconduck.com/assets.00/laravel-icon-249x256-4gdjrenn.png',
          'nome' => 'Nova',
          'texto' => 'A maneira mais simples e rápida de criar painéis de administração prontos para produção.',
          'preco' => 'A partir de $ 99,00'
      ]
  ];
  return view('home', ['cards'=>$cards]);

 }

public function produtos () {
   $produtos = Produto::all();
   return view('produtos', ['prod'=>$produtos]);
}

public function contato () {
    return view('contato');
}

public function frmproduto () {
    return view('frmproduto');
}

public function addproduto (Request $request) {
$prod = new Produto();
$prod->nome = $request->nome;
$prod->preco = $request->preco;
$prod->quantidade = $request->quantidade;

if ($request->hasFile('imagem')) {
    $path = $request->file('imagem')->store('imagem', 'public');
    $prod->imagem = $path;
}
$prod->save();
return redirect('produtos');
}

public function frmusuario () {
    return view('frmusuario');
}

public function addusuario (Request $request) {
$usuario = new Usuario();
$usuario->nome = $request->nome;
$usuario->email = $request->email;
$usuario->senha = $request->senha;
$usuario->save();
return redirect('home');
}


public function usuarios () {
    $usuario = Usuario::all();
    return view('usuarios',['users'=>$usuario]);
}

public function frmeditusuario ($id) {
    $usuario = Usuario::findOrFail($id);
    return view('frmeditusuario',['user'=>$usuario]);
}

public function atualizarusuario (Request $request, $id) {
$usuario = Usuario::findOrFail($id);
$dados = [
    'nome' => $request->nome,
    'email' =>$request->email,
    
];

if(!empty($request->senha)){
    $dados['senha'] = $request->senha;
}

$usuario->update($dados);
return redirect("usuarios");
}

public function excluirusuario ($id) {

    $usuario = Usuario::findOrFail($id);
    $usuario->delete();
    return redirect("usuarios");
}


}
