<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('review::reviews.reviews'))); ?>

    <li class="nav-item"><?php echo e(clean(trans('review::reviews.reviews'))); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('admin::include.page.table'); ?>
    <?php $__env->slot('title', clean(trans('review::reviews.review'))); ?>
    <?php $__env->slot('resource', 'reviews'); ?>
    <?php $__env->slot('name', clean(trans('review::reviews.review'))); ?>

    <?php $__env->slot('thead'); ?>
        <tr>
            <?php echo $__env->make('admin::include.table.select-all',["name"=>trans('review::reviews.review')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <th><?php echo e(clean(trans('review::reviews.table.ebook'))); ?></th>
            <th><?php echo e(clean(trans('review::reviews.table.reviewer_name'))); ?></th>
            <th><?php echo e(clean(trans('review::reviews.table.rating'))); ?></th>
            <th><?php echo e(clean(trans('review::reviews.table.approved'))); ?></th>
            <th data-sort><?php echo e(clean(trans('admin::admin.table.created'))); ?></th>
        </tr>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        new DataTable('#reviews-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'ebook', name: 'ebook.slug', orderable: false, searchable: false, defaultContent: '' },
                { data: 'reviewer_name' },
                { data: 'rating' },
                { data: 'status', name: 'is_approved', searchable: false },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Review/Resources/views/admin/reviews/index.blade.php ENDPATH**/ ?>