<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--extraJS-->
    <link href="assets/extraJS/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/extraJS/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/extraJS/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/extraJS/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />


    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> -->
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> Admin Dashboard</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
		<?php include('header.php'); ?>

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
                                <li class="breadcrumb-item active" aria-current="page">Categories Listing
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="">

                            <button type="button" class="btn btn-warning px-5" data-toggle="modal"
                            data-target="#uploadModal">
                             Inclucsions/ Exclusions
                        </button>

                            <button type="button" class="btn btn-warning px-5" data-toggle="modal"
                                data-target="#uploadModal">
                                <i class="bx bx-cloud-download mr-1"></i> Download
                            </button>
                            <button type="button" class="btn btn-warning px-5"><i
                                    class="bx bx-cloud-upload mr-1"></i>Upload</button>
                                    <a href="./CategoriesListingNewAdd.php" class="href">
                                        <button type="button" class="btn btn-warning px-5"></i>Add New +</button>
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
                                        <th>S.no</th>
                                        <th>Family</th>
                                        <th>Sub Family</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Line</th>
                                        <th>Brand</th>
                                        <th>Brand Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Product 1</td>
                                        <td>Category A</td>
                                        <td>$100.00</td>
                                        <td><img src="https://m.media-amazon.com/images/I/51ZNNrQ-CuS.jpg" class="img-thumbnail" width="50px" alt="Product 1 Image"></td>
                   
                                        <td>In Stock</td>
                                        <td>2023/09/14</td>
                                        <td>Admin</td>
                                        <td>
                          





                                            <div class="d-flex order-actions">
												 <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="CategoriesListingEdit.php" class="href">
														<div class="font-22 text-primary"> <i class="lni lni-pencil-alt"></i>
														</div>
													</a>

												</div> 

												 <!-- <div class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
													<a href="./OrderSalesmanview.php" class="href">
														<div class="font-22 "> <i class="lni lni-eye"></i>
														</div>
													</a>

												</div>  -->

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
                                    <!-- Add more rows here if needed -->
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">

            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>

    </div>



    <div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
        role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                    in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                    McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                    obscure Latin words, consectetur.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload CSV File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="csvUploadForm">
                        <div class="form-group">
                            <label for="csvFile">Choose a CSV File:</label>
                            <input type="file" class="form-control-file" id="csvFile" accept=".csv" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="uploadBtn">Upload</button>
                </div>
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--extraJS-->
    <script src="assets/extraJS/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/extraJS/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/extraJS/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/extraJS/simplebar/js/simplebar.min.js"></script>
    <script src="assets/extraJS/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

    <!--app JS-->
    <script src="assets/js/app.js"></script>
    <script>
        // Function to handle file upload
        function handleFileUpload() {
            const fileInput = document.getElementById('csvFile');
            const selectedFile = fileInput.files[0];

            if (selectedFile) {
                console.log('Selected file:', selectedFile.name);
                // Add your file processing logic here
            } else {
                alert('Please select a CSV file to upload.');
            }
        }

        // Add a click event listener to the Upload button
        document.getElementById('uploadBtn').addEventListener('click', handleFileUpload);
    </script>
</body>

</html>