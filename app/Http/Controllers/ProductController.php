<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();//getting all product from database
        return view('products.index', compact('products'));//getting all category from database
        
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request) //methode signature
    {
        $input = $request->all(); //input retrieval 
        Product::create($input); //creating a product element with input array
        $flash_message = 'Product Added!';

        return redirect()->route('product', compact('flash_message'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        $flash_message = 'Product Updated!';
        return redirect()->route('product', compact('flash_message'));
    }

    public function destroy($id)
    {
        Product::destroy($id);
        $flash_message = 'Product Deleted!';
        return redirect()->route('product', compact('flash_message'));
    }
}
