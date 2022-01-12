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
              <div class="col-lg-12 mt-5">
                <div class="row border container_print ">
                    <div class="col-lg-12 container_print9 text-center mt-4 py-3">
                        <div>
                         <img style="width:300px; height: 80px;" src="image/IMG_8943.jpg" alt="">
                        </div>
                       <strong>Office</strong> 
                       <br>
                       <label>21, Rajuk Avunue, BRTC Bhaban(7th Floor), Motijheel, Dhaka-100</label>
                       <br>
                       <label>+44 7903 206123</label>
                    </div>
                  
                    <div class="col-lg-12  ml-2">
                        <div class="row secon_div_print">
                            <div class="col-lg-6 secon_div_print6"> <h5>Bill To</h5></div>
                            <div class="col-lg-6 text-right second_div_print6"> <h5 class="mr-4">Date- 10/02/2021</h5></div>
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

            
                 }
             
           @media print {
               /* table{
               width: 98%;
               height: 300px;
               border-color: skyblue;
               margin:0 auto;
              
               } */
             .container_print{width: 97%;margin:30px; display: flex;}
             .container_print9{width: 97%; text-align: center;}
             #print{display: none;}
             .secon_div_print{ width: 97%; display: flex; display: block; }
             .secon_div_print6{
                 float: left;
                 width: 50%;
                 text-align: left;
            
                 margin-left: 10px;
             }
             .second_div_print6{
                float: right;
                width: 48%;

             }
           }
           </style>
                    <div class="col-lg-12">
                        <table class="tble">
                           <thead>
                                <tr>
                                   <th style="width:16%;text-align:center" >Student Name</th>
                                   <th style="width:30%;text-align:center" >Description</th>
                                   <th style="width:10%;text-align:center" >Paid  Fees</th>
                                   <th style="width:12%;text-align:center" >Comission</th>
                                   <th style="width:10%;text-align:center" >Payable</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td style="  padding-bottom:200px; ">&nbsp; </td>
                                    <td style=" padding-bottom:120px; "> </td>
                                    <td style=" padding-bottom:200px;"> &nbsp;&nbsp;</td>
                                    <td style=" padding-bottom:200px;"> &nbsp;&nbsp;</td>
                                    <td style=" padding-bottom:200px;"> &nbsp;&nbsp; </td>
                                </tr>
                                 -->
                                  <tr>
                                    <td style="background-color: rgb(229, 231, 236); border-top:0px solid ; color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ; color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236); border-top:0px solid ;  color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236); border-top:0px solid ;  color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ; color: black;">a</td>
                                </tr>
                                  <tr>
                                    <td style=" border-top:0px solid ;">a</td>
                                    <td style=" border-top:0px solid ;">a</td>
                                    <td style=" border-top:0px solid ;">a</td>
                                    <td style=" border-top:0px solid ;">a</td>
                                    <td style=" border-top:0px solid ;">a</td>
                                 
                              </tr>
                                  <tr>
                                    <td style="background-color: rgb(229, 231, 236); border-top:0px solid ;  color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ;  color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236);  border-top:0px solid ;  color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236); border-top:0px solid ;  color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236); border-top:0px solid ;  color: black;">a</td>
                              </tr>
                              <tr>
                                <td>a</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                          </tr>
                               <tr>
                                    <td style="background-color: rgb(229, 231, 236); border-bottom: 2px solid skyblue;  color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236);  border-bottom: 2px solid skyblue; color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236); border-bottom: 2px solid skyblue;color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236);  border-bottom: 2px solid skyblue; color: black;">a</td>
                                    <td style="background-color: rgb(229, 231, 236); border-bottom: 2px solid skyblue; color: black;">a</td>
                              </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                              <td class="border-0"></td>  <td class="border-0"></td> <td class="border-0"></td><td style="text-align:right; border:0px solid skyblue"><b>Total  &nbsp;</b></td><td style="text-align:center; border:0px solid skyblue; "> <b> 100</b></td>
                           </tr>
                           <tr>
                               <td></td> <td></td> <td class="border-0"></td><td style="text-align:right; border:0px solid skyblue;">Received  &nbsp;</td><td style="text-align:center; border:1px solid skyblue;"> 200  </td>
                           </tr>
                           <tr>
                               <td></td> <td></td><td class="border-0"></td><td style="text-align:right;  border:0px solid skyblue">Due  &nbsp;</td><td style="text-align:center; border:0px solid skyblue;">100 </td>
                           </tr>
                           <tr>
                             <td></td><td></td><td class="border-0"></td><td style="text-align:right;  border-bottom:2px solid skyblue;"><b>Net Payable  &nbsp;</b></td><td style="text-align:center; border-bottom:2px solid skyblue;"> <b>5000 </b></td>
                           </tr>
                           <tr>
                             <!-- faka row -->
                             <td></td><td></td><td class="border-0"></td><td style="text-align:right"><b></b></td><td></td>
                          </tr>
                           <tr>
                            <td></td><td></td><td class="border-0"></td><td style="text-align:right; border:0px solid skyblue"><b>Total  &nbsp;</b></td><td style="text-align:center; background-color: royalblue; border: 1px solid; margin: 10px; "> <b>5000 </b></td>
                          </tr>
                           <tr>
                             <td colspan="2" style="border: 2px solid skyblue; height:100px">
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
                    <div class="div py-2 d-flex justify-content-end">
                    <button id="print" class="btn btn-success"><i class="fas fa-print"></i> Print</button>
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