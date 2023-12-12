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
                        <li class="breadcrumb-item active" aria-current="page">Create New Route </li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <!-- <button type="button" class="btn btn-primary">Back</button> -->

                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">

                <div class="form-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form action="<?php echo $base_url; ?>BeatManagement/">

                                    <div class="row">

                                       

                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="inputName" class="form-label">Select Customer </label>
                                                <select class="form-select" name="BeatType">
                                                    <option value="">Select</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                        </div>




                                        <style>
                                            #Date,
                                            #Weekdays {
                                                display: none;

                                            }
                                        </style>
                                        <div class="col-md-12">
                                            <div class="mb-3 mt-2 bg-light p-2 rounded">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="action" value="Date" id="Route1">
                                                    <label class="form-check-label" for="Route1">
                                                        Date
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="action" value="Weekdays" id="Route2">
                                                    <label class="form-check-label" for="Route2">
                                                        Weekdays
                                                    </label>
                                                </div>
                                            </div>

                                            <div id="Date" class="show-hide">
                                                <form class="mt-5">
                                                    <table class="table table-bordered table-hover" id="dynamic_fieldone">
                                                        <td>
                                                            <div class="row" style="align-items: center;">
                                                                <div class="col-md-12 dynamic-field" id="dynamic-field-1">
                                                                    <div class="row ">

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="field" class="hidden-md">Date</label>
                                                                                <input type="date" id="field" class="form-control" name="field[]" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 mt-3">
                                                                            <button type="button" name="add" id="addone" class="btn btn-primary bx-pull-right">Add More</button>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <div class="form-group">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </table>

                                                </form>
                                            </div>
                                            <div id="Weekdays" class="show-hide">
                                                <form class="mt-0">
                                                   
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <label>Frequency</label>
                                                        <select class="form-select mb-2" name="Frequency">
                                                            <option value="">Select</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                     <!-- <button type="button" name="add" id="addtwo" class="btn btn-primary bx-pull-right mb-2">Add More</button> -->
                                                        </div>
                                                    </div>
                                                    <table class="table table-bordered table-hover" id="dynamic_fieldtwo" style="width: 100%;">
                                                        <td>
                                                            <div class="row" style="align-items: center;">
                                                                <div class="col-md-12 dynamic-field" id="dynamic-field-1">
                                                                    <div class="row ">

                                                                        <div class="col-md-2">
                                                                            <label for="field" class="hidden-md mb-2"><b>Week1</b></label>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Monday"> Monday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Friday"> Friday </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label for="field" class="hidden-md mb-2"><b>Week2</b></label>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Monday"> Monday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Friday"> Friday </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label for="field" class="hidden-md mb-2"><b>Week3</b></label>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Monday"> Monday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Friday"> Friday </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label for="field" class="hidden-md mb-2"><b>Week4</b></label>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Monday"> Monday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Friday"> Friday </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label for="field" class="hidden-md mb-2"><b>Week5</b></label>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Monday"> Monday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><input type="checkbox" value="Friday"> Friday </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-1">
                                                                        <div class="form-group">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                            </div>
                                            </td>
                                            </table>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-flex justify-content-star t">
                            <button type="submit" class="btn btn-success pb-2">Submit</button>

                            </a>

                        </div>

                    </div>
                    </form>
                </div>




            </div>
        </div>
    </div><!--end row-->
</div>





</div>
</div>


</div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("input[name=action]").change(function() {
            var test = $(this).val();
            $(".show-hide").hide();
            $("#" + test).show();
        });
    });
</script>

<script>
    $(document).ready(function() {

        var i = 1;


        $("#addone").click(function() {
             i++;
            $('#dynamic_fieldone').append(`<tr>
                <td>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                               
                                <input type="date" class="form-control sub-item" name="sub-item[]" />
                            </div>
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

<script>
    $(document).ready(function() {

        var i = 1;


        $("#addtwo").click(function() {




            i++;
            $('#dynamic_fieldtwo').append(`<tr>
                 <td>
                    <div class="row" style="align-items: center;">
                        <div class="col-md-12 dynamic-field" id="dynamic-field-1">
                            <div class="row ">

                                <div class="col-md-2">
                                <label for="field" class="hidden-md mb-2"><b>Week1</b></label>
                                <div class="form-group">
                                <label><input type="checkbox" value="Monday"> Monday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Friday"> Friday </label>
                            </div>
                                </div>
                                <div class="col-md-2">
                                <label for="field" class="hidden-md mb-2"><b>Week2</b></label>
                                <div class="form-group">
                                <label><input type="checkbox" value="Monday"> Monday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Friday"> Friday </label>
                            </div>
                                </div>
                                <div class="col-md-2">
                                <label for="field" class="hidden-md mb-2"><b>Week3</b></label>
                                <div class="form-group">
                                <label><input type="checkbox" value="Monday"> Monday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Friday"> Friday </label>
                            </div>
                                </div>
                                <div class="col-md-2">
                                <label for="field" class="hidden-md mb-2"><b>Week4</b></label>
                                <div class="form-group">
                                <label><input type="checkbox" value="Monday"> Monday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Friday"> Friday </label>
                            </div>
                                </div>
                                <div class="col-md-2">
                                <label for="field" class="hidden-md mb-2"><b>Week5</b></label>
                                <div class="form-group">
                                <label><input type="checkbox" value="Monday"> Monday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Tuesday"> Tuesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Wednesday"> Wednesday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Thursday"> Thursday </label>
                            </div>
                            <div class="form-group">
                                <label><input type="checkbox" value="Friday"> Friday </label>
                            </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <button type="button" name="remove" class="btn btn-danger btn_remove" >X</button>
                                    </div>
                                </div>
                                </div>
                                
                                
                                
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