<?php require_once('database/connect.php')?>
<?php if(isset($_SESSION['userName'])){
    echo"<script>window.location='index.php'</script>";
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page bg-dark">
<div class="login-box ">
<style>
      .alert {
      padding: 20px;
      background-color: #f44336;
      color: white;
      }

      .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
      }

      .closebtn:hover {
      color: black;
      }
</style>

  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b style="color:black">Admin</b></a>
      <?php 
        $msg ='<div class="alert bg-danger">
            <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
            <strong>Warning!</strong> User name or password not match...!
        </div>';
      if(isset($_POST['login_btn'])){
            $userName = $_POST['user_name'];
            $userPass = $_POST['password'];
            $select = "SELECT * FROM tbl_user_admin WHERE user_name='$userName' AND password='$userPass'";
            $run = mysqli_query($con,$select);
            $chack = mysqli_num_rows($run)>0;
            if($chack){
                $_SESSION['userName'] ="$userName";
                echo"<script>window.location='index.php'</script>";
            }else{
                echo $msg;
            }
      }
    ?>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user_name" placeholder="User Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <label for="remember">
               
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4 py-3">
            <button type="submit" name="login_btn" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> &nbsp; Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
