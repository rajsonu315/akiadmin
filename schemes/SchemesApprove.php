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
								<li class="breadcrumb-item active" aria-current="page">Schemes Approve</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="">





						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase"></h6>
				<hr />
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Name</th>
										<th>Scheme ID</th>
										<th>Scheme Type</th>
										<th>Scheme Owner</th>
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
												<select class="form-select"  name="status">
													<option></option>
													<option value="status">status 1</option>
													<option value="status2">status 2</option>
													<option value="status3">status 3</option>
												</select>
											</div>
										</td>
										<td>
											<button class="btn  btn-secondary">view</button>
                                            <button class="btn btn-success">Approve</button>
                                            <button class="btn btn-danger">Reject</button>

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
		<!--end page wrapper -->
		<?php include('../footer.php'); ?>