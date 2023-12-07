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
										<a class="nav-link  " href="./SchemesListview.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SCHEMES DETAILS</div>
											</div>
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link  " href="./Schemes.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SCHEMES</div>
											</div>
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="./GEOGRAPHYDETAILS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">GEOGRAPHY DETAILS</div>
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="./RETAILERCATEGORY.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">RETAILER CATEGORY</div>
											</div>
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link active" href="./SALESCRITERIA.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SALES CRITERIA</div>
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="./SLABS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SLABS</div>
											</div>
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link " href="./REMARKSATTACHMENTS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">REMARKS & ATTACHMENTS</div>
											</div>
										</a>
									</li>



								</ul>






								<div class="card radius-10">

									<div class="card-body">
										<div class="table-responsive">
											<table class="table align-middle mb-0">
												<thead class="table-light">
													<tr>
														<th>Company:</th>
														<th>Category:</th>
														<th>Category-1:</th>
														<th>Category-2:</th>
														<th>Category-3:</th>
														<th>Brand:</th>
														<th>Sub brand:</th>
														<th>SKU:</th>

													</tr>
												</thead>
												<tbody>
													<tr>

														<td>ind</td>
														<td>delhi</td>
														<td>delhi</td>
														<td>delhi</td>
														<td>test</td>
														<td>test</td>
														<td>test</td>
														<td>test</td>

													</tr>



												</tbody>
											</table>
										</div>
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


								<!-- <a href="SLABS.php" class="href">
									<button type="submit" class="btn btn-primary bx-pull-right">Next</button>
								</a>
								<button onclick="history.back()" type="btn" class="btn btn-danger bx-pull-right">Back</button> -->



							</div>
						</div>
					</div>

				</div>


				<!--  -->

			</div>
		</div>
		<!--end page wrapper -->
		<?php include('../footer.php'); ?>








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
