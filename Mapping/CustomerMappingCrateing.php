<?php include('../header.php'); ?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/src/bootstrap-duallistbox.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
<script src="<?php echo $base_url; ?>assets/src/jquery.bootstrap-duallistbox.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .btn {
        border: 1px solid #b69c6f;
    }
</style>

<script>
    var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox();
    $("#demoform").submit(function() {
        alert($('[name="duallistbox_demo1[]"]').val());
        return false;
    });
</script>
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Customer Mapping</li>
                    </ol>
                </nav>
            </div>

        </div>
        <div class="card">
            <div class="card-body p-4">
                <!-- <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="mb-1"><b>Select salesman</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>


                </div> -->

                <div class="row mb-3">
                    <h5><b>Sales Channel</b></h5>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="mb-1"><b>Select salesman</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Sales Channel</b></label>
                            <input type="text" class="form-control">
                        </div>
                    </div> -->
                    
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <select multiple="multiple" size="10" name="duallistbox_demo2" class="demo2">

                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            <option value="option4">Option 4</option>
                            <option value="option5">Option 5</option>
                            <option value="option6">Option 6</option>
                            <option value="option7">Option 7</option>
                            <option value="option8">Option 8</option>
                            <option value="option9">Option 9</option>
                            <option value="option0">Option 10</option>
                            <option value="option0">Option 11</option>
                            <option value="option0">Option 12</option>
                            <option value="option0">Option 13</option>
                            <option value="option0">Option 14</option>
                            <option value="option0">Option 15</option>
                            <option value="option0">Option 16</option>
                            <option value="option0">Option 17</option>
                            <option value="option0">Option 18</option>
                            <option value="option0">Option 19</option>
                            <option value="option0">Option 20</option>
                        </select>
                        <script>
                            var demo2 = $('.demo2').bootstrapDualListbox({
                                nonSelectedListLabel: 'Non-selected',
                                selectedListLabel: 'Selected',
                                preserveSelectionOnMove: 'moved',
                                moveOnSelect: false,
                                nonSelectedFilter: ''
                            });
                        </script>
                    </div>
                </div>

                <hr />
                <div class="row mb-3">
                    <h5><b>Terriority</b></h5>
                    <!-- <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Name</b></label>
                            <input type="text" class="form-control">
                        </div>
                    </div> -->
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Terriority1</b></label>
                             <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Terriority2</b></label>
                             <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Terriority3</b></label>
                             <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                   
                    
                </div>

                

                <hr />
                <div class="row mb-3">
                    <h5><b>Product Line</b></h5>
                    <!-- <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Brand</b></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Item Code</b></label>
                            <input type="text" class="form-control">
                        </div>
                    </div> -->
                    <div class="col-md-4">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Category 1</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Category 2</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Category 3</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                   
                    
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <select multiple="multiple" size="10" name="duallistbox_demo2" class="demo2">

                            <option value="option1">Brand 1</option>
                            <option value="option2">Brand 2</option>
                            <option value="option3">Brand 3</option>
                            <option value="option4">Brand 4</option>
                            <option value="option5">Brand 5</option>
                            <option value="option6">Brand 6</option>
                            <option value="option7">Brand 7</option>
                            <option value="option8">Brand 8</option>
                            <option value="option9">Brand 9</option>
                            <option value="option0">Brand 10</option>
                           
                        </select>
                        <script>
                            var demo2 = $('.demo2').bootstrapDualListbox({
                                nonSelectedListLabel: 'Non-selected',
                                selectedListLabel: 'Selected',
                                preserveSelectionOnMove: 'moved',
                                moveOnSelect: false,
                                nonSelectedFilter: ''
                            });
                        </script>
                    </div>
                </div>

                <div class="ms-auto d-flex gap-2 mt-2">
                        <div class="">
                            <a href="" class="href">
                                <button type="button" class="btn btn-warning px-5"></i>Download Current Mapping</button>
                            </a>
                        </div>
                        <div class="">
                            <a href="" class="href">
                                <button type="button" class="btn btn-warning px-5"></i>Upload New Mapping</button>
                            </a>
                        </div>
                    </div>

                    <div class="ms-auto d-flex justify-content-end gap-2 mt-3">
                        <div class="">
                            <a href="" class="href">
                                <button type="button" class="btn btn-warning px-5"></i>Cancel</button>
                            </a>
                        </div>
                        <div class="">
                            <a href="" class="href">
                                <button type="button" class="btn btn-warning px-5"></i>Submit</button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php include('../footer.php'); ?>