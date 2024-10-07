<script setup>
import { ref } from 'vue'
import axios from 'axios'

const nombre_pedido = ref('')
const modalVisible = ref(false) // Estado para controlar la visibilidad del modal

const enviarPedido = async () => {
    try {
        const response = await axios.post('/ruta-para-guardar-pedido', {
            nombrePrueba: nombre_pedido.value
        })
        alert('Pedido creado correctamente')
        modalVisible.value = false; // Cierra el modal después de crear el pedido
        nombre_pedido.value = ''; // Limpia el campo de entrada
    } catch (error) {
        alert('Hubo un error al crear el pedido')
        console.error(error)
    }
}

const toggleModal = () => {
    modalVisible.value = !modalVisible.value; // Alterna la visibilidad del modal
}
</script>

<template>
    <div>
        <!-- Botón para abrir el modal -->
        <button class="btn btn-success" @click="toggleModal">Crear Pedido</button>

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
                        <form @submit.prevent="enviarPedido">
                            <div class="mb-3">
                                <label for="nombre_pedido" class="form-label">Nombre del Pedido</label>
                                <input type="text" class="form-control" id="nombre_pedido" v-model="nombre_pedido" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" @click="toggleModal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Crear Pedido</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Asegúrate de que se muestre el modal al hacer clic -->
        <div v-if="modalVisible" class="modal-backdrop fade show"></div>
    </div>
</template>

<style scoped>
.modal {
    display: none; /* Inicialmente oculta */
}
.show {
    display: block; /* Muestra cuando está activo */
}
</style>
