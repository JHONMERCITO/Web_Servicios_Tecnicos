<!-- Incluye la barra de navegación desde el layout principal -->
@extends('layouts.app')
@section('content')
<style>
    .texto {
    margin-left: -150px; /* Mover el texto 20px hacia la izquierda */
}

</style>
    <div class="container">
        <div class="texto">
            <p>Encuentra</p>
            <p>Trabajadores con</p>
            <p>Trayectoria</p>
            <p class="subtitulo">Explora perfiles con habilidades y reseñas.</p>
            <a href="#" class="boton-empieza-ahora">¡Empieza ahora!</a>
        </div>
    </div>
    <!-- Imagen 3D -->
    <div class="imagen-3d">
        <img src="{{ asset('/Imagenes/foto1.jpg') }}" alt="Imagen 3D">
    </div>
@endsection
