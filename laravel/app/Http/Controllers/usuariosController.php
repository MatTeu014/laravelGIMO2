<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuariosModel;
use App\Models\escolasModel;
use App\Models\seriesModel;
use App\Models\turmasModel;
use Illuminate\Support\Facades\Log;

class usuariosController extends Controller
{

    public function index()
    {

        $dados = usuariosModel::all(); //todos os dados do banco
        return view('paginas.index')->With('dados', $dados);

    }

    public function usuariosConsultarEscola(Request $request)
    {

        $escolas = escolasModel::all();

        return view('paginas.usuarioCadastro', compact('escolas'));

    }
    public function usuariosCadastrar(Request $request)
    {

        $email = $request->input('email');

        // Verifica se o e-mail já está cadastrado
        $emailExistente = usuariosModel::where('email', $email)->first();
        if ($emailExistente) {
            return redirect('usuarioCadastro')->with('failed', 'E-mail já cadastrado! Use outro E-mail');
        }

        $idescolaFK = escolasModel::where('nome', $request->input('escola'))->value('id');

        // Inserir Dados
        $model = new usuariosModel();
        $model->nome = $request->input('nome');
        $model->sobrenome = $request->input('sobrenome');
        $model->email = $email;
        $model->senha = $request->input('senha');
        $model->idade = $request->input('idade');
        $model->escola = $idescolaFK;
        $model->situacao = "Ativo";
        $model->progressonumeros = 0;
        $model->progressoletras = 0;

        
        // Guardar os dados no banco
        $model->save();
        
        session('idEscolaFK',$idescolaFK);
        $series = seriesModel::where('idEscolaFK', $idescolaFK)->get();
        
        return view('paginas.usuarioCadastroSerie', compact('series'));
        
    }//fim  


    public function usuariosCadastrarSerie(Request $request)
    {

        $idserie = seriesModel::where('nome', $request->input('serie'))->value('id');

        
        $idusuario = usuariosModel::latest('id')->first();
        
        $idusuario->update([
            'idSerieFK' => $idserie,
        ]);
        
        $turmas = turmasModel::where('idSeriesFK',$idserie)->get();

        Log::info("ID DA SERIE $idusuario");
        Log::info("ID DA SERIE $idserie");
        return view('paginas.usuarioCadastroTurma', compact('turmas'));
    }

    public function usuariosCadastrarTurma(Request $request)
    {

        $idturma = turmasModel::where('nome', $request->input('turma'))->value('id');

        $idusuario = usuariosModel::latest('id')->first();
        
        $idusuario->update([
            'idTurmaFK' => $idturma,
        ]);

        return view('paginas.usuarioLogin');

    }

    // Processa o login manualmente
    public function usuariosLogin(Request $request){
        $email = $request->input('email');
        $senha = $request->input('senha');

        // Verificar se o funcionário existe e a senha está correta
        if ($usuarios = usuariosModel::where('email', $email)->where('senha', $senha)->first()) {

            // Armazenar os dados do funcionário na sessão
            session(['usuarios' => $usuarios]);

            // Redirecionar para a página homeLogado
            return redirect('usuarioHome');
        } else {
            // Login falhou
            return redirect('usuarioLogin')->with('failed', 'E-mail ou senha inválido');
        }


    }

    public function usuarioPerfil()
    {
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('usuarios')) {

        }

        $usuarios = session('usuarios'); // Recupera os dados do funcionário da sessão
        return view('paginas.usuarioPerfil', compact('usuarios')); // Passa os dados para a view
    }

    public function usuarioEditar(){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('usuarios')) {
        }

        // Recupera o funcionário da sessão
        $usuarios = session('usuarios');

        // Exibe o formulário de edição, passando os dados do funcionário
        return view('paginas.usuarioEditarPerfil', compact('usuarios'));
    }

    public function usuarioAtualizar(Request $request)
    {
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('usuarios')) {

        }

        // Validação dos dados recebidos
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string',
            'email' => 'required|string',
            'senha' => 'required|string',
            'idade' => 'required|string',
            'escola' => 'required|string',
            'serie' => 'required|string',
            'turma' => 'required|string',
        ]);

        // Recupera os dados do funcionário da sessão
        $usuarios = session('usuarios');

        // Atualiza as informações do funcionário
        $usuarios->update([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'senha' => $request->senha,
            'idade' => $request->idade,
            'escola' => $request->escola,
            'serie' => $request->serie,
            'turma' => $request->turma,
        ]);

        // Atualiza a sessão com os novos dados do funcionário
        session(['usuarios' => $usuarios]);

        // Redireciona para a página de homeLogado ou outra página que desejar
        return redirect('usuarioperfil');
    }

    public function usuarioRelatorio()
    {
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('usuarios')) {
            return redirect()->route('usuarioPerfil'); // Redireciona se não estiver logado
        }

        $usuarios = session('usuarios'); // Recupera os dados do funcionário da sessão
        return view('paginas.usuarioRelatorio', compact('usuarios')); // Passa os dados para a view
    }


    ########BOTOES DO ALFABETO############


    public function usuarioAumentarProgressoLetraA()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoA = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraB()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoB = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraC()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoC = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraD()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoD = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraE()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoE = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraF()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoF = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraG()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoG = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraH()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoH = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraI()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoI = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraJ()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoJ = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraK()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoK = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraL()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoL = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraM()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoM = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraN()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoN = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraO()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoO = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraP()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoP = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraQ()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoQ = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraR()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoR = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraS()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoS = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraT()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoT = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraU()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoU = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraV()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoV = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraW()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoW = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraX()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoX = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraY()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoY = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }
    public function usuarioAumentarProgressoLetraZ()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = min($usuario->progressoletras + 3.8, 100);
        $usuario->botaoZ = true; // ou 1
        $usuario->save();



        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);


        return redirect('usuarioAlfabeto');
    }

    public function usuarioResetarProgressoLetras(Request $request)
    {

        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressoletras = 0;
        $usuario->botaoA = false;
        $usuario->botaoB = false;
        $usuario->botaoC = false;
        $usuario->botaoD = false;
        $usuario->botaoE = false;
        $usuario->botaoF = false;
        $usuario->botaoG = false;
        $usuario->botaoH = false;
        $usuario->botaoI = false;
        $usuario->botaoJ = false;
        $usuario->botaoK = false;
        $usuario->botaoL = false;
        $usuario->botaoM = false;
        $usuario->botaoN = false;
        $usuario->botaoO = false;
        $usuario->botaoP = false;
        $usuario->botaoQ = false;
        $usuario->botaoR = false;
        $usuario->botaoS = false;
        $usuario->botaoT = false;
        $usuario->botaoU = false;
        $usuario->botaoV = false;
        $usuario->botaoW = false;
        $usuario->botaoX = false;
        $usuario->botaoY = false;
        $usuario->botaoZ = false;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);
        return redirect()->route('usuariorelatorio');
    }

    #########BOTOES DO ALFABETO##########


    #########BOTOES DOS NUMEROS##########

    public function usuarioAumentarProgressoNumero0()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao0 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero1()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao1 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero2()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao2 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero3()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao3 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero4()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao4 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero5()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao5 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero6()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao6 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero7()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao7 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero8()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao8 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero9()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao9 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }
    public function usuarioAumentarProgressoNumero10()
    {
        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = min($usuario->progressonumeros + 9.09, 100);
        $usuario->botao10 = true;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);

        return redirect('usuarioNumeros');
    }

    public function usuarioResetarProgressoNumeros(Request $request)
    {

        $usuarioSessao = session('usuarios');

        if (!$usuarioSessao) {
            return redirect()->back()->with('error', 'Usuário não autenticado.');
        }

        // Recarrega o usuário do banco, caso tenha mudado
        $usuario = usuariosModel::find($usuarioSessao->id);

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        // Atualiza progresso
        $usuario->progressonumeros = 0;
        $usuario->botao0 = false;
        $usuario->botao1 = false;
        $usuario->botao2 = false;
        $usuario->botao3 = false;
        $usuario->botao4 = false;
        $usuario->botao5 = false;
        $usuario->botao6 = false;
        $usuario->botao7 = false;
        $usuario->botao8 = false;
        $usuario->botao9 = false;
        $usuario->botao10 = false;
        $usuario->save();

        // Atualiza a sessão também, se quiser manter o progresso atualizado nela
        session(['usuarios' => $usuario]);
        return redirect()->route('usuariorelatorio');
    }

    #########BOTOES DOS NUMEROS##########

}//fim da classe