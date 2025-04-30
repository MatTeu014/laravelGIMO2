<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class turmasModel extends Model
{
    //Defino o banco de dados que será usado
    use HasFactory;
    protected $table = 'turmas'; //Nome da Tabela
    
    protected $fillable = ['nome', 'idSeriesFK'];
}//Fim da classe Model