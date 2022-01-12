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
                              <div class="bilto_dive-6"> <h5>Bill To</h5></div>
                              <div class="bilto_dive-6"> <h6><?php echo date("d/m/y")?></h6></div>
                            </div>
                       </div>
                       <div class="lager_div-col-12">
                        <table class="tble">
                          <thead>
                               <tr>
                               <th style="width:40%;text-align:center" >Transation Id</th>
                                  <th style="width:20%;text-align:center" >Total Income</th>
                                  <th style="width:20%;text-align:center" >Received amt</th>
                                  <th style="width:20%;text-align:center" >Balance</th>
                               </tr>
                           </thead>
                           <tbody>
                                 <tr>
                                   <td style="  border-top:0px solid ; color: black;">a</td>
                                   <td style="   border-top:0px solid ; color: black;">a</td>
                                   <td style="  border-top:0px solid ;  color: black;">a</td>
                                   <td style="  border-top:0px solid ;  color: black;">a</td>
                                  
                               </tr>
                               <tr>
                                   <td style=" border-top:0px solid ;"> a</td>
                                   <td style=" border-top:0px solid ;"> </td>
                                   <td style=" border-top:0px solid ;"> </td>
                                   <td style=" border-top:0px solid ;"> </td>

                             </tr>
                                 
                          
                           </tbody>
                           <tfoot>
                           <tr>
                              <td  style="border:1px solid black;"><b>Total  &nbsp;</b></td> <td style="border:1px solid black;"></td><td style="text-align:right; border:1px solid black"><b>Total  &nbsp;</b></td><td style="text-align:center; border:1px solid black;"> <b> 100</b></td>
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