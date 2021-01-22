<!DOCTYPE html>
<html lang="en">

<head>
  <style>
  .blog .carousel-indicators {
	left: 0;
	top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 8px;
}

.blog .carousel-indicators .active {
background: #707070;


}
  </style>
  <title>Radio Cabs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
  <link rel="stylesheet" href="./index/fonts/icomoon/style.css">

  <link rel="stylesheet" href="./index/css/bootstrap.min.css">
  <link rel="stylesheet" href="./index/css/magnific-popup.css">
  <link rel="stylesheet" href="./index/css/jquery-ui.css">
  <link rel="stylesheet" href="./index/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./index/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="./index/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="./index/fonts/flaticon/font/flaticon.css">



  <link rel="stylesheet" href="./index/css/aos.css">

  <link rel="stylesheet" href="./index/css/style.css">


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <?php
    
    include('headerr.php');
    include('connect.php');
    $q = "Select * from company";
    $res = mysqli_query($con, $q);
    ?>

    <div class="container">
      <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
          <div class="feature-1 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-dollar"></span>
            </div>
            <h2 class="my-4 heading">Best Prices</h2>
            <span style="color: white">We offer 3 Membership Types</span>
            <br>
            <h6>Premium</h6>
            <h6>Basic</h6>
            <h6>Free</h6>
          </div>
        </div>
        <div class="col-md-4">
          <div class="free-quote bg-dark h-100">
            <h2 class="my-4 heading  text-center">Our City Back To Back</h2>
            
                <label for="fq_name">For out city back to back service, we have a special offer please call our 0314-2278722 for more details.</label>

                <h2 class="my-4 heading  text-center">Full Day</h2>
            
            <label for="fq_name">Full day package. Keep the cab with you all day long</label>
             
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-3 pricing h-100 text-center">
            <div class="icon">
              <span class="icon-phone"></span>
            </div>
            <h2 class="my-4 heading">24/7 Support</h2>
            <p>Round the Clock 24/7 service 365 days. Ability to source a cab for you within 30 minutes. We have our own garage and service station, and we attend any emergency services. Regular maintainence to ensure no vehicle breakdown in transit travel.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary">What We Offer</h2>
            <p class="color-black-opacity-5">Our Three Services</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon"></span></div>
              <div>
                <h3>RIGHT RIDE AT ANYTIME</h3>
                <p>There is no need to book the ride few hours earlier, if you need the ride at any hour or just now, you just need to pick up the phone, we're here to book the ride for you.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-taxi"></span></div>
              <div>
                <h3>OUR CABS</h3>
                <p>WhiteCab features a world-class fleet of latest-model Toyota Corolla Xli to provide safer and luxurious cabs around Karachi.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-car"></span></div>
              <div>
                <h3>WE PROMISE TO ANYWHERE</h3>
                <p>We value your time because your time is our reputation and we just can't stake our reputation at risk. We promise to provide the best cab service in Karachi,</p>
               
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <!-- <div class="site-section block-13">
       <div class="container"></div> -->


    <!-- <div class="owl-carousel nonloop-block-13">
        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Storage</h3>
              <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Air Transports</h3>
              <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Cargo Transports</h3>
              <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Cargo Ship</h3>
              <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Ware Housing</h3>
              <p class="px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempore ullam minus voluptate libero.</p>
            </div>
          </a>
        </div>
      </div>
    </div> -->


    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">More Services</h2>
            <p class="color-black-opacity-5">We Offer The Following Services.</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-city"></span></div>
              <div>
                <h3>Airport Drop</h3>
                <p>Call the cab to your door step for Airport drop.</p>
                <!-- <p><a href="#">Learn More</a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-city"></span></div>
              <div>
                <h3>City Service</h3>
                <p>Roam the city at your doorstep and drop at any point within city.</p>
                <!-- <p><a href="#">Learn More</a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-frontal-city"></span></div>
              <div>
                <h3>Shopping</h3>
                <p>An ideal package for your shopping needs.</p>
                <!-- <p><a href="#">Learn More</a></p> -->
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-city"></span></div>
              <div>
                <h3>Full Day</h3>
                <p>Full day package. Keep the cab with you all day long.</p>
                <!-- <p><a href="#">Learn More</a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-city"></span></div>
              <div>
                <h3>Out City Back To Back</h3>
                <p>For out city back to back service, we have a special offer please call our 0314-2278722 for more details.</p>
                <!-- <p><a href="#">Learn More</a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-city"></span></div>
              <div>
                <h3>Keep The Cabs</h3>
                <p>Keep the cab based on hour and km rates.</p>
                <!-- <p><a href="#">Learn More</a></p> -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(./index/images/hero_bg_2.jpg); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
            <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            <h2 class="text-white font-weight-light mb-5 h1">View Our Services By Watching This Short Video</h2>

          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="site-section border-bottom">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Testimonials</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="./index/images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>John Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="./index/images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Aguilar</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="./index/images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Robert Spears</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="./index/images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div> -->


    <!-- <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black">Try Our Services</h2>
            <p class="mb-0"><a href="booking.html" class="btn btn-primary py-3 px-5 text-white">Get Started</a></p>
          </div>
        </div>
      </div>
    </div> -->

   
  </div>
   <?php
    include('footerr.php');
    ?>


  <script src="./index/js/jquery-3.3.1.min.js"></script>
  <script src="./index/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="./index/js/jquery-ui.js"></script>
  <script src="./index/js/popper.min.js"></script>
  <script src="./index/js/bootstrap.min.js"></script>
  <script src="./index/js/owl.carousel.min.js"></script>
  <script src="./index/js/jquery.stellar.min.js"></script>
  <script src="./index/js/jquery.countdown.min.js"></script>
  <script src="./index/js/jquery.magnific-popup.min.js"></script>
  <script src="./index/js/bootstrap-datepicker.min.js"></script>
  <script src="./index/js/aos.js"></script>

  <script src="./index/js/main.js"></script>


  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>

</html>