<?php
include('Header.php')
?>


      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <h1> Register Here</h1>
              <p>For Selling And Buying You Have To REGISTER First.</p>
            
            </div>
          </div>
        </div>
      </div>


      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">

           <form action="RegisterInsert.php" method="POST" enctype="multipart/form-data">

            <div class="col-lg-12">
              <h2 class="mb-5 text-black"><strong>Register</strong></h2>
              
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">First Name</label>
                  <input type="text" pattern="^[A-Za-z]+\s?[A-Za-z]+$"  name="fname" id="fname"  placeholder="Your First Name" class="form-control form-control-lg" required>
                </div>
        
                <div class="col-md-6 form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" pattern="^[A-Za-z]+\s?[A-Za-z]+$" name="lname" id="lname" placeholder="Your Last Name" class="form-control form-control-lg" required>
                </div>
              </div>                               
              


              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="mail" >Email</label>
                  <input type="email" name="email" pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})$" id="email"  placeholder="Your Email Address" class="form-control form-control-lg" required>
                </div>
              
                <div class="col-md-6 form-group">
                  <label for="password">Password</label>
                  <input type="password" name="pass" id="password"  placeholder="Enter Password" class="form-control form-control-lg" required>
                </div>
              </div>

         
<?php
           
              $today = date("y-m-d", strtotime('-18 years')); ?>
                <div class="row">
                 <div class="col-md-6 form-group">
                  <label for="dateofbirth">Date-Of-Birth </label>
                  <input type="Date" max="20<?php echo $today;?>" name="dob" id="dateofbirth" placeholder="Your Date-Of-Birth" class="form-control form-control-lg" required>
                 </div>
              

          
                 <div class="col-md-6 form-group">
                  <label for="nic">CNIC</label>
                  <input type="text" name="cnic" id="nic" placeholder="Your NIC" class="form-control form-control-lg" required>
                 </div>
                </div>

                <div class="row">
                <div class="col-md-6 form-group">
                  <label for="contact">Contact</label>
                  <input type="type" name="con" pattern="^[0-9]+*-[0-9-]{4,7}+$" id="contact" placeholder="Your Contact Number" class="form-control form-control-lg" required>
                </div>
           
              


                
                 <div class="col-md-6 form-group">
                  <label for="company">Company</label>
                  <input type="text" name="company" id="company" placeholder="Your Company Name" class="form-control form-control-lg" required>
                </div>
                </div>
              

                   <div class="col-md-6">
                          <div>
                              <label>Image</label>
                              <br>
                              <input type="file"  name="img" onChange="readURL(this)"  required>
                                <img id="proimg" height='50' > </input>
                          </div>
                 </div>
              <div class="row">
                <div style="margin-left:220px;" class="col-3">
                  <input type="submit" name="sub" value="Register"  class="btn btn-primary btn-lg px-5">
                </div>
              </div>
            </div>    
            
             </form>
          </div>
     
        </div>
        </div>
      
      
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

     <?php
include('Footer.php')
?>