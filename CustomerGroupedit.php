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
                        <li class="breadcrumb-item active" aria-current="page">Create Group edit</li>
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
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <!-- Add Name -->



                                <form action="?">


                                    <div class="row">

                                        <div class="col-md-3 mb-3">

                                            <label for=""> c1</label>


                                            <select class="selectpicker form-control" id="Country" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                                <option value="1-2">Option 1.2</option>
                                                <option value="2-3">Option 1.3</option>
                                                <option value="3-2">Option 1.2</option>
                                                <option value="4-3">Option 1.3</option>
                                                <option value="5-2">Option 1.2</option>
                                                <option value="6-3">Option 1.3</option>
                                                <option value="1-2">Option 1.2</option>
                                                <option value="2-3">Option 1.3</option>
                                                <option value="3-2">Option 1.2</option>
                                                <option value="4-3">Option 1.3</option>
                                                <option value="5-2">Option 1.2</option>
                                                <option value="6-3">Option 1.3</option>

                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for=""> c2</label>
                                            <select class="selectpicker form-control" id="State" name="status" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                                <option value="status">status 1</option>
                                                <option value="status2">status 2</option>
                                                <option value="status3">status 3</option>
                                                <option value="status2">status 2</option>
                                                <option value="status3">status 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for=""> c3</label>
                                            <select class="selectpicker form-control" id="Region" name="status" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                                <option value="status">status 1</option>
                                                <option value="status2">status 2</option>
                                                <option value="status3">status 3</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for=""> c4</label>
                                            <select class="selectpicker form-control" id="Area" name="status" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                                <option value="status">status 1</option>
                                                <option value="status2">status 2</option>
                                                <option value="status3">status 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex justify-content-star t">
                                            <button type="submit" class="btn btn-warning  pb-2">Create Group</button>

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
<?php include('footer.php'); ?>