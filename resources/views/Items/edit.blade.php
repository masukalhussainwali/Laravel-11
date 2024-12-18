@extends('layouts.master')

@section('title', 'Edit Item')
@section('header', 'Edit Item')

@section('content')
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $item->name) }}">
            <x-error-message field="name" />
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $item->description) }}</textarea>
        </div>

        <!-- Quantity -->
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity', $item->quantity) }}">
            <x-error-message field="quantity" />
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Item</button>
        <a href="{{ route('items.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
@endsection
