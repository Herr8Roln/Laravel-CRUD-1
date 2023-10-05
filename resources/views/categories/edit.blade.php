@extends('categories.layout')
@section('content')
 
<div class="card">
  <div class="card-header">edit category Page</div>
  <div class="card-body">
      
      <form action="{{ url('category/' .$categories->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$categories->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$categories->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$categories->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$categories->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop