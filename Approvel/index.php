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
                        <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Approvel List
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div aria-label="Page navigation example ">

                        <div class="bx-pull-left">

                            <label for="category"></label>
                            <select class="form-select" id="category" name="category">
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
                        <ul class="bx-pull-right">
                            <input type="text" class="form-control" placeholder="search ...">

                        </ul>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Approvel id</th>
                                <th>Approvel Type</th>
                                <th>Approvel Status</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Product 1</td>
                                <td>Category A</td>

                                <td><span class="badge bg-success">Success</span></td>
                                <td>






                                    <div class="d-flex order-actions">




                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Approvel" href="Approvel.php" class="btn btn-warning "><i class="lni lni-checkmark-circle"></i></a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected" href="Rejected.php" class="btn btn-danger"><i class="lni lni-close"></i> </a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="clarification" href="clarification.php" class="btn btn-secondary "><i class="lni lni-construction"></i>
                                        </a>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="View" href="./view.php" class="btn btn-dark "><i class="lni lni-eye"></i></a>

                                    </div>
                                </td>
                            </tr>
                            <!-- Add more rows here if needed -->
                        </tbody>


                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination round-pagination  bx-pull-right">
                        <li class="page-item"><a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>
<!--end page wrapper -->






<?php include('../footer.php'); ?>