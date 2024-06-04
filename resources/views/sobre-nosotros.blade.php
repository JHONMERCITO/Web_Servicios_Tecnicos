<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Incluye Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el cuerpo del documento */
        body {
            font-family: Arial, sans-serif; /* Fuente del texto */
            line-height: 1.6; /* Altura de línea */
            margin: 0; /* Elimina el margen exterior */
            padding: 0; /* Elimina el relleno */
            background-color: #f8f9fa; /* Color de fondo */
            color: #212221; /* Color del texto */
        }

        /* Estilo para los contenedores */
        .container {
            margin: 80px auto; /* Centrar horizontalmente */
            padding: 0; /* Relleno a los lados */
            color:#333
        }
        .content {
    margin-top: 80px; /* Ajusta el margen superior para evitar la superposición con la barra de navegación */
    /* Otros estilos para el contenido si es necesario */
}



        /* Estilo para los párrafos */
        p {
            margin-bottom: auto; /* Margen inferior */
        }

        /* Estilo para las imágenes */
        img {
            max-width: 100%; /* Ancho máximo */
            height: auto; /* Altura automática para mantener la proporción */
            border-radius: 10px; /* Borde redondeado */
        }

        /* Estilo para el pie de página */
        footer {
            background-color: #343a40; /* Color de fondo */
            color: #fff; /* Color del texto */
            text-align: center; /* Centrar texto */
            padding: 20px 0; /* Relleno superior e inferior */
        }

        /* Estilo para los enlaces en el pie de página */
        footer a {
            color: #343a40; /* Color del texto */
            text-decoration: none; /* Eliminar subrayado */
            margin: 0 10px; /* Margen izquierdo y derecho */
        }


    </style>
</head>
<body>
    <!-- Incluye la barra de navegación desde el layout principal -->
    @extends('layouts.app')
    @section('content')

    <header class="py-5 custom-header">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">Sobre Nosotros</h1>
                    <p class="lead fw-normal text-muted mb-4">Bienvenido a Skill Sync, nos dedicamos a conectar trabajadores de oficio altamente calificados con clientes que necesitan sus servicios. En Skill Sync, creemos en la importancia de la calidad, la confiabilidad y la satisfacción del cliente. Nos esforzamos por proporcionar una experiencia sin complicaciones, donde los clientes puedan encontrar fácilmente a los trabajadores de oficio adecuados para sus necesidades, y donde los trabajadores puedan mostrar sus habilidades y conectar con clientes potenciales.</p>
                </div>
            </div>
        </div>
    </div>
</header>


    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="Imagenes/quehacemos.jpg" alt="Imagen Que Hacemos" style="width: 100%;">
                </div>
                <div class="col-md-6">
                    <h2>¿Qué hacemos?</h2>
                    <p class="lead fw-normal text-muted mb-4">En Skill Sync, nos apasiona facilitar la conexión entre trabajadores de oficio altamente calificados y clientes que buscan sus servicios. Nuestra plataforma actúa como un puente que une la habilidad y la demanda, permitiendo a los clientes encontrar fácilmente a los profesionales adecuados para sus necesidades, ya sea reparaciones domésticas, proyectos de construcción, mantenimiento de jardines, entre otros.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="Imagenes/plomero.jpg" alt="Imagen Sobre Nosotros" style="width: 100%;">
                </div>
                <div class="col-md-6">
                    <h2 style="color: #333; ">Nuestra Misión</h2>
                    <p class= "lead">En Skill Sync, nuestra misión es transformar la forma en que los clientes y los trabajadores de oficio se conectan. Nos dedicamos a proporcionar una plataforma eficiente y confiable que facilite el encuentro entre la demanda de servicios de calidad y los profesionales calificados que pueden satisfacer esa demanda.</p>
                <p class="lead">Creemos en la importancia de:</p>
                <ul class="lead">
                    <li><strong>Calidad</strong></li>
                    <li><strong>Confiabilidad</strong> </li>
                    <li><strong>Satisfacción del Cliente</strong> </li>
                    <li><strong>Apoyo a los Trabajadores</strong> </li>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="imagen3.jpg" alt="...">
            </div>
            <div class="col-md-6">
                <h2 style="color: #b6b6b6;">Nuestra Visión</h2>
                <p style="color: #b6b6b6;" class="lead">Aspiramos a ser reconocidos como el referente en el cuidado de mascotas, creando una comunidad donde cada animal se sienta amado, seguro y feliz. Buscamos inspirar a otros a adoptar prácticas responsables y a cultivar relaciones profundas y significativas con sus mascotas.</p>
            </div>
        </div>
    </div>
</section>




    <section class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="imagen4.jpg" alt="...">
                </div>
                <div class="col-md-6">
                    <h2>Nuestra Historia</h2>
                    <p class="lead">La historia de CityPetCare comenzó como un proyecto emocionante en las aulas universitarias. Dos apasionadas amantes de los animales, Bianca y Denisse, se unieron con la visión de crear un impacto positivo en la vida de las mascotas y sus dueños.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection
