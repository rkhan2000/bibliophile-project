<?php $__env->startSection('title', clean(trans('cynoebook::404.not_found'))); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="page-error clearfix">
            <span>40<span>4</span></span>

            <div class="col-md-4 col-md-offset-4">
                <div class="error-text text-center">
                    <h1><?php echo e(clean(trans('cynoebook::404.oops'))); ?></h1>
                    <h4><?php echo e(clean(trans('cynoebook::404.the_page_not_found'))); ?></h4>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookreview\Themes\Cynoebook\views/errors/404.blade.php ENDPATH**/ ?>