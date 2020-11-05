<?php
include('../config.php');
session_start();
if (isset($_SESSION['username'])) {
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include('includes/head-top.php') ?>
<title>Admin Formulir Edit - SMA Tadikamesra</title>
<link rel="icon" href="../theme/dist/img/osis.png">
<?php include('includes/head-bot.php') ?>
<!-- head end -->

<!-- body -->
<?php include('includes/nav-top.php') ?>

<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Login</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" action="proses-login.php" method="post">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="username">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
        </div>
      </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info">Sign in</button>
    </div>
    <!-- /.card-footer -->
  </form>
</div>

<?php include('../includes/nav-bot.php') ?>
<!-- body end -->

</html>