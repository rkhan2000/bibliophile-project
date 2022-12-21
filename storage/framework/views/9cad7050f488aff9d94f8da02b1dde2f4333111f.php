<footer class="footer">
    <div class="container">
        <div class="footer-top p-tb-50 clearfix">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo e(route('home')); ?>" class="footer-logo">
                        <?php if(is_null($footerLogo)): ?>
                            <h2><?php echo e(setting('site_name')); ?></h2>
                        <?php else: ?>
                            <img src="<?php echo e($footerLogo); ?>" class="img-responsive" alt="footer-logo">
                        <?php endif; ?>
                    </a>

                    <div class="clearfix"></div>

                    <p class="footer-brief"><?php echo e(setting('cynoebook_footer_summary')); ?></p>

                </div>
                <div class="col-sm-4 col-md-3 footer-two">
                    <h4 class="title"><?php echo e(setting('cynoebook_footer_two_title')); ?></h4>
                    <?php echo setting('cynoebook_footer_two'); ?>

                    
                </div>

                <?php if($footerMenu1->isNotEmpty()): ?>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="links">
                            
                            <h4 class="title"><?php echo e(setting('cynoebook_footer_menu_title_1')); ?></h4>
                            

                            <ul class="list-inline">
                                <?php $__currentLoopData = $footerMenu1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($menuItem->url()); ?>"><?php echo e($menuItem->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($footerMenu2->isNotEmpty()): ?>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="links">
                            <h4 class="title"><?php echo e(setting('cynoebook_footer_menu_title_2')); ?></h4>
                            

                            <ul class="list-inline">
                                <?php $__currentLoopData = $footerMenu2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($menuItem->url()); ?>"><?php echo e($menuItem->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>

    </div>

    <div class="footer-bottom p-tb-20 clearfix">
        <div class="container">
            <div class="copyright text-center">
                <?php echo e($copyrightText); ?>

            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/include/footer.blade.php ENDPATH**/ ?>