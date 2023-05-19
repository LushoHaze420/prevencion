<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NuevoUsuario extends Model
{
    //use HasFactory;

    protected $table='NuevoUsuario';
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable=[
        'rut_NU',
        'nombre_NU',
        'apellido_NU',
        'email_NU',
        'contrasena_NU',
        'rol_NU'
        ];
}
