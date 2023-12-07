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
                                <li class="breadcrumb-item active" aria-current="page">Create New Beat </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <!-- <button type="button" class="btn btn-primary">Back</button> -->

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
                                    <form action="<?php echo $base_url; ?>BeatManagement/">

                                      
                                            <div class="mb-3">
                                                <label for="inputMobileNo" class="form-label">Beat Name</label>
                                                <input type="text" class="form-control"  id="inputMobileNo" name="mobile_no">
                                            </div>
                                            <div class="mb-3">
                                            
                                            <label for="inputName" class="form-label">Beat Type </label>
                                            <select class="form-select" name="BeatType">
                                                <option value="">Select</option>
                                                <option value="B2B">B2B</option>
                                                <option value="Presales">Presales</option>
                                                <option value="Van">Van</option>
                                            </select>
                                        </div>
                                            <div class="row">
                                                <div class="d-flex justify-content-star t">
                                                    <button type="submit" class="btn btn-success pb-2">Submit</button>

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
        <?php include('../footer.php'); ?>