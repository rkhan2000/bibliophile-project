<?php if($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty()): ?>
    <div class="megamenu-wrapper hidden-sm hidden-xs">
        <div class="container">
            <nav class="navbar navbar-default">
                <?php echo $__env->make('public.include.category_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('public.include.primary_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </nav>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\bookreview\Themes\Cynoebook\views/public/include/navbar.blade.php ENDPATH**/ ?>