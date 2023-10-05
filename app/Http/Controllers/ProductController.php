<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
    public function index()
    {
        $Products = Product::all();
      return view ('products.index')->with('products', $Products);
    }

    
    public function create()
    {
        return view('products.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Product::create($input);
        return redirect('product')->with('flash_message', 'Product Added!');  
    }

    
    public function show($id)
    {
        $Product = Product::find($id);
        return view('products.show')->with('Products', $Product);
    }

    
    public function edit($id)
    {
        $Product = Product::find($id);
        return view('products.edit')->with('Products', $Product);
    }

  
    public function update(Request $request, $id)
    {
        $Product = Product::find($id);
        $input = $request->all();
        $Product->update($input);
        return redirect('product')->with('flash_message', 'Product Updated!');  
    }

   
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('product')->with('flash_message', 'Product deleted!');  
    }
}