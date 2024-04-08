<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar-aluno', [AlunoController::class, 'index']);
Route::get('/salvar-aluno', [AlunoController::class, 'store']);
Route::get('/mostrar-alunos', [AlunoController::class, 'show'])->name('alunos.show');
Route::get('/editar-aluno/{id}', [AlunoController::class, 'edit'])->name('alunos.edit');
Route::put('/atualizar-aluno/{id}', [AlunoController::class, 'update'])->name('alunos.update');
Route::get('/deletar-aluno/{id}', [AlunoController::class, 'delete'])->name('aluno.delete');
