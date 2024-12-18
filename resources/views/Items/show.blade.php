<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Name: {{ $item->name }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Item Name -->
                    <h5 class="card-title">Name: {{ $item->name }}</h5>

                    <!-- Description -->
                    <p class="card-text">
                        <strong>Description:</strong>
                        {{ $item->description ?? 'No description available.' }}
                    </p>

                    <!-- Quantity -->
                    <p class="card-text">
                        <strong>Quantity:</strong>
                        {{ $item->quantity }}
                    </p>

                    <!-- Buttons -->
                    <x-primary-button href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</x-primary-button>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <x-danger-button>Delete</x-danger-button>
                    </form>
                    <x-secondary-button>Back to List</x-secondary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


