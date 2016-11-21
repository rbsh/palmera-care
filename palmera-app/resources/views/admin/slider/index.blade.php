 @extends('admin.layouts.master')

@section('content')
{{ method_field('GET') }}
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Simple Tables
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
     
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Responsive Hover Table</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->

                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                    <tr>
                      <th width="10">ID</th>
                      <th width="30">Photo</th>
                      <th>First Line</th>
                      <th>Second Line</th>
                      <th>third Line</th>
                      <th width="10">Order</th>
                      <th width="10">Active</th>
                      <th width="10"></th>
                      <th width="10"></th>
                    </tr>

                    @foreach($slider as $row)
                    <tr>
                      <td><input type="checkbox"></td>
                      <td><img src="{{url($row->photo)}}" height="25"></td>
                      <td>{{$row->firstline}}</td>
                      <td>{{$row->secondline}}</td>
                      <td>{{$row->thirdline}}</td>
                      <td>{{$row->row_order}}</td>
                      <td>

                      @if($row->status=="0")
                      <form method="post" action="{{url('admin/slider/change-status/'.$row->id.'?status='.$row->status)}}">
                      <input type="submit" value="NO" class="btn btn-xs btn-danger"> 
                      {{ csrf_field() }}
                      </form>
                      @else
                      <form method="post" action="{{url('admin/slider/change-status/'.$row->id.'?status='.$row->status)}}">

                      <input type="submit" value="YES" class="btn btn-xs btn-success"> 
                      {{ csrf_field() }}
                      </form>
                      @endif
                      </td>
                      <td><a href="{{url('admin/slider/'.$row->id)}}" class="btn btn-xs btn-warning">EDIT</a></td>
                      <td><form method="post" action="{{url('admin/slider/'.$row->id)}}">
                      <input type="submit" value="DELETE" class="btn btn-xs btn-danger"> 
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      </form></td>


                    </tr>
                    @endforeach
                  
                  </table>
                  <div class="box-footer clearfix" align="right">{{ $slider->links() }}</div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->


@endsection
