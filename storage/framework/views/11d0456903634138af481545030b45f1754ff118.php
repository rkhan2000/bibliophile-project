<?php echo e(Form::text('name', clean(trans('author::attributes.name')), $errors, $author, ['required' => true])); ?>

<?php if(request()->routeIs('admin.authors.edit')): ?>
    <?php echo e(Form::text('slug', clean(trans('author::attributes.slug')), $errors,$author,['required' => true])); ?>

<?php endif; ?>

<?php echo $__env->make('files::admin.image_picker.single', [
    'title' => clean(trans('author::attributes.image')),
    'inputName' => 'files[author_image]',
    'file' => $author->author_image,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo e(Form::wysiwyg('description', clean(trans('author::attributes.description')), $errors, $author, [])); ?>


<?php echo e(Form::checkbox('is_active', clean(trans('author::attributes.is_active')), clean(trans('author::authors.form.enable_the_author')), $errors, $author)); ?>


<?php echo e(Form::checkbox('is_verified', clean(trans('author::attributes.is_verified')), clean(trans('author::authors.form.verified_the_author')), $errors, $author)); ?>

        
    <?php /**PATH C:\xampp\htdocs\Modules/Author/Resources/views/admin/authors/tabs/general.blade.php ENDPATH**/ ?>