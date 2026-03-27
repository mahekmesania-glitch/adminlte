@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="container mt-4">
    <h2>Add Category</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter category name" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection