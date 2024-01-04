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
								<a class="nav-link" href="./LoyaltyPoints.php">
									<div class="d-flex align-items-center">

										<div class="tab-title">Give Away Points</div>
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



						<!-- <a href="SALESCRITERIA.php" class="href">
									<button type="submit" class="btn btn-warning  bx-pull-right">Next</button>
								</a>
								<button onclick="history.back()" type="btn" class="btn btn-danger bx-pull-right">Back</button>
 -->



					</div>
				</div>
			</div>

		</div>


		<!--  -->

	</div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>



<!--app JS-->

<script>
	$(document).ready(function() {
		var i = 1;

		// Initial Multiselect initialization
		$('#channel, #sub-channel, #type-channel , #outletChannel').multiselect({
			nonSelectedText: 'Select ',
			enableFiltering: true,
			enableCaseInsensitiveFiltering: true,
			enableClickableOptGroups: true,
			enableCollapsibleOptGroups: true,
			enableFiltering: true,
			includeSelectAllOption: true
		});

		$("#add").click(function() {
			i++;

			// Dynamic IDs for the new row
			var dynamicIds = {
				channel: 'channel' + i,
				subChannel: 'sub-channel' + i,
				typeChannel: 'type-channel' + i,
				outletChannel: 'outletChannel' + i
			};

			// Append the new row with dynamic IDs
			$('#dynamic_field').append(`
            <tr>
                <td>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Channel</label>
                            <select class="form-select" name="Channel" id="${dynamicIds.channel}" multiple="multiple">
                                <option value="Channel">GT</option>
                                <option value="Channel2">MT</option>
                                <option value="Channel3">Self Service</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Sub Channel</label>
                            <select class="form-select" name="subChannel" id="${dynamicIds.subChannel}" multiple="multiple">
                                <option value="status">Channel 1</option>
                                <option value="status2">Channel 2</option>
                                <option value="status3">Channel 3</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Type:</label>
                            <select class="form-select" id="${dynamicIds.typeChannel}" name="TypeChannel" multiple="multiple">
                                <option value="TypeChannel">Merge Geographical</option>
                                <option value="TypeChannel2">Retailer into One</option>
                                <option value="TypeChannel3">Retailer Category</option>
                            </select>
                        </div>
						<div class="col-md-2 mb-3">
                            <label>Type:</label>
                            <select class="form-select" id="${dynamicIds.outletChannel}" name="outletChannel" multiple="multiple">
							                                    <option value="outletChannel">outletChannel </option>
																<option value="outletChannel2">outletChannel2</option>
																<option value="outletChannel3">outletChannel3</option>
                            </select>
                        </div>


                        <div class="col-md-1">
                            <div class="form-group">
                                <button type="button" name="remove" class="btn btn-danger btn_remove" style="margin-top: 20px;">X</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        `);

			// Reinitialize Multiselect for the new row
			$(`#${dynamicIds.channel}, #${dynamicIds.subChannel}, #${dynamicIds.typeChannel}, #${dynamicIds.outletChannel}`).multiselect({
				nonSelectedText: 'Select ',
				enableFiltering: true,
				enableCaseInsensitiveFiltering: true,
				enableClickableOptGroups: true,
				enableCollapsibleOptGroups: true,
				enableFiltering: true,
				includeSelectAllOption: true
			});
		});

		$(document).on('click', '.btn_remove', function() {
			$(this).closest('tr').remove();
		});
	});
</script>