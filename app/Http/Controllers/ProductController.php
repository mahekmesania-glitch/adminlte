<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Show all products with their categories
    public function index()
    {
        $products = Product::with('categories')->get();
        return view('products.index', compact('products'));
    }

    // Show the form to create a product
    public function create()
    {
        $categories = Category::all(); // All categories for checkboxes
        return view('products.create', compact('categories'));
    }

    // Store product and attach categories
    public function store(Request $request)
    {
        // Validate input
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'categories' => 'required|array', // selected categories
        ]);

        // Create product
        $product = Product::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'] ?? null,
        ]);

        // Attach selected categories
        $product->categories()->attach($data['categories']);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }
}