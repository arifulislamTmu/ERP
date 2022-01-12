<?php require_once('database/connect.php')?>
<?php if(!isset($_SESSION['userName'])){
    echo"<script>window.location='login.php'</script>";
}else{
    $userName = $_SESSION['userName'];
  $select_qu ="SELECT * FROM tbl_user_admin WHERE user_name ='$userName'";
  $run = mysqli_query($con,$select_qu);
  while($rows = mysqli_fetch_array($run)){
     $user_email = $_SESSION['user_email'] = $rows['user_email'];  
     $role_name = $_SESSION['user_role'] = $rows['user_role'];  
     $user_phone = $_SESSION['user_phone'] = $rows['user_phone'];
     $ad_user_id = $_SESSION['ad_user_id'] = $rows['ad_user_id'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="image/IMG_8943.png " rel="icon">
  <link href="image/IMG_8943.png " rel="apple-touch-icon"> 
      <title>nicecollection</title>


  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- live serch -->
<script src='select2/jquery-3.2.1.min.js' type='text/javascript'></script>
<script src='select2/dist/js/select2.min.js' type='text/javascript'></script>

<link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/styles.css">

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
<?php
  // header("Cache-Control: no-cache, must-revalidate");
  // header("Pragma: no-cache"); 
  // header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  // header("Cache-Control: max-age=2592000");
 
?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link">Contact</a> -->
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
        <li class="nav-item">
        <a class="nav-link" href="#" role="">
            <?php
                 echo "User Name:  &nbsp; &nbsp;" .$userName;
            ?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-sm btn-outline-danger" href="logout.php" >
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
