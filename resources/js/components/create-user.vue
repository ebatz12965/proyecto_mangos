<script setup>
import { ref } from 'vue';
import axios from 'axios';

// Definir variables reactivas para cada campo del formulario
const nombre = ref('');
const email = ref('');
const password = ref('');
const modalVisible = ref(false); // Estado para controlar la visibilidad del modal

// Función para manejar el envío del formulario
const createUsuario = async () => {
    try {
        await axios.post('/usuarios', {
            nombre: nombre.value,
            email: email.value,
            password: password.value,
        });
        alert('Usuario creado con éxito');
        modalVisible.value = false; // Cierra el modal después de enviar
        // Limpia los campos del formulario
        resetForm();
    } catch (error) {
        console.error('Error al crear usuario:', error);
        alert('Hubo un error al crear el usuario');
    }
};

// Función para abrir y cerrar el modal
const toggleModal = () => {
    modalVisible.value = !modalVisible.value;
};

// Función para resetear los campos del formulario
const resetForm = () => {
    nombre.value = '';
    email.value = '';
    password.value = '';
};
</script>

<template>
    <div>
        <!-- Botón para abrir el modal -->
        <button class="btn btn-success" @click="toggleModal">Crear Usuario</button>

        <!-- Modal de Bootstrap -->
        <div class="modal fade" :class="{ show: modalVisible }" style="display: modalVisible ? 'block' : 'none'"
             tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Crear Usuario</h5>
                        <button type="button" class="close" @click="toggleModal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario -->
                        <form @submit.prevent="createUsuario" class="row g-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" v-model="nombre" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" v-model="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" v-model="password" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
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
