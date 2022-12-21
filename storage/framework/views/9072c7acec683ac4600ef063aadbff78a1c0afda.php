<?php $__env->startSection('title', $ebook->title ); ?>

<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($ebook->meta->meta_title); ?>">
    <meta name="keywords" content="<?php echo e(implode(',', $ebook->meta->meta_keywords)); ?>">
    <meta name="description" content="<?php echo e($ebook->meta->meta_description); ?>">
    <meta property="image" content="<?php echo e($ebook->bookCover->path); ?>">
    <meta property="og:title" content="<?php echo e($ebook->meta->meta_title); ?>">
    <meta property="og:description" content="<?php echo e($ebook->meta->meta_description); ?>">
    <meta property="og:image" content="<?php echo e($ebook->bookCover->path); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li><a href="<?php echo e(route('ebooks.index')); ?>"><?php echo e(clean(trans('cynoebook::ebooks.ebooks'))); ?></a></li>
    <li class="active"><?php echo e($ebook->title); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(setting('cynoebook_ad1_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.advertisement',['ad'=>setting('cynoebook_ad_1')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?> 
    <div class="ebook-details-wrapper">
        <div class="row m-b-20">
            <?php echo $__env->make('public.ebooks.partials.ebook.images', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.ebooks.partials.ebook.details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="row">
            <?php if(setting('member_only_reading_books')): ?>
                <?php if(auth()->user()): ?>
                    <?php echo $__env->make('public.ebooks.partials.ebook.view-files', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <div class="form-group text-center" style="border: 1px solid;padding: 15px;">
                        <h3><?php echo e(clean(trans('cynoebook::ebook.for_read_a_book_please_sign_into_your_account'))); ?></h3>
                        <a class="btn btn-primary btn-lg" data-loading href="<?php echo e(route('login')); ?>"><?php echo e(clean(trans('cynoebook::ebook.login'))); ?></a>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <?php echo $__env->make('public.ebooks.partials.ebook.view-files', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <div class="tab ebook-tab clearfix">
                    <ul class="nav nav-tabs">
                        
                        <li class="<?php echo e(request()->has('reviews') ||request()->has('comment') || review_form_has_error($errors) || comment_form_has_error($errors) ? '' : 'active'); ?>">
                            <a data-toggle="tab" href="#description"><?php echo e(clean(trans('cynoebook::ebook.tabs.description'))); ?></a>
                        </li>
                        
                        <?php if(setting('reviews_enabled')): ?>
                            <li class="<?php echo e(request()->has('reviews') || review_form_has_error($errors) ? 'active' : ''); ?> <?php echo e(review_form_has_error($errors) ? 'error' : ''); ?>">
                                <a data-toggle="tab" href="#reviews"><?php echo e(clean(trans('cynoebook::ebook.tabs.reviews'))); ?></a>
                            </li>
                        <?php endif; ?>
                        
                        <?php if(setting('enable_comment')): ?>
                            <li id="comment-tab" class="<?php echo e(request()->has('comment') || comment_form_has_error($errors) ? 'active' : ''); ?> <?php echo e(comment_form_has_error($errors) ? 'error' : ''); ?>">
                                <a data-toggle="tab" href="#comments"><?php echo e(clean(trans('cynoebook::ebook.tabs.comments'))); ?></a>
                            </li>
                        <?php endif; ?>
                        
                        
                    </ul>

                    <div class="tab-content">
                        <?php echo $__env->make('public.ebooks.partials.ebook.tab_contents.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php echo $__env->renderWhen(setting('reviews_enabled'), 'public.ebooks.partials.ebook.tab_contents.reviews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                        <?php echo $__env->renderWhen(setting('enable_comment'), 'public.ebooks.partials.ebook.tab_contents.comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(setting('cynoebook_ad2_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.advertisement',['ad'=>setting('cynoebook_ad_2')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?> 
    
    <?php echo $__env->make('public.ebooks.partials.ebook_carousel', [
        'title' => clean(trans('cynoebook::ebook.related_ebooks')),
        'ebooks' => $relatedEbooks
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php if(setting('cynoebook_ad3_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.advertisement',['ad'=>setting('cynoebook_ad_3')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?> 
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/show.blade.php ENDPATH**/ ?>