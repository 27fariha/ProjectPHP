    <?php
include('header.php');
include('connect.php');


$query="SELECT * FROM `employee_register1` WHERE DATE_FORMAT(`DOB`, '%m%d') = DATE_FORMAT(NOW(), '%m%d')";
$rows=mysqli_query($con,$query);


    ?>
        <style>
      a {
    color: white;
    text-decoration: none !important;
  }
   a:focus, a:hover {
    color: white;
    text-decoration: underline;
}
  </style>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-history"></i> Your Special Days are Special to Us aswel</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-history"></i> Employee's Birthdays</h4>
              <section id="unseen">
<?php
$rowcount=mysqli_num_rows($rows);
if($rowcount==0){
echo "<h1 align=center> No Birthdays Today </h1>";
}
else{
?>
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                    
                      <th>Full Name</th>
                  
                      
                        <th>Image</th>
                  

                      
                    </tr>
<?php 

  while($data=mysqli_fetch_assoc($rows)){

    $q="Select * from role_table where role='$data[role]'";
$r=mysqli_query($con,$q);
$d=mysqli_fetch_array($r);
   
    echo"<tr> 
   
        <td>".$data['Name']."</td>
        
       
        <td><a href='$data[image]' download><img src='$data[image]' height=70 width=70></a></td>
          
        </tr>";
         

  }}
?>
 </thead>
                  <tbody>
                
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
       
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
   