<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;

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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal')->middleware(LogAcessoMiddleware::class);

Route::get('/sobrenos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('site.login');

Route::prefix('app')->group(function () {

    Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');

    Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produtos'])->name('app.produtos');

    Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');

});

Route::fallback(function () {
    echo 'A rota acessada não existe.<br>Clique para <a href="' . route('site.principal') . '"> Voltar a página principal</a>';
});

Route::get('teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste']);