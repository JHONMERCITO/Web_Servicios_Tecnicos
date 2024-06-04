<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu aplicación</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Otros elementos del head -->
    <style>
/* Estilos para el cuerpo de la página */
body {
    margin: 0;
    padding: 0;
    background-color:#000000; /* Color de fondo de la barra de navegación */
}

/* Estilos para la barra de navegación */
nav {
    background-color: #031535; /* Color de fondo de la barra de navegación */
    padding: 20px 20px; /* Espaciado interno de la barra de navegación */
    margin: 0 auto; /* Eliminar el margen */
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 20px; 
    width: 100%; /* Ajustar la anchura al 100% */
    position: fixed; /* Fijar la barra de navegación en la parte superior */
    top: 0; /* Colocar la barra de navegación en la parte superior */
    left: 0; /* Alinear la barra de navegación a la izquierda */
    max-width: 1600px; /* Asegura que la barra de navegación no se desborde de la página */
    z-index: 1000; /* Ajusta el índice z para asegurarse de que la barra de navegación esté por encima del contenido */
    margin-bottom: 80px; /* Agrega un margen inferior para evitar la superposición con el contenido */
}


nav ul {
    list-style-type: none; /* Eliminar los estilos de lista predeterminados */
    margin: 0; /* Eliminar el margen exterior */
    padding: 0; /* Eliminar el relleno interior */
    display: flex; /* Mostrar los elementos en línea */
    justify-content: flex-end; /* Distribuir el espacio alrededor de los elementos */
    align-items: center; /* Centrar verticalmente los elementos */
}

nav ul li {
    margin-left: 60px; /* Reducir aún más el margen izquierdo */
}

nav ul li:last-child {
            margin-right: 0; /* Quitar margen derecho del último elemento */
        }


nav a {
    margin: 0;
    color: white; /* Color del texto de los enlaces */
    text-decoration: none; /* Elimina el subrayado predeterminado de los enlaces */
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, sans-serif;
    background-size: cover;
    background-position: center -250px;
    background-repeat: no-repeat;
}

nav a:hover {
    background-color: #555; /* Color de fondo al pasar el mouse sobre los enlaces */
}
nav a.boton {
    padding: 10px 20px; /* Espaciado interno del botón */
    background-color: #404850; /* Color de fondo del botón */
    color: white; /* Color del texto del botón */
    border: 2px solid #404850; /* Borde del botón */
    border-radius: 10px; /* Borde redondeado */
    transition: background-color 0.3s, color 0.3s; /* Transición suave al cambiar el color */
}

nav a.boton:hover {
    background-color: #0056b3; /* Cambiar color de fondo al pasar el mouse */
    color: #ffffff; /* Cambiar color del texto al pasar el mouse */
}
        nav ul li:last-child {
            margin-right: 0; /* Quitar margen derecho del último elemento */
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav>
        <!-- Colocar tu logo como una imagen -->
        <a href="{{ route('inicio') }}">
            <img src="{{ asset('Imagenes/logo1234.png') }}" alt="Logo" width="80" height="40">
        </a>
        <ul>
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('sobre-nosotros') }}">Sobre Nosotros</a></li>
            <li><a href="{{ route('galeria') }}">Galería</a></li>
            <li><a href="{{ route('soy-cliente') }}" class="boton">Soy Cliente</a></li>
            <li><a href="{{ route('soy-empleado') }}" class="boton">Soy Empleado</a></li>
        </ul>
    </nav>
    
    <div class="content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
