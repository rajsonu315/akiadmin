<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->

    <title> Customer Group</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <?php include('../header.php'); ?>

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
                                <li class="breadcrumb-item active" aria-current="page">BEAT Management</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="">

                        <a href="<?php echo $base_url; ?>BeatManagement/BulkImport.php" class="href">
                            <button type="button" class="btn btn-warning px-5">
                                <i class="bx bx-cloud-download mr-1"></i> Bulk Import
                            </button>
                        </a>
                            <a href="<?php echo $base_url; ?>BeatManagement/CreateBeat.php" class="href">
                                <button type="button" class="btn btn-warning px-5"></i>Beat Creation +</button>
                            </a>





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
                                        <th>Beat ID</th>
                                        <th>Beat Name</th>

                                        <th>Beat Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12345678</td>
                                        <td>Test</td>
                                        <td>DREEF</td>
                                        <td>







                                            <div class="d-flex order-actions">
                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <a href="<?php echo $base_url; ?>BeatManagement/EditBeat.php" class="href">
                                                        <div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <a href="<?php echo $base_url; ?>BeatManagement/ViewBeat.php" class="href">
                                                        <div class="font-22 "> <i class="lni lni-eye"></i>
                                                        </div>
                                                    </a>

                                                </div>

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
	<?php include('../footer.php'); ?>


</body>

</html>