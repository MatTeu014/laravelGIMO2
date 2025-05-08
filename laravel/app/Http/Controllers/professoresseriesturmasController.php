<?php

namespace App\Http\Controllers;

use App\Models\professorModel;
use Illuminate\Http\Request;
use App\Models\alunosModel;
use App\Models\escolasModel;
use App\Models\seriesModel;
use App\Models\turmasModel;
use App\Models\professoresseriesturmasModel;
use Illuminate\Support\Facades\Log;

class professoresseriesturmasController extends Controller
{

    public function professoresseriesturmasCadastrarSerie(Request $request){
        $idserie = seriesModel::where('nome', $request->input('serie'))->value('id');
        session(['idserie' => $idserie]);
        
        $turmas = turmasModel::where('idSeriesFK', $idserie)->get();
        
        //Log::info("ID DA SERIE $idprofessor");  

        return view('paginas.professorCadastroTurmas', compact('turmas'));
    }

    public function professorConsultarProfessores(Request $request){
        
        $professores = professorModel::get();

        return view('paginas.escolaCadastroProfessorSerieTurma', compact('professores'));

    }

    public function professoresseriesturmaCadastrarTurma(Request $request){

        $idserie = session('idserie');
        $idprofessor = session('idprofessor');
        $idturma = turmasModel::where('nome', $request->input('turma'))->where('idSeriesFK',$idserie)->value('id');

        $model = new professoresseriesturmasModel();
        $model->idProfessorFK = $idprofessor;
        $model->idSerieFK = $idserie;
        $model->idTurmaFK = $idturma;
        $model->save();

        return view('paginas.escolaHome');

    }

    public function professoresseriesturmaConsultaSerie(Request $request){

        $idprofessor = session('idprofessor');
        $idserieFK = professoresseriesturmasModel::where('idProfessorFK', $idprofessor)->pluck('idSerieFK');


        $series = seriesModel::whereIn('id', $idserieFK)->get();
        
        session(['idseries' => $series->pluck('id')]);
        
        //Log::info(" dadaad $idserieFK");  
        return view('paginas.professorRelatoriosSeries', compact('series'));

    }

    
    public function professoresseriesturmaConsultaTurma(Request $request){

        $idprofessor = session('idprofessor');
        $idturmaFK = professoresseriesturmasModel::where('idProfessorFK', $idprofessor)->where('idSerieFK', $request->input('serie'))->pluck('idTurmaFK');
        Log::info(" dadaad $idturmaFK");
       
        $serie = $request->input('serie');
        
        $turmas = turmasModel::whereIn('id', $idturmaFK)->get();

        session(['serie' => $serie]);
        
        session(['turma'=> $turmas]);
        
        
        return view('paginas.professorRelatoriosTurmas', compact('turmas'));

    }

    public function professoresseriesturmaConsultaAlunos(Request $request){

        $idprofessor = session('idprofessor');

        $escola = professorModel::where('id', $idprofessor)->value('idEscolaFK');
        $serie = session('serie');
        $turma = $request->input('turma');

        $alunos = alunosModel::where('idSerieFK', $serie)->where('idTurmaFK', $turma)->get();

        Log::info(" dadaad $escola, $serie, $turma");

        return view('paginas.professorRelatoriosAlunos', compact('alunos'));

    }

}