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
            <h1 class="m-0"> Add New Employe </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">New Employe Add </li>
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
        <strong>Warning! </strong>This Name & Employe Id Number Already Exist....!
        </div>';
        $msg3 ='<div class="alert bg-danger">
        <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
        <strong>Warning! </strong>File Too Large....!
        </div>';
          if(isset($_POST['update_em'])){
            $empole_name = $_POST['empole_name'];
            $emply_infor = $_POST['emply_infor'];
            $emple_address = $_POST['emple_address'];
            $employe_email = $_POST['employe_email'];
            $employe_mobile = $_POST['employe_mobile'];
            $joining_date = $_POST['joining_date'];
            $eply_id_no = $_POST['eply_id_no'];
            $eply_Nid_no = $_POST['eply_Nid_no'];
            $file_name = $_FILES['emly_photo']['name'];
      
            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name =  $_FILES['emly_photo']['name'];
            $file_size =  $_FILES['emly_photo']['size'];
            $file_temp =  $_FILES['emly_photo']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;
           
            if($file_size>1000000){
              echo $msg3;
            }else{
              move_uploaded_file($file_temp, $uploaded_image);
              $insert = "UPDATE  tbl_employe SET empole_name='$empole_name',emply_infor='$emply_infor',emple_address='$emple_address',employe_email='$employe_email',employe_mobile='$employe_mobile',joining_date='$joining_date',eply_id_no='$eply_id_no',eply_Nid_no='$eply_Nid_no',emly_photo='$uploaded_image'";
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
          <h3 class="card-title">  Update Employe </h3>
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
        $employe_id = $_GET['employe_id'];
        $select = "SELECT * FROM tbl_employe WHERE employe_id ='$employe_id' limit 1";
        $run = mysqli_query($con,$select);
        while($result = mysqli_fetch_array($run)){ ?>
         <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row">
               <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employe Name</label>
                        <input type="text" class="form-control" name="empole_name" value=" <?php echo $result['empole_name']?>" required id="exampleInputEmail1" placeholder=" Name"> 
                    </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputPassword1">Employe Email</label>
                    <input type="email" class="form-control" name="employe_email"  value=" <?php echo $result['employe_email']?>" id="exampleInputPassword1" placeholder="E-mail"  >
                </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="number" class="form-control" required name="employe_mobile"  value=" <?php echo $result['employe_mobile']?>" id="exampleInputEmail1" placeholder="Phone" >
                </div>
           </div>
           <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Joining Date</label>
                    <input type="date" class="form-control" required  name="joining_date"  value=" <?php echo $result['joining_date']?>" id="exampleInputEmail1">
                </div>
           </div>
           <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Employe Id No</label>
                    <input type="text" class="form-control" required name="eply_id_no"  value=" <?php echo $result['eply_id_no']?>" placeholder="Id Number" >
                </div>
           </div>
           <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">NID Number</label>
                    <input type="text" class="form-control"  name="eply_Nid_no" value=" <?php echo $result['eply_Nid_no']?>"  placeholder="Id Number" >
                </div>
           </div>
             <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label> 
                    <input type="text" class="form-control"  name="emple_address" value=" <?php echo $result['emple_address']?>"   id="exampleInputEmail1" placeholder="Address"> 
                </div>
              </div>
            
              <div class="col-lg-4 mt-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Other Information</label>
                    <input type="text" class="form-control"  name="emply_infor" id="exampleInputEmail1" value=" <?php echo $result['emply_infor']?>"  placeholder="Information">
                </div>
            </div>
            <div class="col-lg-4 mt-2 d-flex">
                <div class="form-group">
                    <label for="exampleInputEmail1">Employe Photo</label>
                    <input type="file" class="form-control" name="emly_photo" >
                </div>
                <div>
                    <img src="<?php echo $result['emly_photo'];?> " style="width: 100px; heiht:100px;" alt="dasadasfafs">
                </div>
            </div>
           </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="update_em">Update</button>
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
