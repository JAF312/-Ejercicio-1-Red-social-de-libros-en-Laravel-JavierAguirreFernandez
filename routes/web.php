<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    $nombre = "Javier";
    return view('hola', [
        "nombre" => $nombre
    ]);
});

Route::get('/hola/{nombre}', function ($nombre) {
    
    return view('hola', [
        "nombre" => $nombre
    ]);
});

use App\Models\User;


Route::get('/usuarios', function () {
    $usuarios = User::all();
    return view('usuarios', [
        "usuarios"=>$usuarios
    ]);
});


Route::get('/usuarios/crear', function () {
    return view('usuario_crear ');
});

Route::get('/usuarios/{id}/editar', function ($id) {
    $usuario = User::findOrFail($id);

    return view('usuario_editar', [
        "usuario"=>$usuario
    ]);
});


Route::get('/usuarios/{id}', function ($id) {
    $usuario = User::find($id);
    return view('usuario', [
        "usuario"=>$usuario
    ]);
});



use Illuminate\Http\Request;

Route::post('/usuarios', function (Request $request) {
   
    $request->validate([
        "name" => "required|min:4|max:20",
        "email" => "required|email|unique:users,email",
        "password" =>  "required|min:4"
    ]);

    User::create([
        "name" => $request->name,
        "email" => $request->email,
        "password" => bcrypt($request->password)
    ]);

    return redirect("/usuarios");
});


Route::put('/usuarios/{id}', function (Request $request, $id) {
     $request->validate([
        "name" => "required|min:4|max:20",
        "email" => "required|email|unique:users,email," . $id,
        "password" =>  "nullable|min:4"
    ]);

        $user = User::findOrFail($id);

        $usuario->name= $request->name;
        $usuario->email= $request->email;

        if($request->password){
            $usuario->password = bcrypt($request->password);
        }

        $usuario->save();
/*
$user->update([
    "name" => $request->name,
    "email" => $request->email,
    "password" => bcrypt($request->password)
]);
*/


    return redirect("usuarios/$id");
});


Route::delete('/usuarios/{id}/eliminar', function ($id) {
    $usuario = User::findOrFail($id);

    $usuario->delete();
    
    return redirect("usuarios");    
});


use Illuminate\Support\Facades\Auth;

// Mostrar formulario de login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Procesar el login
Route::post('/login', function (Request $request) {
    $credenciales = $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credenciales)) {
        $request->session()->regenerate();
        return redirect('/libros');
    }

    return back()->withErrors([
        'email' => 'Las credenciales no son correctas.',
    ]);
});

// Cerrar sesión
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
});
Route::get('/registro', function () {
    return view('registro');
});

// Procesar el registro
Route::post('/registro', function (Request $request) {
    $request->validate([
        'name'     => 'required|min:4|max:20',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:4',
    ]);

    $usuario = User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => bcrypt($request->password),
    ]);

    Auth::login($usuario); // lo logueamos directamente tras registrarse
    return redirect('/libros');
});

use App\Http\Controllers\LibroController;

Route::middleware('auth')->group(function () {

    Route::get('/libros',                               [LibroController::class, 'index'])           ->name('libros.index');
    Route::get('/libros/{id}',                          [LibroController::class, 'show'])            ->name('libros.show');
    Route::get('/libros/{id}/valoraciones',             [LibroController::class, 'valoraciones'])    ->name('libros.valoraciones');

    Route::get('/libros/{id}/valoraciones/crear',       [LibroController::class, 'crearValoracion']) ->name('libros.valoraciones.crear');
    Route::post('/libros/{id}/valoraciones',            [LibroController::class, 'storeValoracion']) ->name('libros.valoraciones.store');
    Route::get('/libros/{id}/valoraciones/{vid}',       [LibroController::class, 'showValoracion'])  ->name('libros.valoraciones.show');

});
