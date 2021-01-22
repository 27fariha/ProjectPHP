<?php
include ('connect.php');
$qu="SELECT * FROM admin";
$res=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($res);
?>
 
 <!--================Footer Area =================-->
 <footer class="footer_area">
    <div class="footer_widgets">
        <div class="container">
            <div class="row footer_wd_inner">
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_about_widget">
                        <h1> <img src="cake.png"> </h1>
                        <p>We beat it, you eat it! Live the sweet life! Let us put a smile on your face. Sweet classics </p>
                        <ul class="nav">
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://pk.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_link_widget">
                        <div class="f_title">
                            <h3>Quick links</h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="cake.php">Our Cakes</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_link_widget">
                        <div class="f_title">
                            <h3>Work Times</h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="#">Mon. :  Fri.: 8 am - 8 pm</a></li>
                            <li><a href="#">Sat. : 9am - 4pm</a></li>
                            <li><a href="#">Sun. : Closed</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_contact_widget">
                        <div class="f_title">
                            <h3>Contact Info</h3>
                        </div>
                        <h4><?php echo $data['Phone'] ?></h4>
                        <p><?php echo $data['Address'] ?> <br /><?php echo $data['Address_Detail'] ?></p>
                        <h5><?php echo $data['Email'] ?></h5>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            <div class="copyright_inner">
                
                
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->

<!--================Search Box Area =================-->
<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <h3>Search</h3>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
            </span>
        </div>
    </div>
</div>
<!--================End Search Box Area =================-->






<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<!-- Extra plugin js -->
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/datetime-picker/js/moment.min.js"></script>
<script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>

<script src="js/theme.js"></script>
</body>

</html>