<div class="form-group row ">
    <label for="about" class="col-md-4 text-left">
        <h4><?php echo e($title); ?></h4>
    </label>
    <div class="single-image-wrapper col-md-8 p-0">
        
        <div class="single-image image-holder-wrapper pull-left clearfix">
            <?php if(! $file->exists): ?>
                <div class="image-holder placeholder">
                    <i class="fas fa-camera-retro"></i>
                </div>
            <?php else: ?>
                <div class="image-holder">
                    <img src="<?php echo e($file->path); ?>">
                    <button type="button" class="btn remove-image" data-input-name="<?php echo e($inputName); ?>"></button>
                    <input type="hidden" name="<?php echo e($inputName); ?>" value="<?php echo e($file->id); ?>">
                </div>
            <?php endif; ?>
        </div>
        
        <button type="button" class="image-picker btn btn-default pull-left btn-border" data-input-name="<?php echo e($inputName); ?>">
            <i class="fas fa-folder-open mr-2"></i> <?php echo e(clean(trans('files::files.browse'))); ?>

        </button>
        <div class="clearfix"></div>
        <div class="image-file-result">
            <?php if($file->exists): ?>
                <?php echo e(Form::text('cover_image', '', $errors, '', ['labelCol' => 0, 'required' => true,' readonly'=>true,'style'=>'display:none;','value'=>$file->filename,'class'=>'image-file-name'])); ?>

            <?php else: ?>
                <?php echo e(Form::text('cover_image', '', $errors, '', ['labelCol' => 0, 'required' => true,' readonly'=>true,'style'=>'display:none;','value'=>'','class'=>'image-file-name'])); ?>

            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Modules/Files/Resources/views/admin/pdf_picker/book-cover.blade.php ENDPATH**/ ?>