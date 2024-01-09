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
                        <li class="breadcrumb-item active" aria-current="page">Sales Report</li>
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


                    <button type="button" class="btn btn-warning px-5 filter-btn">
                        <i class="bx bx-filter-alt mr-1"></i> Filter
                    </button>




                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">

                <form class="filter-form" style="display: none;" action="?">
                    <div class="row">

                        <div class="col-md-3 mb-3">

                            <label for=""> Territory</label>


                            <select class="selectpicker" id="Country" name="Territory" data-actions-box="true" name="Territory" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="1-2">Option 1.2</option>
                                <option value="2-3">Option 1.3</option>
                                <option value="3-2">Option 1.2</option>
                                <option value="4-3">Option 1.3</option>
                                <option value="5-2">Option 1.2</option>
                                <option value="6-3">Option 1.3</option>
                                <option value="1-2">Option 1.2</option>
                                <option value="2-3">Option 1.3</option>
                                <option value="3-2">Option 1.2</option>
                                <option value="4-3">Option 1.3</option>
                                <option value="5-2">Option 1.2</option>
                                <option value="6-3">Option 1.3</option>

                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for=""> Date</label>
                            <input type="date" class="form-control selectpicker" name="Date">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for=""> Area</label>
                            <select class="selectpicker" id="State" name="Area" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="status">status 1</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                            </select>
                        </div>


                        <div class="col-md-3 mb-3">
                            <label for=""> Category</label>
                            <select class="selectpicker" id="Region" name="Category" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="status">status 1</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                            </select>
                        </div>



                        <div class="col-md-3 mb-3">
                            <label for=""> Brand</label>
                            <select class="selectpicker" id="Area" name="Brand" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="status">status 1</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for=""> SKU</label>
                            <select class="selectpicker" id="Area" name="SKU" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="status">status 1</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for=""> Channel</label>
                            <select class="selectpicker" id="Area" name="Channel" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="status">status 1</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for=""> Salesman</label>
                            <select class="selectpicker" id="Area" name="Salesman" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="status">status 1</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for=""> Manager</label>
                            <select class="selectpicker" id="Area" name="Manager" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="status">status 1</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for=""> Channel Head</label>
                            <select class="selectpicker" id="Area" name="ChannelHead" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="status">status 1</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for=""> Agency</label>
                            <select class="selectpicker" id="Area" name="Agency" data-actions-box="true" multiple aria-label="Default select example" title="Selected" data-size="5" data-live-search="true" multiple data-selected-text-format="count" data-count-selected-text=" ({0} items selected)">
                                <option value="status">status 1</option>
                                <option value="status2">status 2</option>
                                <option value="status3">status 3</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3 d-flex">
                            <div class=" ms-auto">
                                <!-- <input type="reset" class="btn btn-outline-success px-3" value="Reset"> -->
                                <button class="btn btn-outline-success px-3">Reset</button>
                                <button type="submit" class="btn btn-primary px-3">Apply</button>
                            </div>
                        </div>
                    </div>
                    <hr />
                </form>

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
                                <th>Year</th>
                                <th>Month</th>
                                <th>Channel</th>
                                <th>Country</th>
                                <th>Emirate</th>
                                <th>Area</th>
                                <th>Business_Unit</th>
                                <th>Channel Head</th>
                                <th>Supervisor</th>
                                <th>Salesman</th>
                                <th>Target Outlets</th>
                                <th>Billed Outlets</th>
                                <th>Billed %</th>

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
                                <td>Fawaz</td>
                                <td> Ameen Mohammed </td>
                                <td>996</td>
                                <td>1,057</td>
                                <td>106%</td>

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