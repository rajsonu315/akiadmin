<?php include('../header.php'); ?>
<!--end header -->
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New FAQ</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="border rounded-4  p-4 mb-4">


                    <form action="remark.php" class="form-horizontal">
                        <div id="items" class="form-group">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Title">
                            </div>
                            <div class="form-group mt-4">
                                <label>Description</label>
                                <textarea id="editor" class="form-control" name="test" rows="5" cols="80"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning px-3 mt-4">Save</button>
      
                    </form>





                </div>
            </div>

        </div>
    </div>

</div>
</div>
<!--end page wrapper -->
<?php include('../footer.php'); ?>

 <script src="<?php echo $base_url; ?>assets/editer/ckeditor.js"></script>
<script>
 CKEDITOR.replace('editor');
</script> 

