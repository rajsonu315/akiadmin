
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
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Customer Category & Brand Mapping Rules</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="">
                            <a href="<?php echo $base_url; ?>Mapping/CustomerCategoryBrandMappingCreate.php" class="href">
                                <button type="button" class="btn btn-warning px-5"></i>Create New Rule +</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Rule Id</th>
                                        <th>Rule Name</th>
                                        <th>Type of customers</th>
                                        <th>Brand </th>
                                        <th>Category</th>
                                        <th>Create Date</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12345678</td>
                                        <td>Test</td>
                                        <td>DREEF</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>08-12-23</td>
                                       
                                        <td>
                                            <div class="d-flex order-actions">
                                                <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                                                    <a href="<?php echo $base_url; ?>Mapping/CustomerCategoryBrandMappingEdit.php" class="href">
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



                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end page wrapper -->

    <!--end wrapper-->
	<?php include('../footer.php'); ?>

