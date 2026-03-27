<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>

    <h1>Create New Product</h1>

    <a href="{{ route('products.index') }}">← Back</a>
    <hr>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>

        <label>Categories:</label><br>

        @foreach($categories as $category)
            <input type="checkbox" name="categories[]" value="{{ $category->id }}">
            {{ $category->name }}<br>
        @endforeach

        <br>
        <button type="submit">Create Product</button>
    </form>

</body>
</html>