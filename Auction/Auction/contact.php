<?php
include('Header.php');
include('connection.php');
$q="select * from admin";
$run=mysqli_query($con,$q);
$d=mysqli_fetch_assoc($run);
?>
         


      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <h1>Contact Us</h1>
              <p>You can easily contact with us.</p>
              
            </div>
          </div>
        </div>
      </div>


      <div class="site-section"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-5 text-black">Get <strong>In Touch</strong></h2>
              <form action="contactinsert.php" method="POST">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="fname" pattern="^[A-Za-z]+\s?[A-Za-z]+$"placeholder="Your First Name" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lname" pattern="^[A-Za-z]+\s?[A-Za-z]+$" placeholder="Your Last Name" class="form-control form-control-lg" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="eaddress">Email Address</label>
                  <input type="email" id="eaddress" name="mail" pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})$" placeholder="Your Email Address" class="form-control form-control-lg" required>
                  
                </div>
                <div class="col-md-6 form-group">
                  <label for="tel">Contact Number</label>
                  <input type="text" id="tel" name="tel" placeholder="Any Contact Number" class="form-control form-control-lg" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Message</label>
                  <textarea  id="message" name="mess" cols="30" rows="10" class="form-control" placeholder="Feedback OR Any Remarks" required></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <input type="submit" name="sub" value="Send Message" onclick="ValidateEmail(document.mail)" class="btn btn-primary btn-lg px-5">
                </div>
              </div>
            </div>
            <div class="col-lg-5 ml-auto">
              <div class="mb-3 bg-white">
                <h3 class="mb-5 text-black">Contact Info</h3>
                <p class="mb-0 font-weight-bold text-black">Address</p>
                <p class="mb-4 text-black"><?php echo $d['Address'] ?></p>

                <p class="mb-0 font-weight-bold text-black">Phone</p>
                <p class="mb-4"><?php echo $d['Phone'] ?></p>

                <p class="mb-0 font-weight-bold text-black">Email Address</p>
                <p class="mb-0"><?php echo $d['Email'] ?></p>

              </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
      
      
     <?php
include('Footer.php')
?>