<div class="form-group row ">
    <label for="about" class="col-md-4 text-left">
        <h4><?php echo e($title); ?></h4>
    </label>
    <div class="single-image-wrapper col-md-8 p-0">
       
        <div class="single-image image-holder-wrapper pull-left">
            <?php if(! $file->exists): ?>
                <div class="image-holder placeholder">
                    <i class="fas fa-file-upload"></i>
                </div>
            <?php else: ?>
                <div class="image-holder">
                    <i class="fas fa-file"></i>
                    <button type="button" class="btn remove-pdf" data-input-name="<?php echo e($inputName); ?>"></button>
                    <input type="hidden" name="<?php echo e($inputName); ?>" value="<?php echo e($file->id); ?>">
                    <textarea class="form-control file-display-name" readonly="1"><?php echo e($file->filename); ?></textarea>
                </div>
            <?php endif; ?>
        </div>
        
        <button type="button" class="pdf-picker btn btn-default btn-border pull-left" data-input-name="<?php echo e($inputName); ?>" data-filetype="<?php echo e($fileType); ?>">
            <i class="fas fa-folder-open mr-2"></i> <?php echo e(clean(trans('files::files.browse'))); ?>

        </button>
        <div class="clearfix"></div>
        <div class="pdf-file-result">
            <?php if($file->exists): ?>
                <?php echo e(Form::text('ebook_file', '', $errors, '', ['labelCol' => 0, 'required' => true,' readonly'=>true,'style'=>'display:none;','value'=>$file->filename,'class'=>'pdf-file-name'])); ?>

            <?php else: ?>
                <?php echo e(Form::text('ebook_file', '', $errors, '', ['labelCol' => 0, 'required' => true,' readonly'=>true,'style'=>'display:none;','value'=>'','class'=>'pdf-file-name'])); ?>

            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Modules/Files/Resources/views/admin/pdf_picker/single.blade.php ENDPATH**/ ?>