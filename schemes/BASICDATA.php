
<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
	<!--extraJS-->
	<link href="../assets/extraJS/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="../assets/extraJS/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../assets/extraJS/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../assets/extraJS/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />


	<!-- Bootstrap CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="../assets/css/app.css" rel="stylesheet">
	<link href="../assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="../assets/css/semi-dark.css" />
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
							<!-- <a href="./SchemesApprove.php" class="href">

								<button type="button" class="btn btn-warning px-5">Approve
									Schemes
								</button>

							</a> -->
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
                                <li class="nav-item" >
										<a class="nav-link active " href="./Schemes.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SCHEMES</div>
											</div>
										</a>
									</li>
									<!-- <li class="nav-item" >
										<a class="nav-link" href="COSTOBJECTS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title"> COST OBJECTS</div>
											</div>
										</a>
									</li> -->
									<li class="nav-item" >
										<a class="nav-link" href="GEOGRAPHYDETAILS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">GEOGRAPHY DETAILS</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link" href="RETAILERCATEGORY.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">RETAILER CATEGORY</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link" href="SCHEMECPS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SCHEME CPS</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link" href="SALESCRITERIA.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SALES CRITERIA</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link" href="SLABS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SLABS</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link " href="./REMARKSATTACHMENTS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">REMARKS & ATTACHMENTS</div>
											</div>
										</a>
									</li>


								</ul>


								<div class="table-responsive mt-5">
									<table id="example" class="table table-striped table-bordered" style="width:100%">
										<thead>
											<tr>
												<th>Name</th>
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
												<td>Product A</td>
												<td>Scheme 1</td>
												<td>3 months</td>
												<td>North Region</td>
												<td>North Region</td>

												<td>North Region</td>

												<td>Retailer Type 1</td>
												<td>
													<div class="col-md-12 mb-3">
														<select class="form-select" name="status">
															<option></option>
															<option value="status">status 1</option>
															<option value="status2">status 2</option>
															<option value="status3">status 3</option>
														</select>
													</div>
												</td>
												<td>


													<div class="d-flex order-actions">
														<!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="./RetailerDetailsEdit.php" class="href">
														<div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
														</div>
													</a>

												</div> -->

														<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
															<a href="" class="href">
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
	<script src="../assets/js/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<!--extraJS-->
	<script src="../assets/extraJS/metismenu/js/metisMenu.min.js"></script>
	<script src="../assets/extraJS/datatable/js/jquery.dataTables.min.js"></script>
	<script src="../assets/extraJS/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script src="../assets/extraJS/simplebar/js/simplebar.min.js"></script>
	<script src="../assets/extraJS/perfect-scrollbar/js/perfect-scrollbar.js"></script>

	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>

	<!--app JS-->
	<script src="../assets/js/app.js"></script>
</body>

</html>