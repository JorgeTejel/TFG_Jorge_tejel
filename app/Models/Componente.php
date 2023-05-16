<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    use HasFactory;

    //Para relacionar ambas tablas
    public function marca() {
        return $this->belongsTo(Marca::class, 'marca_id', 'id');
    }
}
