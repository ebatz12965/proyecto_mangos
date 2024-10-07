<script setup>
import { ref } from 'vue'
import axios from 'axios'

const nombre_pedido = ref('')
const id_pedido = ref(null)
const showModal = ref(false);


// Método para obtener los detalles del pedido al abrir el modal
const obtenerDetallesPedido = async (id) => {
    try {
        const response = await axios.get(`/pruebas/${id}`) // Ajusta la ruta si es necesario
        nombre_pedido.value = response.data.nombrePrueba
        id_pedido.value = id
    } catch (error) {
        alert('Error al obtener los detalles del pedido')
        console.error(error)
    }
}

// Método para actualizar el pedido
const actualizarPedido = async () => {
    try {
        await axios.put(`/pruebas/${id_pedido.value}`, {
            nombrePrueba: nombre_pedido.value
        })
        alert('Pedido actualizado correctamente')
    } catch (error) {
        alert('Hubo un error al actualizar el pedido')
        console.error(error)
    }
}

const openEditModal = async (id) => {
    await obtenerDetallesPedido(id);
    showModal.value = true; // Muestra el modal
};

</script>

<template>
    <div class="container-sm">
        <form class="row g-3" @submit.prevent="actualizarPedido">
            <div class="col-md-6">
                <label for="nombre_pedido" class="form-label">Nombre del Pedido</label>
                <input type="text" class="form-control" id="nombre_pedido" v-model="nombre_pedido">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Pedido</button>
            </div>
        </form>
    </div>
</template>

<style scoped>
</style>
