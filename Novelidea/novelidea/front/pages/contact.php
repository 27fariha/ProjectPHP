<?php

include('header.php');
include('connection.php');

$q = "SELECT * from info";
$rows = mysqli_query($con,$q);
$data = mysqli_fetch_assoc($rows);

?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate mb-0 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact Us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper px-md-4">
							<div class="row mb-5">
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Address:</span> <?php echo $data['address']; ?> </p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Phone:</span> <a> <?php echo $data['phone']; ?> </a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Email:</span> <a><?php echo $data['email']; ?></a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fas fa-fax"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Fax:</span> <a><?php echo $data['fax']; ?></a></p>
					          </div>
				          </div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-md-12">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Send us a message</h3>
										<form method="POST" id="contactForm" action="contact_create.php" name="contactForm" class="contactForm">
											<div class="row">
<?php
											if($_SESSION['ID_U']!=null)
{
	echo "
												<div class='col-md-6'>
													<div class='form-group'>
														<label class='label' for='name'>Full Name</label>
														<input type='text' class='form-control' name='name' readonly value='$_SESSION[NAME_U]' id='name' placeholder='Name'>
													</div>
												</div>
												<div class='col-md-6'> 
													<div class='form-group'>
														<label class='label' for='email'>Email Address</label>
														<input type='email' class='form-control' name='email' readonly value='$_SESSION[MAIL_U]' id='email' placeholder='Email'>
													</div>
												</div> ";
}
else
{
	echo "
	<div class='col-md-6'>
		<div class='form-group'>
			<label class='label' for='name'>Full Name</label>
			<input type='text' class='form-control' name='name' id='name' placeholder='Name'>
		</div>
	</div>
	<div class='col-md-6'> 
		<div class='form-group'>
			<label class='label' for='email'>Email Address</label>
			<input type='email' class='form-control' name='email' id='email' placeholder='Email'>
		</div>
	</div> ";
}
?>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Subject</label>
														<input type="text" maxlength="100" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Message</label>
														<textarea name="message" maxlength="250" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
													</div>
												</div>

												<div class="col-md-12">
												<div class="form-group">
                                        			<input hidden type="date" style="text-indent: 60px;"  value="<?php echo date('Y-m-d')?>"  id="txtDate" class="form-control" name="date" required>
                                    			</div>
                                				</div>

												<div class="col-md-12">
													<div class="form-group">
														<input name="sub" type="submit" value="Send Message" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script>
  document.getElementById("txtDate").disabled = true;
</script>


<script>

$('#txtDate').datepicker({
      dateFormat: 'yy-mm-dd'
});

</script>

		<?php

include('footer.php');

?>