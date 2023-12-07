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
						<li class="breadcrumb-item active" aria-current="page">Schemes</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="">
					<a href="SchemesApprove.php" class="href">

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
								<a class="nav-link active  " href="./Schemes.php">
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
								<a class="nav-link" href="./SALESCRITERIA.php">
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

						<div class="form-body mt-4">
							<div class="row">
								<div class="col-lg-12">
									<div class="border border-3 p-4 rounded">
										<form action="#" method="post">

											<div class="row">
												<h5 class="mb-2"><strong>HEADER:</strong></h5>

												<div class="mb-3 col-md-6">
													<label for="SchemeName" class="form-label">*Scheme Name:</label>
													<input type="text" class="form-control" readonly id="SchemeName" name="SchemeName" placeholder="Enter Scheme Name">
												</div>
												<div class="mb-3 col-md-6">
													<label for="SchemeType" class="form-label">*Scheme Type:</label>
													<select class="form-select" id="SchemeType" name="SchemeType">
														<option value="Option 1">Option 1</option>

													</select>
												</div>
												<div class="mb-3 col-md-6">
													<label for="SchemeOwner" class="form-label">Scheme Owner.</label>
													<input type="text" class="form-control" readonly id="SchemeOwner" name="SchemeOwner" placeholder="Enter Scheme Type">
												</div>

												<div class="mb-3 col-md-6">
													<label for="Validity" class="form-label">*Validity:</label>
													<input type="text" class="form-control" readonly name="datetimes" />

												</div>

											</div>
											<hr />
											<div class="row mt-4">


												<div class="mb-3 col-md-12">
													<label for="input11" class="form-label">Objective</label>
													<textarea class="form-control" readonly id="input11" placeholder="Objective ..." rows="3"></textarea>
												</div>







											</div>







											<!-- Add submit button -->
											<!-- <a href="GEOGRAPHYDETAILS.php">
														<button type="button" class="btn btn-primary bx-pull-right">Next</button>
													</a> -->



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
<script src='https://cdn.jsdelivr.net/momentjs/latest/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js'></script>







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
