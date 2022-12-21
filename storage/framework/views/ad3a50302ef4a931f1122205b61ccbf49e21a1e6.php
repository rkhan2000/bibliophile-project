<?php echo e(Form::checkbox('maintenance_mode', clean(trans('setting::attributes.maintenance_mode')), clean(trans('setting::settings.form.put_the_application_into_maintenance_mode')), $errors, $settings)); ?>

<?php echo e(Form::textarea('allowed_ips', clean(trans('setting::attributes.allowed_ips')), $errors, $settings, ['placeholder' => clean(trans('setting::settings.form.ip_addreses_seperated_in_new_line'))])); ?>

    <?php /**PATH C:\xampp\htdocs\Modules/Setting/Resources/views/admin/settings/tabs/maintenance.blade.php ENDPATH**/ ?>