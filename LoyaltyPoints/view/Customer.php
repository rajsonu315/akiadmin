<?php include('../../header.php'); ?>



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
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ol>
                </nav>
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
                                <a class="nav-link  " href="./Loyalty.php">
                                    <div class="d-flex align-items-center">

                                        <div class="tab-title">Loyalty</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link  active" href="./Customer.php">
                                    <div class="d-flex align-items-center">

                                        <div class="tab-title">Customer</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./LoyaltyPoints.php">
                                    <div class="d-flex align-items-center">

                                        <div class="tab-title">Loyalty Points</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="./PointsRedemption.php">
                                    <div class="d-flex align-items-center">

                                        <div class="tab-title">Points Redemption</div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./Document.php">
                                    <div class="d-flex align-items-center">

                                        <div class="tab-title">Document</div>
                                    </div>
                                </a>
                            </li>




                        </ul>



                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="table-responsive">
                                            <div aria-label="Page navigation example ">

                                                <div class="bx-pull-left">
                                                    <select class="form-select" id="inputCategory" name="category">
                                                        <option value="5">5
                                                        </option>
                                                        <option value="10">10
                                                        </option>
                                                        <option value="20">20
                                                        </option>
                                                        <option value="50">50
                                                        </option>
                                                    </select>
                                                </div>
                                                <ul class="  bx-pull-right">
                                                    <input type="text" class="form-control" placeholder="search ...">

                                                </ul>
                                            </div>
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Territory Level 1:</th>
                                                        <th>Territory Level 2:</th>
                                                        <th>Territory Level 3:</th>
                                                        <th>Channel:</th>
                                                        <th>Select Customer:</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Product A</td>
                                                        <td>$100.00</td>
                                                        <td>Category 1</td>
                                                        <td>50</td>


                                                    </tr>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>Product A</td>
                                                        <td>$100.00</td>
                                                        <td>Category 1</td>
                                                        <td>50</td>


                                                    </tr>

                                                    <!-- Add more rows with data as needed -->
                                                </tbody>
                                            </table>

                                        </div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination round-pagination  bx-pull-right">
                                                <li class="page-item"><a class="page-link" href="javascript:;">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:;javascript:;">1</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:;">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:;">3</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:;">Next</a>
                                                </li>
                                            </ul>
                                        </nav>


                                    </div>

                                </div>

                            </div><!--end row-->
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <!--  -->

    </div>
</div>
<!--end page wrapper -->
<?php include('../../footer.php'); ?>