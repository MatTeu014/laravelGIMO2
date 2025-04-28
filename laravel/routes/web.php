<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admsController;
use App\Http\Controllers\usuariosController;

//Home
Route::get('/', function () {
    return view('paginas.home');
});

Route::get('sobrenos', function () {
    return view('paginas.sobrenos');
});






//Usuario
Route::get('usuarioLogin', function () {
    return view('paginas.usuarioLogin');
});

Route::get('usuarioCadastro', function () {
    return view('paginas.usuarioCadastro');
});

Route::get('usuarioHome', function () {
    return view('paginas.usuarioHome');
});

Route::get('usuarioPerfil', function () {
    return view('paginas.usuarioPerfil');
});

Route::get('usuarioEsqueceuSenha', function () {
    return view('paginas.usuarioEsqueceuSenha');
});

Route::get('usuarioAlterarSenha', function () {
    return view('paginas.usuarioAlterarSenha');
});

Route::get('usuarioSobrenos', function () {
    return view('paginas.usuarioSobrenos');
});

Route::get('usuarioAtividades', function () {
    return view('paginas.usuarioAtividades');
});

Route::get('usuarioRelatorio', function () {
    return view('paginas.usuarioRelatorio');
});

Route::get('usuarioEditarPerfil', function () {
    return view('paginas.usuarioEditarPerfil');
});

Route::get('usuarioAlfabeto', function () {
    return view('paginas.usuarioAlfabeto');
});

Route::get('usuarioNumeros', function () {
    return view('paginas.usuarioNumeros');
});




//Adm
Route::get('admHome', function () {
    return view('paginas.admHome');
});

Route::get('admLogin', function () {
    return view('paginas.admLogin');
});

Route::get('admCadastro', function () {
    return view('paginas.admCadastro');
});

Route::get('admSobrenos', function () {
    return view('paginas.admSobrenos');
});

Route::get('admEsqueceuSenha', function () {
    return view('paginas.admEsqueceuSenha');
});

Route::get('admAlterarSenha', function () {
    return view('paginas.admAlterarSenha');
});

Route::get('admPerfil', function () {
    return view('paginas.admPerfil');
});

Route::get('admEditarPerfil', function () {
    return view('paginas.admEditarPerfil');
});




//professor

Route::get('professorHome', function () {
    return view('paginas.professorHome');
});

Route::get('professorLogin', function () {
    return view('paginas.professorLogin');
});

Route::get('professorCadastro', function () {
    return view('paginas.professorCadastro');
});

Route::get('professorEsqueceuSenha', function () {
    return view('paginas.professorEsqueceuSenha');
});

Route::get('professorAlterarSenha', function () {
    return view('paginas.professorAlterarSenha');
});

Route::get('professorPerfil', function () {
    return view('paginas.professorPerfil');
});

Route::get('professorEditarPerfil', function () {
    return view('paginas.professorEditarPerfil');
});

Route::get('professorSerie1', function () {
    return view('paginas.professorSerie1');
});

Route::get('professorSerie2', function () {
    return view('paginas.professorSerie2');
});

//Letras
Route::get('letraA', function () {
    return view('paginas/Letras.letraA');
});

Route::get('letraB', function () {
    return view('paginas/Letras.letraB');
});

Route::get('letraC', function () {
    return view('paginas/Letras.letraC');
});

Route::get('letraD', function () {
    return view('paginas/Letras.letraD');
});

Route::get('letraE', function () {
    return view('paginas/Letras.letraE');
});

Route::get('letraF', function () {
    return view('paginas/Letras.letraF');
});

Route::get('letraG', function () {
    return view('paginas/Letras.letraG');
});

Route::get('letraH', function () {
    return view('paginas/Letras.letraH');
});

Route::get('letraI', function () {
    return view('paginas/Letras.letraI');
});

Route::get('letraJ', function () {
    return view('paginas/Letras.letraJ');
});

Route::get('letraK', function () {
    return view('paginas/Letras.letraK');
});

Route::get('letraL', function () {
    return view('paginas/Letras.letraL');
});

Route::get('letraM', function () {
    return view('paginas/Letras.letraM');
});

Route::get('letraN', function () {
    return view('paginas/Letras.letraN');
});

Route::get('letraO', function () {
    return view('paginas/Letras.letraO');
});

Route::get('letraP', function () {
    return view('paginas/Letras.letraP');
});

Route::get('letraQ', function () {
    return view('paginas/Letras.letraQ');
});

Route::get('letraR', function () {
    return view('paginas/Letras.letraR');
});

Route::get('letraS', function () {
    return view('paginas/Letras.letraS');
});

Route::get('letraT', function () {
    return view('paginas/Letras.letraT');
});

Route::get('letraU', function () {
    return view('paginas/Letras.letraU');
});

Route::get('letraV', function () {
    return view('paginas/Letras.letraV');
});

Route::get('letraW', function () {
    return view('paginas/Letras.letraW');
});

Route::get('letraX', function () {
    return view('paginas/Letras.letraX');
});

Route::get('letraY', function () {
    return view('paginas/Letras.letraY');
});

Route::get('letraZ', function () {
    return view('paginas/Letras.letraZ');
});




//Números

Route::get('numero0', function () {
    return view('paginas/Numeros.numero0');
});

Route::get('numero1', function () {
    return view('paginas/Numeros.numero1');
});

Route::get('numero2', function () {
    return view('paginas/Numeros.numero2');
});

Route::get('numero3', function () {
    return view('paginas/Numeros.numero3');
});

Route::get('numero4', function () {
    return view('paginas/Numeros.numero4');
});

Route::get('numero5', function () {
    return view('paginas/Numeros.numero5');
});

Route::get('numero6', function () {
    return view('paginas/Numeros.numero6');
});

Route::get('numero7', function () {
    return view('paginas/Numeros.numero7');
});

Route::get('numero8', function () {
    return view('paginas/Numeros.numero8');
});

Route::get('numero9', function () {
    return view('paginas/Numeros.numero9');
});

Route::get('numero10', function () {
    return view('paginas/Numeros.numero10');
});



//Funções Usuários

Route::get('/usuarioscadastrar',[App\Http\Controllers\usuariosController::class, 'usuariosCadastrar'])->name('usuariosCadastrar');

Route::get('/usuarioslogin', [App\Http\Controllers\usuariosController::class, 'usuariosLogin'])->name('usuariosLogin');

Route::get('/usuarioperfil', [App\Http\Controllers\usuariosController::class, 'usuarioPerfil'])->name('usuarioperfil');

Route::get('/usuarioeditar', [App\Http\Controllers\usuariosController::class, 'usuarioEditar'])->name('usuarioeditar');

Route::post('/usuarioatualizar', [App\Http\Controllers\usuariosController::class, 'usuarioAtualizar'])->name('usuarioatualizar');

Route::post('/usuarioaumentarprogressonumeros', [usuariosController::class, 'usuarioAumentarProgressoNumeros'])->name('usuarioaumentarprogressonumeros');

Route::get('/usuariorelatorio', [App\Http\Controllers\usuariosController::class, 'usuarioRelatorio'])->name('usuariorelatorio');

#######BOTOES DO ALFABETO########

Route::post('/usuarioaumentarprogressoletraa', [usuariosController::class, 'usuarioAumentarProgressoLetraA'])->name('usuarioaumentarprogressoletraa');
Route::post('/usuarioaumentarprogressoletrab', [usuariosController::class, 'usuarioAumentarProgressoLetraB'])->name('usuarioaumentarprogressoletrab');
Route::post('/usuarioaumentarprogressoletrac', [usuariosController::class, 'usuarioAumentarProgressoLetraC'])->name('usuarioaumentarprogressoletrac');
Route::post('/usuarioaumentarprogressoletrad', [usuariosController::class, 'usuarioAumentarProgressoLetraD'])->name('usuarioaumentarprogressoletrad');
Route::post('/usuarioaumentarprogressoletrae', [usuariosController::class, 'usuarioAumentarProgressoLetraE'])->name('usuarioaumentarprogressoletrae');
Route::post('/usuarioaumentarprogressoletraf', [usuariosController::class, 'usuarioAumentarProgressoLetraF'])->name('usuarioaumentarprogressoletraf');
Route::post('/usuarioaumentarprogressoletrag', [usuariosController::class, 'usuarioAumentarProgressoLetraG'])->name('usuarioaumentarprogressoletrag');
Route::post('/usuarioaumentarprogressoletrah', [usuariosController::class, 'usuarioAumentarProgressoLetraH'])->name('usuarioaumentarprogressoletrah');
Route::post('/usuarioaumentarprogressoletrai', [usuariosController::class, 'usuarioAumentarProgressoLetraI'])->name('usuarioaumentarprogressoletrai');
Route::post('/usuarioaumentarprogressoletraj', [usuariosController::class, 'usuarioAumentarProgressoLetraJ'])->name('usuarioaumentarprogressoletraj');
Route::post('/usuarioaumentarprogressoletrak', [usuariosController::class, 'usuarioAumentarProgressoLetraK'])->name('usuarioaumentarprogressoletrak');
Route::post('/usuarioaumentarprogressoletral', [usuariosController::class, 'usuarioAumentarProgressoLetraL'])->name('usuarioaumentarprogressoletral');
Route::post('/usuarioaumentarprogressoletram', [usuariosController::class, 'usuarioAumentarProgressoLetraM'])->name('usuarioaumentarprogressoletram');
Route::post('/usuarioaumentarprogressoletran', [usuariosController::class, 'usuarioAumentarProgressoLetraN'])->name('usuarioaumentarprogressoletran');
Route::post('/usuarioaumentarprogressoletrao', [usuariosController::class, 'usuarioAumentarProgressoLetraO'])->name('usuarioaumentarprogressoletrao');
Route::post('/usuarioaumentarprogressoletrap', [usuariosController::class, 'usuarioAumentarProgressoLetraP'])->name('usuarioaumentarprogressoletrap');
Route::post('/usuarioaumentarprogressoletraq', [usuariosController::class, 'usuarioAumentarProgressoLetraQ'])->name('usuarioaumentarprogressoletraq');
Route::post('/usuarioaumentarprogressoletrar', [usuariosController::class, 'usuarioAumentarProgressoLetraR'])->name('usuarioaumentarprogressoletrar');
Route::post('/usuarioaumentarprogressoletras', [usuariosController::class, 'usuarioAumentarProgressoLetraS'])->name('usuarioaumentarprogressoletras');
Route::post('/usuarioaumentarprogressoletrat', [usuariosController::class, 'usuarioAumentarProgressoLetraT'])->name('usuarioaumentarprogressoletrat');
Route::post('/usuarioaumentarprogressoletrau', [usuariosController::class, 'usuarioAumentarProgressoLetraU'])->name('usuarioaumentarprogressoletrau');
Route::post('/usuarioaumentarprogressoletrav', [usuariosController::class, 'usuarioAumentarProgressoLetraV'])->name('usuarioaumentarprogressoletrav');
Route::post('/usuarioaumentarprogressoletraw', [usuariosController::class, 'usuarioAumentarProgressoLetraW'])->name('usuarioaumentarprogressoletraw');
Route::post('/usuarioaumentarprogressoletrax', [usuariosController::class, 'usuarioAumentarProgressoLetraX'])->name('usuarioaumentarprogressoletrax');
Route::post('/usuarioaumentarprogressoletray', [usuariosController::class, 'usuarioAumentarProgressoLetraY'])->name('usuarioaumentarprogressoletray');
Route::post('/usuarioaumentarprogressoletraz', [usuariosController::class, 'usuarioAumentarProgressoLetraZ'])->name('usuarioaumentarprogressoletraz');

Route::post('/usuarioresetarprogressoletras', [usuariosController::class, 'usuarioResetarProgressoLetras'])->name('usuarioresetarprogressoletras');

#######BOTOES DO ALFABETO########


#######BOTOES DOS NUMEROS########

Route::post('/usuarioaumentarprogressonumero0', [usuariosController::class, 'usuarioAumentarProgressoNumero0'])->name('usuarioaumentarprogressonumero0');
Route::post('/usuarioaumentarprogressonumero1', [usuariosController::class, 'usuarioAumentarProgressoNumero1'])->name('usuarioaumentarprogressonumero1');
Route::post('/usuarioaumentarprogressonumero2', [usuariosController::class, 'usuarioAumentarProgressoNumero2'])->name('usuarioaumentarprogressonumero2');
Route::post('/usuarioaumentarprogressonumero3', [usuariosController::class, 'usuarioAumentarProgressoNumero3'])->name('usuarioaumentarprogressonumero3');
Route::post('/usuarioaumentarprogressonumero4', [usuariosController::class, 'usuarioAumentarProgressoNumero4'])->name('usuarioaumentarprogressonumero4');
Route::post('/usuarioaumentarprogressonumero5', [usuariosController::class, 'usuarioAumentarProgressoNumero5'])->name('usuarioaumentarprogressonumero5');
Route::post('/usuarioaumentarprogressonumero6', [usuariosController::class, 'usuarioAumentarProgressoNumero6'])->name('usuarioaumentarprogressonumero6');
Route::post('/usuarioaumentarprogressonumero7', [usuariosController::class, 'usuarioAumentarProgressoNumero7'])->name('usuarioaumentarprogressonumero7');
Route::post('/usuarioaumentarprogressonumero8', [usuariosController::class, 'usuarioAumentarProgressoNumero8'])->name('usuarioaumentarprogressonumero8');
Route::post('/usuarioaumentarprogressonumero9', [usuariosController::class, 'usuarioAumentarProgressoNumero9'])->name('usuarioaumentarprogressonumero9');
Route::post('/usuarioaumentarprogressonumero10', [usuariosController::class, 'usuarioAumentarProgressoNumero10'])->name('usuarioaumentarprogressonumero10');



Route::post('/usuarioresetarprogressonumeros', [usuariosController::class, 'usuarioResetarProgressoNumeros'])->name('usuarioresetarprogressonumeros');

#######BOTOES DOS NUMEROS########



//Funções Adms

Route::get('/admscadastrar',[App\Http\Controllers\admsController::class, 'admsCadastrar'])->name('admsCadastrar');

Route::get('/admslogin',[App\Http\Controllers\admsController::class, 'admsLogin'])->name('admsLogin');

Route::get('/admsperfil', [admsController::class, 'admsPerfil'])->name('admsPerfil');

Route::get('/admseditar', [App\Http\Controllers\admsController::class, 'admsEditar2'])->name('admseditar');

Route::post('/admsatualizar', [admsController::class, 'admsAtualizar2'])->name('admsatualizar');


//Funções Professores

Route::get('/professorcadastrar',[App\Http\Controllers\professorController::class, 'professorCadastrar'])->name('professorcadastrar');

Route::get('/professorlogin',[App\Http\Controllers\professorController::class, 'professorLogin'])->name('professorlogin');

Route::get('/professorperfil',[App\Http\Controllers\professorController::class, 'professorPerfil'])->name('professorperfil');

Route::get('/professoreditar2',[App\Http\Controllers\professorController::class, 'professorEditar2'])->name('professoreditar2');

Route::post('/professoratualizar2',[App\Http\Controllers\professorController::class, 'professorAtualizar2'])->name('professoratualizar2');

Route::get('/professorturmas',[App\Http\Controllers\professorController::class, 'professorTurmas'])->name('professorturmas');