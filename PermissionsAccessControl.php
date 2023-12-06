<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Admin Dashboard</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Permissions Access Control</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">





                        <!-- <button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export all</button>
                        <button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export salesman </button>
                        <button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export Telecaller</button> -->

                    </div>
                </div>
                <!--end breadcrumb-->
                <!-- <a href="./AddSalesman.php" class="href"> <button type="button" class="btn btn-warning px-5"><i class="bx bx-plus-circle mr-1"></i>Add New
                    </button>
                </a> -->
                <!-- <a href="./AddTelecaller.php" class="href"> <button type="button" class="btn btn-warning px-5"><i
                    class="bx bx-plus-circle mr-1"></i>Add
                        Telecaller</button></a> -->
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Passport Copy</th>
                                        <th>Mobile No.</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>tiger@example.com</td>
                                        <td><a href="#">View Passport</a></td>
                                        <td>123-456-7890</td>
                                        <td>




                                            <div class="d-flex order-actions">
                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <a href="./PermissionsAccessControlEdit.php" class="href">
                                                        <div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
                                                        </div>
                                                    </a>

                                                </div>

                                                <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="#" class="href">
														<div class="font-22 "> <i class="lni lni-eye"></i>
														</div>
													</a>

												</div> -->

                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <button class="delete-button">
                                                        <a href="#" class="href">
                                                            <div class="font-22 text-danger"> <i class="lni lni-trash"></i>
                                                            </div>
                                                        </a>

                                                    </button>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>garrett@example.com</td>
                                        <td><a href="#">View Passport</a></td>
                                        <td>456-789-1230</td>
                                        <td>
                                            <div class="d-flex order-actions">
                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <a href="./PermissionsAccessControlEdit.php" class="href">
                                                        <div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
                                                        </div>
                                                    </a>

                                                </div>

                                                <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="#" class="href">
														<div class="font-22 "> <i class="lni lni-eye"></i>
														</div>
													</a>

												</div> -->

                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <button class="delete-button">
                                                        <a href="#" class="href">
                                                            <div class="font-22 text-danger"> <i class="lni lni-trash"></i>
                                                            </div>
                                                        </a>

                                                    </button>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
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
    <?php include('footer.php'); ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>