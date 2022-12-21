<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('setting::settings.settings'))); ?>
    
    <li class="nav-item"> <?php echo e(clean(trans('setting::settings.settings'))); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
<div class="row clearfix mb-2">
    <div class="col-md-12 clearfix text-right">
        <a href="<?php echo e(route('admin.settings.cacheClear')); ?>" class="btn btn-sm btn-danger">
            <i class="fa fa-trash"> </i> <?php echo e(clean(trans('setting::attributes.clear_cache'))); ?>

        </a>
        <a href="<?php echo e(route('admin.settings.updateSitemap')); ?>" class="btn btn-sm btn-primary"> 
            <i class="fas fa-sitemap"></i> <?php echo e(clean(trans('setting::attributes.update_sitemap'))); ?>

        </a>
        <a href="<?php echo e(url('sitemap.xml')); ?>" class="btn btn-sm btn-primary" target="_blank"> 
            <i class="fa fa-link"></i> <?php echo e(clean(trans('setting::attributes.go_to_sitemap'))); ?>

        </a>
        <button id="import" class="import btn btn-sm btn-warning">
            <i class="fa fa-database" aria-hidden="true"></i>  <?php echo e(clean(trans('setting::attributes.dummy_data'))); ?>

        </button> 
        
        <div id="cover-spin"></div>

        
    </div>
</div>
<div class="row">
    
    <div class="col-md-12">
        <form method="POST" action="<?php echo e(route('admin.settings.update')); ?>" class="form-horizontal" id="settings-edit-form" novalidate>
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('put')); ?>


            <?php echo $tabs->render(compact('settings')); ?>

        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Setting/Resources/views/admin/settings/edit.blade.php ENDPATH**/ ?>