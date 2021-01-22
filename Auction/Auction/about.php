<?php
include('Header.php');
include('connection.php');
$q="SELECT COUNT(Id) AS NumberOfBids FROM bid";
$run=mysqli_query($con,$q);
$d=mysqli_fetch_assoc($run);

$q1="SELECT COUNT(Id) AS NumberOfClients FROM users";
$run1=mysqli_query($con,$q1);
$d1=mysqli_fetch_assoc($run1);


$q11="SELECT COUNT(Id) AS NumberOfWinners FROM auctionsuccess";
$run11=mysqli_query($con,$q11);
$d11=mysqli_fetch_assoc($run11);
?>

  


      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <h1>About Us</h1>
              
            </div>
          </div>
        </div>
      </div>


      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 pl-lg-5">
              <div class="mb-5">
                <span class="caption">About?</span>
                <h2 class="text-black">About <strong>Us</strong></h2>
              </div>
              <div class="d-flex feature-icon mb-3">
                <span class="wrap-icon icon-paper-plane mr-2"></span>
                <div>
                  <h3>Fast Support</h3>
                  <p>Be cautious if you receive unsolicited requests to access your computer !</p>
                </div>
              </div>

              <div class="d-flex feature-icon mb-3">
                <span class="wrap-icon icon-smile-o mr-2"></span>
                <div>
                  <h3>Happy Customers</h3>
                  <p>A happy customer isn't just someone who makes a purchase with you today !</p>
                </div>
              </div>

              <div class="d-flex feature-icon mb-3">
                <span class="wrap-icon icon-support mr-2"></span>
                <div>
                  <h3>24/7 Support</h3>
                  <p>24-7 service (usually pronounced "twenty-four seven") is service that is available at any time and usually, every day !</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="numbers">
                <strong class="d-block"><?php echo $d1['NumberOfClients'] ?></strong>
                <span>Number of Clients</span>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="numbers">
                <strong class="d-block"><?php echo $d['NumberOfBids'] ?></strong>
                <span>Numbers of Bid</span>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="numbers">
                <strong class="d-block"><?php echo $d11['NumberOfWinners'] ?></strong>
                <span>Number of Sales</span>
              </div>
            </div>
       
          </div>
        </div>
      </div>



      <div class="site-section pb-0">
        <div class="container">
          <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-4 mb-5 text-center">
              <span class="caption">Our Team</span>
              <h2 class="mb-2 text-black text-center">Our <strong>Team</strong></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-5">

              <div class="feature-1 border person text-center">
                <img src="images/person_1.png" alt="Image" class="img-fluid">
                <div class="feature-1-content">
                  <h2>Humaira Asghar</h2>
                  <span class="position mb-3 d-block">Back End Developer</span>    
                  <p>Course: ACCP-EE</p>
                  <p>Batch: 1804B1</p>
                  <p>Roll Number: 1100874</p>
                  <p>Faculty: Miss Aatika Liaquat</p>
                  <p>Coordinator: Sir Bilal Khan</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-5">
              <div class="feature-1 border person text-center">
                <img src="images/person_2.png" alt="Image" class="img-fluid">
                <div class="feature-1-content">
                  <h2>Ahmed Faraz</h2>
                  <span class="position mb-3 d-block">Back & Front Programmer</span>    
                  <p>Course: ACCP-EE</p>
                  <p>Batch: 1804B1</p>
                  <p>Roll Number: 1104407</p>
                  <p>Faculty: Miss Aatika Liaquat</p>
                  <p>Coordinator: Sir Bilal Khan</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-5">
              <div class="feature-1 border person text-center">
                <img src="images/person_3.png" alt="Image" class="img-fluid">
                <div class="feature-1-content">
                  <h2>Mehwish Tariq</h2>
                  <span class="position mb-3 d-block">UX / UI  Designer</span>    
                  <p>Course: ACCP-EE</p>
                  <p>Batch: 1804B1</p>
                  <p>Roll Number: 1114548</p>
                  <p>Faculty: Miss Aatika Liaquat</p>
                  <p>Coordinator: Sir Bilal Khan</p>
                </div>
              </div>
            </div>

            
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-5">
              <div class="feature-1 border person text-center">
                <img src="images/person_4.png" alt="Image" class="img-fluid">
                <div class="feature-1-content">
                  <h2>Tehreem Sultana</h2>
                  <span class="position mb-3 d-block">Database Analyist</span>    
                  <p>Course: ACCP-EE</p>
                  <p>Batch: 1804B1</p>
                  <p>Roll Number: 1107670</p>
                  <p>Faculty: Miss Aatika Liaquat</p>
                  <p>Coordinator: Sir Bilal Khan</p>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <?php if($_SESSION['AUN']==null) { ?>
              
              
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="text-black mb-4">Create an account and start Buy, Bid or Sell Now!</h2>
              <p><a href="login.php" class="btn btn-primary">Login</a></p>
            </div>
          </div>
        </div>  
      </div>

     
<?php
}
include('Footer.php')
?>
  