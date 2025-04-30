<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seriesModel;

class seriesController extends Controller{
    
    public function seriesCadastrar(Request $request){
        
        $escolas = session('id');

        // Inserir Dados
        $model = new seriesModel();
        $model->nome = $request->input('nome');
        $model->idEscolaFK = $escolas;
    
        // Guardar os dados no banco
        $model->save();
    
        return redirect('escolaCadastroSeries')->with('success', 'Série cadastrada com sucesso!');
    }

    public function seriesConsultar(Request $request){
        
        $idEscola = session('id');

        $series = seriesModel::where('idEscolaFK', $idEscola)->get();
    
        return view('paginas.escolaCadastroTurmas', compact('series'));
    }

}//fim da classe