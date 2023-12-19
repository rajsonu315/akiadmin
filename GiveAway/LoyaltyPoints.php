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
								<a class="nav-link active" href="./LoyaltyPoints.php">
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

										<form id="Running">


											<table class="table " id="dynamic_fieldone">
												<td>
													<div class="row" style="align-items: center;">
														<div class="col-md-12 dynamic-field" id="dynamic-field-1">
															<div class="row">

																<div class="col-md-2">
																	<label for="Scheme_Type" class="form-label">C1 </label>
																	<select class="form-select" id="Calculation_Type" name="Calculation_Type">
																		<option disabled="disabled" selected="true"> Select</option>
																		<option value="Running">Running</option>
																		<option value="Slab_Based">Slab Based</option>
																	</select>
																</div>
																<div class="col-md-2">
																	<label for="Scheme_Type" class="form-label">C2 </label>
																	<select class="form-select" id="Calculation_Type" name="Calculation_Type">
																		<option disabled="disabled" selected="true"> Select</option>
																		<option value="Running">Running</option>
																		<option value="Slab_Based">Slab Based</option>
																	</select>
																</div>
																<div class="col-md-1">
																	<label for="Scheme_Type" class="form-label">C3 </label>
																	<select class="form-select" id="Calculation_Type" name="Calculation_Type">
																		<option disabled="disabled" selected="true"> Select</option>
																		<option value="Running">Running</option>
																		<option value="Slab_Based">Slab Based</option>
																	</select>
																</div>

																<div class="col-md-1">
																	<label for="Scheme_Type" class="form-label">brand </label>
																	<select class="form-select" id="Scheme_Type" name="Scheme_Type">
																		<option disabled="disabled" selected="true">Scheme Type</option>
																		<option value="FOC">FOC</option>
																		<option value="Discount">Discount %</option>
																		<option value="Discount_Amount">Discount Amount</option>
																	</select>
																</div>
																<div class="col-md-2">
																	<label for="FOCtype" class="form-label">sub brand</label>
																	<select class="form-select" id="FOCtype" name="FOCtype">
																		<option disabled="disabled" selected="true">Foc Type</option>
																		<option value="inclusive">inclusive</option>
																		<option value="exclusive">exclusive</option>
																	</select>
																</div>
<!-- 
																<div class="col-md-2">
																	<label for="Type" class="form-label">Type of purchase </label>
																	<select class="form-select" id="Type" name="quantity">
																		<option disabled="disabled" selected="true"> Select</option>
																		<option value="Quantity">Quantity</option>
																		<option value="value">value</option>
																	</select>
																</div> -->


																<div class="col-md-2">
																	<div class="d-flex align-items-center gap-3">

																		<div class="form-check">
																			<input class="form-check-input Quantity" type="radio" name="flexRadioDefault" id="Quantity" data-target="quantityInput1" checked>
																			<label class="form-check-label" for="Quantity">
																				Quantity
																			</label>


																		</div>
																		<div class="form-check form-check-success">
																			<input class="form-check-input Quantity" type="radio" name="flexRadioDefault" id="Value" data-target="valueInput1">
																			<label class="form-check-label" for="Value">
																				Value
																			</label>
																		</div>

																	</div>


																	<input type="text" id="quantityInput1" name="Quantity" placeholder="Quantity" class="form-control">

																	<input type="text" name="value" id="valueInput1" placeholder="Value" class="form-control" style="display: none;">

																</div>



															

																<div class="col-md-2 UOM" id="sku">
																	<label for="UOM" class="form-label">UOM </label>
																	<select class="form-select" id="UOM" name="UOM">
																		<option disabled="disabled" selected="true"> Select</option>
																		<option value="Pack">Pack</option>
																		<option value="CFC">CFC</option>
																	</select>
																</div>

																<div class="mb-3 col-md-6 mt-2">
																	<label for="SchemeName" class="form-label">Item Name:</label>
																	<input type="text" class="form-control" id="SchemeName" name="ItemName" placeholder="Item Name">
																</div>

																<div class="mb-3 col-md-6 mt-2">
																	<label for="" class="form-label">upload  image</label> 
																	<input id="fancy-file-upload" class="form-control" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png">

																</div>


																<div class="col-md-6 ">

																	<div class=" col-md-12">
																		<label for="input11" class="form-label"></label>
																		<textarea class="form-control" id="input11" placeholder="Description " rows="3"></textarea>
																	</div>
																</div>



															</div>
														</div>

													</div>
												</td>

											</table>





											<a href="#">
												<button type="button" class="btn btn btn-warning px-5 bx-pull-right">Next</button>
											</a>
										</form>

										<br>

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
<?php include('../footer.php'); ?>

<script>
	$(document).ready(function() {
		$('.Quantity').change(function() {
			var targetId = $(this).data('target');

			if (targetId === 'quantityInput1') {
				$('#quantityInput1').show();
				$('#valueInput1').hide();
				$('#sku').show();
			}

			if (targetId === 'valueInput1') {
				$('#valueInput1').show();
				$('#sku').hide();
				$('#quantityInput1').hide();

			}
		});
	});
</script>