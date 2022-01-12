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
            <h1 class="m-0">Trade Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Trade Reports</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- main_conetiner -->

   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                   <div class="row">
                       <div class="col-lg-6">
                           <h3 class="card-title"> Trade Report </h3>
                       </div>
                       <div  class="col-lg-6">
                           <h3 class="card-title" > Total Amount : &nbsp; <?php
                                $select = "SELECT SUM(total_taka) AS sum FROM tbl_payment";
                                $run = mysqli_query($con,$select);
                                while($res = mysqli_fetch_array($run)){ 
                                    $counts  = $res['sum'];
                                   echo"<strong> $counts </strong>" ;
                                }
                            ?></h3>
                       </div>
                   </div>
                
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Customer Name</th> 
                    <th>Phone</th>
                    <th>Company Name</th>
                    <th>Total Amounts</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php
                       $count = 1;
                        $query = "SELECT DISTINCT cmr_p_id FROM tbl_payment";
                        $run = mysqli_query($con,$query);
                        $j_array = array();
                        while($result = mysqli_fetch_assoc($run)){ 
                        $j_array[] = $result;

                        }
                         foreach($j_array as $keys=>$value){

                         foreach($value as $cmr_p_id){
                            $select = "SELECT SUM(total_taka) AS sum FROM tbl_payment WHERE cmr_p_id='$cmr_p_id' ";
                            $run = mysqli_query($con,$select);
                            while($res = mysqli_fetch_array($run)){ 
                                $counts  = $res['sum'];
                            }
                        $select = "SELECT * FROM tbl_customer 
                        INNER JOIN tbl_payment ON tbl_customer.cmr_p_id = tbl_payment.cmr_p_id WHERE tbl_customer.cmr_p_id='$cmr_p_id' limit 1 ";
                        $run = mysqli_query($con,$select);

                        while($result= mysqli_fetch_array($run)){ ?>
                         <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $result['cmr_name'];?></td>
                            <td><?php echo $result['cmr_mobile'];?></td>
                            <td><?php echo $result['company_name'];?></td>
                            <td><?php echo  $counts?></td>
                            <td><a href="view_trade_all_details.php?trede_usr_id=<?php echo $result['cmr_p_id']?>" class="btn btn-outline-success"> <i class="fas fa-external-link-alt"></i> View Trade Details</a></td>
                          </tr>
                    <?php }  } }?>
                 
                </table>
              </div>
            </div>
   
          </div>
         
        </div>
     
      </div>
    </section>

  </div>
 <aside class="control-sidebar control-sidebar-dark">
   
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

