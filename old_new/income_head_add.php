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
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Income Head Title</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- main_conetiner -->
   <section class="content">
      <div class="row d-flex justify-content-center mt-4">
       <div class="col-lg-8 ">
         <?php
          $msg ='<div class="alert bg-success">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Success!</strong> Data Insert Success.
          </div>';
          $msg2 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>This Name  Already Exist....!
          </div>';
          $msg3 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>Deleted Success....!
          </div>';
          if(isset($_GET['in_herid'])){
              $get_is = $_GET['in_herid'];
              $dele = "DELETE FROM tbl_income_head WHERE in_h_id='$get_is'";
              $run = mysqli_query($con,$dele);
              if($run){
                echo $msg3;
              } else{
               echo "not inert";      
             }
          }

            if(isset($_POST['save_btn'])){
                $incom_name   = $_POST['incom_name'];
                $incom_dtails = $_POST['incom_dtails'];
              $select = "SELECT * FROM tbl_income_head WHERE incom_name ='$incom_name'";
              $run = mysqli_query($con,$select);
              if(mysqli_num_rows($run)>0){
             echo  $msg2;
              }else{
                $insert ="INSERT INTO tbl_income_head(incom_name,incom_dtails)VALUES('$incom_name','$incom_dtails')";
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
          <h3 class="card-title">
          <form action="" method="POST">
              <div class="col-lg-12 d-flex">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Income Head</label>
                        <input type="text" class="form-control" name="incom_name" placeholder=" Name"> 
                    </div>
                    <div class="form-group ml-2">
                        <label for="exampleInputEmail1">Income Details</label>
                        <input type="text" class="form-control" name="incom_dtails" placeholder="Income Details"> 
                    </div>
                   <div class="vis mt-4 ml-3">
                       <button style="margin-top: 5px;" class=" btn btn-outline-primary " name="save_btn">Save</button>
                   </div>
                 </div>
               </form>
          </h3>
          
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
          <div class="card-body">
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Sl</th>
                      <th  style="width: 40%;">Name</th>
                      <th  style="width: 40%;">Income Details</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                        $count = 1;
                            $select = "SELECT * FROM tbl_income_head";
                            $run = mysqli_query($con,$select);
                            while($result = mysqli_fetch_array($run)){ ?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td><?php echo $result['incom_name']?></td>
                                    <td><?php echo $result['incom_dtails']?></td>
                                    <td class="text-center"><?php if($role_name=='0'){ ?> <a class="btn btn-outline-danger"  style="font-size:15px; padding:5px; text-align:center; "href="income_head_add.php?in_herid=<?php echo $result['in_h_id']?>"><i class="far fa-trash-alt"></i> Delete </a> <?php }else{ echo "Delete"; } ?></td>
                                </tr>
                           <?php  }  ?>
                    
                  </tbody>
                </table>
           </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
             
            </div>
        </div>
      </div>
    </div>
    </div>


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

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src=" plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src=" plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src=" plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src=" plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src=" plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src=" plugins/jszip/jszip.min.js"></script>
<script src=" plugins/pdfmake/pdfmake.min.js"></script>
<script src=" plugins/pdfmake/vfs_fonts.js"></script>
<script src=" plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src=" plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src=" plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src=" dist/js/demo.js"></script>
<!-- Page specific script -->


<?php
  require_once('footer.php');
?>
