<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
    <!-- Content Header (Page header) -->

    <!-- main_conetiner ========================================  invoice =====================-->
    <?php

error_reporting(0);
$msg ='<div class="alert bg-success">
         <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
         <strong>Success!</strong> Data Insert Success.
       </div>';
       $msg2 ='<div class="alert bg-danger">
       <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
       <strong>Warning! </strong>This Transition Id Already Exist Try Again....!
       </div>';
      if(isset($_POST['save'])){
         $cmr_p_id       = $_POST['cmr_p_id'];
         $ctn_no         = $_POST['ctn_no'];
         $shipping_mark   = $_POST['shipping_mark'];
         $goods_name       = $_POST['goods_name'];
         $ctn_qty          = $_POST['ctn_qty'];
         $delvry_ctn       = $_POST['delvry_ctn'];
         $total_g_w        = $_POST['total_g_w'];
         $delvry_we        = $_POST['delvry_we'];
         $taka_par_kg      = $_POST['taka_par_kg'];
         $total_taka       = $_POST['total_taka'];
         $taka_delivery    = $_POST['taka_delivery'];
         $cash_recevd      = $_POST['cash_recevd'];
         $paymnt_meth      = $_POST['paymnt_meth'];
         $current_due      = $_POST['current_due'];
         $remaks           = $_POST['remaks'];
         $note             = $_POST['note'];
        $by_china          = $_POST['by_china'];
        $by_ship           = $_POST['by_ship'];
        $by_air            = $_POST['by_air'];
         $today =  date("Y-m-d");
         $payment_Id = rand(1000,9999);
         $transiton_Id = date("Yd").rand(100,9999);

         $_SESSION['transiton_Id ']="$transiton_Id";
         $_SESSION['payment_Id ']="$payment_Id";
         $_SESSION['cmr_p_id ']= "$cmr_p_id";

         $select = "SELECT * FROM tbl_transation_form WHERE cmr_p_id ='$cmr_p_id'  AND taka_par_kg ='$taka_par_kg' AND total_g_w ='$total_g_w' AND ctn_no ='$ctn_no' AND goods_name ='$goods_name' AND delvry_we ='$delvry_we'";
         $run = mysqli_query($con,$select);
         if(mysqli_num_rows($run)>0){
        echo  $msg2;
         }else{
                                 
           $insert = "INSERT INTO tbl_pay_invoice(cmr_p_id,transtion_id,total_taka,taka_delivery,cash_recevd,paymnt_meth,payment_id,new_due,old_current_due,note,date)
           VALUES('$cmr_p_id','$transiton_Id','$total_taka','$taka_delivery','$cash_recevd','$paymnt_meth','$payment_Id','$current_due','0','0','$today')";
           $run = mysqli_query($con,$insert);

           $insert = "INSERT INTO tbl_payment(cmr_p_id,transtion_id,ctn_no,total_taka,taka_delivery,ctn_qty,delvry_we,taka_par_kg,cash_recevd,payment_id,paymnt_meth,current_due,note,date,goods_name,delvry_ctn,total_g_w,shipping_mark,remaks,shipment_type,status,importer)
           VALUES('$cmr_p_id','$transiton_Id','$ctn_no','$total_taka','$taka_delivery','$ctn_qty','$delvry_we','$taka_par_kg','$cash_recevd','$payment_Id','$paymnt_meth','$current_due','$note','$today','$goods_name','$delvry_ctn','$total_g_w','$shipping_mark','$remaks','By Ship','0','$by_china')";
           $run = mysqli_query($con,$insert);

           $insert = "INSERT INTO tbl_transation_form(cmr_p_id,ctn_no,shipping_mark,goods_name,ctn_qty,delvry_ctn,total_g_w,delvry_we,taka_par_kg,remaks,transiton_id,pament_date)
           VALUES('$cmr_p_id','$ctn_no','$shipping_mark','$goods_name','$ctn_qty','$delvry_ctn','$total_g_w','$delvry_we','$taka_par_kg','$remaks','$transiton_Id','$today')";
           $run = mysqli_query($con,$insert);
        if($run){
          echo $msg;
        } else{
         echo "not insert";     
       }
     }
   }  ?>
   <div class="container ">
        <div class="row  d-flex justify-content-center">
        <div class="col-lg-12">
      <div class="card print_container">
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
                                  <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
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
                              <table class="tble_delevery">
                                     <tr>
                                        <th style="width:16%;text-align:center" >CARTON</th>
                                        <th style="width:40%;text-align:center" >Description Of Goods</th>
                                        <th style="width:10%;text-align:center" >Quantity (KG)</th>
                                        <th style="width:12%;text-align:center" >Total (KG)</th>
                                     </tr>
                                     <?php 
                                          $last_row = $chack[2];
                                            $select = "SELECT * FROM `tbl_transation_form` 
                                            INNER JOIN tbl_payment ON tbl_transation_form.transiton_id = tbl_payment.transtion_id
                                            INNER JOIN tbl_pay_invoice ON tbl_transation_form.transiton_id = tbl_pay_invoice.transtion_id WHERE  tbl_transation_form.transiton_id='$last_row'";
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
                                <strong style="border-top:2px solid;  ">  &nbsp; &nbsp; Issued by</strong>
                             </div>
                             <div class="div3-6-2 ">
                              <strong style="border-top:2px solid; ">   &nbsp; &nbsp;Authorised by</strong>
                           </div>
                        </div>
                  </div> <!-- main div end -->
            </div>
        </div>
      </div>
    </div>
    </div>
            </div>
          </div>
    <!-- main_conetiner ========================================  invoice =====================-->
      <!-- ========================================  ptint Ricipt Start code =====================-->
    <!--  -->
    <section class="content print_container">
      <div class="row d-flex justify-content-center mt-4">
        <div class="col-lg-12">
      <div class="card ">
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
              <div class="col-lg-12 mt-5">
                <div class="row border container_print ">
                      <div class="main_div_recipt">
                           <div class="div-col-12_ricipr">
                            <div class="div-col-3ricipt">
                                <div class="image_div"> 
                               
                            </div>
                            </div>
                            <div class="div-col-3ricipt">
                              <div class="office_title">
                                <strong>Office:</strong>
                                  <p style="padding: 0px; margin: 0px;">21, Rajuk Avunue</p>
                                  <p style="padding: 0px; margin: 0px;">BRTC Bhaban (7th Floor)</p>
                                  <p style="padding: 0px; margin: 0px;">Motijheel, Dhaka-1000</p>
                              </div>
                            </div>
                            <div class="div-col-3ricipt">
                              <div class="office_title">
                                <strong>Warehouse: </strong>
                                <p style="padding: 0px; margin: 0px;">18, West Hazipara</p>
                                <p style="padding: 0px; margin: 0px;">Notun Rasta, Rampura</p>
                                <p style="padding: 0px; margin: 0px;">Dhaka-1219</p>
                              </div>
                            </div>
                            <div class="div-col-3ricipt">
                              <div class="office_title">
                                <p style="padding: 0px; margin: 0px;">Phone &nbsp;: +88 02 48317790</p>
                                <p style="padding: 0px; margin: 0px;">Cell &nbsp; &nbsp; &nbsp;&nbsp; : +88 01711972648 <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; : +88 01911107341</p>
                                <p style="padding: 0px; margin: 0px;">E-mail &nbsp;: riponlipu78@yahoo.com <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; :  riponlipu78@gmail.com  </p>
                              </div>
                            </div>
                        </div>
                        <div class="div-col-12_ricipr">
                          <div class="div-col-3ricipt">
                            <div class="">
                              <h4 style="padding: 0; margin: 0;">Payment id: <strong>

                              <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[11];
                                    echo $last_row ;
                                    ?>

                              </strong> </h4>
                            </div>
                          </div>
                          <div class="div-col-3ricipt">
                              <h4 style="padding: 0; margin:0; text-align:center; border:1px solid black; font-size:30px; ">Money Receipt </h4>
                          </div>
                          <div class="div-col-3ricipt">
                            <div class="">
                          
                            </div>
                          </div>
                          <div class="div-col-3ricipt">
                              <h4 style="padding: 0; margin: 0;"> Date :
                              <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[10];
                                    echo $last_row ;
                                    ?>
                            </h4>
                          </div>
                        </div>
                        <div class="div2-col-12_second">
                            <div class="main_content">
                                <table class="table_1_recipt">
                                 <tr>
                                      <td style="width: 19%; padding-left: 5px;  ">Received with thanks from :</td>
                                      <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;"> 
                                       <?php 
                                           $last_row = $chack[1];
                                          $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$last_row'";
                                          $run = mysqli_query($con,$select);
                                          while($result= mysqli_fetch_array($run)){
                                            echo $result['cmr_name'];
                                          } ?></td>
                                      <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                      <td style="width: 13%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                      <td style="width: 10%; padding-left: 5px; border-bottom: 2px dotted;"></td>
                                      <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  </tr>
                                 <tr>
                                  <td style="width: 18%; padding-top:10px;">A sum Of Taka(in Words) :</td>
                                  <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;"> 
                                    <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[5];
                                    // echo $last_row ;
                                    ?>
                                   </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 13%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%; padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                              </tr>
                                <tr>
                                  <td style="width: 20%; padding-top:10px ;">By Cash/ Mobile Money/ Others :</td>
                                  <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;">
                                  <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[7];
                                    echo $last_row ;
                                    ?>
                                </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 13%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; text-align: center;"> Date :
                                </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;">
                                  <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[10];
                                    echo $last_row ;
                                    ?>
                                </td>
                                </tr>
                                <tr>
                                  <td style="width: 20%; padding-top:10px ;">Bank, Branch/ Others Method:</td>
                                  <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;">
                                  
                                  <?php $select_qur = "SELECT * FROM tbl_payment  ORDER BY id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $weight_row = $chack[11];
                                    echo $weight_row;
                                    ?>
                                
                                </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted; ">  </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                </tr>
                                <tr>
                                  <td style="width: 20%;  padding-top:10px ;"> Against:</td>
                                  <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;" colspan="4">
                                  <?php $select_qur = "SELECT * FROM tbl_transation_form  ORDER BY id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[2];
                                    $goods_row = $chack[5];
                                    $weight_row = $chack[8];
                                    $pekg_row = $chack[10];
                                    echo "TID- ".$last_row .", ".$goods_row.", Weight- ".$weight_row .", P.Kg- ".$pekg_row;
                                    ?>
                                </td>
                                  <!-- <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 13%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted; ">  </td> -->
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                </tr>
                              </table>
                            </div>
                        </div>
                        <div class="div3-col-12_third">
                              <div class="div3-6_third" >
                                <h2>Tk <strong style="border:2px dotted; padding-right: 100px;">
                                <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[5];
                                    echo " ".$last_row ;
                                    ?>
                              
                              </strong></h2>
                              </div>
                              <div class="div3-6_third margin_but">
                                 <strong style="border-top:2px solid; padding-right: 60px; margin-right: 100px; "> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Authorised Signature</strong>
                              </div>
                        </div>
                      </div> <!-- main div end -->
                    <!-- <div class="div py-2 d-flex justify-content-end">
                        <button id="print" class="btn btn-success"><i class="fas fa-print"></i> Print</button>
                </div> -->
                  
            </div>
 
        </div>
      </div>
    </div>
    </div>

  </section>

 <section class="content">
<div class="card">
  <style>
    table{
      width: 100%;
      height: 68vh;
      overflow-x: hidden;
      overflow: scroll;

    }
    table tr th,tr td{
       border: 1px solid gainsboro;
    }
    .form_size{
      width: 200px;
      border: 1px solid gray;
      padding: .46875rem .75rem;
      height: calc(2.25rem + 2px);
    }
    td{
     height:40px; font-size:20px;
    }
    
    
  </style>
  <div class="card-body" style="padding: 0px;">
   <h4 style="color:white; text-align:center; background-color: #1abc9c; padding:2px; font-weight:400;">Trade from ship</h4>
    <form action="" method="POST">
 
     <table class=" table-responsive border ">
     <tr>
          <th>Customer Name</th>
           <th>CTN No</th>
           <th>Shipping Mark</th>
           <th>Goods Name</th>
           <th>Cartoon qty</th>
           <th>Delivary Ctn</th>
           <th>Delivary Weight</th>
           <th>Total Gross Weight</th>
           <th>Taka Per Kg</th>
           <th>Total Taka</th>
           <th>Tk. as delivery</th>
           <th>Cash Recived</th>
           <th>Current Due</th>
           <th>Payment method</th>
           <th>Payment Note</th>
           <th>Remarks</th>
         </tr>
      
         <tr>
            <td>
                <select id='selUser' class="form_size" name="cmr_p_id">
                    <option value='<?php echo  @$cmr_p_id;?>'><?php echo  @$cmr_p_id;?></option> 
              <?php
                  $select = "SELECT * FROM tbl_customer";
                  $run = mysqli_query($con,$select);
                  while($result = mysqli_fetch_array($run)){ ?>
                  <option value='<?php  echo $result['cmr_p_id']; ?>'><?php echo $result['cmr_name'];?></option> 
                  <?php } ?>
            </select> 
          </td>
          <input type="hidden" name="by_ship" value="0">
           <td>
             <input type="text" class="form_size" name="ctn_no" value="<?php echo $ctn_no ; ?>" id="exampleInputPassword1"  >
           </td>
           <td>
             <input type="text" class="form_size" name="shipping_mark" value="<?php echo $shipping_mark; ?>" id="exampleInputEmail1" >
           </td>
           <td>
             <input type="text" class="form_size" name="goods_name"    value="<?php echo $goods_name; ?>"  >
           </td>
           <td>
            <input type="text" class="form_size" name="ctn_qty" value="<?php echo $ctn_qty; ?>" id="exampleInputEmail1"   >
           </td>
           <td>
            <input type="text" class="form_size"  name="delvry_ctn" value="<?php echo $delvry_ctn; ?>" id="exampleInputPassword1"  >
           </td>
           <td>
             <input type="text" class="form_size" id="delvry_we" name="delvry_we" value="<?php echo $delvry_we; ?>"  >
           </td>
           <td>
              <input type="text" class="form_size" name="total_g_w" id="total_gro_w"  value="<?php echo $total_g_w; ?>" >
           </td>
           
           <td>
             <input type="text" class="form_size" name="taka_par_kg" value="<?php echo $taka_par_kg; ?>"  id="per_kg" id="exampleInputPassword1"  >
           </td>
           <td>
             <input type="text" class="form_size" name="total_taka" id="total" value="<?php echo $total_taka; ?>" readonly id="exampleInputPassword1"  >
           </td>
           <td>
             <input type="text" class="form_size" name="taka_delivery" id="total_delivery" value="<?php echo $taka_delivery; ?>" readonly  >
           </td>
           <td>
             <input type="text" class="form_size" name="cash_recevd"  value="<?php echo $cash_recevd; ?>"  id="cash_rec"  >
           </td>
           <td>
            <input type="text" class="form_size" class=" text-danger"  value="<?php echo $current_due; ?>"  name="current_due" id="current_amnt" readonly id="exampleInputPassword1">
           </td>
           <td>
              <select class="form_size" name="paymnt_meth" aria-label="Default select example">
                <option value="Cash" selected>Cash</option>
                <option value="Mobile Banking">Mobile Banking</option>
                <option value="Check">Check</option>
                <option value="Bank">Bank</option>
                <option value="Others">Others</option>
              </select>
           </td>
           <td>
             <textarea name="note"  class="form_size" cols="20" rows="1"><?php echo $note; ?></textarea>
           </td>
           <td>
             <textarea name="remaks"  class="form_size" cols="20" rows="1"><?php echo $remaks; ?></textarea>
           </td>
         </tr>
         <?php
            $count = 1;
            $select = "SELECT * FROM `tbl_customer`
                    INNER JOIN tbl_payment ON tbl_customer.cmr_p_id = tbl_payment.cmr_p_id
                    WHERE shipment_type='By Ship' AND importer=''  ORDER BY `tbl_payment`.`id` DESC";
                $run = mysqli_query($con,$select);
                while($result= mysqli_fetch_array($run)){ ?>
                  <tr>
                   <td><?php echo $result['cmr_name'];?></td>
                    <td><?php echo $result['ctn_no'];?></td>
                    <td><?php echo $result['shipping_mark'];?></td>
                    <td><?php echo $result['goods_name'];?></td>
                    <td><?php echo $result['ctn_qty'];?></td>
                    <td><?php echo $result['delvry_ctn'];?></td>
                    <td><?php echo $result['delvry_we'];?></td>
                    <td><?php echo $result['total_g_w'];?></td>
                    <td><?php echo $result['delvry_we'];?></td>
                    <td><?php echo $result['taka_par_kg'];?></td>
                    <td><?php echo $result['total_taka'];?></td>
                    <td><?php echo $result['taka_delivery'];?></td>
                    <td><?php echo $result['cash_recevd'];?></td>
                    <td><?php echo $result['current_due'];?></td>
                    <td><?php echo $result['paymnt_meth'];?></td>
                    <td><?php echo $result['note'];?></td>
                    <td><?php echo $result['remaks'];?></td>
                  </tr>
            <?php }?>
     </table>
  
  </div>
  <div class="card-footer">
  <div class="d-flex justify-content-end pt-1">
          <button class="btn btn-outline-success" name="save">Save</button>
         </form>
         <button class="btn btn-outline-secondary ml-3" id="print2"> <i class="far fa-eye"></i> Delivery Challan</button>
          <button class="btn btn-outline-warning ml-3" id="print">Receipt</button>
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


<!-- live search -->
       <!-- Script -->
       <script>
        $(document).ready(function(){
            
            // Initialize select2
            $("#selUser").select2();

            // Read selected option
            $('#but_read').click(function(){
                var username = $('#selUser option:selected').text();
                var userid = $('#selUser').val();
           
                $('#result').html("id : " + userid + ", name : " + username);
            });
        });
        </script>


<!-- live calculate -->
<script>
		$(document).ready(function(){
    	// Get value on keyup funtion
    	$("#total_gro_w, #per_kg,#cash_rec,#delvry_we").keyup(function(){

        var total=0;

        var current_amnt=0;
        var x = Number($("#total_gro_w").val());
        var y = Number($("#per_kg").val());
        var total=x * y;
        $('#total').val(total);

        var total_delivery = 0;
        var a = Number($("#delvry_we").val());
        var b = Number($("#per_kg").val());
        var total_delivery = a * b;
        $('#total_delivery').val(total_delivery);

        var t_taka = Number($("#total").val());
        var cash_rec = Number($("#cash_rec").val());
        var current_amnt = t_taka - cash_rec;
        $('#current_amnt').val(current_amnt);

    });
});
</script>
<!-- live calculate -->

<!-- jQuery -->

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


  