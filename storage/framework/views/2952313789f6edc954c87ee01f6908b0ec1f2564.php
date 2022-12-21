<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('ebook::reportedebooks.ebooks'))); ?>

    <li class="nav-item"><?php echo e(clean(trans('ebook::reportedebooks.ebooks'))); ?></li>
<?php echo $__env->renderComponent(); ?>
<?php $__env->startComponent('admin::include.page.table'); ?>
    <?php $__env->slot('title', clean(trans('ebook::ebooks.ebooks'))); ?>
    <?php $__env->slot('buttons', ['create']); ?>
    <?php $__env->slot('resource', 'reportedebooks'); ?>
    <?php $__env->slot('name', clean(trans('ebook::ebooks.ebooks'))); ?>
    <?php $__env->slot('noedit', 1); ?>
    
    <?php $__env->slot('thead'); ?>
        <tr>
            <?php echo $__env->make('admin::include.table.select-all',["name"=>trans('ebook::reportedebooks.ebooks')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <th><?php echo e(trans('ebook::reportedebooks.table.title')); ?></th>
            <th><?php echo e(trans('ebook::reportedebooks.table.user')); ?></th>
            <th><?php echo e(trans('ebook::reportedebooks.table.reason')); ?></th>
            <th data-sort><?php echo e(trans('admin::admin.table.created')); ?></th>
            <th><?php echo e(trans('admin::admin.table.action')); ?></th>
        </tr>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
            
        new DataTable('#reportedebooks-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'ebook.title', name: 'ebook.slug', orderable: false, defaultContent: '' },
                { data: 'user.full_name', name: 'user.first_name', orderable: false, defaultContent: '' },
                { data: 'reason', name: 'reason', orderable: false, defaultContent: '' },
                { data: 'created', name: 'created_at' },
                { data: 'action', name: 'action',orderable: false, searchable: false,className:"noclickable" },
            ],
            
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Ebook/Resources/views/admin/reportedebooks/index.blade.php ENDPATH**/ ?>