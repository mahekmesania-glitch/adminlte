@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-4">
    <h2>Edit Product</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Product Name -->
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="name" value="{{ $product->name }}" required>
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price (₹)</label>
            <input type="number" step="0.01" class="form-control" id="productPrice" name="price" value="{{ $product->price }}" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea class="form-control" id="productDescription" name="description" rows="3">{{ $product->description }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection