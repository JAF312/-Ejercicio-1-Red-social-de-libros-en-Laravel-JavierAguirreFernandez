<h1>Perfil de usuarios</h1>

<ul>

    @foreach ($usuarios as $usuario)

        <li>
            <a href="usuarios/{{$usuario->id}}">
            {{$usuario->name}} ({{$usuario->email}})
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button><a href="usuarios/{{$usuario->id}}/editar">Editar usuario</a></button>
         <form action="/usuarios/{{ $usuario->id }}/eliminar" method="POST" style="display:inline">
             @csrf
             @method("DELETE")
            <button type="submit">Eliminar</button>
          </form>
        </li>
        @endforeach
</ul>  
<a href="/usuarios/crear"><button> Crear usuario</button></a>

