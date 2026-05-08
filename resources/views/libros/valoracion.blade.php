<h1>Valoración de "{{ $libro->titulo }}"</h1>

<p><strong>Usuario:</strong> {{ $valoracion->user->name }}</p>
<p><strong>Puntuación:</strong> ⭐ {{ $valoracion->puntuacion }}/5</p>
<p><strong>Comentario:</strong> {{ $valoracion->comentario ?? 'Sin comentario.' }}</p>
<p><strong>Fecha:</strong> {{ $valoracion->created_at->format('d/m/Y') }}</p>

<a href="/libros/{{ $libro->id }}/valoraciones">
    <button>Volver a valoraciones</button>
</a>