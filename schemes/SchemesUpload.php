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
                            <div class="col-xl-9 mx-auto">

                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf">
                                            </div>

                                            <div class="col-md-12">
                                                <div class="d-md-flex d-grid align-items-center gap-3 mt-5 ">
                                                    <button type="button" class="btn btn-warning px-5">Submit

                                                    </button>


                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->










                    </div>
                </div>
            </div>

        </div>


        <!--  -->

    </div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>