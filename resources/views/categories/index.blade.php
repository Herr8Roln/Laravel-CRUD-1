@extends('categories.layout')
@section('content')
    <div class="container">
        <div class="row">
        <?php 
$cnx= new PDO('mysql:host=localhost;dbname=crud;charset=utf8','root','');
$sql="select * from categories";
$categories=$cnx->query($sql)->fetchAll(PDO::FETCH_OBJ);

?>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">categories</div>
                    <div class="card-body">
                        <a href="{{ url('/category/create') }}" class="btn btn-success btn-sm" title="Add New category">
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
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/category/' . $item->id) }}" title="View category"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/category/' . $item->id . '/edit') }}" title="Edit category"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/category' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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