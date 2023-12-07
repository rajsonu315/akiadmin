<?php include('header.php'); ?>


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
                                <li class="breadcrumb-item active" aria-current="page">Permissions Access Control Edit</li>
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
                        <h5 class="card-title">Edit </h5>
                        <hr>
                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">
                                        <!-- Existing form fields (Product Title, Description, Product Images) -->
                                        <!-- ... -->
                                        <!-- Add Name -->
                                        <div class="mb-3">
                                            <label for="inputName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter Name">
                                        </div>
                                        <!-- Add Role -->
                                        <div class="mb-3">
                                            <label for="inputRole" class="form-label">Role</label>
                                            <input type="text" class="form-control" id="inputRole" name="role" placeholder="Enter Role">
                                        </div>
                                        <!-- Add Email -->
                                        <div class="mb-3">
                                            <label for="inputEmail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter Email">
                                        </div>
                                        <!-- Add Passport Copy -->
                                        <div class="mb-3">
                                            <label for="inputPassportCopy" class="form-label">Passport Copy</label>
                                            <input type="file" class="form-control" id="inputPassportCopy" name="passport_copy">
                                        </div>
                                        <!-- Add Mobile No. -->
                                        <div class="mb-3">
                                            <label for="inputMobileNo" class="form-label">Mobile No.</label>
                                            <input type="text" class="form-control" id="inputMobileNo" name="mobile_no" placeholder="Enter Mobile No.">
                                        </div>
                                        <!-- Existing form fields (Description, Product Images) -->
                                        <!-- ... -->

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!--end row-->
                        </div>



                    </div>
                </div>


            </div>
        </div>
        <!--end page wrapper -->
        <?php include('footer.php'); ?>