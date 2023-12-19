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
								<a class="nav-link active" href="./LoyaltyPoints.php">
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


																	<div class="input-group mb-3" id="quantityInput1">
																		<input type="text" name="Quantity" placeholder="Quantity" class="form-control">
																		<input type="text" class="form-control" placeholder="point" aria-label="point">
																	</div>

																	<div class="input-group mb-3" id="valueInput1" style="display: none;">
																		<input type="text" name="Value" placeholder="Value" class="form-control">
																		<input type="text" class="form-control" name="point" placeholder="point" aria-label="point">
																	</div>






																</div>



																<div class="col-md-1 UOM" id="sku">
																	<label for="UOM" class="form-label">UOM </label>
																	<select class="form-select" id="UOM" name="UOM">
																		<option disabled="disabled" selected="true"> Select</option>
																		<option value="Pack">Pack</option>
																		<option value="CFC">CFC</option>
																	</select>
																</div>

																<div class="col-md-1 mt-4">
																	<button type="button" name="add" id="addOne" class="btn btn btn-warning  bx-pull-right">Add</button>

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

		var i = 1;


		$("#addOne").click(function() {




			i++;
			$('#dynamic_fieldone').append(`<tr>
	<td>
		<div class="row">

			<div class="col-md-2">

				<select class="form-select" id="Calculation_Type" name="Calculation_Type">
					<option disabled="disabled" selected="true"> Select</option>
					<option value="Running">Running</option>
					<option value="Slab_Based">Slab Based</option>
				</select>
			</div>
			<div class="col-md-2">

				<select class="form-select" id="Calculation_Type" name="Calculation_Type">
					<option disabled="disabled" selected="true"> Select</option>
					<option value="Running">Running</option>
					<option value="Slab_Based">Slab Based</option>
				</select>
			</div>
			<div class="col-md-1">

				<select class="form-select" id="Calculation_Type" name="Calculation_Type">
					<option disabled="disabled" selected="true"> Select</option>
					<option value="Running">Running</option>
					<option value="Slab_Based">Slab Based</option>
				</select>
			</div>

			<div class="col-md-1">

				<select class="form-select" id="Scheme_Type" name="Scheme_Type">
					<option disabled="disabled" selected="true">Scheme Type</option>
					<option value="FOC">FOC</option>
					<option value="Discount">Discount %</option>
					<option value="Discount_Amount">Discount Amount</option>
				</select>
			</div>
			<div class="col-md-2">

				<select class="form-select" id="FOCtype" name="FOCtype">
					<option disabled="disabled" selected="true">Foc Type</option>
					<option value="inclusive">inclusive</option>
					<option value="exclusive">exclusive</option>
				</select>
			</div>

			<div class="col-md-2 quantity-value-container">
				<div class="d-flex align-items-center gap-3">
					<div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault_${i}" id="flexRadioDefault_${i}_1" data-target="quantityInput_${i}" checked>
						<label class="form-check-label" for="flexRadioDefault_${i}_1">
							Quantity
						</label>
					</div>
					<div class="form-check form-check-success">
						<input class="form-check-input" type="radio" name="flexRadioDefault_${i}" id="flexRadioDefault_${i}_2" data-target="valueInput_${i}">
						<label class="form-check-label" for="flexRadioDefault_${i}_2">
							Value
						</label>
					</div>
				</div>

				<div class="input-group " id="quantityInput_${i}">
					<input type="text" name="Quantity" placeholder="Quantity" class="form-control">
					<input type="text" class="form-control" placeholder="point" aria-label="point">
				</div>


				<div class="input-group " id="valueInput_${i}" style="display: none;">
					<input type="text" name="Value" placeholder="Value" class="form-control">
					<input type="text" class="form-control" name="point" placeholder="point" aria-label="point">
				</div>


			</div>



			<div class="col-md-1 UOM">

				<select class="form-select" id="sku_${i}" name="UOM">
					<option disabled="disabled" selected="true"> Select</option>
					<option value="Pack">Pack</option>
					<option value="CFC">CFC</option>
				</select>
			</div>




			<div class="col-md-1">
				<div class="form-group">
					<button type="button" name="remove" class="btn btn-danger btn_remove">X</button>
				</div>
			</div>
		</div>
	</td>
</tr>
        `);
		});


		$(document).on('change', '.quantity-value-container input[name^="flexRadioDefault"]', function() {


			var targetId = $(this).data('target');

			var match = targetId.match(/\d+$/);

			// Check if a match is found
			if (match) {
				var lastNumber = match[0];
			

				if ($(this).attr('id').endsWith('_1')) {
					$('#sku_' + lastNumber).show();
				} else {
					$('#sku_' + lastNumber).hide();

				}

			}

			$(this).closest('.quantity-value-container').find('input[type="text"]').hide();
			$('#' + targetId).find('input[type="text"]').show();
			$('#' + targetId).show();

		});


		$(document).on('click', '.btn_remove', function() {

			$(this).closest('tr').remove();


			var button_id = $(this).attr("id");
			$('#row' + button_id + '').remove();
		});




	});
</script>

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