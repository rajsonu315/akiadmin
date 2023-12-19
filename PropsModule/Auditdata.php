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
                        <li class="breadcrumb-item active" aria-current="page">Props Module Audit data </li>
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

                            <select class="form-select" id="inputCategory" name="inputCategory">
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
                            <label for="search" class="form-label"></label>

                            <input type="text" class="form-control" name="search" id="search" placeholder="search ...">

                        </div> 
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            <th>S.no.</th>
                                <th>Customber Id</th>
                                <th>Customber Name</th>
                                <th>Salesman Id</th>
                                <th>Salesman Name</th>
                                <th>Asset Id</th>
                                <th>Asset Name</th>
                                <th>Asset Status</th>
                                <th>Audit Date </th>
                                <th>Audit Imgae</th>
                                <th>Remark</th>
                               
                             
                                <th>Status</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>46523</td>
                                <td>test</td>
                                <td>85623</td>
                                <td>test</td>
                                <td>4528</td>
                                <td>test3</td>
                                <td><span class="text-success">approve</span></td>

                                <td>01/01/2023</td>
                                
                                <td>
                                <img src="https://codervent.com/rocker/demo/vertical/assets/images/products/01.png" class="product-img-2" alt="product img">
                                </td>
                                <td>95652</td>

                                <td><span class="text-success">approve</span></td>
                          
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
<!--end page wrapper -->
<?php include('../footer.php'); ?>