<?php include('../../header.php'); ?>


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
                        <li class="breadcrumb-item active" aria-current="page">B2B Business Review reports</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="">

                    <a href="#" class="href">
                        <button type="button" class="btn btn-warning px-5">
                            <i class="bx bx-cloud-download mr-1"></i> Export
                        </button>
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
                                <th>Date</th>
                                <th>Total Sales Value</th>
                                <th>Total Discount / Scheme Value</th>
                                <th>Avergae Trade scheme spend % / Total Sales </th>
                                <th>Total No. of Customers Existing </th>
                                <th>Additional Customers Registered</th>
                                <th>Total No. of Customers ordered</th>
                                <th>Total No, of SKU's available on App</th>
                                <th>Total No. of SKU's sold</th>
                                <th>No. of orders generated</th>
                                <th>Average order value per order</th>
                                <th>Average Trade scheme spend / order </th>
                                <th>Average No. of SKU's sold per order</th>
                                <th>Cost of Customer Acquistion per Customer = Trade scheme spend total / No. of Active customers</th>
                                <th>No. of Customers ordering more than once in a month </th>
                                <th>No of customers ordering weekly order during the month </th>
                                <th>No. of customers didn't order during the month </th>
                                <th>No of customers didn't order in last 3 months </th>
                               



                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023</td>
                                <td>June</td>
                                <td>Supermarket Others</td>
                                <td></td>
                                <td>Dubai</td>
                                <td></td>
                                <td></td>
                                <td>Fawaz Hamze</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>

                                <td>Test</td>
                                


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
<?php include('../../footer.php'); ?>