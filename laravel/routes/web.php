<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admsController;
use App\Http\Controllers\alunosController;
use App\Http\Controllers\escolasController;
use App\Http\Controllers\seriesController;
use App\Http\Controllers\turmasController;
use App\Http\Controllers\professoresseriesturmasController;


//Home
Route::get('/', function () {
    return view('paginas.home');
});

Route::get('sobrenos', function () {
    return view('paginas.sobrenos');
});






//aluno
Route::get('alunoLogin', function () {
    return view('paginas.alunoLogin');
});

Route::get('alunoCadastro', function () {
    return view('paginas.alunoCadastro');
});

Route::get('alunoHome', function () {
    return view('paginas.alunoHome');
});

Route::get('alunoPerfil', function () {
    return view('paginas.alunoPerfil');
});

Route::get('alunoEsqueceuSenha', function () {
    return view('paginas.alunoEsqueceuSenha');
});

Route::get('alunoAlterarSenha', function () {
    return view('paginas.alunoAlterarSenha');
});

Route::get('alunoSobrenos', function () {
    return view('paginas.alunoSobrenos');
});

Route::get('alunoAtividades', function () {
    return view('paginas.alunoAtividades');
});

Route::get('alunoRelatorio', function () {
    return view('paginas.alunoRelatorio');
});

Route::get('alunoEditarPerfil', function () {
    return view('paginas.alunoEditarPerfil');
});

Route::get('alunoAlfabeto', function () {
    return view('paginas.alunoAlfabeto');
});

Route::get('alunoNumeros', function () {
    return view('paginas.alunoNumeros');
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


//escola


Route::get('escolaCadastro', function () {
    return view('paginas.escolaCadastro');
});

Route::get('escolaCadastroSeries', function () {
    return view('paginas.escolaCadastroSeries');
});

Route::get('escolaCadastroTurmas', function () {
    return view('paginas.escolaCadastroTurmas');
});

Route::get('escolaLogin', function () {
    return view('paginas.escolaLogin');
});

Route::get('escolaHome', function () {
    return view('paginas.escolaHome');
});

Route::get('escolaEditarPerfil', function () {
    return view('paginas.escolaEditarPerfil');
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

Route::get('professorSerie3', function () {
    return view('paginas.professorSerie2');
});

Route::get('professorSerie4', function () {
    return view('paginas.professorSerie2');
});

Route::get('professorSerie5', function () {
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



//Funções Alunos

Route::get('/alunoscadastrar',[App\Http\Controllers\alunosController::class, 'alunosCadastrar'])->name('alunosCadastrar');

Route::get('/alunoslogin', [App\Http\Controllers\alunosController::class, 'alunosLogin'])->name('alunosLogin');

Route::get('/alunosperfil', [App\Http\Controllers\alunosController::class, 'alunosPerfil'])->name('alunosperfil');

Route::get('/alunoseditar', [App\Http\Controllers\alunosController::class, 'alunosEditar'])->name('alunoseditar');

Route::get('/alunosatualizar', [App\Http\Controllers\alunosController::class, 'alunosAtualizar'])->name('alunosatualizar');

Route::get('/alunosrelatorio', [App\Http\Controllers\alunosController::class, 'alunosRelatorio'])->name('alunosrelatorio');

Route::get('/alunosconsultarescola',[App\Http\Controllers\alunosController::class, 'alunosConsultarEscola'])->name('alunosconsultarescola');

Route::get('/alunoscadastrarserie',[App\Http\Controllers\alunosController::class, 'alunosCadastrarSerie'])->name('alunoscadastrarserie');

Route::get('/alunoscadastrarturma',[App\Http\Controllers\alunosController::class, 'alunosCadastrarTurma'])->name('alunoscadastrarturma');


#######BOTOES DO ALFABETO########

Route::post('/alunoaumentarprogressoletraa', [alunosController::class, 'alunoAumentarProgressoLetraA'])->name('alunoaumentarprogressoletraa');
Route::post('/alunoaumentarprogressoletrab', [alunosController::class, 'alunoAumentarProgressoLetraB'])->name('alunoaumentarprogressoletrab');
Route::post('/alunoaumentarprogressoletrac', [alunosController::class, 'alunoAumentarProgressoLetraC'])->name('alunoaumentarprogressoletrac');
Route::post('/alunoaumentarprogressoletrad', [alunosController::class, 'alunoAumentarProgressoLetraD'])->name('alunoaumentarprogressoletrad');
Route::post('/alunoaumentarprogressoletrae', [alunosController::class, 'alunoAumentarProgressoLetraE'])->name('alunoaumentarprogressoletrae');
Route::post('/alunoaumentarprogressoletraf', [alunosController::class, 'alunoAumentarProgressoLetraF'])->name('alunoaumentarprogressoletraf');
Route::post('/alunoaumentarprogressoletrag', [alunosController::class, 'alunoAumentarProgressoLetraG'])->name('alunoaumentarprogressoletrag');
Route::post('/alunoaumentarprogressoletrah', [alunosController::class, 'alunoAumentarProgressoLetraH'])->name('alunoaumentarprogressoletrah');
Route::post('/alunoaumentarprogressoletrai', [alunosController::class, 'alunoAumentarProgressoLetraI'])->name('alunoaumentarprogressoletrai');
Route::post('/alunoaumentarprogressoletraj', [alunosController::class, 'alunoAumentarProgressoLetraJ'])->name('alunoaumentarprogressoletraj');
Route::post('/alunoaumentarprogressoletrak', [alunosController::class, 'alunoAumentarProgressoLetraK'])->name('alunoaumentarprogressoletrak');
Route::post('/alunoaumentarprogressoletral', [alunosController::class, 'alunoAumentarProgressoLetraL'])->name('alunoaumentarprogressoletral');
Route::post('/alunoaumentarprogressoletram', [alunosController::class, 'alunoAumentarProgressoLetraM'])->name('alunoaumentarprogressoletram');
Route::post('/alunoaumentarprogressoletran', [alunosController::class, 'alunoAumentarProgressoLetraN'])->name('alunoaumentarprogressoletran');
Route::post('/alunoaumentarprogressoletrao', [alunosController::class, 'alunoAumentarProgressoLetraO'])->name('alunoaumentarprogressoletrao');
Route::post('/alunoaumentarprogressoletrap', [alunosController::class, 'alunoAumentarProgressoLetraP'])->name('alunoaumentarprogressoletrap');
Route::post('/alunoaumentarprogressoletraq', [alunosController::class, 'alunoAumentarProgressoLetraQ'])->name('alunoaumentarprogressoletraq');
Route::post('/alunoaumentarprogressoletrar', [alunosController::class, 'alunoAumentarProgressoLetraR'])->name('alunoaumentarprogressoletrar');
Route::post('/alunoaumentarprogressoletras', [alunosController::class, 'alunoAumentarProgressoLetraS'])->name('alunoaumentarprogressoletras');
Route::post('/alunoaumentarprogressoletrat', [alunosController::class, 'alunoAumentarProgressoLetraT'])->name('alunoaumentarprogressoletrat');
Route::post('/alunoaumentarprogressoletrau', [alunosController::class, 'alunoAumentarProgressoLetraU'])->name('alunoaumentarprogressoletrau');
Route::post('/alunoaumentarprogressoletrav', [alunosController::class, 'alunoAumentarProgressoLetraV'])->name('alunoaumentarprogressoletrav');
Route::post('/alunoaumentarprogressoletraw', [alunosController::class, 'alunoAumentarProgressoLetraW'])->name('alunoaumentarprogressoletraw');
Route::post('/alunoaumentarprogressoletrax', [alunosController::class, 'alunoAumentarProgressoLetraX'])->name('alunoaumentarprogressoletrax');
Route::post('/alunoaumentarprogressoletray', [alunosController::class, 'alunoAumentarProgressoLetraY'])->name('alunoaumentarprogressoletray');
Route::post('/alunoaumentarprogressoletraz', [alunosController::class, 'alunoAumentarProgressoLetraZ'])->name('alunoaumentarprogressoletraz');

Route::post('/alunoresetarprogressoletras', [alunosController::class, 'alunoResetarProgressoLetras'])->name('alunoresetarprogressoletras');

#######BOTOES DO ALFABETO########


#######BOTOES DOS NUMEROS########

Route::post('/alunoaumentarprogressonumero0', [alunosController::class, 'alunoAumentarProgressoNumero0'])->name('alunoaumentarprogressonumero0');
Route::post('/alunoaumentarprogressonumero1', [alunosController::class, 'alunoAumentarProgressoNumero1'])->name('alunoaumentarprogressonumero1');
Route::post('/alunoaumentarprogressonumero2', [alunosController::class, 'alunoAumentarProgressoNumero2'])->name('alunoaumentarprogressonumero2');
Route::post('/alunoaumentarprogressonumero3', [alunosController::class, 'alunoAumentarProgressoNumero3'])->name('alunoaumentarprogressonumero3');
Route::post('/alunoaumentarprogressonumero4', [alunosController::class, 'alunoAumentarProgressoNumero4'])->name('alunoaumentarprogressonumero4');
Route::post('/alunoaumentarprogressonumero5', [alunosController::class, 'alunoAumentarProgressoNumero5'])->name('alunoaumentarprogressonumero5');
Route::post('/alunoaumentarprogressonumero6', [alunosController::class, 'alunoAumentarProgressoNumero6'])->name('alunoaumentarprogressonumero6');
Route::post('/alunoaumentarprogressonumero7', [alunosController::class, 'alunoAumentarProgressoNumero7'])->name('alunoaumentarprogressonumero7');
Route::post('/alunoaumentarprogressonumero8', [alunosController::class, 'alunoAumentarProgressoNumero8'])->name('alunoaumentarprogressonumero8');
Route::post('/alunoaumentarprogressonumero9', [alunosController::class, 'alunoAumentarProgressoNumero9'])->name('alunoaumentarprogressonumero9');
Route::post('/alunoaumentarprogressonumero10', [alunosController::class, 'alunoAumentarProgressoNumero10'])->name('alunoaumentarprogressonumero10');

Route::post('/alunoresetarprogressonumeros', [alunosController::class, 'alunoResetarProgressoNumeros'])->name('alunoresetarprogressonumeros');

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

Route::get('/professorconsultarescolas',[App\Http\Controllers\professorController::class, 'professorConsultarEscolas'])->name('professorconsultarescolas');

Route::get('/professorconsultarseries',[App\Http\Controllers\professorController::class, 'professorConsultarSeries'])->name('professorconsultarseries');

Route::get('/professorconsultarturmas',[App\Http\Controllers\professorController::class, 'professorConsultarTurmas'])->name('professorconsultarturmas');

Route::get('/professorrelatoriosalunos',[App\Http\Controllers\professorController::class, 'professorRelatoriosAlunos'])->name('professorrelatoriosalunos');



//Funções Escolas

Route::get('/escolascadastrar',[App\Http\Controllers\escolasController::class, 'escolasCadastrar'])->name('escolascadastrar');

Route::get('/escolaslogin',[App\Http\Controllers\escolasController::class, 'escolasLogin'])->name('escolaslogin');

Route::get('/escolasperfil',[App\Http\Controllers\escolasController::class, 'escolasPerfil'])->name('escolasperfil');

Route::get('/escolaseditarperfil',[App\Http\Controllers\escolasController::class, 'escolaseditarperfil'])->name('escolaseditarperfil');

Route::get('/escolasatualizarperfil',[App\Http\Controllers\escolasController::class, 'escolasAtualizarPerfil'])->name('escolasatualizarperfil');



///Funções Series

Route::get('/seriescadastrar',[App\Http\Controllers\seriesController::class, 'seriesCadastrar'])->name('seriescadastrar');

Route::get('/seriesconsultar',[App\Http\Controllers\seriesController::class, 'seriesConsultar'])->name('seriesconsultar');

///Funções Turmas

Route::get('/turmascadastrar',[App\Http\Controllers\turmasController::class, 'turmasCadastrar'])->name('turmascadastrar');



//ProfessorSeriesTurmas

Route::get('/professorconsultarprofessores',[App\Http\Controllers\professoresseriesturmasController::class, 'professorConsultarProfessores'])->name('professorconsultarprofessores');

Route::get('/professoresseriesturmascadastrarserie',[App\Http\Controllers\professoresseriesturmasController::class, 'professoresseriesturmasCadastrarSerie'])->name('professoresseriesturmascadastrarserie');

Route::get('/professoresseriesturmacadastrarturma',[App\Http\Controllers\professoresseriesturmasController::class, 'professoresseriesturmaCadastrarTurma'])->name('professoresseriesturmacadastrarturma');

Route::get('/professoresseriesturmaconsultaserie',[App\Http\Controllers\professoresseriesturmasController::class, 'professoresseriesturmaConsultaSerie'])->name('professoresseriesturmaconsultaserie');

Route::get('/professoresseriesturmaconsultaturma',[App\Http\Controllers\professoresseriesturmasController::class, 'professoresseriesturmaConsultaTurma'])->name('professoresseriesturmaconsultaturma');

Route::get('/professoresseriesturmaconsultaalunos',[App\Http\Controllers\professoresseriesturmasController::class, 'professoresseriesturmaConsultaAlunos'])->name('professoresseriesturmaconsultaalunos');
