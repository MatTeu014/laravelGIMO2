<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alunosModel;
use App\Models\escolasModel;
use App\Models\seriesModel;
use App\Models\turmasModel;
use Illuminate\Support\Facades\Log;

class alunosController extends Controller
{

    public function index()
    {

        $dados = alunosModel::all(); //todos os dados do banco
        return view('paginas.index')->With('dados', $dados);

    }

    public function alunosConsultarEscola(Request $request)
    {

        $escolas = escolasModel::all();

        return view('paginas.alunoCadastro', compact('escolas'));

    }
    public function alunosCadastrar(Request $request)
    {

        $email = $request->input('email');

        // Verifica se o e-mail já está cadastrado
        $emailExistente = alunosModel::where('email', $email)->first();
        if ($emailExistente) {
            return redirect('alunoCadastro')->with('failed', 'E-mail já cadastrado! Use outro E-mail');
        }

        $idescolaFK = escolasModel::where('nome', $request->input('escola'))->value('id');

        session(['nome' => $request->input('nome')]);
        session(['sobrenome' => $request->input('sobrenome')]);
        session(['email' => $request->input('email')]);
        session(['senha' => $request->input('senha')]);
        session(['idade' => $request->input('idade')]);
        session(['idescolaFK' => $idescolaFK]);

        $series = seriesModel::get();
        Log::info("NOME $series");
        
        return view('paginas.alunoCadastroSerie', compact('series'));
        
    }//fim  


    public function alunosCadastrarSerie(Request $request)
    {

        $idserie = seriesModel::where('nome', $request->input('serie'))->value('id');

 
        session(['idserie' => $idserie]);
        Log::info("ID DA SERIE $idserie");

        $turmas = turmasModel::where('idSeriesFK',$idserie)->get();

        return view('paginas.alunoCadastroTurma', compact('turmas'));
    }
    
    public function alunosCadastrarTurma(Request $request)
    {
        
        $idserie = session('idserie');
        $idturma = turmasModel::where('nome', $request->input('turma'))->where('idSeriesFK', $idserie)->value('id');
        Log::info("ID DA SERIE $idturma");


        $model = new alunosModel();
        $model->nome = session('nome');
        $model->sobrenome = session('sobrenome');
        $model->email = session('email');
        $model->senha = session('senha');
        $model->idade = session('idade');
        $model->idSerieFK = session('idserie');
        $model->idturmaFK = $idturma;
        $model->progressonumeros = 0;
        $model->progressoletras = 0;
        
        $model->save();

        return view('paginas.alunoLogin');

    }

    // Processa o login manualmente
    public function alunosLogin(Request $request){
        $email = $request->input('email');
        $senha = $request->input('senha');

        // Verificar se o funcionário existe e a senha está correta
        if ($alunos = alunosModel::where('email', $email)->where('senha', $senha)->first()) {

            // Armazenar os dados do funcionário na sessão
            session(['alunos' => $alunos]);

            // Redirecionar para a página homeLogado
            return redirect('alunoHome');
        } else {
            // Login falhou
            return redirect('alunoLogin')->with('failed', 'E-mail ou senha inválido');
        }


    }

    public function alunosPerfil()
    {
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('alunos')) {

        }

        $alunos = session('alunos'); // Recupera os dados do funcionário da sessão
        return view('paginas.alunoPerfil', compact('alunos')); // Passa os dados para a view
    }

    public function alunosEditar(){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('alunos')) {
        }

        // Recupera o funcionário da sessão
        $alunos = session('alunos');

        // Exibe o formulário de edição, passando os dados do funcionário
        return view('paginas.alunoEditarPerfil', compact('alunos'));
    }

    public function alunosAtualizar(Request $request)
    {
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('alunos')) {

        }

        // Recupera os dados do funcionário da sessão
        $alunos = session('alunos');

        // Atualiza as informações do funcionário
        $alunos->update([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'senha' => $request->senha,
            'idade' => $request->idade,
            'serie' => $request->serie,
            'turma' => $request->turma,
        ]);
        
        //Log::info("ID DA SERIE $alunos");

        // Redireciona para a página de homeLogado ou outra página que desejar
        return redirect('alunoperfil');
    }

    public function alunosRelatorio(){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('alunos')) {
            return redirect()->route('alunoPerfil'); // Redireciona se não estiver logado
        }

        $alunos = session('alunos'); // Recupera os dados do funcionário da sessão
        return view('paginas.alunoRelatorio', compact('alunos')); // Passa os dados para a view
    }


    ########BOTOES DO ALFABETO############


    public function alunoAumentarProgressoLetraA()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoA = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraB()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoB = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraC()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoC = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraD()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoD = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraE()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoE = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraF()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoF = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraG()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoG = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraH()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoH = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraI()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoI = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraJ()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoJ = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraK()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoK = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraL()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoL = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraM()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoM = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraN()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoN = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraO()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoO = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraP()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoP = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraQ()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoQ = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraR()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoR = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraS()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoS = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraT()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoT = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraU()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoU = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraV()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoV = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraW()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoW = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraX()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoX = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraY()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoY = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }
    public function alunoAumentarProgressoLetraZ()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = min($aluno->progressoletras + 3.8, 100);
        $aluno->botaoZ = true; // ou 1
        $aluno->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);


        return redirect('alunoAlfabeto');
    }

    public function alunoResetarProgressoLetras(Request $request)
    {

        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressoletras = 0;
        $aluno->botaoA = false;
        $aluno->botaoB = false;
        $aluno->botaoC = false;
        $aluno->botaoD = false;
        $aluno->botaoE = false;
        $aluno->botaoF = false;
        $aluno->botaoG = false;
        $aluno->botaoH = false;
        $aluno->botaoI = false;
        $aluno->botaoJ = false;
        $aluno->botaoK = false;
        $aluno->botaoL = false;
        $aluno->botaoM = false;
        $aluno->botaoN = false;
        $aluno->botaoO = false;
        $aluno->botaoP = false;
        $aluno->botaoQ = false;
        $aluno->botaoR = false;
        $aluno->botaoS = false;
        $aluno->botaoT = false;
        $aluno->botaoU = false;
        $aluno->botaoV = false;
        $aluno->botaoW = false;
        $aluno->botaoX = false;
        $aluno->botaoY = false;
        $aluno->botaoZ = false;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);
        return redirect()->route('alunosrelatorio');
    }

    #########BOTOES DO ALFABETO##########


    #########BOTOES DOS NUMEROS##########

    public function alunoAumentarProgressoNumero0()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao0 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero1()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao1 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero2()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao2 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero3()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao3 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero4()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao4 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero5()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao5 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero6()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao6 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero7()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao7 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero8()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao8 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero9()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao9 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }
    public function alunoAumentarProgressoNumero10()
    {
        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = min($aluno->progressonumeros + 9.09, 100);
        $aluno->botao10 = true;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);

        return redirect('alunoNumeros');
    }

    public function alunoResetarProgressoNumeros(Request $request)
    {

        $alunoSessao = session('alunos');

        if (!$alunoSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $aluno = alunosModel::find($alunoSessao->id);

        if (!$aluno) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $aluno->progressonumeros = 0;
        $aluno->botao0 = false;
        $aluno->botao1 = false;
        $aluno->botao2 = false;
        $aluno->botao3 = false;
        $aluno->botao4 = false;
        $aluno->botao5 = false;
        $aluno->botao6 = false;
        $aluno->botao7 = false;
        $aluno->botao8 = false;
        $aluno->botao9 = false;
        $aluno->botao10 = false;
        $aluno->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['alunos' => $aluno]);
        return redirect()->route('alunosrelatorio');
    }

    #########BOTOES DOS NUMEROS##########

}//fim da classe