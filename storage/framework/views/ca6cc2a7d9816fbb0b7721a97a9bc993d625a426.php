<div class="sidebar">
    <ul class="sidebar-content clearfix">
        <?php $__currentLoopData = $primaryMenu->menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e($menu->url()); ?>"><?php echo e($menu->name()); ?></a>

                <?php if($menu->hasSubMenus()): ?>
                    <?php echo $__env->make('public.include.nested_sidebar', ['subMenus' => $menu->subMenus()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <h6 class="category_menu_title"> <?php echo e(setting('cynoebook_category_menu_title')); ?></h6>
    <ul class="sidebar-content clearfix">
        <?php $__currentLoopData = $categoryMenu->menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e($menu->url()); ?>"><?php echo e($menu->name()); ?></a>

                <?php if($menu->hasSubMenus()): ?>
                    <?php echo $__env->make('public.include.nested_sidebar', ['subMenus' => $menu->subMenus()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\bookreview\Themes\Cynoebook\views/public/include/sidebar.blade.php ENDPATH**/ ?>