<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
    <!-- Content Header (Page header) -->
    <div class="content-header hide_section">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0 hide_section"><a href="transition_details.php?usr_id=<?php echo $user_id = $_SESSION['usr_id'];?>" class="btn btn-primary"> <i class="fas fa-chevron-left"></i> Go Back</a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Transition Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <!-- Main content  many recipt =====================================-->
    <section class="content ">
      <div class="row d-flex justify-content-center mt-4">
        <div class="col-lg-12">

        <?php
          $msg ='<div class="alert bg-success">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Success!</strong> Data Insert Success.
          </div>';
          $msg3 ='<div class="alert bg-success">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Success!</strong> Data Update Success.
          </div>';
          $msg2 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>This Transition Id Already Exist Try Again....!
          </div>';
          $msg4 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>Minus values are not accepted....!
          </div>';

          $get_tastion_id = $_GET['trxid'];
         $get_user_id = $_SESSION['usr_id'];
         if(isset($_POST['paynow'])){
              $total_taka       =$_POST['total_taka'];
              $curren_due       =$_POST['current_due'];
              $recve_cash       =$_POST['recve_cash'];
              $new_current_due   =$_POST['new_current_due'];
              $payment_mathod    =$_POST['payment_mathod'];
              $note              =$_POST['note'];
              $today = date("Y/m/d");
              $payment_Id = rand(1000,9999);
              $update = "UPDATE tbl_payment SET cash_recevd = cash_recevd + '$recve_cash', current_due='$new_current_due', note='$note',status='1'   WHERE cmr_p_id='$get_user_id' AND transtion_id='$get_tastion_id'";
               $run = mysqli_query($con,$update);
            
              $insert = "INSERT INTO tbl_pay_invoice(cmr_p_id,transtion_id,total_taka,old_current_due,cash_recevd,new_due,paymnt_meth,note,date,payment_id)
                        VALUES('$get_user_id','$get_tastion_id','$total_taka','$curren_due','$recve_cash','$new_current_due ','$payment_mathod','$note','$today','$payment_Id')";
                       $run = mysqli_query($con,$insert);
                       if($run){
                        
                          echo  $msg; 
                        
                       }else{
                        echo "Data not Updated"; 
                       }
                     }
                 ?>

            <?php
                    if(isset($_POST['Updaet_date'])){
                      $transetion_id = $_POST['transetion_id'];
                      $pay_now = $_POST['pay_now'];
                      $payment_id =$_POST['payment_id'];
                       
                      $select ="SELECT * FROM tbl_pay_invoice WHERE payment_id='$payment_id' AND old_current_due ='$pay_now'";
                      $run = mysqli_query($con,$select);
                      if(mysqli_num_rows($run)>0){
                       
                      }else{
                        $select ="SELECT * FROM tbl_pay_invoice WHERE payment_id='$payment_id'";
                        $srun = mysqli_query($con,$select);
                        while($result = mysqli_fetch_array($srun)){
                         $cash_recevd = $result['cash_recevd'];

                        $cutn_value = $cash_recevd -$pay_now;

                        }
                        if($cash_recevd< $pay_now){
                          echo $msg4;
                        }else{
                          $update = "UPDATE tbl_pay_invoice SET old_current_due='$pay_now', cash_recevd = '$pay_now', new_due= new_due+'$cutn_value'
                          WHERE payment_id='$payment_id'";
                            $run = mysqli_query($con,$update);
    
                            $update = "UPDATE tbl_payment SET cash_recevd = cash_recevd-'$cutn_value', current_due = current_due+'$cutn_value'  WHERE transtion_id ='$transetion_id'";
                            $run = mysqli_query($con,$update);
                            if($run){
                              echo $msg3;
                            //  echo"<script>window.location='customer_payment_page.php?trxid='$get_tastion_id''</script>";
                            
                            }else{
                            echo "not data upfate";
                            }  } }  } 
                           ?>

      <div class="card print_container">
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

                              <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
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
                              <h4 style="padding: 0; margin: 0; text-align:center; color:#591416; border:1px solid black; font-size:30px; ">Money Receipt </h4>
                            </div>
                          </div>
                          <div class="div-col-3">
                            <div class="">
                          
                            </div>
                          </div>
                          <div class="div-col-3">
                            <div class=" text-center">
                              <h4 style="padding: 0; margin: 0;"> Date :
                             
                              <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
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
                                    $last_row = $chack[9];
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
                                    $weight_row = $chack[8];
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
                        <div class="div3-col-12">
                              <div class="div3-6" >
                                <h2>Tk <strong style="border:2px dotted; padding-right: 100px;">
                                <?php $select_qur = "SELECT * FROM tbl_pay_invoice  ORDER BY id DESC LIMIT 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $last_row = $chack[5];
                                    echo " ".$last_row ;
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
  <div class="new_section">
    <?php
      if(isset($_POST['incoce_print'])){ 
        $paymetn_id = $_POST['paymetn_id']; ?>
<!-- ================================================================ -->
<section class="content">
    <div class="row d-flex justify-content-center">
     <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <a class="btn btn-primary" href=""><i class="fas fa-chevron-left"></i> Back</a>
         
            <div class="row">
              <div class="col-lg-12 ">

                <div class="row border container_print2 ">
                      <div class="main_div">
                           <div class="div-col-12" >
                            <div class="div-col-3">
                                <div class="image_div"> 
                            </div>
                            </div>
                            <div class="div-col-3 ">
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
                              <?php
                                     $select ="SELECT * FROM tbl_pay_invoice WHERE payment_id='$paymetn_id'";
                                     $run = mysqli_query($con,$select);
                                     while($resyl = mysqli_fetch_assoc($run)){ 
                                        $transitn = $resyl['transtion_id'];
                                        $cmr_p_id = $resyl['cmr_p_id'];
                                       ?>
                          <div class="div-col-3">
                            <div class="">
                              <h4 style="padding: 0; margin: 0;">Payment id: <?php echo $resyl['payment_id']?></h4>
                            </div>
                          </div>
                          <div class="div-col-3">
                          <div class=" text-center">
                              <h4 style="padding: 0; margin: 0; text-align:center; color:#591416; border:1px solid black; font-size:30px; ">Money Receipt </h4>
                            </div>
                          </div>
                          <div class="div-col-3">
                            <div class="">
                             
                            </div>
                          </div>
                          <div class="div-col-3">
                            <div class=" text-center">
                              <h4 style="padding: 0; margin: 0;"> Date: <?php echo date('d/m/Y')?></h4>
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
                                          $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$cmr_p_id'";
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
                                   <?php echo $resyl['total_taka']?>
                                </td>
                                <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 13%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%; padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; padding-top:10px ;">By Cash/ Mobile Money/ Others :</td>
                                  <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;">
                                  <?php echo $resyl['paymnt_meth'] ?>
                                </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 13%;  padding-left: 5px; border-bottom: 2px dotted;"></td>
                                  <td style="width: 10%;  padding-left: 5px; text-align: center;"> Date :
                                </td>
                                  <td style="width: 10%;  padding-left: 5px; border-bottom: 2px dotted;">
                                  <?php echo $resyl['date'] ?>
                                </td>
                                </tr>
                                <tr>
                                  <td style="width: 20%; padding-top:10px ;">Bank, Branch/ Others Method:</td>
                                  <td style="width: 18%; padding-left: 5px; border-bottom: 2px dotted;">
                                  
                                  <?php $select_qur = "SELECT * FROM tbl_payment  WHERE transtion_id='$transitn' limit 1";
                                    $run = mysqli_query($con,$select_qur);
                                    $chack = mysqli_fetch_row($run);
                                    $weight_row = $chack[8];
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
                                  <?php $select_qur = "SELECT * FROM tbl_transation_form WHERE  transiton_id='$transitn' limit 1";
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
                        <div class="div3-col-12">
                              <div class="div3-6" >
                                <h2>Tk <strong style="border:2px dotted; padding-right: 100px;"><?php echo $resyl['cash_recevd']?></strong></h2>
                              </div>
                              <div class="div3-6-2 ">
                                 <strong style="border-top:2px solid; padding-right: 60px; margin-right: 100px; "> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Authorised Signature</strong>
                              </div>
                        </div>

                        <?php   } ?>
                        <div class="div py-2 d-flex justify-content-end">
                        <button id="print2" class="btn btn-success"><i class="fas fa-print"></i> Print</button>
                </div>
             </div>
            </div>
        </div>
      </div>
    </div>
    </div>
  </section>
      <style>
           .hide_section{
             display: none;
             visibility: hidden;
           }
      </style>
    <?php  }
    ?>
  </div>

<!--   =================================================================== -->
   <section class="content hide_section">
      <div class="row d-flex justify-content-center mt-2">
        <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Payment status</h3>
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
                <div class="col-lg-6">
                <form action="" method="post">
                      <div class="card">
                        <div class="card-header">
                           Customer Name :  &nbsp;<strong>
                        <?php 
                          $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$get_user_id'";
                          $run = mysqli_query($con,$select);
                          while($result= mysqli_fetch_array($run)){
                             echo $result['cmr_name'];
                           } ?></strong>
                        </div>
                        <div class="card-body">
                          <?php 
                            $select ="SELECT * FROM tbl_payment WHERE cmr_p_id='$get_user_id' AND transtion_id='$get_tastion_id'";
                            $run = mysqli_query($con,$select);
                            while($result = mysqli_fetch_array($run)){ ?>
                           <div class="row">
                            <div class="col-lg-3">
                              <div class="form-group">
                                  <label for="exampleInputEmail1"> Total Amount </label>
                                  <input type="text" class="form-control" name="total_taka" readonly value="<?php echo $result['total_taka'];?>"> 
                              </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-group">
                              <label for="exampleInputPassword1">Due Amount</label>
                              <input type="email" class="form-control" id="curren_due" name="current_due" readonly value="<?php echo $result['current_due'];?>">
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-group">
                              <label for="exampleInputPassword1">Pay Now </label>
                              <input type="number" class="form-control" id="pay_now" required name="recve_cash" placeholder="0"  >
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="form-group">
                              <label for="exampleInputPassword1">Current Due </label>
                              <input type="number" class="form-control" id="total" name="new_current_due" readonly  >
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                              <label for="exampleInputPassword1">Payment Method </label>
                               <select class="form-select form-control" name="payment_mathod" aria-label="Default select example">
                                 <option value="Cash" selected>Cash</option>
                                 <option value="Mobile Banking">Bkash/Nogod</option>
                                 <option value="check">check</option>
                                 <option value="Other">Other</option>
                               </select>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group ">
                              <label for="exampleInputPassword1">Note </label>
                               <textarea name="note" id="" cols="30" class="form-control" rows="2"></textarea>
                          </div>
                        </div>
                        </div>
                        <?php  }  ?>

                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                               <button class="btn btn-outline-success" name="paynow">Pay Now</button>
                               </form>
                               <button id="print" type="button" class="btn btn-outline-success ml-3"> <i class="fas fa-print"></i>  Print Receipt</button>
                            </div>
                        </div>
                      </div>
               </div>
             <style>
               .scroll_div{
                 width: 100%;
                 height: 350px;
                 overflow: hidden;
                 overflow: scroll;
               }
             </style>
               <div class="col-lg-6" >
                    <div class="card scroll_div">
                      <div class="card-header">
                      Payment Status
                      <hr>
                      <form action="" method="POST"> 
                    <div class="row d-flex">
                      <?php 
                        if(isset($_POST['edit_date'])){ 
                          $paymet_id = $_POST['paymet_id'];
                          $select = "SELECT * FROM  tbl_pay_invoice WHERE payment_id='$paymet_id'";
                          $run = mysqli_query($con,$select);
                          while($ressl =  mysqli_fetch_array($run)){ ?>
                       
                      <div class="col-lg-3">
                           <label for="">Total</label>
                          <input type="text" class="form-control" readonly value="<?php echo $ressl['total_taka']?>">
                      </div>
                      <div class="col-lg-3 ml-2">
                      <label for="">Last Pay</label>
                          <input type="text" class="form-control" readonly  value="<?php echo $ressl['cash_recevd']?>">
                      </div>
                      <div class="col-lg-3">
                          <label for="">New Pay</label>
                          <input type="number" class="form-control" name="pay_now">
                          <input type="hidden" name="payment_id" value="<?php echo $paymet_id?>">
                          <input type="hidden" class="form-control" name="transetion_id" value="<?php echo $ressl['transtion_id']?>">
                      </div>
                      <div class="col-lg-2 mt-1">
                      <label for=""> </label>
                        <button class="btn btn-success" name="Updaet_date">Update</button>
                      </div>
                      </form>
                      </div>
                     <?php     } } ?>
                     
                      </div>
                      <div class="card-body">
                         <table class="table table-striped table-responsive table-bordered">
                           <thead>
                             <tr>
                              <th>Payment Date</th>
                              <th>Payment id</th> 
                              <th>Payment Amount</th>
                              <th>Current Due</th>
                              <th>Receipt</th>
                             </tr>
                           </thead>
                           <tbody>
                           <?php 
                           $count = 1;
                            $select ="SELECT * FROM tbl_pay_invoice WHERE cmr_p_id='$get_user_id' AND transtion_id='$get_tastion_id'  ORDER BY `tbl_pay_invoice`.`id` DESC  limit 4 ";
                            $run = mysqli_query($con,$select);
                            while($result = mysqli_fetch_array($run)){ ?>
                             <tr>
                               <td><?php echo $result['date']?></td>
                               <form action="" method="POST">
                                 <input type="hidden" name="paymet_id" value="<?php echo $result['payment_id']; ?>">
                                 <td><button style="text-decoration: underline; font-size:20px; color:steelblue;" class=" btn  border-0" name="edit_date"><?php echo $result['payment_id']?></button></td>
                               </form>
                               <td><?php echo $result['cash_recevd']?></td>
                               <td class="text-danger">( <?php echo $result['new_due']?> )</td>
                               <form action="" method="POST">
                               <input type="hidden" name="paymetn_id" value="<?php echo $result['payment_id']; ?>">
                               <td><button class="btn btn-primary" name="incoce_print" ><i class="far fa-eye"></i></button></td>
                            </form>
                             </tr>
                             <?php } ?>
                           </tbody>
                         </table>
                      </div>
                    </div>
                </div>
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
<!-- live calculate -->
<script>
		$(document).ready(function(){
    	// Get value on keyup funtion
    	$("#curren_due,#pay_now").keyup(function(){
    	var total=0;
    	var x = Number($("#curren_due").val());
    	var y = Number($("#pay_now").val());
    	var total=x - y;
      $('#total').val(total);
    });
});
</script>
<!-- live calculate -->
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

     
      $('#print2').click(function(){
        $('.container_print2').printThis({
                  debug: false,               // show the iframe for debugging
                  importCSS: true,            // import parent page css
                  importStyle: false,         // import style tags
                  printContainer: true,       // print outer container/$.selector
                  loadCSS: " http://localhost/project2/css/styles.css",                // path to additional css file - use an array [] for multiple
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

<?php
  require_once('footer.php');
?>