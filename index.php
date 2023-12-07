<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->

	<title> Admin Dashboard</title>


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
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
					<div class="col">
						<div class="card radius-10 border-success border-start border-0 border-4">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Revenue</p>
										<h4 class="my-1 text-success">45</h4>
									</div>
									<div class="text-success ms-auto font-35"><i class="bx bx-phone-call"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10  border-warning border-start border-0 border-4">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Sales</p>
										<h4 class="text-warning my-1">35</h4>
									</div>
									<div class="text-warning ms-auto font-35"><i class="bx bx-user-pin"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 border-danger border-start border-0 border-4">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Returns</p>
										<h4 class="my-1 text-danger">2</h4>
									</div>
									<div class="text-danger ms-auto font-35"><i class="bx bx-comment-detail"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div><!--end row-->

				<div class="row">
					<div class="col-12 col-lg-8">
						<div class="card radius-10">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Sales Overview</h6>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="chart-container-0">
									<canvas id="chart1"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card radius-10">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<div>
										<h6 class="mb-0">Trending Products</h6>
									</div>
									<div class="dropdown ms-auto">
										<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a>
											</li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a>
											</li>
											<li>
												<hr class="dropdown-divider">
											</li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="chart-container-0">
									<canvas id="chart2"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div><!--end row-->



				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h6 class="mb-0">Best Selling Products</h6>
							</div>

						</div>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>S.No.</th>
										<th>Item Name </th>
										<th>Category</th>
										<th>Channel</th>
										<th>Price</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Apple</td>
										<td>9405822</td>
										<td></td>
										<td>1250.00</td>

									</tr>

									<tr>
										<td>2</td>
										<td>Apple</td>
										<td>8304620</td>
										<td>Apple</td>
										<td>1500.00</td>

									</tr>

									<tr>
										<td>3</td>
										<td>Apple</td>
										<td>4736890</td>
										<td></td>
										<td>1400.00</td>

									</tr>

									<tr>
										<td>4</td>
										<td>Apple</td>
										<td>8543765</td>
										<td></td>
										<td>1200.00</td>

									</tr>
									<tr>
										<td>5</td>
										<td>Apple</td>
										<td>9629240</td>
										<td>Apple</td>
										<td>1500.00</td>

									</tr>
									<tr>
										<td>6</td>
										<td>Apple</td>
										<td>8506790</td>
										<td></td>
										<td>1800.00</td>

									</tr>
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
		<!--Start Back To Top Button-->
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

	<?php include('footer.php'); ?>



	<script src="assets/extraJS/chartjs/js/Chart.min.js"></script>


	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>



	<script>
		$(function() {
			"use strict";


			// chart 1

			var ctx = document.getElementById("chart1").getContext('2d');

			var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
			gradientStroke1.addColorStop(0, '#6078ea');
			gradientStroke1.addColorStop(1, '#17c5ea');

			var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
			gradientStroke2.addColorStop(0, '#ff8359');
			gradientStroke2.addColorStop(1, '#ffdf40');

			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
					datasets: [{
						label: 'A',
						data: [65, 59, 80, 81, 65, 59, 80, 60, 59],
						borderColor: '#008cff',
						backgroundColor: '#008cff',
						hoverBackgroundColor: '#008cff',
						pointRadius: 0,
						fill: false,
						borderWidth: 0
					}, {
						label: 'B',
						data: [50, 48, 55, 45, 37, 58, 64, 50, 54],
						borderColor: '#ffc107',
						backgroundColor: '#ffc107',
						hoverBackgroundColor: '#ffc107',
						pointRadius: 0,
						fill: false,
						borderWidth: 0
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						position: 'bottom',
						display: true,
						labels: {
							boxWidth: 40
						}
					},
					tooltips: {
						displayColors: false,
					},
					scales: {
						xAxes: [{
							barPercentage: .5
						}]
					}
				}
			});


			// chart 2

			var ctx = document.getElementById("chart2").getContext('2d');

			var myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: ["a", "b", "c"],
					datasets: [{
						backgroundColor: [
							'#008cff',
							'#fd3550',
							'#15ca20'
						],
						hoverBackgroundColor: [
							'#008cff',
							'#fd3550',
							'#15ca20'
						],
						data: [45, 40, 25],
						borderWidth: [1, 1, 1]
					}]
				},
				options: {
					maintainAspectRatio: false,
					cutoutPercentage: 75,
					legend: {
						position: 'bottom',
						display: true,
						labels: {
							boxWidth: 20
						}
					},
					tooltips: {
						displayColors: false,
					}
				}
			});



			// worl map






		});
	</script>
</body>

</html>