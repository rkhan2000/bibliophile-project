<div class="col-md-3 col-sm-12">
    <div class="ebook-list-sidebar clearfix">
        <?php if($categories->isNotEmpty()): ?>
            <div class="filter-section clearfix">
                <ul class="filter-category list-inline">
                    <h4><?php echo e(clean(trans('cynoebook::ebooks.category'))); ?></h4>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php echo e(request('category') === $category->slug ? 'active' : ''); ?>">
                            <!--<a href="<?php echo e(request()->fullUrlWithQuery(['category' => $category->slug, 'page' => 1])); ?>">-->
                            <a href="<?php echo e(route('categories.show',$category->slug)); ?>">
                                <?php echo e($category->name); ?>

                            </a>
                            <?php if($category->items->isNotEmpty()): ?>
                                <?php echo $__env->make('public.ebooks.partials.sub_category_filter', ['subCategories' => $category->items], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

    </div>    
</div>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/filter.blade.php ENDPATH**/ ?>