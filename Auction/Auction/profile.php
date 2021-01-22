<?php
include "Header.php";
?>
<main>

<!--? Hero Start -->
<div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row form-group align-items-center justify-content-center">
            <div class="col-md-7 mx-auto text-center" data-aos="fade-up">
              <h1>My Profile</h1>
              <p>You can view or update your PROFILE</p>
              
            </div>
          </div>
        </div>
      </div>
<!-- Hero End -->
<!-- ================ contact section start ================= -->



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: white;}
#News {background-color: white;}
#Contact {background-color: white;}
#About {background-color: white;}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, 'orange')" id="defaultOpen">Profile</button>
<button class="tablink" onclick="openPage('News', this, 'orange')" >Edit my products</button>
<button class="tablink" onclick="openPage('Contact', this, 'orange')">Bids on my products</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">My bids and their results</button>

<div id="Home" class="tabcontent">

<div class="container">
    <div class="row">
    <div class="col-sm-3">
       <?php
           include "connection.php";
           $id=$_SESSION['I'];
           $q="select * from users where Image='$id'";
           $run=mysqli_query($con,$q);
           $data=mysqli_fetch_assoc($run);
           ?>
            <div class="text-center">
             <?php echo "<img src='$data[Image]' class='avatar img-thumbnail' alt='avatar'>";?>
             <br>
 <input type="file" name="file1"  onChange="readURL(this)" >
 <img src="" height=100 id="proimg">

                          
            </div>
            </div>
   

     <div class="col-sm-9">

<h2><?php echo $_SESSION['AUN']; ?></h2>




    <?php
            include "connection.php";
            $id=$_SESSION['AUI'];
            $q="select * from users where Id='$id'";
            $run=mysqli_query($con,$q);
            $data=mysqli_fetch_assoc($run);
          ?>






<form action="proedit.php" method="POST" enctype="multipart/form-data">

 <div class="col-lg-12">
   <h2 class="mb-5 text-black"><strong>Profile</strong></h2>
   
  
   <div class="row form-group form-group">
     <div class="col-md-6 form-group">
       <label for="fname">First Name</label>
       <input type="text"  name="fn" id="fname"  placeholder="Your First Name" class="form-control form-control-lg"  value="<?php echo $data['FirstName']; ?>" required>
     </div>

     <div class="col-md-6 form-group">
       <label for="lname">Last Name</label>
       <input type="text" name="ln" id="lname" placeholder="Your Last Name" class="form-control form-control-lg"  value="<?php echo $data['LastName']; ?>" required>
     </div>
   </div>


   <div class="row form-group">
     <div class="col-md-6 form-group">
       <label for="mail" >Email</label>
       <input type="email" name="em" id="email"  placeholder="Your Email Address" class="form-control form-control-lg"  value="<?php echo $data['Email']; ?>" required>
     </div>
   
     <div class="col-md-6 form-group">
       <label for="password">Password</label>
       <input type="text" name="pd" id="password"  placeholder="Enter Password" class="form-control form-control-lg"  value="<?php echo $data['Password']; ?>" required>
     </div>
   </div>

     <div class="row form-group">
      <div class="col-md-6 form-group">
       <label for="dateofbirth">Date-Of-Birth </label>
       <input type="type" name="dob" id="dateofbirth" placeholder="Your Date-Of-Birth" class="form-control form-control-lg"  value="<?php echo $data['DateOfBirth']; ?>" required>
      </div>
   


      <div class="col-md-6 form-group">
       <label for="nic">CNIC</label>
       <input type="text" name="cn" id="nic" placeholder="Your NIC" class="form-control form-control-lg"  value="<?php echo $data['Cnic']; ?>" required>
      </div>
     </div>

     <div class="row form-group">
     <div class="col-md-6 form-group">
       <label for="contact">Contact</label>
       <input type="type" name="con" id="contact"placeholder="Your Contact Number" class="form-control form-control-lg"  value="<?php echo $data['Contact']; ?>" required>
     </div>

      <div class="col-md-6 form-group">
       <label for="company">Company</label>
       <input type="text" name="com" id="company" placeholder="Your Company Name" class="form-control form-control-lg"  value="<?php echo $data['Company']; ?>" required>
     </div> </div>

     <div class="row">
                <div style="margin-left:300px;" class="col-3">
                  <input type="submit" name="sub" value="DONE"  class="btn btn-primary btn-lg px-5">
                </div>
              </div>
     </div> 
  
 </div>    
 
  </form>



</div>
</div>
</div>
</div>


<!-- ================ 3rd ================= -->

<div id="News" class="tabcontent">
<?php
include('connection.php');
$qe="Select * from product where SellerId='$_SESSION[AUI]'";
$rowse=mysqli_query($con,$qe);

?>
 
<div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                   <h5> <a href="sell.php" style="color:rgb(10, 10, 48)">Create New</a> </h5>
                    <thead class=" text-primary">
                     
                      <th>
                        Product Name
                      </th>
                        <th>
                      Description
                      </th>
                      <th>
                        Initial Bid
                      </th>
                      <th>
                        Image
                      </th>
                      <th>
                        Date Of Post
                      </th>
                      <th>
                       Closing Date
                      </th>
                      <th>
                        Status
                      </th>
                          <th>
                        Edit
                      </th>
                          <th>
                       Delete
                      </th>
                  
                    </thead>
                    <tbody style="color:black">
                  <?php
while($datae=mysqli_fetch_assoc($rowse)){ ?>
                      <tr>
                         
                        <td>
                       <?php echo $datae['ProductName'] ?>
                        </td>
                         <td>
                       <?php echo $datae['Description'] ?>
                        </td>
                         <td>
                       <?php echo $datae['InitialBid'] ?>
                        </td>
                         <td>
                          <img src="<?php echo $datae['Image'] ?>" height=100>
                        </td>
                         <td>
                       <?php echo $datae['DateOfPost'] ?>
                        </td>
                       <td>
                       <?php echo $datae['ClosingDate'] ?>
                        </td>
                         <td>
                       <?php echo $datae['Status'] ?>
                        </td>
<td> <a href='ProductUpdate.php?idd=<?php echo $datae['Id']?>'> Edit </a></td>
 <td> <a href='PrductDelete.php?idd=<?php echo $datae['Id']?>'>  Delete </a></td>
                      </tr>
                <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>










</div>

<div id="Contact" class="tabcontent">
<?php
include('connection.php');
$date_now = date("Y-m-d");
$qb="Select bid.*,users.Email,users.FirstName,product.* from bid join product on bid.ProductId=Product.Id join users on bid.BuyerId=users.Id where product.SellerId='$_SESSION[AUI]' and ClosingDate >='$date_now'";
$rowsb=mysqli_query($con,$qb);

$qbm="Select bid.*,users.Email,users.FirstName,product.Image from bid join product on bid.ProductId=Product.Id join users on bid.BuyerId=users.Id where product.SellerId='$_SESSION[AUI]' and ClosingDate >='$date_now' and product.status='pending' and BidPrice=(select max(BidPrice) from bid )";
$rowsbm=mysqli_query($con,$qbm);
?>
<h3> Winners </h3>
  <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      
                      <th>
                        Bidder Name
                      </th>
                      <th>
                        Bidder Email
                      </th>
                       <th>
                        Product 
                      </th>
                       <th>
                        Bid Price
                      </th>
                      <th>
                        Date Of Bid
                      </th>
                   
                  
                    </thead>
                    <tbody style="color:black">
                  <?php
while($databm=mysqli_fetch_assoc($rowsbm)){ ?>
 <tr>
                         <td>
                       <?php echo $databm['FirstName'] ?>
                        </td>
                        <td>
                       <?php echo $databm['Email'] ?>
                        </td>
                         <td>
                      <img src=" <?php echo $databm['Image'] ?>" height=100>
                        </td>
                        <td>
                       <?php echo $databm['BidPrice'] ?>
                        </td>
                       <td>
                       <?php echo $databm['Date'] ?>
                        </td>
                        <td>
                    <a href="done.php?bidd=<?php echo $databm['Id'] ?>" > Done </a>
                        </td>


                      </tr>
                <?php } ?>
                    </tbody>
                  </table>



<!--------------->
<h3> Active Auction </h3>
  <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      
                      <th>
                        Bidder Name
                      </th>
                      <th>
                        Bidder Email
                      </th>
                       <th>
                        Product 
                      </th>
                       <th>
                        Bid Price
                      </th>
                      <th>
                        Date Of Bid
                      </th>
                         
                         
                  
                    </thead>
                    <tbody style="color:black">
                  <?php
while($datab=mysqli_fetch_assoc($rowsb)){ ?>
                      <tr>
                         <td>
                       <?php echo $datab['FirstName'] ?>
                        </td>
                        <td>
                       <?php echo $datab['Email'] ?>
                        </td>
                         <td>
                      <img src=" <?php echo $datab['Image'] ?>" height=100>
                        </td>
                        <td>
                       <?php echo $datab['BidPrice'] ?>
                        </td>
                       <td>
                       <?php echo $datab['Date'] ?>
                        </td>

                      </tr>
                <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
  





</div>

<div id="About" class="tabcontent">

<?php
include('connection.php');
$date_now = date("Y-m-d");
$qbx="Select * from bid join product on bid.ProductId=Product.Id where bid.BuyerId='$_SESSION[AUI]'  and ClosingDate >='$date_now'";
$rowsbx=mysqli_query($con,$qbx);

?>
<h3> Active Bids </h3>
  <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      
                       <th>
                        Product 
                      </th>
                      <th>
                      Initial Bid
                      </th>
                       <th>
                        Your Bid
                      </th>
                      <th>
                        Bid On
                      </th>
                      <th>
                     Closing Date
                      </th>
                
                  
                    </thead>
                    <tbody style="color:black">
                  <?php
while($databx=mysqli_fetch_assoc($rowsbx)){ ?>
                      <tr>
                       
                         <td>
                      <img src="<?php echo $databx['Image']?>" height=100>
                        </td>
                        <td>
                        <?php echo $databx['InitialBid'] ?>
                        </td>
                        <td>
                       <?php echo $databx['BidPrice'] ?>
                        </td>
                       <td>
                       <?php echo $databx['Date'] ?>
                        </td>
                        <td>
                       <?php echo $databx['ClosingDate'] ?>
                        </td>

                      </tr>
                <?php } ?>
                    </tbody>
                  </table>
                </div>
                <h3> Past Bids </h3>
<?php
include('connection.php');
$qbx="Select * from bid join product on bid.ProductId=Product.Id where bid.BuyerId='$_SESSION[AUI]'  and ClosingDate <='$date_now'";


$rowsbx=mysqli_query($con,$qbx);



?>
  <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      
                       <th>
                        Product 
                      </th>
                      <th>
                      Initial Bid
                      </th>
                       <th>
                        Your Bid
                      </th>
                      <th>
                        Bid On
                      </th>
                      <th>
                     Closing Date
                      </th>
                      <th>
                     Status
                      </th>

                        
                  
                    </thead>
                    <tbody style="color:black">
                  <?php
while($databx=mysqli_fetch_assoc($rowsbx)){ ?>
                      <tr>
                       
                         <td>
                      <img src="<?php echo $databx['Image']?>" height=100>
                        </td>
                        <td>
                        <?php echo $databx['InitialBid'] ?>
                        </td>
                        <td>
                       <?php echo $databx['BidPrice'] ?>
                        </td>
                       <td>
                       <?php echo $databx['Date'] ?>
                        </td>
                        <td>
                       <?php echo $databx['ClosingDate'] ?>
                        </td>

                        <td>
                       <?php echo $databx['Status'] ?>
                        </td>
<?php  
$qbxy="Select * from bid join auctionsuccess on auctionsuccess.bidId=bid.Id where bid.BuyerId='$_SESSION[AUI]' and bid.ProductId='$databx[ProductId]'";
$rowsbxy=mysqli_query($con,$qbxy);
$databxy=mysqli_fetch_assoc($rowsbxy);
if($databxy['ProductId']==$databx['ProductId']) { ?>
                        <td>
                     YOU WON
                        </td>
<?php } ?>






                      </tr>
                <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



              </div>
          
            </div>












            
          </div>

<!---------------->














</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 















<?php
include('Footer.php')
?>