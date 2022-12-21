<?php $__env->startSection('title', clean(trans('cynoebook::account.links.my_favorite'))); ?>

<?php $__env->startSection('account_breadcrumb'); ?>
    <li class="active"><?php echo e(clean(trans('cynoebook::account.links.my_favorite'))); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_right'); ?>
    <div class="index-table">
        
        <?php if($ebooks->isEmpty()): ?>
            <h3 class="text-center"><?php echo e(clean(trans('cynoebook::account.favorite.empty_favorite'))); ?></h3>
        <?php else: ?>
            <div class=" table-favorite">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?php echo e(clean(trans('cynoebook::account.favorite.book_cover'))); ?></th>
                            <th><?php echo e(clean(trans('cynoebook::account.favorite.ebook'))); ?></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody> <?php //dd($ebooks); ?>
                        <?php $__currentLoopData = $ebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php if(! $ebook->book_cover->exists): ?>
                                        <div class="image-placeholder">
                                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                                        </div>
                                    <?php else: ?>
                                        <div class="image-holder">
                                            <img src="<?php echo e($ebook->book_cover->path); ?>">
                                        </div>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <h5>
                                        <a href="<?php echo e(route('ebooks.show', ['slug' => $ebook->slug])); ?>">
                                            <?php echo e($ebook->title); ?>

                                        </a>
                                    </h5>
                                </td>

                                <td>
                                    <form method="POST" action="<?php echo e(route('account.favorite.destroy', $ebook)); ?>">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('delete')); ?>


                                        <button type="submit" class="cross-button remove-ebook" data-toggle="tooltip" title="<?php echo e(clean(trans('cynoebook::account.favorite.remove'))); ?>">
                                            <i class="fa fa-times" aria-hidden="true" data-ebook-id="<?php echo e($ebook->id); ?>"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>

    <?php if($ebooks->isNotEmpty()): ?>
        <div class="pull-right">
            <?php echo $ebooks->links(); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.account.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/account/favorite/index.blade.php ENDPATH**/ ?>