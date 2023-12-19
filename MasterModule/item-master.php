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
                        <li class="breadcrumb-item active" aria-current="page">Item Master</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="">
<!-- 
                    <a href="./additemMaster.php" class="href">
                        <button type="button" class="btn btn-warning px-3">
                            <i class="bx bx-plus fw-bold"></i>
                            Add Item Master
                        </button>
                    </a>

                    <a href="./addschemeMaster.php" class="href">
                        <button type="button" class="btn btn-warning px-3">
                            <i class="bx bx-plus fw-bold"></i>
                            Add Customer Group
                        </button>
                    </a> -->
                    <a href="#" class="href">
                        <button type="button" class="btn btn-warning px-5">
                            Export
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <!--  -->


        <div class="row row-cols-1 row-cols-md-1 row-cols-lg1 row-cols-xl-1 mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <!-- ////////////////////////////// -->
                        <div class="table-responsive mt-4">
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
                                        <th>Scheme ID</th>
                                        <th>Scheme Type</th>
                                        <th>Scheme Owne</th>
                                        <th>Date of creation </th>
                                        <th>Start date</th>
                                        <th>ActTo dateions</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Scheme 1</td>
                                        <td>3 months</td>
                                        <td>North Region</td>
                                        <td>North Region</td>
                                        <td>North Region</td>
                                        <td>Retailer Type 1</td>
                                        <td>
                                            <span class="badge rounded-pill bg-success">Approve</span>
                                        </td>

                                        <td>

                                            <div class="d-flex order-actions">
                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <a href="./edititemMaster.php" class="href">
                                                        <div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <a href="" class="href">
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
                                    </tr>
                                    <!-- Add more rows as needed -->
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

        <!--  -->
    </div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>

<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js'></script>