<?php $__env->startSection('PageTitle', 'خدمات ترجمه'); ?>

<?php $__env->startSection('content'); ?>


<!-- ***** Breadcrumb Area Start ***** -->
<?php (session(['PageTitle'=>'TranslationServices'])); ?>
<?php echo $__env->make('vazhenegar.SharedParts.PageHeadSection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** Breadcrumb Area End ***** -->
<?php echo $__env->make('vazhenegar.TranslationServices.BodySection', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ***** translation services Area End ***** -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('vazhenegar.MainLayout.MasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\projects\vazhenegar\Main Project\resources\views/vazhenegar/TranslationServices.blade.php ENDPATH**/ ?>