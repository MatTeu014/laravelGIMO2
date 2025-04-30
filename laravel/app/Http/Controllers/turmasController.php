<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\turmasModel;
use App\Models\seriesModel;

class turmasController extends Controller{

    public function turmasCadastrar(Request $request){

        $nome = $request->input('nome');

        // Verifica se o e-mail já está cadastrado
        $nomeExistente = seriesModel::where('nome', $nome)->first();
        if ($nomeExistente) {
            return redirect('escolaCadastroTurmas')->with('failed', 'Turma já cadastrada!');
        }

        // Inserir Dados
        $model = new turmasModel();

        $idSerie = seriesModel::where('nome', $request->input('serie'))->value('id');
        
        $model->nome = $request->input('nome');
        $model->idSeriesFK = $idSerie;

        // Guardar os dados no banco
        $model->save();
    
        return redirect('escolaHome')->with('success', 'Turma cadastrada com sucesso!');
    }

    
}//fim da classe