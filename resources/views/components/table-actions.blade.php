<a href="{{ route('items.show', $item->id) }}" class="text-blue-500 hover:underline">View</a>
<a href="{{ route('items.edit', $item->id) }}" class="ml-4 text-yellow-500 hover:underline">Edit</a>
<form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="ml-4 text-red-500 hover:underline">Delete</button>
</form>
