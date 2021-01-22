    <?php
include('header.php');
include('connect.php');
$query="SELECT p.id,e.name,m.Name from participant p join events e on p.event_id = e.id join employee_register1 m on p.employee_id=m.id";
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
        <h3><i class="fa fa-history"></i> Participant</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
             
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Event</th>
                      <th>Employee</th>
                     <?php
                                 if($_SESSION["ROLE"]=="ADMIN"){
                echo "
                      
                      <th >Delete</th> ";}
                      ?>
                    </tr>
<?php    

  while($data=mysqli_fetch_assoc($rows)){
    echo"<tr> <td>".$data['id']."</td>
        <td>".$data['name']."</td>
         <td>".$data['Name']."</td>";

         if($_SESSION["ROLE"]=="ADMIN"){
                echo "
      
        <td><a href='delete_participant.php?Idd=".$data['id']."'><button type='submit' class='btn btn-round btn-danger' name='delbtn'>Delete</a></button></td>
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
   