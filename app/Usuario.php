<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "id";
    protected $fillable = [
        'idAsesor',
        'usuario',
        'password',
        'administrador',
        'activo',
        'fechaExpiracion',
        'created_at',
        'updated_at',
    ];
}
