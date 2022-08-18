<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('frontend.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</head>

<body>
    <!-- Start Main Top -->
    <?php echo $__env->make('frontend.inc.top_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Main Top -->

    <!-- Start Main Top -->

    <?php echo $__env->make('frontend.inc.main_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Main Top -->

    <!-- Start Slider -->
    <?php echo $__env->yieldContent('slider'); ?>
    <!-- End Slider -->

    

    <?php echo $__env->yieldContent('main_content'); ?>

    


    <!-- Start Footer  -->

    <?php echo $__env->make('frontend.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- End Footer  -->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\eshopping\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>