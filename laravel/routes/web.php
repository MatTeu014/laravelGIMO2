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

Route::post('/usuarioatualizar', [usuariosController::class, 'usuarioAtualizar'])->name('usuarioatualizar');

Route::post('/usuariodesativar', [usuariosController::class, 'usuarioDesativar'])->name('usuariodesativar');

Route::post('/usuarioprogresso', [usuariosController::class, 'usuarioProgresso'])->name('usuarioprogresso');

Route::get('/usuarioperfil2', [App\Http\Controllers\usuariosController::class, 'usuarioPerfil2'])->name('usuarioperfil2');

Route::get('/usuariosloginrelatorio', [App\Http\Controllers\usuariosController::class, 'usuarioRelatorio'])->name('usuariosloginrelatorio');


//Funções Adms

Route::get('/admscadastrar',[App\Http\Controllers\admsController::class, 'admsCadastrar'])->name('admsCadastrar');

Route::get('/admslogin',[App\Http\Controllers\admsController::class, 'admsLogin'])->name('admsLogin');

Route::get('/admsperfil', [admsController::class, 'admsPerfil'])->name('admsPerfil');

Route::get('/admseditar', [App\Http\Controllers\admsController::class, 'admsEditar2'])->name('admseditar');

Route::post('/admsatualizar', [admsController::class, 'admsAtualizar2'])->name('admsatualizar');