@extends('products.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">product Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $products->name }}</h5>
        <p class="card-text">description : {{ $products->description }}</p>
        <p class="card-text">price : {{ $products->price }}</p>
  </div>
       
    <hr>
  
  </div>
</div>