<script setup>

</script>

<template>
    <table class="table container" style="table-layout: fixed; width: 100%;">
        <tbody>
        <tr>
            <!-- Primera columna más estrecha -->
            <td style="width: 20%;">
                <h2>¿Desea mayor<br>
                    información?</h2>
                <br>
                <p>Llene el siguiente formulario <br>
                    y nos pondremos en contacto <br>
                    con usted y su empresa</p>
                <br>
                <img class="img-fluid" src="/imagen/contacto.webp" alt="">
            </td>
            <!-- Columna central más ancha -->
            <td style="width: 60%;">
                <form >
                    <div class="mb-3 align-content-center">
                        <label for="exampleFormControlInput1" class="form-label">Su nombre (requerido)</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: Juan Carlos López">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Su e-mail (requerido)</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="juan.lopez@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Empresa, S.A.">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Su nombre (requerido)</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Su mensaje</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
            </td>
            <!-- Tercera columna más estrecha -->
            <td style="width: 20%;">
                <h2 class="text-center">Dirección</h2>
                <br>
                <p>
                    <strong>La Huerta del Mango</strong><br>
                    4a. Avenida, entre 12a y 13a Calle, <br>
                    Puerto Barrios, Izabal
                    <br>
                </p>
                <p>
                    <i class="fas fa-phone-alt"></i> Tel: (+502) 4071-8171<br>
                    <i class="fas fa-envelope"></i> contacto@huertamango.com<br>
                    <i class="fas fa-link"></i> www.lahuertamango.com
                </p>
            </td>
        </tr>
        </tbody>
    </table>

</template>

<style scoped>
img {
    width: 150px;
    height: 200px;
    object-fit: cover; /* Ajusta la imagen dentro del cuadro sin distorsionarla */
}
</style>
