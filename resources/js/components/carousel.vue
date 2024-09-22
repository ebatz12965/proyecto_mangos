<script setup>

</script>

<template>
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
</template>

<style scoped>
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
</style>
