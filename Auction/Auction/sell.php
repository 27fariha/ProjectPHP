<?php
include('Header.php');
$today=date("Y-m-d", strtotime('1 day'));
?>
         


      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <h1>Sell</h1>
              <p>Sell your product in our auction.</p>
              <?php if($_SESSION['AUN']==null) { ?>
              <p><a href="login.php" class="btn btn-primary">Login</a></p>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>


      <div class="site-section">
        <div class="container">
        <?php if($_SESSION['AUN']==null) { ?>
            <div class="alert alert-danger" role="alert">
  You have to Login First
</div>
              <?php } ?>
          <div class="row" style="margin-left:300px;">
        


            <div class="col-lg-8">
              <h2 class="mb-5 text-black">About  <strong>your product</strong></h2>
              <form action="productcreate.php" method="POST" enctype="multipart/form-data">
              <div class="row">
             
                <div class="col-md-6 form-group">
                  <label for="fname">Product Name</label>
                  <input type="text" name="pname"  id="fname" class="form-control form-control-lg " placeholder="Product Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname">Description</label>
                  <input type="text" name="diss" id="lname" class="form-control form-control-lg" placeholder="Product Description" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="eaddress">initiaL Bid</label>
                  <input type="text" name="bid" id="eaddress" placeholder="Your Bid" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="tel">Closing Date</label>
                  <input type="date" name="closedate" id="tel" min="<?php echo $today?>"   class="form-control form-control-lg" required> 
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="image">Image</label>
                  <input type="file"  name="img"  id="message" cols="30" rows="10" class="form-control" required>
                </div>
              </div>

              <div class="row">
                <div style="margin-left:180px;" class="col-12" style="margin-left:450px;">

                <?php if($_SESSION['AUN']==null) { ?>
                  <input type="submit" name="NOT" value="Submit" class="btn btn-primary btn-lg px-5" >
                <?php } else { ?>
                  <input type="submit" name="save" value="Submit" class="btn btn-primary btn-lg px-5" >
                <?php } ?>
                </div>
              </div>
            </div>
            </form>
          </div>
          
        </div>
      </div>
      
      
     <?php
include('Footer.php')
?>
