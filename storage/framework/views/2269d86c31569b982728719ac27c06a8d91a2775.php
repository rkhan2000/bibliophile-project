<?php echo e(Form::checkbox('newsletter_enabled', trans('setting::attributes.newsletter_enabled'), trans('setting::settings.form.allow_customers_to_subscribe'), $errors, $settings)); ?>

<?php echo e(Form::select('newsletter_display', clean(trans('setting::attributes.newsletter_display')), $errors, trans('setting::settings.form.newsletterDisplay'), $settings)); ?>

<?php echo e(Form::password('mailchimp_api_key', trans('setting::attributes.mailchimp_api_key'), $errors, $settings)); ?>

<?php echo e(Form::text('mailchimp_list_id', trans('setting::attributes.mailchimp_list_id'), $errors, $settings)); ?>

<?php echo $__env->make('files::admin.image_picker.single', [
    'title' => trans('setting::settings.form.newsletter_popup_image'),
    'inputName' => 'newsletter_bg_image',
    'file' => $newsletterBgImage,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Setting/Resources/views/admin/settings/tabs/newsletter.blade.php ENDPATH**/ ?>