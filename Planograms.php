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
                                <li class="breadcrumb-item active" aria-current="page">Planograms</li>
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
                                        <!-- Add Name -->
                                        <div class="mb-3">
                                            <label for="inputName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter Name">
                                        </div>

                                        <!-- Add Retailer Type (Dropdown Select) -->
                                        <div class="mb-3">
                                            <label for="inputRetailerType" class="form-label">Retailer Type</label>
                                            <select class="form-select" id="inputRetailerType" name="retailer_type">
                                                <option value="type1">Salesman</option>
                                                <option value="type2">Telecaller</option>
                                                <option value="type3">Merchandiser</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>



                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-warning ">Save Changes</button>
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