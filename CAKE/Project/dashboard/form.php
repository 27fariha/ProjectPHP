        <?php
include('dashboard.php')
?>
<form action="" method="POST">
<section id="main-content">
	 <section class="wrapper">
  <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Add Employee</h4>
              <form class="form-horizontal style-form" method="#">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="First Name" name="fname">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Last Name" name="lname">
                    
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    
                  </div>
                </div> <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">CNIC</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="CNIC" name="cnic">
                    
                  </div>
                </div> <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Address" name="address">
                    
                  </div>
                </div> <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Phone No</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Phone No" name="phone">
                    
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                  </div>
                </div>
              </form>
              <div class="showback">
             
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="sub">Click here to Add Employee</button>
             
            </div>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
    </section>
</section>
        <?php
include('footer.php')
?>
