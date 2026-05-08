<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    public function run(): void
    {
        // El CSV debe estar en database/seeders/libros.csv
        $archivo = fopen(database_path('seeders/libros.csv'), 'r');

        // La primera línea del CSV son las cabeceras
        $cabeceras = fgetcsv($archivo, 0, ';');

        while (($fila = fgetcsv($archivo, 0, ';')) !== false) {
            $datos = array_combine($cabeceras, $fila);

            DB::table('libros')->insert([
                'titulo'      => $datos['titulo']      ?? null,
                'autor'       => $datos['autor']       ?? null,
                'editorial'   => $datos['editorial']   ?? null,
                'anio'        => $datos['anio']        ?? null,
                'isbn'        => $datos['isbn']        ?? null,
                'descripcion' => $datos['descripcion'] ?? null,
                'portada'     => $datos['portada']     ?? null,
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }

        fclose($archivo);
    }
}