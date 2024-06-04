@extends('layouts.app')

@section('content')
<div class="containeruni">
    <h1>Registro de Clientes</h1>
<style>
.containeruni {
    max-width: 400px; /* Ancho máximo del contenedor del formulario */
    margin: 0 auto; /* Centrar el formulario en la página */
    margin-top: 150px;
    color: #fff
}

.form-group {
    margin-bottom: 20px; /* Espacio entre grupos de formulario */
}

label {
    font-weight: bold; /* Hace que las etiquetas de formulario sean más prominentes */
}

input[type="text"],
input[type="email"],
input[type="tel"] {
    width: 100%; /* El ancho del campo de entrada ocupa todo el ancho disponible */
    padding: 10px; /* Espacio interno dentro del campo de entrada */
    border: 1px solid #ccc; /* Borde del campo de entrada */
    border-radius: 4px; /* Borde redondeado */
    box-sizing: border-box; /* El tamaño del borde incluye el relleno y el borde */
}

.btn-primary {
    background-color: #007bff; /* Color de fondo del botón */
    color: #fff; /* Color del texto del botón */
    padding: 10px 20px; /* Espacio interno del botón */
    border: none; /* Elimina el borde del botón */
    border-radius: 4px; /* Borde redondeado del botón */
    cursor: pointer; /* Cambia el cursor al pasar el ratón sobre el botón */
}

.btn-primary:hover {
    background-color: #0056b3; /* Cambia el color de fondo cuando se pasa el ratón sobre el botón */
}



</style>
    <!-- Mensaje de éxito -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Mensajes de error de validación -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('cliente.registrar') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection