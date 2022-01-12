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
            <h1 class="m-0">New Customer Register</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">New Customer Register</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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
        <strong>Warning! </strong>This Name & Phone number Already Exist....!
        </div>';
          if(isset($_POST['insert_btn'])){
            $cmr_name = $_POST['cmr_name'];
            $cmr_email = $_POST['cmr_email'];
            $cmr_mobile = $_POST['cmr_mobile'];
            $auth_mobile = $_POST['auth_mobile'];
            $auth_name = $_POST['auth_name'];
            $company_name = $_POST['company_name'];
            $cmr_id = $_POST['cmr_id'];
            $cmr_address = $_POST['cmr_address'];
            $cmr_infor = $_POST['cmr_infor'];
            $today = date("Y/m/d");
            $select = "SELECT * FROM tbl_customer WHERE cmr_name='$cmr_name'";
            $run = mysqli_query($con,$select);
            if(mysqli_num_rows($run)>0){
           echo  $msg2;
            }else{
            $insert = "INSERT INTO tbl_customer(cmr_name,cmr_email,cmr_mobile,auth_mobile,auth_name,company_name,cmr_id,cmr_address,cmr_infor,reg_date)
            VALUES('$cmr_name','$cmr_email','$cmr_mobile','$auth_mobile','$auth_name','$company_name','$cmr_id','$cmr_address','$cmr_infor','$today')";
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
          <h3 class="card-title">Add New Customer</h3>
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
               <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Customer Name</label>
                        <input type="text" class="form-control" name="cmr_name" id="exampleInputEmail1" placeholder=" Name"> 
                    </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputPassword1">Customer Email</label>
                    <input type="email" class="form-control" name="cmr_email" id="exampleInputPassword1" placeholder="E-mail"  >
                </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="number" class="form-control" name="cmr_mobile" id="exampleInputEmail1" placeholder="Phone" >
                </div>
           </div>
           <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Authority Mobile</label>
                    <input type="number" class="form-control"  name="auth_mobile" id="exampleInputEmail1" placeholder="Phone" >
                </div>
           </div>
           <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Authority Name</label>
                    <input type="text" class="form-control"  name="auth_name" id="exampleInputEmail1" placeholder="Authority Name" >
                </div>
           </div>
           <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control"  name="company_name" id="exampleInputEmail1" placeholder="Company Name" >
                </div>
           </div>
           <div class="col-lg-4 mt-2">
            <div class="form-group">
                <label for="exampleInputPassword1">Customer Id</label>
                <input type="text" class="form-control"  name="cmr_id" readonly value="<?php   $select_qur = 'SELECT * FROM tbl_customer ORDER BY cmr_id DESC LIMIT 1';
                    $run = mysqli_query($con,$select_qur);
                    $chack = mysqli_fetch_row($run);
                    $last_row = $chack[7];
                     echo $last_row +1;
                   ?>">
            </div>
          </div>
             <div class="col-lg-4 mt-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control"  name="cmr_address" id="exampleInputEmail1" placeholder="Address"> 
                </div>
              </div>
            
              <div class="col-lg-4 mt-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Other Information</label>
                    <input type="text" class="form-control"  name="cmr_infor" id="exampleInputEmail1"  placeholder="Information">
                </div>
            </div>
           </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="insert_btn">Save</button>
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
