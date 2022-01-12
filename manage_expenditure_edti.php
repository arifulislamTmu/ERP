<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
  

   <section class="content">
      <div class="row d-flex justify-content-center mt-4">
       <div class="col-lg-10 ">
         <?php
          $msg ='<div class="alert bg-success">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Success!</strong> Data Update Success.
          </div>';
          

        if(isset($_GET['expence_del_Id'])){
            $expence_del_Id = $_GET['expence_del_Id'];
      
            $delete = "DELETE FROM tbl_manage_expance WHERE id ='$expence_del_Id'";
            $run = mysqli_query($con,$delete);
            if($run){
                  echo $msg4;
            }
              }
             $expence_id =$_GET['expence_id'];
            if(isset($_POST['update_btn'])){
                $date   = $_POST['date'];
                $expance_head   = $_POST['expance_head'];
                $amount   = $_POST['amount'];
                $pay_method   = $_POST['pay_method'];
                $note   = $_POST['note'];
                $details   = $_POST['details'];
                 
                $select ="UPDATE tbl_manage_expance SET  date='$date', expance_head='$expance_head', amount='$amount', pay_method='$pay_method', note='$note', details='$details' WHERE id = '$expence_id'"; 
                $run = mysqli_query($con,$select);
               if( $run){
                echo $msg;
               }
                
               
        }

          ?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Update Expenditure</h3>
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
             $expence_id = $_GET['expence_id'];
             $select = "SELECT * FROM tbl_manage_expance WHERE id ='$expence_id' limit 1";
             $run = mysqli_query($con,$select);
             while($result = mysqli_fetch_array($run)){ ?>

        <form action="" method="POST">
          <div class="card-body">
            <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control"  value="<?php echo $result['date']?>" name="date"  >
                </div>
               </div>
            <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Expance Head</label>
                        <select class="form-select form-control" name="expance_head" aria-label="Default select example">
                        <?php
                          $select = "SELECT * FROM tbl_expance_head";
                          $run = mysqli_query($con,$select);
                          while($results = mysqli_fetch_array($run)){ ?>
                           <option <?php if($results['expnc_id']== $result['id']){ ?>selected="select" <?php } ?> value="<?php echo $results['expnc_id']?>"><?php echo $results['expance_name']?></option>
                       <?php   } ?>
                        </select>
                    </div>
                </div>
               <div class="col-lg-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="number" class="form-control" value="<?php echo $result['amount']?>" name="amount"  >
                </div>
               </div>
               <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Payment Method</label>
                        <select class="form-select form-control" name="pay_method" aria-label="Default select example">
                          <option value="Cash"><?php echo $result['pay_method']?></option>
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
                          <textarea class="form-control" name="details"  rows="2"> <?php echo $result['details']?></textarea>
                    </div>
               </div>
           </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="update_btn">Update</button>
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

