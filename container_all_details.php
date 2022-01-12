<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">

    <!-- main_conetiner ========================================  invoice =====================-->
    <!-- print_container -->
   <div class="container ">
              <div class="row  d-flex justify-content-center">
                  <div class="col-lg-11">
                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-lg-12 mt-5">
                            <div class="row border container_print2 ">
                                  <div class="main_div_delivery">
                                      <div class="col-lg-12 delivery mt-2">
                                          <span style="background:rgb(66, 95, 255);text-align: center; color: white; font-size: 30px; margin-top: 10px; padding: 5px;"> DELIVERY CHALLAN</span>
                                      </div>
                                      <div class="div-col-12">
                                        <div class="div-col-3">
                                            <div class="image_div"> 
                                        </div>
                                        </div>
                                        <div class="div-col-3">
                                          <div class="office_title">
                                            <strong>Office & Warehouse: </strong>
                                            <p style="padding: 0px; margin: 0px;">18, West Hazipara</p>
                                            <p style="padding: 0px; margin: 0px;">Notun Rasta, Rampura</p>
                                            <p style="padding: 0px; margin: 0px;">Dhaka-1219</p>
                                          </div>
                                        </div>
                                        <div class="div-col-3">
                                          <div class="office_title">
                                          
                                          </div>
                                        </div>
                                    
                                        <div class="div-col-3">
                                          <div class="office_title">
                                            <p style="padding: 0px; margin: 0px;">Phone &nbsp;: +88 02 48317790</p>
                                            <p style="padding: 0px; margin: 0px;">Cell &nbsp; &nbsp; &nbsp;&nbsp; : +88 01711972648 <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; : +88 01911107341</p>
                                            <p style="padding: 0px; margin: 0px;">E-mail &nbsp;: riponlipu78@yahoo.com <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; :  riponlipu78@gmail.com  </p>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="div2-col-12">
                                        <div class="main_content">
                                            <h4>Challan No :  
                                              <?php
                                                 $container_usr_id = $_GET['container_usr_id'];
                                                 $date_no = $_SESSION['serch_date'];
                                               $select_qur = "SELECT * FROM `tbl_payment` WHERE cmr_p_id ='$container_usr_id' AND date ='$date_no' limit 1";
                                              $run = mysqli_query($con,$select_qur);
                                              $chack = mysqli_fetch_row($run);
                                              $last_row = $chack[10];
                                              echo $last_row ;
                                            ?></h4>
                                            <table class="table_1_dellivery">
                                            <tr>
                                                <td style="width: 8%;" >Name:</td>
                                                  <td style=" width: 50%; padding-left: 5px; border-bottom: 2px dotted;" > 
                                                  <?php 
                                                      $last_row = $chack[1];
                                                        $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$last_row'";
                                                        $run = mysqli_query($con,$select);
                                                        while($result= mysqli_fetch_array($run)){
                                                          echo $result['cmr_name'];
                                                        } ?>
                                                
                                                
                                                </td>
                                                  <td style="width: 8%;" >Mobile :</td>
                                                  <td style="width: 37%; padding-left: 5px; border-bottom: 2px dotted;">
                                                  <?php 
                                                      $last_row = $chack[1];
                                                        $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$last_row'";
                                                        $run = mysqli_query($con,$select);
                                                        while($result= mysqli_fetch_array($run)){
                                                          echo $result['cmr_mobile'];
                                                        } ?>
                                                
                                                </td>
                                              </tr>
                                            <tr>
                                              <td style=" width: 8%; padding-top:10px;">Address :</td>
                                              <td style=" width: 50%; padding-left: 5px; border-bottom: 2px dotted;"> 
                                              <?php 
                                                      $last_row = $chack[1];
                                                        $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$last_row'";
                                                        $run = mysqli_query($con,$select);
                                                        while($result= mysqli_fetch_array($run)){
                                                          echo $result['cmr_address'];
                                                        } ?>
                                            </td>
                                              <td style="width: 8%;  padding-left: 5px; border-bottom: 2px dotted;" ></td>
                                              <td style="width: 37%; padding-left: 5px; border-bottom: 2px dotted;"></td>
                                        
                                          </tr>
                                          </table>
                                           <style>
                                              .tble_delevery {
                                               border: 1px solid black;
                                               text-align: center;
                                             }
                                             .tble_delevery th{
                                               border: 1px solid black;
                                             }
                                             .tble_delevery tr td{
                                               border-right: 1px solid black;
                                             }
                                           </style>
                                          <table class="tble_delevery ">
                                                <tr>
                                                    <th style="width:16%;text-align:center" >CARTON</th>
                                                    <th style="width:40%;text-align:center" >Description Of Goods</th>
                                                    <th style="width:10%;text-align:center" >Quantity (KG)</th>
                                                    <th style="width:12%;text-align:center" >Total (KG)</th>
                                                </tr>
                                                <?php 
                                                     
                                                        $select = "SELECT * FROM `tbl_transation_form` 
                                                        INNER JOIN tbl_payment ON tbl_transation_form.transiton_id = tbl_payment.transtion_id
                                                        INNER JOIN tbl_pay_invoice ON tbl_transation_form.transiton_id = tbl_pay_invoice.transtion_id WHERE tbl_payment.cmr_p_id ='$container_usr_id' AND tbl_payment.date ='$date_no' ";
                                                      $run = mysqli_query($con,$select);
                                                      while($result = mysqli_fetch_array($run)){ ?>
                                                        <tr>
                                                          <td style=" border-top:none; color: black;"><?php echo $result['ctn_no'];?></td>
                                                          <td style="  border-top:0px solid ; color: black;"><?php echo $result['goods_name'];?></td>
                                                          <td style=" border-top:0px solid ;  color: black;"><?php echo $result['total_g_w'];?></td>
                                                          <td style=" border-top:0px solid ;  color: black;"><?php echo $result['total_g_w'];?></td>
                                                        </tr>

                                                      <?php }?>
                                            
                                                  <tr>
                                                    <td style=" border-top:none; color: black; height:50px"></td>
                                                    <td style="  border-top:0px solid ; color: black;"></td>
                                                    <td style=" border-top:0px solid ;  color: black;"></td>
                                                    <td style=" border-top:0px solid ;  color: black;"></td>
                                                </tr>
                                                
                                          
                                        </table>
                                        </div>
                                    </div>
                                    <div class="div3-col-12">
                                          <div class="div3-6-2 ">
                                            <strong style="border-top:2px solid; ">&nbsp; &nbsp; Signature of Receiver</strong>
                                          </div>
                                          <div class="div3-6-2 ">
                                            <strong style="border-top:2px solid;">  &nbsp; &nbsp; Issued by</strong>
                                        </div>
                                        <div class="div3-6-2 ">
                                          <strong style="border-top:2px solid; ">   &nbsp; &nbsp;Authorised by</strong>
                                      </div>
                                    </div>
                              </div> <!-- main div end -->
                        </div>
                    </div>

                  </div>
                  <div class="card-footer">
                        <div class="d-flex justify-content-end pt-1">
                             <button class="btn btn-outline-secondary ml-3" id="print2"> <i class="far fa-eye"></i> Delivery Challan</button>
                        </div>
                    </div>
                </div>
                </div>
              </div>
            </div>
      </div>
   
  </div>
  <!-- /.content-wrapper -->

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

<!-- jQuery -->

      <script src="js/printThis.js"></script>
      <script>
      $('#print2').click(function(){
        $('.container_print2').printThis({
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
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->
<!-- fixt savascript -->

<?php
  require_once('footer.php');
?>


  