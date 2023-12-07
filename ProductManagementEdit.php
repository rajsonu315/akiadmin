<!--favicon-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />



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
                        <li class="breadcrumb-item active" aria-current="page">Product Management Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <!-- <button type="button" class="btn btn-primary">Settings</button> -->

                </div>

            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <hr>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="border border-3 p-4 rounded">

                                <form action="" method="post">
                                    <div class="row">
                                        <!-- <div class="mb-3 col-md-6">
                                                    <label for="inputProductName" class="form-label">Product
                                                        Name</label>
                                                    <input type="text" class="form-control" id="inputProductName" name="product_name" placeholder="Enter product name">
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="inputProductTitle" class="form-label">Product Item
                                                        Code</label>
                                                    <input type="text" class="form-control" id="inputProductTitle" name="Item_Code" placeholder="Item Code">
                                                </div> -->





                                        <div class="mb-2">
                                            <label for="small-bootstrap-class-multiple-field" class="form-label"> Select Retailer Types:</label>
                                            <select class="form-select form-select-md" data-placeholder="Choose anything" name="Retailer" id="small-bootstrap-class-multiple-field" multiple>
                                                <option>Christmas Island</option>
                                                <option>South Sudan</option>
                                                <option>Jamaica</option>
                                                <option>Kenya</option>
                                                <option>French Guiana</option>
                                                <option>Mayotta</option>
                                                <option>Liechtenstein</option>
                                                <option>Denmark</option>
                                                <option>Eritrea</option>
                                                <option>Gibraltar</option>
                                                <option>Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option>Haiti</option>
                                                <option>Namibia</option>
                                                <option>South Georgia and the South Sandwich Islands</option>
                                                <option>Vietnam</option>
                                                <option>Yemen</option>
                                                <option>Philippines</option>
                                                <option>Benin</option>
                                                <option>Czech Republic</option>
                                                <option>Russia</option>
                                            </select>
                                        </div>





                                        <div class="mb-2">
                                            <label for="Exclude_Retailer" class="form-label"> Exclude Retailer:</label>
                                            <select class="form-select form-select-md" name="Exclude_Retailer" data-placeholder="Choose anything" id="Exclude_Retailer" multiple>
                                                <option>Christmas Island</option>
                                                <option>South Sudan</option>
                                                <option>Jamaica</option>
                                                <option>Kenya</option>
                                                <option>French Guiana</option>
                                                <option>Mayotta</option>
                                                <option>Liechtenstein</option>
                                                <option>Denmark</option>
                                                <option>Eritrea</option>
                                                <option>Gibraltar</option>
                                                <option>Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option>Haiti</option>
                                                <option>Namibia</option>
                                                <option>South Georgia and the South Sandwich Islands</option>
                                                <option>Vietnam</option>
                                                <option>Yemen</option>
                                                <option>Philippines</option>
                                                <option>Benin</option>
                                                <option>Czech Republic</option>
                                                <option>Russia</option>
                                            </select>
                                        </div>



                                    </div>


                                    <div class="row">
                                        <div class="col-4 mb-3 mt-5">
                                            <div class="d-grid">
                                                <button type="btn" class="btn btn-primary">Save Product</button>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-3 mt-5">
                                            <div class="d-grid">
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>



                                <!-- Add Product Name -->

                                <!-- <div class="row">
                                           
                                            <div class="col-md-6 mb-3">
                                                <label for="inputCategory" class="form-label">Select Category</label>
                                                <select class="form-select" id="inputCategory" name="category">
                                                    <option></option>
                                                    <option value="category1">Category 1</option>
                                                    <option value="category2">Category 2</option>
                                                    <option value="category3">Category 3</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="inputCategory" class="form-label">Select
                                                    Sub-Category</label>
                                                <select class="form-select" id="inputCategory" name="category">
                                                    <option></option>
                                                    <option value="category1">Category 1</option>
                                                    <option value="category2">Category 2</option>
                                                    <option value="category3">Category 3</option>
                                                </select>
                                            </div>
                                        </div> -->
                                <!-- <div class="row">
                                         
                                            <div class="col-md-6 mb-3">
                                                <label for="inputCategory" class="form-label">Select Family</label>
                                                <select class="form-select" id="inputCategory" name="category">
                                                    <option></option>
                                                    <option value="category1">Category 1</option>
                                                    <option value="category2">Category 2</option>
                                                    <option value="category3">Category 3</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="inputCategory" class="form-label">Select Sub-Family</label>
                                                <select class="form-select" id="inputCategory" name="category">
                                                    <option></option>
                                                    <option value="category1">Category 1</option>
                                                    <option value="category2">Category 2</option>
                                                    <option value="category3">Category 3</option>
                                                </select>
                                            </div>
                                        </div> -->

                                <!-- Add Product ID -->
                                <!-- <div class="mb-3">
                                            <label for="inputProductPrice" class="form-label">Case Count</label>
                                            <input type="text" class="form-control" id="inputProductPrice"
                                                name="inputProductPrice" placeholder="Enter product Price">
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputProductPrice" class="form-label">Bar Code</label>
                                            <input type="text" class="form-control" id="inputProductPrice"
                                                name="inputProductPrice" placeholder="Enter product Price">
                                        </div> -->
                                <!-- Existing form fields (Description, Product Images) -->
                                <!-- ... -->
                                <!-- <div class="mb-3">
                                            <label for="imageForProduct" class="form-label">Upload Image for
                                                Product</label>
                                            <input type="file" class="form-control" id="imageForProduct"
                                                name="image_for_product">
                                        </div> -->

                            </div>
                        </div>
                        <div class="col-lg-4 d-none">
                            <div class="border border-3 p-4 rounded">
                                <!-- Existing form fields (Price, Compare at Price, Cost Per Price, Star Points, Product Type, Vendor, Collection, Product Tags) -->
                                <!-- ... -->
                                <!-- Add Schemes/Discount -->
                                <!-- <div class="mb-3">
                                            <label for="inputSchemesDiscount" class="form-label">Schemes & Discount
                                                Offer</label>
                                            <input type="text" class="form-control" id="inputSchemesDiscount"
                                                name="schemes_discount" placeholder="Enter schemes/discounts">
                                        </div> -->
                                <!-- Add Stock Availability -->
                                <!-- <div class="mb-3">
                                            <label for="inputStockAvailability" class="form-label">Stock
                                                Availability</label>
                                            <input type="text" class="form-control" id="inputStockAvailability"
                                                name="stock_availability" placeholder="Enter stock availability">
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputStockAvailability" class="form-label">Price
                                            </label>
                                            <input type="text" class="form-control" id="inputStockAvailability"
                                                name="stock_availability" placeholder="Enter stock availability">
                                        </div> -->

                                <!-- Add User Access -->
                                <!-- Add User Access Dropdown -->


                                <!-- Existing Save Product Button -->

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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="assets/extraJS/select2/js/select2-custom.js"></script>






<!--app JS-->


<script type="text/javascript">
    $(document).ready(function() {
        $('#framework').multiselect({
            nonSelectedText: 'Select Framework',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '400px'
        });

    });
</script>





<script>
    $(function() {
        "use strict";

        $('#Exclude_Retailer').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
            dropdownParent: $('#Exclude_Retailer').parent(),
        });

        $('#small-bootstrap-class-multiple-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
            dropdownParent: $('#small-bootstrap-class-multiple-field').parent(),
        });
    });
</script>



