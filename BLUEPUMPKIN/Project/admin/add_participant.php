<?php
include 'header.php';
include('connect.php');
$query="select * from events";
$rows=mysqli_query($con,$query);

    ?>

<section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Gallery</h3>
        <hr>
          
            <?php 
while ($data=mysqli_fetch_assoc($rows)) {
    echo "

    <div class=col-lg-4 col-md-4 col-sm-4 col-xs-12 desc>
<div class=project-wrapper>
              <div class=project>
                <div class=photo-wrapper>
                  <div class=photo>
                    <a class=fancybox><img src='$data[image]' alt='' height=273 width=350 /></a>
                  </div>
                      <a href='create_participant.php?Id=".$data['id']."&Name=".$data['name']."'>
                  <div class='overlay'>
                      <div class='aatika'>".$data['name']." <br> ". $data['date']." <br>". $data['duration']." <br>". $data['time']." <br>". $data['Brief_Dis']."  </div>
                </div>
                </a>
              </div><br>
            </div> 
            </div>
            </div>";

}
          

            ?>
          

                <!-- col-lg-4 -->
         

  

          <!-- col-lg-4 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>