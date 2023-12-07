<?php
// Define the base URL
$base_url = 'http://127.0.0.1/akiadmin/'; // Replace with your actual base URL

// Example link with the base URL
?>

<link rel="icon" href="<?php echo $base_url; ?>assets/images/favicon-32x32.png" type="image/png" />
<!--extraJS-->
<link href="<?php echo $base_url; ?>assets/extraJS/metismenu/css/metisMenu.min.css" rel="stylesheet" />
<!-- <link href="<?php echo $base_url; ?>assets/extraJS/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" /> -->
<!-- loader-->
<link href="<?php echo $base_url; ?>assets/extraJS/simplebar/css/simplebar.css" rel="stylesheet" />
<link href="<?php echo $base_url; ?>assets/extraJS/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
<!-- Bootstrap CSS -->
<link href="<?php echo $base_url; ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $base_url; ?>assets/css/bootstrap-extended.css" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> -->
<link href="<?php echo $base_url; ?>assets/css/app.css" rel="stylesheet">
<link href="<?php echo $base_url; ?>assets/css/icons.css" rel="stylesheet">
<!-- Theme Style CSS -->
<link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/semi-dark.css" />






<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/sweetalert.min.css">
<link rel='stylesheet' href='<?php echo $base_url; ?>assets/css/bootstrap-select.min.css'>



<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?php echo $base_url; ?>assets/images/aki.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h3 class="logo-text">Al Khayyat Investments</h3>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>



    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">Admin Dashboard</li>
        <li>
            <a href="<?php echo $base_url; ?>index.php">
                <div class="parent-icon"><i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fadeIn animated bx bx-store-alt"></i>
                </div>
                <div class="menu-title">Orders Details</div>
            </a>
            <ul>
                <li> <a href="<?php echo $base_url; ?>OrdersRetailer.php"><i class="bx bx-right-arrow-alt"></i>Retailer</a>
                </li>
                <li> <a href="<?php echo $base_url; ?>OrderSalesman.php"><i class="bx bx-right-arrow-alt"></i>Salesman</a>
                </li>
                <li> <a href="<?php echo $base_url; ?>OrderTelecaller.php"><i class="bx bx-right-arrow-alt"></i>Telecaller</a>
                </li>

            </ul>
        </li>


        <li>
            <a href="<?php echo $base_url; ?>CustomerGroup.php">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-group"></i>
                </div>
                <div class="menu-title">Customer Group</div>
            </a>
        </li>

        <li>
            <a href="<?php echo $base_url; ?>CategoriesListing.php">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-window-open"></i>
                </div>
                <div class="menu-title">Categories Listing</div>
            </a>
        </li>

        <li>
            <a href="<?php echo $base_url; ?>ProductManagement.php">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-store"></i>
                </div>
                <div class="menu-title">Product Management</div>
            </a>
        </li>

        <li>
            <a href="<?php echo $base_url; ?>LoyaltyPoints.php">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-gift"></i>
                </div>
                <div class="menu-title">Loyalty Points</div>
            </a>
        </li>

        <li>
            <a href="<?php echo $base_url; ?>PropsModule/PropsModule.php">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-gift"></i>
                </div>
                <div class="menu-title">Props Module</div>
            </a>
        </li>






        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fadeIn animated bx bx-trophy"></i>
                </div>
                <div class="menu-title">Schemes</div>
            </a>
            <ul>
                <li> <a href="<?php echo $base_url; ?>schemes/SchemesList.php"><i class="bx bx-right-arrow-alt"></i>Scheme Create</a>
                </li>
                <li> <a href="<?php echo $base_url; ?>schemes/SchemesApprove.php"><i class="bx bx-right-arrow-alt"></i>Scheme Approve</a>
                </li>
                <li> <a href="<?php echo $base_url; ?>schemes/SchemesUpload.php"><i class="bx bx-right-arrow-alt"></i>Scheme file Upload</a>
                </li>


            </ul>
        </li>


        <li>
            <a href="<?php echo $base_url; ?>Liquidation.php">
                <div class="parent-icon"> <i class="lni lni-paint-roller"></i>
                </div>
                <div class="menu-title">Liquidation</div>
            </a>
        </li>

        <li>
            <a href="<?php echo $base_url; ?>PermissionsAccessControl.php">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-lock"></i>
                </div>
                <div class="menu-title">Permissions and
                    Access Control</div>
            </a>
        </li>


        <!-- sdfgnh -->
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-collection"></i>
                </div>
                <div class="menu-title">Payment Collection</div>
            </a>
            <ul>
                <li> <a href="<?php echo $base_url; ?>PaymentCollection.php"><i class="bx bx-right-arrow-alt"></i>All Payment</a>
                </li>
                <li> <a href="<?php echo $base_url; ?>PaymentReturned.php"><i class="bx bx-right-arrow-alt"></i> Returned</a>
                </li>
                <li> <a href="<?php echo $base_url; ?>PaymentPending.php"><i class="bx bx-right-arrow-alt"></i>Pending</a>
                </li>
                <li> <a href="<?php echo $base_url; ?>PaymentRejected.php"><i class="bx bx-right-arrow-alt"></i> Rejected</a>
                </li>

            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-minus-back"></i>
                </div>
                <div class="menu-title">Return Management</div>
            </a>
            <ul>
                <li> <a href="<?php echo $base_url; ?>ReturnManagementRetailer.php"><i class="bx bx-right-arrow-alt"></i>Retailer</a>
                </li>
                <li> <a href="<?php echo $base_url; ?>ReturnManagemenSalesman.php"><i class="bx bx-right-arrow-alt"></i> Salesman</a>
                </li>
                <li> <a href="<?php echo $base_url; ?>ReturnManagemenMerchandiser.php"><i class="bx bx-right-arrow-alt"></i>Merchandiser</a>
                </li>


            </ul>
        </li>
        <li>
            <a href="<?php echo $base_url; ?>UsersTrackerMasters.php">
                <div class="parent-icon"> <i class="lni lni-travel"></i>
                </div>
                <div class="menu-title">Users Tracker Masters</div>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url; ?>Planograms.php">
                <div class="parent-icon"> <i class="lni lni-agenda"></i>
                </div>
                <div class="menu-title">Planograms</div>
            </a>
        </li>



        <li>
            <a href="<?php echo $base_url; ?>CustomerSupport.php">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-support"></i>
                </div>
                <div class="menu-title">Customer Support</div>
            </a>
        </li>

        <li>
            <a href="<?php echo $base_url; ?>Reports.php">
                <div class="parent-icon"> <i class="fadeIn animated bx bx-task"></i>
                </div>
                <div class="menu-title">Reports</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->

</div>
<!--end sidebar wrapper -->
<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                    <input type="text" class="form-control search-control" placeholder="Type to search...">
                    <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                    <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                </div>
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mobile-search-icon">
                        <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $base_url; ?>assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">Welcome</p>
                        <p class="designattion mb-0">Admin</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <!-- <li><a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
							</li> -->

                    <li><a class="dropdown-item" href="<?php echo $base_url; ?>login.php"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>