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
                        <li class="breadcrumb-item"><a href="javascript:"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">MSL</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="">

                    <a href="<?php echo $base_url; ?>StoreAudit/MSLImport.php" class="href">
                        <button type="button" class="btn btn-warning px-5">
                            <i class="bx bx-cloud-download mr-1"></i>Import
                        </button>
                    </a>

                    <a href="<?php echo $base_url; ?>StoreAudit/MSLadd.php" class="href">
                                <button type="button" class="btn btn-warning px-5"></i>Creation +</button>
                            </a>






                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <div aria-label="Page navigation example ">

                        <div class="bx-pull-left">
                            <label for="inputCategory" class="form-label">Select Row</label>

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
                        <div class="bx-pull-right">
                            <input type="text" class="form-control" placeholder="search ...">

                        </div>
                    </div>


                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Channel</th>
                                <th>Customer</th>
                                <th>Brand</th>
                                <th>Sub-brand</th>
                                <th>SKU</th>
                                <th>MSL</th>
                                <th>Brand</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>12345678</td>
                                <td>Test</td>
                                <td>DREEF</td>
                                <td>wqdf</td>
                                <td>Test</td>
                                <td>DREEF</td>
                                <td>rr</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                            <a href="<?php echo $base_url; ?>StoreAudit/MSLEdit.php" class="href">
                                                <div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">

                                            <a href="#" class="delete-button">
                                                <div class="font-22 text-danger"> <i class="lni lni-trash"></i>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </td>
                            </tr>



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


<!--end wrapper-->
<?php include('../footer.php'); ?>