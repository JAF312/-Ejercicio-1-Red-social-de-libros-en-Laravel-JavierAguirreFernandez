<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';     

    protected $fillable = [
        'titulo',
        'autor',
        'editorial',
        'anio',
        'isbn',
        'descripcion',
        'portada',
    ];

    // Un libro puede tener muchas valoraciones (1 a N)
    public function valoraciones()
    {
        return $this->hasMany(Valoracion::class);
    }

    // Calcula la media de puntuaciones de este libro
    public function promedioPuntuacion(): float
    {
        return round($this->valoraciones()->avg('puntuacion') ?? 0, 1);
    }
}