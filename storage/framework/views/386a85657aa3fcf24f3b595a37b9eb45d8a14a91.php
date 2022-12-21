<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('admin::resource.create', ['resource' => trans('ebook::ebooks.ebook')]))); ?>
    
    <li class="nav-item"><a href="<?php echo e(route('admin.ebooks.index')); ?>"><?php echo e(clean(trans('ebook::ebooks.ebooks'))); ?></a></li>
    <li class="separator"><i class="flaticon-right-arrow"></i></li>
    <li class="nav-item"><?php echo e(clean(trans('admin::resource.create', ['resource' => trans('ebook::ebooks.ebook')]))); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="<?php echo e(route('admin.ebooks.store')); ?>" class="form-horizontal" id="ebook-create-form" novalidate>
            <?php echo e(csrf_field()); ?>

             
           <?php echo $tabs->render(compact('ebook')); ?>

        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $('.csselect2').select2({
            createTag: function(newTag) {
               return {
                   id: 'new:' + newTag.term,
                   text: newTag.term + ' (new)'
               };
           }
            
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Ebook/Resources/views/admin/ebooks/create.blade.php ENDPATH**/ ?>