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
          <strong>Success!</strong> Data Insert Success.
          </div>';
          $msg2 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>This Income Head  Already Exist Please Change "Details" Or "Note" ....!
          </div>';
            if(isset($_POST['create_btn'])){
                $date   = $_POST['date'];
                $income_head   = $_POST['income_head'];
                $amount   = $_POST['amount'];
                $pay_method   = $_POST['pay_method'];
                $note   = $_POST['note'];
                $details   = $_POST['details'];

                $select ="SELECT * FROM tbl_manage_income WHERE date='$date' AND income_head='$income_head' AND amount='$amount' AND pay_method='$pay_method' AND note='$note' AND details='$details'"; 
                $run = mysqli_query($con,$select);
                if(mysqli_num_rows($run)>0){
                  echo $msg2;
                }else{
                $insert ="INSERT INTO tbl_manage_income(date,income_head,amount,pay_method,note,details)
                VALUES('$date','$income_head','$amount','$pay_method','$note','$details')";
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
                        <label for="exampleInputPassword1">Income Head</label>
                        <select class="form-select form-control" name="income_head" aria-label="Default select example">
                        <option value="" selected>Open this select menu</option>
                        <?php
                          $select = "SELECT * FROM tbl_income_head";
                          $run = mysqli_query($con,$select);
                          while($result = mysqli_fetch_array($run)){ ?>
                           <option value="<?php echo $result['in_h_id']?>"><?php echo $result['incom_name']?></option>
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

 <section class="mt-5">
 <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Income history </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                 
                    <th>Sl</th>
                    <th>Date</th>
                    <th>Income Head</th>
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
                      $select = "SELECT * FROM tbl_manage_income 
                                INNER JOIN tbl_income_head ON tbl_manage_income.income_head = tbl_income_head.in_h_id  ";
                      $run = mysqli_query($con,$select);
                      while($result = mysqli_fetch_array($run)){ ?>
                    <tr>
                      <td><?php echo $count++;?></td>
                      <td><?php echo $result['date']?></td>
                      <td><?php echo $result['incom_name']?></td>
                      <td><?php echo $result['amount']?></td>
                      <td><?php echo $result['pay_method']?></td>
                      <td><?php echo $result['note']?></td>
                      <td><?php echo $result['details']?></td>
                      <td> <?php if($role_name=='0'){ ?><a style="font-size:20px; padding:10px;"href="?income_id=<?php echo $result['income_id'];?>"><i class="fas fa-edit"></i></a> <a  style="font-size:20px; padding:10px;"href=""><i class="far fa-trash-alt"></i></a>  <?php }?></td>
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

