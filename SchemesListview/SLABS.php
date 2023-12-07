<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->

    <title> SLABS</title>
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
                                <li class="breadcrumb-item active" aria-current="page">SLABS</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="">
                            <a href="./SchemesApprove.php" class="href">

                                <button type="button" class="btn btn-warning px-5">Approve
                                    Schemes
                                </button>

                            </a>
                            <!-- <a href="./SchemeCreateNew.php" class="href">
                                <button type="button" class="btn btn-warning px-5">+ Create New
                                    Scheme
                                </button>
                            </a> -->
                            <a href="#" class="href">
                                <button type="button" class="btn btn-warning px-5"><i class="bx bx-cloud-download mr-1"></i>Export </button>

                            </a>




                        </div>
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
                                        <a class="nav-link  " href="./SchemesListview.php">
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
                                        <a class="nav-link active" href="./SLABS.php">
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







                                <div class="card radius-10">

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table align-middle mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Calculation Type:</th>
                                                        <th>Scheme Type</th>
                                                        <th>FOC Type</th>
                                                        <th>UOM</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>ind</td>
                                                        <td>delhi</td>
                                                        <td>delhi</td>
                                                        <td>delhi</td>


                                                    </tr>



                                                </tbody>
                                            </table>
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


    <!--app JS-->




    <script>
        $(document).ready(function() {

            var i = 1;


            $("#addOne").click(function() {




                i++;
                $('#dynamic_fieldone').append(`<tr>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="sub-item" class="hidden-md">On purchase of Qty</label>
                                <input type="text" class="form-control sub-item" name="sub-item[]" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>FOC Qty</label>
                                <input type="text" class="form-control from-quantity" name="from-quantity[]">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="to-quantity" class="hidden-md">FOC SKU</label>
                                <input type="text" class="form-control to-quantity" name="to-quantity[]" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Minimum Qty</label>
                                <input type="text" class="form-control payout-percent" name="payout-percent[]">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Maximum Qty</label>
                                <input type="text" class="form-control reimburse-percent" name="reimburse-percent[]">
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

    <script>
        $(document).ready(function() {

            var i = 1;


            $("#addtwo").click(function() {




                i++;
                $('#dynamic_fieldtwo').append(`<tr>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="sub-item" class="hidden-md">On purchase of Qty</label>
                                <input type="text" class="form-control sub-item" name="sub-item[]" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Discount Amount</label>
                                <input type="text" class="form-control from-quantity" name="from-quantity[]">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="to-quantity" class="hidden-md">Minimum Qty</label>
                                <input type="text" class="form-control to-quantity" name="to-quantity[]" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Maximum Qty</label>
                                <input type="text" class="form-control payout-percent" name="payout-percent[]">
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

    <script>
        $(document).ready(function() {

            var i = 1;


            $("#addthree").click(function() {




                i++;
                $('#dynamic_fieldthree').append(`<tr>
                <td>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="sub-item" class="hidden-md">On purchase of Qty</label>
                                <input type="text" class="form-control sub-item" name="sub-item[]" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Discount %</label>
                                <input type="text" class="form-control from-quantity" name="from-quantity[]">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="to-quantity" class="hidden-md">Minimum Qty</label>
                                <input type="text" class="form-control to-quantity" name="to-quantity[]" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Maximum Qty</label>
                                <input type="text" class="form-control payout-percent" name="payout-percent[]">
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


    <script>
        $(document).ready(function() {

            var i = 1;


            $("#addfour").click(function() {




                i++;
                $('#dynamic_fieldfour').append(`<tr>
                <td>
                    <div class="row">
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="sub-item" class="hidden-md">Slab id</label>
                                <input type="text" class="form-control sub-item" name="sub-item[]" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>From Qty</label>
                                <input type="text" class="form-control from-quantity" name="from-quantity[]">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="to-quantity" class="hidden-md">To Qty</label>
                                <input type="text" class="form-control to-quantity" name="to-quantity[]" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>FOC Qty</label>
                                <input type="text" class="form-control payout-percent" name="payout-percent[]">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>FOC SKU</label>
                                <input type="text" class="form-control reimburse-percent" name="reimburse-percent[]">
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
    <script>
        $(document).ready(function() {

            var i = 1;


            $("#addfive").click(function() {




                i++;
                $('#dynamic_fieldfive').append(`<tr>
                <td>
                    <div class="row">
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="sub-item" class="hidden-md">Slab id</label>
                                <input type="text" class="form-control sub-item" name="sub-item[]" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>From Qty</label>
                                <input type="text" class="form-control from-quantity" name="from-quantity[]">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="to-quantity" class="hidden-md">To Qty</label>
                                <input type="text" class="form-control to-quantity" name="to-quantity[]" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Discount Amount</label>
                                <input type="text" class="form-control payout-percent" name="payout-percent[]">
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
    <script>
        $(document).ready(function() {

            var i = 1;


            $("#addsix").click(function() {




                i++;
                $('#dynamic_fieldsix').append(`<tr>
                <td>
                    <div class="row">
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="sub-item" class="hidden-md">Slab id</label>
                                <input type="text" class="form-control sub-item" name="sub-item[]" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>From Qty</label>
                                <input type="text" class="form-control from-quantity" name="from-quantity[]">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="to-quantity" class="hidden-md">To Qty</label>
                                <input type="text" class="form-control to-quantity" name="to-quantity[]" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Discount %</label>
                                <input type="text" class="form-control payout-percent" name="payout-percent[]">
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




    <script>
        // jQuery code to handle dropdown change events
        $(document).ready(function() {
            // Example for Calculation Type dropdown
            $('#Running').hide();
            $('#Running_Scheme_with_is_Discount_Amount').hide();
            $('#Running_Scheme_with_is_Discount_pr').hide();
            $('#Slab_based_scheme_with_FOC').hide();
            $('#Slab_based_scheme_with_Discount_Amount').hide();
            $('#Slab_based_scheme_with_Discount').hide();




            // Example for handling a specific combination of selected values
            $("#Calculation_Type, #Scheme_Type").change(function() {
                var calculationType = $("#Calculation_Type").val();
                var schemeType = $("#Scheme_Type").val();

                // Check for a specific combination of values
                if (calculationType === "Slab_Based" && schemeType === "FOC") {
                    console.log("Slab_Based with FOC selected");
                    $('#Slab_based_scheme_with_FOC').show();
                    // Add your logic here for condition 1
                    $('#Running').hide();
                    $('#Running_Scheme_with_is_Discount_Amount').hide();
                    $('#Running_Scheme_with_is_Discount_pr').hide();
                    $('#Slab_based_scheme_with_Discount_Amount').hide();
                    $('#Slab_based_scheme_with_Discount').hide();
                } else if (calculationType === "Slab_Based" && schemeType === "Discount") {
                    console.log("Slab Based with Discount % selected");
                    $('#Slab_based_scheme_with_Discount').show();
                    $('#Running').hide();
                    $('#Running_Scheme_with_is_Discount_Amount').hide();
                    $('#Running_Scheme_with_is_Discount_pr').hide();
                    $('#Slab_based_scheme_with_FOC').hide();
                    $('#Slab_based_scheme_with_Discount_Amount').hide();
                    // Add your logic here for condition 2
                } else if (calculationType === "Slab_Based" && schemeType === "Discount_Amount") {
                    console.log("Slab_Based with Discount Amount selected");
                    $('#Slab_based_scheme_with_Discount_Amount').show();
                    $('#Running').hide();
                    $('#Running_Scheme_with_is_Discount_Amount').hide();
                    $('#Running_Scheme_with_is_Discount_pr').hide();
                    $('#Slab_based_scheme_with_FOC').hide();
                    $('#Slab_based_scheme_with_Discount').hide();
                    // Add your logic here for condition 3
                } else if (calculationType === "Slab_Based" && schemeType === "CFC") {
                    console.log("Slab Based with CFC selected");
                    // Add your logic here for condition 4
                } else if (calculationType === "Slab_Based" && schemeType === "Pack") {
                    console.log("Slab Based with Pack selected");
                    // Add your logic here for condition 5
                } else if (calculationType === "Running" && schemeType === "FOC") {
                    console.log("Running with FOC selected");
                    $('#Running').show();
                    $('#Running_Scheme_with_is_Discount_Amount').hide();
                    $('#Running_Scheme_with_is_Discount_pr').hide();
                    $('#Slab_based_scheme_with_FOC').hide();
                    $('#Slab_based_scheme_with_Discount_Amount').hide();
                    $('#Slab_based_scheme_with_Discount').hide();
                    // Add your logic here for condition 5
                } else if (calculationType === "Running" && schemeType === "Discount") {
                    console.log("Running with Discount selected");
                    $('#Running_Scheme_with_is_Discount_pr').show();
                    $('#Running').hide();
                    $('#Running_Scheme_with_is_Discount_Amount').hide();
                    $('#Slab_based_scheme_with_FOC').hide();
                    $('#Slab_based_scheme_with_Discount_Amount').hide();
                    $('#Slab_based_scheme_with_Discount').hide();

                    // Add your logic here for condition 5
                } else if (calculationType === "Running" && schemeType === "Discount_Amount") {
                    console.log("Running with Discount_Amount selected");
                    $('#Running_Scheme_with_is_Discount_Amount').show();
                    $('#Running').hide();
                    $('#Running_Scheme_with_is_Discount_pr').hide();
                    $('#Slab_based_scheme_with_FOC').hide();
                    $('#Slab_based_scheme_with_Discount_Amount').hide();
                    $('#Slab_based_scheme_with_Discount').hide();

                    // Add your logic here for condition 5
                } else {
                    // Handle other conditions or provide a default case

                }

                // Add more conditions as needed
            });

            // Example for handling another specific combination
            $("#UOM, #Scheme_Type").change(function() {
                var uom = $("#UOM").val();
                var schemeType = $("#Scheme_Type").val();

                // Check for a specific combination of values
                if (uom === "Pack" && schemeType === "Discount_Amount") {
                    console.log("Pack with Discount Amount selected");
                    // Add your logic here
                }
                // Add more conditions as needed
            });













        });
    </script>




</body>

</html>