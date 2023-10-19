<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  
    public function index()
    {
        $categories = Category::all();
      return view ('categories.index',compact("categories"));
    }

    
    public function create()
    {
        return view('categories.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
        $flash_message = 'Category Added!';

        return redirect()->route('category', compact('flash_message'));}

    
    public function show($id)
    {
        $Category = Category::find($id);
        return view('categories.show',compact('category'));
    }

    
    public function edit($id)
    {
        $Category = Category::find($id);
        return view('categories.edit',compact('category'));
    }

  
    public function update(Request $request, $id)
    {
        $Category = Category::find($id);
        $input = $request->all();
        $Category->update($input);
        $flash_message = 'category Updated!';
        return redirect()->route('category', compact('flash_message'));
    }

   
    public function destroy($id)
    {
        Category::destroy($id);
        $flash_message = 'category deleted!';
        return redirect()->route('category', compact('flash_message'));
    }
    public function showDropdown()
    {
        $categories = Category::all();
        return view('category.dropdown', compact('categories'));
    }
}