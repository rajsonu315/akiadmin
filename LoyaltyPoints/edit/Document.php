<?php include('../../header.php'); ?>


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
								<a class="nav-link  " href="./Loyalty.php">
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
								<a class="nav-link active" href="./Document.php">
									<div class="d-flex align-items-center">

										<div class="tab-title">Document</div>
									</div>
								</a>
							</li>




						</ul>


						<div class="row">
							<div class="col-xl-9 mx-auto">

								<div class="card">
									<div class="card-body">
										<form action="" method="post">
											<label for="">upload banner image</label> <br>
											<input id="fancy-file-upload" class="form-control" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png">

											<div class="mb-3 col-md-12">
												<label for="input11" class="form-label"></label>
												<textarea class="form-control" id="input11" placeholder="Description " rows="3"></textarea>
											</div>
											<div class="col-md-12">
												<div class="d-md-flex d-grid align-items-center gap-3 mt-5 ">


													<button type="button" class="btn btn btn-warning px-5 bx-pull-right">Submit</button>

												</div>
											</div>
										</form>

									</div>
								</div>
							</div>
						</div>



					</div>
				</div>
			</div>

		</div>


		<!--  -->

	</div>
</div>
<!--end page wrapper -->
<?php include('../../footer.php'); ?>



