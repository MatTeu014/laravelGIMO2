<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class escolasModel extends Model
{
    //Defino o banco de dados que será usado
    use HasFactory;
    protected $table = 'escolas'; //Nome da Tabela
    
    protected $fillable = ['nome', 'senha', 'endereco', 'telefone'];
}//Fim da classe Model