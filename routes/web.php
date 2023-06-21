<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('user');

Route::get('/conteudo', [App\Http\Controllers\HomeController::class, 'conteudo'])->name('conteudo');

Route::get('/teste_de_conhecimento', [App\Http\Controllers\HomeController::class, 'teste_de_conhecimento']);

Route::get('/quiz', [App\Http\Controllers\HomeController::class, 'quiz']);

Route::get('/introducao_conhecimento', [App\Http\Controllers\HomeController::class, 'introducao'])->name('introducao');

Route::get('/dados_p', [App\Http\Controllers\HomeController::class, 'dados_p'])->name('dados_p');

Route::get('/dados_s', [App\Http\Controllers\HomeController::class, 'dados_s'])->name('dados_s');

Route::get('/dados_a', [App\Http\Controllers\HomeController::class, 'dados_a'])->name('dados_a');

Route::get('/agentes', [App\Http\Controllers\HomeController::class, 'agentes'])->name('agentes');

Route::get('/tratamento', [App\Http\Controllers\HomeController::class, 'tratamento'])->name('tratamento');

Route::get('/seguranca', [App\Http\Controllers\HomeController::class, 'seguranca'])->name('seguranca');

Route::get('/termos', [App\Http\Controllers\HomeController::class, 'termos'])->name('termos');

Route::get('/sancoes', [App\Http\Controllers\HomeController::class, 'sancoes'])->name('sancoes');

Route::get('/certificacao', [App\Http\Controllers\HomeController::class, 'certificacao'])->name('certificacao');

// Route::get('/home/customer', [App\Http\Controllers\HomeController::class, 'customer'])->middleware('user','fireauth');

Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::resource('/home/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('user','fireauth');

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);

Route::resource('/img', App\Http\Controllers\ImageController::class);



