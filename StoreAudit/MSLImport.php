
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
                                <li class="breadcrumb-item active" aria-current="page"> MSL Import</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <!-- <button type="button" class="btn btn-warning ">Back</button> -->

                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-body p-4">

                        <div class="form-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">
                                        <form action="<?php echo $base_url; ?>StoreAudit/MSL.php">

                                            <!-- Add Name -->


                                            <div class="mb-3">
                                                <label for="inputMobileNo" class="form-label"><strong>Upload File</strong></label>
                                                <input type="file" class="form-control" id="inputMobileNo" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" name="mobile_no">
                                            </div>

                                            <div class="row">
                                                <div class="d-flex justify-content-star t">
                                                    <button type="submit" class="btn btn-warning  pb-2">Submit</button>

                                                    </a>

                                                </div>

                                            </div>
                                        </form>





                                    </div>
                                </div>
                            </div><!--end row-->
                        </div>





                    </div>
                </div>


            </div>
        </div>
        <!--end page wrapper -->

    <!--end wrapper-->
    <?php include('../footer.php'); ?>


