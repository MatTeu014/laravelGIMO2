<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class professorModel extends Model
{
    //Defino o banco de dados que será usado
    use HasFactory;
    protected $table = 'professores'; //Nome da Tabela
    
    protected $fillable = ['nome', 'sobrenome', 'email', 'senha','idade','situacao'];
}//Fim da classe Model