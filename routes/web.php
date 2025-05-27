<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('template');
});

// Route::get('/sobre', function () {
//     return view('sobre');
// });
Route::get('/sobre', [AppController::class, 'sobre']);

Route::get('/home', [AppController::class, 'home']);

Route::get('/produtos', [AppController::class, 'produtos']);

Route::get('/contato', [AppController::class, 'contato']);

Route::get('/frmproduto', [AppController::class, 'frmproduto']);
Route::post('/addproduto', [AppController::class, 'addproduto']);
Route::get('/frmusuario', [AppController::class, 'frmusuario']);
Route::post('/addusuario', [AppController::class, 'addusuario']);

Route::get('/usuarios', [AppController::class, 'usuarios']);

Route::get('/frmeditusuario/{id}', [AppController::class, 'frmeditusuario']);

Route::put('/atualizarusuario/{id}', [AppController::class, 'atualizarusuario']);

Route::delete('/excluirusuario/{id}', [AppController::class, 'excluirusuario']);
?>