@extends('product.layout')
@section('content')

<div class="card">
  <div class="card-header">Product Page</div>
  <div class="card-body">
    <div class="card-body">
      <h5 class="card-title">Name: {{ $product->name }}</h5>
      <p class="card-text">Description: {{ $product->description }}</p>
      <p class="card-text">Price: {{ $product->price }}</p>

      @if($product->image)
        <img src="{{ asset('path_to_your_images_folder/' . $product->image) }}" alt="Product Image" class="img-fluid">
      @else
        <p>No image available</p>
      @endif
    </div>

    <hr>
  </div>
</div>

@stop
