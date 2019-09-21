@extends('admin.dashboard.index')

@section('title', 'Product - Edit')

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
        <li><a href="#">products</a></li>
        <li class="active">Edit products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6" style="margin: 0 auto;float: none;">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                  <form class="forms-sample" action="products/edit/{{$product->id}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên Sản Phẩm " name="product_name" value="{{$product->name}}">
                    </div>
                  
                  <div class="form-group">
                      <label for="exampleInputImage1">Image</label>
                      <img src="admin/uploads/products/{{$product->image}}" height="100px">
                      <input type="file" class="form-control" id="exampleInputImage1" placeholder="Image " name="image" value="">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPrice1">Price</label>
                      <input type="text" class="form-control" id="exampleInputPrice1" placeholder="Giá" name="price" value="{{$product->price}}">
                  </div>
                          <div class="form-group">
                      <label for="exampleInputName2">Description</label>
                      <textarea name="description" class="form-control" style="height: 100px;">{{$product->description}}</textarea>
                    </div>         
                                       
                    <input type="submit" class="btn btn-success mr-2" value="Edit">
                    <button type="Reset" class="btn btn-light">Reset</button>
                  </form>
                </div>
      <!-- /.box -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection