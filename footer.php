<?php
// Define the base URL
$base_url = 'http://127.0.0.1/akiadmin/'; // Replace with your actual base URL

// Example link with the base URL
?>




<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2023. All right reserved.</p>
</footer>
</div>
<!--end wrapper-->

<!-- <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/3722a220-aacb-46ea-97ba-43f562315439/webchat/config.js" defer></script> -->

<script src="<?php echo $base_url; ?>assets/js/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="<?php echo $base_url; ?>assets/js/bootstrap.bundle.min.js"></script>
<!--extraJS-->
<script src="<?php echo $base_url; ?>assets/extraJS/metismenu/js/metisMenu.min.js"></script>
<!-- <script src="<?php echo $base_url; ?>assets/extraJS/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $base_url; ?>assets/extraJS/datatable/js/dataTables.bootstrap5.min.js"></script> -->
<script src="<?php echo $base_url; ?>assets/extraJS/simplebar/js/simplebar.min.js"></script>
<!-- <script src="<?php echo $base_url; ?>assets/extraJS/perfect-scrollbar/js/perfect-scrollbar.js"></script> -->
<script src="<?php echo $base_url; ?>assets/js/sweetalert.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/app.js"></script>

<script src="<?php echo $base_url; ?>assets/js/editor.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js'></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

</body>

</html>