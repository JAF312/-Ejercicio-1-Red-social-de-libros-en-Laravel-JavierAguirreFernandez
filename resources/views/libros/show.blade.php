<h1>{{ $libro->titulo }}</h1>

<p><strong>Autor:</strong> {{ $libro->autor }}</p>
<p><strong>Editorial:</strong> {{ $libro->editorial }}</p>
<p><strong>Año:</strong> {{ $libro->anio }}</p>
<p><strong>ISBN:</strong> {{ $libro->isbn }}</p>
<p><strong>Descripción:</strong> {{ $libro->descripcion }}</p>
<p><strong>Puntuación media:</strong> ⭐ {{ $libro->promedioPuntuacion() }}</p>

<a href="/libros/{{ $libro->id }}/valoraciones">
    <button>Ver valoraciones</button>
</a>
&nbsp;
<a href="/libros/{{ $libro->id }}/valoraciones/crear">
    <button>Añadir valoración</button>
</a>
&nbsp;
<a href="/libros"><button>Volver al listado</button></a>