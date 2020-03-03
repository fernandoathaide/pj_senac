<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    protected $table = 'tb_componente';
    public $timestamps = false;
    protected $primaryKey = 'id_componente';
    protected $foreignKey = ['fk_id_curso', 'fk_id_docente'];
    protected $fillable = [

        'id_componente',
        'fk_id_curso',
        'fk_id_docente',
        'no_componente',
        'descricao',
        'qt_horas_componente',
        'qt_alunos_mat_componente'
    ];
}
