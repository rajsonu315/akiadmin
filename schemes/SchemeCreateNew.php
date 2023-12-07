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
                        <li class="breadcrumb-item active" aria-current="page">Schemes Create New</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">

                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="#" method="post">

                                    <div class="row">
                                        <strong>Define Scheme:
                                        </strong>

                                        <div class="mb-3 col-md-6">
                                            <label for="inputRegion" class="form-label">Region:</label>
                                            <select class="form-select" id="inputRegion" name="region">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more region options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputCity" class="form-label">City:</label>
                                            <select class="form-select" id="inputCity" name="city">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more city options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputState" class="form-label">State:</label>
                                            <select class="form-select" id="inputState" name="state">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more state options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputRetailerType" class="form-label">Retailer Type:</label>
                                            <select class="form-select" id="inputRetailerType" name="retailer_type">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more retailer type options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputExcludeRetailers" class="form-label">Exclude Retailers:</label>
                                            <select class="form-select" id="inputExcludeRetailers" name="exclude_retailers">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more exclude retailers options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputIncludeRetailers" class="form-label">Include Retailers:</label>
                                            <select class="form-select" id="inputIncludeRetailers" name="include_retailers">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more include retailers options here -->
                                            </select>
                                        </div>

                                        <strong>Define Product
                                            Process:
                                        </strong>

                                        <div class="mb-3 col-md-6">
                                            <label for="inputSelectCategory" class="form-label">Select Category:</label>
                                            <select class="form-select" id="inputSelectCategory" name="select_category">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more category options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSelectBrand" class="form-label">Select Brand:</label>
                                            <select class="form-select" id="inputSelectBrand" name="select_brand">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more brand options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSelectSubCategory" class="form-label">Select Sub-category:</label>
                                            <select class="form-select" id="inputSelectSubCategory" name="select_subcategory">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more sub-category options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSelectFamily" class "form-label">Select Family:</label>
                                            <select class="form-select" id="inputSelectFamily" name="select_family">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more family options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSelectSubFamily" class="form-label">Select Sub-Family:</label>
                                            <select class="form-select" id="inputSelectSubFamily" name="select_subfamily">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more sub-family options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSelectCompany" class="form-label">Select Company:</label>
                                            <select class="form-select" id="inputSelectCompany" name="select_company">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more company options here -->
                                            </select>
                                        </div>

                                        <strong>Define UOM Process:</strong>

                                        <div class="mb-3 col-md-6">
                                            <label for="inputUOMType" class="form-label">UOM Type:</label>
                                            <select class="form-select" id="inputUOMType" name="uom_type">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more UOM type options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSaleCategory" class="form-label">Sale Category:</label>
                                            <select class="form-select" id="inputSaleCategory" name="sale_category">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more sale category options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSaleItemUOM" class="form-label">Sale Item UOM:</label>
                                            <select class="form-select" id="inputSaleItemUOM" name="sale_item_uom">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more sale item UOM options here -->
                                            </select>
                                        </div>


                                        <div class="mb-3 col-md-6">
                                            <label for="inputSKUCode" class="form-label">SKU Code:</label>
                                            <input type="text" class="form-control" id="inputSKUCode" name="sku_code" placeholder="Enter SKU Code">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputMinItemQuant" class="form-label">Min Item Quantity:</label>
                                            <input type="number" class="form-control" id="inputMinItemQuant" name="min_item_quantity" placeholder="Enter Minimum Item Quantity">
                                        </div>


                                        <div class="mb-3 col-md-6 mt-2"><br>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">FOCs</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Discount Based</label>
                                            </div>
                                        </div>




                                        <strong>Define Slab Process:</strong>

                                        <div class="mb-3 col-md-6">
                                            <label for="inputSlabType" class="form-label">Slab Type:</label>
                                            <select class="form-select" id="inputSlabType" name="slab_type">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more slab type options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSlabRule" class="form-label">Slab Rule:</label>
                                            <select class="form-select" id="inputSlabRule" name="slab_rule">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more slab rule options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSKUCode" class="form-label">SKU Code:</label>
                                            <input type="text" class="form-control" id="inputSKUCode" name="sku_code" placeholder="Enter SKU Code">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputFromQuantity" class="form-label">From Quantity:</label>
                                            <input type="number" class="form-control" id="inputFromQuantity" name="from_quantity" placeholder="Enter From Quantity">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputToQuantity" class="form-label">To Quantity:</label>
                                            <input type="number" class="form-control" id="inputToQuantity" name="to_quantity" placeholder="Enter To Quantity">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputFOCType" class="form-label">FOC Type:</label>
                                            <select class="form-select" id="inputFOCType" name="foc_type">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more FOC type options here -->
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputDiscountType" class="form-label">Discount Type:</label>
                                            <select class="form-select" id="inputDiscountType" name="discount_type">
                                                <option value="Option 1">Option 1</option>
                                                <!-- Add more discount type options here -->
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="inputSchemeName" class="form-label">Scheme Name:</label>
                                            <input type="text" class="form-control" id="inputSchemeName" name="scheme_name" placeholder="Enter Scheme Name">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSchemeType" class="form-label">Scheme Type:</label>
                                            <input type="text" class="form-control" id="inputSchemeType" name="scheme_type" placeholder="Enter Scheme Type">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label for="inputSchemeValidityDate" class="form-label">Scheme Validity Date:</label>
                                            <input type="date" class="form-control" id="inputSchemeValidityDate" name="scheme_validity_date">
                                        </div>

                                    </div>







                                    <!-- Add submit button -->
                                    <button type="submit" class="btn btn-primary bx-pull-right">Submit</button>
                                    <button type="btn" class="btn btn-danger bx-pull-right">Back</button>

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
<?php include('../footer.php'); ?>