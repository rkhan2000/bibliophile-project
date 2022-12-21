<div id="reviews" class="reviews tab-pane fade in clearfix <?php echo e(request()->has('reviews') || review_form_has_error($errors) ? 'active' : ''); ?>">
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <div class="user-review clearfix">
                <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="comment">
                        <div class="comment-details">
                            <div class="col-lg-3">
                                <h5 class="user-name"><?php echo e($review->reviewer_name); ?></h5>
                                    <?php echo $__env->make('public.ebooks.partials.ebook.rating', ['rating' => $review->rating], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <span class="time" data-toggle="tooltip" title="<?php echo e($review->created_at->toFormattedDateString()); ?>">
                                    <?php echo e($review->created_at->diffForHumans()); ?>

                                </span>
                            </div>
                            <div class="col-lg-9">
                                <p class="user-text1"><?php echo e($review->comment); ?></p>
                            </div>
                            <div class="clearfix"></div>
                            
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h3><?php echo e(clean(trans('cynoebook::ebook.reviews.there_are_no_reviews_for_this_ebook'))); ?></h3>
                <?php endif; ?>

                <div class="pull-right">
                    <?php echo $reviews->links(); ?>

                </div>
            </div>

        </div>
        <?php echo $__env->make('public.ebooks.partials.ebook.reviews.ratings_overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/ebook/tab_contents/reviews.blade.php ENDPATH**/ ?>