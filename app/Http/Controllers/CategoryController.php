<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return view ('category.index',compact("category"));
    }


    public function create()
    {
        return view('category.create');
    }
    

    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Create a new category instance and save it to the database
    Category::create([
        'name' => $request->input('name'),
        // Add other fields as needed
    ]);

    $flash_message = 'Category Added!';

    return redirect()->route('category.index', compact('flash_message'));
}


    public function show($id)
    {
        $category = Category::find($id); //Eloquent ORM (Object-Relational Mapping)
        return view('category.show',compact('category'));
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit',compact('category'));
    }


    public function update(Request $request, $category_id)
    {
        $category = Category::find($category_id);

        $input = $request->all();
        $category->update($input);
        $flash_message = 'Category Updated!';
        return redirect()->route('category.index', compact('flash_message'));
    }
        public function destroy($id)
    {
        // Find the category by ID
    $category = Category::find($id);

    // Delete all products associated with this category
    $category->products()->delete();

    // Delete the category
    $category->delete();

    $flash_message = 'Category and associated products deleted!';

        return redirect()->route('category.index', compact('flash_message'));
    }
    public function showDropdown()
    {
        $category = Category::all();
        return view('category.dropdown', compact('category'));
    }
}
