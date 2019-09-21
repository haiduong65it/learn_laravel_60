@extends('admin.dashboard.index')

@section('title', 'Product - List')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        PRODUCTS
      </h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products</a></li>
        <li class="active">List products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Image</th>
              <th>Price</th>
              <th>Description</th>
              <th colspan="2" style="text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td><img src="admin/uploads/products/{{$product->image}}" height="100px"></td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                  <a href="products/edit/{{$product->id}}" class="btn btn-primary">Edit</a>
                  
                </td>
                <td>
                  <a href="products/delete/{{$product->id}}" class="btn btn-warning">Delete</a>
                  
                </td>
              </tr>
            @endforeach
          </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection