<?php
include('dashboard.php');
?>
 <div class="col-lg-9">
            <form class="row contact_form" action="" method="POST" id="contactForm" novalidate="novalidate">
                <div class="col-md-6">
                    <div class="form-group">
                        <input pattern="^[A-Za-z]+\s?[A-Za-z]+" type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
        <input pattern="^[A-Za-z0-9-_]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)*(\.[A-Za-z]{2,4})" type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="submit" value="submit" class="btn submit_btn" name="btn">Send Message</button>
                </div>
            </form>
        </div>
<?php
include('footer.php');
?>