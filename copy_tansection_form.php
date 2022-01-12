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
            <h4 class="m-0">Transaction Form</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Transaction Form</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- main_conetiner -->
    <section class="print">
      <?php 
            if(isset($_POST['btn_preview'])){
             $_SESSION['cmr_p_id']  = $cmr_p_id       = $_POST['cmr_p_id'];
             $_SESSION['ctn_no'] = $ctn_no         = $_POST['ctn_no'];
             $_SESSION['shipping_mark'] =  $shipping_mark   = $_POST['shipping_mark'];
             $_SESSION['goods_name'] = $goods_name       = $_POST['goods_name'];
             $_SESSION['ctn_qty'] = $ctn_qty          = $_POST['ctn_qty'];
             $_SESSION['delvry_ctn'] =  $delvry_ctn       = $_POST['delvry_ctn'];
             $_SESSION['total_g_w'] =  $total_g_w        = $_POST['total_g_w'];
             $_SESSION['delvry_we'] =  $delvry_we        = $_POST['delvry_we'];
             $_SESSION['taka_par_kg'] =  $taka_par_kg      = $_POST['taka_par_kg'];
             $_SESSION['total_taka'] =  $total_taka       = $_POST['total_taka'];
             $_SESSION['cash_recevd'] =   $cash_recevd      = $_POST['cash_recevd'];
             $_SESSION['paymnt_meth'] =  $paymnt_meth      = $_POST['paymnt_meth'];
             $_SESSION['current_due'] =  $current_due      = $_POST['current_due'];
             $_SESSION['remaks'] =   $remaks           = $_POST['remaks'];
             $_SESSION['note'] =  $note           = $_POST['note'];
             $_SESSION['today'] =  $today = date("Y/m/d");
             $_SESSION['payment_Id'] =  $payment_Id = rand(1000,9999);
             $_SESSION['transiton_Id'] =  $transiton_Id = date("Yd").rand(100,9999);
     
            ?>

<section class="content ">
      <div class="row d-flex justify-content-center mt-4">
        <div class="col-lg-12">
      <div class="card ">
        <div class="card-header">
          <h3 class="card-title">Add New Customer</h3>
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
                      <div class="main_div">
                           <div class="div-col-12">
                            <div class="div-col-3">
                                <div class="image_div"> 
                            </div>
                            </div>
                            <div class="div-col-3">
                              <div class="office_title">
                                <strong>Office:</strong>
                                  <p style="padding: 0px; margin: 0px;">21, Rajuk Avunue</p>
                                  <p style="padding: 0px; margin: 0px;">BRTC Bhaban (7th Floor)</p>
                                  <p style="padding: 0px; margin: 0px;">Motijheel, Dhaka-1000</p>
                              </div>
                            </div>
                            <div class="div-col-3">
                              <div class="office_title">
                                <strong>Warehouse: </strong>
                                <p style="padding: 0px; margin: 0px;">18, West Hazipara</p>
                                <p style="padding: 0px; margin: 0px;">Notun Rasta, Rampura</p>
                                <p style="padding: 0px; margin: 0px;">Dhaka-1219</p>
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
                        <div class="div-col-12">
                          <div class="div-col-3">
                            <div class="">
                              <h4 style="padding: 0; margin: 0;">Payment id: <strong>

                              <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY cmr_p_id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[10];
                                    echo $last_row ;
                                    ?>

                              </strong> </h4>
                            </div>
                          </div>
                          <div class="div-col-3">
                            <div class=" text-center">
                             <h4 style="padding: 0; margin: 0;">Money Receipt </h4>
                            </div>
                          </div>
                          <div class="div-col-3">
                            <div class="">
                             
                            </div>
                          </div>
                          <div class="div-col-3">
                            <div class=" text-center">
                              <h4 style="padding: 0; margin: 0;"> Date :
                             
                              <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY cmr_p_id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[9];
                                    echo $last_row ;
                                    ?>
                        
                            
                            </h4>
                            </div>
                          </div>
                        </div>
                        <div class="div2-col-12">
                            <div class="main_content">
                                <table class="table_1">
                                 <tr>
                                      <td style="width: 18%; padding-left: 5px; ">Received with thanks from :</td>
                                      <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;"> 
                                       <?php 
                                           $get_user_id =  $_SESSION['cmr_p_id'];
                                          $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$get_user_id'";
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
                                    <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY cmr_p_id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[5];
                                    echo $last_row ;
                                    ?>

                                
                                   </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 13%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%; padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                              </tr>
                                <tr>
                                  <td style="width: 20%; padding-top:10px ;">By Cash / Cheque / Pay Order :</td>
                                  <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;">
                                  <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY cmr_p_id DESC LIMIT 1";
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
                                  <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY cmr_p_id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[9];
                                    echo $last_row ;
                                    ?>
                                </td>
                                </tr>
                                <tr>
                                  <td style="width: 20%; padding-top:10px ; ">Bank :</td>
                                  <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 13%;  padding-left: 5px; text-align: center;"> Branch :</td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted; ">  </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                </tr>
                                <tr>
                                  <td style="width: 20%;  padding-top:10px ;"> Against:</td>
                                  <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;">
                                  <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY cmr_p_id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[3];
                                    echo $last_row ;
                                    ?>
                                </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 13%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted; ">  </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                </tr>
                              </table>
                            </div>
                        </div>
                        <div class="div3-col-12">
                              <div class="div3-6" >
                                <h2>Tk <strong style="border:2px dotted; padding-right: 100px;">
                                <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY cmr_p_id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[5];
                                    echo $last_row ;
                                    ?>
                              
                              </strong></h2>
                              </div>
                              <div class="div3-6-2 ">
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

          <div class="container">
              <div class="row">
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
                            <div class="row border container_print ">
                                <div class="col-lg-8 container_print9 mt-4 py-3">
                                  <h5 style="color: #2980b9; font-weight:700;">Company<span>Name</span></h5>
                                    <span>8 Boston Lofts, Sweyne Avenue,<br> Southend on Sea, SS2 6FR, UK</span> 
                                    <br>
                                    <label>info@geoplusconsultancy.com</label>
                                    <br>
                                    <label>+44 7903 206123</label>
                                </div>
                                <div class="col-lg-4 container_print3 mt-4 py-3">
                                  <h5 style="padding-left:60px;">INVOICE</h5>
                                  <div class="row">
                                        <table style="margin-left:48px;  border-collapse: collapse;">
                                        <tr>
                                            <td style="border:0px solid skyblue; text-align: right;">Tread Id:</td>
                                            <td style="width: 20px;"></td>
                                            <td style=" border:1px solid skyblue;padding-left:10px; padding-right:10px;"><?php echo  $transiton_Id;?></td>
                                          </tr>
                                          <tr>
                                            <td style="border:0px solid skyblue; text-align: right;">Payment Id:</td>
                                            <td style="width: 20px;"></td>
                                            <td style=" border:1px solid skyblue;padding-left:10px; padding-right:10px;"><?php echo $payment_Id;?></td>
                                          </tr>
                                       
                                          <tr>
                                            <td style="border:0px solid; text-align: right; ">Date :</td>
                                            <td style="width: 20px;"></td>
                                            <td style=" background-color: royalblue; border:1px solid skyblue;padding-left:10px; padding-right:10px;"><?php echo  $today;?></td>
                                          </tr>
                                        </table>
                                    </div>
                                </div> 
                         
                                <div class="col-lg-6">
                                  <div class="w-50 bilto" style="background-color: royalblue;">
                                     <p>Bill To</p>
                                  </div>
                                  <label>Mr/Ms. <?php 
                                  $select ="SELECT * FROM  `tbl_customer` WHERE `cmr_p_id`='$cmr_p_id'";
                                  $run = mysqli_query($con,$select);
                                  while($result = mysqli_fetch_array($run)){
                                 echo $result['cmr_name']."<br>";
                              
                                  echo $result['company_name']." <br>";
                                  echo $result['cmr_address']." <br>";
                                  echo $result['cmr_mobile']." <br>";
                                  }
                                  ?>
                                  
                                 
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
                                              <tr>
                                              <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black;  "><?php echo  $goods_name; ?></td>
                                              <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black; text-align:center"><?php echo  $delvry_ctn; ?></td>
                                              <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black;text-align:center"><?php echo  $ctn_qty ?></td>
                                              <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black;text-align:center"><?php echo  $total_g_w ?></td>
                                              <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black; text-align:center"><?php echo  $delvry_we ?></td>
                                              <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black; text-align:center"><?php echo  $taka_par_kg ?></td>
                                              <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black; text-align:center"><?php echo  $total_taka ?></td>
                                              <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black; text-align:center"><?php echo  $cash_recevd ?></td>
                                               <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black;text-align:center"><?php echo  $current_due ?></td>
                                              
                                            </tr>
                                              <tr>
                                              <td style=" border-top:0px solid ; padding:10px"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                              
                                          </tr>
                                              <tr>
                                              <td style="background-color: rgb(229, 231, 236);    border-top:0px solid ; color: black;  padding:10px"></td>
                                                <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ; color: black;"></td>
                                                <td style="background-color: rgb(229, 231, 236); border-top:0px solid ;  color: black;"></td>
                                                <td style="background-color: rgb(229, 231, 236); border-top:0px solid ;  color: black;"></td>
                                                <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ; color: black;"></td>
                                                <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ; color: black;"></td>
                                                <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ; color: black;"></td>
                                                <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ; color: black;"></td>
                                                <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ; color: black;"></td>
                                             </tr>
                                          <tr>
                                                <td style=" border-top:0px solid ; padding:10px"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                                <td style=" border-top:0px solid ;"></td>
                                         </tr>
                                        
                                          <tr>
                                              <td style="background-color: rgb(229, 231, 236);color: black;  padding:10px"></td>
                                              <td style="background-color: rgb(229, 231, 236);  color: black;"></td>
                                              <td style="background-color: rgb(229, 231, 236);color: black;"></td>
                                              <td style="background-color: rgb(229, 231, 236);  color: black;"></td>
                                              <td style="background-color: rgb(229, 231, 236); color: black;"></td>
                                              <td style="background-color: rgb(229, 231, 236); color: black;"></td>
                                              <td style="background-color: rgb(229, 231, 236);  color: black;"></td>
                                              <td style="background-color: rgb(229, 231, 236);  color: black;"></td>
                                              <td style="background-color: rgb(229, 231, 236); color: black;"></td>
                                        </tr>
                                        <tr>
                                                <td style=" border-bottom: 2px solid skyblue; ; padding:10px"></td>
                                                <td style="  border-bottom: 2px solid skyblue;"></td>
                                                <td style=" border-bottom: 2px solid skyblue;"></td>
                                                <td style="  border-bottom: 2px solid skyblue;"></td>
                                                <td style="  border-bottom: 2px solid skyblue;"></td>
                                                <td style="  border-bottom: 2px solid skyblue;"></td>
                                                <td style="  border-bottom: 2px solid skyblue;"></td>
                                                <td style="  border-bottom: 2px solid skyblue;"></td>
                                                <td style="  border-bottom: 2px solid skyblue;"></td>
                                          </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                          <td class="border-0"></td>  <td></td> <td></td>  <td></td> <td></td>   <td class="border-0"></td> <td class="border-0"></td><td style="text-align:right; border:0px solid skyblue"><b>Total  &nbsp;</b></td><td style="text-align:center; border:0px solid skyblue; "> <b> 100</b></td>
                                        </tr>
                                        <tr>
                                        <td></td> <td></td>   <td></td> <td></td>  <td></td> <td></td> <td class="border-0"></td><td style="text-align:right; border:0px solid skyblue;">Received  &nbsp;</td><td style="text-align:center; border:1px solid skyblue;"> 200  </td>
                                        </tr>
                                        <tr>
                                        <td></td> <td></td>   <td></td> <td></td>  <td></td> <td></td><td class="border-0"></td><td style="text-align:right;  border:0px solid skyblue">Due  &nbsp;</td><td style="text-align:center; border:0px solid skyblue;">100 </td>
                                        </tr>
                                        <tr>
                                        <td></td> <td></td>   <td></td> <td></td>  <td></td> <td></td><td class="border-0"></td><td style="text-align:right;  border-bottom:2px solid skyblue;"><b>Net Payable  &nbsp;</b></td><td style="text-align:center; border-bottom:2px solid skyblue;"><b>5000 </b></td>
                                        </tr>
                                        <tr>
                                          <!-- faka row -->
                                          <td></td> <td></td>   <td></td> <td></td>  <td></td> <td></td> <td class="border-0"></td><td style="text-align:right"><b></b></td><td></td>
                                      </tr>
                                        <tr>
                                        <td></td> <td></td>   <td></td> <td></td>  <td></td> <td></td><td class="border-0"></td><td style="text-align:right; border:0px solid skyblue"><b>Total  &nbsp;</b></td><td style="text-align:center; background-color: royalblue; border: 1px solid; margin: 10px; "> <b>5000 </b></td>
                                      </tr>
                                        <tr>
                                          <td colspan="3" style="border: 2px solid skyblue; height:100px">
                                                <div class="header" style="Background:skyblue" >
                                                  <strong>Remarks</strong>
                                                </div>
                                                <div class="body_remarks" style="height:100px">
                                                  <p> </p>
                                                </div>
                                          </td>
                                        </tr>
                                    </tfoot>
                                    </table>
                                    
                                </div>
                              
                                <div class="col-lg-12 d-flex justify-content-end py-2">
                                   <form action="" method="POST">
                                      <button id="save" class="btn btn-outline-success" name="save">Save</button>
                                    </form>
                                    <button id="print" class="btn btn-success ml-3"><i class="fas fa-print"></i> Print</button>
                                </div>
                               
                            </div>
                       
                        </div>

                    </div>
                  </div>
                </div>
            </div>
          </div>
      <?php } ?>
    </section>
 <section class="content">
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
          $cmr_p_id       = $_SESSION['cmr_p_id'];
          $ctn_no         = $_SESSION['ctn_no'];
          $shipping_mark   = $_SESSION['shipping_mark'];
          $goods_name       = $_SESSION['goods_name'];
          $ctn_qty          = $_SESSION['ctn_qty'];
          $delvry_ctn       = $_SESSION['delvry_ctn'];
          $total_g_w        = $_SESSION['total_g_w'];
          $delvry_we        = $_SESSION['delvry_we'];
          $taka_par_kg      = $_SESSION['taka_par_kg'];
          $total_taka       = $_SESSION['total_taka'];
          $cash_recevd      = $_SESSION['cash_recevd'];
          $paymnt_meth      = $_SESSION['paymnt_meth'];
          $current_due      = $_SESSION['current_due'];
          $remaks           = $_SESSION['remaks'];
          $note           = $_SESSION['note'];
          $today =  $_SESSION['today'];
          $payment_Id =  $_SESSION['payment_Id'];
          $transiton_Id =$_SESSION['transiton_Id'];

          $select = "SELECT * FROM tbl_transation_form WHERE transiton_id ='$transiton_Id'";
          $run = mysqli_query($con,$select);
          if(mysqli_num_rows($run)>0){
         echo  $msg2;
          }else{
                                  
            $insert = "INSERT INTO tbl_pay_invoice(cmr_p_id,transtion_id,total_taka,cash_recevd,paymnt_meth,payment_id,new_due,old_current_due,note,date)
            VALUES('$cmr_p_id','$transiton_Id','$total_taka','$cash_recevd','$paymnt_meth','$payment_Id','$current_due','0','0','$today')";
            $run = mysqli_query($con,$insert);

            $insert = "INSERT INTO tbl_payment(cmr_p_id,transtion_id,total_taka,cash_recevd,payment_id,paymnt_meth,current_due,note,date)
            VALUES('$cmr_p_id','$transiton_Id','$total_taka','$cash_recevd','$payment_Id','$paymnt_meth','$current_due','$note','$today')";
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
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Transaction Form</h3>
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
    <form action="" method="POST">
      <div class="row">
         <div class="col-lg-3">
          <label for="exampleInputPassword1">Customer Name</label>
          <select id='selUser' name="cmr_p_id" class=" form-control py-5">
          <option value='<?php echo  @$cmr_p_id;?>'>Select Customer</option> 
            <?php
                $select = "SELECT * FROM tbl_customer";
                $run = mysqli_query($con,$select);
                while($result = mysqli_fetch_array($run)){ ?>
                <option value='<?php  echo $result['cmr_p_id']; ?>'><?php echo $result['cmr_name'];?></option> 
               <?php } ?>
             
        </select>   
         </div>
         <div class="col-lg-1">
          <div class="form-group">
              <label for="exampleInputPassword1">CTN No</label>
              <input type="text" name="ctn_no" class="form-control" value="<?php echo $ctn_no ; ?>" id="exampleInputPassword1"  >
          </div>
         </div>
         <div class="col-lg-2">
          <div class="form-group">
              <label for="exampleInputEmail1">Shipping Mark</label>
              <input type="text" name="shipping_mark" class="form-control" value="<?php echo $shipping_mark; ?>" id="exampleInputEmail1" >
          </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Goods Name</label>
          <input type="text" name="goods_name" class="form-control"  value="<?php echo $goods_name; ?>"id="exampleInputPassword1"  >
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputEmail1">Cartoon qty</label>
          <input type="text" name="ctn_qty" class="form-control" value="<?php echo $ctn_qty; ?>" id="exampleInputEmail1"   >
      </div>
 </div>
 <div class="col-lg-2">
  <div class="form-group">
      <label for="exampleInputPassword1">Delivary Ctn</label>
      <input type="text" class="form-control" name="delvry_ctn" value="<?php echo $delvry_ctn; ?>" id="exampleInputPassword1"  >
  </div>
 </div>
 <div class="col-lg-2">
  <div class="form-group">
      <label for="exampleInputEmail1">Total Gross Weight</label>
      <input type="text" class="form-control" name="total_g_w" id="total_gro_w"  value="<?php echo $total_g_w; ?>" >
  </div>
</div>
  <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Delivary Weight</label>
          <input type="text" class="form-control" name="delvry_we" value="<?php echo $delvry_we; ?>" id="exampleInputPassword1"  >
      </div>
  </div>
  <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Taka Per Kg</label>
          <input type="text" class="form-control" name="taka_par_kg" value="<?php echo $taka_par_kg; ?>"  id="per_kg" id="exampleInputPassword1"  >
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Total Taka</label>
          <input type="text" class="form-control" name="total_taka" id="total" value="<?php echo $total_taka; ?>" readonly id="exampleInputPassword1"  >
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Cash Recived</label>
          <input type="text" class="form-control" name="cash_recevd"  value="<?php echo $cash_recevd; ?>"  id="cash_rec"  >
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Current Due</label>
          <input type="text" class="form-control text-danger"  value="<?php echo $current_due; ?>"  name="current_due" id="current_amnt" readonly id="exampleInputPassword1"  >
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Payment method</label>
            <select class="form-select form-control" name="paymnt_meth" aria-label="Default select example">
              <option value="Cash" selected>Cash</option>
              <option value="Mobile Banking">Mobile Banking</option>
              <option value="Check">Check</option>
            </select>
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Payment Note</label>
         <textarea name="note" class=" form-control" cols="30" rows="2"><?php echo $note; ?></textarea>
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Remarks</label>
         <textarea name="remaks" class=" form-control" cols="30" rows="2"><?php echo $remaks; ?></textarea>
      </div>
     </div>
      </div>
  </div>
  <div class="card-footer">
      <div class="d-flex justify-content-end">
          <!-- <button class="btn btn-outline-success" name="save">Save</button> -->
          <button class="btn btn-outline-success ml-3" name="btn_preview"> <i class="far fa-eye"></i> Preview</button>
      </div>
  </div>
</div>
</form>

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
    	$("#total_gro_w, #per_kg,#cash_rec").keyup(function(){

    	var total=0;
    	var current_amnt=0;
    	var x = Number($("#total_gro_w").val());
    	var y = Number($("#per_kg").val());
     
    	var total=x * y;

    	$('#total').val(total);
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
  $('.container_print').printThis();
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


  