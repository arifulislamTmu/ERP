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
            <h1 class="m-0"><a href="trade_report_page.php?usr_id=$_GET['usr_id'];" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Go Back</a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Transaction Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- main_conetiner -->
   <section>

    <!-- main_conetiner -->
    <div class="container print_container">
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

           <!-- =============================lager print code ==========================================          -->
           <div class="card-body">
            <div class="row">
              <div class="col-lg-12 ">
              <div class="row container_print ">
                    <div class="main_div_leger">
                          <div class="lager_div-col-12">
                               <div class="title_header">
                                  <p><strong style="color: rgb(1, 0, 7); font-size: 40px; letter-spacing: 2px; font-weight: 700;">NICE</strong> 
                                    <label style="color: rgb(5, 0, 0); font-size: 38px; letter-spacing: 2px; font-weight: 500;"> Collection</label></p>
                                  <label>18 Mirbug Notun Rasta, West Hazipara <br> Dhaka- 1219, Bangladesh</label>
                               </div>
                          </div>
                          <div class="lager_div-col-12">
                            <div class="bilto_dive">
                              <div class="bilto_dive-6"> <h5>Bill To : 
                              <strong>
                        <?php 
                          $get_user_id = $_GET['trede_usr_id'];
                          $_SESSION['usr_id'] ="$get_user_id";
                          $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$get_user_id'";
                          $run = mysqli_query($con,$select);
                          while($result= mysqli_fetch_array($run)){
                             echo $result['cmr_name'];
                           } ?></strong>

                              </h5></div>
                              <div class="bilto_dive-6"> <h6>Date- <?php echo date("d/m/Y")?></h6></div>
                            </div>
                       </div>
                       <div class="lager_div-col-12">
                        <table class="tble">
                          <thead>
                               <tr>
                                 <th style="width:10%;text-align:center" >Date</th>
                                 <th style="width:10%;text-align:center" >Transation Id</th>
                                  <th style="width:20%;text-align:center" >Goods name</th>
                                  <th style="width:5%;text-align:center" >Delivery Ctn</th>
                                  <th style="width:5%;text-align:center" >T.G.W</th>
                                  <th style="width:5%;text-align:center" >Total Income</th>
                                  <th style="width:5%;text-align:center" >Received amt</th>
                                  <th style="width:5%;text-align:center" >Balance</th>
                               </tr>
                           </thead>
                           <tbody>
                             <?php
                               $get_user_id = $_GET['trede_usr_id'];
                               $select = "SELECT * FROM `tbl_payment` WHERE cmr_p_id = '$get_user_id'";
                               $run = mysqli_query($con,$select);
                               while($result= mysqli_fetch_array($run)){ ?>
                                 <tr>
                                   <td style=" border-top:0px solid ; color: black;"><?php echo $result['date']?></td>
                                   <td style=" border-top:0px solid ; color: black;"><?php echo $result['transtion_id']?></td>
                                   <td style="border-top:0px solid ; color: black; padding-right:10px;"><?php echo $result['goods_name']?></td>
                                   <td style="border-top:0px solid ; color: black;  text-align:right; padding-right:10px;"><?php echo $result['delvry_ctn']?></td>
                                   <td style="border-top:0px solid ; color: black;  text-align:right; padding-right:10px;"><?php echo $result['total_g_w']?></td>
                                   <td style="border-top:0px solid ; color: black;  text-align:right; padding-right:10px;"><?php echo $result['total_taka']?></td>
                                   <td style=" border-top:0px solid;  color: black; text-align:right; padding-right:10px;"><?php echo $result['cash_recevd']?></td>
                                   <td style="border-top:0px solid ;  color: black; text-align:right; padding-right:10px;"><?php echo"-".$result['current_due']?></td>
                               </tr>
                               <!-- <tr>
                                   <td style=" border-top:0px solid ;"> &nbsp;</td>
                                   <td style=" border-top:0px solid ;"> </td>
                                   <td style=" border-top:0px solid ;"> </td>
                                   <td style=" border-top:0px solid ;"> </td>
                             </tr> -->
                             <?php } ?>
                           </tbody>
                           <tfoot>
                           <tr>
                              <td colspan="3" style="border:1px solid black;"><b>Total  &nbsp;</b></td>
                               <td  style="border:1px solid black; text-align:right; padding-right:10px;">
                               <?php 
                                        $select = "SELECT SUM(delvry_ctn) AS sum  FROM tbl_payment WHERE cmr_p_id='$get_user_id'";
                                      $run =mysqli_query($con,$select);
                                
                                      while($result = mysqli_fetch_assoc($run)){
                                        $sum = $result['sum'];
                                        echo "<span style='font-size:20px'>$sum </span>";
                                      }
                                   ?>   
                           </td> 
                               <td  style="border:1px solid black;  text-align:right; padding-right:10px;">
                               <?php 
                                        $select = "SELECT SUM(total_g_w) AS sum  FROM tbl_payment WHERE cmr_p_id='$get_user_id'";
                                      $run =mysqli_query($con,$select);
                                
                                      while($result = mysqli_fetch_assoc($run)){
                                        $sum = $result['sum'];
                                        echo "<span style='font-size:20px'>$sum </span>";
                                      }
                                   ?>  
                               
                                 </td>
                               <td style="border:1px solid black; text-align:right; padding-right:10px;">
                              <?php 
                            $select = "SELECT SUM(total_taka) AS sum  FROM tbl_payment WHERE cmr_p_id='$get_user_id'";
                           $run =mysqli_query($con,$select);
                     
                           while($result = mysqli_fetch_assoc($run)){
                            $sum = $result['sum'];
                            echo "<span style='font-size:20px'>$sum </span>";
                           }
                           ?> 
                            </td>
                            <td style="border:1px solid black;text-align:right; padding-right:10px;"> 
                            <?php 
                           $select = "SELECT SUM(cash_recevd) AS sum  FROM tbl_pay_invoice WHERE cmr_p_id='$get_user_id'";
                              $run =mysqli_query($con,$select);
                              while($result = mysqli_fetch_assoc($run)){
                              $sum = $result['sum'];
                              echo "<span style='font-size:20px'>$sum</span>";
                              }
                            ?>
                          
                          </td><td style=" border:1px solid black; text-align:right; padding-right:10px;"> 
                          <?php 
                           $select = "SELECT SUM(current_due) AS sum  FROM tbl_payment WHERE cmr_p_id='$get_user_id'";
                              $run =mysqli_query($con,$select);
                              while($result = mysqli_fetch_assoc($run)){
                                $sum = $result['sum'];
                               echo "<span style='font-size:20px'>-$sum</span>";
                              }
                              ?>
                        
                        </td>
                          </tr>
                       </tfoot>
                  </table>
               </div>
           </div> <!--  main div -->
                    <!-- <div class="div py-2 d-flex justify-content-end">
                    <button id="print" class="btn btn-success"><i class="fas fa-print"></i> Print</button>
                    </div> -->
                   
                </div>
                
            </div>
 
        </div>
      </div>
           <!-- =============================lager print code ==========================================          -->
      </div>
    </div>
  </div>
</div>



   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                 <div class="row">
                   <div class="col-lg-4 col-md-4">
                   <h3 class="card-title"> Customer Name :  &nbsp;<strong>
                        <?php 
                          $get_user_id = $_GET['trede_usr_id'];
                          $_SESSION['trede_usr_id'] ="$get_user_id";
                          $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$get_user_id'";
                          $run = mysqli_query($con,$select);
                          while($result= mysqli_fetch_array($run)){
                             echo $result['cmr_name'];
                           } ?></strong>
                        </h3>
                   </div>
                   <div class="col-lg-8 col-md-8">
            
                   <form action="" method="POST">
                     <div class="row">
                         <div class="col-lg-3"><input type="date" name="form_date" class="form-control "></div>
                         <div class="col-lg-1 text-center">To</div>
                         <div class="col-lg-3"><input type="date" name="to_date" class="form-control "></div>
                         <div class="col-lg-1"><button class="btn btn-outline-success" name="search_all">Search</button></div>
                         </form>
                         <div class="col-lg-4 text-right">
                            <button type="button" id="print" class="btn btn-success ml-5"><i class="fas fa-print"></i> Lager</button>
                         </div>
                     </div>
                    
                      <!-- <strong>Total Sale = 
                        <?php 
                        $select = "SELECT SUM(total_taka) AS sum  FROM tbl_payment WHERE cmr_p_id='$get_user_id'";
                           $run =mysqli_query($con,$select);
                     
                           while($result = mysqli_fetch_assoc($run)){
                            $sum = $result['sum'];
                            echo "<span style='font-size:20px'>$sum </span>";
                           }
                           ?>   &nbsp; &nbsp;<label style="color:#74b9ff;"> Total Paid = 
                           <?php 
                           $select = "SELECT SUM(cash_recevd) AS sum  FROM tbl_pay_invoice WHERE cmr_p_id='$get_user_id'";
                              $run =mysqli_query($con,$select);
                              while($result = mysqli_fetch_assoc($run)){
                              $sum = $result['sum'];
                              echo "<span style='font-size:20px'>$sum</span>";
                              }
                              ?> </label> &nbsp; &nbsp; <label class="text-danger">Total Due = (
                         <?php 
                           $select = "SELECT SUM(current_due) AS sum  FROM tbl_payment WHERE cmr_p_id='$get_user_id'";
                              $run =mysqli_query($con,$select);
                              while($result = mysqli_fetch_assoc($run)){
                                $sum = $result['sum'];
                               echo "<span style='font-size:20px'>$sum</span>";
                              }
                              ?> )
                            </label> 
                          </strong> -->
               
            
               
                 </div>
               
               </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php 
                    if(isset($_POST['search_all'])){
                    $form_date = $_POST['form_date'];
                    $to_date = $_POST['to_date'];
                 $get_user_id;
                  
                  ?>
               <div class="row">
                      <div class="col-lg-12">
                        <div class="row border container_print2 ">
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
                                                 <th style="width:16%;text-align:center" >Transaction</th>
                                                <th style="width:16%;text-align:center" >Total Amount</th>
                                                <th style="width:16%;text-align:center" >Payment Amount</th>
                                                <th style="width:10%;text-align:center" >Due Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                  <?php
                                  $count = 1;
                                    $selct_amont = "SELECT *  FROM tbl_payment WHERE date  BETWEEN '$form_date' AND '$to_date' AND cmr_p_id='$get_user_id' ";
                                    $run = mysqli_query($con,$selct_amont);
                                    if($run){
                                    while($result = mysqli_fetch_array($run)){  ?>
                                        <tr>
                                            <td style=" border-top:1px solid  skyblue; padding:10px"><?php echo $count++;?></td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['transtion_id'];?></td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['total_taka'];?> </td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['cash_recevd'];?></td>
                                            <td style=" border-top:1px solid skyblue;"><?php echo $result['current_due'];?></td>
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
                                          $selct_amont = "SELECT SUM(total_taka) AS sum from tbl_payment WHERE date  BETWEEN '$form_date' AND '$to_date' AND cmr_p_id='$get_user_id'";
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
                                    <a href="view_trade_all_details.php?trede_usr_id=1" class="btn btn-secondary ">Back</a>
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
                    <th> Date</th>
                    <th>Transaction</th>
                    <th>Total Amount</th>
                    <th>Payment Amount</th>
                    <th>Due Amount</th>
                    <th>Note</th>
                  </tr>
                  </thead>
                  <tbody>
         
                    <?php
                     $coun = 1;
                      $select = "SELECT * FROM `tbl_payment` WHERE cmr_p_id='$get_user_id'";
                      $run = mysqli_query($con,$select);
                      while($result = mysqli_fetch_array($run)){ ?>
                        <tr>
                            <td><?php echo $coun++;?></td>
                            <td><?php echo $result['date']?></td>
                            <td><?php echo $result['transtion_id'];?></td>
                            <td><?php echo $result['total_taka']?></td>
                            <td><?php echo $result['cash_recevd']?></td>
                            <td class="text-danger">( <?php echo $result['current_due']?> )</td>
                            <td class="text-danger"><?php echo $result['note']?></td>
                            <!-- <td><a href="customer_payment_page.php?trxid=<?php echo $result['transtion_id']?>" class="btn btn-outline-success">Go Payment</a> <a href="invoice_page.php?nastin_id=<?php  echo $result['transtion_id']?>" class="btn btn-primary"> <i class="far fa-eye"></i></a>
                             <?php if( $result['status']==0){ ?> <a href="transtn_edit.php?edit_id=<?php  echo $result['transtion_id']?>" class="btn btn-outline-info "> <i class="fas fa-edit"></i> <?php } ?></a></td> -->
                        </tr>
                      <?php } ?>
                    
                </table>
              </div>
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

<script src="js/jquery.min.js"></script>
      <script src="js/printThis.js"></script>
      <script>
      $('#print').click(function(){
        $('.container_print').printThis({
                  debug: false,               // show the iframe for debugging
                  importCSS: true,            // import parent page css
                  importStyle: false,         // import style tags
                  printContainer: true,       // print outer container/$.selector
                  loadCSS: "http://localhost/project2/css/styles.css",                // path to additional css file - use an array [] for multiple
                  pageTitle: "",              // add title to print page
                  removeInline: false,        // remove inline styles from print elements
                  removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
                  printDelay: 333,            // variable print delay
                  header:"",               // prefix to html
                  footer: null,               // postfix to html
                  base: false,                // preserve the BASE tag or accept a string for the URL
                  formValues: true,           // preserve input/form values
                  canvas: false,              // copy canvas content
                  doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
                  removeScripts: false,       // remove script tags from print content
                  copyTagClasses: false,      // copy classes from the html & body tag
                  beforePrintEvent: null,     // callback function for printEvent in iframe
                  beforePrint: null,          // function called before iframe is filled
                  afterPrint: null            // function called before iframe is removed
        });
      })
      </script>


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
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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

