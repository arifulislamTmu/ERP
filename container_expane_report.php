<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
    <div class=" text-center">
    <a href="container_expane_report.php" class="btn btn-outline-success ">Refresh</a>
    </div>
 <section class="mt-2 tble_2">
 <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <div class="card">
               <div class="card-header">
                <div class="row">
                    <div class=" col-lg-12 text-center pb-3">
                         <h4>All Container expence Report </h4>
                    </div>
                  <div class="col-lg-12">
                  <form action="" method="POST">
                     <div class="row">
                         <div class="col-lg-3"><input type="date" name="form_date" class="form-control "></div>
                         <div class="col-lg-1 text-center">To</div>
                         <div class="col-lg-3"><input type="date" name="to_date" class="form-control "></div>
                         <div class="col-lg-1"><button class="btn btn-outline-success" name="search_all">Search</button></div>
                         </form>
                         <div class="col-lg-4 text-right">
                           <div class="total">
                            <h5 style="color:#f1c40f;">
                              <?php
                                  $select ="SELECT SUM(amounts) AS sum from tbl_container_expance";
                                  $run = mysqli_query($con,$select);
                                  while($res = mysqli_fetch_array($run)){ ?>
                                   Total Expance : <strong><?php echo $res['sum'];?></strong> 
                                   <?php } ?>
                              </h5>
                           </div>
                         </div>
                     </div>
                  </div>
                </div>
              </div> 
      <div class="card-body">
       <?php 
            if(isset($_POST['search_all'])){
              $form_date = $_POST['form_date'];
              $to_date = $_POST['to_date'];
            ?>
                   <div class="row">
                      <div class="col-lg-12">
                        <div class="row border container_print ">
                        <div class="col-lg-12 ">
                           <div class="row print_header">
                              <div class="col-lg-3  container_print3"></div>
                                <div class="col-lg-6 container_print9 mt-4  text-center">
                                  <p style="padding:0; margin:0 ;"><strong style=" font-size: 40px; letter-spacing: 2px; line-height:1px; ">NICE COLLECTION</strong> </p>
                                    <p style="padding:0; margin:0 ;">18 Mirbug Notun Rasta, West Hazipara <br> Dhaka- 1219, Bangladesh</p>
                                      <strong> 
                                         <?php echo $form_date ." to ".  $to_date ?>
                                      </strong>
                                  </div>
                                <div class="col-lg-3 container_print3 py-3">
                                  <h6 style="padding-left:60px;"> Date: <?php echo date("d/m/Y")?></h6>
                                </div> 
                             </div>
                           </div>  
                          <style>
                            .tble{
                            width: 98%;
                            border-color: skyblue;
                            margin:0 auto;
                          
                            }
                            .tble  thead tr th{
                              border:2px solid skyblue;
                            }
                            .tble tbody tr td{
                            border-left: 2px solid skyblue;
                            border-right: 2px solid skyblue;
                            border-bottom: 2px solid skyblue;
                             }

                        @media print {
                          #print{display: none;}
                          #save{display: none;}
                          .tble{
                            width: 98%;
                            border-color: skyblue;
                            margin:0 auto;
                            border-collapse: collapse;
                            }
                          .tble  thead tr th{
                              border:2px solid skyblue;
                            }
                            .tble tbody tr td{
                            border-left: 2px solid skyblue;
                            border-right: 2px solid skyblue;
                             }
                             .container_print{
                               width: 100%;
                              
                             }
                             .print_header{
                               margin-top: 20px;
                              width: 100%;
                              display: flex;
                             }
                             .container_print3{
                              width: 32%; 
                              text-align: right;
                             
                             }
                             .container_print9{
                               width: 50%;
                               text-align: center;
                               margin-bottom: 10px;
                             }
                           
                            
                        }
                        </style>
                                <div class="col-lg-12 py-2">
                             
                                    <table class="tble">
                                        <thead>
                                            <tr>
                                                <th style="width:3%;text-align:center" >Sl</th>
                                                <th style="width:10%;text-align:center" >Date</th>
                                                 <th style="width:16%;text-align:center" >Container Name</th>
                                                <th style="width:16%;text-align:center" >Particulars</th>
                                                <th style="width:16%;text-align:center" >Amounts</th>
                                                <th style="width:10%;text-align:center" >Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                  <?php
                                  $count = 1;
                                    $selct_amont = "SELECT * from tbl_container_expance WHERE container_name  BETWEEN '$form_date' AND '$to_date'";
                                    $run = mysqli_query($con,$selct_amont);
                                    if($run){
                                    while($result = mysqli_fetch_array($run)){  ?>
                                        <tr>
                                            <td style=" border-top:1px solid  skyblue; padding:10px"><?php echo $count++;?></td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['container_name'];?></td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['container_name'];?> </td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['particulars'];?></td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['amounts'];?></td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['remark'];?></td>
                                            <!-- <td style=" border-top:1px solid skyblue; text-align:right; padding-right:10px;"><?php echo $result['amount'];?></td> -->
                                      </tr>
                                 <?php    } }   ?>
                                           
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                          <!-- faka row -->
                                          <td></td> <td></td> <td class="border-0"></td><td style="text-align:right"><b></b></td><td></td>
                                      </tr>
                                        <tr>
                                          <td class="border-0"></td>  <td class="border-0"></td> <td class="border-0"></td><td style="text-align:right; border:0px solid skyblue"><b>Total  &nbsp;</b></td><td style="text-align:right; border:1px solid skyblue; "> 
                                          <b> <?php 
                                          $selct_amont = "SELECT SUM(amounts) AS sum from tbl_container_expance WHERE container_name  BETWEEN '$form_date' AND '$to_date'";
                                          $run = mysqli_query($con,$selct_amont);
                                          if($run){
                                          while($res = mysqli_fetch_array($run)){ 
                                            echo $res['sum'];
                                          } } ?> </b>
                                        </td>
                                        </tr>
                                    </tfoot>
                                    </table>
                                    
                                </div>
                              
                                <div class="col-lg-12 d-flex justify-content-end py-5">
                                    <button id="print" class="btn btn-success ml-3"><i class="fas fa-print"></i> Print</button>
                                </div>
                               
                            </div>
                       
                        </div>

                    </div>

        <style>
          .table_hident{
          display: none;
          visibility: hidden;
          }
          .hide_header{
            display: none;
          visibility: hidden;
          }
        </style>
        <?php  } ?>

              <div class="table_hident">
                <table id="example1" class="table table-bordered table-striped table_hident">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Date</th>
                    <th>Container Name</th>
                    <th>Particulars</th>
                    <th>Amount</th>
                    <th>Remarks</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $count = 1;
                      $select = "SELECT * FROM tbl_container_expance  ORDER BY contain_id DESC"; 
                        $run = mysqli_query($con,$select);
                      while($result = mysqli_fetch_array($run)){ ?>
                    <tr>
                      <td><?php echo $count++;?></td>
                      <td><?php echo $result['container_name']?></td>
                      <td><?php echo $result['container_name']?></td>
                      <td><?php echo $result['particulars']?></td>
                      <td><?php echo $result['amounts']?></td>
                      <td><?php echo $result['remark']?></td>
                   </tr>
                  <?php } ?>
                </table>
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

<script src="js/printThis.js"></script>
<script>
$('#print').click(function(){
  $('.container_print').printThis();
})
</script>
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

