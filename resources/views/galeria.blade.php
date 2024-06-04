@extends('layouts.app')
@section('content')
    <!-- Estilos personalizados -->
    <style>
        /* Estilos para la galería */
        /* Estilos para la galería */
.container1 {
    margin-top: 180px; /* Ajustar el margen superior para evitar que el contenido se superponga a la barra de navegación */
    text-align: 300px;
    font-size: 26px;
    color: white;
    background-repeat: no-repeat;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, sans-serif;
    margin-left: 20px; /* Ajuste de margen izquierdo para alejar del borde */
    font-weight: 300; /* Tipo de letra más delgado */
    max-width: 1500px; /* Ancho máximo para limitar el ancho de la frase */
    font-size: 25px; 
        }
.gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; /* Centrar horizontalmente */
  margin-top: 20px; /* Ajusta el margen según sea necesario */
 
}

.gallery-item {
  margin: 10px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); /* Efecto de sombra para cada imagen */
}

.gallery-item img {
  width: 300px; /* Ajusta el tamaño de las imágenes según sea necesario */
  height: 200px;
  object-fit: cover; /* Para ajustar la imagen dentro del contenedor */
  border-radius: 5%;
}
        /* Estilos para Lightbox */
        .lightboxOverlay {
            background-color: rgba(0, 0, 0, 0.8) !important;
        }
        /* Agrega más estilos según sea necesario */
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    @include('layouts.app')
    <div class="container1">
    <h1>Galería de Trabajos</h1>
    <p>Aquí puedes ver algunos de los trabajos realizados por nuestros profesionales.</p>
    <div class="gallery">
      <div class="gallery-item">
        <img src="Imagenes/carpintero.jpg" alt="Descripción de la imagen 1">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/plomero.jpg" alt="Descripción de la imagen 2">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/electricista.jpg" alt="Descripción de la imagen 3">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/casa.jpeg" alt="Descripción de la imagen 4">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/cortador.jpg" alt="Descripción de la imagen 5">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/mecanico.jpg" alt="Descripción de la imagen 6">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/plomero2.jpg" alt="Descripción de la imagen 7">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/fontanero.jpeg" alt="Descripción de la imagen 8">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/zapatero.jpg" alt="Descripción de la imagen 9">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/costurero.jpg" alt="Descripción de la imagen 10">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/mecanico2.jpg" alt="Descripción de la imagen 11">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/soldador.jpeg" alt="Descripción de la imagen 12">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/albañil.jpeg" alt="Descripción de la imagen 12">*
      </div>
      <div class="gallery-item">
        <img src="Imagenes/trabajador.jpg" alt="Descripción de la imagen 13">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/elec.jpg" alt="Descripción de la imagen 14">
      </div>
      <div class="gallery-item">
        <img src="Imagenes/meca.jpg" alt="Descripción de la imagen 15">
      </div>
      

    <!-- Scripts de Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>
</html>
