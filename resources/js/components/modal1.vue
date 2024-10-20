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
const modalVisible = ref(false); // Estado para controlar la visibilidad del modal

// Función para manejar el envío del formulario
const submitForm = async () => {
    try {
        await axios.post('/pedido', {
            nombre_pedido: nombre_pedido.value,
            email_pedido: email_pedido.value,
            telefono_pedido: telefono_pedido.value,
            empresa_pedido: empresa_pedido.value,
            cantidad: cantidad.value,
            tipo_fruta: tipo_fruta.value,
            destino_pedido: destino_pedido.value,
        });
        alert('Pedido creado con éxito');
        modalVisible.value = false; // Cierra el modal después de enviar
        // Limpia los campos del formulario
        nombre_pedido.value = '';
        email_pedido.value = '';
        telefono_pedido.value = '';
        empresa_pedido.value = '';
        cantidad.value = '';
        tipo_fruta.value = '';
        destino_pedido.value = '';
    } catch (error) {
        console.error(error);
        alert('Hubo un error al crear el pedido');
    }
};

// Función para abrir y cerrar el modal
const toggleModal = () => {
    modalVisible.value = !modalVisible.value;
};
</script>

<template>
    <div>
        <!-- Botón para abrir el modal -->
        <button class="btn btn-primary" @click="toggleModal">Hacer un pedido</button>

        <!-- Modal de Bootstrap -->
        <div class="modal fade" :class="{ show: modalVisible }" style="display: modalVisible ? 'block' : 'none'" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Crear Pedido</h5>
                        <button type="button" class="close" @click="toggleModal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario -->
                        <form @submit.prevent="submitForm" class="row g-3">
                            <div class="col-md-6">
                                <label for="nombre_pedido" class="form-label">Nombre del Pedido</label>
                                <input type="text" class="form-control" id="nombre_pedido" v-model="nombre_pedido" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email_pedido" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email_pedido" v-model="email_pedido" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telefono_pedido" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono_pedido" v-model="telefono_pedido" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empresa_pedido" class="form-label">Empresa</label>
                                <input type="text" class="form-control" id="empresa_pedido" v-model="empresa_pedido" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="cantidad" v-model="cantidad" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tipo_fruta" class="form-label">Tipo de Fruta</label>
                                <input type="text" class="form-control" id="tipo_fruta" v-model="tipo_fruta" required>
                            </div>
                            <div class="col-md-12">
                                <label for="destino_pedido" class="form-label">Destino del Pedido</label>
                                <input type="text" class="form-control" id="destino_pedido" v-model="destino_pedido" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Crear Pedido</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" @click="toggleModal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Para mostrar el modal al hacer click -->
        <div v-if="modalVisible" class="modal-backdrop fade show"></div>
    </div>
</template>

<style scoped>
.modal {
    display: none;
}
.show {
    display: block;
}
</style>
