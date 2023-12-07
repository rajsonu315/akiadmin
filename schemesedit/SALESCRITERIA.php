<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->


	<title> Schemes</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
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

								<div class="row">




									<div class="col-md-3 mb-3 ">


										<label>Company:</label>
										<select class="selectpicker" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Company" id="Company">

											<option value="Company">Company 1</option>
											<option value="Company2">Company 2</option>
											<option value="Company3">Company 3</option>
										</select>
									</div>

									<div class="col-md-3 mb-3 ">

										<label>Category:</label>
										<select class="selectpicker" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Category" id="Category">

											<option value="Category">Category 1</option>
											<option value="Category2">Category 2</option>
											<option value="Category3">Category 3</option>
										</select>
									</div>

									<div class="col-md-3 mb-3 ">

										<label>Category-1:</label>
										<select class="selectpicker" id="Category1" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="status">

											<option value="Category">Category 1</option>
											<option value="Category2">Category 2</option>
											<option value="Category3">Category 3</option>
										</select>
									</div>
									<div class="col-md-3 mb-3 ">

										<label>Category-2:</label>
										<select class="selectpicker" id="Category2" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Category">

											<option value="Category">Category 1</option>
											<option value="Category2">Category 2</option>
											<option value="Category3">Category 3</option>
										</select>
									</div>
									<div class="col-md-3 mb-3 ">

										<label>Category-3:</label>
										<select class="selectpicker" id="Category3" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Category">

											<option value="Category">Category 1</option>
											<option value="Category2">Category 2</option>
											<option value="Category3">Category 3</option>
										</select>
									</div>


									<div class="col-md-3 mb-3 ">

										<label>Brand:</label>
										<select class="selectpicker" id="Brand" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Brand">

											<option value="Brand">Brand 1</option>
											<option value="Brand2">Brand 2</option>
											<option value="Brand3">Brand 3</option>
										</select>
									</div>

									<div class="col-md-3 mb-3 ">

										<label>Sub brand:</label>
										<select class="selectpicker" id="Sub_brand" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="Sub_brand">

											<option value="Sub_brand">Sub_brand 1</option>
											<option value="Sub_brand2">Sub_brand 2</option>
											<option value="Sub_brand3">Sub_brand 3</option>
										</select>
									</div>

									<div class="col-md-3 mb-3 ">

										<label>SKU:</label>
										<select class="selectpicker" id="SKU" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)" name="Category" name="SKU">

											<option value="SKU">SKU 1</option>
											<option value="SKU2">SKU 2</option>
											<option value="SKU3">SKU 3</option>
										</select>
									</div>







								</div>



								<!-- <form class="" name="add_name" id="add_name">
									<button type="button" class="shadow-sm  cursor-pointer rounded border-0 bx-pull-right">
										<div class="font-18  " id="add"> <i class="lni lni-plus"></i>
										</div>

									</button>
									<table class="table table-bordered table-hover" id="dynamic_field">
										<td>
											<div class="row" style="align-items: center;">
												<div class="col-md-12 dynamic-field" id="dynamic-field-1">
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
																<select class="form-select" name="status">

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

															</div>
														</div>
													</div>
												</div>

											</div>
										</td>

									</table>
								</form> -->


								<a href="SLABS.php" class="href">
									<button type="submit" class="btn btn-primary bx-pull-right">Next</button>
								</a>
								<button onclick="history.back()" type="btn" class="btn btn-danger bx-pull-right">Back</button>



							</div>
						</div>
					</div>

				</div>


				<!--  -->

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<?php include('../footer.php'); ?>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js'></script>


	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>

	<!--app JS-->




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
		<select class="form-select" name="status">
			
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



	<script type="text/javascript">
		$(document).ready(function() {
			$('#Company').multiselect({
				nonSelectedText: 'Select Company',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,

				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});
			$('#Category').multiselect({
				nonSelectedText: 'Select Category',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,

				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});
			$('#Category1').multiselect({
				nonSelectedText: 'Select Category1',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,

				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});
			$('#Category2').multiselect({
				nonSelectedText: 'Select Category2',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,

				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});

			$('#Category3').multiselect({
				nonSelectedText: 'Select Category3',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,

				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});





			$('#Brand').multiselect({
				nonSelectedText: 'Select Brand',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,

				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});

			$('#Sub_brand').multiselect({
				nonSelectedText: 'Select Sub brand',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,

				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});

			$('#SKU').multiselect({
				nonSelectedText: 'Select SKU',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,

				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});
		});
	</script>
</body>

</html>