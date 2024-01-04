<?php include('../header.php'); ?>
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
						<li class="breadcrumb-item active" aria-current="page"></li>
					</ol>
				</nav>
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
								<a class="nav-link active " href="./Loyalty.php">
									<div class="d-flex align-items-center">

										<div class="tab-title">Give Away</div>
									</div>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link  " href="./Customer.php">
									<div class="d-flex align-items-center">

										<div class="tab-title">Customer</div>
									</div>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="./LoyaltyPoints.php">
									<div class="d-flex align-items-center">

										<div class="tab-title">Give Away Points</div>
									</div>
								</a>
							</li>


							<li class="nav-item">
								<a class="nav-link" href="./Document.php">
									<div class="d-flex align-items-center">

										<div class="tab-title">Document</div>
									</div>
								</a>
							</li>




						</ul>



						<div class="form-body mt-4">
							<div class="row">
								<div class="col-lg-12">
									<div class="border border-3 p-4 rounded">
										<form action="#" method="post">

											<div class="row">

												<div class="mb-3 col-md-6">
													<label for="SchemeName" class="form-label">Give away Program Name:</label>
													<input type="text" class="form-control" id="SchemeName" name="SchemeName" placeholder="Give away Program Name">
												</div>

												<div class="col-md-3 mb-3">
													<label>Type:</label>
													<select class="selectpicker form-control" name="Territory" data-actions-box="true" aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" name="Category" id="Company">

														<option value="Single_Order">Single Order </option>
														<option value="QPS">QPS</option>
													</select>
												</div>

												<!-- Elements to show/hide based on dropdown value -->
												<div class="single-order-elements" style="display: none;">
													<!-- Elements related to Single Order -->
													<div class="mb-3 col-md-6 ">
														<label for="Validity" class="form-label">*Validity:</label>
														<input type="text" class="form-control" name="datetimes" />

													</div>

												</div>

												<div class="qps-elements" style="display: none;">
													<!-- Elements related to QPS -->
													<div class="mb-3 col-md-6 ">
														<label for="Validity" class="form-label">*Validity:</label>
														<input type="text" class="form-control" name="datetimes" />

													</div>
												</div>

											</div>

											<!-- Add submit button -->
											<a href="#">
												<button type="button" class="btn btn btn-warning px-5 bx-pull-right">Next</button>
											</a>
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


		<!--  -->

	</div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>

<script>
	$(document).ready(function() {
		$("input[name='datetimes']").daterangepicker({},
			function(start, end, label) {
				let startDate = start.format("YYYY-MM-DD").toString();
				let endDate = end.format("YYYY-MM-DD").toString();

				// document.getElementById("startDate").innerHTML =
				// 	"Start date: " + startDate;
				// document.getElementById("endDate").innerHTML = "End date: " + endDate;

			}
		);
	});
</script>
<script>
	$('.QPSshow').hide();

	$(document).ready(function() {
		$('#Company').change(function() {
			var selectedValue = $(this).val();

			// Hide all related elements
			$('.single-order-elements, .qps-elements').hide();

			// Show elements based on selected value
			if (selectedValue === 'Single_Order') {
				$('.single-order-elements').show();
			} else if (selectedValue === 'QPS') {
				$('.qps-elements').show();
			}
		});
	});
</script>



<script src='https://cdn.jsdelivr.net/momentjs/latest/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js'></script>