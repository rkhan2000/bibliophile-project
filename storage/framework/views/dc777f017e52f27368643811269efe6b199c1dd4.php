<?php echo e(Form::text('title', clean(trans('ebook::attributes.title')), $errors, $ebook, ['required' => true])); ?>

<?php echo e(Form::select('user_id', clean(trans('ebook::attributes.user')), $errors, $users, $ebook, ['required' => true,'class'=>'select2'])); ?>

<?php echo e(Form::select('categories', clean(trans('ebook::attributes.categories')), $errors, $categories, $ebook, ['class' => 'select2', 'multiple' => true,'required' => true,])); ?>

<?php echo e(Form::select('authors', clean(trans('ebook::attributes.authors')), $errors, $authors, $ebook, ['required' => true,'multiple' => true,'class'=>'select2 csselect2','data-tags'=>"true",'help'=>clean(trans('ebook::ebooks.form.author_add_help_text'))])); ?>


<?php echo e(Form::text('key_word', clean(trans('ebook::attributes.key_word')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('target_reader', clean(trans('ebook::attributes.target_reader')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('publisher', clean(trans('ebook::attributes.publisher')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('publication_year', clean(trans('ebook::attributes.publication_year')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('password', clean(trans('ebook::attributes.password')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('isbn', clean(trans('ebook::attributes.isbn_number')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('book_edition', clean(trans('ebook::attributes.book_edition')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('price', clean(trans('ebook::attributes.price')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('country_origin', clean(trans('ebook::attributes.country_origin')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('book_language', clean(trans('ebook::attributes.book_language')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('number_of_pages', clean(trans('ebook::attributes.number_of_pages')), $errors, $ebook, [])); ?>

<?php echo e(Form::text('buy_url', clean(trans('ebook::attributes.buy_url')), $errors, $ebook, [])); ?>

<?php echo e(Form::checkbox('is_featured', clean(trans('ebook::attributes.is_featured')), clean(trans('ebook::ebooks.form.feature_the_ebook')), $errors, $ebook)); ?>

<?php echo e(Form::checkbox('is_private', clean(trans('ebook::attributes.is_private')), clean(trans('ebook::ebooks.form.private_the_ebook')), $errors, $ebook)); ?>

<?php echo e(Form::checkbox('is_active', clean(trans('ebook::attributes.is_active')), clean(trans('ebook::ebooks.form.enable_the_ebook')), $errors, $ebook)); ?>

        
    <?php /**PATH C:\xampp\htdocs\Modules/Ebook/Resources/views/admin/ebooks/tabs/information.blade.php ENDPATH**/ ?>