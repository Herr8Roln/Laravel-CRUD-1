@extends('category.layout')
@section('content')

<div class="card">
  <div class="card-header">edit category Page</div>
  <div class="card-body">

      <form action="{{ route('category.update', ['category' => $category->id]) }}" method="post">
        @csrf
        @method("put")
        <input type="hidden" name="id" id="id" value="{{$category->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
