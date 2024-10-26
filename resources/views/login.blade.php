@extends('layouts/layout1')

@section('title')

    @section('content')
        <encabezado1></encabezado1>
        <carrusel-img></carrusel-img>
        <br>
        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <h2>Iniciar Sesión</h2>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required class="form-control">
                @error('email')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required class="form-control">
                @error('password')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-outline-custom me-3">
                    <i class="fas fa-sign-in-alt"></i> Entrar
                </button>
                <a href="{{ route('register') }}" class="btn btn-outline-custom">
                    <i class="fas fa-user-plus"></i> Registrar
                </a>
                <button type="button" onclick="getToken()" class="btn btn-outline-custom">
                    <i class="fas fa-key"></i> Token
                </button>
            </div>

        </form>

        <br>
        <pie-pagina></pie-pagina>
    @endsection
    <script>
        async function getToken() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await fetch("{{ route('generate-token') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();

                if (response.ok) {
                    alert(`Tu token es: ${data.token}`);
                } else {
                    alert(data.message || 'Error al generar el token');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Ocurrió un error al solicitar el token');
            }
        }
    </script>

    <style scoped>
        .btn-outline-custom {
            border-color: #6DB744; /* Color del borde verde */
            color: #6DB744; /* Color del texto verde */
            transition: background-color 0.3s, color 0.3s; /* Transición suave */
        }

        .btn-outline-custom:hover {
            background-color: #6DB744; /* Fondo verde al pasar el ratón */
            color: white; /* Color de texto blanco al pasar el ratón */
        }

        .me-3 {
            margin-right: 1rem; /* Espacio entre los botones */
        }
    </style>
