<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-300">

    <!-- Navigation -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">To-Do</a>
            <div>
                <a href="/todo" class="text-gray-300 hover:text-white px-4">To-Do</a>
                <a href="/dashboard" class="text-gray-300 hover:text-white px-4">Dashboard</a>
                <a href="/login" class="text-gray-300 hover:text-white px-4">Login</a>
                <a href="/register" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gray-900 py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">To-Do</h1>
            <p class="text-xl md:text-2xl mb-8">Your solution for storing your To-Do's.</p>
            <a href="/register" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg text-xl">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="bg-gray-800 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-8">Features</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-gray-700 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold text-white mb-4">Free</h3>
                        <p class="text-gray-300">Completely free to use</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-gray-700 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold text-white mb-4">User-Friendly</h3>
                        <p class="text-gray-300">Easy to use interface</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-gray-700 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold text-white mb-4">Tracking</h3>
                        <p class="text-gray-300">Keep track of your To-Do's</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-6">
        <div class="container mx-auto text-center">
            <p class="text-gray-400">&copy; 2024 To-Do. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
