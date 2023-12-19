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
                                        <form action="#" method="post">

                                            <div class="row">

                                                <div class="col-md-3 mb-3 ">


                                                    <label>Territory Level 1:</label>
                                                    <select class="selectpicker" name="Territory" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Company" id="Company">

                                                        <option value="Company">Company 1</option>
                                                        <option value="Company2">Company 2</option>
                                                        <option value="Company3">Company 3</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-md-3 mb-3 ">


                                                    <label>Territory Level 2:</label>
                                                    <select class="selectpicker" name="Territory" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Company" id="Company">

                                                        <option value="Company">Company 1</option>
                                                        <option value="Company2">Company 2</option>
                                                        <option value="Company3">Company 3</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-md-3 mb-3 ">


                                                    <label>Territory Level 3:</label>
                                                    <select class="selectpicker" name="Territory" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Company" id="Company">

                                                        <option value="Company">Company 1</option>
                                                        <option value="Company2">Company 2</option>
                                                        <option value="Company3">Company 3</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3 ">


                                                    <label>Channel:</label>
                                                    <select class="selectpicker" name="Channel" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Company" id="Company">

                                                        <option value="Company">Company 1</option>
                                                        <option value="Company2">Company 2</option>
                                                        <option value="Company3">Company 3</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3 ">


                                                    <label>Select Customer:</label>
                                                    <select class="selectpicker" name="Select Customer" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Company" id="Company">

                                                        <option value="Company">Company 1</option>
                                                        <option value="Company2">Company 2</option>
                                                        <option value="Company3">Company 3</option>
                                                    </select>
                                                </div>

                                                <!-- Add submit button -->
                                                <a href="LoyaltyPoints.php">
                                                    <button type="button" class="btn btn btn-warning px-5 bx-pull-right">Next</button>
                                                </a>



                                                <br><br>
                                        </form>


                                    </div>

                                </div>

                            </div><!--end row-->
                        </div>




                        <!-- <a href="SALESCRITERIA.php" class="href">
									<button type="submit" class="btn btn-primary bx-pull-right">Next</button>
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
<?php include('../../footer.php'); ?>



<!--app JS-->
