@extends('admin.layouts.master')
@push('scripts')

@if(isset($success))
  @include('admin.add_success')
@endif

@endpush

<?php
function convertCurrency($amount, $from, $to){
    $url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
    $data = file_get_contents($url);
    preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
    $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
    return round($converted, 3);
}

  $usd = convertCurrency(1, "USD", "AED");



?>
<script>
function myFunction1() {
    var xs = document.getElementById("price_cad").value;
    var results = parseFloat(xs) + parseFloat(<?=$usd?>);
    document.getElementById("price_uk").value = results;
}
</script>

@section('content')

        <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add new products
            <small>ADD</small>
          </h1>
          
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">products</a></li>
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
                <form action="{{ url('admin/products')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                  @include('admin.products.form')

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
