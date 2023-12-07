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
                                <li class="breadcrumb-item active" aria-current="page">Shelves</li>
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
                                        <th> ID</th>
                                        <th> Name</th>

                                        <th>Product Type</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12345678</td>
                                        <td>Test</td>
                                        <td>DREEF</td>
                                      
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