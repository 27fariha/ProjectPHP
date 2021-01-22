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
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title"></h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    
                    
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>UserName</label>
                              <input type="text" class="form-control" placeholder="Username" name="un">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Password</label>
                              <input type="text" class="form-control" placeholder="Password" name="ps">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Address</label>
                              <input type="text" class="form-control" placeholder="Address" name="ad">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" placeholder="Email" name="em">
                          </div>
                      </div>
                      <div class="col-md-3 px-1">
                          <div class="form-group">
                              <label>Number</label>
                              <input type="text" class="form-control" placeholder="Phone" name="phone">
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div>
                              <label>Picture</label>
                              <br>
                              <input type="file"  name="image" onChange="readURL(this)" height=50/>
<img id="proimg"> </input>
                          </div>
                          <br><br>
                 
                  </div>
                            <div class="col-md-12 px-1">
                    <div class="form-group">
                            
                            <input type="Submit" class="form-control" placeholder="admin" name="Submit">
                        </div>
                    </div>
                      </div>
                    
                  </div>
                  
                </form>
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