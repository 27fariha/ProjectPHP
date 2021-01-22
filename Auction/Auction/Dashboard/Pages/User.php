<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
  <?php
include('header.php') ?>

      <!-- End Navbar -->
      <div class="panel-header panel-header-sm ">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> </h5>
              </div>
              <div class="card-body">
                <form action="Create_User.php" method="POST"  enctype="multipart/form-data">
                  <div class="row">
                   
                  <div class="col-md-12 px-1">
                      <div class="form-group">
                        <label>First Name </label>
                        <input type="text" name="fn" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>
                 
                <div class="row">
                  
                <div class="col-md-12 px-1">
                      <div class="form-group">
                        <label>Last Name </label>
                        <input type="text" name="ln" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    
                  <div class="col-md-12 px-1">
                      <div class="form-group">
                        <label>Cnic</label>
                        <input type="text" name="cn" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                   
                  <div class="col-md-12 px-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="em" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                  </div>
                
                      <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Date of birth </label>
                       <input type="text" name="dob" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Password</label>
                       <input type="text" name="ps" class="form-control" placeholder="" value="">
                      </div>
                    </div>
               </div>

                <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Contact</label>
                       <input type="text" name="con" class="form-control" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Company</label>
                        <input type="text" name="com" class="form-control" placeholder="" value="">
                      </div>
                    </div>
               </div>
        
                             
                                   
                

               <div class="col-md-3">
                          <div>
                              <label>Picture</label>
                              <br>
                              <input type="file"  name="im" onChange="readURL(this)" height=50/>
<img id="proimg"> </input>
                          </div>
                          <br><br>


                    <div class="col-md-12 px-1">
                    <div class="form-group">
                            
                            <input type="Submit" class="form-control" placeholder="Role" name="Submit">
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
          <div class="col-md-4">
        
              <hr>
           
            </div>
          </div>
        </div>
      </div>










          <!--<div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">Mike Andrew</h5>
                  </a>
                  <p class="description">
                    michael24
                  </p>
                </div>
                <p class="description text-center">
                  "Lamborghini Mercy <br>
                  Your chick she so thirsty <br>
                  I'm in that two seat Lambo"
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>-->
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