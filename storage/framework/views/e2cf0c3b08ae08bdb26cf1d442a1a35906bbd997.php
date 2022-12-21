<div class="form-group row ">
    <label for="about" class="col-md-4 text-left">
        <h4><?php echo e($title); ?></h4>
    </label>
    <div class="multiple-images-wrapper col-md-8 p-0">
        <button type="button" class="pdf-picker btn btn-default btn-border  clearfix" data-input-name="<?php echo e($inputName); ?>" data-multiple data-filetype="<?php echo e($fileType); ?>">
            <i class="fas fa-folder-open mr-2"></i> <?php echo e(clean(trans('files::files.browse'))); ?>

        </button>
        <div class="multiple-images" data-input-validation="<?php echo e($inputValidation); ?>">
            <div class="image-list image-holder-wrapper notRequired clearfix">
                <?php if( $files->isEmpty()): ?>
                    <div class="image-holder placeholder cursor-auto">
                        <i class="fas fa-file-upload"></i>
                    </div>
                <?php else: ?>
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="image-holder">
                            <i class="fas fa-file"></i>
                            <button type="button" class="btn remove-pdf"data-input-name="<?php echo e($inputName); ?>" data-input-validation="<?php echo e($inputValidation); ?>" ></button>
                            <input type="hidden" name="<?php echo e($inputName); ?>" value="<?php echo e($file->id); ?>">
                            <textarea class="form-control file-display-name" readonly="1"><?php echo e($file->filename); ?></textarea>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
                
        </div>
        
        

        
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Modules/Files/Resources/views/admin/pdf_picker/multiple.blade.php ENDPATH**/ ?>