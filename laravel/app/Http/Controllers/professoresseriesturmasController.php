<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuariosModel;
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

    public function professoresseriesturmaCadastrarTurma(Request $request){

        $idserie = session('idserie');
        $idprofessor = session('idprofessor');
        $idturma = turmasModel::where('nome', $request->input('turma'))->value('id');

        $model = new professoresseriesturmasModel();
        $model->idProfessorFK = $idprofessor;
        $model->idSerieFK = $idserie;
        $model->idTurmaFK = $idturma;
        $model->save();

        return view('paginas.professorHome');

    }

    public function professoresseriesturmaConsultaSerie(Request $request){

        $idprofessor = session('idprofessor');
        $idserieFK = professoresseriesturmasModel::where('idProfessorFK', $idprofessor)->value('idSerieFK');

        $series = seriesModel::where('id', $idserieFK)->get()->all();
        //Log::info(" dadaad $series");  

        return view('paginas.professorRelatorios', compact('series'));

    }

}