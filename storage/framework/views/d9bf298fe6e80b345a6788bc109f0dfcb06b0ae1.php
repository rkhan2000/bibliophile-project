<div class="card">
    <div class="card-body">
        <?php if($errors->has('commentable_type')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($errors->first('commentable_type')); ?>

            </div>
        <?php endif; ?>
        <?php if($errors->has('commentable_id')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e($errors->first('commentable_id')); ?>

            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('comments.store')); ?>">
            <?php echo csrf_field(); ?>
            <?php echo view('honeypot::honeypotFormFields'); ?>
            <input type="hidden" name="commentable_type" value="\<?php echo e(get_class($model)); ?>" />
            <input type="hidden" name="commentable_id" value="<?php echo e($model->getKey()); ?>" />

            
            <?php if(isset($guest_commenting) and $guest_commenting == true): ?>
                <div class="form-group">
                    <label for="message">Enter your name here:</label>
                    <input type="text" class="form-control <?php if($errors->has('guest_name')): ?> error <?php endif; ?>" name="guest_name" />
                    <?php $__errorArgs = ['guest_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                       <span class="error-message">
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="message">Enter your email here:</label>
                    <input type="email" class="form-control <?php if($errors->has('guest_email')): ?> error <?php endif; ?>" name="guest_email" />
                    <?php $__errorArgs = ['guest_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="error-message">
                            <?php echo e($message); ?>

                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="message"><?php echo e(clean(trans('cynoebook::comments.leave_your_comment'))); ?><span>*</span></label>
                <textarea  class="form-control   <?php if($errors->has('message')): ?> error <?php endif; ?>" name="message" rows="3"></textarea>
                <?php if($errors->has('message')): ?>
                <span class="error-message"><?php echo e(clean(trans('cynoebook::comments.please_enter_comment_text'))); ?></span>
                <?php endif; ?>
                
            </div>
            <button type="submit" class="btn btn-primary comments-submit pull-right" data-loading>
                <?php echo e(clean(trans('cynoebook::comments.post_comment'))); ?>

            </button>
            
        </form>
    </div>
</div>
<br /><?php /**PATH C:\xampp\htdocs\resources\views/vendor/comments/_form.blade.php ENDPATH**/ ?>