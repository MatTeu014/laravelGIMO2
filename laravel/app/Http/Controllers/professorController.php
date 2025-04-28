<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professorModel;
use App\Models\usuariosModel;

class professorController extends Controller{
    
    public function index(){
        
        $dados=professorModel::all(); //todos os dados do banco
        return view('')->With('dados',$dados);

    }

    public function professorCadastrar(Request $request){

        $email = $request->input('email');

        // Verifica se o e-mail já está cadastrado
        $emailExistente = professorModel::where('email', $email)->first();
        if ($emailExistente) {
            return redirect('professorCadastro')->with('failed', 'E-mail já cadastrado! Use outro E-mail');
        }
    
        // Inserir Dados
        $model = new professorModel();
        $model->nome = $request->input('nome');
        $model->sobrenome = $request->input('sobrenome');
        $model->email = $request->input('email');
        $model->senha = $request->input('senha');
        $model->idade = $request->input('idade');
        $model->situacao = "Ativo";
    
        // Guardar os dados no banco
        $model->save();
    
        return redirect('professorCadastro')->with('success', 'Professor cadastrado com sucesso!');
    }

    public function professorLogin(Request $request){
        $email = $request->input('email');
        $senha = $request->input('senha');
        
        // Buscar o funcionário pelo nome
     
        
        // Verificar se o funcionário existe e a senha está correta
        if ($professores=professorModel::where('email', $email)->where('senha', $senha)->first()) {
    
            // Armazenar os dados do funcionário na sessão
            session(['professores' => $professores]);
    
            // Redirecionar para a página homeLogado
            return redirect('professorHome');
        } else {
            // Login falhou
            return redirect('professorLogin')->with('failed', 'E-mail ou senha inválido');
        }

    }

    public function professorPerfil(){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('professores')) {
            return redirect()->route('professoresPerfil'); // Redireciona se não estiver logado
        }
        
        $professores = session('professores'); // Recupera os dados do funcionário da sessão
        return view('paginas.professorPerfil', compact('professores')); // Passa os dados para a view
    }

    
    public function professorEditar2(){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('professores')) {
        }

        // Recupera o funcionário da sessão
        $professores = session('professores');

        // Exibe o formulário de edição, passando os dados do funcionário
        return view('paginas.professorEditarPerfil', compact('professores'));
    }

    public function professorAtualizar2(Request $request){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('professores')) {

        }

        // Validação dos dados recebidos
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string',
            'email' => 'required|string',
            'senha' => 'required|string',
            'idade' => 'required|string',
        ]);

        // Recupera os dados do funcionário da sessão
        $professores = session('professores');

        // Atualiza as informações do funcionário
        $professores->update([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'senha' => $request->senha,
            'idade' => $request->idade,
        ]);

        // Atualiza a sessão com os novos dados do funcionário
        session(['professores' => $professores]);

        // Redireciona para a página de homeLogado ou outra página que desejar
        return redirect('professoresperfil');
    }

    public function professorTurmas(Request $request){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('professores')) {
        }
        

        $valor = $request->input('turma');

        $turmas = usuariosModel::where('turma',$valor)->get();


        // Exibe o formulário de edição, passando os dados do funcionário
        return view('paginas.professorSeries', compact('turmas'));
    }

}//fim da classe