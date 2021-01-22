

<?php
include('headerr.php');
include('connect.php');

$q = "Select * from company where Membership='Premium'";
$res = mysqli_query($con, $q);
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Strategy &mdash; Free Portfolio Template by Colorlib</title>
  <link rel="stylesheet" href="./gallery/css/bootstrap.min.css">
  <link rel="stylesheet" href="./gallery/css/aos.min.css">
  <link rel="stylesheet" href="./gallery/css/hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="./gallery/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./gallery/fonts/icomoon/style.css">
  <link rel="stylesheet" href="./gallery/css/animsition.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="./gallery/css/style.css">
  <style>
    .project .project-hover,
    .project .post-hover,
    .post .project-hover,
    .post .post-hover {
      position: absolute;
      top: 0;
      left: 0;
      right: 258px !important;
      bottom: 0;
      background: rgba(220, 53, 69, 0.9);
      visibility: hidden;
      opacity: 0;
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease;
    }
  </style>

</head>

<body>

  <div>
    <br />
    <br />
    <br />
    <br />
    <br />
  </div>
  <h1 style="color: orange;display:flex;justify-content:center;font-weight:bold">OUR COMPANIES<h1>
  <br><br>
  <div class="container">
<div class="row">
  
    <?php
    #<img src='$data[Logo]'  height=273 width=400 alt=Free Template class=img-fluid>
    while ($data = mysqli_fetch_assoc($res)) {
      echo "
   
   <div class='col-lg-4'>
   <div class='col-lg-29'>
                <a class=post animsition-link href=blog-single.html data-aos=fade-up data-aos-delay=100>
                  <figure>
                  <img src='$data[Logo]'  height=273 width=387 alt=Free Template class=img-fluid>
                  </figure>
                  <div class=post-hover>
                    <div class=post-hover-inner>
                      <h2>$data[Company_Name]</h2>
                      <span>$data[Address]</span>
                      <span>$data[Email]</span>
                    </div>
                  </div>
                </a>
                </div>
              </div>";
    }
    ?>
</div>
  </div>
  <script src="./gallery/js/scripts-all.js"></script>
  <script src="./gallery/js/main.js"></script>

</body>

<?php
  include('footerr.php');
  ?>