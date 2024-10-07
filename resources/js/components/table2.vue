<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import modal3 from './modal3.vue';


const pruebas = ref([]); // Arreglo para almacenar los datos de la tabla

// Función para obtener los datos
const fetchPruebas = async () => {
    try {
        const response = await axios.get('/ruta-para-mostrar-pedido'); // Asegúrate de que la URL sea correcta
        pruebas.value = response.data; // Asigna los datos obtenidos al arreglo
    } catch (error) {
        console.error("Error al obtener datos:", error);
    }
};

onMounted(() => {
    fetchPruebas();
});

const editPrueba = (id) => {
    // Lógica para editar la prueba
    console.log('Edit prueba with ID:', id);
};

const deletePrueba = async (id) => {
    // Lógica para eliminar la prueba
    try {
        // Reemplaza la URL con la sintaxis correcta
        await axios.delete(`/pruebas/${id}`); // Usa `${id}` en lugar de `{id}`
        fetchPruebas(); // Actualiza la lista después de eliminar
    } catch (error) {
        console.error('Error deleting prueba:', error);
    }
};

const openEditModal = async (id) => {
    // Aquí llamas a la función que obtiene los detalles del pedido
    await obtenerDetallesPedido(id)
    showModal.value = true // Abre el modal
}

// Aquí debes incluir la función obtenerDetallesPedido
const obtenerDetallesPedido = async (id) => {
    try {
        const response = await axios.get(`/pruebas/${id}`)
        nombre_pedido.value = response.data.nombrePrueba
        id_pedido.value = id
    } catch (error) {
        alert('Error al obtener los detalles del pedido')
        console.error(error)
    }
}



// Obtener datos al montar el componente
onMounted(fetchPruebas);
</script>

<template>
    <div>
        <table class="table container-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de la Prueba</th>
                <th scope="col">Fecha de Creación</th>
                <th scope="col">Fecha de Actualización</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="prueba in pruebas" :key="prueba.id">
                <th scope="row">{{ prueba.id }}</th>
                <td>{{ prueba.nombrePrueba }}</td>
                <td>{{ prueba.created_at }}</td>
                <td>{{ prueba.updated_at }}</td>
                <td>
                    <button @click="openEditModal(prueba.id)" class="btn btn-primary btn-sm">Editar</button>
                    <button @click="deletePrueba(prueba.id)" class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            </tbody>
        </table>
        <Modal3 v-if="showModal" @close="showModal = false" />
    </div>
</template>

<style scoped>
/* Agrega estilos personalizados aquí si es necesario */
</style>
