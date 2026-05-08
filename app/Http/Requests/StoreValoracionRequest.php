<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreValoracionRequest extends FormRequest
{
    // Solo usuarios autenticados pueden usar este formulario
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'puntuacion' => 'required|integer|min:1|max:5',
            'comentario' => 'nullable|string|max:1000',
        ];
    }

    // Mensajes de error en español
    public function messages(): array
    {
        return [
            'puntuacion.required' => 'La puntuación es obligatoria.',
            'puntuacion.integer'  => 'La puntuación debe ser un número entero.',
            'puntuacion.min'      => 'La puntuación mínima es 1.',
            'puntuacion.max'      => 'La puntuación máxima es 5.',
            'comentario.max'      => 'El comentario no puede superar los 1000 caracteres.',
        ];
    }
}