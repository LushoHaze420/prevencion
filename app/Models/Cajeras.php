<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps; //para mostrar el timestamp

class Cajeras extends Model
{
    //use HasFactory;
    use HasTimestamps;

    protected $table='cajeras';
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
        'atencion_publico',
        'tmertc',
        'diploma',//General
        ];
}
