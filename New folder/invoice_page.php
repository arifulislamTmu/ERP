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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- main_conetiner -->
    <div class="container">
              <div class="row  d-flex justify-content-center">
                  <div class="col-lg-11">
                    <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"></h3>
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
                          <div class="col-lg-12">
                             <?php $user_id =  $_SESSION['usr_id']?>
                             <a class="btn btn-primary " href="transition_details.php?usr_id=<?php echo $user_id;?>"><i class="fas fa-long-arrow-alt-left"></i> Go Back</a></a>
                            <div class="row border container_print ">
                                <div class="col-lg-8 container_print9 mt-4 ">
                                  <p style="padding:0; margin:0 ;"><strong style="color: rgb(1, 0, 7); font-size: 40px; letter-spacing: 2px; font-weight: 700;">NICE</strong> 
                                    <label style="color: rgb(5, 0, 0); font-size: 38px; letter-spacing: 2px; font-weight: 500;"> Collection</label></p>
                                    <label>18 Mirbug Notun Rasta, West Hazipara <br> Dhaka- 1219, Bangladesh</label>
                                </div>
                                <div class="col-lg-4 container_print3 mt-4 py-3">
                                  <h5 style="padding-left:60px;">INVOICE</h5>
                                  <div class="row">
                                        <table style="margin-left:48px;  border-collapse: collapse;">
                                        <tr>
                                            <td style="border:0px solid skyblue; text-align: right;">Tread Id:</td>
                                            <td style="width: 20px;"></td>
                                            <td style=" border:1px solid skyblue;padding-left:10px; padding-right:10px;"><?php echo $get = $_GET['nastin_id']?></td>
                                          </tr>
                                          <tr>
                                            <td style="border:0px solid skyblue; text-align: right;">Payment Id:</td>
                                            <td style="width: 20px;"></td>
                                            <!-- <td style=" border:1px solid skyblue;padding-left:10px; padding-right:10px;"><?php echo $payment_Id;?></td> -->
                                          </tr>
                                       
                                          <tr>
                                            <td style="border:0px solid; text-align: right; ">Date :</td>
                                            <td style="width: 20px;"></td>
                                            <td style=" background-color: royalblue; border:1px solid skyblue;padding-left:10px; padding-right:10px;"> <?php echo date("d/m/Y")?></td>
                                          </tr>
                                        </table>
                                    </div>
                                </div> 
                         
                                <div class="col-lg-6">
                                  <div class="w-50 bilto" style="background-color: royalblue;">
                                     <p>Bill To</p>
                                  </div>
                                  <label>Mr/Ms.  &nbsp;<strong>
                                    <?php 
                                    
                                     $user_Id =  $_SESSION['usr_id'];
                                      $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$user_Id'";
                                      $run = mysqli_query($con,$select);
                                      while($result= mysqli_fetch_array($run)){
                                        echo $result['cmr_name'];
                                      } ?></strong>
                                 </label>
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
                             }
                             .bilto{
                               margin-top: 20px;
                               width: 50%;
                              background-color: royalblue; 
                              font-size: 20px;
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
                             .bilto{
                               margin-top: 20px;
                               width: 50%;
                              background-color: royalblue; 
                              font-size: 20px;
                             }
                             .container_print{
                               width: 100%;
                             }
                             .container_print9{
                               width: 65%;
                               float: left;
                             }
                            
                        }
                        </style>
                                <div class="col-lg-12">
                                    <table class="tble">
                                        <thead>
                                            <tr>
                                                <th style="width:16%;text-align:center" >Goods Name</th>
                                                <th style="width:5%;text-align:center" >Payment Id</th>
                                                <th style="width:3%;text-align:center" >DelivaryCtn</th>
                                                <th style="width:3%;text-align:center" >CTN Qty</th>
                                                <th style="width:3%;text-align:center" >TGW</th>
                                                <th style="width:3%;text-align:center" >Delivary Weight</th>
                                                <th style="width:8%;text-align:center" >T.P. Kg</th>
                                                <th style="width:8%;text-align:center" >Total Taka</th>
                                                <th style="width:10%;text-align:center" >Recived Amount </th>
                                                <th style="width:10%;text-align:center" >Current Due</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                            $get_tnsid = $_GET['nastin_id'];
                                            $select = "SELECT * FROM `tbl_transation_form` 
                                            INNER JOIN tbl_payment ON tbl_transation_form.transiton_id = tbl_payment.transtion_id
                                            INNER JOIN tbl_pay_invoice ON tbl_transation_form.transiton_id = tbl_pay_invoice.transtion_id WHERE  tbl_transation_form.transiton_id='$get_tnsid'";
                                           $run = mysqli_query($con,$select);
                                           while($result = mysqli_fetch_array($run)){ ?>

                                         
                                           <tr>
                                              <td style=" border-top:0px solid ; padding:10px"><?php echo $result['goods_name'];?></td>
                                                <td style=" border-top:0px solid ;"><?php echo $result['payment_id'];?></td>
                                                <td style=" border-top:0px solid ;"><?php echo $result['delvry_ctn'];?></td>
                                                <td style=" border-top:0px solid ;"><?php echo $result['ctn_qty'];?></td>
                                                <td style=" border-top:0px solid ;"><?php echo $result['total_g_w'];?></td>
                                                <td style=" border-top:0px solid ;"><?php echo $result['delvry_we'];?></td>
                                                <td style=" border-top:0px solid ;"><?php echo $result['taka_par_kg'];?></td>
                                                <td style=" border-top:0px solid ;"><?php echo $result['total_taka'];?></td>
                                                <td style=" border-top:0px solid ;"><?php echo $result['cash_recevd'];?></td>
                                                <td style=" border-top:0px solid ;"><?php echo $result['current_due'];?></td>

                                                <?php $_SESSION['total_taka']  =  $result['total_taka'];?>
                                                <?php $_SESSION['cash_recevd'] =  $result['cash_recevd'];?>
                                                <?php $_SESSION['current_due'] =  $result['current_due'];?>
                                                <?php $_SESSION['remaks'] =  $result['remaks'];?>
                                          </tr>
                                          <?php } ?>
                                              <tr>
                                              <td style=" border-bottom:1px solid skyblue; color: black;  padding:10px"></td>
                                                <td style="border-bottom:1px solid skyblue; color: black;"></td>
                                                <td style="border-bottom:1px solid skyblue; color: black;"></td>
                                                <td style="border-bottom:1px solid skyblue; color: black;"></td>
                                                <td style="border-bottom:1px solid skyblue; color: black;"></td>
                                                <td style="border-bottom:1px solid skyblue; color: black;"></td>
                                                <td style="border-bottom:1px solid skyblue; color: black;"></td>
                                                <td style="border-bottom:1px solid skyblue; color: black;"></td>
                                                <td style="border-bottom:1px solid skyblue; color: black;"></td>
                                                <td style="border-bottom:1px solid skyblue; color: black;"></td>
                                             </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                          <td class="border-0"></td>  <td></td> <td></td> <td></td>  <td></td> <td></td>   <td class="border-0"></td> <td class="border-0"></td><td style="text-align:right; border:0px solid skyblue"><b>Total  &nbsp;</b></td><td style="text-align:center; border:0px solid skyblue; "> <b> <?php echo $_SESSION['total_taka'];?> </b></td>
                                        </tr>
                                        <tr>
                                        <td></td> <td></td>   <td></td> <td></td> <td></td> <td></td> <td></td> <td class="border-0"></td><td style="text-align:right; border:0px solid skyblue;">Received  &nbsp;</td><td style="text-align:center; border:1px solid skyblue;"><?php echo  $_SESSION['cash_recevd'];?>  </td>
                                        </tr>
                                        <tr>
                                        <td></td> <td></td>   <td></td> <td></td> <td></td>  <td></td> <td></td><td class="border-0"></td><td style="text-align:right;  border:0px solid skyblue">Due  &nbsp;</td><td style="text-align:center; border:0px solid skyblue;"><?php echo $_SESSION['current_due']; ?> </td>
                                        </tr>
                                        <tr>
                                        <td></td> <td></td>   <td></td> <td></td>  <td></td> <td></td> <td></td><td class="border-0"></td><td style="text-align:right;  border-bottom:2px solid skyblue;"><b></b></td><td style="text-align:center; border-bottom:2px solid skyblue;"></td>
                                        </tr>
                                        <tr>
                                          <!-- faka row -->
                                          <td></td> <td></td>   <td></td> <td></td>  <td></td> <td></td> <td class="border-0"></td><td style="text-align:right"><b></b></td><td></td>
                                      </tr>
                                        <tr>
                                        <td></td> <td></td>  <td></td> <td></td> <td></td>  <td></td> <td></td><td class="border-0"></td><td style="text-align:right; border:0px solid skyblue"><b>Net Payable  &nbsp;</b></td><td style="text-align:center; background-color: royalblue; border: 1px solid; margin: 10px; "> <b> <?php echo $_SESSION['total_taka'];?></b></td>
                                      </tr>
                                        <tr>
                                          <td colspan="3" style="border: 2px solid skyblue; height:100px">
                                                <div class="header" style="Background:skyblue" >
                                                  <strong>Remarks</strong>
                                                </div>
                                                <div class="body_remarks" style="height:100px">
                                                  <p> <?php echo $_SESSION['remaks'];?></p>
                                                </div>
                                          </td>
                                        </tr>
                                    </tfoot>
                                    </table>
                                    
                                </div>
                              
                                <div class="col-lg-12 d-flex justify-content-end py-2">
                                    <button id="print" class="btn btn-success ml-3"><i class="fas fa-print"></i> Print</button>
                                </div>
                               
                            </div>
                       
                        </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

<?php
  require_once('footer.php');
?>