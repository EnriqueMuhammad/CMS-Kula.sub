<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kula Coffee - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600">
                    Kula Coffee
                </a>
                <button id="menu-toggle" class="lg:hidden text-gray-600 hover:text-blue-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <nav id="menu" class="hidden lg:flex space-x-4">
                    <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-500">Home</a>
                    <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-500">About</a>
                    <a href="{{ url('/contact') }}" class="text-gray-600 hover:text-blue-500">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow p-6">
            @yield('content')
        </div>
    </main>

    <footer class="bg-gray-800 text-gray-300">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center">
                <p class="text-sm text-center mb-4 md:mb-0">
                    &copy; {{ date('Y') }} Kula Coffee. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>