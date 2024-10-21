<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const usuarios = ref([]);
const editModal = ref(false);
const usuarioData = ref({ nombre: '', email: '', password: '' });
const selectedUserId = ref(null);

// Función para obtener los usuarios
const fetchUsuarios = async () => {
    try {
        const response = await axios.get('/usuarios');
        usuarios.value = response.data;
    } catch (error) {
        console.error('Error al obtener usuarios:', error);
        usuarios.value = []; // Asegurarse de que sea un arreglo vacío en caso de error
    }
};

// Función para editar usuario
const updateUsuario = async () => {
    try {
        await axios.put(`/usuarios/${selectedUserId.value}`, usuarioData.value);
        fetchUsuarios();
        resetForm();
        toggleEditModal();
    } catch (error) {
        console.error('Error al editar usuario:', error);
    }
};

// Función para eliminar usuario
const deleteUsuario = async (id) => {
    try {
        await axios.delete(`/usuarios/${id}`);
        fetchUsuarios();
    } catch (error) {
        console.error('Error al eliminar usuario:', error);
    }
};

// Función para abrir modal de edición con datos prellenados
const openEditModal = (user) => {
    usuarioData.value = { ...user, password: '' };
    selectedUserId.value = user.id;
    editModal.value = true;
};

// Alternar modal de edición
const toggleEditModal = () => editModal.value = !editModal.value;

// Resetear formulario
const resetForm = () => {
    usuarioData.value = { nombre: '', email: '', password: '' };
    selectedUserId.value = null;
};

onMounted(fetchUsuarios);
</script>

<template>
    <div>
        <!-- Mostrar mensaje si no hay usuarios -->
        <p v-if="usuarios.length === 0" class="text-center mt-4">No hay usuarios disponibles.</p>

        <!-- Mostrar la tabla solo si hay usuarios -->
        <table v-if="usuarios.length > 0" class="table container-sm mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="usuario in usuarios" :key="usuario.id">
                <th>{{ usuario.id }}</th>
                <td>{{ usuario.nombre }}</td>
                <td>{{ usuario.email }}</td>
                <td>
                    <button @click="openEditModal(usuario)" class="btn btn-primary btn-sm">Editar</button>
                    <button @click="deleteUsuario(usuario.id)" class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            </tbody>
        </table>

        <!-- Modal Editar Usuario -->
        <div v-if="editModal" class="modal">
            <div class="modal-content">
                <h3>Editar Usuario</h3>
                <form @submit.prevent="updateUsuario">
                    <input v-model="usuarioData.nombre" type="text" placeholder="Nombre" required />
                    <input v-model="usuarioData.email" type="email" placeholder="Email" required />
                    <input v-model="usuarioData.password" type="password" placeholder="Contraseña (opcional)" />
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <button @click="toggleEditModal" class="btn btn-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
.modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: white;
    padding: 20px;
    border-radius: 8px;
}
</style>
