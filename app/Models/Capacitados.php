<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitados extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut_cap',
        'nombre_cap',
        'apellidos_cap',
        'cargo_cap',
        'departamento_id',
    ];

    public function departamentos()
    {
        return $this->belongsTo(Departamentos::class);
    }
}
