<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapAdministrativos extends Model
{
    use HasFactory;

    protected $fillable = [
        'odi_ad',
        'extintores_ad',
        'difusion_ad',
        'primeros_auxilios_ad',
        'tmert_ad',
        'diploma_ad',
    ];

    public function capacitados()
    {
        return $this->hasMany(Capacitados::class);
    }
}
