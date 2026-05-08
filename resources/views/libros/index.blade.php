<h1>Listado de libros</h1>

<ul>
    @foreach ($libros as $libro)
        <li>
            <a href="/libros/{{ $libro->id }}">
                <strong>{{ $libro->titulo }}</strong> — {{ $libro->autor }}
            </a>
            &nbsp;&nbsp;
            <a href="/libros/{{ $libro->id }}/valoraciones">
                <button>Ver valoraciones (⭐ {{ $libro->promedioPuntuacion() }})</button>
            </a>
        </li>
    @endforeach
</ul>
<form action="/logout" method="POST" style="display:inline">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>