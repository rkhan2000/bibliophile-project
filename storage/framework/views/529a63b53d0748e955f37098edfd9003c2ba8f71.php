<?php if( setting('meta_title')!='' ): ?>
    <?php $__env->startSection('title', setting('meta_title')); ?>
<?php else: ?>
    <?php $__env->startSection('title', setting('site_name')); ?>
<?php endif; ?>


<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e(setting('meta_title')); ?>">
    <meta name="keywords" content="<?php echo e(implode(',',setting('meta_keywords',[]))); ?>">
    <meta name="description" content="<?php echo e(setting('meta_description')); ?>">
    <meta property="og:title" content="<?php echo e(setting('meta_title')); ?>">
    <meta property="og:description" content="<?php echo e(setting('meta_description')); ?>">
<?php $__env->stopPush(); ?>   

<?php $__env->startSection('content'); ?>
    
   <!-- <?php if(cynoebook_layout() === 'default'): ?>
        <div class="col-lg-9 col-lg-offset-3 col-md-9 col-md-offset-3">
            <div class="row">
                <?php echo $__env->make('public.home.sections.slider_banners', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="clearfix"></div>
    <?php elseif(cynoebook_layout() === 'slider_layout'): ?>
        <?php if(!is_null($slider)): ?>
            <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0">
                <div class="row">
                     <?php echo $__env->make('public.home.sections.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="clearfix"></div>
        <?php endif; ?>
    <?php endif; ?>-->
    <?php if(cynoebook_layout() === 'default'): ?>
            <div class="<?php echo e(setting('cynoebook_Categories_menu_dropdown_enabled') ? 'col-lg-9 col-lg-offset-3 col-md-9 col-md-offset-3' : 'col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0'); ?>">
                <div class="row">
                    <?php echo $__env->make('public.home.sections.slider_banners', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="clearfix"></div>

    <?php elseif(cynoebook_layout() === 'slider_layout'): ?>
        <?php if(!is_null($slider)): ?>
            <div class="<?php echo e(setting('cynoebook_Categories_menu_dropdown_enabled') ? 'col-lg-9 col-lg-offset-3 col-md-9 col-md-offset-3' : 'col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0'); ?>">
                <div class="row">
                     <?php echo $__env->make('public.home.sections.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="clearfix"></div>
        <?php endif; ?>
    <?php endif; ?>
    <?php echo $__env->make('public.include.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php if(setting('cynoebook_home_ad1_section_enabled')): ?>
     <?php echo $__env->make('public.home.sections.advertisement',['ad'=>$homeAdvertisement1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    

    <?php if(setting('cynoebook_featured_ebooks_carousel_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.ebook_carousel', [
            'title' => setting('cynoebook_featured_ebooks_section_title'),
            'ebooks' => $carouselEbooks
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>  
    
    <?php if(setting('cynoebook_popular_ebooks_carousel_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.ebook_carousel', [
            'title' => setting('cynoebook_popular_ebooks_section_title'),
            'ebooks' => $popularEbooks
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php if(setting('cynoebook_banner_section_1_enabled')): ?>
        <?php echo $__env->make('public.home.sections.banner_section_1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php if(setting('cynoebook_authors_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.authors_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php if(setting('cynoebook_home_ad2_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.advertisement',['ad'=>$homeAdvertisement2], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php if(setting('cynoebook_recent_ebooks_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.recent_ebooks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php if(setting('cynoebook_banner_section_2_enabled')): ?>
        <?php echo $__env->make('public.home.sections.banner_section_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php if(setting('cynoebook_category_tabs_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.category_tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php if(setting('cynoebook_home_ad3_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.advertisement',['ad'=>$homeAdvertisement3], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php if(setting('cynoebook_users_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.users_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(setting('cynoebook_inspired_by_your_browsing_history_section_enabled')): ?>
        <?php echo $__env->make('public.home.sections.ebook_Based_on_browser_history', [
            'title' => setting('cynoebook_inspired_by_your_browsing_history_section_title'),
            'ebooks' => $browsingHistoryEbooks
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/home/index.blade.php ENDPATH**/ ?>