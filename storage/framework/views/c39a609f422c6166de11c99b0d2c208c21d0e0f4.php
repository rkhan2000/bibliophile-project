<?php $__env->startSection('title', clean(trans('admin::dashboard.dashboard'))); ?>

<?php $__env->startSection('page-header'); ?>
    <h4 class="page-title"><?php echo e(clean(trans('admin::dashboard.dashboard'))); ?></h4>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php if ($currentUser->hasAccess('admin.ebooks.index')) : ?>
        <?php echo $__env->make('admin::dashboard.include.ebooks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if ($currentUser->hasAccess('admin.users.index')) : ?>
        <?php echo $__env->make('admin::dashboard.include.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if ($currentUser->hasAccess('admin.ebooks.index')) : ?>
        <?php echo $__env->make('admin::dashboard.include.latest-ebooks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <div class="row">
        <div class="col-sm-5">
            <?php if ($currentUser->hasAccess('admin.reviews.index')) : ?>
                <?php echo $__env->make('admin::dashboard.include.latest_reviews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
        <div class="col-sm-7">
            <?php if ($currentUser->hasAccess('admin.reportedebooks.index')) : ?>
                <?php echo $__env->make('admin::dashboard.include.latest_reportedebooks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Admin/Resources/views/dashboard/index.blade.php ENDPATH**/ ?>