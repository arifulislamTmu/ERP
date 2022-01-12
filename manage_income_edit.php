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
              <li class="breadcrumb-item active">Manage income page</li>
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
          <strong>Success!</strong> Data Update Success.
          </div>';
          $get_update_id = $_GET['income_id'];
            if(isset($_POST['Update_btn'])){
                $date   = $_POST['date'];
                $income_head   = $_POST['income_head'];
                $amount   = $_POST['amount'];
                $pay_method   = $_POST['pay_method'];
                $note   = $_POST['note'];
                $details   = $_POST['details'];

                $Update ="UPDATE  tbl_manage_income SET date='$date', income_head='$income_head',amount='$amount',pay_method='$pay_method', note='$note', details='$details' WHERE  income_id='$get_update_id' "; 
                $run = mysqli_query($con,$Update);
                    if($run){
                    echo $msg;
                    } 
                }
                
        
    
        
        ?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add income</h3>
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
             $get_id_income = $_GET['income_id'];
             $select = "SELECT * FROM tbl_manage_income WHERE income_id='$get_id_income' limit 1";
             $run = mysqli_query($con,$select);
             while($result = mysqli_fetch_array($run)){ ?>

         
        <form action="" method="POST">
          <div class="card-body">
            <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control" value="<?php echo $result['date']?>" required name="date"  >
                </div>
               </div>
            <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Income Head</label>
                        <select class="form-select form-control" name="income_head" aria-label="Default select example">
                        <?php
                          $select = "SELECT * FROM tbl_income_head";
                          $run = mysqli_query($con,$select);
                          while($results = mysqli_fetch_array($run)){ ?>
                           <option <?php if($results['in_h_id'] == $result['income_head']){ ?> selected="select"<?php } ?>value="<?php echo $results['in_h_id']?>"><?php echo $results['incom_name']?></option>
                       <?php   } ?>
                       
                        </select>
                    </div>
                </div>
               <div class="col-lg-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    
                    <input type="text" class="form-control" value="<?php echo $result['amount']?>" required name="amount"  >
                </div>
               </div>
               <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputPassword1"><?php echo $result['pay_method']?></label>
                        <select class="form-select form-control" name="pay_method" aria-label="Default select example">
                          <option value="Cash">Cash</option>
                          <option value="Mobile Banking">Mobile Banking</option>
                          <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
           <div class="col-lg-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Note</label>
                <textarea class="form-control" name="note"  id="" rows="2"><?php echo $result['note']?></textarea>
            </div>
           </div>
           <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                          <textarea class="form-control" name="details" id="" rows="2"><?php echo $result['details']?></textarea>
                    </div>
               </div>
           </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="Update_btn">Update</button>
            </div>
        </div>
      </div>
    </div>
    </div>
    </form>
    <?php  }  ?>
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

