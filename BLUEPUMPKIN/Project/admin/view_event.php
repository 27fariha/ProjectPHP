    <?php
include('header.php');
include('connect.php');
$query="SELECT E.id,C.category_name,E.name,E.date,E.duration,E.time,E.Brief_Dis,E.Detail_Dis,E.image FROM events E JOIN category C ON E.category= C.id";
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
        <h3><i class="fa fa-history"></i> Event Details</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
             
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category</th>
                        <th >Name</th>
                      <th>Date</th>
                      <th >Duratin</th>
                      <th >Time</th>
                        <th>Brief Discription </th>
                          <th>Details Discription </th>
                           <th >Image</th>
                           <?php
                                 if($_SESSION["ROLE"]=="ADMIN"){
                echo "
                      <th >Action</th>
                      <th >Delete</th> ";}
                      ?>
                      
                      
                    </tr>
<?php 
  while($data=mysqli_fetch_assoc($rows)){
    echo"<tr> <td>".$data['id']."</td>
        <td>".$data['category_name']."</td>
        <td>".$data['name']."</td>
         <td>".$data['date']."</td>
          <td>".$data['duration']."</td>
           <td>".$data['time']."</td>
           <td>".$data['Brief_Dis']."</td>
           <td>".$data['Detail_Dis']."</td>
              <td><a href='$data[image]' download><img src='$data[image]' height=70 width=70></a></td>";
              if($_SESSION["ROLE"]=="ADMIN"){
                echo "
        <td><a href='edit_event.php?Idd=".$data['id']."'><button type='submit' class='btn btn-round btn-success' name='editbtn'>Edit</a></button></td>
        <td><a href='delete_event.php?Idd=".$data['id']."'><button type='submit' class='btn btn-round btn-danger' name='delbtn'>Delete</a></button></td>
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
   