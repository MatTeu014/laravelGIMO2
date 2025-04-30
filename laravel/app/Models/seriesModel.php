<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class seriesModel extends Model
{
    //Defino o banco de dados que será usado
    use HasFactory;
    protected $table = 'series'; //Nome da Tabela
    
    protected $fillable = ['nome', 'idEscolaFK'];
}//Fim da classe Model