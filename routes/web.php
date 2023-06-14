<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\SiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/logout', function () {
    return view('info/main');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('layouts/main');
});

Route::get('/quemsomos', function() {
    return view('info/quemsomos' );
});

Route::get('/mainsite', function () {
    return view('info/main');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts/main');
    })->name('dashboard');
});


//---------------Produtos-----------

Route::group(['prefix' => 'produto'], function() {
    Route::get('/', [ProdutoController::class, 'index']);
    Route::get('/novo_produto',
                [ProdutoController::class, 'novo_produto']
              );
    Route::post('salvar_novo',
                [ProdutoController::class, 'salvar_novo']
            );
    Route::get('/excluir/{id}',
                [ProdutoController::class, 'excluir']
            );
    Route::get('/editar/{id}',
            [ProdutoController::class, 'editar']
        );
    Route::post('salvar_alteracao',
            [ProdutoController::class, 'salvar_alteracao']
        );

    Route::get('/pesquisa',
            [ProdutoController::class, 'pesquisa']
            );
});

//--------------Clientes-------------

Route::group(['prefix' => 'cliente'], function() {
    Route::get('/', [ClienteController::class, 'index']);
    Route::get('/novo_cliente',
                [ClienteController::class, 'novo_cliente']
              );
    Route::post('salvar_novo',
                [ClienteController::class, 'salvar_novo']
            );
    Route::get('/excluir/{id}',
                [ClienteController::class, 'excluir']
            );
    Route::get('/editar/{id}',
            [ClienteController::class, 'editar']
        );
    Route::post('salvar_alteracao',
            [ClienteController::class, 'salvar_alteracao']
        );

    Route::get('/pesquisa',
            [ClienteController::class, 'pesquisa']
            );
});

//--------------------Comentario---------------

Route::group(['prefix' => 'comentario'], function() {
    Route::get('/', [ComentarioController::class, 'index']);
    Route::get('/novo_comentario',
                [ComentarioController::class, 'novo_comentario']
              );
    Route::post('salvar_novo',
                [ComentarioController::class, 'salvar_novo']
            );
    Route::get('/excluir/{id}',
                [ComentarioController::class, 'excluir']
            );
    Route::get('/editar/{id}',
            [ComentarioController::class, 'editar']
        );
    Route::post('salvar_alteracao',
            [ComentarioController::class, 'salvar_alteracao']
        );

    Route::get('/pesquisa',
            [ComentarioController::class, 'pesquisa']
            );
});

//---------------------Contato-------------------

Route::group(['prefix' => 'contato'], function() {
    Route::get('/', [ContatoController::class, 'index']);
    
    Route::post('salvar_novo',
                [ContatoController::class, 'salvar_novo']
            );
    Route::get('/excluir/{id}',
                [ContatoController::class, 'excluir']
            );

    Route::get('/pesquisa',
            [ContatoController::class, 'pesquisa']
            );
});

//--------------------Site------------------

Route::group(['prefix' => ''], function() {
    Route::get('/pro', [SiteController::class, 'index']);
    Route::get('/clientes', [SiteController::class, 'clientes']);
    Route::get('/comentarios', [SiteController::class, 'comentarios']);
    Route::get('/novo_contato', [ContatoController::class, 'novo_contato']);

});