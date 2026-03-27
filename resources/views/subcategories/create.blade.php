@extends('layouts.app')

@section('title', 'Add Subcategory')

@section('content')
<div class="container mt-4">
    <h2>Add Subcategory</h2>
    <form action="{{ route('subcategories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Subcategory Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter subcategory name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Parent Category</label>
            <select name="category_id" class="form-select" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection