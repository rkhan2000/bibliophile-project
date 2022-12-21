
<?php echo e(Form::text('first_name', clean(trans('user::attributes.users.first_name')), $errors, $user, ['required' => true])); ?>

<?php echo e(Form::text('last_name', clean(trans('user::attributes.users.last_name')), $errors, $user, ['required' => true])); ?>

<?php echo e(Form::text('username', clean(trans('user::attributes.users.username')), $errors, $user, ['required' => true])); ?>

<?php echo e(Form::email('email', clean(trans('user::attributes.users.email')), $errors, $user, ['required' => true])); ?>

<?php echo e(Form::select('roles', clean(trans('user::attributes.users.roles')), $errors, $roles, $user, [ 'multiple' => true,'required' => true, 'class' => 'select2', 'data-placeholder'=>clean(trans("user::attributes.users.select_roles"))])); ?>


<?php if(request()->routeIs('admin.users.create')): ?>
    <?php echo e(Form::password('password', clean(trans('user::attributes.users.password')), $errors, null, ['required' => true])); ?>

    <?php echo e(Form::password('password_confirmation', clean(trans('user::attributes.users.password_confirmation')), $errors, null, ['required' => true])); ?>

<?php endif; ?>

<?php if(request()->routeIs('admin.users.edit')): ?>
    <?php echo e(Form::checkbox('activated', clean(trans('user::attributes.users.activated')), clean(trans('user::users.form.activated')), $errors, $user, ['disabled' => $user->id === $currentUser->id, 'checked' => old('activated', $user->isActivated())])); ?>

<?php endif; ?>
    
<?php /**PATH C:\xampp\htdocs\Modules/User/Resources/views/admin/users/tabs/general.blade.php ENDPATH**/ ?>