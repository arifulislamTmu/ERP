<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New User Register</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">New User Register</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    
    <!-- main_conetiner -->

   <section class="content">
      <div class="row d-flex justify-content-center mt-4">
       <div class="col-lg-10 ">
         <?php
          $msg ='<div class="alert bg-success">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Success!</strong> Data Insert Success.
          </div>';
          $msg2 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>This Name number Already Exist....!
          </div>';

            if(isset($_POST['create_btn'])){
                $user_name   = $_POST['user_name'];
                $user_email  = $_POST['user_email'];
                $user_phone  = $_POST['user_phone'];
                $password    = $_POST['password'];
                $address     = $_POST['address'];
                $user_role   = $_POST['user_role'];
                $other_info  = $_POST['other_info'];

              $select = "SELECT * FROM tbl_user_admin WHERE user_name ='$user_name'";
              $run = mysqli_query($con,$select);
              if(mysqli_num_rows($run)>0){
             echo  $msg2;
              }else{
                $insert ="INSERT INTO tbl_user_admin(user_name,user_email,user_phone,password,address,user_role,other_info)
                VALUES('$user_name','$user_email','$user_phone','$password','$address','$user_role','$other_info')";
              $run = mysqli_query($con,$insert);
             if($run){
               echo $msg;
             } else{
              echo "not inert";      
            }
          }
        }
     ?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add New User </h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <form action="" method="POST">
          <div class="card-body">
            <div class="row">
               <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" class="form-control" name="user_name" placeholder=" Name"> 
                    </div>
               </div>
               <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputPassword1">User E-mail</label>
                    <input type="email" class="form-control" name="user_email"  placeholder="E-mail"  >
                </div>
               </div>
               <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="number" class="form-control" name="user_phone"  placeholder="Phone" >
                </div>
           </div>
           <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password"  placeholder="password" >
                </div>
           </div>
             <div class="col-lg-4 mt-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address"> 
                </div>
              </div>
               <div class="col-lg-4 mt-2">
                    <div class="form-group">
                        <label for="exampleInputPassword1">User Role</label>
                        <select class="form-select form-control" name="user_role" aria-label="Default select example">
                        <option value="" selected>Open this select menu</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                        <option value="Creator">Creator</option>
                        </select>
                    </div>
                </div>
              <div class="col-lg-4 mt-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Other Information</label>
                    <input type="text" class="form-control" name="other_info"  placeholder="Information">
                </div>
            </div>
           </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="create_btn">Create</button>
            </div>
        </div>
      </div>
    </div>
    </div>
    </form>

 </section>

    <!-- main_conetiner -->
  </div>
  <!-- /.content-wrapper -->

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

 <!-- fixt savascript -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- fixt savascript -->

<?php
  require_once('footer.php');
?>
