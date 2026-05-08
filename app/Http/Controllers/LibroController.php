<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Valoracion;
use App\Http\Requests\StoreValoracionRequest;

class LibroController extends Controller
{
    // GET /libros — muestra todos los libros
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    // GET /libros/{id} — muestra un libro concreto
    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    // GET /libros/{id}/valoraciones — lista valoraciones de un libro
    public function valoraciones($id)
    {
        $libro = Libro::findOrFail($id);
        // with('user') carga el usuario de cada valoración en una sola consulta
        $valoraciones = $libro->valoraciones()->with('user')->get();
        return view('libros.valoraciones', compact('libro', 'valoraciones'));
    }

    // GET /libros/{id}/valoraciones/{vid} — detalle de una valoración
    public function showValoracion($id, $vid)
    {
        $libro = Libro::findOrFail($id);
        $valoracion = Valoracion::where('libro_id', $id)->findOrFail($vid);
        return view('libros.valoracion', compact('libro', 'valoracion'));
    }

    // GET /libros/{id}/valoraciones/crear — formulario nueva valoración
    public function crearValoracion($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.crear_valoracion', compact('libro'));
    }

    // POST /libros/{id}/valoraciones — guarda la valoración
    public function storeValoracion(StoreValoracionRequest $request, $id)
    {
        // La validación ya ocurrió en StoreValoracionRequest
        Libro::findOrFail($id); // nos aseguramos de que el libro existe

        Valoracion::create([
            'user_id'    => auth()->id(), // el usuario logueado actual
            'libro_id'   => $id,
            'puntuacion' => $request->puntuacion,
            'comentario' => $request->comentario,
        ]);

        return redirect("/libros/{$id}/valoraciones");
    }
}