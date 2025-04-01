<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Support\Facades\Storage;

class Aseadores extends Model
{
    //use HasFactory;
    use HasTimestamps;

    protected $table='aseadores';
    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable=[
        'nombre_prev',
        'rut_cap',
        'nombre_cap',
        'apellidos_cap',
        'rol_cap',
        'odi',//General
        'extintores',//General
        'difusion',//General
        'limpieza_desinfeccion_covid',
        'uso_sustancias_peligrosas',
        'uso_correcto_epp',
        'diploma'//general
        ];
}
