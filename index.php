<?php
session_start();
include "function/koneksi.php";

// Notif Error
$Err = "";
if(isset ($_GET ["Err"]) && !empty ($_GET ["Err"])){
  switch ($_GET ["Err"]){
    case 1:
      $Err = "Username dan Password Kosong";
    break;
    case 2:
      $Err = "Username Kosong";
    break;
    case 3:
      $Err = "Password Kosong";
    break;
    case 4:
      $Err = "Password salah";
    break;
    case 5:
      $Err = "Username atau Password salah";
    break;
    case 6:
      $Err = "Maaf, Terjadi Kesalahan";
    break;
  }
}

// Notif
$Notif = "";
if(isset ($_GET["Notif"]) && !empty ($_GET["Notif"])){
  switch($_GET["Notif"]){
    case 1:
      $Notif = "User berhasil dibuat, silahkan Login";
    break;
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Master Gym</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css" />
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="assets/js/iCheck/square/blue.css">
  
<style>
  .login-page{
    background: url(images/gg.jpeg);
    background-size: cover;
  }
  .login-logo b{
    margin: 80px 0 20px 0;
    color: white;
    text-shadow: 2px 2px 4px red;
  }
  .bungkus{
      min-height: 350px;
      width: 80%;
      margin: 0 auto 0 auto;
      background: linear-gradient(45deg,salmon,orange);
      border-radius: 10px;
      border: 2px solid salmon;
      box-shadow: 0px 0px 10px 2px gray;

</style>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <span><b>Master Gym</b></span>
  </div>
  <!-- /.login-logo -->
  <div class="bungkus login-box-body">
  <center><img src="images/logo.jpg" width="150px" height="150px" style="color:black" class="img-login img-circle"></center><br>
    <p class="login-box-msg">Sign in</p>
     <form action="login.php" method="post">
      <div class="form-group has-feedback">
        <input type="username" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="form-password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div>
        <input type="checkbox" id="form-checkbox"> Show password
      </div class="form-group has-feedback">
      <div class="row">
        <div class="col-xs-8">
        </div> 
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div> 
        <!-- /.col -->
      </div><br>
      <center><font style="color:red;"><?php echo $Err ?></font></center>
      <center><font style="color:green;"><?php echo $Notif ?></font></center>
    </form> 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="assets/js/jQuery/jquery-3.1.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){   
    $('#form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('#form-password').attr('type','text');
      }else{
        $('#form-password').attr('type','password');
      }
    });
  });
</script>
</body>
</html>
