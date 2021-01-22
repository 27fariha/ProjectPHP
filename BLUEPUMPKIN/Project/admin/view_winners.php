    <?php
    include('header.php');
    include('connect.php');
    $query="SELECT W.id,E.Name,W.prize,ev.name FROM winner W JOIN participant P ON W.p_id = P.id JOIN employee_register1 E ON P.employee_id = E.id JOIN events ev ON P.event_id = ev.id";
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
        <h3><i class="fa fa-history"></i> Winners</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">

              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Participant Name</th>
                      <th>Event Name</th>
                      <th>Prize</th>
                      <?php
                      if($_SESSION["ROLE"]=="ADMIN"){
                        echo " 
                        <th >Action</th>
                        ";} ?>

                      </tr>
                      <?php 
                      while($data=mysqli_fetch_assoc($rows)){
                        echo"<tr> <td>".$data['id']."</td>

                        <td>".$data['Name']."</td>
                        <td>".$data['name']."</td>


                        <td>".$data['prize']."</td>";

                        if($_SESSION["ROLE"]=="ADMIN"){
                          echo "

                          <td><a href='delete_winner.php?Idd=".$data['id']."'><button type='submit' class='btn btn-round btn-danger' name='delbtn'>Delete</a></button></td>
                          </tr>"; }


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
