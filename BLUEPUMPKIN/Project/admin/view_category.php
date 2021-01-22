    <?php
include('header.php');
include('connect.php');
$query="select * from category";
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
        <h3><i class="fa fa-history"></i> Categories</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
             
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category Name</th>
                     
                      <th >Action</th>
                      <th >Delete</th>
                      
                    </tr>
<?php 
  while($data=mysqli_fetch_assoc($rows)){
    echo"<tr> <td>".$data['id']."</td>
        <td>".$data['category_name']."</td>
       
        <td><a href='edit_category.php?Idd=".$data['id']."'><button type='submit' class='btn btn-round btn-success' name='editbtn'>Edit</a></button></td>
        <td><a href='delete_category.php?Idd=".$data['id']."'><button type='submit' class='btn btn-round btn-danger' name='delbtn'>Delete</a></button></td>
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
   