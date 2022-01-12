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
          <strong>Success!</strong> Data Insert Success.
          </div>';
          $msg2 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>This Income Head  Already Exist Please Change "Details" Or "Note" ....!
          </div>';
          $msg4 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>Deleted Success....!
          </div>';
          
            if(isset($_POST['create_btn'])){
                $date   = $_POST['date'];
                $expance_head   = $_POST['expance_head'];
                $amount   = $_POST['amount'];
                $pay_method   = $_POST['pay_method'];
                $note   = $_POST['note'];
                $details   = $_POST['details'];

                $select ="SELECT * FROM tbl_manage_expance WHERE date='$date' AND expance_head='$expance_head' AND amount='$amount' AND pay_method='$pay_method' AND note='$note' AND details='$details'"; 
                $run = mysqli_query($con,$select);
                if(mysqli_num_rows($run)>0){
                  echo $msg2;
                }else{

                $insert ="INSERT INTO tbl_manage_expance(date,expance_head,amount,pay_method,note,details)
                VALUES('$date','$expance_head','$amount','$pay_method','$note','$details')";
              $run = mysqli_query($con,$insert);
             if($run){
               echo $msg;
             } else{
              echo "not inert";      
            }
          } 
        }


        if(isset($_GET['expence_del_Id'])){
          $expence_del_Id = $_GET['expence_del_Id'];
    
          $delete = "DELETE FROM tbl_manage_expance WHERE id ='$expence_del_Id'";
          $run = mysqli_query($con,$delete);
          if($run){
                echo $msg4;
          }
 }
          ?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Expenditure</h3>
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
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control" name="date"  >
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
                           <option value="<?php echo $result['expnc_id']?>"><?php echo $result['expance_name']?></option>
                       <?php   } ?>
                        </select>
                    </div>
                </div>
               <div class="col-lg-2">
                <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="number" class="form-control" name="amount"  >
                </div>
               </div>
               <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Payment Method</label>
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
                <textarea class="form-control" name="note" id="" rows="2"></textarea>
            </div>
           </div>
           <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                          <textarea class="form-control" name="details" id="" rows="2"></textarea>
                    </div>
               </div>
           </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="create_btn">Save</button>
            </div>
        </div>
      </div>
    </div>
    </div>
    </form>

 </section>
 <section class="mt-2">
 <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-2">  <h3 class="card-title">Expance history </h3></div>
                  <div class="col-lg-10">
                  <form action="" method="POST">
                     <div class="row">
                         <div class="col-lg-1">From</div>
                         <div class="col-lg-3"><input type="date" name="form_date" class="form-control form-control-sm"></div>
                         <div class="col-lg-1 text-center">To</div>
                         <div class="col-lg-3"><input type="date" name="to_date" class="form-control form-control-sm"></div>
                         <div class="col-lg-1"><button class="btn btn-outline-success btn-sm" name="search">Search</button></div>
                         </form>
                         <div class="col-lg-3 text-center">
                           <div class="total">
                            <h5 style="color:#f1c40f;">
                              <?php
                                  $select ="SELECT SUM(amount) AS sum from tbl_manage_expance";
                                  $run = mysqli_query($con,$select);
                                  while($res = mysqli_fetch_array($run)){ ?>
                                   Total Expance : <strong><?php echo $res['sum'];?></strong> 
                                   <?php } ?>

                            </h5>

                           </div>
                         <?php 
                         if(isset($_POST['search'])){
                            $form_date = $_POST['form_date'];
                            $to_date = $_POST['to_date'];
                            $selct_amont = "SELECT SUM(amount) AS sum from tbl_manage_expance WHERE date  BETWEEN '$form_date' AND '$to_date'";
                            $run = mysqli_query($con,$selct_amont);
                            if($run){
                            while($res = mysqli_fetch_array($run)){ ?>
                               <h5>Total : <strong><?php echo $res['sum'];?></strong> </h5>
                               <style>
                                 .total{
                                   display: none;
                                   visibility: hidden;
                                 }
                               </style>
                              <?php  } } }

                              
                              ?>
                           </div>
                     </div>
                  </div>
                </div>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Date</th>
                    <th>Expance Head</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                    <th>Note</th>
                    <th>Details</th>
                    <th>Action </th>

                  </tr>
                  </thead>
                  <tbody>
                
                    <?php
                    $count = 1;
                      $select = "SELECT * FROM tbl_expance_head
                      INNER JOIN tbl_manage_expance ON tbl_expance_head.expnc_id = tbl_manage_expance.expance_head ORDER BY id DESC"; 
                        $run = mysqli_query($con,$select);
                      while($result = mysqli_fetch_array($run)){ ?>
                    <tr>
                      <td><?php echo $count++;?></td>
                      <td><?php echo $result['date']?></td>
                      <td><?php echo $result['expance_name']?></td>
                      <td><?php echo $result['amount']?></td>
                      <td><?php echo $result['pay_method']?></td>
                      <td><?php echo $result['note']?></td>
                      <td><?php echo $result['details']?></td>
                      <td> <?php if($role_name=='0'){ ?> <a style="font-size:20px; padding:10px;"href="manage_expenditure_edti.php?expence_id=<?php echo $result['id'];?>"><i class="fas fa-edit"></i></a> <a  onclick="return confirm('You are Sure..?')"  style="font-size:20px; padding:10px; color:red;"href="?expence_del_Id=<?php echo $result['id'];?>"><i class="far fa-trash-alt"></i></a> <?php }?></td>
                    </tr>
                  <?php } ?>
                </table>
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

