<?php
include('Header.php');
include('connection.php')
?>


      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <h1>Login Here</h1>
              <p>For Selling And Buying You Have To LOGIN First.</p>
              
            </div>
          </div>
        </div>
      </div>


      <div class="site-section" style="margin-right:285px;">
        <div class="container">
         <form action="" method="POST">
          <div style="margin-left:300px;" class="row justify-content-center">
          
            <div class="col-lg-5">
              <h2 class="mb-5 text-black"><strong>Log In</strong></h2>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="useremail">Email</label>
                  <input type="email" name="mail" pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})$" id="useremail" placeholder="Your Email Address" class="form-control form-control-lg">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="passlogin">Password</label>
                  <input type="password" name="password" id="passlogin" placeholder="Your Password" class="form-control form-control-lg">
                  
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <input type="submit" name="sub" value="Login" class="btn btn-primary btn-lg px-5">
                </div>
              </div>
            </div>
           
           
            
          </div>
          </form>
        </div>
      </div>
      
      <?php
if(isset($_POST['sub']))
{
$un=$_POST['mail'];
$pas=$_POST['password'];
$q="select * from users where Email='$un' && Password='$pas'";
$run=mysqli_query($con,$q);
$f=mysqli_fetch_assoc($run);
$myid=$f['Id'];
$img=$f['Image'];
if($run)
{
	$row=mysqli_num_rows($run);
	if($row>0){
		echo "<script>alert('Logged in'); window.location.href='index.php'</script>";
		$_SESSION['AUN']=$un;
		$_SESSION['AUI']=$myid;
		$_SESSION['I']=$img;
	}
	else{
		echo "<script>alert('failed') </script>";
		}
}

}
include('Footer.php');
?>