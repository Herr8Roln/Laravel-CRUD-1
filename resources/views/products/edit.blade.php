@extends('products.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Product edit Page</div>
  <div class="card-body">
      
      <form action="{{ route('product.update',$product->id) }}" method="post">
        @csrf

        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control"></br>
        <label>description</label></br>
        <input type="text" name="description" id="description" value="{{$product->description}}" class="form-control"></br>
        <label>price</label></br>
        <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop