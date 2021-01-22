<?php

include('header.php');
if (!isset($_SESSION["ID_U"]))
{
   header("location: login.php");
}

include('connection.php');

$x=$_GET['idd'];
$q="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F WHERE Book_ID='$x' ORDER BY Release_Date DESC ";
$rows=mysqli_query($con,$q);
$v=$_SESSION['SUBS_U'];

?>
    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">

                <div class="col-lg-4 order-lg-2 order-1">
                <?php         
			  while($data=mysqli_fetch_assoc($rows)){
				?>
                    <div class="image_selected"><img src="<?php echo "../../Dashboard/images/".$data['Book_Cover']." ";?>" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="book.php">Books</a></li>
                                <li class="breadcrumb-item active"><?php echo $data["Book_Name"]; ?></li>
                            </ol>
                        </nav>
                        <div class="product_name"><?php echo $data["Book_Name"]; ?> by <a data-toggle="tooltip" data-placement="right" title="View all books of <?php echo $data['Author']; ?>" href="<?php echo "book_author.php?idd=$data[Book_ID]"; ?>"> <?php echo $data["Author"]; ?> </a></div>

                        <?php 
                        if($data["Premium"]=="Yes")
                    echo    "<div class='row' style='margin-top: 0px;'>
                            <div class='col-xs-6' style='margin-left: 15px;'> <p style='color:red;'>PREMIUM</p> </div>
                            </div>";
                        ?>
                        <?php if($data["Price"]!= 0){ ?>
                        <div> <span class="product_price">$<?php echo $data["Price"]; ?></span> </div>
                        <?php } ?>
                        <?php if($data["Price"]== 0){ ?>
                            <div style="color:green;"> <span class="product_price">FREE</span> </div>
                        <?php } ?>
                        <hr class="singleline">
                        <div> <span class="product_info"><?php echo $data["Detailed_Description"]; ?><span> </div>
                        <div>
                            <div class="row">

                                <div class="col-md-7"> </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">Options</span><br> 
                                <?php
                                if($data["Hardcopy_Availability"]=="Yes")
                                {
                                    echo "
                                <b>Hardcopy</b> &nbsp; | &nbsp;
                                <b>eBook</b> ";
                                }
                                else
                                {
                                    echo "<b>eBook</b>";
                                }
                                ?>
                            </div>
                            </div>
                        </div>
                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div class="row">

                            <div class="col-xs-6"> 

                      <?php 

if($_SESSION['ID_U']==null)
{
    if($data["Hardcopy_Availability"]=="Yes")
    {
    echo "<a href='login.php' data-toggle='tooltip' data-placement='right' title='Click here to login'><b style='color:red;'> Please login to purchase or download. </b></a>";
    }
    else
    {
        echo "<a href='login.php' data-toggle='tooltip' data-placement='right' title='Click here to login'><b style='color:red;'> Please login to download. </b></a>";
    }

}
             
if($_SESSION['ID_U']!=null)
{
                      if($data["Hardcopy_Availability"]=="Yes")
                      {
                      echo "     
                                    <a href='cartAction.php?action=addToCart&id=".$data["Book_ID"]."' style='color:black;' class='fa-4x' data-toggle='tooltip' data-placement='left' title='Add to cart'>
    								<span><i class='fa fa-shopping-cart'></i>
                                    </span>  &nbsp;";
                      }

                      if($v==3)
                      {
                          echo "	<a href='../../Dashboard/ebooks/".$data['PDF_File']."' style='color:black;' class='fa-4x' download style='color:black;' class='fa-4x' data-toggle='tooltip' data-placement='right' title='Download'>
                                      <span><i class='fa fa-cloud-download-alt'></i>
                                      </span>
                                  </a> ";
                      }
                      if($v==6)
                      {
                          if($data["Premium"]=="No")
                          {
                          echo "	<a href='../../Dashboard/ebooks/".$data['PDF_File']."' style='color:black;' class='fa-4x' download style='color:black;' class='fa-4x' data-toggle='tooltip' data-placement='right' title='Download'>
                                      <span><i class='fa fa-cloud-download-alt'></i>
                                      </span>
                                  </a> ";
                            }
                            else
                            {
                                echo "	<a download  style='color:black;' class='fa-4x' data-toggle='tooltip' data-placement='right' title='Upgrade your package to download $data[Book_Name]'>
                                <span><i class='fa fa-cloud-download-alt'></i>
                                </span>
                            </a> ";
                            }
                      }
                    }

                        ?>                  
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">Additional Information</span> </div>
                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="col-md-12">
                        <tbody>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Release Date :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li> <?php echo $data["Release_Date"]; ?> </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Category :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li> <?php echo $data["Category_Name"]; ?> </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Hardcopy Availability :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li> <?php echo $data["Hardcopy_Availability"]; ?> </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">eBook Availability :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li> Yes </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php         
}
?>

<?php

include('footer.php');

?>