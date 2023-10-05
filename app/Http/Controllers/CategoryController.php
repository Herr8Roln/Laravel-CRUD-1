<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  
    public function index()
    {
        $categories = Category::all();
      return view ('categories.index')->with('categories', $categories);
    }

    
    public function create()
    {
        return view('categories.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
        return redirect('category')->with('flash_message', 'Category Addedd!');  
    }

    
    public function show($id)
    {
        $Category = Category::find($id);
        return view('categories.show')->with('categories', $Category);
    }

    
    public function edit($id)
    {
        $Category = Category::find($id);
        return view('categories.edit')->with('categories', $Category);
    }

  
    public function update(Request $request, $id)
    {
        $Category = Category::find($id);
        $input = $request->all();
        $Category->update($input);
        return redirect('category')->with('flash_message', 'Category Updated!');  
    }

   
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('category')->with('flash_message', 'Category deleted!');  
    }
    public function showDropdown()
    {
        $categories = Category::all();
        return view('category.dropdown', compact('categories'));
    }
}