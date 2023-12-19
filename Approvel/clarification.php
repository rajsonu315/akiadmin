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
                        <li class="breadcrumb-item active" aria-current="page">Approvel clarification
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="form-body mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="border border-3 p-4 rounded">
                        <form action="#" method="post">

                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <div class="d-flex align-items-center gap-3">

                                        <div class="form-check">
                                            <input class="form-check-input Approve" type="radio" value="Approve" name="flexRadioDefault" id="Approve" data-target="Approve" checked>
                                            <label class="form-check-label" for="Approve">
                                                Approve
                                            </label>
                                        </div>
                                        <div class="form-check form-check-success">
                                            <input class="form-check-input Rejected" type="radio" value="Rejected" name="flexRadioDefault" id="Rejected" data-target="Rejected">
                                            <label class="form-check-label" for="Rejected">
                                            Rejected
                                            </label>
                                        </div>

                                        <div class="form-check form-check-success">
                                            <input class="form-check-input clarification" type="radio" value="clarification" name="flexRadioDefault" id="clarification" data-target="clarification">
                                            <label class="form-check-label" for="clarification">
                                            clarification
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="mb-3 col-md-12">
                                    <label for="input11" class="form-label">Resion </label>
                                    <textarea class="form-control" id="input11" placeholder="Resion  ..." rows="3"></textarea>
                                </div>


                            </div>
                

                            <button type="button" class="btn btn btn-warning px-5 bx-pull-right">Submit</button>

                            <br><br>
                        </form>


                    </div>

                </div>

            </div><!--end row-->
        </div>


    </div>
</div>
<!--end page wrapper -->






<?php include('../footer.php'); ?>