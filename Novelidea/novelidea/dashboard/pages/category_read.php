<?php

include('header.php');
?>

<?php
include('connection.php');
$query="SELECT * FROM category";

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
                        <a style="float:right;" href="category_form.php" class="btn btn-success btn-xs"> Add a Category </a>
                            <h2>
                                CATEGORIES
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                    		<tr>
                            <th>Name</th>
                			<th>Edit</th>
                			<th>Delete</th>
                    		</tr>
                        	</thead>
                        	<tbody>

        <?php
        while($data=mysqli_fetch_assoc($rows)){
        echo "
        <tr>
        <td>".$data['Category_Name']."</td>
        <td><a href='category_update.php?idd=$data[Category_ID]' class='btn btn-primary btn-xs'> Edit </a></td>
        <td><a href='category_delete.php?idd=$data[Category_ID]' class='btn btn-danger btn-xs delete'> Delete </a></td>
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