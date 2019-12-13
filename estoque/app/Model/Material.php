<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'tb_material';
    public $timestamps = false;
    protected $primaryKey = 'id_material';

    protected $fillable = [
        'id_material',
        'descricao',
        'tipo',
        'quantidade',
        'metrica',
        'dt_validade'
    ];
}
