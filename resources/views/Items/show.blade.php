
@extends('layouts.master')

@section('title', 'Show Item')
@section('header', 'Item Details')

@section('content')
    <div class="card">
        <div class="card-body">
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
            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection

