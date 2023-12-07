<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->

    <title> Return Managemen Sales man View</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Return Managemen Sales man View</li>
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
                                        <th>S.no.</th>
                                        <th>SKU Code</th>
                                        <th>Description</th>
                                        <th>Return Reason Code </th>
                                        <th> Unit Price
                                        </th>
                                        <th>Total Return Quantity </th>
                                        <th>Total Return Value</th>
                                        <th>FOC Quantity </th>
                                        <th> FOC Value</th>
                                        <th>Actutal Quantity</th>

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
                                        <td>test</td>

                                        <td>
                                            test
                                        </td>
                                        <td>test delhi</td>
                                        <td>test delhi</td>

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
	<?php include('footer.php'); ?>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!--app JS-->

</body>

</html>