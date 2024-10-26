@extends('layouts.layout1')

@section('title', 'Registrar')

@section('content')
    <encabezado1></encabezado1>
    <carrusel-img></carrusel-img>
    <br>

    <div class="container d-flex justify-content-center">
        <form action="{{ route('register') }}" method="POST" class="register-form col-md-6">
            @csrf
            <h2 class="text-center">Registrar Usuario</h2>

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" required class="form-control">
                @error('name')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required class="form-control">
                @error('email')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required class="form-control">
                @error('password')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-outline-custom">
                    Registrar
                </button>
            </div>
        </form>
    </div>

    <br>
    <pie-pagina></pie-pagina>
@endsection

<style scoped>
    .register-form {
        background-color: #f8f9fa; /* Color de fondo suave */
        padding: 20px; /* Espaciado interno */
        border-radius: 5px; /* Bordes redondeados */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
    }

    .error {
        font-size: 0.875rem; /* Tamaño de fuente más pequeño para los errores */
    }
</style>
