<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\escolasModel;
use App\Models\seriesModel;
use App\Models\turmasModel;
use App\Models\usuariosModel;

class escolasController extends Controller{
    
    public function escolasCadastrar(Request $request){

        $nome = $request->input('nome');

        // Verifica se o e-mail já está cadastrado
        $nomeExistente = escolasModel::where('nome', $nome)->first();
        if ($nomeExistente) {
            return redirect('escolaCadastro')->with('failed', 'Escola já cadastrada!');
        }
    
        // Inserir Dados
        $model = new escolasModel();
        $model->nome = $request->input('nome');
        $model->email = $request->input('email');
        $model->senha = $request->input('senha');
        $model->endereco = $request->input('endereco');
        $model->telefone = $request->input('telefone');
    
        // Guardar os dados no banco
        $model->save();
    
        return redirect('escolaCadastro')->with('success', 'Escola cadastrada com sucesso!');
    }

    public function escolasLogin(Request $request){

        $email = $request->input('email');
        $senha = $request->input('senha');
        
        // Buscar o funcionário pelo nome
     
        session(['email' => $email]);
        
        // Verificar se o funcionário existe e a senha está correta
        if ($escolas =escolasModel::where('email', $email)->where('senha', $senha)->first()) {
    
            // Armazenar os dados do funcionário na sessão
            session(['escolas' => $escolas]);
            session(['id' => $escolas->id]);

            // Redirecionar para a página homeLogado
            return redirect('escolaHome');

        } else {
            // Login falhou
            return redirect('escolaLogin')->with('failed', 'E-mail ou senha inválido');
        }
    }

    public function escolasPerfil(Request $request){

        
        $escolas = escolasModel::where('email', session('email'))->first();

        return view('paginas.escolaPerfil', compact('escolas'));

    }

    public function escolasEditarPerfil(Request $request){

        
        $escolas = escolasModel::where('email', session('email'))->first();

        return view('paginas.escolaPerfil', compact('escolas'));

    }


}//fim da classe