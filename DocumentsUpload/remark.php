<style>
    .remarks1 {
        list-style: none;
        padding: 0;
        margin: 0;
        align-items: center;
        display: flex;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        border-radius: 5px;

    }

    .remarks1 li {
        justify-content: center;
        align-items: center;
        width: 58%;
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
    }


</style>

<?php include('../header.php'); ?>

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
                        <li class="breadcrumb-item active" aria-current="page">Remarks</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->



        <div class="row row-cols-1 row-cols-md-1 row-cols-lg1 row-cols-xl-1">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 mx-auto">
                                <div class="">
                                    <div class="card-body">
                                        <div class="col-md-12">
                                            <form action="">
                                                <div class="mt-2">
                                                    <ul class="remarks1">
                                                        <li class="fw-bold">User Person</li>
                                                        <li>Sachin</li>
                                                    </ul>
                                                </div>

                                                <div class="mt-2">
                                                    <ul class="remarks1">
                                                        <li class="fw-bold">Functionality</li>
                                                        <li>Sachin</li>
                                                    </ul>
                                                </div>

                                                <div class="mt-2">
                                                    <ul class="remarks1">
                                                        <li class="fw-bold">Upload Image</li>
                                                        <li>
                                                            <img src="<?php echo $base_url; ?>assets/images/avatars/avatar-2.png" width="10%">
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="mt-2">
                                                    <ul class="remarks1">
                                                        <li class="fw-bold">Title</li>
                                                        <li>
                                                            Dubai
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="mt-2 Description1">
                                                    <div class="form-group mt-2">
                                                        <textarea id="editor" class="form-control" name="test" rows="5" cols="80" placeholder="Description"></textarea>
                                                    </div>
                                                </div>
                                        </div>

                                        <div class="d-md-flex d-grid align-items-center gap-3 mt-3 ">
                                            <button type="button" class="btn btn-primary px-4">Submit</button>
                                            <button onclick="history.back()" type="button" class="btn btn-danger bx-pull-right">Back</button>

                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('../footer.php'); ?>


<!--end page wrapper -->




<!--start overlay-->