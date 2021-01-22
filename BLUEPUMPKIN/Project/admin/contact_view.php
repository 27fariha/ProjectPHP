    <?php
include('header.php');
include('connect.php');
$query="select * from contact";
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
        <h3><i class="fa fa-history"></i> Contacts</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
             
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Contact No</th>
                      <th>Message</th>
                       <?php
                                 if($_SESSION["ROLE"]=="ADMIN"){
                echo "
                      <th >Delete</th>
                      ";}
                      ?>
                      
                    </tr>
<?php 
  while($data=mysqli_fetch_assoc($rows)){
    echo"<tr> <td>".$data['id']."</td>
        <td>".$data['Name']."</td>
          <td>".$data['email']."</td>
             <td>".$data['Contact_no']."</td>
                <td>".$data['Message']."</td>";
          if($_SESSION["ROLE"]=="ADMIN"){
                echo "
        <td><a href='delete_contact.php?Idd=".$data['id']."'><button type='submit' class='btn btn-round btn-danger' name='delbtn'>Delete</a></button></td>
        </tr>";
        } 

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
   