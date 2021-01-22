<?php

include('header.php');
?>

<?php
include('connection.php');
$query="SELECT * FROM messages";

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
                            <h2>
                                MESSAGE BOX
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                            <thead>
                    		<tr>
                            <th>Sender's Name</th>
                            <th>Sender's Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date Sent</th>
                    		</tr>
                        	</thead>
                        	<tbody>

        <?php
        while($data=mysqli_fetch_assoc($rows)){
        echo "
        <tr>
        <td>".$data['Sender_Name']."</td>
        <td>".$data['Sender_Email']."</td>
        <td>".$data['Subject']."</td>
        <td style='min-width:150px; max-width:150px;'>".$data['Message']."</td>
        <td>".$data['Date_Sent']."</td>
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