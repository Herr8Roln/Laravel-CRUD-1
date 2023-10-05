@extends('products.layout')
@section('content')
    <div class="container">
        <div class="row">
 <?php 
$cnx= new PDO('mysql:host=localhost;dbname=crud;charset=utf8','root','');
$sql="select * from products";
$products=$cnx->query($sql)->fetchAll(PDO::FETCH_OBJ);

?>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">products</div>
                    <div class="card-body">
                        <a href="{{ url('/product/create') }}" class="btn btn-success btn-sm" title="Add New product">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>description</th>
                                        <th>price</th>
                                        <th>category_id</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->category_id }}</td>
                                        <td>
                                            <a href="{{ url('/product/' . $item->id) }}" title="View product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/product/' . $item->id . '/edit') }}" title="Edit product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection