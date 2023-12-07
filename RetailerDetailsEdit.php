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
                        <li class="breadcrumb-item active" aria-current="page">Retailers Details Edit</li>
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
                        <div class="border border-3 p-4 rounded">
                            <form action="process_form.php" method="post">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputName" class="form-label">Name:</label>
                                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputEmail" class="form-label">Email-Id:</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter Email-Id">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputMobileNo" class="form-label">Mobile no.:</label>
                                        <input type="text" class="form-control" id="inputMobileNo" name="mobile_no" placeholder="Enter Mobile no.">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputKYC" class="form-label">KYC Documents:</label>
                                        <input type="file" class="form-control" id="inputMobileNo" name="mobile_no" placeholder="Enter Mobile no.">

                                        <a href="#" id="downloadKYC">Download</a>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputBillToAddress" class="form-label">Bill-to address:</label>
                                        <select class="form-select" id="inputRetailerType" name="retailer_type">
                                            <option value="Option 1">Option 1</option>
                                            <!-- Add more options here -->
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputShipToAddresses" class="form-label">Ship-to addresses:</label>
                                        <select class="form-select" id="inputRetailerType" name="retailer_type">
                                            <option value="Option 1">Option 1</option>
                                            <!-- Add more options here -->
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputRetailerType" class="form-label">Retailer Type:</label>
                                        <select class="form-select" id="inputRetailerType" name="retailer_type">
                                            <option value="Option 1">Option 1</option>
                                            <!-- Add more options here -->
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputCreditLimit" class="form-label">Assigned Credit limit:</label>
                                        <input type="text" class="form-control" id="inputCreditLimit" name="credit_limit" placeholder="Enter Assigned Credit limit">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputWhatsappNo" class="form-label">Whatsapp no.:</label>
                                        <input type="text" class="form-control" id="inputArea1" name="Whatsapp" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputArea1" class="form-label">Area 1:</label>
                                        <input type="text" class="form-control" id="inputArea1" name="area1" placeholder="Enter Area 1">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputArea2" class="form-label">Area 2:</label>
                                        <input type="text" class="form-control" id="inputArea2" name="area2" placeholder="Enter Area 2">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputLandmark" class="form-label">Landmark:</label>
                                        <input type="text" class="form-control" id="inputLandmark" name="landmark" placeholder="Enter Landmark">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputEmirate" class="form-label">Emirate:</label>
                                        <input type="text" class="form-control" id="inputLandmark" name="landmark" placeholder="Enter Landmark">

                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputShopLandline" class="form-label">Shop Landline No.:</label>
                                        <input type="text" class="form-control" id="inputShopLandline" name="shop_landline" placeholder="Enter Shop Landline No.">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputGeoCoordinate" class="form-label">Geo Coordinate of bill-to-address:</label>
                                        <input type="text" class="form-control" id="inputShopLandline" name="shop_landline" placeholder="Enter Shop Landline No.">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div><!--end row-->
                </div>





            </div>
        </div>


    </div>
</div>
<!--end page wrapper -->
<?php include('footer.php'); ?>