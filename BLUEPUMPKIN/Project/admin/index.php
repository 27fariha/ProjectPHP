<style>
.main-chart {
    padding-left: 68px !important;
    padding-top: 20px;
}
</style>
<?php

include 'header.php';
?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
           <h2>Welcome <?php echo $_SESSION["NAME"];?></h2>

<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>

<body>

<h2 class="w3-center"></h2>

<div class="" style="max-width:500px">
  
  <img class="mySlides" src="img/2.png" style="width:1000px">
  <img class="mySlides" src="img/3.png" style="width:1000px">
  <img class="mySlides" src="img/4.jpg" style="width:1000px">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>



          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
     
    </section>