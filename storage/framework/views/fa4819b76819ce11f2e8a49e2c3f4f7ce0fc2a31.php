<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('files::files.files'))); ?>

    <li class="nav-item"><?php echo e(clean(trans('files::files.files'))); ?></li>
<?php echo $__env->renderComponent(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('files::admin.files.include.uploader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('files::admin.files.include.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    
    (function () {
        "use strict";
        DataTable.setRoutes('#files-table .table', {
            index: '<?php echo e("admin.files.index"); ?>',
            
            <?php if ($currentUser->hasAccess("admin.files.edit")) : ?>
                
                edit: '<?php echo e("admin.files.edit"); ?>',
                
            <?php endif; ?>
            <?php if ($currentUser->hasAccess("admin.files.destroy")) : ?> 
                destroy: '<?php echo e("admin.files.destroy"); ?>',
            <?php endif; ?>
        });
        new DataTable('#files-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'thumbnail', orderable: false, searchable: false, width: '10%' },
                { data: 'filename', name: 'filename' },
                { data: 'size', name: 'size', orderable: false,searchable: false,},
                { data: 'extension', name: 'extension' },
                { data: 'created', name: 'created_at' },
                { data: 'action', name: 'action',orderable: false, searchable: false,className:"noclickable" },
            ],
        });
        
    })();   
    
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Files/Resources/views/admin/files/index.blade.php ENDPATH**/ ?>