<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondyAux extends Model
{
    //use HasFactory;
    protected $table='condyaux';
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable=[
        'rut_prev',
        'nombre_prev',
        'apellidos_prev',
        'rut_cap',
        'nombre_cap',
        'apellidos_cap',
        'rol_cap',
        'documentos',
        ];
}
