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
                        <li class="breadcrumb-item active" aria-current="page">Liquidation</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="">

                    <!-- <button type="button" class="btn btn-warning px-5" data-toggle="modal" data-target="#uploadModal">
                        Approve
                        Liduadation
                        Schemes
                    </button> -->



                    <button type="button" class="btn btn-warning px-5" data-toggle="modal" data-target="#uploadModal">
                        <i class="bx bx-cloud-download mr-1"></i> Export
                    </button>







                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div aria-label="Page navigation example ">

                        <div class="bx-pull-left">
                            <select class="form-select" id="inputCategory" name="category">
                                <option value="5">5
                                </option>
                                <option value="10">10
                                </option>
                                <option value="20">20
                                </option>
                                <option value="50">50
                                </option>
                            </select>
                        </div>
                        <ul class="  bx-pull-right">
                            <input type="text" class="form-control" placeholder="search ...">

                        </ul>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Liquidation ID</th>
                                <th>Customer</th>
                                <th>Salesman</th>
                                <th>Discount Type</th>
                                <th>Discount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>System Architect</td>
                                <td>admin</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>

                                <td>Approve</td>

                                <td>

                                    <div class="d-flex">


                                        <div class="d-flex order-actions">
                                            <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="href">
                                                    Status Change
                                            </div>
                                            </a>

                                        </div>

                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                            <a href="./LiquidationView.php" class="href">
                                                <div class="font-22 "> <i class="lni lni-eye"></i>
                                                </div>
                                            </a>

                                        </div>

                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                            <button class="delete-button">
                                                <a href="#" class="href">
                                                    <div class="font-22 text-danger"> <i class="lni lni-trash"></i>
                                                    </div>
                                                </a>

                                            </button>

                                        </div>
                                    </div>
                                </td>
                                </td>
                            </tr>



                        </tbody>

                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination round-pagination  bx-pull-right">
                        <li class="page-item"><a class="page-link" href="javascript:;">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:;javascript:;">1</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:;">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:;">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:;">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Status Change</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-4">
                    <label><b>Status</b></label>
                    <select class="form-select">
                        <option value="Select">Select</option>
                        <option value="Approve">Approve</option>
                        <option value="Reject">Reject</option>
                        <option value="Pending">Pending</option>
                        <option value="Clarification">Clarification</option>
                    </select>
                </div>
                <div class="form-group">
                    <label><b>Remark</b></label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>