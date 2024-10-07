<script setup>
import { ref, defineProps } from 'vue';
import axios from 'axios';

const props = defineProps(['showModal', 'toggleModal', 'id_pedido']); // Recibe props
const nombre_pedido = ref('');

// Método para obtener los detalles del pedido al abrir el modal
const obtenerDetallesPedido = async () => {
    try {
        const response = await axios.get(`/pruebas/${props.id_pedido}`); // Obtener detalles de la prueba por id
        nombre_pedido.value = response.data.nombrePrueba; // Asignar el nombrePrueba al input
    } catch (error) {
        console.error('Error al obtener los detalles del pedido:', error);
    }
};

// Método para actualizar el pedido
const actualizarPedido = async () => {
    try {
        await axios.put(`/pruebas/${props.id_pedido}`, { nombrePrueba: nombre_pedido.value });
        alert('Pedido actualizado correctamente');
        toggleModal(); // Cerrar el modal después de actualizar
    } catch (error) {
        alert('Hubo un error al actualizar el pedido');
        console.error(error);
    }
};

//`obtenerDetallesPedido` cuando el modal se abre
obtenerDetallesPedido();
</script>

<template>
    <div>
        <!-- Modal de Bootstrap -->
        <div class="modal fade" :class="{ show: showModal }" style="display: showModal ? 'block' : 'none'" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Pedido</h5>
                        <button type="button" class="close" @click="toggleModal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="actualizarPedido">
                            <div class="mb-3">
                                <!-- Mostrar el valor actual del pedido en el input -->
                                <label for="nombre_pedido" class="form-label">Nombre del Pedido</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nombre_pedido"
                                    v-model="nombre_pedido"
                                    required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" @click="toggleModal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Actualizar Pedido</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="showModal" class="modal-backdrop fade show"></div>
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
