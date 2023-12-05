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
    <title> SCHEME CPS</title>
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
                                <li class="breadcrumb-item active" aria-current="page">SCHEME CPS</li>
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
                                        <a class="nav-link  " href="./Schemes.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SCHEMES</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="./GEOGRAPHYDETAILS.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">GEOGRAPHY DETAILS</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./RETAILERCATEGORY.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">RETAILER CATEGORY</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="./SALESCRITERIA.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SALES CRITERIA</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./SLABS.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SLABS</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="./REMARKSATTACHMENTS.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">REMARKS & ATTACHMENTS</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link  " href="./SchemesListview.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SCHEMES DETAILS</div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>



                                <!-- Repeater Html Start -->


                                <!-- Repeater End -->

                                <!-- <div class="card radius-10">
                                    <div class="card-header bg-transparent">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h6 class="mb-0">Retailers (6) | Legend : <span class="text-success"><i class="lni lni-checkmark"></i> Inclusive</span> <span class="text-danger"><i class="lni lni-close"></i> Exclusive</span></h6>
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <button type="button" id="addButton" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table align-middle mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>CP Number</th>
                                                        <th>ID</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   

                                                    <tr>
                                                        <td>Test</td>
                                                        <td>#3235323</td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault1" checked>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault1">Default Switch</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Demo</td>
                                                        <td>#4234562</td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault1" checked>
                                                                <label class="form-check-label" for="flexSwitchCheckDefault1">Default Switch</label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> -->


                                <a href="" class="href">
                                    <button type="submit" class="btn btn-primary bx-pull-right">Next</button>
                                </a>
                                <button onclick="history.back()" type="btn" class="btn btn-danger bx-pull-right">Back</button>



                            </div>
                        </div>










                    </div>
                </div>
            </div>

        </div>


        <!--  -->



    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="Retailers" class="form-label">Retailers </label>
                                <input type="text" class="form-control" id="Retailers" name="Retailers">
                            </div>
                            <div class="mb-3 col-md-12">
                                <button type="submit" class="btn btn-warning ">Search</button>
                            </div>
                        </div>
                    </form>
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

    <!--end wrapper-->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--extraJS-->
    <script src="../assets/extraJS/metismenu/js/metisMenu.min.js"></script>
    <script src="../assets/extraJS/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/extraJS/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/extraJS/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/extraJS/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <!--app JS-->
    <script src="../assets/js/app.js"></script>




    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script>
        // Function to filter and save table data
        function filterAndSaveData() {
            const tableRows = document.querySelectorAll("table tbody tr");
            const filteredData = [];

            tableRows.forEach((row) => {
                const checkbox = row.querySelector("input[type='checkbox']");
                if (checkbox && checkbox.checked) {
                    // If the checkbox is checked, save the row's data
                    const cpNumber = row.querySelector("td:nth-child(1)").textContent;
                    const id = row.querySelector("td:nth-child(2)").textContent;
                    const status = row.querySelector("label[for='flexSwitchCheckDefault1']").textContent;

                    filteredData.push({
                        cpNumber,
                        id,
                        status
                    });
                }
            });

            // Use the filteredData array as needed (e.g., send it to the server or perform actions with it)
            console.log(filteredData);
        }

        // Add a click event handler for the "Add" button
        const addButton = document.getElementById("addButton");
        addButton.addEventListener("click", filterAndSaveData);
    </script>


</body>

</html>