<?php if($ebooks->isNotEmpty()): ?>
    <section class="ebook-slider-wrapper clearfix">
        <div class="section-header">
            <h3><?php echo e($title); ?></h3>
        </div>

        <div class="row">
            <div class="ebook-slider slick-arrow separator clearfix">
                <?php $__currentLoopData = $ebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <?php echo $__env->make('public.ebooks.partials.ebook_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/ebook_carousel.blade.php ENDPATH**/ ?>