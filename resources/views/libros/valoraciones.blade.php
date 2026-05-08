<h1>Valoraciones de "{{ $libro->titulo }}"</h1>

@if ($valoraciones->isEmpty())
    <p>Aún no hay valoraciones para este libro.</p>
@else
    <ul>
        @foreach ($valoraciones as $valoracion)
            <li>
                <a href="/libros/{{ $libro->id }}/valoraciones/{{ $valoracion->id }}">
                    ⭐ {{ $valoracion->puntuacion }}/5
                    por <strong>{{ $valoracion->user->name }}</strong>
                </a>
                — {{ Str::limit($valoracion->comentario, 80) }}
            </li>
        @endforeach
    </ul>
@endif

<a href="/libros/{{ $libro->id }}/valoraciones/crear">
    <button>Añadir mi valoración</button>
</a>
&nbsp;
<a href="/libros/{{ $libro->id }}"><button>Volver al libro</button></a>