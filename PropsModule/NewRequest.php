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
                        <li class="breadcrumb-item active" aria-current="page">New Request</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="">

                    <button type="button" class="btn btn-warning px-5">
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
                        <div class="  bx-pull-right">
                            <input type="text" class="form-control" placeholder="search ...">

                        </div>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>

                     
                            <tr>
                                <th>S.no.</th>
                                <th>Salesperson Name</th>
                                <th>Outlet Name</th>
                                <th>Request Type</th>
                                <th>Prop Type</th>
                                <th>Image</th>
                                <th>Date Time</th>
                                <th>Remarks</th>
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
                                <td>
                                <img src="https://codervent.com/rocker/demo/vertical/assets/images/products/01.png" class="product-img-2" alt="product img">
                                </td>
                                <td>test</td>
                                <td>123456789</td>
                                <td>
                                    Pending

                                </td>
                                <td>
                                    <div class="d-flex order-actions">
              

                                        <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                            <a href="./formdata.php" class="href">
                                                <div class="font-22 "> <i class="lni lni-eye"></i>
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
<?php include('../footer.php'); ?>