<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--extraJS-->
    <link href="assets/extraJS/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/extraJS/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/extraJS/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/extraJS/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />


    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> -->
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <title> Return Management Merchandiser</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <?php include('header.php'); ?>

        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Return Management Merchandiser</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="">

                            <!-- <button type="button" class="btn btn-warning px-5" data-toggle="modal" data-target="#uploadModal">
                                Sub-Accounts
                            </button>
                            <button type="button" class="btn btn-warning px-5" data-toggle="modal" data-target="#uploadModal">
                                <i class="bx bx-cloud-download mr-1"></i> Download
                            </button>

                            <a href="./RetailerDetailsAddNew.php" class="href">
                                <button type="button" class="btn btn-warning px-5"></i>Add New +</button>
                            </a> -->





                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Return ID</th>
                                        <th>Salesman ID</th>
                                        <th>
                                        Salesman ID</th>
                                        <th>Salesman ID</th>

                                        <th>Approval from Manager Status 
                                        </th>
                                        <th>Outlet Name
                                        </th>
                                        
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>System Architect</td>
                                        <td>admin</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                          
                                        <td>
                         



                                            <div class="d-flex order-actions">
												<!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="./RetailerDetailsEdit.php" class="href">
														<div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
														</div>
													</a>

												</div> -->

												<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="./ReturnManagemenMerchandiserView.php" class="href">
														<div class="font-22 "> <i class="lni lni-eye"></i>
														</div>
													</a>

												</div>

												<!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
														<button class="delete-button">
														<a href="#" class="href">
															<div class="font-22 text-danger"> <i class="lni lni-trash"></i>
															</div>
														</a>

													</button>

												</div>  -->
											</div>
                                        </td>
                                    </tr>



                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--extraJS-->
    <script src="assets/extraJS/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/extraJS/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/extraJS/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/extraJS/simplebar/js/simplebar.min.js"></script>
    <script src="assets/extraJS/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>