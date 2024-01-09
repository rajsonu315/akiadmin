<?php include('header.php'); ?>

<style>
	#user_tbody tr:hover {
		background-color: #b69c6f;
		cursor: pointer;
	}

	/* The Modal (background) */
</style>


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
						<li class="breadcrumb-item active" aria-current="page">Payment Collection</li>
					</ol>
				</nav>
			</div>
			<div class="ms-auto">
				<div class="btn-group">


					<button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export</button>

				</div>
			</div>
		</div>
		<!--end breadcrumb-->



		<div class="card">
			<div class="card-body">





				<!-- <form id="formid" action="#" method="post" class="needs-validation" novalidate="">


					<div class="row mb-3">

						<div class="col-md-3">
							<div class="form-group mt-2">
								<label for="Channel" class="mb-1"><b>payment details</b></label>
								<select class="form-select" required="" id="Channel_" name="Channel_">
									<option selected="" disabled="" value="">Please Select</option>


									<option value="">Test</option>
								</select>
								<div class="invalid-feedback">
									this field is required
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group mt-2">
								<label for="Segment1" class="mb-1"><b>Bank Select</b></label>
								<select class="form-select" required="" id="Segment1" name="Segment1_">
									<option selected="" disabled="" value="">Please Select</option>


									<option value="">Test</option>
								</select>
								<div class="invalid-feedback">
									this field is required
								</div>
							</div>
						</div>


					</div>


				</form> -->
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



					<table id="example" class="table table-striped table-bordered " style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>BTB HEADER ID</th>
								<th>BTB LINE ID</th>
								<th>BTB_RECEIPT_NUM</th>
								<th>BTB_RECEIPT_DATE</th>
								<th>RECEIPT_METHOD_ID</th>
								<th>REMIT_BANK__ID</th>
								<th>SALESREP_ID</th>
								<th>CUSTOMER_ID</th>
								<th>SITE USE ID</th>
								<th>COLLECTION MODE</th>
								<th>CHEQUE NO</th>
								<th>CHEQUE_DATE</th>
								<th>AMOUNT</th>
								<th>PAYMENT SCHEDULE ID</th>
								<th>CUSTOMER TRX ID</th>
								<th>TRX_NUMBER</th>
								<th>APPROVED DATE</th>
								<th>APPROVED_BY</th>
								<th>ORACLE_CASH_RECEIPT_ID</th>
								<th>Select AKI Remmitance Account</th>
								<th>STATUS</th>


							</tr>


							<!-- <tr>
								<th>#</th>
								<th>PAYMENT_SCHEDULE_ID</th>
								<th>CUSTOMER_ID</th>
								<th>BILL_TO_SITE_USE_ID</th>
								<th>TRX_NUMBER</th>
								<th>TRX_DATE</th>
								<th>AMOUNT_DUE_ORIGINAL</th>
								<th>AMOUNT_DUE_REMAINING</th>
								<th>DUE_DATE</th>
								<th>CLASS</th>
								<th>SHIP_TO_SITE_USE_ID</th>
								<th>ATTRIBUTE1</th>
								<th>ATTRIBUTE2</th>
								<th>ATTRIBUTE3</th>
								<th>ATTRIBUTE4</th>
								<th>ATTRIBUTE5</th>
								<th>CREATION_DATE</th>
								<th>PROCESS_FLAG</th>
								<th>DB_PROCESS_FROM_DATE</th>
								<th>DB_PROCESS_TO_DATE</th>
								<th>CUSTOMER_TRX_ID</th>

							</tr> -->



						</thead>
						<tbody id="">
							<tr>
								<td>1</td>
								<td>BTB-123</td>
								<td>LINE-001</td>
								<td>RCPT-001</td>
								<td>2024-01-08</td>
								<td></td>
								<td></td>
								<td>SR-001</td>
								<td>CUST-001</td>
								<td>SITE-001</td>
								<td>Cash</td>
								<td></td>
								<td></td>
								<td>1000</td>
								<td>SCHEDULE-001</td>
								<td>TRX-001</td>
								<td>TRX-123</td>
								<td>2024-01-08</td>
								<td>User-001</td>
								<td>ORACLE-001</td>
								<td><a href="#" class="text-dark btn btn-outline-secondary px-5 radius-30" data-bs-toggle="modal" data-bs-target="#exampleDangerModal">
										Select
									</a></td>
								<td><span class="badge bg-success text-white shadow-sm w-100">Approved</span></td>
							</tr>
							<tr>
								<td>2</td>
								<td>BTB-124</td>
								<td>LINE-002</td>
								<td>RCPT-002</td>
								<td>2024-01-09</td>
								<td></td>
								<td></td>
								<td>SR-002</td>
								<td>CUST-002</td>
								<td>SITE-002</td>
								<td>Credit Card</td>
								<td>123456</td>
								<td>2024-01-09</td>
								<td>1500</td>
								<td>SCHEDULE-002</td>
								<td>TRX-002</td>
								<td>TRX-124</td>
								<td>2024-01-09</td>
								<td>User-002</td>
								<td>ORACLE-002</td>
								<td><a href="#" class="text-dark btn btn-outline-secondary px-5 radius-30" data-bs-toggle="modal" data-bs-target="#exampleDangerModal">
										Select
									</a></td>
								<td><span class="badge bg-success text-white shadow-sm w-100">Approved</span></td>

							</tr>
							<tr>
								<td>3</td>
								<td>BTB-125</td>
								<td>LINE-003</td>
								<td>RCPT-003</td>
								<td>2024-01-10</td>
								<td></td>
								<td></td>
								<td>SR-003</td>
								<td>CUST-003</td>
								<td>SITE-003</td>
								<td>Bank Transfer</td>
								<td></td>
								<td></td>
								<td>800</td>
								<td>SCHEDULE-003</td>
								<td>TRX-003</td>
								<td>TRX-125</td>
								<td>2024-01-10</td>
								<td>User-003</td>
								<td>ORACLE-003</td>
								<td><a href="#" class="text-dark btn btn-outline-secondary px-5 radius-30" data-bs-toggle="modal" data-bs-target="#exampleDangerModal">
										Select
									</a></td>
								<td><span class="badge bg-danger text-white shadow-sm w-100">Pending</span></td>


							</tr>
							<tr>
								<td>4</td>
								<td>BTB-126</td>
								<td>LINE-004</td>
								<td>RCPT-004</td>
								<td>2024-01-11</td>
								<td></td>
								<td></td>
								<td>SR-004</td>
								<td>CUST-004</td>
								<td>SITE-004</td>
								<td>PayPal</td>
								<td></td>
								<td></td>
								<td>1200</td>
								<td>SCHEDULE-004</td>
								<td>TRX-004</td>
								<td>TRX-126</td>
								<td>2024-01-11</td>
								<td>User-004</td>
								<td>ORACLE-004</td>
								<td><a href="#" class="text-dark btn btn-outline-secondary px-5 radius-30" data-bs-toggle="modal" data-bs-target="#exampleDangerModal">
										Select
									</a></td>
								<td><span class="badge bg-success text-white shadow-sm w-100">Approved</span></td>

							</tr>
							<tr>
								<td>5</td>
								<td>BTB-127</td>
								<td>LINE-005</td>
								<td>RCPT-005</td>
								<td>2024-01-12</td>
								<td></td>
								<td></td>
								<td>SR-005</td>
								<td>CUST-005</td>
								<td>SITE-005</td>
								<td>Online Banking</td>
								<td></td>
								<td></td>
								<td>2000</td>
								<td>SCHEDULE-005</td>
								<td>TRX-005</td>
								<td>TRX-127</td>
								<td>2024-01-12</td>
								<td>User-005</td>
								<td>ORACLE-005</td>
								<td>
									<a href="#" class="text-dark btn btn-outline-secondary px-5 radius-30">
										123456789
									</a>
								</td>
								<td><span class="badge bg-danger text-white shadow-sm w-100">Pending</span></td>

							</tr>
						</tbody>


					</table>



					<div class="row row-cols-auto g-3">
						<div class="col">

							<!-- Modal -->
							<div class="modal fade" id="exampleDangerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
								<div class="modal-dialog modal-xl modal-dialog-centered">
									<div class="modal-content border-warning border border-3  bg-gradient-orange text-white ms-auto" style="background-color: #fffaf1;">
										<!-- <div class="modal-header">
											<h5 class="modal-title text-white">Modal title</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div> -->

										<form action="" method="get">
										<div class="modal-body text-white">
											<div class="table-responsive ">

												<table id="example" class="table table-striped table-bordered " style="width:100%">
													<thead>





														<tr>
															<th>#</th>
															<th>Receipt Method</th>
															<th>Operating Unit</th>
															<th>Bank Account Number</th>
															<th>Bank Name </th>
															<th>Bank Account Currency</th>
															<th>Receipt Class</th>
														</tr>




													</thead>
													<tbody id="user_tbody">
														<tr>
															<td><input type="radio" name="selectRow" value="selectRow" /></td>
															<td>1</td>
															<td>Cash</td>
															<td>Unit A</td>
															<td>1234567890</td>
															<td>ABC Bank</td>
															<td>USD</td>
															<td>Class A</td>
														</tr>
														<tr>
															<td><input type="radio" name="selectRow" /></td>
															<td>2</td>
															<td>Credit Card</td>
															<td>Unit B</td>
															<td>9876543210</td>
															<td>XYZ Bank</td>
															<td>EUR</td>
															<td>Class B</td>
														</tr>
														<tr>
															<td><input type="radio" name="selectRow" /></td>
															<td>3</td>
															<td>Bank Transfer</td>
															<td>Unit C</td>
															<td>5678901234</td>
															<td>PQR Bank</td>
															<td>GBP</td>
															<td>Class C</td>
														</tr>
														<tr>
															<td><input type="radio" name="selectRow" /></td>
															<td>4</td>
															<td>Check</td>
															<td>Unit D</td>
															<td>3456789012</td>
															<td>MNO Bank</td>
															<td>INR</td>
															<td>Class D</td>
														</tr>
														<tr>
															<td><input type="radio" name="selectRow" /></td>
															<td>5</td>
															<td>Online Payment</td>
															<td>Unit E</td>
															<td>7890123456</td>
															<td>DEF Bank</td>
															<td>JPY</td>
															<td>Class E</td>
														</tr>
													</tbody>




												</table>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-warning px-5">Save changes</button>
										</div>
										</form>
				
									</div>
								</div>
							</div>
						</div>






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


	<script>
		$(document).ready(function() {
			// Function to filter table rows based on the selected option
			function filterTableRows(filterValue) {
				if (filterValue === "all") {
					// Show all rows
					$("#example tbody tr").show();
				} else {
					// Hide all rows
					$("#example tbody tr").hide();

					// Show rows with the selected status
					$("#example tbody tr td:nth-child(5):contains(" + filterValue + ")")
						.parent()
						.show();
				}
			}

			// Initially, show all rows
			filterTableRows("all");

			// Handle filter option change
			$("input[name='filter']").change(function() {
				var selectedFilter = $("input[name='filter']:checked").val();
				filterTableRows(selectedFilter);
			});

			// Custom jQuery contains selector that is case-insensitive
			$.expr[':'].contains = function(a, i, m) {
				return (
					(a.textContent || a.innerText || "")
					.toUpperCase()
					.indexOf(m[3].toUpperCase()) >= 0
				);
			};
		});
	</script>

	<style>
		#user_tbody tr.selected {
			background-color: #b69c6f;
			/* Change the background color as needed */
		}
	</style>

	<script>
		// Get all rows in the table
		var rows = document.getElementById('user_tbody').getElementsByTagName('tr');

		// Add click event listener to each row
		for (var i = 0; i < rows.length; i++) {
			rows[i].addEventListener('click', function() {
				// Remove the 'selected' class from all rows
				for (var j = 0; j < rows.length; j++) {
					rows[j].classList.remove('selected');
				}

				// Add the 'selected' class to the clicked row
				this.classList.add('selected');

				// Find the radio button in the clicked row and check it
				var radio = this.cells[0].querySelector('input[type="radio"]');
				radio.checked = true;
			});
		}
	</script>