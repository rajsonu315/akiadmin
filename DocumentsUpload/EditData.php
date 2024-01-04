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
                        <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
            <div class="form-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form class="needs-validation" action="<?php echo $base_url; ?>DocumentsUpload/" novalidate>

                                    <div class="row">

                                       

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputName" class="form-label" >	Title </label>
                                                <input type="text" class="form-control" value="Test">
                                                <div class="invalid-feedback">
											    Please select.
										  </div>
                                            </div>
             
                                    </div>
                                    <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputName" class="form-label" >Description </label>
                                                <input type="text" class="form-control" value="RTEE">
                                                <div class="invalid-feedback">
											    Please select.
										  </div>
                                            </div>
             
                                    </div>
                                    <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputName" class="form-label" >Media </label>
                                                <input type="text" class="form-control" value="Test">
                                                <div class="invalid-feedback">
											    Please select.
										  </div>
                                            </div>
             
                                    </div>
   
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                            
                                            <button class="action btn btn btn-warning px-4 flex-shrink-0 mx-2 btn-sm single-add">Submit</button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
              
            </div>
        </div>

    </div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>

