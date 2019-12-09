<?php
	$sess = $this->session->userdata('admin');
	// print_r($sess);
	// exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Panel | <?= $title ?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets') ?>/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets') ?>/sweetalert2/sweetalert2.min.css">
  <script src="<?= base_url('assets') ?>/sweetalert2/sweetalert2.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets') ?>/js/jquery-3.4.1.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/datepicker/css/bootstrap-datepicker.min.css">
 
  <script type="text/javascript" src="<?= base_url('assets') ?>/datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets') ?>/images/favicon.png" />
</head>
<body>
	<style type="text/css">
		select.form-control {
    padding: .4375rem .75rem;
    border: 0;
    outline: 1px solid #ebedf2;
    color: #212529;

}
.navbar.default-layout-navbar .navbar-brand-wrapper .navbar-brand {
    color: #203bbc;
    font-size: 1.5rem;
    line-height: 48px;
    margin-right: 0;
    padding: .25rem 0;
    width: 100%;
    font-family: algerian;
}
	</style>
  <script type="text/javascript">
     var BASE_URL ="<?php echo base_url()?>";
  </script>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php $this->load->view('admin/layout/navbar') ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php $this->load->view('admin/layout/sidebar') ?>
      
      <!-- partial -->
      <div class="main-panel">

        <?php $this->load->view($page) ?>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?= date('Y') ?> <a href="javascript:void(0)" target="_blank">Web Koperasi</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?= base_url('assets') ?>/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url('assets') ?>/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url('assets') ?>/js/off-canvas.js"></script>
  <script src="<?= base_url('assets') ?>/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('assets') ?>/js/dashboard.js"></script>
  <!-- End custom js for this page-->
         <script type="text/javascript">
 $(document).ready(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>
</body>

</html>
