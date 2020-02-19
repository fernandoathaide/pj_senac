<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tadocentecurso extends Model
{
    protected $table = 'Tadocentecurso';
    public $timestamps = false;

    protected $primaryKey = ['fk_id_docente', 'fk_id_curso'];
public $incrementing = false;

    protected $fillable = [
        'fk_id_docente',
        'fk_id_curso',
        'inclusao',
        'exclusao'

    ];
}
