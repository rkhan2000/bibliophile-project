<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('ebook::ebooks.ebooks'))); ?>

    <li class="nav-item"><?php echo e(clean(trans('ebook::ebooks.ebooks'))); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('admin::include.page.table'); ?>
    <?php $__env->slot('title', clean(trans('ebook::ebooks.ebooks'))); ?>
    <?php $__env->slot('buttons', ['create']); ?>
    <?php $__env->slot('resource', 'ebooks'); ?>
    <?php $__env->slot('name', clean(trans('ebook::ebooks.ebooks'))); ?>

    <?php $__env->slot('thead'); ?>
        <tr>
            <?php echo $__env->make('admin::include.table.select-all',["name"=>trans('ebook::ebooks.ebook')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <th><?php echo e(clean(trans('ebook::ebooks.table.bookcover'))); ?></th>
            <th><?php echo e(clean(trans('ebook::ebooks.table.title'))); ?></th>
            <th><?php echo e(clean(trans('ebook::ebooks.table.user'))); ?></th>
            <th><?php echo e(clean(trans('ebook::ebooks.table.password'))); ?></th>
            <th><?php echo e(clean(trans('ebook::ebooks.table.is_featured'))); ?></th>
            <th><?php echo e(clean(trans('ebook::ebooks.table.is_private'))); ?></th>
            <th><?php echo e(clean(trans('ebook::ebooks.table.views'))); ?></th>
            <th><?php echo e(clean(trans('admin::admin.table.status'))); ?></th>
            <th data-sort><?php echo e(clean(trans('admin::admin.table.created'))); ?></th>
        </tr>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        new DataTable('#ebooks-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'bookcover', orderable: false, searchable: false, width: '10%' },
                { data: 'title', name: 'translations.title', orderable: false, defaultContent: '' },
                { data: 'user.full_name', name: 'user.first_name', orderable: false, defaultContent: '' },
                { data: 'password', name: 'password', orderable: false, defaultContent: '' },
                { data: 'is_featured', name: 'is_featured', orderable: false, defaultContent: '' },
                { data: 'is_private', name: 'is_private', orderable: false, defaultContent: '' },
                { data: 'viewed', name: 'viewed', orderable: false, defaultContent: '' },
                { data: 'status', name: 'is_active', searchable: false },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Ebook/Resources/views/admin/ebooks/index.blade.php ENDPATH**/ ?>