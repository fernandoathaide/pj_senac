<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'tb_curso';
    public $timestamps = false;
    protected $primaryKey = 'id_curso';

    protected $fillable = [
        'id_curso',
        'no_curso',
        'descricao',
        'qt_alunos',
        'dt_inicio',
        'dt_fim',
        'qt_horas_curso'
    ];
}
