<!DOCTYPE html>
<html lang="en">

<!-- Head Start -->
<?php
    $title = 'Our Portfolio | Godly Media Concepts';
    include('includes/meta.php');
?>
<!-- //End Head -->

<body>

  <!-- ======= Header ======= -->
  <?php include('includes/header.php'); ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
   <?php 
      $page = 'Portfolio';
      include('includes/breadcrumb.php'); ?>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <?php include('includes/works.php'); ?>
    <!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('includes/footer.php'); ?>
  <!-- End Footer -->

  <!-- Vendor Files -->
  <?php include('includes/below-footer.php'); ?>

</body>

</html>