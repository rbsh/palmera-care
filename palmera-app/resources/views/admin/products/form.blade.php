    


        <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" value="{{$cat->name or ''}}" name="name" class="form-control" placeholder="Enter Text 01">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">price Canada</label>
                      <input type="text" value="{{$cat->name or ''}}" name="price_cad" class="form-control" placeholder="Enter Text 01" id="price_cad" oninput="myFunction1()">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">price United Kingdom</label>
                      <input type="text" value="{{$cat->name or ''}}" id="price_uk" name="price_uk" class="form-control" placeholder="Enter Text 01">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">price Pakistan</label>
                      <input type="text" value="{{$cat->name or ''}}" name="price_pak" class="form-control" placeholder="Enter Text 01">
                    </div>



                    @if(isset($cat->status)!="")
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                        <option value="1" @if($cat->status=="1") selected @endif>Yes</option>
                        <option value="0" @if($cat->status=="0") selected @endif>No</option>
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
                      <input type="number" value="{{$cat->row_order or ''}}"  name="row_order" class="form-control"  placeholder="Row Order">
                    </div>

                    <div class="btn btn-default btn-file">
                      <i class="fa fa-picture-o"></i> Upload Slider Image
                      <input type="file" name="photo">
                    </div>
                    
                  </div><!-- /.box-body -->