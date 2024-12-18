@extends('layouts.master')

@section('title', 'Create Item')
@section('header', 'Create New Item')

@section('content')
    <form action="{{ route('items.store') }}" method="POST">
        @csrf

        <!-- Name Field -->
        <label>Name:</label>
        <input type="text" name="name">
        <x-error-message field="name" />
        <br>

        <!-- Description Field -->
        <label>Description:</label>
        <textarea name="description"></textarea><br>

        <!-- Quantity Field -->
        <label>Quantity:</label>
        <input type="number" name="quantity">
        <x-error-message field="quantity" />
        <br>

        <!-- Submit Button -->
        <button type="submit">Save</button>
    </form>
@endsection
