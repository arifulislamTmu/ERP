<?php require_once('main_header.php');
  require_once('sidebar.php');
  ?>
 
 <?php 
       // ========== total revanue ================================
              $select ="SELECT SUM(amount) AS total FROM tbl_manage_income";
              $run = mysqli_query($con,$select);
              while( $result = mysqli_fetch_assoc($run)){
              $income = $result['total'];
            }
              $select ="SELECT SUM(total_taka) AS total FROM tbl_payment";

              $run = mysqli_query($con,$select);
              while( $result = mysqli_fetch_assoc($run)){
              $total_taka =  $result['total'];
            }
               $total_income =  $income+$total_taka;

       //============ total expances ================================

              $select ="SELECT SUM(amount) AS total FROM tbl_manage_expance";
              $run = mysqli_query($con,$select);
              while( $result = mysqli_fetch_assoc($run)){
              $expance = $result['total'];
              }
            $select =  " SELECT * FROM `tbl_customer`";
            $run = mysqli_query($con,$select);
            $coun = mysqli_num_rows($run);
  
  
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
    <!-- /.content-header -->

    <!-- Main content -->
   <!-- calculation all php=================== -->
   <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chart-area"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Profit</span>
                <span class="info-box-number">
                  <?php
              
                    echo $total_income - $expance;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-line"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Expence</span>
                <span class="info-box-number">
                  <?php 
                   echo   $expance ;
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales Revenue</span>
                <span class="info-box-number">
                 <?php
                   echo $total_income;
                 ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Customer</span>
                <span class="info-box-number"><?php echo  $coun; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>


    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
           <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Sales: 1 Jan, <?php echo $date = date('Y');?> - 31 Dec,<?php  echo $date = date('Y');?></strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Goal Completion</strong>
                    </p>

                    <div class="progress-group">
                      Add Products to Cart
                      <span class="float-right"><b>160</b>/200</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Complete Purchase
                      <span class="float-right"><b>310</b>/400</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                      </div>
                    </div>
                    <div class="progress-group">
                      Send Inquiries
                      <span class="float-right"><b>250</b>/500</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 60%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Visit Premium Page</span>
                      <span class="float-right"><b>480</b>/800</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 50%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                 
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                    <?php 
                    $date = date('2021');
                          //  SELECT SUM(total_taka) AS total_tk FROM tbl_payment WHERE date > $date  - interval 30 day
                            $select = "SELECT MONTHNAME(date) AS Mname, SUM(total_taka) AS total_tk FROM tbl_payment WHERE YEAR(date) IN ('$date') GROUP BY MONTH(date) ORDER BY date DESC limit 1";
                            $run = mysqli_query($con,$select);
                            while( $result = mysqli_fetch_assoc($run)){ ?>
                      <span class="description-percentage text-primary "><i class="fas fa-caret-up"></i>  <?php echo $result['Mname']?></span>
                      <h5 class="description-header">
                           Tk.<?php echo $result['total_tk'];?>
                          <br>
                      <?php  } ?>
                      </h5>
                      <span class="description-text">TOTAL REVENUE</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <?php 
                    
                          //  SELECT SUM(total_taka) AS total_tk FROM tbl_payment WHERE date > $date  - interval 30 day
                            $select = "SELECT MONTHNAME(date) AS Mname, SUM(amount) AS total_tk FROM tbl_manage_expance WHERE YEAR(date) IN ('$date') GROUP BY MONTH(date) ORDER BY date DESC limit 1";
                            $run = mysqli_query($con,$select);
                            while( $result = mysqli_fetch_assoc($run)){ ?>
                      <span class="description-percentage text-danger"><i class="fas fa-caret-up"></i>  <?php echo $result['Mname']?></span>
                      <h5 class="description-header">
                           Tk.<?php echo $orher_ex = $result['total_tk'];?>
                          <br>
                      <?php  } ?>
                      </h5>
                      <span class="description-text">OTHER EXPANCE </span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                  <div class="description-block border-right">
                    <?php 
                    
                          //  SELECT SUM(total_taka) AS total_tk FROM tbl_payment WHERE date > $date  - interval 30 day
                            $select = "SELECT MONTHNAME(container_name) AS Mname, SUM(amounts) AS total_tk FROM tbl_container_expance WHERE YEAR(container_name) IN ('$date') GROUP BY MONTH(container_name) ORDER BY container_name DESC limit 1";
                            $run = mysqli_query($con,$select);
                            while( $result = mysqli_fetch_assoc($run)){ ?>
                      <span class="description-percentage text-warning "><i class="fas fa-caret-up"></i>  <?php echo $result['Mname']?></span>
                      <h5 class="description-header">
                           Tk.<?php echo $conatiner_ex =  $result['total_tk'];?>
                          <br>
                      <?php  } ?>
                      </h5>
                      <span class="description-text">CONTAINER EXPANCE</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                  <div class="description-block ">
                    <?php 
                   $total_ex =  $orher_ex + $conatiner_ex ;
  
                          //  SELECT SUM(total_taka) AS total_tk FROM tbl_payment WHERE date > $date  - interval 30 day
                            $select = "SELECT MONTHNAME(date) AS Mname, SUM(total_taka) AS total_tk FROM tbl_payment WHERE YEAR(date) IN ('$date') GROUP BY MONTH(date) ORDER BY date DESC limit 1";
                            $run = mysqli_query($con,$select);
                            while( $result = mysqli_fetch_assoc($run)){ ?>
                      <span class="description-percentage text-success "><i class="fas fa-caret-up"></i>  <?php echo $result['Mname']?></span>
                      <h5 class="description-header">
                           Tk.<?php echo $result['total_tk'] - $total_ex ;?>
                          <br>
                      <?php  } ?>
                      </h5>
                      <span class="description-text">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
            <!-- <section class="content display_hide3 py-2">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="card" style="background-color: #17a2b8!important;">
                          <div class="card-header">
                              <h3 class="card-title"> Monthly Sale Report </h3>
                          </div>
  
                          <div style="padding: 0rem;" class="card-body">
                            <table class="table  font_siz table-bordered table-striped">
                                <tbody>
                                      <?php 
                                      $count = 1;
                                        $date = date('Y');
                                       
                                          $select = "SELECT MONTHNAME(date) AS Mname, SUM(total_taka) AS total_tk FROM tbl_payment WHERE YEAR(date) IN ('$date') GROUP BY MONTH(date) ORDER BY date DESC limit 3";
                                          $run = mysqli_query($con,$select);
                                          while( $result = mysqli_fetch_assoc($run)){ ?>
                                            <tr>
                                                <td><?php echo $result['Mname']?></td>
                                                <td><?php echo $result['total_tk'];?></td>
                                            </tr>
                                    <?php  } ?>
                              </table>
                          </div>
                        </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="card" style="background-color: #dc3545!important;">
                          <div class="card-header">
                               <h3 class="card-title"> Monthly Expence Report </h3>
                          </div>
                        
                          <div style="padding: 0rem;" class="card-body">
                            <table class="table font_siz table-bordered  table-striped">
                                <tbody>
                                      <?php 
                                      $count = 1;
                                     
                                          $select = "SELECT MONTHNAME(date) AS Mname, SUM(total_taka) AS total_tk FROM tbl_payment WHERE YEAR(date) IN (2021) GROUP BY MONTH(date)  ORDER BY date DESC limit 3";
                                          $run = mysqli_query($con,$select);
                                          while( $result = mysqli_fetch_assoc($run)){ ?>
                                            <tr>
                                                <td><?php echo $result['Mname']?></td>
                                                <td><?php echo $result['total_tk'];?></td>
                                            </tr>
                                    <?php  } ?>
                              </table>
                          </div>
                        </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="card" style="background-color: #28a745!important;">
                          <div class="card-header">
                                <h3 class="card-title"> Monthly Revenue Report </h3>
                              </div>
               
                          <div style="padding: 0rem;" class="card-body">
                            <table class="table font_siz table-bordered table-striped">
                             
                                <tbody>
                                      <?php 
                                      $count = 1;
                                       
                                          $select = "SELECT MONTHNAME(date) AS Mname, SUM(total_taka) AS total_tk FROM tbl_payment WHERE YEAR(date) IN (2021) GROUP BY MONTH(date)  ORDER BY date DESC limit 3";
                                          $run = mysqli_query($con,$select);
                                          while( $result = mysqli_fetch_assoc($run)){ ?>
                                            <tr>
                                  
                                                <td><?php echo $result['Mname']?></td>
                                                <td><?php echo $result['total_tk'];?></td>
                                            </tr>
                                    <?php  } ?>
                              </table>
                          </div>
                        </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="card">
                          <div class="card-header">
                              <div class="row">
                                      <h3 class="card-title"> Monthly Sale Report </h3>
                                  </div>
                              </div>
                       
                          <div style="padding: 0rem;" class="card-body">
                            <table class="table font_siz table-bordered table-striped">
                                <tbody>
                                      <?php 
                                      $count = 1;
                                       
                                          $select = "SELECT MONTHNAME(date) AS Mname, SUM(total_taka) AS total_tk FROM tbl_payment WHERE YEAR(date) IN (2021) GROUP BY MONTH(date)  ORDER BY date DESC limit 3";
                                          $run = mysqli_query($con,$select);
                                          while( $result = mysqli_fetch_assoc($run)){ ?>
                                            <tr>
                                         
                                                <td><?php echo $result['Mname']?></td>
                                                <td><?php echo $result['total_tk'];?></td>
                                            </tr>
                                    <?php  } ?>
                              </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
              </section> -->


    <section class="content display_hide3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                   <div class="row">
                       <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                      <h3 class="card-title"> Container Report Summery </h3>
                                </div> 
                            </div>
                       </div>
                       <div  class="col-lg-6">
                            <div class="row d-flex">
                                <div class="div ml-5">
                                    <h3 class="card-title" > Total Weight : &nbsp; <?php
                                            $select = "SELECT SUM(total_g_w) AS sum FROM tbl_payment ";
                                            $run = mysqli_query($con,$select);
                                            while($res = mysqli_fetch_array($run)){ 
                                                $counts  = $res['sum'];
                                            echo"<strong> $counts </strong>" ;
                                            }
                                        ?></h3>
                                </div>
                                <div class="div ml-5">
                                    <h3 class="card-title" > Total Amount : &nbsp; <?php
                                            $select = "SELECT SUM(total_taka) AS sum FROM tbl_payment";
                                            $run = mysqli_query($con,$select);
                                            while($res = mysqli_fetch_array($run)){ 
                                                $counts  = $res['sum'];
                                            echo"<strong> $counts </strong>" ;
                                            }
                                        ?></h3>
                                </div>
                            </div>
                         
                       </div>
                   </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <style>
                .font_siz{
                  font-size: 20px;
                }
              </style>
                <table id="example1" class="table font_siz table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Container Name</th> 
                    <th>Total gross weight</th>
                    <th>Total Amounts</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php
                       $count = 1;
                        $query = "SELECT DISTINCT date FROM tbl_payment ";
                        $run = mysqli_query($con,$query);
                        $j_array = array();
                        while($result = mysqli_fetch_assoc($run)){ 
                        $j_array[] = $result;

                        }
                         foreach($j_array as $keys=>$value){

                         foreach($value as $date){
                            $select = "SELECT SUM(total_taka) AS sum FROM tbl_payment WHERE date='$date'";
                            $run = mysqli_query($con,$select);
                            while($res = mysqli_fetch_array($run)){ 
                               $counts  = $res['sum'];
                            }
                            $select = "SELECT SUM(total_g_w) AS sum FROM tbl_payment WHERE date='$date'";
                            $run = mysqli_query($con,$select);
                            while($res = mysqli_fetch_array($run)){ 
                                $groswt  = $res['sum'];
                            }
                        $select = "SELECT * FROM tbl_customer 
                        INNER JOIN tbl_payment ON tbl_customer.cmr_p_id = tbl_payment.cmr_p_id WHERE tbl_payment.date ='$date'  limit 1";
                        $run = mysqli_query($con,$select);

                        while($result= mysqli_fetch_array($run)){ ?>
                         <tr>
                            <td><?php echo $count++;?></td>
                            <td><a style="text-decoration: underline;" href="container_report_page.php?get_date=<?php echo $result['date'];?>"><?php echo $result['date'];?></a></td>
                            <td><?php echo $groswt;?></td>
                            <td><?php echo  $counts?></td>
                          </tr>
                    <?php }  } }?>
                 
                </table>
              </div>
      
            </div>
   
          </div>
         
        </div>
     
      </div>
   </section>

<section class="mt-2 tble_2">
 <div class="row d-flex justify-content-center">
          <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                <div class="row">
                    <div class=" col-lg-12 text-center pb-3">
                         <h4>All expence Report </h4>
                    </div>
                  
                  <div class="col-lg-12">
                     <div class="row">
                         <div class="col-lg-6"><a href="expane_report.php" class="btn btn-outline-success" >View Expenditure Details </a></div>
                         <div class="col-lg-6 text-right">
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
                <table id="example1" class="table table-bordered table-striped">
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

 </section>

              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->

        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
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

<!-- "https://nicecollection.net/admin/css/styles.css", -->