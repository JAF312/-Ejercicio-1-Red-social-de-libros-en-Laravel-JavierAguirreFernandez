<h1>Creación de usuario</h1>
<form action="/usuarios" method="POST">
    @csrf
<p>Nombre : <input type="text" name="name"></p>
@foreach($errors->get("name") as $error)
    <div>{{$error}} </div>
@endforeach

<p>Contraseña : <input type="text" name="password"></p>
@foreach($errors->get("email") as $error)
    <div>{{$error}} </div>
@endforeach
<input type="submit" value="Enviar">
@foreach($errors->get("password") as $error)
    <div>{{$error}} </div>
@endforeach
</form>
<!--
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}</li>
        @endforeach

    </ul>
@endif

<a href="/usuarios"><button> Volver</button></a>
-->