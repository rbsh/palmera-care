

        <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">First line</label>
                      <input type="text" value="{{$slider->firstline or ''}}" name="firstline" class="form-control" placeholder="Enter Text 01">
                    </div>

                    

                    <div class="form-group">
                      <label for="exampleInputEmail1">Gender</label>

                      <select name="gender" class="form-control">
                        <option value="volvo">Male</option>
                        <option value="volvo">Female</option>
                      </select>


                    </div>





                    <div class="form-group">
                      <label for="exampleInputEmail1">Second line</label>
                      <input type="text" value="{{$slider->secondline or ''}}"  name="secondline" class="form-control"  placeholder="Enter Text 02">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Third Line</label>
                      <input type="text" value="{{$slider->thirdline or ''}}"  name="thirdline" class="form-control"  placeholder="Enter Text 03">
                    </div>

                    @if(isset($slider->status)!="")
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                        <option value="1" @if($slider->status=="1") selected @endif>Yes</option>
                        <option value="0" @if($slider->status=="0") selected @endif>No</option>
                      </select>
                    </div>
                    @else
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                    @endif

                    <div class="form-group">
                      <label for="exampleInputEmail1">Order</label>
                      <input type="number" value="{{$slider->row_order or ''}}"  name="row_order" class="form-control"  placeholder="Row Order">
                    </div>


                    <div class="btn btn-default btn-file">
                      <i class="fa fa-picture-o"></i> Upload Slider Image
                      <input type="file" name="photo">
                    </div>

                  </div><!-- /.box-body -->