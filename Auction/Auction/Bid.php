<?php
include('Header.php');
$i=$_GET['id'];
?>
         


      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <h1>Bid</h1>
              <p>auction is usually a process of buying and selling goods or services by offering.</p>
              
            </div>
          </div>
        </div>
      </div>

 <form action="bidcreate.php" method="POST">
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-5 text-black">Get <strong>In Touch</strong></h2>

             
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="HIDDEN" id="fname" name="bId" class="form-control form-control-lg" required value="<?php echo $_SESSION['AUI'] ?>">
                </div>
                <div class="col-md-6 form-group">
                  <input type="HIDDEN" id="lname" name="pid" class="form-control form-control-lg" required  value="<?php echo $i ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="eaddress">Bid Price</label>
                  <input type="text" id="eaddress" name="bpri" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="tel">Date</label>
                  <input type="text" id="tel" name="dte" class="form-control form-control-lg" required>
                </div>
              </div>
             

              <div class="row">
                <div class="col-12">
                  <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-lg px-5">
                </div>
              </div>
            </div>
            
              
            </div>
          </div>
          
        </div>
      </div>
      </form>
      
     <?php
include('Footer.php')
?>