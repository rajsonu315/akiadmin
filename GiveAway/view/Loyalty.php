<?php include('../../header.php'); ?>

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

												<div class="col-md-6">
													<p for="SchemeName" class="form-label">Give away Program Name: test</p>
													<p>Type: test</p>
													<p for="Validity" class="form-label">Validity:01/01/2023</p>

												</div>

												<div class="col-md-6">
												<img src="../../assets/images/avatars/avatar-2.png" alt="" class="img-fluid">
												</div>


												<!-- Elements to show/hide based on dropdown value -->
												<div class="single-order-elements">
													<!-- Elements related to Single Order -->

													<br>

													<div class="mb-3 col-md-12">
														<label for="input11" class="form-label"></label>
														<textarea class="form-control" readonly id="input11" placeholder="Description " rows="8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, voluptate? Lorem ipsum dolor sit amet consectetur adipisicing elit. At et consectetur, quod hic, mollitia sed earum accusamus obcaecati eaque facere quae impedit soluta natus ex placeat? Mollitia, nisi ut iste provident placeat optio iusto officiis at. Error, obcaecati! Veniam magni dolore laudantium, at earum odit laborum nobis. Nobis modi deleniti id voluptates dolorum molestias ex distinctio est expedita veniam, placeat ratione, reiciendis fuga labore non repellat perspiciatis dicta ipsa necessitatibus quidem. Aspernatur quibusdam asperiores distinctio in quis, dignissimos adipisci accusamus fugit sapiente quia quam eum ut. Quo numquam enim dolore fuga, incidunt, sint neque excepturi, adipisci expedita minus praesentium eos.
		
	</textarea>
													</div>

												</div>








											</div>










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
<?php include('../../footer.php'); ?>