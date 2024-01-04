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
                        <li class="breadcrumb-item active" aria-current="page">MSL Create </li>
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
                                    <div class="mb-3">
                                        <label class="form-label">Customer Group</label>
                                        <select class="selectpicker form-control" nam="CustomerGroup" id="Category3" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Validity:">

                                            <option value="Validity:">Validity: 1</option>
                                            <option value="Validity:2">Validity: 2</option>
                                            <option value="Validity:3">Validity: 3</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="selectpicker form-control" nam="Category" id="Category3" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Validity:">

                                            <option value="Validity:">Validity: 1</option>
                                            <option value="Validity:2">Validity: 2</option>
                                            <option value="Validity:3">Validity: 3</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Brand</label>
                                        <select class="selectpicker form-control" nam="Brands" id="Category3" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Validity:">

                                            <option value="Validity:">Validity: 1</option>
                                            <option value="Validity:2">Validity: 2</option>
                                            <option value="Validity:3">Validity: 3</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">SKU</label>
                                        <select class="selectpicker form-control" nam="SKU" id="Category3" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Validity:">

                                            <option value="Validity:">Validity: 1</option>
                                            <option value="Validity:2">Validity: 2</option>
                                            <option value="Validity:3">Validity: 3</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">MSL</label><br />
                                        <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">YES</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                    </div>
                                   
                                    </div>
                                 



                                    <div class="row">
                                        <div class="d-flex justify-content-star t">
                                            <button type="submit" class="btn btn-warning  pb-2">Submit</button>
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