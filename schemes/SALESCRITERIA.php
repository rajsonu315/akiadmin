<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css'>


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
					<a href="./SchemesApprove.php" class="href">

						<button type="button" class="btn btn-warning px-5">Approve
							Schemes
						</button>

					</a>
					<!-- <a href="./SchemeCreateNew.php" class="href">
								<button type="button" class="btn btn-warning px-5">+ Create New
									Scheme
								</button>
							</a> -->
					<a href="#" class="href">
						<button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export </button>

					</a>




				</div>
			</div>
		</div>
		<!--end breadcrumb-->



		<!--  -->


		<div class="row row-cols-1 row-cols-md-1 row-cols-lg1 row-cols-xl-1">
			<div class="col">

				<div class="card">
					<div class="card-body">
						<ul class="nav  nav-pills mb-3" role="tablist">

							<li class="nav-item">
								<a class="nav-link  " href="#">
									<div class="d-flex align-items-center">

										<div class="tab-title">SCHEMES</div>
									</div>
								</a>
							</li>
							<!-- <li class="nav-item">
										<a class="nav-link" href="COSTOBJECTS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title"> COST OBJECTS</div>
											</div>
										</a>
									</li> -->
							<li class="nav-item">
								<a class="nav-link" href="#">
									<div class="d-flex align-items-center">

										<div class="tab-title">GEOGRAPHY DETAILS</div>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<div class="d-flex align-items-center">

										<div class="tab-title">RETAILER CATEGORY</div>
									</div>
								</a>
							</li>
							<!-- <li class="nav-item">
										<a class="nav-link" href="SCHEMECPS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SCHEME CPS</div>
											</div>
										</a>
									</li> -->
							<li class="nav-item">
								<a class="nav-link active" href="#">
									<div class="d-flex align-items-center">

										<div class="tab-title">SALES CRITERIA</div>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<div class="d-flex align-items-center">

										<div class="tab-title">SLABS</div>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="#">
									<div class="d-flex align-items-center">

										<div class="tab-title">REMARKS & ATTACHMENTS</div>
									</div>
								</a>
							</li>


						</ul>

						<form action="SLABS.php" class="needs-validation" novalidate>


							<div class="row">




								<div class="col-md-3 mb-3 ">


									<label>Company:</label>
									<select class="selectpicker form-control" required data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Company" id="Company">

										<option value="Company">Company 1</option>
										<option value="Company2">Company 2</option>
										<option value="Company3">Company 3</option>
									</select>
								</div>

								<div class="col-md-3 mb-3 ">

									<label>Category:</label>
									<select class="selectpicker form-control" required data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Category" id="Category">

										<option value="Category">Category 1</option>
										<option value="Category2">Category 2</option>
										<option value="Category3">Category 3</option>
									</select>
								</div>

								<div class="col-md-3 mb-3 ">

									<label>Category-1:</label>
									<select class="selectpicker form-control" required id="Category1" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="status">

										<option value="Category">Category 1</option>
										<option value="Category2">Category 2</option>
										<option value="Category3">Category 3</option>
									</select>
								</div>
								<div class="col-md-3 mb-3 ">

									<label>Category-2:</label>
									<select class="selectpicker form-control" required id="Category2" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Category">

										<option value="Category">Category 1</option>
										<option value="Category2">Category 2</option>
										<option value="Category3">Category 3</option>
									</select>
								</div>
								<div class="col-md-3 mb-3 ">

									<label>Category-3:</label>
									<select class="selectpicker form-control" required id="Category3" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Category">

										<option value="Category">Category 1</option>
										<option value="Category2">Category 2</option>
										<option value="Category3">Category 3</option>
									</select>
								</div>


								<div class="col-md-3 mb-3 ">

									<label>Brand:</label>
									<select class="selectpicker form-control" required id="Brand" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Brand">

										<option value="Brand">Brand 1</option>
										<option value="Brand2">Brand 2</option>
										<option value="Brand3">Brand 3</option>
									</select>
								</div>

								<div class="col-md-3 mb-3 ">

									<label>Sub brand:</label>
									<select class="selectpicker form-control" required id="Sub_brand" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Sub_brand">

										<option value="Sub_brand">Sub_brand 1</option>
										<option value="Sub_brand2">Sub_brand 2</option>
										<option value="Sub_brand3">Sub_brand 3</option>
									</select>
								</div>

								<div class="col-md-3 mb-3 ">

									<label>SKU:</label>
									<select class="selectpicker form-control" required id="SKU" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="SKU">

										<option value="SKU">SKU 1</option>
										<option value="SKU2">SKU 2</option>
										<option value="SKU3">SKU 3</option>
									</select>
								</div>
							</div>

							<button type="submit" class="btn btn-warning  bx-pull-right">Next</button>

							<button onclick="history.back()" type="btn" class="btn btn-danger bx-pull-right">Back</button>



						</form>




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
	$(document).ready(function() {

		var i = 1;


		$("#add").click(function() {




			i++;
			$('#dynamic_field').append(`<tr>
                <td>




				<div class="row">

<div class="col-md-4">
	<div class="form-group">
		<label for="field" class="hidden-md">Item No</label>
		<input type="text" id="field" class="form-control" name="field[]" />
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Banner</label>
		<select class="selectpicker form-control" required name="status">
			
			<option value="status">status 1</option>
			<option value="status2">status 2</option>
			<option value="status3">status 3</option>
		</select>
	</div>
</div>
<div class="col-md-3">
	<div class="form-group">
		<label for="field" class="hidden-md">Item Min</label>
		<input type="text" id="field" class="form-control" name="field[]" />
	</div>
</div>

<div class="col-md-1">
	<div class="form-group">
	<button type="button" name="remove" class="btn btn-danger btn_remove" style="margin-top: 20px;">X</button>


	</div>
</div>
</div>










                </td>
            </tr>
        `);
		});

		$(document).on('click', '.btn_remove', function() {

			$(this).closest('tr').remove();


			var button_id = $(this).attr("id");
			$('#row' + button_id + '').remove();
		});




	});
</script>