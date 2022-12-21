<?php $__env->startSection('content'); ?>
<div class="tab-content">
    <div class="tab-pane active" id="details">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="info-text"> Application has been successfully installed</h2>
            </div>
            <div class="col-sm-12 text-center">
                <a href="<?php echo e(url('admin')); ?>" class="btn btn-next btn-fill btn-danger btn-wd" target="_blank">
                    
                    <i class="fa fa-cog" aria-hidden="true"></i><br>
                    Go to Dashboard
                </a>
                <a href="<?php echo e(url('/')); ?>" class="btn btn-next btn-fill btn-danger btn-wd" target="_blank">
                    
                    <i class="fa fa-home" aria-hidden="true"></i><br>
                    Go to Home page
                </a>
            </div>
        </div>
    </div>
</div>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('installer.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/installer/complete.blade.php ENDPATH**/ ?>