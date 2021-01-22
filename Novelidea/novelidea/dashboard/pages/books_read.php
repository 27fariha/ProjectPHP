<?php

include('header.php');
?>

<?php
include('connection.php');
$query="SELECT * from books b JOIN category c on c.Category_ID = b.Category_ID_F";

$rows=mysqli_query($con,$query);
 
?>

<head>

      <!-- Delete Confirmation Dialogue Start-->
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure you want to delete this?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
    <!-- Delete Confirmation Dialogue End-->

</head>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <a style="float:right;" href="books_form.php" class="btn btn-success btn-xs"> Add a Book </a>

                            <h2>
                                BOOK DETAILS
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                    		<tr>
                            <th>Name</th>
                            <th>Brief Description</th>
                            <th>Detailed Description</th>
                            <th>Author</th>
                            <th>Release Date</th>
                            <th>Category</th>
                            <th>Hardcopy Availability</th>
                            <th>Price</th>
                            <th>PDF File</th>
                            <th>Book Cover</th>
                            <th>Premium</th>
                    		</tr>
                        	</thead>
                        	<tbody>

        <?php
        while($data=mysqli_fetch_assoc($rows)){
        echo "
        <tr>
        <td>".$data['Book_Name']."</td>
        <td style='min-width:150px; max-width:150px;'>".$data['Brief_Description']."</td>
        <td style='min-width:200px; max-width:200px;'>".$data['Detailed_Description']."</td>
        <td>".$data['Author']."</td>
        <td>".$data['Release_Date']."</td>
        <td>".$data['Category_Name']."</td>
        <td>".$data['Hardcopy_Availability']."</td>";
        if($data['Price'] == 0)
        {
       echo "<td style='color:green;'>FREE</td>";
        }
        else
        {
            echo "<td>$".$data['Price']."</td>";
        }
        echo "
        <td> <img src='../images/pdf_logo.png' title='$data[PDF_File]' style='border-radius: 25%; height:60px; width:60px; object-fit: cover; border: 3px solid white' /> </td>
        <td> <img src='$data[Book_Cover]' style='border-radius: 25%; height:60px; width:60px; object-fit: cover; border: 3px solid white' /> </td>
        <td>".$data['Premium']."</td>
        <td><a href='books_update.php?idd=$data[Book_ID]' class='btn btn-primary btn-xs'> Edit </a></td>
        <td><a href='books_delete.php?idd=$data[Book_ID]' class='btn btn-danger btn-xs delete'> Delete </a></td>

        </tr>";
        }
        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


<?php

include('footer.php');

?>