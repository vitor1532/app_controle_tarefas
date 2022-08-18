<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;

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
Route::get('tarefa/export/{extension}', 'App\Http\Controllers\TarefaController@export')
    ->name('tarefa.export');
Route::get('tarefa/exportDOM', 'App\Http\Controllers\TarefaController@exportDOM')
    ->name('tarefa.exportDOM');

//tarefa.exportCSV
Route::get('/', function () {
    return view('bem-vindo');
});

Auth::routes(['verify' => true]);

Route::resource('tarefa', 'App\Http\Controllers\TarefaController')
    ->middleware('verified');;

Route::get('mensagem-teste', function() {
    return new MensagemTesteMail();
    //Mail::to('vitomartinsalmeida@gmail.com')->send(new MensagemTesteMail());
    //return 'E-mail enviado com sucesso';
});
