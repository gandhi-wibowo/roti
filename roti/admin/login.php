<?php
session_start();

if($_SESSION['name']!=NULL){
    header("location:index.php");
}
include '../include/con.php';
if(isset($_POST['submit'])){
    $name = $_POST['uname'];
    $pwd = md5($_POST['pwd']);
    $query = "SELECT * FROM user WHERE nama='$name' AND pwd='$pwd'";
    $result = mysql_query($query);
    $hasil = mysql_num_rows($result);
    if($hasil>0){
        $row = mysql_fetch_array($result);
        $_SESSION['name']=$row['nama'];
        $_SESSION['id']=$row['id_user'];
        $_SESSION['image']=$row['photo'];
        header("location:index.php");
    }
    else{ 
        header("location:login.php");
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="">Admin</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Login untuk Mengolah Data Roti</p>
        <form action="" method="POST">
          <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="Username" name="uname">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Password" name="pwd">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
                <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="Masuk">
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  </body>
</html>    
