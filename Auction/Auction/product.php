<?php
include('Header.php') ?>
    
      <!-- End Navbar -->
    
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title"></h5>
              </div>
              <div class="card-body">
                <form method="POST" action="productcreate.php" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Seller Id </label>
                        <input type="text" name="sid" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>
                 
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product name </label>
                        <input type="text" name="pname" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Discription</label>
                        <input type="text" name="diss" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>

                  




               

               
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>initail bit</label>
                        <input type="text" name="bid" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>date of post</label>
                        <input type="text" name="postdate" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>date of Closing</label>
                        <input type="text" name="closedate" class="form-control" placeholder="" value="">
                      </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>
<div class="col-md-3">
                          <div>
                              <label>Picture</label>
                              <br>
                              <input type="file"  name="img" onChange="readURL(this)" height=50/>
<img id="proimg"> </input>
                          </div>
                          <br><br>


                    <div class="col-md-12 px-1">
                      <div class="form-group">
                        
                        <input type="submit" class="form-control" name="save" placeholder="" value="submit">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
         
       <?php
include('footer.php') ?>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                   .css( "visibility", "visible" );   
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>