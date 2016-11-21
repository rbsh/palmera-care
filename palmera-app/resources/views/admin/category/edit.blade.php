@extends('admin.layouts.master')
@push('scripts')
@if(isset($success))
  @include('admin.update_sucess')
@endif
@endpush
@section('content')
        <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Update Products
            <small>Edit</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Products</a></li>
            <li class="active">Update Products</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
{{--                   <h3 class="box-title">Enter here !!!</h3><br>
 --}}                  @include('admin.includes.errors')

                        <div align="center"><img src="{{url($products->photo)}}" width="40%"></div>

                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{ url('admin/products/'.$cat->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                  @include('admin.products.form')

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                  </div>

                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->

    <!-- CK Editor -->
    
@endsection
