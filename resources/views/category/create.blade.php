@extends('category.layout')
@section('content')

<div class="card">
  <div class="card-header">new category</div>
  <div class="card-body">

      <form action="{{ route('category.store') }}" method="POST">
        @csrf
        
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

