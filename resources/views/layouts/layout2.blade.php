<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgroFruit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Establece la altura del contenedor para mostrar solo la mitad de la imagen */
        .carousel-inner {
            height: 50vh; /* 50% de la altura de la ventana gráfica */
            overflow: hidden; /* Oculta el contenido que se sale de esta altura */
        }

        /* Asegura que las imágenes mantengan su ancho y se centren */
        .carousel-item img {
            object-fit: cover; /* Ajusta la imagen para que cubra todo el ancho */
            height: 100%; /* Asegura que la imagen llene el contenedor */
            width: 100%;
        }

        .custom-image {
            width: 300px;
            height: 300px;
            object-fit: cover; /* Mantiene la imagen dentro del cuadro sin distorsionarla */
        }

        .custom-text {
            font-size: 1.2rem; /* Tamaño del texto más grande */
        }

        .custom-carousel {
            width: 500px;
            height: 500px;
        }

        .custom-carousel img {
            object-fit: cover; /* Asegura que las imágenes llenen el espacio del carrusel sin distorsionarse */
            width: 100%;
            height: 100%;
        }

        .custom-card {
            width: 500px;
            height: 500px;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            height: 100%;
        }

        .custom-container {
            background-image: url('/public/imagen/img2.jpg'); /* Cambia esta ruta por la ubicación de tu imagen */
            background-size: cover; /* Asegura que la imagen cubra todo el contenedor */
            background-position: center; /* Centra la imagen de fondo */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
            height: 100vh; /* Asegura que el contenedor cubra toda la altura de la ventana */
        }

        .contact-card {
            background-color: #6DB744;
            color: white;
            margin-top: 20px; /* Espacio superior para separar del contenido anterior */
        }

        .card-body a {
            color: white;
            text-decoration: underline;
        }

        .card-body a:hover {
            color: #f8f9fa; /* Color ligeramente más claro al pasar sobre el enlace */
        }
    </style>
</head>
<body class="bg-light">
<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-white bg-opacity-50 p-3" style="position: fixed; top: 0; width: 100%; z-index: 1000;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mango</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Procesos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/imagen/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/imagen/img2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/imagen/img3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

<!-- texto -->
<br>
<div class="container">
<h1 class="text-center">Bienvenidos a AgroFruit, S.A.</h1>
    <p class="text-center">Somos una empresa líder, especializada en la producción, empaque y exportación de mango con la disposición de
        <br>ofrecer en Guatemala y al resto del Mundo nuestras variedades de Mango de la más alta calidad, cumpliendo los
        <br>requisitos de sanidad y calidad que nuestros clientes y consumidores necesitan</p>
</div>

<!-- imagenes -->
<br>
<div class="container-sm bg-light d-flex justify-content-between align-items-center p-3">
    <div class="text-center">
        <img src="/imagen/img4.webp" class="rounded custom-image" alt="...">
        <p class="mt-2 custom-text">Mango de la mejor calidad</p>
        <p class="mt-0">Manejamos 5 variedades de Mango que son: <br>
            Haden, Tommy, Ataulfo, Kent y Keitt</p>
    </div>

    <div class="text-center">
        <img src="/imagen/img5.webp" class="rounded custom-image mx-3" alt="...">
        <p class="mt-2 custom-text">Empacadora</p>
        <p class="mt-0">Nuestros procesos están equipados con <br>
            maquinaria especializada</p>
    </div>

    <div class="text-center">
        <img src="/imagen/img6.webp" class="rounded custom-image" alt="...">
        <p class="mt-2 custom-text">Aguacate Hass</p>
        <p class="mt-0">Contamos con producción de aguacate tipo HASS</p>
    </div>
</div>
<!--container class="container-sm">
    <table>
        <tr>
            <td>
                <img src="/imagen/img4.webp" class="rounded float-start custom-image" alt="...">
            </td>
            <td>
                <img src="/imagen/img5.webp" class="rounded mx-auto d-block custom-image" alt="...">
            </td>
            <td>
                <img src="/imagen/img6.webp" class="rounded float-end custom-image" alt="...">
            </td>
        </tr>
    </table>
</container-->

<!-- carousel y datos -->
<div class="container d-flex justify-content-between align-items-center p-4 bg-black">
    <!-- Carousel -->
    <div id="carouselExampleControlsNoTouching" class="carousel slide custom-carousel" data-bs-touch="false" style="width: 500px; height: 500px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/imagen/img1.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/imagen/img2.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/imagen/img3.jpg" class="d-block w-100 h-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Info Card -->
    <div class="card custom-card" style="width: 500px; height: 500px;">
        <div class="card-body">
            <h5 class="card-title">Título de la tarjeta</h5>
            <p class="card-text">Aquí puedes agregar una breve descripción o información relevante.</p>
            <a href="#" class="btn btn-primary">Ir a algún lugar</a>
        </div>
    </div>
</div>
<br>

<!-- tarjeta de contacto y dirección -->
<container>
    <div class="card contact-card" style="width: 100%; background-color: #6DB744; color: white;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="Mangos">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">AgroFruit Izabal, S.A. ©2024</h5>
                    <p class="card-text">
                        4a. Avenida, entre 12a y 13a Calle, Puerto Barrios, Izabal<br>
                        Tel: (+502) 4071-8171<br>
                        <a href="#" style="color: white;">Aviso de Privacidad</a> | Desarrollado por: Edwing Batz
                    </p>
                </div>
            </div>
        </div>
    </div>
</container>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
