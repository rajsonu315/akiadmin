<?php include('../header.php'); ?>

<style>
.inv {
  display: none;
}
</style>
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
                        <li class="breadcrumb-item active" aria-current="page">Add New</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
            <div class="form-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <form class="needs-validation" action="" novalidate>

                                    <div class="row">

                                       

                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="inputName" class="form-label">Select a User person </label>
                                                <select class="form-select" name="BeatType" required>
                                                    <option>Select</option>
                                                    <option value="Retailer">Retailer</option>
                                                    <option value="Salesman">Salesman</option>
                                                    <option value="Merchandiser">Merchandiser</option>
                                                </select>
                                                <div class="invalid-feedback">
											    Please select.
										  </div>
                                            </div>
                                        </div>
                
                                        <div class="col-md-6">
                                            <div class="mb-3">

                                                <label for="inputName" class="form-label">Select Functionality </label>
                                                <select class="form-select" id="target" name="BeatType" required>
                                                    <option>Select</option>
                                                    <option value="FAQs">FAQs</option>
                                                    <option value="Ducument">Ducuments View</option>
                                                   
                                                </select>
                                                <div class="invalid-feedback">
											    Please select.
										  </div>
                                            </div>
                                        </div>
                                        
                                    <div id="FAQs" class="inv">
                                       <div class="row">
                                       <div class="col-md-6  mt-5">
                                            <div class="mb-3">
                                                <label>Upload</label>
                                                <input type="file" class="form-control" required>
                                                <div class="text-end mt-2">
                                                <a href="">Download Format</a>
                                                </div>
                                            </div>
                                       </div>

                                       <div class="col-md-6">
                                            <div class="mb-3">
                                              
                                               
                                                <div class="text-end mt-4">
                                                <a class="h5" href="<?php echo $base_url; ?>DocumentsUpload/WriteHere.php"><b><u>Write Here</u></b></a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                    </div>
                                    <div id="Ducument" class="inv">
                                    <div class="row mt-5">
                                    <div class="col-md-6">
                                            <div class="mb-3">
                                              
                                               <label>Add a title</label>
                                               <input type="text" class="form-control" placeholder="Enter text" required>
                                            </div>
                                       </div>
                                       <div class="col-md-6  ">
                                            <div class="mb-3">
                                                <label>Upload Media</label>
                                                <input type="file" class="form-control" required>
                                               
                                            </div>
                                       </div>

                                    
                                    </div>
                                    </div>
   
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                           
                                            <button type="submit" class="action btn btn btn-warning px-4 flex-shrink-0 mx-2 btn-sm single-add">Submit</button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
              
            </div>
        </div>

    </div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>

<script>
document.getElementById("target").addEventListener("change", function () {
  "use strict";
  var vis = document.querySelector(".vis"),
    target = document.getElementById(this.value);
  if (vis !== null) {
    vis.className = "inv";
  }
  if (target !== null) {
    target.className = "vis";
  }
});

</script>