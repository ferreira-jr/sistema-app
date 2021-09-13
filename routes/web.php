<?php

use App\Http\Controllers\OcorrenciaController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/ocorrencia',[OcorrenciaController::class, 'index' ])->name('ocorrencia.index');
Route::get('/admin/ocorrencia/create',[OcorrenciaController::class, 'create'])->name('ocorrencia.create');
Route::post('admin/ocorrencia/store', [OcorrenciaController::class,'store'])->name('ocorrencia.store');
Route::get('/admin/ocorrencia/{id}',[OcorrenciaController::class, 'show'])->name('ocorrencia.show');