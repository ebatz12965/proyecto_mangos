<script setup>

</script>

<template>
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
</template>

<style scoped>
.custom-image {
    width: 300px;
    height: 300px;
    object-fit: cover; /* Mantiene la imagen dentro del cuadro sin distorsionarla */
}

.custom-text {
    font-size: 1.2rem; /* Tamaño del texto más grande */
}
</style>
