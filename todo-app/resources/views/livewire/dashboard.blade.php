<body class="bg-gray-900 text-gray-300">
    <div class="flex min-h-screen flex-col md:flex-row">
        <div class="w-full md:w-64 bg-gray-800 p-8 flex-shrink-0">
            <h2 class="text-2xl font-semibold text-white mb-4">Welcome, {{ auth()->user()->name }}</h2>
            <ul class="space-y-4">
                <li><a href="/dashboard" class="block text-gray-300 hover:text-white">Dashboard</a></li>
                <li><a href="/todo" class="block text-gray-300 hover:text-white">Create To-Do</a></li>
                <li><a href="/logout" class="block text-gray-300 hover:text-white">Logout</a></li>
            </ul>
        </div>

    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold text-white mb-8">All To-Do's</h1>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-3xl font-semibold text-white mb-6">To-Do</h2>
                <ul>
                    @foreach($todos->where('completed', false) as $todo)
                        <li class="bg-gray-800 p-6 mb-4 rounded-lg shadow-lg">
                            <strong>Title:</strong> {{ $todo->title }}<br>
                            <strong>Description:</strong> {{ $todo->description }}<br>
                            <strong>Date:</strong> {{ $todo->created_at }}<br>
                            <div class="flex mt-4">
                                <form wire:submit.prevent="markAsDone({{ $todo->id }})" method="post" class="mt-4">
                                    <button type="submit" class="mr-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg"><i class="fa-solid fa-check"></i></button>
                                </form>
                                <form wire:submit.prevent='deleteTodo({{ $todo->id }})' method="post" class="mt-4">
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- Done Todos -->
            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-3xl font-semibold text-white mb-6">Done</h2>
                <ul>
                    @foreach($todos->where('completed', true) as $todo)
                        <li class="bg-gray-800 p-6 mb-4 rounded-lg shadow-lg">
                            <strong>Title:</strong> {{ $todo->title }}<br>
                            <strong>Description:</strong> {{ $todo->description }}<br>
                            <strong>Completed:</strong> {{ $todo->updated_at }}<br>
                            <div class="flex mt-4">
                                <form wire:submit.prevent="markAsNotDone({{ $todo->id }})" method="post" class="mt-4">
                                    <button type="submit" class="mr-2 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg"><i class="fa-solid fa-circle-xmark"></i></button>
                                </form>
                                <form wire:submit.prevent='deleteTodo({{ $todo->id }})' method="post" class="mt-4">
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Include your Livewire scripts -->
    @livewireScripts
</body>