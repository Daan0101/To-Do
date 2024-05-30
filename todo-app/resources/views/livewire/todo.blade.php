<div class="flex min-h-screen bg-gray-900">
    <div class="w-64 bg-gray-800 p-8 flex-shrink-0">
        <h2 class="text-2xl font-semibold text-white mb-4">Welcome, {{ auth()->user()->name }}</h2>
        <ul class="space-y-4">
            <li><a href="/dashboard" class="block text-gray-300 hover:text-white">Dashboard</a></li>
            <li><a href="/todo" class="block text-gray-300 hover:text-white">Create To-Do</a></li>
            <li><a href="/logout" class="block text-gray-300 hover:text-white">Logout</a></li>
        </ul>
    </div>

    <div class="flex-1 p-8">
        <div class="flex items-center justify-center my-20">
            <div class="w-full max-w-md bg-gray-800 p-8 rounded-lg shadow-lg">
                <form wire:submit.prevent="addtodo" method="post">
                    <h1 class="text-3xl font-bold text-gray-200 mb-6">To-Do</h1>
                    <div class="mb-6">
                        <label for="title" class="block text-gray-300 mb-2">Title @error('title') <span class="text-red-500">- {{ $message }}</span> @enderror</label>
                        <input type="text" wire:model='title' name="title" id="title" class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="description" class="block text-gray-300 mb-2">Description @error('description') <span class="text-red-500">- {{ $message }}</span> @enderror</label>
                        <textarea wire:model='description' name="description" id="description" class="w-full px-4 py-2 bg-gray-700 text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3"></textarea>
                    </div>
                    <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500">Create To-Do</button>
                </form>
            </div>
        </div>
    </div>
</div>
