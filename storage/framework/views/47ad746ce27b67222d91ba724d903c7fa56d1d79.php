<?php echo e(Form::text('translatable[site_name]', clean(trans('setting::attributes.translatable.site_name')), $errors, $settings, ['required' => true])); ?>

<?php echo e(Form::text('site_email', clean(trans('setting::attributes.site_email')), $errors, $settings, ['required' => true])); ?>

<?php echo e(Form::select('supported_locales', clean(trans('setting::attributes.supported_locales')), $errors, $locales, $settings, ['class' => 'select2', 'required' => true, 'multiple' => true])); ?>

<?php echo e(Form::select('default_locale', clean(trans('setting::attributes.default_locale')), $errors, $locales, $settings, ['required' => true,'class' => 'select2'])); ?>

<?php echo e(Form::select('default_timezone', clean(trans('setting::attributes.default_timezone')), $errors, $timeZones, $settings, ['required' => true,'class' => 'select2'])); ?>

<?php echo e(Form::select('user_role', clean(trans('setting::attributes.new_user_role')), $errors, $roles, $settings, ['required' => true,'class' => 'select2'])); ?>

<?php echo e(Form::checkbox('enable_registrations', clean(trans('setting::attributes.enable_registrations')), clean(trans('setting::settings.form.allow_new_user_registrations')), $errors, $settings)); ?>

<?php echo e(Form::checkbox('welcome_email', clean(trans('setting::attributes.welcome_email')), clean(trans('setting::settings.form.send_welcome_email_after_registration')), $errors, $settings)); ?>

<?php echo e(Form::checkbox('auto_approve_user', clean(trans('setting::attributes.auto_approve_new_members')), clean(trans('setting::settings.form.automatically_approve_new_members_after_registration')), $errors, $settings)); ?>

<?php echo e(Form::checkbox('cookie_bar_enabled', clean(trans('setting::attributes.cookie_bar_enabled')), clean(trans('setting::settings.form.show_cookie_bar')), $errors, $settings)); ?>




    <?php /**PATH C:\xampp\htdocs\Modules/Setting/Resources/views/admin/settings/tabs/general.blade.php ENDPATH**/ ?>