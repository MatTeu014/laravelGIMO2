<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class usuariosModel extends Model
{
    //Defino o banco de dados que será usado
    use HasFactory;
    protected $table = 'usuarios'; //Nome da Tabela
    
    protected $fillable = ['nome', 'sobrenome', 'email', 'senha','idade','escola','serie','progressonumeros','progressoletras','situacao'];
}//Fim da classe Model