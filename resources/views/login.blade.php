<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Custom styles for enhanced UI */
        .login-container {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .login-card {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease;
        }
        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .input-field:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
        }
        .login-btn {
            background: linear-gradient(to right, #4f46e5, #7c3aed);
        }
        .login-btn:hover {
            background: linear-gradient(to right, #4338ca, #6d28d9);
        }
    </style>
</head>
<body class="login-container font-['Poppins'] flex items-center justify-center p-4">
    <div class="login-card bg-white rounded-xl p-8 w-full max-w-md">
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <img src="{{asset('storage/image/Mitsubishi.jpg')}}" />
            </div>
            <h1 class="text-3xl font-bold text-gray-800">Selamat Datang</h1>
            <p class="text-gray-600 mt-2">Silakan login ke akun Anda</p>
        </div>

        <form id="loginForm" class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input type="text" id="username" name="username" 
                       class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                       placeholder="Masukkan username" required>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" 
                           class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                           placeholder="Masukkan password" required>
                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e0dad0eb-8fa9-470c-945a-7d55fa4fe517.png" alt="Eye icon to toggle password visibility" class="w-6 h-6" />
                    </button>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
                </div>
                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Lupa password?</a>
                </div>
            </div>

            <div>
                <button type="submit" class="login-btn w-full py-3 px-4 rounded-lg text-white font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Login
                </button>
            </div>
        </form>

        <div id="errorMessage" class="mt-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 hidden"></div>
        <div id="successMessage" class="mt-4 p-3 bg-green-100 border-l-4 border-green-500 text-green-700 hidden"></div>

        <div class="mt-6 text-center text-sm text-gray-500">
            <p>Belum punya akun? <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Daftar sekarang</a></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const errorMessage = document.getElementById('errorMessage');
            const successMessage = document.getElementById('successMessage');

            // Valid credentials (hardcoded for demo)
            const validCredentials = [
                { username: 'admin', password: 'Admin@123' },
                { username: 'user', password: 'User@123' }
            ];

            // Toggle password visibility
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                // Change eye icon
                const eyeIcon = togglePassword.querySelector('img');
                const newSrc = type === 'password' ? 
                    'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b2fb6b97-dd2d-49b6-a681-77adceac0e04.png' : 
                    'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7c5b38ae-ffaf-47ef-b99a-547fc1c6b80e.png';
                eyeIcon.src = newSrc;
                eyeIcon.alt = type === 'password' ? 'Eye icon showing password is hidden' : 'Lock icon showing password is visible';
            });

            // Handle form submission
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const username = document.getElementById('username').value;
                const password = passwordInput.value;

                // Reset messages
                errorMessage.classList.add('hidden');
                successMessage.classList.add('hidden');

                // Basic validation
                if (!username || !password) {
                    showError('Username dan password harus diisi');
                    return;
                }

                // Check credentials
                const isValidUser = validCredentials.some(
                    cred => cred.username === username && cred.password === password
                );

                if (isValidUser) {
                    showSuccess('Login berhasil!');
                    // Simulate redirect (remove this in production)
                    setTimeout(() => {
                        // Here you would normally redirect to another page
                        console.log('Redirecting to dashboard...');
                    }, 1000);
                } else {
                    showError('Username atau password salah');
                }
            });

            function showError(message) {
                errorMessage.textContent = message;
                errorMessage.classList.remove('hidden');
            }

            function showSuccess(message) {
                successMessage.textContent = message;
                successMessage.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>

