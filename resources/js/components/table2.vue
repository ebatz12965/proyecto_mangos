<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Modal3 from './modal3.vue'; //importar modal3

// Arreglo para almacenar los datos de la tabla
const pruebas = ref([]);
const showModal = ref(false);
const id_pedido = ref(null);

// Función para obtener los datos
const fetchPruebas = async () => {
    try {
        const response = await axios.get('/ruta-para-mostrar-pedido');
        pruebas.value = response.data; // Asignación de los datos obtenidos al arreglo
    } catch (error) {
        console.error("Error al obtener datos:", error);
    }
};

const deletePrueba = async (id) => {
    // Lógica para eliminar la prueba
    try {
        await axios.delete(`/pruebas/${id}`); // Usa `${id}` en lugar de `{id}`
        fetchPruebas(); // Actualiza la lista después de eliminar
    } catch (error) {
        console.error('Error deleting prueba:', error);
    }
};



// Método para abrir el modal de edición
const openEditModal = async (id) => {
    id_pedido.value = id; // Pasar el ID al modal
    showModal.value = true; // Mostrar el modal
};


const toggleModal = () => {
    showModal.value = !showModal.value; // Alterna la visibilidad del modal
};

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
                <th scope="col">Acciones</th>
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

        <!-- Modal para editar -->
        <modal3 v-if="showModal" :id_pedido="id_pedido" :toggleModal="toggleModal" :showModal="showModal" />
    </div>
</template>

<style scoped>

</style>
