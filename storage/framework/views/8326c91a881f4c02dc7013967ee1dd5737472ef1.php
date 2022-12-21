<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('comment::comment.comment'))); ?>
    <li class="nav-item"><?php echo e(clean(trans('comment::comment.comment'))); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('admin::include.page.table'); ?>
    <?php $__env->slot('title', clean(trans('comment::comment.comment'))); ?>
    
    <?php $__env->slot('resource', 'comment'); ?>
    <?php $__env->slot('name', clean(trans('comment::comment.comment'))); ?>
    <?php $__env->slot('noedit', 1); ?>
     <?php $__env->slot('thead'); ?>
        <tr>
            <?php echo $__env->make('admin::include.table.select-all',["name"=>trans('comment::comment.comment')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <th><?php echo e(clean(trans('comment::comment.table.eBook'))); ?></th>
            <th><?php echo e(clean(trans('comment::comment.table.comment'))); ?></th>
            <th><?php echo e(clean(trans('comment::comment.table.user'))); ?></th>
            <th data-sort><?php echo e(clean(trans('admin::admin.table.created'))); ?></th>
        </tr>
    <?php $__env->endSlot(); ?> 
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        new DataTable('#comment-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'commentable.title', name: 'commentable.slug', searchable: true, defaultContent: '' },
                { data: 'comment', name: 'comment', orderable: false, defaultContent: '' },
                { data: 'commenter.full_name', name: 'commenter.first_name', searchable: true },
                
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>  

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Comment/Resources/views/admin/comment/index.blade.php ENDPATH**/ ?>