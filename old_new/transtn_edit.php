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
    <!-- main_conetiner ========================================  invoice =====================-->
    <?php

error_reporting(0);
$msg ='<div class="alert bg-success">
         <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
         <strong>Success!</strong> Data Update Success.
       </div>';
       $msg2 ='<div class="alert bg-danger">
       <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
       <strong>Warning! </strong>This Transition Id Already Exist Try Again....!
       </div>';
       $get_tarnston_id = $_GET['edit_id'];

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
         $cash_recevd      = $_POST['cash_recevd'];
         $paymnt_meth      = $_POST['paymnt_meth'];
         $current_due      = $_POST['current_due'];
         $remaks           = $_POST['remaks'];
         $note           = $_POST['note'];
         $payment_id = $_POST['payment_id'];
         $today =  date("Y/m/d");
      
           $Update = "UPDATE  tbl_pay_invoice SET total_taka='$total_taka',cash_recevd='$cash_recevd',paymnt_meth='$paymnt_meth',new_due='$current_due',old_current_due='0',note='0',date='$today' WHERE transtion_id='$get_tarnston_id' AND payment_id='$payment_id'";
           $run = mysqli_query($con,$Update);

           $insert = "UPDATE tbl_payment SET total_taka='$total_taka',cash_recevd='$cash_recevd',paymnt_meth='$paymnt_meth',current_due='$current_due',note='$note',date='$today',goods_name='$goods_name',delvry_ctn='$delvry_ctn',total_g_w='$total_g_w',shipping_mark='$shipping_mark',status='1'  WHERE transtion_id='$get_tarnston_id' AND payment_id='$payment_id'";
           $run = mysqli_query($con,$insert);

           $insert = "UPDATE tbl_transation_form SET ctn_no='$ctn_no',shipping_mark='$shipping_mark',goods_name='$goods_name',ctn_qty='$ctn_qty',delvry_ctn='$delvry_ctn',total_g_w='$total_g_w',delvry_we='$delvry_we',taka_par_kg='$taka_par_kg',remaks='$remaks',pament_date='$today' WHERE transiton_id='$get_tarnston_id'";
           $run = mysqli_query($con,$insert);
        if($run){
          echo $msg;
        } else{
         echo "not Updated";     
       }
     }
   
 ?>

    <!-- main_conetiner ========================================  ==-->


 <section class="content">
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Transaction Form Edit</h3>
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
        <?php
        $cmr_p_id =  $_SESSION['usr_id'];
        $get_tarnston_id = $_GET['edit_id'];
          $select = "SELECT * FROM `tbl_transation_form`
          INNER JOIN tbl_payment ON tbl_transation_form.transiton_id = tbl_payment.transtion_id
          INNER JOIN tbl_pay_invoice ON tbl_transation_form.transiton_id = tbl_pay_invoice.transtion_id
          INNER JOIN tbl_customer ON tbl_transation_form.cmr_p_id = tbl_customer.cmr_p_id
          WHERE tbl_transation_form.transiton_id='$get_tarnston_id' AND tbl_transation_form.cmr_p_id='$cmr_p_id'  limit 1";
          $run = mysqli_query($con,$select);
          while($result = mysqli_fetch_array($run)){ ?>
               
    
      <div class="row">
         <div class="col-lg-3">
             <input type="hidden" name="payment_id" value="<?php echo $result['payment_id'] ?>">
          <label for="exampleInputPassword1">Customer Name</label>
          <input type="text" name="cmr_name" class="form-control" readonly value="<?php echo $result['cmr_name']; ?>"  >
         </div>
         <div class="col-lg-1">
          <div class="form-group">
              <label for="exampleInputPassword1">CTN No</label>
              <input type="text" name="ctn_no" class="form-control" value="<?php echo $result['ctn_no']; ?>" id="exampleInputPassword1"  >
          </div>
         </div>
         <div class="col-lg-2">
          <div class="form-group">
              <label for="exampleInputEmail1">Shipping Mark</label>
              <input type="text" name="shipping_mark" class="form-control" value="<?php echo $result['shipping_mark']; ?>" id="exampleInputEmail1" >
          </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Goods Name</label>
          <input type="text" name="goods_name" class="form-control"  value="<?php echo $result['goods_name']; ?>"id="exampleInputPassword1"  >
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputEmail1">Cartoon qty</label>
          <input type="text" name="ctn_qty" class="form-control" value="<?php echo $result['ctn_qty']; ?>" id="exampleInputEmail1"   >
      </div>
 </div>
 <div class="col-lg-2">
  <div class="form-group">
      <label for="exampleInputPassword1">Delivary Ctn</label>
      <input type="text" class="form-control" name="delvry_ctn" value="<?php echo $result['delvry_ctn']; ?>" id="exampleInputPassword1"  >
  </div>
 </div>
 <div class="col-lg-2">
  <div class="form-group">
      <label for="exampleInputEmail1">Total Gross Weight</label>
      <input type="text" class="form-control" name="total_g_w" id="total_gro_w"  value="<?php echo $result['total_g_w']; ?>" >
  </div>
</div>
  <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Delivary Weight</label>
          <input type="text" class="form-control" name="delvry_we" value="<?php echo $result['delvry_we']; ?>" id="exampleInputPassword1"  >
      </div>
  </div>
  <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Taka Per Kg</label>
          <input type="text" class="form-control" name="taka_par_kg" value="<?php echo $result['taka_par_kg']; ?>"  id="per_kg" id="exampleInputPassword1"  >
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Total Taka</label>
          <input type="text" class="form-control" name="total_taka" id="total" value="<?php echo $result['total_taka']; ?>" readonly id="exampleInputPassword1"  >
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Cash Recived</label>
          <input type="text" class="form-control" name="cash_recevd"  value="<?php echo $result['cash_recevd']; ?>"  id="cash_rec"  >
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Current Due</label>
          <input type="text" class="form-control text-danger"  value="<?php echo $result['current_due']; ?>"  name="current_due" id="current_amnt" readonly id="exampleInputPassword1"  >
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
         <textarea name="note" class=" form-control" cols="30" rows="2"><?php echo $result['note']; ?></textarea>
      </div>
     </div>
     <div class="col-lg-2">
      <div class="form-group">
          <label for="exampleInputPassword1">Remarks</label>
         <textarea name="remaks" class=" form-control" cols="30" rows="2"><?php echo $result['remaks']; ?></textarea>
      </div>
     </div>
      </div>
      <?php  }?>
  </div>
  <div class="card-footer">
      <div class="d-flex justify-content-end">
          <button class="btn btn-outline-success" name="save">Update</button>
         </form>
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
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->
<!-- fixt savascript -->

<?php
  require_once('footer.php');
?>


  