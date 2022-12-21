<div class="col-lg-4 col-md-5">
    <div class="rating">
        <div class="average-rating clearfix">
            <div class="average pull-left">
                <span><?php echo e(intl_number($ebook->avgRating())); ?></span>
            </div>
            <div class="pull-left">
                <?php echo $__env->make('public.ebooks.partials.ebook.rating', ['rating' => $ebook->avgRating()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <span class="rate-of-average">
                    <?php echo e(intl_number($ebook->avgRating())); ?> <?php echo e(clean(trans('cynoebook::ebook.reviews.out_of_5'))); ?>

                    (<?php echo e(intl_number($ebook->reviews->count())); ?> <?php echo e(clean(trans('cynoebook::ebook.user_reviews'))); ?> )
                </span>

            </div>
        </div>

    </div>
    <div class="review-form clearfix">
                <form method="POST" action="<?php echo e(route('ebooks.reviews.store', $ebook)); ?>" class="clearfix">
                    <?php echo e(csrf_field()); ?>


                    <h3><?php echo e(clean(trans('cynoebook::ebook.reviews.add_a_review'))); ?></h3>

                    <span>
                        <?php echo e(clean(trans('cynoebook::ebook.reviews.your_rating'))); ?>

                        <span class="rating-required">*</span>
                    </span>

                    <div class="clearfix"></div>

                    <fieldset class="rating">
                        <input type="radio" id="star-5" name="rating" value="5">
                        <label class="full" for="star-5" data-toggle="tooltip" title="<?php echo e(clean(trans('cynoebook::ebook.reviews.5_star'))); ?>"></label>

                        <input type="radio" id="star-4" name="rating" value="4">
                        <label class="full" for="star-4" data-toggle="tooltip" title="<?php echo e(clean(trans('cynoebook::ebook.reviews.4_star'))); ?>"></label>

                        <input type="radio" id="star-3" name="rating" value="3">
                        <label class="full" for="star-3" data-toggle="tooltip" title="<?php echo e(clean(trans('cynoebook::ebook.reviews.3_star'))); ?>"></label>

                        <input type="radio" id="star-2" name="rating" value="2">
                        <label class="full" for="star-2" data-toggle="tooltip" title="<?php echo e(clean(trans('cynoebook::ebook.reviews.2_star'))); ?>"></label>

                        <input type="radio" id="star-1" name="rating" value="1">
                        <label class="full" for="star-1" data-toggle="tooltip" title="<?php echo e(clean(trans('cynoebook::ebook.reviews.1_star'))); ?>"></label>
                    </fieldset>

                    <?php if($errors->has('rating')): ?>
                        <span class="error-message"><?php echo e(clean($errors->first('rating'))); ?></span>
                    <?php endif; ?>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group <?php echo e($errors->has('reviewer_name') ? 'has-error' : ''); ?>">
                                <label for="reviewer-name">
                                    <?php echo e(clean(trans('cynoebook::ebook.reviews.reviewer_name'))); ?><span>*</span>
                                </label>

                                <input type="text" name="reviewer_name" class="form-control" id="reviewer-name" value="<?php echo e(old('reviewer_name', auth()->user()->full_name ?? '')); ?>">

                                <?php if($errors->has('reviewer_name')): ?>
                                    <span class="error-message"><?php echo e(clean($errors->first('reviewer_name'))); ?></span>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group <?php echo e($errors->has('comment') ? 'has-error' : ''); ?>">
                                <label for="comment">
                                    <?php echo e(clean(trans('cynoebook::ebook.reviews.your_review'))); ?><span>*</span>
                                </label>

                                <textarea name="comment" class="form-control" id="comment" cols="30" rows="5"><?php echo e(old('comment')); ?></textarea>

                                <?php if($errors->has('comment')): ?>
                                    <span class="error-message"><?php echo e(clean($errors->first('comment'))); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-12">
                            <div class="form-group <?php echo e($errors->has('captcha') ? 'has-error': ''); ?>">
                                <?php echo Igoshev\Captcha\Facades\Captcha::getView() ?>
                                <input type="text" name="captcha" id="captcha" class="captcha-input">

                                <?php if($errors->has('captcha')): ?>
                                    <span class="error-message"><?php echo e(clean($errors->first('captcha'))); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary review-submit" data-loading>
                            <?php echo e(clean(trans('cynoebook::ebook.reviews.add_review'))); ?>

                        </button>
                    </div>
                </form>
            </div>
        
</div>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/ebook/reviews/ratings_overview.blade.php ENDPATH**/ ?>