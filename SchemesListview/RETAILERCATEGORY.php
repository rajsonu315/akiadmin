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

	<link rel="stylesheet" href="../assets/dist/css/bootstrap-multiselect.css" type="text/css">
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
							<a href="./SchemeCreateNew.php" class="href">
								<button type="button" class="btn btn-warning px-5">+ Create New
									Scheme
								</button>
							</a>
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
										<a class="nav-link active " href="./RETAILERCATEGORY.php">
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

									<li class="nav-item">
										<a class="nav-link  " href="./SchemesListview.php">
											<div class="d-flex align-items-center">

												<div class="tab-title">SCHEMES DETAILS</div>
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
														<th>Channel</th>
														<th>Sub Channel</th>
														<th>Type:</th>
														<th>Outlet:</th>

													</tr>
												</thead>
												<tbody>
													<tr>

														<td>ind</td>
														<td>delhi</td>
														<td>delhi</td>
														<td>delhi

														</td>
													</tr>
													<tr>

														<td>ind</td>
														<td>delhi</td>
														<td>delhi</td>
														<td>delhi

														</td>
													</tr>
													<tr>

														<td>ind</td>
														<td>delhi</td>
														<td>delhi</td>
														<td>delhi

														</td>
													</tr>
													<tr>

														<td>ind</td>
														<td>delhi</td>
														<td>delhi</td>
														<td>delhi

														</td>
													</tr>


												</tbody>
											</table>
										</div>
									</div>
								</div>




								<!-- <a href="SALESCRITERIA.php" class="href">
									<button type="submit" class="btn btn-primary bx-pull-right">Next</button>
								</a>
								<button onclick="history.back()" type="btn" class="btn btn-danger bx-pull-right">Back</button>
 -->



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

	<script type="text/javascript" src="../assets/docs/js/bootstrap.bundle-4.5.2.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<!--extraJS-->
	<script src="../assets/extraJS/metismenu/js/metisMenu.min.js"></script>
	<script src="../assets/extraJS/datatable/js/jquery.dataTables.min.js"></script>
	<script src="../assets/extraJS/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script src="../assets/extraJS/simplebar/js/simplebar.min.js"></script>
	<script src="../assets/extraJS/perfect-scrollbar/js/perfect-scrollbar.js"></script>

	<script type="text/javascript" src="../assets/dist/js/bootstrap-multiselect.js"></script>

	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>

	<!--app JS-->
	<script src="../assets/js/app.js"></script>

	<script>
		$(document).ready(function() {
			var i = 1;

			// Initial Multiselect initialization
			$('#channel, #sub-channel, #type-channel , #outletChannel').multiselect({
				nonSelectedText: 'Select ',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,
				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});

			$("#add").click(function() {
				i++;

				// Dynamic IDs for the new row
				var dynamicIds = {
					channel: 'channel' + i,
					subChannel: 'sub-channel' + i,
					typeChannel: 'type-channel' + i,
					outletChannel: 'outletChannel' + i
				};

				// Append the new row with dynamic IDs
				$('#dynamic_field').append(`
            <tr>
                <td>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Channel</label>
                            <select class="form-select" name="Channel" id="${dynamicIds.channel}" multiple="multiple">
                                <option value="Channel">GT</option>
                                <option value="Channel2">MT</option>
                                <option value="Channel3">Self Service</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Sub Channel</label>
                            <select class="form-select" name="subChannel" id="${dynamicIds.subChannel}" multiple="multiple">
                                <option value="status">Channel 1</option>
                                <option value="status2">Channel 2</option>
                                <option value="status3">Channel 3</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Type:</label>
                            <select class="form-select" id="${dynamicIds.typeChannel}" name="TypeChannel" multiple="multiple">
                                <option value="TypeChannel">Merge Geographical</option>
                                <option value="TypeChannel2">Retailer into One</option>
                                <option value="TypeChannel3">Retailer Category</option>
                            </select>
                        </div>
						<div class="col-md-2 mb-3">
                            <label>Type:</label>
                            <select class="form-select" id="${dynamicIds.outletChannel}" name="outletChannel" multiple="multiple">
							                                    <option value="outletChannel">outletChannel </option>
																<option value="outletChannel2">outletChannel2</option>
																<option value="outletChannel3">outletChannel3</option>
                            </select>
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

				// Reinitialize Multiselect for the new row
				$(`#${dynamicIds.channel}, #${dynamicIds.subChannel}, #${dynamicIds.typeChannel}, #${dynamicIds.outletChannel}`).multiselect({
					nonSelectedText: 'Select ',
					enableFiltering: true,
					enableCaseInsensitiveFiltering: true,
					enableClickableOptGroups: true,
					enableCollapsibleOptGroups: true,
					enableFiltering: true,
					includeSelectAllOption: true
				});
			});

			$(document).on('click', '.btn_remove', function() {
				$(this).closest('tr').remove();
			});
		});
	</script>


</body>

</html>