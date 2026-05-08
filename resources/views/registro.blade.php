

<h1>Crear cuenta</h1>

<form action="/registro" method="POST">
    @csrf

    <p>
        Nombre:
        <input type="text" name="name" value="{{ old('name') }}" required>
    </p>
    @foreach($errors->get('name') as $error)
        <div>{{ $error }}</div>
    @endforeach

    <p>
        Email:
        <input type="email" name="email" value="{{ old('email') }}" required>
    </p>
    @foreach($errors->get('email') as $error)
        <div>{{ $error }}</div>
    @endforeach

    <p>
        Contraseña:
        <input type="password" name="password" required>
    </p>
    @foreach($errors->get('password') as $error)
        <div>{{ $error }}</div>
    @endforeach

    <input type="submit" value="Registrarse">
</form>

<br>
<a href="/login"><button>¿Ya tienes cuenta? Inicia sesión</button></a>