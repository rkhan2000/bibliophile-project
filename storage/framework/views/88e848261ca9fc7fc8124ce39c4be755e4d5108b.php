<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('author::authors.authors'))); ?>

    <li class="nav-item"><?php echo e(clean(trans('author::authors.authors'))); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('admin::include.page.table'); ?>
    <?php $__env->slot('title', clean(trans('author::authors.authors'))); ?>
    <?php $__env->slot('buttons', ['create']); ?>
    <?php $__env->slot('resource', 'authors'); ?>
    <?php $__env->slot('name', clean(trans('author::authors.authors'))); ?>

    <?php $__env->slot('thead'); ?>
        <tr>
            <?php echo $__env->make('admin::include.table.select-all',["name"=>trans('author::authors.author')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <th><?php echo e(clean(trans('author::authors.table.image'))); ?></th>
            <th><?php echo e(clean(trans('author::authors.table.name'))); ?></th>
            <th><?php echo e(clean(trans('author::authors.table.create_by'))); ?></th>
            <th><?php echo e(clean(trans('admin::admin.table.status'))); ?></th>
            <th><?php echo e(clean(trans('author::attributes.is_verified'))); ?></th>
            <th data-sort><?php echo e(clean(trans('admin::admin.table.created'))); ?></th>
        </tr>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        new DataTable('#authors-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'image', orderable: false, searchable: false, width: '10%' },
                { data: 'name', name: 'translations.name', orderable: false, defaultContent: '' },
                { data: 'user.full_name', name: 'user.first_name', orderable: false, defaultContent: '' },
                { data: 'status', name: 'is_active', searchable: false },
                { data: 'is_verified', name: 'is_verified', searchable: false },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Author/Resources/views/admin/authors/index.blade.php ENDPATH**/ ?>