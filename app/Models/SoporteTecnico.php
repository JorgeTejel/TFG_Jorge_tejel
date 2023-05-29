<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoporteTecnico extends Model
{
    protected $table = 'soporteTecnico';

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'fecha',
        'error',
    ];
}
