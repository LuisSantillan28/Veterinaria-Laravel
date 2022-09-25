<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animales extends Model
{
    protected $primaryKey = 'idAnimal';
    use HasFactory;
    protected $fillable = [
        'animal',
        'nombre',
        'tipo',
        'edad',
        'descripcion'
    ];
    use HasFactory;
}
