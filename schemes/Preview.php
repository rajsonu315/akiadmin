<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
 
    <title> Schemes</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Schemes</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="">
                            <a href="SchemesApprove.php" class="href">

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
                                        <a class="nav-link" href="./COSTOBJECTS.php">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title"> COST OBJECTS</div>
                                            </div>
                                        </a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
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
                                        <a class="nav-link" href="./SCHEMECPS.php">
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
                                        <a class="nav-link active" href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">REMARKS & ATTACHMENTS</div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>


                                <div class="row">
                                    <div class="col-xl-12 mx-auto">

                                        <div class="card">
                                            <div class="card-body">

                                                <div class="col-md-12">





                                                    <div class="table-responsive ">
                                                        <table class="table table-striped table-bordered" style="width:100%">
                                                            <strong>SCHEMES</strong>
                                                            <thead>
                                                                <tr>
                                                                    <th>Scheme Name</th>
                                                                    <th>Scheme Type:</th>
                                                                    <th>Scheme Owner.</th>
                                                                    <th>Validity:</th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Product A</td>
                                                                    <td>Scheme 1</td>
                                                                    <td>3 months</td>
                                                                    <td>North Region</td>

                                                                </tr>

                                                                <!-- Add more rows as needed -->
                                                            </tbody>

                                                        </table>
                                                    </div>

                                                    <div class="table-responsive ">
                                                        <table class="table table-striped table-bordered" style="width:100%">
                                                            <strong>GEOGRAPHY DETAILS</strong>
                                                            <thead>
                                                                <tr>
                                                                    <th>Country</th>
                                                                    <th>State</th>
                                                                    <th>Region</th>
                                                                    <th>Area</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Product A</td>
                                                                    <td>Scheme 1</td>
                                                                    <td>3 months</td>
                                                                    <td>North Region</td>

                                                                </tr>

                                                                <!-- Add more rows as needed -->
                                                            </tbody>

                                                        </table>
                                                    </div>

                                                    <div class="table-responsive ">
                                                        <table class="table table-striped table-bordered" style="width:100%">
                                                            <strong>RETAILER CATEGORY</strong>
                                                            <thead>
                                                                <tr>
                                                                    <th>Channel</th>
                                                                    <th>Sub Channel</th>
                                                                    <th>Type</th>
                                                                    <th>Outlet</th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Product A</td>
                                                                    <td>Scheme 1</td>
                                                                    <td>3 months</td>
                                                                    <td>North Region</td>

                                                                </tr>

                                                                <!-- Add more rows as needed -->
                                                            </tbody>

                                                        </table>
                                                    </div>

                                                    <div class="table-responsive ">
                                                        <table class="table table-striped table-bordered" style="width:100%">
                                                            <strong>SALES CRITERIA</strong>
                                                            <thead>
                                                                <tr>
                                                                    <th>Company:</th>
                                                                    <th>Category:</th>
                                                                    <th>Category-1:</th>
                                                                    <th>Category </th>
                                                                    <th>Brand: </th>
                                                                    <th>Sub brand:</th>
                                                                    <th>SKU</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Product A</td>
                                                                    <td>Scheme 1</td>
                                                                    <td>3 months</td>
                                                                    <td>Product A</td>
                                                                    <td>Scheme 1</td>
                                                                    <td>3 months</td>
                                                                    <td>3 months</td>


                                                                </tr>

                                                                <!-- Add more rows as needed -->
                                                            </tbody>

                                                        </table>
                                                    </div>

                                                    <div class="table-responsive ">
                                                        <table class="table table-striped table-bordered" style="width:100%">
                                                            <strong>SLABS</strong>
                                                            <thead>
                                                                <tr>
                                                                    <th>Calculation Type</th>
                                                                    <th>Scheme Type</th>
                                                                    <th>FOC Type</th>
                                                                    <th>Type quantity/value</th>
                                                                    <th>UOM </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Product A</td>
                                                                    <td>Scheme 1</td>
                                                                    <td>3 months</td>
                                                                    <td>North Region</td>
                                                                    <td>North Region</td>






                                                                </tr>

                                                                <!-- Add more rows as needed -->
                                                            </tbody>

                                                        </table>
                                                    </div>





                                                    <div class="d-md-flex d-grid align-items-center gap-3 mt-5 ">
                                                        <button type="button" class="btn btn-primary px-4">Submit</button>


                                                        <button onclick="history.back()" type="button" class="btn btn-danger bx-pull-right">Back</button>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->










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
    <?php include('../footer.php'); ?>

</body>

</html>