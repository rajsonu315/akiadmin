<?php include('header.php'); ?>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css'>


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
                        <li class="breadcrumb-item active" aria-current="page">edit </li>
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

                                            <label for="" class="form-label"> Type</label>


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

                                        <div class="mb-3 col-md-3">
                                            <label for="SchemeName" class="form-label">Title:</label>
                                            <input type="text" class="form-control" id="SchemeName" name="SchemeName" placeholder="Enter Scheme Name">
                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="SchemeName" class="form-label">Upload File:</label>
                                            <input type="file" class="form-control" id="SchemeName" name="SchemeName" placeholder="Enter Scheme Name">
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label for="Validity" class="form-label">Date:</label>
                                            <input type="text" id="Validity" class="form-control" name="datetimes" />
                                        </div>

                                        <div class="col-md-3 mb-3">

                                            <label for="" class="form-label"> chanel</label>


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

                                        <div class="mb-3 col-md-12">
                                            <label for="input11" class="form-label">Resion </label>
                                            <textarea class="form-control" id="input11" placeholder="Resion  ..." rows="3"></textarea>
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

<script src='https://cdn.jsdelivr.net/momentjs/latest/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js'></script>




<script>
	$(document).ready(function() {
		$("input[name='datetimes']").daterangepicker({
			minDate: moment().startOf('day') // Set minDate to the current date
		}, function(start, end, label) {
			// This function is triggered when a date range is selected
			let startDate = start.format("YYYY-MM-DD").toString();
			let endDate = end.format("YYYY-MM-DD").toString();

			// Uncomment these lines to update the selected dates immediately
			// document.getElementById("startDate").innerHTML = "Start date: " + startDate;
			// document.getElementById("endDate").innerHTML = "End date: " + endDate;
		});

		// Display selected dates on button click
		$("#showDateRange").on("click", function() {
			let selectedDates = $("input[name='datetimes']").val();
			$("#selectedDates").text("Selected Dates: " + selectedDates);
		});
	});
</script>