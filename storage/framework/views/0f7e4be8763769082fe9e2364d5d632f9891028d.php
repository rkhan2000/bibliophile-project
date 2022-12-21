<div class="right-actions" id="reportBook">
    <div class="title"><?php echo e(clean(trans('cynoebook::ebook.report_issue'))); ?></div>
    <div class="action-content">
        <div id="action-movefile">
            <form method="POST" action="<?php echo e(route('ebooks.report.store',$ebook)); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="form-group row <?php echo e($errors->has('reason') ? 'has-error' : ''); ?>" >
                        <label for="reason" class="col-md-12 text-left"><?php echo e(clean(trans('cynoebook::ebook.reason'))); ?></label>
                        <div class="col-md-12 p-0">
                            <textarea class="form-control" name="reason" rows="5" placeholder="<?php echo e(clean(trans('cynoebook::ebook.reason_placeholder'))); ?>" required></textarea>
                            <?php if($errors->has('reason')): ?>
                                <span class="error-message text-left"><?php echo e(clean($errors->first('reason'))); ?></span>
                            <?php endif; ?>
                        </div>    
                    </div>
                    <div class="form-group text-left">
                        <button type="submit" class="btn btn-primary btn-lg"><?php echo e(clean(trans('cynoebook::ebook.report'))); ?></button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
    <div class="action-toggle">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
</div><?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/ebook/report/report.blade.php ENDPATH**/ ?>