@extends('layouts.app')

@section('content')
    <h1>Delete Category</h1>
    <p>Are you sure you want to delete this category?</p>

    <form method="POST" action="{{ route('category.destroy', $category->id) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
