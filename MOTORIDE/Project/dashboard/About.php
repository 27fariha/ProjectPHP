<?php session_start();?>
<?php
if($_SESSION['admin']==null){
	header('location:./AdminLogin.php');
}
?>
<?php
include ('head.php');
?>
<h4 class="page-title">About</h4>
				<div class="row">
				</div>
				<form method="POST" action="" enctype="multipart/form-data">
					<div class="card">
						<div class="card-header">
							<div class="card-title">Form Control Styles <button><a href="./Logout.php">Log Out</a></button></div>
						</div>
						<div class="card-body">

							<div class="form-group">
								<label for="largeInput">Message</label>
								<input name="Message" type="text" class="form-control form-control" id="defaultInput" placeholder="Message">
							</div>
							<div class="form-group">
								<label for="largeInput">Location</label>
								<input name="Location" type="text" class="form-control form-control" id="defaultInput" placeholder="Location">
							</div>
							<div class="form-group">
								<label for="largeInput">Ph_No</label>
								<input name="Ph_No" type="text" class="form-control form-control" id="defaultInput" placeholder="Ph_No">
							</div>
							<div class="form-group">
								<label for="largeInput">All Ph_No</label>
								<input name="All_Ph_No" type="varchar" class="form-control form-control" id="defaultInput" placeholder="All Ph_No">
							</div>

						</div>
						<div class="card-action">
							<button class="btn btn-success" type="submit" name='sub'>Submit</button>
							<button class="btn btn-danger">Cancel</button>
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

<?php
include ('footer.php');
?>

<?php
include('db.php');
if(isset($_POST['sub']))
{
	$msg=$_POST['Message'];
	$loc=$_POST['Location'];
	$phn=$_POST['Ph_No'];
	$all_phn=$_POST['All_Ph_No'];
	

	$q="INSERT into about(Message,Location,Ph_No,All_Ph_No) VALUES ('$msg','$loc','$phn','$all_phn')";
	$r=mysqli_query($con,$q);

	if($r)
	{
		echo "<script> alert('insert');</script>";
	}
	else{
		echo "<script> alert('error');</script>";
	}

}
?>