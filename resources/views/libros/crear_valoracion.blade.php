<h1>Valorar "{{ $libro->titulo }}"</h1>

<form action="/libros/{{ $libro->id }}/valoraciones" method="POST">
    @csrf

    <p>
        Puntuación (1-5):
        <input type="number" name="puntuacion" min="1" max="5"
               value="{{ old('puntuacion') }}" required>
    </p>
    @foreach($errors->get('puntuacion') as $error)
        <div>{{ $error }}</div>
    @endforeach

    <p>
        Comentario:<br>
        <textarea name="comentario" rows="4" cols="50">{{ old('comentario') }}</textarea>
    </p>
    @foreach($errors->get('comentario') as $error)
        <div>{{ $error }}</div>
    @endforeach

    <input type="submit" value="Enviar valoración">
</form>

<br>
<a href="/libros/{{ $libro->id }}"><button>Cancelar</button></a>