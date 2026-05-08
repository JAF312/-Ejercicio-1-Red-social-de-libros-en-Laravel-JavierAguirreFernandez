<h1>Iniciar sesión</h1>

<form action="/login" method="POST">
    @csrf

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

    <input type="submit" value="Entrar">
</form>

<br>
<a href="/registro"><button>¿No tienes cuenta? Regístrate</button></a>