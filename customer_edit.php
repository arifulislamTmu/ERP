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
            <h1 class="m-0">Edit Customer Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Customer Profile</li>
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
        $get_usr_id = $_GET['cmr_id'];
          $msg ='<div class="alert bg-success">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Success!</strong> Data Update Success.
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

            $insert = "UPDATE tbl_customer SET cmr_name='$cmr_name',cmr_email='$cmr_email',cmr_mobile='$cmr_mobile',auth_mobile='$auth_mobile',auth_name='$auth_name',company_name='$company_name',cmr_id='$cmr_id',cmr_address='$cmr_address',cmr_infor='$cmr_infor' WHERE cmr_p_id='$get_usr_id'";
           $run = mysqli_query($con,$insert);
           if($run){
             echo $msg;
           
           } else{
            echo "Not Update Data";      
          }
        }
    
       ?>

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Customer Profile</h3>
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
            <?php
            $get_usr_id = $_GET['cmr_id'];
            $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$get_usr_id'";
            $run = mysqli_query($con,$select);
            while($result = mysqli_fetch_array($run)){ ?>

            <div class="row">
               <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Customer Name</label>
                        <input type="text" class="form-control" name="cmr_name" value="<?php echo $result['cmr_name']?>"> 
                    </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputPassword1">Customer Email</label>
                    <input type="email" class="form-control" name="cmr_email"  value="<?php echo $result['cmr_email']?>" >
                </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="number" class="form-control" name="cmr_mobile" value="<?php echo $result['cmr_mobile']?>" >
                </div>
           </div>
           <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Authority Mobile</label>
                    <input type="number" class="form-control"  name="auth_mobile" value="<?php echo $result['auth_mobile']?>"  >
                </div>
           </div>
           <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Authority Name</label>
                    <input type="text" class="form-control"  name="auth_name" value="<?php echo $result['auth_name']?>"   >
                </div>
           </div>
           <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control"  name="company_name" value="<?php echo $result['company_name']?>" >
                </div>
           </div>
           <div class="col-lg-4 mt-2">
            <div class="form-group">
                <label for="exampleInputPassword1">Customer Id</label>
                <input type="text" class="form-control"  name="cmr_id" readonly value="<?php echo $result['cmr_id']?>"  >
            </div>
          </div>
             <div class="col-lg-4 mt-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control"  name="cmr_address" value="<?php echo $result['cmr_address']?>"> 
                </div>
              </div>
            
              <div class="col-lg-4 mt-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Other Information</label>
                    <input type="text" class="form-control"  name="cmr_infor" value="<?php echo $result['cmr_address']?>">
                </div>
            </div>
           </div>
           <?php }   ?>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="insert_btn">Update</button>
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
