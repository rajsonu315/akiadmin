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
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Customer Support</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<!-- <button type="button" class="btn btn-primary">Settings</button> -->
			
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
                                        <th>User ID</th>
                                        <th>Problem Raised</th>
                                        <th>Created Date</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Issue XYZ</td>
                                        <td>2021/04/25</td>
                                        <td>Some remarks go here</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Issue ABC</td>
                                        <td>2021/07/25</td>
                                        <td>Additional remarks</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
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
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>


</body>

</html>