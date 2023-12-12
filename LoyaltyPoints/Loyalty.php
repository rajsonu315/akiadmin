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

										<div class="tab-title">Loyalty</div>
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

										<div class="tab-title">Loyalty Points</div>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  " href="./PointsRedemption.php">
									<div class="d-flex align-items-center">

										<div class="tab-title">Points Redemption</div>
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
													<label for="SchemeName" class="form-label">Loyalty Program Name:</label>
													<input type="text" class="form-control" id="SchemeName" name="SchemeName" placeholder="Enter Scheme Name">
												</div>



												<div class="mb-3 col-md-6">
													<label for="Validity" class="form-label">*Validity:</label>
													<input type="text" class="form-control" name="datetimes" />

												</div>
												<div class="mb-3 col-md-6">
													<label for="SchemeOwner" class="form-label">Loyalty Points Expiry months.</label>
													<input type="date" class="form-control" id="SchemeOwner" name="SchemeOwner" placeholder="Enter Scheme Type">
												</div>

											</div>
			







											<!-- Add submit button -->
											<a href="Customer.php">
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



<script src='https://cdn.jsdelivr.net/momentjs/latest/moment.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js'></script>
