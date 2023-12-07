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
						<li class="breadcrumb-item active" aria-current="page">Reports</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="">


					<button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export Sales Report</button>
					<button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export User Report</button>
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
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
							</tr>
							<tr>
								<td>Garrett Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>2011/07/25</td>
								<td>$170,750</td>
							</tr>


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
<?php include('footer.php'); ?>