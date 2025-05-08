<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class professoresseriesturmasModel extends Model
{
    //Defino o banco de dados que será usado
    use HasFactory;
    protected $table = 'professoresseriesturmas'; //Nome da Tabela
    
    protected $fillable = ['idProfessorFK','idSerieFK','idTurmaFK'];
    
}//Fim da classe Model