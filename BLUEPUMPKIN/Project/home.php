<?php
include('connect.php');
include 'header.php';
?>
<style>
	.rows{
		margin-left: 50px !important;

	}
	.owl-nav{ display: none !important;

	}
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

</style>
<body >
	<!--================ start banner Area =================-->
	<section class="home-banner-area" id="home">
		<div class="container">
			<div class="row justify-content-end fullscreen">
				<div class="col-lg-6 col-md-12 home-banner-left d-flex fullscreen align-items-center">
					<div>
						<h1 class="">
							We Are <span>Blue</span>. <br>
							Pumpkin & Internet <br>
							<span>Service</span> Provider.
						</h1>

						<a href="admin/login.php" class="primary-btn">Click here to login</a>


					</div>
				</div>
				<div class="col-lg-6 col-md-12 no-padding home-banner-right d-flex fullscreen align-items-end">
					<img class="img-fluid" src="img/header-img.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!--================ Start Brand Area =================-->

	<!--================ End Brand Area =================-->

	<!--================ Start Service Area =================-->

	<section class="service-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9 text-center">
					<div class="section-title">
						<p>We Are Providing these services</p>
						<h1>We Are Blue <span>Pumpkin.</span> We Provide These <br> Services to Our Customers</h1>
					</div>
				</div>
			</div>
			<div class="rows">
				<div class="row">
					<!-- single-features -->
					<div class="col-lg-5 col-sm-6 col-md-6">
						<div class="single-service">
							<div class="service-icon">
								<img src="img/service/shape1.png" alt="">
								<img class="s-icon" src="img/service/icon1.png" alt="">
								<img class="clr-icon" src="img/service/clr-icon2.png" alt="">
							</div>
							<div class="service-content">
								<h4>Dial up Services</h4>
								<p>Dial-up internet works by taking over the signal of a pre-existing phone line and changing it from communicating voice to communicating data. The amount of data that dial-up internet can transfer via the phone line is very limited, which results in low speeds that do not qualify as broadband.</p>
							</div>
						</div>
					</div>
					<!-- single-features -->
					<div class="col-lg-5 offset-lg-1 col-sm-6 col-md-6">
						<div class="single-service">
							<div class="service-icon">
								<img src="img/service/shape1.png" alt="">
								<img class="s-icon" src="img/service/icon2.png" alt="">
								<img class="clr-icon" src="img/service/clr-icon1.png" alt="">
							</div>
							<div class="service-content">
								<h4>Broadband Services</h4>
								<p>Broadband Internet service truly is the most used form of Internet access because of its high access speeds; it is offered in four different forms, DSL (or Digital Subscriber Line), also fiber-optic, cable, and satellite. The old dial-up connection is the only non-broadband internet service available.</p>
							</div>
						</div>
					</div>
					<!-- single-features -->

				</div>
			</div>
		</section>
	</div>
	<!--================ End Service Area =================-->

	<!--================ Start Video Area =================-->
	<section class="video-sec-area" id="about-section">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-6 video-left justify-content-center align-items-center d-flex">
					<div class="overlay overlay-bg"></div>
					
						<span></span>
					</a>
				</div>
				<div class="col-lg-5 offset-lg-1 video-right">
					<h1>We Are Blue Pumpkin. <br>
					Some Info About Us</h1>
					<p>
						We are marketing agent of an internet marketing company, who provides different services like dial up services and the broadband services. Its a website for the interactive and entertainment purposes.  
					</p>

					<div class="counter_area" id="project_counter">
						<!-- single counter -->
						<div class="single_counter">
							<div class="info-content">

								<p>Qualified Employees</p>
							</div>
						</div>
						<!-- single counter -->
						<div class="single_counter">
							<div class="info-content">

								<p>So Many Solved Cases</p>
							</div>
						</div>
						<!-- single counter -->
						<div class="single_counter">
							<div class="info-content">

								<p>Trusted Clients</p>
							</div>
						</div>
						<!-- single counter -->
						<div class="single_counter">
							<div class="info-content">

								<p>So Many Achievements</p>
							</div>
						</div>
					</div>
				</div>
				<img class="img-fluid video-shape" src="img/video-bg-shape.png" alt="">
			</div>
		</div>
	</section>
	<!--================ End video Area =================-->

	<!--================ Start Portfolio Service Area =================-->
	<section class="portfolio-area section-gap">

	</section>
	<!--================ End Portfolio Service Area =================-->

	<!--================ Start Team Area =================-->
	<?php
	include('connect.php');
	$query4="SELECT W.id,E.Name,W.prize,E.image,ev.name FROM winner W JOIN participant P ON W.p_id = P.id JOIN employee_register1 E ON P.employee_id = E.id JOIN events ev ON P.event_id = ev.id ORDER BY W.id DESC LIMIT 1";
	$rows4=mysqli_query($con,$query4);
	$data4=mysqli_fetch_assoc($rows4)
	?>
	<section class="team-area">
		<div class="container">
			<div class="row align-items-center single-item">
			<!-- single carousel -->
			<?php echo"
			
			
				<div class=col-lg-6 col-md-6>
					<div class=team-left>
						<img class=img-fluid src='./admin/$data4[image]' alt=''>
						<div class=member-desc d-flex justify-content-between align-items-center>
							<div class=m-title>
								<h4>Name: $data4[Name]</h4>
								<h5>Competition: $data4[name]</h5>
								<p>Prize: $data4[prize]</p>
							</div>

						</div>
					</div>
				</div>";?>
				<div class="col-lg-5 offset-lg-1 col-md-6 team-right">
					<h1>Our Winner</h1>
					<p>
						We are Proud to Announce our Winner.<br>
						We hope All the best of luck to our dedicated employee<br>
						for all the future endeavours
					</p>
					<a class="primary-btn"> <b>Congratulations</b></a>
				</div>
			</div>
			<!-- single carousel -->
			<div class="row align-items-center single-item">


			</div>
		</div>
	</section>
	<!--================ End Team Area =================-->

	<!--================ Start Testimonial Area =================-->
	<section class="testimonial-area section-gap">

	</section>
	<!--================ End Testimonial Area =================-->

	<!--================ Start CTA Area =================-->

	<!--================ End CTA Area =================-->

	<!--================ Start Blog Area =================-->
	<?php
	include('connect.php');
	$query1="SELECT * FROM events WHERE category = 5 ORDER BY id DESC LIMIT 3";
	$rows1=mysqli_query($con,$query1);
	?>
	<section class="blog-area section-gap" id="Meetings">
		<div class="container">
			<div class="row align-items-end justify-content-center">
				<div class="col-lg-5 col-md-12 text-left">
					<div class="section-title">
						<h1 style="text-align: center;">Meetings</h1>

					</div>
				</div>

			</div>

			<div class="row blog-inner justify-content-center">
				<!-- single-blog -->
				<?php 
				while ($data1=mysqli_fetch_assoc($rows1)) {
					echo"
					<div class=col-lg-4 col-md-6 col-sm-6>
					<div class=single-blog>
					<div class=blog-thumb>
					<img class=img-fluid src='./admin/$data1[image]' alt=''>
					</div>
					<div class=blog-details>
					<div class=blog-meta>
					<span>$data1[date] | $data1[name]</span>
					</div>
					<h5><a href='#''>$data1[Brief_Dis]</a></h5>
					<p>$data1[Detail_Dis]</p>
					</div>
					</div>
					</div>";
				}
				?>

			</div>
		</div>
	</section>
	<?php
	include('connect.php');
	$query="SELECT * FROM events WHERE category = 6  ORDER BY id DESC LIMIT 3";
	$rows=mysqli_query($con,$query);
	?>
	<section class="blog-area section-gap" id="competition">
		<div class="container">
			<div class="row align-items-end justify-content-center">
				<div class="col-lg-5 col-md-12 text-left">
					<div class="section-title">
						<h1 style="text-align: center;">Competition</h1>

					</div>
				</div>

			</div>
			<div class="row blog-inner justify-content-center">
				<!-- single-blog -->
				<?php 
				while ($data=mysqli_fetch_assoc($rows)) {
					echo"
					<div class=col-lg-4 col-md-6 col-sm-6>
					<div class=single-blog>
					<div class=blog-thumb>
					<img class=img-fluid src='./admin/$data[image]' alt=''>
					</div>
					<div class=blog-details>
					<div class=blog-meta>
					<span>$data[date] | $data[name]</span>
					</div>
					<h5><a href='#''>$data[Brief_Dis]</a></h5>
					<p>$data[Detail_Dis]</p>
					</div>
					</div>
					</div>";
				}
				?>

			
			</div>
		</div>
	</section>
	<?php
	include('connect.php');
	$query2="SELECT * FROM events WHERE category = 7 ORDER BY id DESC LIMIT 3";
	$rows2=mysqli_query($con,$query2);
	?>
	<section class="blog-area section-gap" id="games">
		<div class="container">
			<div class="row align-items-end justify-content-center" >
				<div class="col-lg-5 col-md-12 text-left">
					<div class="section-title">
						<h1 style="text-align: center;">Games</h1>

					</div>
				</div>

			</div>
			<div class="row blog-inner justify-content-center">
				<!-- single-blog -->
								<?php 
				while ($data2=mysqli_fetch_assoc($rows2)) {
					echo"
					<div class=col-lg-4 col-md-6 col-sm-6>
					<div class=single-blog>
					<div class=blog-thumb>
					<img class=img-fluid src='./admin/$data2[image]' alt=''>
					</div>
					<div class=blog-details>
					<div class=blog-meta>
					<span>$data2[date] | $data2[name]</span>
					</div>
					<h5>$data2[Brief_Dis]</h5>
					<p>$data2[Detail_Dis]</p>
					</div>
					</div>
					</div>";
				}
				?>
				<!-- single-blog -->
				
			</div>
		</div>
	</section>
	
	<!--================ End Canvus Menu Area =================-->
<section class="blog-area section-gap" id="faq" >
		<div class="container">
			<div class="row align-items-end justify-content-center">
				<div class="col-lg-5 col-md-12 text-left">
					<div class="section-title">
						<h1 style="text-align: center;">FAQ</h1>

					</div>
				</div>

			</div>
			<div class="row blog-inner justify-content-center">
<br>
<br>
<br>
<button class="accordion">How to participate in the events? </button>
<div class="panel">
  <p>To participate in the event you need to login first then you will be able to participate any event you want.</p>
</div>

<button class="accordion">What if I am unable to login into the site? </button>
<div class="panel">
  <p> If you are unable to login to the site you should go to the head of your department and talk to them about your credentials.</p>
</div>

<button class="accordion">What if I am unable to send the participation request for the event?</button>
<div class="panel">
  <p>If you are unable to participate in any event you should meet the concernend person and talk to them.</p>
</div>
<button class="accordion">How can one be intimated with the upcoming events </button>
<div class="panel">
  <p>Throught this site you can get the page about upcoming events and the winners of the events  </p>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</div>
</section>

<BR>
<BR>
<BR>
<BR>
	<!--================Home Banner Area =================-->
	<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-left">
					<div class="page_link">

					</div>
					<h2>Contact Us</h2>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Contact Area =================-->
	<section class="contact_area section-gap" id="contact">
		<div class="container">

			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>California, United States</h6>
							<p>Santa monica bullevard</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6>03090078601</h6>
							<p>Mon to Fri 9am to 6 pm</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6>Maib@activebiz.ca</h6>
							<p>Send us your query anytime!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="" method="post" id="contactForm">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="subject" name="contact" placeholder="Contact No" pattern="^\d{4}-?\d{7}" required>
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" required></textarea>
						</div>
					</div>
					<div class="col-md-12 text-right">
						<button type="submit" value="submit" class="primary-btn" name="sub">Send Message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<?php
if(isset($_POST["sub"]))
{

	$a=$_POST["name"];
	$b=$_POST["email"];
	$c=$_POST["contact"];
	$d=$_POST["message"];
	$query="insert into contact(Name,Contact_no,Message,email) values ('$a','$c','$d','$b')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert('Your message has been sent, Thank You'); </script>";
	}
	else
	{
		echo "<script> alert('Retry');</script>";
	}
}



include 'footer.php';
?>
</section>
</body>