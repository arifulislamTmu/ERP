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
            <h1 class="m-0">Customer list</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Customer list</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- main_conetiner -->
   <section>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Customer list </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>Sl</th>
                    <th>Customer Id</th>
                    <th>Customer Name</th>
                    <th>Phone No</th>
                    <th>Auhority Name</th>
                    <th>Company Name</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    $count = 1;
                      $select = "SELECT * FROM tbl_customer";
                      $run = mysqli_query($con,$select);
                      while($result = mysqli_fetch_array($run)){ ?>
                        <tr>
                          <td><?php echo $count++;?></td>
                          <td><?php echo $result['cmr_id'];?></td>
                          <td><?php echo $result['cmr_name'];?></td>
                          <td><?php echo $result['cmr_mobile'];?></td>
                          <td><?php echo $result['auth_name'];?></td>
                          <td><?php echo $result['company_name'];?></td>
                          <td><?php echo $result['cmr_address'];?></td>
                          <td> <?php if($role_name=='0'){ ?> <a style="font-size:20px; padding:10px; " href="customer_edit.php?cmr_id=<?php echo $result['cmr_p_id'];?>"><i class="fas fa-edit"></i></a> <a  style="font-size:20px; padding:10px;"href=""><i class="far fa-trash-alt"></i></a> <?php }?></td>
                        </tr>
                    <?php  } ?>
                </table>
              </div>
            </div>
   
          </div>
         
        </div>
     
      </div>
    </section>

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
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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

