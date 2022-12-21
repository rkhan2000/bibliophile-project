<?php echo $__env->make('files::admin.image_picker.single', [
    'title' => clean(trans('user::attributes.users.avatar')),
    'inputName' => 'files[avatar]',
    'file' => $currentUser->avatar,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo e(Form::textarea('about', clean(trans('user::attributes.users.about')), $errors, $currentUser)); ?>

<?php echo e(Form::text('facebook', clean(trans('user::attributes.users.facebook')), $errors, $currentUser)); ?>

<?php echo e(Form::text('twitter', clean(trans('user::attributes.users.twitter')), $errors, $currentUser)); ?>

<?php echo e(Form::text('google', clean(trans('user::attributes.users.google')), $errors, $currentUser)); ?>

<?php echo e(Form::text('instagram', clean(trans('user::attributes.users.instagram')), $errors, $currentUser)); ?>

<?php echo e(Form::text('linkedin', clean(trans('user::attributes.users.linkedin')), $errors, $currentUser)); ?>

<?php echo e(Form::text('youtube', clean(trans('user::attributes.users.youtube')), $errors, $currentUser)); ?>


<?php /**PATH C:\xampp\htdocs\Modules/User/Resources/views/admin/profile/tabs/profile.blade.php ENDPATH**/ ?>