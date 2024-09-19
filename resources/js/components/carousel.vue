<script setup>

</script>

<template>
    <div class="container-fluid">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/imagen/imagen2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/imagen/imagen3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/imagen/imagen2.webp" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    </div>
</template>

<style scoped>
.custom-container {
    width: 100%;          /* Flexible a lo largo, toma todo el ancho disponible */
    max-height: 300px;     /* Altura máxima del contenedor */
           /* Ajusta la altura según el contenido */
        /* Permitir scroll vertical si el contenido excede la altura máxima */
    background-color: #f0f0f0;
    padding: 20px;
    box-sizing: border-box; /* Asegura que padding y borde no afecten el ancho */
}

</style>
