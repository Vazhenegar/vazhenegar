<?php $__env->startSection('Title', 'لیست سفارشات جدید'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardCurrentUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('vazhenegar.DashboardElements.Admin.DashboardAdminBadges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php (session(['List'=>'NewOrders'])); ?>
    <?php echo $__env->make('vazhenegar.DashboardElements.SharedParts.DashboardList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\DashboardElements\Admin\DashboardAdminNewOrders.blade.php ENDPATH**/ ?>