<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->




	<title>Loyalty Points</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
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
								<li class="breadcrumb-item active" aria-current="page">Loyalty Points</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export </button>
							<a href="./LoyaltyPointsAddNew.php" class="href">
							<button type="button" class="btn btn-warning px-5">Add New + </button>
							</a>

						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Product ID</th>
										<th>Product Name</th>
										<th>Price</th>
										<th>Category</th>
										<th>Points Calculated</th>
										<th>Remarks</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Product A</td>
										<td>$100.00</td>
										<td>Category 1</td>
										<td>50</td>
										<td>Good product</td>
										<td>

											<div class="d-flex order-actions">
												<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="" class="href">
														<div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
														</div>
													</a>

												</div>

												<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="" class="href">
														<div class="font-22 "> <i class="lni lni-eye"></i>
														</div>
													</a>

												</div>

												<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
												<button class="delete-button">
														<a href="#" class="href">
															<div class="font-22 text-danger"> <i class="lni lni-trash"></i>
															</div>
														</a>

													</button>

												</div>

											</div>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Product B</td>
										<td>$75.00</td>
										<td>Category 2</td>
										<td>30</td>
										<td>Excellent</td>
										<td>


											<div class="d-flex order-actions">
												<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="#" class="href">
														<div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
														</div>
													</a>

												</div>

												<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="#" class="href">
														<div class="font-22 "> <i class="lni lni-eye"></i>
														</div>
													</a>

												</div>

												<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">


													<button class="delete-button">
														<a href="#" class="href">
															<div class="font-22 text-danger"> <i class="lni lni-trash"></i>
															</div>
														</a>

													</button>

												</div>
											</div>



										</td>
									</tr>
									<!-- Add more rows with data as needed -->
								</tbody>
							</table>

						</div>
					</div>
				</div>

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
	<?php include('footer.php'); ?>


	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>



</body>

</html>