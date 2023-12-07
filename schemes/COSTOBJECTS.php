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
		
                                <li class="nav-item" >
										<a class="nav-link  " href="#">
											<div class="d-flex align-items-center">

												<div class="tab-title">SCHEMES</div>
											</div>
										</a>
									</li>
									<!-- <li class="nav-item" >
										<a class="nav-link active" href="COSTOBJECTS.php">
											<div class="d-flex align-items-center">

												<div class="tab-title"> COST OBJECTS</div>
											</div>
										</a>
									</li> -->
									<li class="nav-item" >
										<a class="nav-link" href="#">
											<div class="d-flex align-items-center">

												<div class="tab-title">GEOGRAPHY DETAILS</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link" href="#">
											<div class="d-flex align-items-center">

												<div class="tab-title">RETAILER CATEGORY</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link" href="#">
											<div class="d-flex align-items-center">

												<div class="tab-title">SCHEME CPS</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link" href="#">
											<div class="d-flex align-items-center">

												<div class="tab-title">SALES CRITERIA</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link" href="#">
											<div class="d-flex align-items-center">

												<div class="tab-title">SLABS</div>
											</div>
										</a>
									</li>
									<li class="nav-item" >
										<a class="nav-link " href="#">
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
		<?php include('../footer.php'); ?>