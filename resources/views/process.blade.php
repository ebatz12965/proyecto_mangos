<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Huerta del Mango</title>
    <script src="{{ asset('js/app.js') }}" async defer></script>
    <link rel="stylesheet" href={{asset('css/app.css')}} >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body class="bg-light">
<div id="app">
    <main>
        <encabezado1></encabezado1>
        <carrusel-img></carrusel-img>
    <br>
    <h1 class="text-center">CRUD</h1>
    <br><br>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Hacer un pedido
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Crear Pedido</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario -->
                        <form @submit.prevent="submitForm" class="row g-3" method="POST" :action="window.routes.pedidoStore">

                            @csrf
                            <div class="col-md-6">
                                <label for="nombre_pedido" class="form-label">Nombre del Pedido</label>
                                <input type="text" class="form-control" id="nombre_pedido" v-model="nombre_pedido">
                            </div>
                            <div class="col-md-6">
                                <label for="email_pedido" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email_pedido" v-model="email_pedido">
                            </div>
                            <div class="col-md-6">
                                <label for="telefono_pedido" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono_pedido" v-model="telefono_pedido">
                            </div>
                            <div class="col-md-6">
                                <label for="empresa_pedido" class="form-label">Empresa</label>
                                <input type="text" class="form-control" id="empresa_pedido" v-model="empresa_pedido">
                            </div>
                            <div class="col-md-6">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="cantidad" v-model="cantidad">
                            </div>
                            <div class="col-md-6">
                                <label for="tipo_fruta" class="form-label">Tipo de Fruta</label>
                                <input type="text" class="form-control" id="tipo_fruta" v-model="tipo_fruta">
                            </div>
                            <div class="col-md-12">
                                <label for="destino_pedido" class="form-label">Destino del Pedido</label>
                                <input type="text" class="form-control" id="destino_pedido" v-model="destino_pedido">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Crear Pedido</button>
                            </div>
                        </form>
                        <!--Fin Formulario-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


    <br><br>
    <h2>Tabla para CRUD</h2>
    <br>
    <table1></table1>
    <br>
        <pie-pagina></pie-pagina>
    </main>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</body>
</html>
