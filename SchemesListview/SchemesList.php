<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
    <!--extraJS-->
    <link href="../assets/extraJS/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="../assets/extraJS/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../assets/extraJS/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../assets/extraJS/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />


    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../assets/css/semi-dark.css" />

    <link rel="stylesheet" href="../assets/dist/css/bootstrap-multiselect.css" type="text/css">

    <title> Schemes</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
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
                                <li class="breadcrumb-item active" aria-current="page">Schemes</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="">
                            <a href="./Schemes.php" class="href">

                                <button type="button" class="btn btn-warning px-5">Scheme Create New

                                </button>

                            </a>
                            <!-- <a href="./SchemeCreateNew.php" class="href">
								<button type="button" class="btn btn-warning px-5">+ Create New
									Scheme
								</button>
							</a> -->





                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->



                <!--  -->


                <div class="row row-cols-1 row-cols-md-1 row-cols-lg1 row-cols-xl-1">
                    <div class="col">

                        <div class="card">
                            <div class="card-body">



                                <div class="row">




                                    <div class="col-md-3 mb-3 ">


                                        <label>Scheme ID::</label>
                                        <select class="form-select" multiple="multiple" name="Scheme ID:" id="Company">

                                            <option value="Scheme ID:">Scheme ID: 1</option>
                                            <option value="Scheme ID:2">Scheme ID: 2</option>
                                            <option value="Scheme ID:3">Scheme ID: 3</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 mb-3 ">

                                        <label>Scheme Type::</label>
                                        <select class="form-select" multiple="multiple" name="Scheme Type:" id="Category">

                                            <option value="Scheme Type:">Scheme Type: 1</option>
                                            <option value="Scheme Type:2">Scheme Type: 2</option>
                                            <option value="Scheme Type:3">Scheme Type: 3</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 mb-3 ">

                                        <label>DMS Division::</label>
                                        <select class="form-select" id="Category1" multiple="multiple" name="DMS Division:">

                                            <option value="DMS Division:">DMS Division: 1</option>
                                            <option value="DMS Division:2">DMS Division: 2</option>
                                            <option value="DMS Division:3">DMS Division: 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3 ">

                                        <label>Created on:</label>
                                        <select class="form-select" id="Category2" multiple="multiple" name="Category">

                                            <option value="Created on:">Created on: 1</option>
                                            <option value="Created on:2">Created on: 2</option>
                                            <option value="Created on:3">Created on: 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-3 ">

                                        <label>Validity::</label>
                                        <select class="form-select" id="Category3" multiple="multiple" name="Validity:">

                                            <option value="Validity:">Validity: 1</option>
                                            <option value="Validity:2">Validity: 2</option>
                                            <option value="Validity:3">Validity: 3</option>
                                        </select>
                                    </div>


                                    <div class="col-md-3 mb-3 ">

                                        <label>Status::</label>
                                        <select class="form-select" id="Brand" multiple="multiple" name="Status:">

                                            <option value="Status:">Status: 1</option>
                                            <option value="Status:2">Status: 2</option>
                                            <option value="Status:3">Status: 3</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3 mb-3 ">

                                        <label>Approval Status::</label>
                                        <select class="form-select" id="Sub_brand" multiple="multiple" name="Approval_Status:">

                                            <option value="Approval Status:">Approval Status: 1</option>
                                            <option value="Approval Status:2">Approval Status: 2</option>
                                            <option value="Approval Status:3">Approval Status: 3</option>
                                        </select>
                                    </div>









                                </div>





                                <!-- ////////////////////////////// -->

                                <div class="table-responsive mt-5">






                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>

                                                <th>Scheme ID</th>
                                                <th>Scheme Type</th>
                                                <th>Scheme Owne</th>
                                                <th>Date of creation </th>
                                                <th>Start date</th>
                                                <th>ActTo dateions</th>
                                                <th>Status</th>

                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>Scheme 1</td>
                                                <td>3 months</td>
                                                <td>North Region</td>
                                                <td>North Region</td>

                                                <td>North Region</td>

                                                <td>Retailer Type 1</td>
                                                <td> <span class="badge rounded-pill bg-success">Active</span>
                                                </td>

                                                <td>


                                                    <div class="d-flex order-actions">
                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="./RetailerDetailsEdit.php" class="href">
														<div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
														</div>
													</a>

												</div> -->

                                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                            <a href="./SchemesListview.php" class="href">
                                                                <div class="font-22 "> <i class="lni lni-eye"></i>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
														<button class="delete-button">
														<a href="#" class="href">
															<div class="font-22 text-danger"> <i class="lni lni-trash"></i>
															</div>
														</a>

													</button>

												</div> -->
                                                    </div>


                                                </td>
                                            </tr>

                                            <tr>

                                                <td>Scheme 1</td>
                                                <td>3 months</td>
                                                <td>North Region</td>
                                                <td>North Region</td>

                                                <td>North Region</td>

                                                <td>Retailer Type 1</td>
                                                <td> <span class="badge rounded-pill bg-warning text-dark">Approvel In process</span>
                                                </td>

                                                <td>


                                                    <div class="d-flex order-actions">
                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
    <a href="./RetailerDetailsEdit.php" class="href">
        <div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
        </div>
    </a>

</div> -->

                                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                            <a href="./SchemesListview.php" class="href">
                                                                <div class="font-22 "> <i class="lni lni-eye"></i>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
        <button class="delete-button">
        <a href="#" class="href">
            <div class="font-22 text-danger"> <i class="lni lni-trash"></i>
            </div>
        </a>

    </button>

</div> -->
                                                    </div>


                                                </td>
                                            </tr>

                                            <tr>

                                                <td>Scheme 1</td>
                                                <td>3 months</td>
                                                <td>North Region</td>
                                                <td>North Region</td>

                                                <td>North Region</td>

                                                <td>Retailer Type 1</td>
                                                <td> <span class="badge rounded-pill bg-danger">Rejected</span>
                                                </td>

                                                <td>


                                                    <div class="d-flex order-actions">
                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
    <a href="./RetailerDetailsEdit.php" class="href">
        <div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
        </div>
    </a>

</div> -->

                                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                            <a href="./SchemesListview.php" class="href">
                                                                <div class="font-22 "> <i class="lni lni-eye"></i>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
        <button class="delete-button">
        <a href="#" class="href">
            <div class="font-22 text-danger"> <i class="lni lni-trash"></i>
            </div>
        </a>

    </button>

</div> -->
                                                    </div>


                                                </td>
                                            </tr>

                                            <tr>

                                                <td>Scheme 1</td>
                                                <td>3 months</td>
                                                <td>North Region</td>
                                                <td>North Region</td>

                                                <td>North Region</td>

                                                <td>Retailer Type 1</td>
                                                <td> <span class="badge rounded-pill bg-success">Approved</span>
                                                </td>

                                                <td>


                                                    <div class="d-flex order-actions">
                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
    <a href="./RetailerDetailsEdit.php" class="href">
        <div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
        </div>
    </a>

</div> -->

                                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                            <a href="./SchemesListview.php" class="href">
                                                                <div class="font-22 "> <i class="lni lni-eye"></i>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
        <button class="delete-button">
        <a href="#" class="href">
            <div class="font-22 text-danger"> <i class="lni lni-trash"></i>
            </div>
        </a>

    </button>

</div> -->
                                                    </div>


                                                </td>
                                            </tr>



                                            <tr>

                                                <td>Scheme 1</td>
                                                <td>3 months</td>
                                                <td>North Region</td>
                                                <td>North Region</td>

                                                <td>North Region</td>

                                                <td>Retailer Type 1</td>
                                                <td> <span class="badge rounded-pill bg-danger">In Active</span>

                                                </td>

                                                <td>


                                                    <div class="d-flex order-actions">
                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
    <a href="./RetailerDetailsEdit.php" class="href">
        <div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
        </div>
    </a>

</div> -->

                                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                            <a href="./SchemesListview.php" class="href">
                                                                <div class="font-22 "> <i class="lni lni-eye"></i>
                                                                </div>
                                                            </a>

                                                        </div>

                                                        <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
        <button class="delete-button">
        <a href="#" class="href">
            <div class="font-22 text-danger"> <i class="lni lni-trash"></i>
            </div>
        </a>

    </button>

</div> -->
                                                    </div>


                                                </td>
                                            </tr>

                                            <!-- Add more rows as needed -->
                                        </tbody>

                                    </table>
                                </div>


                                <!-- /////////////////////////////// -->





                            </div>
                        </div>
                    </div>

                </div>


                <!--  -->

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
    <script src="../assets/js/jquery.min.js"></script>


    <script type="text/javascript" src="../assets/docs/js/bootstrap.bundle-4.5.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--extraJS-->
    <script src="../assets/extraJS/metismenu/js/metisMenu.min.js"></script>
    <script src="../assets/extraJS/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/extraJS/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/extraJS/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/extraJS/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <script type="text/javascript" src="../assets/dist/js/bootstrap-multiselect.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <!--app JS-->
    <script src="../assets/js/app.js"></script>




    <script>
        $(document).ready(function() {

            var i = 1;


            $("#add").click(function() {




                i++;
                $('#dynamic_field').append(`<tr>
                <td>




				<div class="row">

<div class="col-md-4">
	<div class="form-group">
		<label for="field" class="hidden-md">Item No</label>
		<input type="text" id="field" class="form-control" name="field[]" />
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Banner</label>
		<select class="form-select" name="status">
			
			<option value="status">status 1</option>
			<option value="status2">status 2</option>
			<option value="status3">status 3</option>
		</select>
	</div>
</div>
<div class="col-md-3">
	<div class="form-group">
		<label for="field" class="hidden-md">Item Min</label>
		<input type="text" id="field" class="form-control" name="field[]" />
	</div>
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
            });

            $(document).on('click', '.btn_remove', function() {

                $(this).closest('tr').remove();


                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });




        });
    </script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#Company').multiselect({
                nonSelectedText: 'Select Company',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });
            $('#Category').multiselect({
                nonSelectedText: 'Select Category',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });
            $('#Category1').multiselect({
                nonSelectedText: 'Select Category1',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });
            $('#Category2').multiselect({
                nonSelectedText: 'Select Category2',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });

            $('#Category3').multiselect({
                nonSelectedText: 'Select Category3',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });





            $('#Brand').multiselect({
                nonSelectedText: 'Select Brand',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });

            $('#Sub_brand').multiselect({
                nonSelectedText: 'Select Sub brand',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });

            $('#SKU').multiselect({
                nonSelectedText: 'Select SKU',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,

                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: true
            });
        });
    </script>
</body>

</html>