<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->


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
                                <li class="breadcrumb-item active" aria-current="page">Schemes Details</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="">
                            <!-- <a href="./Schemes.php" class="href">

                                <button type="button" class="btn btn-warning px-5">Scheme Create New

                                </button>

                            </a> -->
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


                <div class="container">
                    <div class="main-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <ul class="nav  nav-pills mb-3" role="tablist">

                                        <li class="nav-item">
                                                <a class="nav-link active  " href="./SchemesListview.php">
                                                    <div class="d-flex align-items-center">

                                                        <div class="tab-title">SCHEMES DETAILS</div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link  " href="./Schemes.php">
                                                    <div class="d-flex align-items-center">

                                                        <div class="tab-title">SCHEMES</div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="./GEOGRAPHYDETAILS.php">
                                                    <div class="d-flex align-items-center">

                                                        <div class="tab-title">GEOGRAPHY DETAILS</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="./RETAILERCATEGORY.php">
                                                    <div class="d-flex align-items-center">

                                                        <div class="tab-title">RETAILER CATEGORY</div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="./SALESCRITERIA.php">
                                                    <div class="d-flex align-items-center">

                                                        <div class="tab-title">SALES CRITERIA</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="./SLABS.php">
                                                    <div class="d-flex align-items-center">

                                                        <div class="tab-title">SLABS</div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link " href="./REMARKSATTACHMENTS.php">
                                                    <div class="d-flex align-items-center">

                                                        <div class="tab-title">REMARKS & ATTACHMENTS</div>
                                                    </div>
                                                </a>
                                            </li>
         

                                        </ul>


                                        <div class="row row-cols-auto g-3">
                                            <div class="col">
                                                <!-- Button trigger modal -->
                                                <!-- Modal -->
                                                <div class="modal fade" id="Rejected" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content bg-danger">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-white">Query Raised</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-white">
                                                                <form id="jQueryValidationForm" method="post3" action="">


                                                                    <div class="row mb-3">
                                                                        <label for="input40" class="col-sm-3 col-form-label"> Query Raised</label>
                                                                        <div class="col-sm-9">
                                                                            <textarea required class="form-control" id="input40" name="query_raised" rows="3" placeholder="Query Raised"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <label class="col-sm-3 col-form-label"></label>
                                                                        <div class="col-sm-9">
                                                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                                                <button type="submit" class="btn btn-success px-4" name="submit2">Submit</button>
                                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row row-cols-auto g-3">
                                            <div class="col">
                                                <!-- Button trigger modal -->

                                                <!-- Modal -->
                                                <div class="modal fade" id="Approve" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content bg-success">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-white">Query Raised</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-white">

                                                                <form id="jQueryValidationForm" method="post3" action="">


                                                                    <div class="row mb-3">
                                                                        <label for="input40" class="col-sm-3 col-form-label"> Query Raised</label>
                                                                        <div class="col-sm-9">
                                                                            <textarea required class="form-control" id="input40" name="query_raised" rows="3" placeholder="Query Raised"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <label class="col-sm-3 col-form-label"></label>
                                                                        <div class="col-sm-9">
                                                                            <div class="d-md-flex d-grid align-items-center gap-3">

                                                                                <button type="submit" class="btn btn-light  rounded-0" name="submit2">Submit</button>
                                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>












                                        <div class="d-flex flex-column align-items-center text-center">
                                            <!-- <img src="../assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110"> -->
                                            <div class="mt-3">
                                                <h4>Schemes test</h4>
                                                <p class="text-secondary mb-1">Schemes testr</p>
                                                <p class="text-muted font-size-sm">Lorem ipsum dolor sit amet.</p>
                                           

                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0">Scheme ID</h6>
                                                <span class="text-secondary">Schemes Test</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0">Scheme Type</h6>
                                                <span class="text-secondary">Schemes Test</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0">Scheme Owne</h6>
                                                <span class="text-secondary">Schemes Test</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0">Date of creation</h6>
                                                <span class="text-secondary">Schemes Test</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0">Start date</h6>
                                                <span class="text-secondary">Schemes Test</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0">ActTo dateions</h6>
                                                <span class="text-secondary">Schemes Test</span>
                                            </li>

                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                <h6 class="mb-0">Status</h6>
                                                <span class="text-white btn bg-success">Approve</span>
                                         
                                            </li>
                                        </ul>
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
    <?php include('../footer.php'); ?>
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