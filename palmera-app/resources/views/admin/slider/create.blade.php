 @extends('admin.layouts.master')
@push('scripts')
@if(isset($success))
  @include('admin.add_success.blade.php')
@else
  @print $message;
@endif
@endpush

@section('content')

        <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add new slider image
            <small>ADD</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Sliders</a></li>
            <li class="active">Add New</li>
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
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{{ url('admin/slider')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                  @include('admin.slider.form')

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->

    <!-- CK Editor -->
    
@endsection
