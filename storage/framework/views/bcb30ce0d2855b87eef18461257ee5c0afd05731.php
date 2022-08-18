<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('backend.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="">


    <!-- [ navigation menu ] start -->

    <?php echo $__env->make('backend.inc.side_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <?php echo $__env->make('backend.inc.header_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">

                            <?php echo $__env->yieldContent('main_content'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('backend.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\eshop\resources\views/backend/layouts/app.blade.php ENDPATH**/ ?>