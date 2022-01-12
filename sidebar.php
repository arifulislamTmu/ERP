 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link d-flex">
      <div class="div_image">
      <img src="image/nice_logo.png ";>
      </div>
     
      <span class="brand-text font-weight-light">NICE Collection </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
    <li class="nav-item <?php if(isset($_REQUEST['value'])){ $manu = $_REQUEST['value']; if($manu == 1){ echo "menu-open";
      }else{
        echo "menu-close";
      }
      }?>">
         <style>
          li a i{
             font-size: 20px;
             padding: 3px;
           }
         </style>
            <a href="index.php" class="nav-link bg-secondary">
            <i class="fas fa-shopping-cart"></i>
            
              <p>
                 Manage Sale
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <?php if($role_name=='2'){ ?>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="transiton_form_air_china.php?value=1" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Trade Form By air</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="transition_form_china_ship.php?value=1" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Trade Form by ship </p>
                    </a>
                  </li>
                  </ul>
         <?php }else{ ?>
                  <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="Transaction_Form.php?value=1" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Trade Form By air</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="transtion_form_ship.php?value=1" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Trade Form by ship </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="transaction_page.php?value=1" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Trade List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="trade_report_page.php?value=1" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Trade Report</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="container_report_page.php?value=1" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Container Report</p>
                    </a>
                  </li>
                </ul>
       <?php } ?>
          </li>
          <li class="nav-item menu-closed">
            <a href="index.php" class="nav-link bg-secondary">
            <i class="fas fa-folder-plus"></i>
           
              <p>
                 Others Income
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="income_head_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Income Head </p>
                </a>
              </li>
                <li class="nav-item">
                <a href="manage_income_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Income</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-closed">
            <a href="index.php" class="nav-link bg-secondary">
            <i class="fas fa-chart-line"></i>
              <p>
                 Manage Expence
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="expence_head_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expenditure Head</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage_expenditure_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Other Expence</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="expane_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expence Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="container_expenditure_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Container Expence</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="container_expane_report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Container Expence Report</p>
                </a>
              </li>

          
             
            </ul>
            
          </li>


          

          <li class="nav-item menu-closed">
            <a href="index.php" class="nav-link bg-secondary">
            <i class="fas fa-user-tie"></i>
              <p>
                 Manage Employe
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="add_employe.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                   <p>Add Employe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employe_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employe List</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="employe_expance.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employe Expenditure</p>
                </a>
              </li>
            </ul>
          </li>





          <li class="nav-item <?php if(isset($_REQUEST['value'])){ $manu = $_REQUEST['value']; if($manu == 2){ echo "menu-open";
      }else{
        echo "menu-close";
      }
      }?>">
            <a href="index.php" class="nav-link bg-secondary">
            <i class="fas fa-users"></i>
              <p>
                 Manage Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="new_cmr_add.php?value=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer_list.php?value=2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-closed">
            <a href="index.php" class="nav-link bg-secondary">
            <i class="fas fa-users-cog"></i>
              <p>
                 Manage User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="new_user_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>