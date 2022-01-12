<?php require_once('main_header.php');
  require_once('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-0">
   <section class="content">
      <div class="row d-flex justify-content-center mt-4">
       <div class="col-lg-12">
         <?php
          $msg ='<div class="alert bg-success">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Success!</strong> Data Insert Success.
          </div>';
          $msg2 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong>This Income Head  Already Exist Please Change "Details" Or "Note" ....!
          </div>';
          $msg4 ='<div class="alert bg-danger">
          <span class="closebtn" onclick= this.parentElement.style.display="none";>&times;</span> 
          <strong>Warning! </strong> Date deleted Success ....!
          </div>';

            if(isset($_POST['create_btn'])){
                
                        $container_name = $_POST['container_name'];
                        $particulars = $_POST['particulars'];
                        $amounts = $_POST['amounts'];
                        $remark = $_POST['remark'];
                       $count = 1;
                            foreach($particulars as $key =>$value){
                            $save = "INSERT INTO tbl_container_expance(container_name,particulars,amounts,remark)
                            VALUES('$container_name','$particulars[$key]','$amounts[$key]','$remark[$key]')";
                            $run =mysqli_query($con,$save);    
                            } 
                            if($count==1){
                            if($run){
                                echo $msg;
                                $count++;
                                echo '<script>window.location="container_expenditure_add.php"</script>';
                            }else{
                            echo"Data insert not success";
                            } } }

                            if(isset($_GET['contain_id_delt'])){
                              $contain_id_delt = $_GET['contain_id_delt'];
                        
                              $delete = "DELETE FROM tbl_container_expance WHERE contain_id ='$contain_id_delt'";
                              $run = mysqli_query($con,$delete);
                              if($run){
                                    echo $msg4;
                              }
                     }
                            
                    
                        ?>
  <!-- //php End  -->
      <div class="card">
       
        <div class="card-header">
          <h3 class="card-title">Add Container Expenditure</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
 <form action="" method="POST">
 <div class="card-body">
  <div class="row">
        <div class="col-lg-6 mb-2">
             <div class="row">
                 <div class="col-lg-4 text-right">
                    <label>Container Name:</label>
                 </div>
                 <div class="col-lg-6">
                 <input type="date" name="container_name" class="form-control" required>
                 </div>
             </div>
        </div>
    
         <table class="table table-bordered" id="table_feild">
             <thead>
               <tr>
                 <th scope="col">Particulars</th>
                 <th scope="col">Amount</th>
                 <th scope="col">Remark</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <td><input type="text" class="form-control "  name="particulars[]"></td>
                 <td><input type="number" class="form-control" required name="amounts[]"></td>
                 <td><input type="text" class="form-control " name="remark[]"></td>
                 <td><button style="font-size:18px" type="button" id="add" class="btn btn-warning btn-sm text-center" ><i class="fas fa-plus-circle"></i></button></td>
               </tr>
             </tbody>
       </table>
        </div>
    </div>
    <div class="card-footer">
            <div class="d-flex justify-content-end">
                <button class="btn btn-outline-success" name="create_btn">Save</button>
            </div>
        </div>
    </div>
      </div>
    </div>
    </form>
 </section>
    <section class="mt-0">
           <div class="card">
             <div class="card-body">
               <h5 class="card-title"> Container expence History</h5>
               <table id="example1" class="table table-bordered  table-striped">
                <thead>
                    <tr>
                          <th  scope="col">Sl</th>
                          <th  scope="col">Date</th>
                          <th  scope="col">Container Name</th>
                          <th  scope="col">Particulars</th>
                          <th  scope="col">Amounts</th>
                          <th  scope="col"> Remark</th>
                          <th  scope="col"> Action</th>
                    </tr>
                </thead>
              <tbody>
                <?php
                $count = 1;
                  $select = "SELECT * FROM tbl_container_expance ORDER BY contain_id DESC"; 
                    $run = mysqli_query($con,$select);
                  while($result = mysqli_fetch_array($run)){ ?>
                      <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $result['container_name']?></td>
                            <td><?php echo $result['container_name']?></td>
                            <td><?php echo $result['particulars']?></td>
                            <td><?php echo $result['amounts']?></td>
                            <td><?php echo $result['remark']?></td>
                            <td> <?php if($role_name=='0'){ ?><a style="font-size:20px; padding:10px;"href="container_ex_edit.php?contain_id_edit=<?php echo $result['contain_id'];?>"><i class="fas fa-edit"></i></a> <a  style="font-size:20px; padding:10px; color:red;" onclick="return confirm('You are Sure..?')" href="?contain_id_delt=<?php echo $result['contain_id'];?>"><i class="far fa-trash-alt"></i></a>  <?php }?></td>
                      </tr>
                  <?php } ?>
              </tbody>
            </table>
             </div>
           </div>
    </section>
 </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
var html ='<tr><td><input type="text" class="form-control py-1 " name="particulars[]"></td><td><input type="number" class="form-control py-1 " required name="amounts[]"></td><td><input type="text" class="form-control py-1 " name="remark[]"></td>  <td><button type="button"  style="font-size:18px" class="btn btn-danger text-center btn-sm" id="remove"><i class="fas fa-minus-circle"></i></button></td></tr>';
 var max= 20;  
var x = 1;
  $('#add').click(function(){
    if(x<=max){
     $('#table_feild').append(html);
     x++;
    }
  });
  $('#table_feild').on('click','#remove',function(){
    $(this).closest('tr').remove();
    x--;
  });
});
</script>
 

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

