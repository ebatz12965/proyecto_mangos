<script setup>

</script>

<template>
    <nav class="navbar navbar-expand-lg bg-white bg-opacity-50 p-3" style="position: fixed; top: 0; width: 100%; z-index: 1000;">
        <div class="container-fluid">
            <img src="/imagen/logo2.webp" class="img-fluid rounded-start img" alt="Mangos">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mangos">Mangos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pedido">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prueba">Prueba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/process">Procesos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style scoped>
img {
    width: 50px;
    height: 50px;
    object-fit: cover; /* Ajusta la imagen dentro del cuadro sin distorsionarla */
}
</style>
