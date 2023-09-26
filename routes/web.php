<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\InscricaoController;
use App\Http\Controllers\VagaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('candidatos', CandidatoController::class);
Route::resource('cidades', CidadeController::class);
Route::resource('empresas', EmpresaController::class);
Route::resource('vagas', VagaController::class);
Route::resource('inscricoes', InscricaoController::class);

require __DIR__.'/auth.php';
