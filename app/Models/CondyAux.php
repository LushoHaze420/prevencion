<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class CondyAux extends Model
{
    //use HasFactory;
    use HasTimestamps;

    protected $table='condyaux';
    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable=[
        'nombre_prev',
        'rut_cap',
        'nombre_cap',
        'apellidos_cap',
        'rol_cap',
        'odi',//General, presente en section en formulario base
        'extintores',//General, presente en section
        'difusion',//General, presente en section
        'manejo_defensiva',
        'riesgos_criticos_conduccion_buses',
        'reinduccion_exceso_velocidad',
        'campaña_exceso_velocidad',
        'conduccion_segura_alta_montaña',
        'control_riesgos_conduccion',
        'manejo_defensiva_autopistas_carreteras',
        'control_riesgos_fatiga_somnolencia_conduccion',
        'reinduccion_manejo_defensiva',
        'manejo_manual_cargas',
        'curso_teorico_practico_conduccion_simulador',
        'promocion_salud',
        'diploma', //General, presente en section
        ];
}
