<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
<?php 
$serch_date = $_SESSION['serch_date'];
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
   <section class="content print_container_details">
      <div class="container-fluid">
        <div class="row justify-content-center ">
          <div class="col-lg-11 border">
            <div class="card">
                <div class="row">
                    <style>
                            .print_container_heder12{
                            width: 100%;
                            display: flex;
                            }

                            .print_container_heder4{
                            width: 33%;
                            margin-top: 15px;
                            }
                            .print_container_heder4 .details{
                            text-align: center;
                            }
                            .container_tble{
                                width: 98%;
                                border-collapse: collapse;
                                margin: 0 auto;
                            }
                            .container_tble tr th, tr td {
                                border: 1px solid black;
                                padding: 5px;
                            }
                            .name_container_herser{
                                width: 98%;
                                display: flex;
                                background: white;
                                padding-top: 10px;
                                color: black;
                                margin: 0 auto;
                                margin-top: 8px;
                            }
                            .cus_name{
                                margin-left: 10px;
                            }
                            .print_Date_details{
                                display: flex;
                                
                            }
                            .print_Date{
                                padding-top: 80px;
                                text-align: right;
                            }
                            @media print{
                                .print_container_heder12{
                            width: 100%;
                            display: flex;
                            }

                            .print_container_heder4{
                            width: 33%;
                            margin-top: 15px;
                            }
                            .print_container_heder4 .details{
                            text-align: center;
                            }
                            .container_tble{
                                width: 98%;
                                border-collapse: collapse;
                                margin: 0 auto;
                            }
                            .container_tble tr th, tr td {
                                border: 1px solid black;
                                padding: 5px;
                            }
                            .name_container_herser{
                                width: 98%;
                                display: flex;
                                background: white;
                                padding-top: 10px;
                                color: black;
                                margin: 0 auto;
                                margin-top: 8px;
                            }
                            .cus_name{
                                margin-left: 10px;
                            }
                            .print_Date_details{
                                display: flex;
                                text-align: right;
                            }
                            .print_Date{
                                padding-top: 100px;
                            }
                            .buton_print{
                                display: none;
                                visibility: hidden;
                            }
                            }
                    </style>
                      <div class="print_container_heder12">
                          <div class="print_container_heder4"></div>
                          <div class="print_container_heder4">
                             <div class="details">
                                <p style="padding:0; margin:0 ;"><strong style=" font-size: 30px; letter-spacing: 2px; line-height:1px; ">NICE COLLECTION</strong> </p>
                                   <p style="padding:0; margin:0 ;">18 Mirbug Notun Rasta, West Hazipara <br> Dhaka- 1219, Bangladesh</p>
                                <strong> 
                                      <?php echo $serch_date ?>
                                </strong>
                             </div>
                          </div>
                          <div class="print_container_heder4 print_Date_details">
                              <strong class="print_Date ">Print Date: <?php echo date("d/m/Y")?></strong>
                          </div>
                      </div>
                </div>
            
                <?php
                       $count = 1;
                        $query = "SELECT DISTINCT cmr_p_id FROM tbl_payment WHERE  date = '$serch_date'";
                        $run = mysqli_query($con,$query);
                        $j_array = array();
                        while($result = mysqli_fetch_assoc($run)){ 
                        $j_array[] = $result;

                        }
                         foreach($j_array as $keys=>$value){

                         foreach($value as $cmr_p_id){ 

                          $select = "SELECT SUM(total_taka) AS sum FROM tbl_payment WHERE cmr_p_id='$cmr_p_id' AND date = '$serch_date'";
                          $run = mysqli_query($con,$select);
                          while($res = mysqli_fetch_array($run)){ 
                              $counts  = $res['sum'];
                             }

                             $select = "SELECT * FROM tbl_customer WHERE cmr_p_id='$cmr_p_id' ";
                             $run = mysqli_query($con,$select);
                             while($res = mysqli_fetch_array($run)){ 
                                 $cmr_name  = $res['cmr_name'];
                                }
                        ?>


                    <table class="container_tble">
                    <div class="name_container_herser">
                      <div class="ml-2 cus_name"><h5>Customer Name:  <?php echo $cmr_name; ?></h5></div>
                      <div class="ml-5 cus_name"><h5>Total Amount: <?php echo  $counts ?></h5> </div>
                    </div>
                      <thead>
                      <tr>
                        <th>Sl</th>
                        <th>Date</th> 
                        <th>Transition Id</th> 
                        <th>Goods name</th>
                        <th>Gross weight</th>
                        <th>Amounts</th>
                      </tr>
                      </thead>
                      <tbody>
                   <?php  $select = "SELECT * FROM tbl_customer 
                      INNER JOIN tbl_payment ON tbl_customer.cmr_p_id = tbl_payment.cmr_p_id WHERE tbl_customer.cmr_p_id='$cmr_p_id'AND date = '$serch_date' ";
                      $run = mysqli_query($con,$select);
                      while($result= mysqli_fetch_array($run)){ ?>
                            <tr>
                                <td><?php echo $count++;?></td>
                                <td><?php echo $result['date'];?></td>
                                <td><?php echo $result['transtion_id'];?></td>
                                <td><?php echo $result['goods_name'];?></td>
                                <td><?php echo $result['total_g_w'];?></td>
                                <td><?php echo $result['total_taka'];?></td>
                              </tr>
                        <?php }  } }?>
                        <tr>
                          <td style="border:0px solid" colspan="6"></td>
                        </tr>
                        <tr>
                            <td style="border:0px solid"></td>
                            <td style="border:0px solid"></td>
                            <td style="border:0px solid"></td>
                            <td colspan="2" style="text-align: right; padding-right:10px;"> Total</td>
                            <td> 
                                <?php
                                  $selecu = "SELECT SUM(total_taka) AS sum FROM tbl_payment WHERE  date = '$serch_date'";
                                   $run = mysqli_query($con,$selecu);
                                   while($res = mysqli_fetch_array($run)){ 
                                   echo  $counts_toral  = $res['sum'];
                                   }
                                 ?>
                             </td>
                        </tr>
                 </table>
                  
                 <div class="buton_print d-flex justify-content-end py-3 mr-5">
                     <a href="container_report_page.php" class="btn btn-secondary mr-2">Back</a>
                     <button id="print_btn" class="btn btn-outline-success">Print</button>
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

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->

<script src="js/printThis.js"></script>
<script>
$('#print_btn').click(function(){
  $('.print_container_details').printThis();
})
</script>

<?php
  require_once('footer.php');
?>

