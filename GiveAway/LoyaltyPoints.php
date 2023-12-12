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
																	<label for="Type" class="form-label">Type of purchase </label>
																	<select class="form-select" id="Type" name="quantity">
																		<option disabled="disabled" selected="true"> Select</option>
																		<option value="Quantity">Quantity</option>
																		<option value="value">value</option>
																	</select>
																</div>



																<div class="col-md-1">
																	<label for="UOM" class="form-label">SKU </label>
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



											<a href="PointsRedemption.php">
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

																<div class="col-md-2">
																
																<input type="text" name="" class="form-control" placeholder="...">

																</div>



																<div class="col-md-1">
																	
																	<select class="form-select" id="UOM" name="UOM">
																		<option disabled="disabled" selected="true"> Select</option>
																		<option value="Pack">Pack</option>
																		<option value="CFC">CFC</option>
																	</select>
																</div>
               



                        <div class="col-md-1">
                            <div class="form-group">
                                <button type="button" name="remove" class="btn btn-danger btn_remove" >X</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        `);
		});

		$(document).on('click', '.btn_remove', function() {

			$(this).closest('tr').remove();


			var button_id = $(this).attr("id");
			$('#row' + button_id + '').remove();
		});




	});
</script>