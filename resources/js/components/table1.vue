<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const pedidos = ref([]);

onMounted(async () => {
    try {
        //const response = await axios.get('/api/pedidos'); // Ruta que devolverá los datos de los pedidos
        const response = await axios.get('/ruta-mostrar-pedidos');
        pedidos.value = response.data; // Asignar la respuesta a la variable reactivas
    } catch (error) {
        console.error('Error al obtener los pedidos:', error);
    }
});
</script>

<template>
    <div class="container-sm">
        <h2>Lista de Pedidos</h2>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Empresa</th>
                <th>Cantidad</th>
                <th>Tipo de Fruta</th>
                <th>Destino</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(pedido, index) in pedidos" :key="pedido.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ pedido.nombre_pedido }}</td>
                <td>{{ pedido.email_pedido }}</td>
                <td>{{ pedido.telefono_pedido }}</td>
                <td>{{ pedido.empresa_pedido }}</td>
                <td>{{ pedido.cantidad }}</td>
                <td>{{ pedido.tipo_fruta }}</td>
                <td>{{ pedido.destino_pedido }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>
.container-sm {
    margin-top: 20px;
}
</style>
