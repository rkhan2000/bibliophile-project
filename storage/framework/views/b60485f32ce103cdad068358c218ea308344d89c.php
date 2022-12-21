<?php echo e(Form::textarea('googleanalyticscode', clean(trans('setting::attributes.googleanalyticscode')), $errors, $settings)); ?>

<?php echo e(Form::textarea('custom_js', clean(trans('setting::attributes.custom_js')), $errors, $settings,['help'=>clean(trans('setting::attributes.custom_js_help'))])); ?>

<?php echo e(Form::textarea('custom_css', clean(trans('setting::attributes.custom_css')), $errors, $settings,['help'=>clean(trans('setting::attributes.custom_css_help'))])); ?>

    
<?php /**PATH C:\xampp\htdocs\Modules/Setting/Resources/views/admin/settings/tabs/custom_js_css.blade.php ENDPATH**/ ?>