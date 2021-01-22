<?php include ('head.php'); ?>
<h4 class="page-title">Admin</h4>
<div class="row">
</div>
<form method="POST" action="Login.php" enctype="multipart/form-data">
  <div class="card">
    <div class="card-header">
      <div class="card-title">Login Form</div>
    </div>
    <div class="card-body">

      <div class="form-group">
        <label for="largeInput">User Name</label>
        <input name="un" type="text" class="form-control form-control" id="defaultInput" placeholder="Username">
      </div>
      <div class="form-group">
        <label for="largeInput">Password</label>
        <input name="pd" type="Password" class="form-control form-control" id="defaultInput" placeholder="Password">
      </div>

    </div>
    <div class="card-action">
      <button class="btn btn-success" type="submit" name='log'>Submit</button>
      <button class="btn btn-danger">Cancel</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>

<?php include ('footer.php'); ?>