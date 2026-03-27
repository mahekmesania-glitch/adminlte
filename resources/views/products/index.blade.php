<!DOCTYPE html>
<html>
<head>
    <title>Products & Categories</title>
</head>
<body>
    <h1>Products List</h1>

    <a href="{{ route('products.create') }}">Create New Product</a>
    <hr>

    @foreach($products as $product)
        <h3>{{ $product->name }} - ${{ $product->price }}</h3>
        <p>{{ $product->description }}</p>

        <strong>Categories:</strong>
        <ul>
            @foreach($product->categories as $category)
                <li>{{ $category->name }}</li>
            @endforeach
        </ul>
        <hr>
    @endforeach
</body>
</html>