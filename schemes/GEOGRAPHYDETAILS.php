<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css'>




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
                        <form action="RETAILERCATEGORY.php" class="needs-validation" novalidate>

                            <div class="row">




                                <div class="col-md-3 mb-3">

                                    <label for=""> Country</label>


                                    <select class="selectpicker form-control" required id="Country" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                        <option value="1-2">Option 1.2</option>
                                        <option value="2-3">Option 1.3</option>
                                        <option value="3-2">Option 1.2</option>
                                        <option value="4-3">Option 1.3</option>
                                        <option value="5-2">Option 1.2</option>
                                        <option value="6-3">Option 1.3</option>
                                        <option value="1-2">Option 1.2</option>
                                        <option value="2-3">Option 1.3</option>
                                        <option value="3-2">Option 1.2</option>
                                        <option value="4-3">Option 1.3</option>
                                        <option value="5-2">Option 1.2</option>
                                        <option value="6-3">Option 1.3</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        this field is required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for=""> State</label>
                                    <select class="selectpicker form-control" required id="State" name="status" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                        <option value="status">status 1</option>
                                        <option value="status2">status 2</option>
                                        <option value="status3">status 3</option>
                                        <option value="status2">status 2</option>
                                        <option value="status3">status 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        this field is required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for=""> Region</label>
                                    <select class="selectpicker form-control" required id="Region" name="status" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                        <option value="status">status 1</option>
                                        <option value="status2">status 2</option>
                                        <option value="status3">status 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        this field is required
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for=""> Area</label>
                                    <select class="selectpicker form-control" required id="Area" name="status" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                        <option value="status">status 1</option>
                                        <option value="status2">status 2</option>
                                        <option value="status3">status 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        this field is required
                                    </div>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-warning  bx-pull-right">Next</button>

                            <button onclick="history.back()" type="btn" class="btn btn-danger bx-pull-right">Back</button>




                        </form>









                    </div>
                </div>
            </div>

        </div>


        <!--  -->

    </div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js'></script>