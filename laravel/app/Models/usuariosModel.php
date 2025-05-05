<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class usuariosModel extends Model
{
    //Defino o banco de dados que será usado
    use HasFactory;
    protected $table = 'usuarios'; //Nome da Tabela
    
    protected $fillable = ['nome', 'sobrenome', 'email', 'senha','idade','escola','idSerieFK','idTurmaFK','progressonumeros','progressoletras','situacao','botaoA','botaoB','botaoC','botaoD','botaoE','botaoF','botaoG','botaoH','botaoI','botaoJ','botaoK','botaoL','botaoM','botaoN','botaoO','botaoP','botaoQ','botaoR','botaoS','botaoT','botaoU','botaoV','botaoW','botaoX','botaoY','botaoZ','botao0','botao1','botao2','botao3','botao4','botao5','botao6','botao7','botao8','botao9','botao10',];
}//Fim da classe Model