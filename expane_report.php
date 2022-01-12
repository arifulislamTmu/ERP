<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
   <section class="content">
      <div class="row d-flex justify-content-center">
       <div class="col-lg-10 hide_header ">
            <div class="card ">
                <div class="card-header">
                <form action="" method="post">
                  <div class="row hide_header">
                <div class=" col-lg-12 text-center pb-2">
                    <h4>Category Wise Report</h4>
                </div>
                         <div class="col-lg-4">
                            <div class="form-group">
                                <select  class="form-control" name="expnc_id" >
                                    <option value="0"> Select Expance head</option>
                                    <?php 
                                      $select = "SELECT * FROM tbl_expance_head";
                                      $run = mysqli_query($con,$select);
                                      while($result = mysqli_fetch_array($run)){ 
                                      $expance_name = $result['expance_name'];
                                      $expance_name = $_SESSION['expance_name'] = "$expance_name";
                                        ?>
                                        <option value="<?php echo $result['expnc_id']?>"><?php echo $result['expance_name']?></option>
                                     <?php } ?>
                                </select>
                            </div>
                         
                         </div>
                         <div class="col-lg-3"><input type="date" name="form_date" class="form-control "></div>
                         <div class="col-lg-1 text-center">To</div>
                         <div class="col-lg-3"><input type="date" name="to_date" class="form-control "></div>
                         <div class="col-lg-1"><button class="btn btn-outline-success " name="search">Search</button></div>
                         </form>
                     </div>

                </div>
                <div class="card-body mt-0">
                <?php
                  $count = 1;
                    if(isset($_POST['search'])){
                        $expnc_id = $_POST['expnc_id'];
                        $form_date = $_POST['form_date'];
                        $to_date = $_POST['to_date']; ?>

                        <div class="row">
                          <div class="col-lg-12">
                              <div class="row border container_print ">
                        <div class="col-lg-12 ">
                           <div class="row print_header">
                              <div class="col-lg-3  container_print3"></div>
                                <div class="col-lg-6 container_print9 mt-4  text-center">
                                  <p style="padding:0; margin:0 ;"><strong style=" font-size: 40px; letter-spacing: 2px; line-height:1px; ">NICE COLLECTION</strong> </p>
                                    <p style="padding:0; margin:0 ;">18 Mirbug Notun Rasta, West Hazipara <br> Dhaka- 1219, Bangladesh</p>
                                      <strong> <?php
                                        $select ="SELECT * FROM  tbl_expance_head WHERE expnc_id='$expnc_id'";
                                        $run = mysqli_query($con,$select);
                                        while($res = mysqli_fetch_array($run)){
                                          echo $res['expance_name'] ." Report as on <br>";
                                          }
                                      ?>
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
                                                 <th style="width:16%;text-align:center" > Name/Head</th>
                                                <th style="width:16%;text-align:center" >Payment Method</th>
                                                <th style="width:16%;text-align:center" >Note</th>
                                                <th style="width:10%;text-align:center" >Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                               <?php
                             
                                   $selct_amont = "SELECT * from tbl_manage_expance WHERE date  BETWEEN '$form_date' AND '$to_date' AND expance_head ='$expnc_id'";
                                        $run = mysqli_query($con,$selct_amont);
                                        while($result = mysqli_fetch_array($run)){
                                            $pay_method =  $result['pay_method'];
                                            $amount = $result['amount'];
                                            $note = $result['note'];
                                            $employe_id = $result['employe_id'];
                                            $_SESSION['employe_id'] = "$employe_id";
                                            // $selecte ="SELECT * FROM tbl_employe WHERE employe_id='$employe_id'";
                                            // $rune = mysqli_query($con,$selecte);
                                            // while($resulte = mysqli_fetch_array($rune)){  ?>
                                           
                                           <tr>
                                                <td style=" border-top:1px solid  skyblue; padding:10px"><?php echo $count++;?></td>
                                                <td style=" border-top:1px solid skyblue;"><?php echo $result['date'];?></td>
                                                <?php if($employe_id== '0'){ ?>

                                                  <td style=" border-top:1px solid skyblue;"><?php echo  $expance_name;?></td>

                                               <?php }else{ ?>
                                                <td style=" border-top:1px solid skyblue;"><?php 
                                                $selecte ="SELECT * FROM tbl_employe WHERE employe_id='$employe_id'";
                                                $rune = mysqli_query($con,$selecte);
                                                while($resulte = mysqli_fetch_array($rune)){ echo $resulte['empole_name']; }?></td>
                                          
                                                   <?php }?>
                                           
                                               
                                                <td style=" border-top:1px solid skyblue;"><?php echo $result['pay_method'];?></td>
                                                <td style=" border-top:1px solid skyblue;"><?php echo $result['note'];?></td>
                                                <td style=" border-top:1px solid skyblue; text-align:right; padding-right:10px;"><?php echo $result['amount'];?></td>
                                          </tr>
                                          <?php  } ?>
                                           
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                          <!-- faka row -->
                                          <td></td> <td></td> <td class="border-0"></td><td style="text-align:right"><b></b></td><td></td>
                                      </tr>
                                        <tr>
                                          <td class="border-0"></td> <td></td>  <td class="border-0"></td> <td class="border-0"></td><td style="text-align:right; border:0px solid skyblue"><b>Total  &nbsp;</b></td><td style="text-align:right; border:1px solid skyblue; "> 
                                          <b> <?php 
                                          $selct_amont = "SELECT SUM(amount) AS sum from tbl_manage_expance WHERE date  BETWEEN '$form_date' AND '$to_date' AND expance_head ='$expnc_id'";
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
                          .tble_2{
                            display: none;
                            visibility: hidden;
                          }
                        </style>
                            
                 <?php 
              
              

                }   ?>  

                </div>
            </div>
     </section>
    <div class=" text-center">
    <a href="expane_report.php" class="btn btn-outline-success ">Refresh</a>
    </div>
 <section class="mt-2 tble_2">
 <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <div class="card">
               <div class="card-header">
                <div class="row">
                    <div class=" col-lg-12 text-center pb-3">
                         <h4>All expence Report </h4>
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
                                  $select ="SELECT SUM(amount) AS sum from tbl_manage_expance";
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
                                                 <th style="width:16%;text-align:center" >Expances Head</th>
                                                <th style="width:16%;text-align:center" >Payment Method</th>
                                                <th style="width:16%;text-align:center" >Note</th>
                                                <th style="width:10%;text-align:center" >Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                  <?php
                                    $selct_amont = "SELECT * from tbl_manage_expance WHERE date  BETWEEN '$form_date' AND '$to_date'";
                                    $run = mysqli_query($con,$selct_amont);
                                    if($run){
                                    while($result = mysqli_fetch_array($run)){
                                         $expance_head = $result['expance_head'];
                                           ?>
                                        <tr>
                                            <td style=" border-top:1px solid  skyblue; padding:10px"><?php echo $count++;?></td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['date'];?></td>
                                            <td style=" border-top:1px solid skyblue;">
                                              <?php 
                                              $selecte ="SELECT * FROM tbl_expance_head WHERE expnc_id='$expance_head'";
                                              $rune = mysqli_query($con,$selecte);
                                              while($resulte = mysqli_fetch_array($rune)){ echo $resulte['expance_name']; }?>
                                              </td>

                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['pay_method'];?></td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['note'];?></td>
                                            <td style=" border-top:1px solid skyblue; text-align:right; padding-right:10px;"><?php echo $result['amount'];?></td>
                                      </tr>
                                          <?php    } }   ?>
                                           
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                          <!-- faka row -->
                                          <td></td> <td></td> <td class="border-0"></td><td style="text-align:right"><b></b></td><td></td>
                                      </tr>
                                        <tr>
                                          <td class="border-0"></td> <td></td> <td class="border-0"></td> <td class="border-0"></td><td style="text-align:right; border:0px solid skyblue"><b>Total  &nbsp;</b></td><td style="text-align:right; border:1px solid skyblue; "> 
                                          <b> <?php 
                                          $selct_amont = "SELECT SUM(amount) AS sum from tbl_manage_expance WHERE date  BETWEEN '$form_date' AND '$to_date'";
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
                    <th>Expance Head</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                    <th>Note</th>
                    <th>Details</th>
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

