<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Manage Employe expenditure page</li>
            </ol>
          </div>
        </div>
      </div>
    </div> -->
    <!-- main_conetiner -->

   <section class="content">
      <div class="row d-flex justify-content-center mt-4">
       <div class="col-lg-10 ">
         <?php
           $employe_id_edit = $_GET['employe_id_edit'];
           

          $msg ='<div class="alert bg-success">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Success!</strong> Data Updated Success.
          </div>';
          $msg2 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>This Income Head  Already Exist Please Change "Details" Or "Note" ....!
          </div>';
          $msg4 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong> Data deleted success ....!
          </div>';
            if(isset($_POST['create_btn'])){
                $date   = $_POST['date'];
                $employe_id =$_POST['employe_id'];
                $expance_head   = $_POST['expance_head'];
                $amount   = $_POST['amount'];
                $pay_method   = $_POST['pay_method'];
                $note   = $_POST['note'];
                $details   = $_POST['details'];

                $select ="UPDATE tbl_manage_expance SET date='$date', employe_id='$employe_id', expance_head='$expance_head',amount='$amount',pay_method='$pay_method', note='$note', details='$details' WHERE id='$employe_id_edit' "; 
                $run = mysqli_query($con,$select);
                if($run){
                echo $msg;
                } else{
                echo "not inert";      
            }
          } 
        
      ?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Update Expenditure Employe</h3>
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
            <?php
               $select = "SELECT * FROM tbl_manage_expance WHERE id ='$employe_id_edit'";
               $run = mysqli_query($con,$select);
               while($res = mysqli_fetch_array($run)){ ?>

          <div class="card-body">
            <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control" value="<?php echo $res['date']?>" required name="date"  >
                   
                </div>
               </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputPassword1">Employe Name</label>
                    <select class="form-select form-control" required name="employe_id" aria-label="Default select example">
                    <option value="" selected>Open this select menu</option>
                    <?php
                        $select = "SELECT * FROM tbl_employe";
                        $run = mysqli_query($con,$select);
                        while($result = mysqli_fetch_array($run)){ ?>
                        <option <?php if($res['employe_id']==$result['employe_id']){ ?> selected="select" <?php } ?>  value="<?php echo $result['employe_id']?>"><?php echo $result['empole_name']?></option>
                    <?php   } ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Expance Head</label>
                        <select class="form-select form-control" name="expance_head" aria-label="Default select example">
                        <option value="" selected>Open this select menu</option>
                        <?php
                          $select = "SELECT * FROM tbl_expance_head";
                          $run = mysqli_query($con,$select);
                          while($result = mysqli_fetch_array($run)){ ?>
                           <option <?php if($res['expance_head']==$result['expnc_id']){ ?> selected="select" <?php } ?>value="<?php echo $result['expnc_id']?>"><?php echo $result['expance_name']?></option>
                       <?php   } ?>
                        </select>
                    </div>
                </div>
               <div class="col-lg-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="number" required class="form-control"  value="<?php echo $res['amount']?>" name="amount"  >
                </div>
               </div>
               <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Payment Method</label>
                        <select class="form-select form-control" name="pay_method" aria-label="Default select example">
                        <option value="<?php echo $res['pay_method']?>"><?php echo $res['pay_method']?></option>
                        <option value="Cash">Cash</option>
                          <option value="Mobile Banking">Mobile Banking</option>
                          <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
           <div class="col-lg-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Note</label>
                <textarea class="form-control" name="note"   id="" rows="2"><?php echo $res['note']?></textarea>
            </div>
           </div>
           <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                          <textarea class="form-control" name="details" id="" rows="2"><?php echo $res['details']?></textarea>
                    </div>
               </div>
           </div>
        </div>
        
        <?php }  ?>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="create_btn">Update</button>
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

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<?php
  require_once('footer.php');
?>

