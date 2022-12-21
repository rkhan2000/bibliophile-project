<div class="slider-banner">
    <?php if(!is_null($sliderBanners->image->path)): ?>
        <?php echo $__env->make('public.home.sections.partials.slider_banner', ['banner' => $sliderBanners,'class' => 'main_slider_banner'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/home/sections/slider_banners.blade.php ENDPATH**/ ?>