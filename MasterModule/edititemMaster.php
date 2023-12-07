<?php include('../header.php'); ?>

<!--favicon-->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css'>


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
                        <li class="breadcrumb-item active" aria-current="page">Edit Customer Group</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <!--  -->
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg1 row-cols-xl-1">
            <div class="col mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="form-body mt-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="border border-3 p-4 rounded">
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="SchemeName" class="form-label">*Scheme Name:</label>
                                                    <input type="text" class="form-control" id="SchemeName" name="SchemeName" placeholder="Enter Scheme Name">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="SchemeType" class="form-label">*Scheme Type:</label>
                                                    <select class="form-select" id="SchemeType" name="SchemeType">
                                                        <option value="Option 1">Option 1</option>

                                                    </select>
                                                </div>

                                            </div>


                                            <!-- Add submit button -->
                                            <a href="#">
                                                <button type="button" class="btn btn-primary bx-pull-right">Submit</button>
                                            </a>
                                            <br><br>
                                        </form>
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
<?php include('../footer.php'); ?>
<script src='https://cdn.jsdelivr.net/momentjs/latest/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js'></script>

