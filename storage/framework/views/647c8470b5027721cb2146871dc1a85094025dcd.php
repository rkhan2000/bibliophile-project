<?php echo e(Form::wysiwyg('description', clean(trans('ebook::attributes.description')), $errors, $ebook, ['required' => true])); ?>


<?php echo e(Form::textarea('short_description', clean(trans('ebook::attributes.short_description')), $errors, $ebook, ['rows' => 2,])); ?><?php /**PATH C:\xampp\htdocs\Modules/Ebook/Resources/views/admin/ebooks/tabs/description.blade.php ENDPATH**/ ?>