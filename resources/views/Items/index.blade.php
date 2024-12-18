<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{ route('items.create') }}">Items List</a>
        </h2>
    </x-slot>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('items.create') }}"
                       class="px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600">Create New Item</a>
                    <div class="mt-6">
                        <x-table
                            :headers="['Name', 'Description', 'Quantity', 'Actions']"
                            :rows="$items->map(fn($item) => [
                                $item->name,
                                $item->description,
                                $item->quantity,
                                view('components.table-actions', ['item' => $item])->render()
                            ])"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
