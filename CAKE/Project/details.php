<?php
include ('connect.php');
include ('header.php');
$idd=$_GET['id'];
$qu="SELECT * FROM product where eid='$idd'";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);


?>
 

        <style>
 /* .aatika
  {
    color: white;
    font-size: 20px;
    position: relative;
    top: 50%;
    left: 50%;
    -webkit-transform:translate(-50%,-50%);
    -ms-transform:translate(-50%,-50%);
    transform: translate(-50%,-50%);
    text-align: center;
  }*/
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

	</style>

	 <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                    <?php echo"  <h2>".$data1['type']." <br>  </h2>";?>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br>


<section class=about_story_area p_120>
            <div class=container>



        <section class=about_story_area p_120>
            <div class=container>

          

    <div class=row>
      <div class="jumbotron">

    <h2><?= $  ?></h2>
      </div>

                #  <?php
#while($data=mysqli_fetch_assoc($res))
 # {
    #echo"
   # <div class=col-lg-3 col-md-4 col-sm-6 col-xs-12>
   # <div class=hovereffect>
    #                       <a class=fancybox><img src='../dashboard/$data[image]' height=300 width=600 ></a>
     #  <a href='order.php'>
     #  <div class=overlay>
          
              #   <a href='order.php'>".$data['Cid']." <br> ". $data['eid']." <br>". $data['Cake_name']." <br>". $data['Price']." <br>".      $data['Available']."<br>".$data['type']." <br>".$data['itemcode']." </a>
       # </div>
      #  </a>
    #</div>
#</div>
#";
#}
#?> 
   </div> 
 </section>
     </div>



            </div>
        </section>



<br><Br><br>
<?php
include ('footer.php');
?>