<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class NuevoUsuario extends Model
{
    //use HasFactory;
    use HasTimestamps;

    protected $table='NuevoUsuario';
    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable=[
        'rut_NU',
        'nombre_NU',
        'apellido_NU',
        'email_NU',
        'contrasena_NU',
        'rol_NU'
        ];
}
