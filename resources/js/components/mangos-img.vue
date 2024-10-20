<script setup>
// Aquí puedes agregar lógica adicional si la necesitas
</script>

<template>
    <div class="container-sm bg-white">
        <!-- Fila 1: Imagen a la izquierda, texto a la derecha -->
        <div class="row my-5 align-items-center">
            <div class="col-md-6">
                <img src="/imagen/mango-haden.webp" class="rounded custom-image" alt="Mango Haden">
            </div>
            <div class="col-md-6">
                <h2>Mango Haden</h2>
                <p>El mango Haden es una variedad de excelente calidad, con un sabor dulce y jugoso.</p>
            </div>
        </div>

        <!-- Fila 2: Imagen a la derecha, texto a la izquierda -->
        <div class="row my-5 align-items-center flex-row-reverse">
            <div class="col-md-6">
                <img src="/imagen/mango-tommy.webp" class="rounded custom-image" alt="Mango Tommy">
            </div>
            <div class="col-md-6">
                <h2>Mango Tommy</h2>
                <p>El mango Tommy es ideal para exportación, con una piel resistente y un sabor delicioso.</p>
            </div>
        </div>

        <!-- Fila 3: Imagen a la izquierda, texto a la derecha -->
        <div class="row my-5 align-items-center">
            <div class="col-md-6">
                <img src="/imagen/mango-ataulfo.webp" class="rounded custom-image" alt="Mango Ataulfo">
            </div>
            <div class="col-md-6">
                <h2>Mango Ataulfo</h2>
                <p>El mango Ataulfo tiene una textura cremosa y es uno de los más dulces entre las variedades.</p>
            </div>
        </div>

        <!-- Fila 4: Imagen a la derecha, texto a la izquierda (Mango Kent) -->
        <div class="row my-5 align-items-center flex-row-reverse">
            <div class="col-md-6">
                <img src="/imagen/mango-kent.webp" class="rounded custom-image" alt="Mango Kent">
            </div>
            <div class="col-md-6">
                <h2>Mango Kent</h2>
                <p>El mango Kent es apreciado por su pulpa suave, sin muchas fibras y un sabor exquisito.</p>
            </div>
        </div>

        <!-- Fila 5: Imagen a la izquierda, texto a la derecha (Mango Keitt) -->
        <div class="row my-5 align-items-center">
            <div class="col-md-6">
                <img src="/imagen/mango-keitt.webp" class="rounded custom-image" alt="Mango Keitt">
            </div>
            <div class="col-md-6">
                <h2>Mango Keitt</h2>
                <p>El mango Keitt es de tamaño grande y tiene un sabor refrescante, con un toque ligeramente ácido.</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.custom-image {
    width: 100%;
    max-width: 300px;
    height: auto;
    object-fit: cover; /* Ajusta la imagen sin distorsionarla */
}
.row {
    border-bottom: 1px solid #ddd; /* Línea separadora entre filas */
    padding-bottom: 20px;
}
</style>
