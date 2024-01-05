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
                        <li class="breadcrumb-item active" aria-current="page">Schemes</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="">
                    <a href="./Schemes.php" class="href">

                        <button type="button" class="btn btn-warning px-5">Scheme Create New

                        </button>

                    </a>
                    <!-- <a href="./SchemeCreateNew.php" class="href">
								<button type="button" class="btn btn-warning px-5">+ Create New
									Scheme
								</button>
							</a> -->





                </div>
            </div>
        </div>
        <!--end breadcrumb-->



        <!--  -->


        <div class="row row-cols-1 row-cols-md-1 row-cols-lg1 row-cols-xl-1">
            <div class="col">

                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-3 pb-2">
                                <label>Scheme ID:</label>
                                <select class="selectpicker form-control" id="one" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">

                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>


                                </select>

                            </div>

                            <div class="col-md-3 pb-2">
                                <label>Scheme ID:</label>

                                <select class="selectpicker form-control" id="two" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">

                                </select>
                            </div>


                            <div class="col-md-3 pb-2">
                                <label>Scheme ID:</label>
                                <select class="selectpicker form-control" id="one" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">

                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>

                                </select>

                            </div>


                            <div class="col-md-3 pb-2">
                                <label>Scheme ID:</label>

                                <select class="selectpicker form-control" id="two" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">

                                </select>
                            </div>

                            <div class="col-md-3 mb-3 ">


                                <label>Scheme ID::</label>
                                <select class="selectpicker form-control" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Scheme ID:" id="Company">

                                    <option value="Scheme ID:">Scheme ID: 1</option>
                                    <option value="Scheme ID:2">Scheme ID: 2</option>
                                    <option value="Scheme ID:3">Scheme ID: 3</option>
                                </select>
                            </div>

                            <div class="col-md-3 mb-3  ">

                                <label>Scheme Type::</label>
                                <select class="selectpicker form-control" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Scheme Type:" id="Category">

                                    <option value="Scheme Type:">Scheme Type: 1</option>
                                    <option value="Scheme Type:2">Scheme Type: 2</option>
                                    <option value="Scheme Type:3">Scheme Type: 3</option>
                                </select>
                            </div>

                            <div class="col-md-3 mb-3 ">

                                <label>DMS Division::</label>
                                <select class="selectpicker form-control" id="Category1" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="DMS Division:">

                                    <option value="DMS Division:">DMS Division: 1</option>
                                    <option value="DMS Division:2">DMS Division: 2</option>
                                    <option value="DMS Division:3">DMS Division: 3</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3 ">

                                <label>Created on:</label>
                                <select class="selectpicker form-control" id="Category2" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category">

                                    <option value="Created on:">Created on: 1</option>
                                    <option value="Created on:2">Created on: 2</option>
                                    <option value="Created on:3">Created on: 3</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3 ">

                                <label>Validity:</label>
                                <select class="selectpicker form-control" id="Category3" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Validity:">

                                    <option value="Validity:">Validity: 1</option>
                                    <option value="Validity:2">Validity: 2</option>
                                    <option value="Validity:3">Validity: 3</option>
                                </select>
                            </div>


                            <div class="col-md-4 mb-3 ">

                                <label>Status::</label>
                                <select class="selectpicker form-control" id="Brand" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Status:">

                                    <option value="Status:">Status: 1</option>
                                    <option value="Status:2">Status: 2</option>
                                    <option value="Status:3">Status: 3</option>
                                </select>
                            </div>

                            <div class="col-md-4 mb-3 ">

                                <label>Approval Status::</label>
                                <select class="selectpicker form-control" id="Sub_brand" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Approval_Status:">

                                    <option value="Approval Status:">Approval Status: 1</option>
                                    <option value="Approval Status:2">Approval Status: 2</option>
                                    <option value="Approval Status:3">Approval Status: 3</option>
                                </select>
                            </div>









                        </div>





                        <!-- ////////////////////////////// -->

                        <div class="table-responsive mt-5">






                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>Scheme ID</th>
                                        <th>Scheme Type</th>
                                        <th>Scheme Owne</th>
                                        <th>Date of creation </th>
                                        <th>Start date</th>
                                        <th>ActTo dateions</th>
                                        <th>Status</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>




                                    <tr>

                                        <td>Scheme 1</td>
                                        <td>3 months</td>
                                        <td>North Region</td>
                                        <td>North Region</td>

                                        <td>North Region</td>

                                        <td>Retailer Type 1</td>
                                        <td> <span class="badge rounded-pill bg-success">Approve</span>

                                        </td>

                                        <td>
                                            <span class="badge rounded-pill btn-warning " data-bs-toggle="modal" data-bs-target="#Clarification">Clarification</span>
                                            <span class="badge rounded-pill btn-outline-danger" data-bs-toggle="modal" data-bs-target="#Rejected">Rejected</span>


                                            <div class="d-flex order-actions">
                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <a href="../schemesedit/Schemes.php" class="href">
                                                        <div class="font-22 "> <i class="lni lni-pencil-alt"></i>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <a href="../SchemesListview/SchemesListview.php" class="href">
                                                        <div class="font-22 "> <i class="lni lni-eye"></i>
                                                        </div>
                                                    </a>

                                                </div>

                                                <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
        <button class="delete-button">
        <a href="#" class="href">
            <div class="font-22 text-danger"> <i class="lni lni-trash"></i>
            </div>
        </a>

    </button>

</div> -->
                                            </div>


                                        </td>
                                    </tr>


                                    <!-- Add more rows as needed -->
                                </tbody>

                            </table>
                        </div>


                        <!-- /////////////////////////////// -->




                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <!-- Button trigger modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="Rejected" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title ">Query Raised</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <form id="jQueryValidationForm" method="post3" action="">


                                                    <div class="row mb-3">
                                                        <label for="input40" class="col-sm-3 col-form-label"> Query Raised</label>
                                                        <div class="col-sm-9">
                                                            <textarea required class="form-control" id="input40" name="query_raised" rows="3" placeholder="Query Raised"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9">
                                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                                <button type="submit" class="btn btn-warning  px-4" name="submit2">Submit</button>
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <!-- Button trigger modal -->

                                <!-- Modal -->
                                <div class="modal fade" id="Clarification" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title ">Query Raised</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">

                                                <form id="jQueryValidationForm" method="post3" action="">


                                                    <div class="row mb-3">
                                                        <label for="input40" class="col-sm-3 col-form-label"> Query Raised</label>
                                                        <div class="col-sm-9">
                                                            <textarea required class="form-control" id="input40" name="query_raised" rows="3" placeholder="Query Raised"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9">
                                                            <div class="d-md-flex d-grid align-items-center gap-3">

                                                                <button type="submit" class="btn btn-warning  px-4" name="submit2">Submit</button>
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>
            </div>

        </div>


        <!--  -->

    </div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>

<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js'></script>



<script>
    // Wait for the document to be ready
    $(document).ready(function() {
        // Handle the change event of the first select
        $('#one').on('change', function() {
            // Clear existing options in the second select
            $('#two').empty();

            // Get the selected values from the first select
            var selectedValues = $(this).val();

            console.log(selectedValues);

            // Add options to the second select based on the selected values
            if (selectedValues) {
                for (var i = 0; i < selectedValues.length; i++) {
                    $('#two').append('<option value="' + selectedValues[i] + '">' + selectedValues[i] + '</option>');
                }
            }

            // Refresh the second select to update its appearance
            $('#two').selectpicker('refresh');
        });
    });
</script>