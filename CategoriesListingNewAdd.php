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
                                <li class="breadcrumb-item active" aria-current="page">Add Categories Listing</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-body p-4">

                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">
                                        <form action="#" method="post">
                                            <!-- Existing form fields (Product Title, Description, Product Images) -->

                                            <div class="row">
                                                <!-- Add Category Selection -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputCategory" class="form-label">Select
                                                        Category</label>
                                                    <select class="form-select" id="inputCategory" name="category">
                                                        <option></option>
                                                        <option value="category1">Category 1</option>
                                                        <option value="category2">Category 2</option>
                                                        <option value="category3">Category 3</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputSubCategory" class="form-label">Select
                                                        Sub-Category</label>
                                                    <select class="form-select" id="inputSubCategory" name="sub_category">
                                                        <option></option>
                                                        <option value="sub_category1">Sub-Category 1</option>
                                                        <option value="sub_category2">Sub-Category 2</option>
                                                        <option value="sub_category3">Sub-Category 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Add Family and Sub-Family Selection -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputFamily" class="form-label">Select Family</label>
                                                    <select class="form-select" id="inputFamily" name="family">
                                                        <option></option>
                                                        <option value="family1">Family 1</option>
                                                        <option value="family2">Family 2</option>
                                                        <option value="family3">Family 3</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputSubFamily" class="form-label">Select
                                                        Sub-Family</label>
                                                    <select class="form-select" id="inputSubFamily" name="sub_family">
                                                        <option></option>
                                                        <option value="sub_family1">Sub-Family 1</option>
                                                        <option value="sub_family2">Sub-Family 2</option>
                                                        <option value="sub_family3">Sub-Family 3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <!-- Add Line -->
                                                <div class=" col-md-6 mb-3">
                                                    <label for="inputLine" class="form-label">Line</label>
                                                    <input type="text" class="form-control" id="inputLine" name="line" placeholder="Enter line">
                                                </div>

                                                <!-- Add Brand -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputBrand" class="form-label">Brand</label>
                                                    <input type="text" class="form-control" id="inputBrand" name="brand" placeholder="Enter brand">
                                                </div>
                                            </div>

                                            <div class="row">

                                                <!-- Add Brand Name -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputBrandName" class="form-label">Brand Name</label>
                                                    <input type="text" class="form-control" id="inputBrandName" name="brand_name" placeholder="Enter brand name">
                                                </div>

                                                <!-- Add Retailer Type -->
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputRetailerType" class="form-label">Retailer
                                                        Type</label>
                                                    <select class="form-select" id="inputRetailerType" name="retailer_type">
                                                        <option></option>
                                                        <option value="type1">Type 1</option>
                                                        <option value="type2">Type 2</option>
                                                        <option value="type3">Type 3</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <!-- Add submit button -->
                                            <button type="submit" class="btn btn-warning  bx-pull-right">Submit</button>
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
        <!--end page wrapper -->
        <?php include('footer.php'); ?>