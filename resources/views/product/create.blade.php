@extends('product.layout')
@section('content')

<div class="card">
  <div class="card-header">product Page</div>
  <div class="card-body">

      <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        @include('category.dropdown')
        </br>
        <div class="form-group">
            <label for="picture">Product Picture:</label>
            <br>
            <input type="file" name="picture" id="picture" class="form-control">
        </div>
        </br>
        </br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
