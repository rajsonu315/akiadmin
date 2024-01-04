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
                                <a class="nav-link  " href="./SchemesListview.php">
                                    <div class="d-flex align-items-center">

                                        <div class="tab-title">SCHEMES DETAILS</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link  " href="./Schemes.php">
                                    <div class="d-flex align-items-center">

                                        <div class="tab-title">SCHEMES</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="./GEOGRAPHYDETAILS.php">
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



                        </ul>



                        <div class="card radius-10">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Country</th>
                                                <th>State</th>
                                                <th>Region</th>
                                                <th>Area</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>ind</td>
                                                <td>delhi</td>
                                                <td>delhi</td>
                                                <td>delhi

                                                </td>
                                            </tr>
                                            <tr>

                                                <td>ind</td>
                                                <td>delhi</td>
                                                <td>delhi</td>
                                                <td>delhi

                                                </td>
                                            </tr>
                                            <tr>

                                                <td>ind</td>
                                                <td>delhi</td>
                                                <td>delhi</td>
                                                <td>delhi

                                                </td>
                                            </tr>
                                            <tr>

                                                <td>ind</td>
                                                <td>delhi</td>
                                                <td>delhi</td>
                                                <td>delhi

                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>





                        <!-- <a href="RETAILERCATEGORY.php" class="href">
                                    <button type="submit" class="btn btn-warning  bx-pull-right">Next</button>
                                </a>
                                <button onclick="history.back()" type="btn" class="btn btn-danger bx-pull-right">Back</button>
 -->



                    </div>
                </div>
            </div>

        </div>


        <!--  -->

    </div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>