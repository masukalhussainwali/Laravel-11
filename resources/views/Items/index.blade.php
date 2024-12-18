@extends('layouts.master')

@section('title', 'Items')
@section('header', 'Item List')

@section('content')
    <a href="{{ route('items.create') }}">Create New Item</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->quantity }}</td>
                <td>
                    <a href="{{ route('items.show', $item->id) }}">View</a>
                    <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
