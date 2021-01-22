    <?php
include('header.php');
include('connect.php');
$query="select * from employee_register1 where role='2'";
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
        <h3><i class="fa fa-history"></i> Employee's Details</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-history"></i> Employee's Record</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th >User Name</th>
                      <th >Email</th>
                      <th >Qualification</th>
                      <th >DOB</th>
                      <th >CNIC</th>
                      <th >ADDRESS</th>
                      <th >Phone No</th>
                      
                      <th>Role</th>
                        <th>Image</th>
                      <th>CV </th>
                    
                      <th >Action</th>
                      <th >Delete</th>

                      
                    </tr>
<?php 
  while($data=mysqli_fetch_assoc($rows)){

    $q="Select * from role_table where role='$data[role]'";
$r=mysqli_query($con,$q);
$d=mysqli_fetch_array($r);
   
    echo"<tr> 
    <td>".$data['id']."</td>
        <td>".$data['Name']."</td>
        <td>".$data['username']."</td>
        <td>".$data['email']."</td>
        <td>".$data['Qualification']."</td>
        <td>".$data['DOB']."</td>
        <td>".$data['Cnic']."</td>
        <td>".$data['address']."</td>
        <td>".$data['number']."</td>
        <td>".$d['role_name']."</td>
       
        <td><a href='$data[image]' download><img src='$data[image]' height=70 width=70></a></td>
          <td><a href='$data[CV]' download><button type='submit' class='btn btn-round btn-primary' name='#'>CV</button></a></td>
        <td><a href='edit_employee.php?Idd=".$data['id']."'><button type='submit' class='btn btn-round btn-success' name='editbtn'>Edit</a></button></td>
        <td><a href='delete_employee.php?Idd=".$data['id']."'><button type='submit' class='btn btn-round btn-danger' name='delbtn'>Delete</a></button></td>
        </tr>";
         

  }
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
   