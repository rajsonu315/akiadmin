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
                                        <a class="nav-link  " href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SCHEMES</div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
    <a class="nav-link" href="COSTOBJECTS.php">
        <div class="d-flex align-items-center">

            <div class="tab-title"> COST OBJECTS</div>
        </div>
    </a>
</li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">GEOGRAPHY DETAILS</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">RETAILER CATEGORY</div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
    <a class="nav-link" href="SCHEMECPS.php">
        <div class="d-flex align-items-center">

            <div class="tab-title">SCHEME CPS</div>
        </div>
    </a>
</li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SALES CRITERIA</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">SLABS</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="#">
                                            <div class="d-flex align-items-center">

                                                <div class="tab-title">REMARKS & ATTACHMENTS</div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>















                                <div class="d-flex flex-column align-items-center text-center">
                                    <!-- <img src="../assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1 btn-warning " width="110"> -->
                                    <div class="mt-3">
                                        <h4>Schemes test</h4>
                                        <p class="text-secondary mb-1">Schemes testr</p>
                                        <p class="text-muted font-size-sm">Lorem ipsum dolor sit amet.</p>
                                        <button class="btn btn-warning ">Approve</button>
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
                                        <span class="text-secondary">Schemes Test</span>
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
<?php include('../footer.php'); ?>










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
