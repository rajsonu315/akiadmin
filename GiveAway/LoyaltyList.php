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
						<li class="breadcrumb-item active" aria-current="page"></li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">
					<button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export </button>
					<a href="./Loyalty.php" class="href">
						<button type="button" class="btn btn-warning px-5">Add New + </button>
					</a>

				</div>
			</div>
		</div>
		<!--end breadcrumb-->

		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<div aria-label="Page navigation example ">

						<div class="bx-pull-left">
							<select class="form-select" id="inputCategory" name="category">
								<option value="5">5
								</option>
								<option value="10">10
								</option>
								<option value="20">20
								</option>
								<option value="50">50
								</option>
							</select>
						</div>
						<ul class="  bx-pull-right">
							<input type="text" class="form-control" placeholder="search ...">

						</ul>
					</div>
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
											<a href="./edit/Loyalty.php" class="href">
												<div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
												</div>
											</a>

										</div>

										<div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
											<a href="./view/Loyalty.php" class="href">
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
				<nav aria-label="Page navigation example">
					<ul class="pagination round-pagination  bx-pull-right">
						<li class="page-item"><a class="page-link" href="javascript:;">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="javascript:;javascript:;">1</a>
						</li>
						<li class="page-item active"><a class="page-link" href="javascript:;">2</a>
						</li>
						<li class="page-item"><a class="page-link" href="javascript:;">3</a>
						</li>
						<li class="page-item"><a class="page-link" href="javascript:;">Next</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

	</div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>