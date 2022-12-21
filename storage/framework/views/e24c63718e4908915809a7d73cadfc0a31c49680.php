<?php $__env->startSection('title', clean(trans('cynoebook::account.links.my_ebook'))); ?>

<?php $__env->startSection('content_right'); ?>
    <div class="my-dashboard">
        <div class="account-information clearfix">
            <h4><?php echo e(clean(trans('cynoebook::account.dashboard.my_ebook'))); ?></h4>

            <div class="col-md-12">
                <div class="row">
                    <div class="index-table">
                        <?php if($ebooks->isEmpty()): ?>
                            <h3 class="text-center"><?php echo e(clean(trans('cynoebook::account.ebooks.no_ebooks'))); ?></h3>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(clean(trans('cynoebook::account.ebooks.book_cover'))); ?></th>
                                            <th width="200px"><?php echo e(clean(trans('cynoebook::account.ebooks.ebook'))); ?></th>
                                            <th><?php echo e(clean(trans('cynoebook::account.ebooks.featured'))); ?></th>
                                            <th><?php echo e(clean(trans('cynoebook::account.ebooks.private'))); ?></th>
                                            <th><?php echo e(clean(trans('cynoebook::account.ebooks.views'))); ?></th>
                                            <th><?php echo e(clean(trans('cynoebook::account.ebooks.status'))); ?></th>
                                            <th><?php echo e(clean(trans('cynoebook::account.ebooks.date'))); ?></th>
                                            <th><?php echo e(clean(trans('cynoebook::account.ebooks.action'))); ?></th>
                                        </tr>
                                    </thead>

                                    <tbody>
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
                                                    <?php if($ebook->is_active==1): ?>
                                                        <a href="<?php echo e(route('ebooks.show', ['slug' => $ebook->slug])); ?>"><?php echo e($ebook->title); ?></a>
                                                    <?php else: ?>
                                                        <?php echo e($ebook->title); ?>

                                                    <?php endif; ?>
                                                </td>

                                                <td>
                                                    <?php if($ebook->is_featured==1): ?>
                                                        <?php echo e(clean(trans('cynoebook::account.ebooks.yes'))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(clean(trans('cynoebook::account.ebooks.no'))); ?>

                                                    <?php endif; ?>
                                                </td>
                                                
                                                <td>
                                                    <?php if($ebook->is_private==1): ?>
                                                        <?php echo e(clean(trans('cynoebook::account.ebooks.yes'))); ?>

                                                    <?php else: ?>
                                                        <?php echo e(clean(trans('cynoebook::account.ebooks.no'))); ?>

                                                    <?php endif; ?>
                                                </td>

                                                <td><?php echo e($ebook->viewed); ?></td>
                                                
                                                <td>
                                                    <?php if($ebook->is_active==1): ?>
                                                        <span class="dot green"></span>
                                                    <?php else: ?>
                                                        <span class="dot red"></span>
                                                    <?php endif; ?>
                                                </td>
                                                
                                                <td><?php echo e($ebook->created_at->toFormattedDateString()); ?></td>
                                                <td class="action">
                                                    <a class="" href="<?php echo e(route('ebooks.edit', ['slug' => $ebook->slug])); ?>" data-toggle="tooltip" title="<?php echo e(clean(trans('cynoebook::account.ebooks.edit_ebook'))); ?>">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="" onclick="return confirm('<?php echo e(clean(trans('cynoebook::account.ebooks.delete_confirm_message'))); ?>')" href="<?php echo e(route('ebooks.delete', ['slug' => $ebook->slug])); ?>" data-toggle="tooltip" title="<?php echo e(clean(trans('cynoebook::account.ebooks.delete_ebook'))); ?>">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                    
                                                    
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php if($ebooks->isNotEmpty()): ?>
        <div class="pull-right">
            <?php echo $ebooks->links(); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.account.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/account/dashboard/index.blade.php ENDPATH**/ ?>