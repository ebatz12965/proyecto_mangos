<script setup>
import { ref } from 'vue';
import axios from 'axios';

// Definir variables reactivas para cada campo del formulario
const nombre_pedido = ref('');
const email_pedido = ref('');
const telefono_pedido = ref('');
const empresa_pedido = ref('');
const cantidad = ref('');
const tipo_fruta = ref('');
const destino_pedido = ref('');

// Función para manejar el envío del formulario
const submitForm = async () => {
    try {
        const response = await axios.post('/pedido', {
            nombre_pedido: nombre_pedido.value,
            email_pedido: email_pedido.value,
            telefono_pedido: telefono_pedido.value,
            empresa_pedido: empresa_pedido.value,
            cantidad: cantidad.value,
            tipo_fruta: tipo_fruta.value,
            destino_pedido: destino_pedido.value
        });
        alert('Pedido creado con éxito');
    } catch (error) {
        console.error(error);
        alert('Hubo un error al crear el pedido');
    }
};
</script>

<template>
    <div class="container-sm">
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
    </div>
</template>

<style scoped>

</style>
