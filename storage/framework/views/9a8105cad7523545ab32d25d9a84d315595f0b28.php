<!doctype html>
<html lang="en">

<head>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="<?php echo e(url('admin/assets/css/material-dashboard.css?v=2.1.0')); ?>" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">

    <!-- Side Bar-->
    <?php echo $__env->make('dashboard.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Side Bar-->

    <div class="main-panel">

      <!-- start Nav Bar -->
      
      <!-- End Nav Bar -->

      <!-- Start Content --> 
      <div class="content">
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
      <!-- End Content -->
    
      <!-- Start Footer -->
      <?php echo $__env->make('dashboard.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- End Footer -->

    </div>
  </div>
  <!--   Core JS Files   -->
  <?php echo $__env->make('dashboard.layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<script type="text/javascript">

  $(document).ready(function() {

    $(".btn-primary").click(function(){ 
        var html = $(".clone").html();
        $(".increment").after(html);
    });

    $("body").on("click",".btn-danger",function(){ 
        $(this).parents(".control-group").remove();
    });

  });

</script>
<style>
  .hide
  {
    display: none !important;
  } 
</style>

</html><?php /**PATH H:\job\ItCoreApps\task1(E-Commerce)\12-7\project\resources\views/dashboard/layout/app.blade.php ENDPATH**/ ?>