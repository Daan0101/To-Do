<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-gray-800 p-8 rounded-lg shadow-lg">
        <form wire:submit.prevent="authenticate" method="post">
            <h1 class="text-3xl font-bold text-gray-200 mb-6">Login</h1>
            <div class="mb-6">
                <label for="email" class="block text-gray-300 mb-2">Email @error('email') <span class="text-red-500">- {{ $message }}</span> @enderror</label>
                <input type="email" wire:model='email' name="email" id="email" class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-300 mb-2">Password @error('password') <span class="text-red-500">- {{ $message }}</span> @enderror</label>
                <input type="password" wire:model='password' name="password" id="password" class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
        </form>
    </div>
</body>