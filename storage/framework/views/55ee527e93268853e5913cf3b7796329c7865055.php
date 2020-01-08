<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title><?php echo e(config('app.name')); ?> <?php echo $__env->yieldContent('Role'); ?></title>

    
    <?php echo $__env->make('auth.DashboardLayout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<?php if(auth()->guard()->guest()): ?>
    
    <?php
        return redirect()->route('login');
    ?>

<?php else: ?>
    
    <div class="wrapper">
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>
    </div>
<?php endif; ?>



<?php echo $__env->make('auth.DashboardLayout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\auth\DashboardLayout\DashboardMasterLayout.blade.php ENDPATH**/ ?>