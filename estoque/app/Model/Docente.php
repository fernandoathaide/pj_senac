<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'tb_docentes';
    public $timestamps = false;
    protected $primaryKey = 'id_docente';

    protected $fillable = [
        'id_docente',
        'nome',
        'matricula'
    ];
}
