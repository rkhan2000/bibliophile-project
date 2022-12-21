<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('admin::resource.edit', ['resource' => trans('author::authors.author')]))); ?>
    <?php $__env->slot('subtitle', $author->name); ?>
    <li class="nav-item"><a href="<?php echo e(route('admin.authors.index')); ?>"><?php echo e(clean(trans('author::authors.authors'))); ?></a></li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><?php echo e(clean(trans('admin::resource.edit', ['resource' => trans('author::authors.author')]))); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="<?php echo e(route('admin.authors.update', $author)); ?>" class="form-horizontal" id="author-edit-form" novalidate>
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('put')); ?>


            <?php echo $tabs->render(compact('author')); ?>

        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Author/Resources/views/admin/authors/edit.blade.php ENDPATH**/ ?>