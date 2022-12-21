<div class="file-action">

<?php if(request()->type || request()->extension): ?>
    <button type="button" class="btn btn-icon btn-default btn-border btn-xs select-media "
        data-id="<?php echo e($file->id); ?>"
        data-path="<?php echo e($file->path); ?>"
        data-filename="<?php echo e($file->filename); ?>"
        data-type="<?php echo e(strtok($file->mime, '/')); ?>"
        data-icon="<?php echo e($file->icon()); ?>"
        data-toggle="tooltip"
        data-placement="bottom"
        title="<?php echo e(clean(trans('files::files.select_this_file'))); ?>"
    >
       <i class="fas fa-file-medical"></i>
    </button>
<?php else: ?>
    <a class="btn btn-icon btn-default btn-border btn-xs" href="<?php echo e(route('admin.files.download',$download_key)); ?>"><i class="fas fa-download"></i></a>
    <?php if($file->extension=='pdf'): ?> 
        <a class="btn btn-icon btn-default btn-border btn-xs" href="<?php echo e($file->path); ?>" data-fancybox="gallery" data-caption="<?php echo e($file->filename); ?>" data-type="iframe"  ><i class="fas fa-eye"></i></a>
    <?php elseif($file->isImage()): ?> 
        <a class="btn btn-icon btn-default btn-border btn-xs" href="<?php echo e($file->path); ?>" class="fancybox" data-fancybox="gallery" data-caption="<?php echo e($file->xs); ?>" ><i class="fas fa-eye"></i></a>
    <?php elseif($file->isVideo()): ?> 
        <a class="btn btn-icon btn-default btn-border btn-xs" data-fancybox="gallery" href="<?php echo e($file->path); ?>" data-caption="<?php echo e($file->filename); ?>"   data-width="640" data-height="360" ><i class="fas fa-eye"></i></a>
    <?php else: ?>
        <a class="btn btn-icon btn-default btn-border btn-xs" href="<?php echo e(route('admin.files.download',$download_key)); ?>"><i class="fas fa-eye"></i></a>
    <?php endif; ?>
<?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\Modules/Files/Resources/views/admin/files/include/action.blade.php ENDPATH**/ ?>