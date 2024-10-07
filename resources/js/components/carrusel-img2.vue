<script setup>

</script>

<template>
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
</template>

<style scoped>
.custom-carousel {
    width: 500px;
    height: 500px;
}

.custom-card {
    width: 500px;
    height: 500px;
}
.card-body a {
    color: white;
    text-decoration: underline;
}

.card-body a:hover {
    color: #f8f9fa; /* Color ligeramente más claro al pasar sobre el enlace */
}
</style>
