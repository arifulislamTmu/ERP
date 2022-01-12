

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
           ?>