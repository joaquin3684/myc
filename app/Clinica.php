<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $table = 'cartilla';
    protected $fillable = ['nombre', 'telefono', 'direccion', 'especialidades', 'zona', 'tipo', 'latitude', 'longitude'];
}
