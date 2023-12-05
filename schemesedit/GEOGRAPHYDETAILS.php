<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
    <!--extraJS-->
    <link href="../assets/extraJS/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="../assets/extraJS/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../assets/extraJS/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../assets/extraJS/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />


    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../assets/css/semi-dark.css" />







    <link rel="stylesheet" href="../assets/dist/css/bootstrap-multiselect.css" type="text/css">



    <title> GEOGRAPHY DETAILS</title>

    <style>

    </style>
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
                                <li class="breadcrumb-item active" aria-current="page">GEOGRAPHY DETAILS</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="">
                            <a href="./SchemesApprove.php" class="href">

                                <button type="button" class="btn btn-warning px-5">Approve
                                    Schemes
                                </button>

                            </a>
                            <!-- <a href="./SchemeCreateNew.php" class="href">
                                <button type="button" class="btn btn-warning px-5">+ Create New
                                    Scheme
                                </button>
                            </a> -->
                            <a href="#" class="href">
                                <button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export </button>

                            </a>




                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->



                <!--  -->


                <div class="row row-cols-1 row-cols-md-1 row-cols-lg1 row-cols-xl-1">
                    <div class="col">

                        <div class="card">
                            <div class="card-body">
                                <ul class="nav  nav-pills mb-3" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link  " href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SCHEMES</div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="COSTOBJECTS.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title"> COST OBJECTS</div>
                                            </div>
                                        </a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">GEOGRAPHY DETAILS</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">RETAILER CATEGORY</div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="SCHEMECPS.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SCHEME CPS</div>
                                            </div>
                                        </a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SALES CRITERIA</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SLABS</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">REMARKS & ATTACHMENTS</div>
                                            </div>
                                        </a>
                                    </li>


                                </ul>

                                <div class="row">



                                    <!-- <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Area">
                                                    <label class="form-check-label" for="Area">
                                                        Area
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-success">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Depot">
                                                    <label class="form-check-label" for="Depot">
                                                        Depot
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div> -->





                                    <div class="col-md-3 mb-3">

                                        <label for=""> Country</label>


                                        <select class="form-select" id="Country" multiple="multiple">
                                            <option value="1-2">Option 1.2</option>
                                            <option value="2-3">Option 1.3</option>
                                            <option value="3-2">Option 1.2</option>
                                            <option value="4-3">Option 1.3</option>
                                            <option value="5-2">Option 1.2</option>
                                            <option value="6-3">Option 1.3</option>

                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for=""> State</label>
                                        <select class="form-select" id="State" name="status" multiple="multiple">
                                            <option value="status">status 1</option>
                                            <option value="status2">status 2</option>
                                            <option value="status3">status 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for=""> Region</label>
                                        <select class="form-select" id="Region" name="status" multiple="multiple">
                                            <option value="status">status 1</option>
                                            <option value="status2">status 2</option>
                                            <option value="status3">status 3</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for=""> Area</label>
                                        <select class="form-select" id="Area" name="status" multiple="multiple">
                                            <option value="status">status 1</option>
                                            <option value="status2">status 2</option>
                                            <option value="status3">status 3</option>
                                        </select>
                                    </div>
                                </div>



                                <a href="RETAILERCATEGORY.php" class="href">
                                    <button type="submit" class="btn btn-primary bx-pull-right">Next</button>
                                </a>
                                <button onclick="history.back()" type="btn" class="btn btn-danger bx-pull-right">Back</button>




                            </div>
                        </div>
                    </div>

                </div>


                <!--  -->

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
    <script src="../assets/js/jquery.min.js"></script>

    <script type="text/javascript" src="../assets/docs/js/bootstrap.bundle-4.5.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--extraJS-->
    <script src="../assets/extraJS/metismenu/js/metisMenu.min.js"></script>
    <script src="../assets/extraJS/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/extraJS/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/extraJS/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/extraJS/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <script type="text/javascript" src="../assets/dist/js/bootstrap-multiselect.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!--app JS-->
    <script src="../assets/js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#Country').multiselect({
                nonSelectedText: 'Select Country',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });
            $('#State').multiselect({
                nonSelectedText: 'Select State',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });
            $('#Region').multiselect({
                nonSelectedText: 'Select Region',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });
            $('#Area').multiselect({
                nonSelectedText: 'Select Area',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });
        });
    </script>
</body>

</html>