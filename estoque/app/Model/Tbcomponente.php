<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tbcomponente extends Model
{

        protected $table = 'ta_docente_curso';
        public $timestamps = false;
        protected $primaryKey = 'id_docente_curso';

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
