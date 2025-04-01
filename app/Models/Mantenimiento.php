<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Support\Facades\Storage;

class Mantenimiento extends Model
{
    //use HasFactory;
    use HasTimestamps;

    protected $table='mantenimiento';
    protected $primaryKey='id';

    public $timestamps=true; //true para mostrar fecha de creacion y modificacion

    protected $fillable=[
        'nombre_prev',
        'rut_cap',
        'nombre_cap',
        'apellidos_cap',
        'rol_cap',
        'odi',
        'extintores',
        'difusion',
        'manejo_manual_carga_ma',
        'transtornos_musculo_esqueleticos',
        'primeros_auxilios',
        'manejo_sustancias_peligrosas',
        'almacenamiento_sustancias_peligrosas',
        'prevencion_exposicion_radiacion_uv',
        'uso_correcto_epp',
        'plan_emergencia',
        'control_riesgos_altura',
        'cuidado_manos',
        'orientacion_prevencion_riesgos',
        'prexor',
        'actitudes_preventivas',
        'uso_herramientas_electricas_y_motrices',
        'diploma',
        ];
}
