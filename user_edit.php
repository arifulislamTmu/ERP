<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
<?php if($role_name=='0'){ ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update User Register</h1>
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
          <strong>Success!</strong> Data Update  Success.
          </div>';
          $msg2 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>This Name number Already Exist....!
          </div>';
          $get_user = $_GET['user_id'];
            if(isset($_POST['create_btn'])){
                $user_name   = $_POST['user_name'];
                $user_email  = $_POST['user_email'];
                $user_phone  = $_POST['user_phone'];
                $password    = $_POST['password'];
                $address     = $_POST['address'];
                $user_role   = $_POST['user_role'];
                $other_info  = $_POST['other_info'];

                $insert ="UPDATE tbl_user_admin SET user_name='$user_name',user_email='$user_email',user_phone='$user_phone',password='$password',address='$address',user_role='$user_role',other_info='$other_info' WHERE ad_user_id='$get_user'";
                $run = mysqli_query($con,$insert);
                if($run){
                    echo $msg;
                    } else{
                    echo "not inert";      
                    }
                }
                
            ?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Update User </h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
            <?php
            $get_user = $_GET['user_id'];
            $select = "SELECT * FROM tbl_user_admin WHERE ad_user_id='$get_user'";
            $run = mysqli_query($con,$select);
            while($results = mysqli_fetch_array($run)){ ?>
        <form action="" method="POST">
          <div class="card-body">
            <div class="row">
               <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" class="form-control" value="<?php echo $results['user_name']?>" required name="user_name" placeholder=" Name"> 
                    </div>
               </div>
               <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputPassword1">User E-mail</label>
                    <input type="email" class="form-control" name="user_email" value="<?php echo $results['user_email']?>"  placeholder="E-mail"  >
                </div>
               </div>
               <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="number" class="form-control" required name="user_phone" value="<?php echo $results['user_phone']?>"  placeholder="Phone" >
                </div>
           </div>
           <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" required name="password" value="<?php echo $results['password']?>"   placeholder="password" >
                </div>
           </div>
             <div class="col-lg-4 mt-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address"  value="<?php echo $results['address']?>"   placeholder="Address"> 
                </div>
              </div>
               <div class="col-lg-4 mt-2">
                    <div class="form-group">
                        <label for="exampleInputPassword1">User Role</label>
                        <select class="form-select form-control" required name="user_role" aria-label="Default select example">
                                <option value="0">Admin</option>
                                <option value="1">Creator</option>
                                <option value="2">Import Partner</option>
                        </select>
                    </div>
                </div>
              <div class="col-lg-4 mt-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Other Information</label>
                    <input type="text" class="form-control" name="other_info"  value="<?php echo $results['other_info']?>"  placeholder="Information">
                </div>
            </div>
           </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="create_btn">Update</button>
            </div>
        </div>
      </div>
    </div>
    </div>
    </form>
<?php } ?>
 </section>

    <!-- main_conetiner -->
  </div>
  <!-- /.content-wrapper -->

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <?php }else{
    echo"<script>window.location='index.php'</script>";
  }?>
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
