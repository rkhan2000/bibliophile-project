<?php echo $__env->yieldPushContent('styles'); ?>

<script>
(function () {
    "use strict";
    window.CI = {
        version: '<?php echo e(app_version()); ?>',
        csrfToken: '<?php echo e(csrf_token()); ?>',
        baseUrl: '<?php echo e(url('/')); ?>',
        langs: {},
        data: {},
    };
    
    CI.langs['admin::admin.buttons.delete'] = '<?php echo e(clean(trans('admin::admin.buttons.delete'))); ?>';
    CI.langs['admin::admin.delete.confirmation'] = '<?php echo e(clean(trans('admin::admin.delete.confirmation'))); ?>';
    CI.langs['admin::admin.delete.confirmation_message'] = '<?php echo e(clean(trans('admin::admin.delete.confirmation_message'))); ?>';
    CI.langs['admin::admin.delete.btn_delete'] = '<?php echo e(clean(trans('admin::admin.delete.btn_delete'))); ?>';
    CI.langs['admin::admin.delete.btn_cancel'] = '<?php echo e(clean(trans('admin::admin.delete.btn_cancel'))); ?>';
    CI.langs['admin::admin.delete.success_message'] = '<?php echo e(clean(trans('admin::admin.delete.success_message'))); ?>';
    
    CI.langs['files::files.success_message'] = '<?php echo e(clean(trans('files::files.success_message'))); ?>';
    CI.langs['files::files.files_manager'] = '<?php echo e(clean(trans('files::files.files_manager'))); ?>';
    CI.langs['files::messages.image_has_been_added'] = '<?php echo e(clean(trans('files::messages.image_has_been_added'))); ?>';
    CI.langs['files::messages.file_has_been_added'] = '<?php echo e(clean(trans('files::messages.file_has_been_added'))); ?>';
  

    CI.langs['admin::admin.dummy.confirmation'] = '<?php echo e(clean(trans('admin::admin.dummy.confirmation'))); ?>';
    CI.langs['admin::admin.dummy.confirmation_message'] = '<?php echo e(clean(trans('admin::admin.dummy.confirmation_message'))); ?>';
    CI.langs['admin::admin.dummy.btn_import'] = '<?php echo e(clean(trans('admin::admin.dummy.btn_import'))); ?>';
    CI.langs['admin::admin.dummy.btn_cancel'] = '<?php echo e(clean(trans('admin::admin.dummy.btn_cancel'))); ?>';
    CI.langs['admin::admin.dummy.success_message'] = '<?php echo e(clean(trans('admin::admin.dummy.success_message'))); ?>';
    
})();
</script>

<?php echo $__env->yieldPushContent('general'); ?>

<?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
<?php /**PATH C:\xampp\htdocs\Modules/Admin/Resources/views/include/general.blade.php ENDPATH**/ ?>