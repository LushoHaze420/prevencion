<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class GeryJef extends Model
{
    //use HasFactory;
    use HasTimestamps;

    protected $table='geryjef';
    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable=[
        // 'rut_prev',
        'nombre_prev',
        // 'apellidos_prev',
        'rut_cap',
        'nombre_cap',
        'apellidos_cap',
        'rol_cap',
        'odi',
        'extintores',
        'difusion',
        'taller_responsabilidad_civil_penal',
        'investigacion_accidentes',
        'liderazgo_comunicacion_administracion_negocios',
        'identificacion_peligros_y_evaluacion_riesgos',
        'prevencion_coronavirus',
        'diploma',
        ];
}
