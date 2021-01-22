<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
 <button class="btn btn-danger" data-toggle="modal" data-target="#red">Red</button>
 <button class="btn btn-warning" data-toggle="modal" data-target="#yellow">Yellow</button>

<div id="red" class="modal fade" role="dialog">
	<div class="modal-dialog">
    	<div class="modal-content">
    		<div class="modal-header" style="background-color:#d9534f;">
    			<p style="color:#FFF; text-align:center;">Are you sure?</p>
    		</div>
            
            <div class="modal-body">
            	<img style="width:60px; height:50px; margin-left:250px; margin-top:30px;" src="cross.png" />
            </div>
            
            <div style="padding-left:20%; padding-top:30px;"><button class="btn" style="width:150px; border-color:#d9534f; background-color:#FFF;">YES</button> <button class="btn btn-danger" style="width:150px;">NO</button> </div> <br />
            </div>
            
    	</div>
    </div>
</div>


<div id="yellow" class="modal fade" role="dialog">
	<div class="modal-dialog">
    	<div class="modal-content">
    		<div class="modal-header" style="background-color:#f0ad4e;">
    			<p style="color:#FFF;">modal warning</p>
    		</div>
            
            <div class="modal-body">
            	<div class="row">
                	<div class="col-md-2"><img style="border-radius:50%; width:60px; height:50px; padding-left:5px;" src="emoji.jfif" /> <br /> Abdul basit</div>
                    <div class="col-md-9">Just as Jesus prepared himself for his coming mission by, among other things, fasting.
                <br />  <br />     so did Zoroaster. Muhammed recommended fasting as an atonement and expiation for sin.</div>
                </div>
                <div style="padding-left:20%; padding-top:10px;"><button class="btn btn-warning" style="width:150px;">Get A/C</button> <button class="btn" style="width:150px; border-color:#f0ad4e; background-color:#FFF;">No, Thanks</button></div>
            </div>
            
    	</div>
    </div>
</div>
</body>
</html>
