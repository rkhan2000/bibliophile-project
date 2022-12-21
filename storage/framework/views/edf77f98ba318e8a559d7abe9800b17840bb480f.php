<?php echo e(Form::text('first_name', clean(trans('user::attributes.users.first_name')), $errors, $currentUser, ['required' => true])); ?>

<?php echo e(Form::text('last_name', clean(trans('user::attributes.users.last_name')), $errors, $currentUser, ['required' => true])); ?>

<?php echo e(Form::text('username', clean(trans('user::attributes.users.username')), $errors, $currentUser, ['required' => true])); ?>

<?php echo e(Form::email('email', clean(trans('user::attributes.users.email')), $errors, $currentUser, ['required' => true])); ?>

    
<?php /**PATH C:\xampp\htdocs\Modules/User/Resources/views/admin/profile/tabs/general.blade.php ENDPATH**/ ?>