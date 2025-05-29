<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Francisco de Otavalo - Acceso</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        franciscan: {
                            50: '#f8f5f0',
                            100: '#e8e0d1',
                            200: '#d4c5a5',
                            300: '#bda573',
                            400: '#a78a4d',
                            500: '#8f743a',
                            600: '#725b2e',
                            700: '#584528',
                            800: '#4a3924',
                            900: '#403222',
                        },
                        cross: '#8B5A2B',
                    }
                }
            }
        }
    </script>
    <style>
        .bg-franciscan-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23a78a4d' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .cross-icon {
            position: relative;
        }
        .cross-icon:before, .cross-icon:after {
            content: "";
            position: absolute;
            background-color: #8B5A2B;
        }
        .cross-icon:before {
            width: 24px;
            height: 4px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .cross-icon:after {
            width: 4px;
            height: 24px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body class="bg-franciscan-50 min-h-screen flex items-center justify-center bg-franciscan-pattern">
    <div class="w-full max-w-md px-6 py-12">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Encabezado con icono de cruz -->
            <div class="bg-franciscan-700 py-6 px-8 text-center relative">
                <div class="absolute left-1/2 -top-6 transform -translate-x-1/2 w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-md">
                    <div class="cross-icon"></div>
                </div>
                <h1 class="text-2xl font-bold text-white">
                    <span class="block text-franciscan-200 text-sm">Comunidad</span>
                    San Francisco de Otavalo
                </h1>
                <p class="text-franciscan-200 mt-1 text-sm">"Servir con humildad y amor"</p>
            </div>
            
            <!-- Formulario de login -->
            <form class="px-8 py-8">
                <div class="mb-6">
                    <label for="email" class="block text-franciscan-700 text-sm font-medium mb-2">
                        <i class="fas fa-user mr-2"></i>Usuario
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-franciscan-400"></i>
                        </div>
                        <input type="email" id="email" class="w-full pl-10 pr-3 py-3 border border-franciscan-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-franciscan-500 focus:border-transparent" placeholder="usuario@dominio.com" required>
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-franciscan-700 text-sm font-medium mb-2">
                        <i class="fas fa-lock mr-2"></i>Contraseña
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-key text-franciscan-400"></i>
                        </div>
                        <input type="password" id="password" class="w-full pl-10 pr-3 py-3 border border-franciscan-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-franciscan-500 focus:border-transparent" placeholder="••••••••" required>
                        <button type="button" class="absolute right-3 top-3 text-franciscan-400 hover:text-franciscan-600">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input id="remember-me" type="checkbox" class="h-4 w-4 text-franciscan-600 focus:ring-franciscan-500 border-franciscan-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-franciscan-700">
                            Recordarme
                        </label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-franciscan-600 hover:text-franciscan-500">
                            ¿Olvidó su contraseña?
                        </a>
                    </div>
                </div>
                
                <button type="submit" class="w-full bg-franciscan-600 hover:bg-franciscan-700 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-franciscan-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                    <i class="fas fa-sign-in-alt mr-2"></i> Ingresar
                </button>
                
                <div class="mt-6 text-center">
                    <p class="text-sm text-franciscan-600">
                        ¿No tienes una cuenta? 
                        <a href="#" class="font-medium text-franciscan-700 hover:text-franciscan-600">
                            Solicitar acceso
                        </a>
                    </p>
                </div>
            </form>
            
            <!-- Pie de página -->
            <div class="bg-franciscan-50 px-8 py-4 text-center">
                <p class="text-xs text-franciscan-600">
                    © 2023 Comunidad San Francisco de Otavalo. Todos los derechos reservados.
                </p>
            </div>
        </div>
        
        <!-- Versículo bíblico -->
        <div class="mt-6 text-center">
            <blockquote class="text-franciscan-700 italic">
                <p class="text-sm">"Porque donde dos o tres se reúnen en mi nombre, allí estoy yo en medio de ellos."</p>
                <footer class="text-xs mt-1 text-franciscan-600">Mateo 18:20</footer>
            </blockquote>
        </div>
    </div>

    <script>
        // Toggle para mostrar/ocultar contraseña
        document.querySelector('.fa-eye').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this;
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
        
        // Validación básica del formulario
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if(email && password) {
                // Aquí iría la lógica de autenticación
                alert('Bienvenido a la Comunidad San Francisco de Otavalo');
            }
        });
    </script>
</body>
</html>