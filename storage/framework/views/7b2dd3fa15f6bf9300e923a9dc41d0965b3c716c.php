<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title border-bottom"><?php echo e(clean(trans("admin::dashboard.latest_ebooks"))); ?></h4>
    
        <div class="card">
            
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo e(clean(trans('admin::dashboard.table.latest_ebooks.cover_image'))); ?></th>
                                        <th><?php echo e(clean(trans('admin::dashboard.table.latest_ebooks.ebook'))); ?></th>
                                        <th><?php echo e(clean(trans('admin::dashboard.table.user'))); ?></th>
                                        <th><?php echo e(clean(trans('admin::dashboard.table.latest_ebooks.private'))); ?></th>
                                        <th><?php echo e(clean(trans('admin::dashboard.table.latest_ebooks.protected'))); ?></th>
                                        <th><?php echo e(clean(trans('admin::dashboard.table.latest_ebooks.date'))); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $inc=0;
                                    ?>
                                    <?php $__currentLoopData = $latestEbooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                        
                                        $inc++;
                                    ?>
                                    
                                    <tr>
                                        <td>
                                        <?php echo e($inc); ?>

                                        </td>
                                        <td>
                                            <div class="avatar-holder">
                                                <?php if(! $ebook->book_cover->exists): ?>
                                                    <i class="fas fa-image"></i>
                                                <?php else: ?>
                                                    <img src="<?php echo e($ebook->book_cover->path); ?>" width="50" height="50">
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.ebooks.edit', $ebook)); ?>"><?php echo e($ebook->title); ?></a>
                                        </td>
                                        <td>
                                             <?php if($ebook->user()->exists()): ?>
                                                <?php echo e($ebook->user->full_name); ?>

                                            <?php else: ?>
                                                <?php echo e('Guest'); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($ebook->is_private==1): ?>
                                                <?php echo e(trans('cynoebook::account.ebooks.yes')); ?>

                                            <?php else: ?>
                                                <?php echo e(trans('cynoebook::account.ebooks.no')); ?>

                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <?php if($ebook->password!=''): ?>
                                                <?php echo e(trans('cynoebook::account.ebooks.yes')); ?>

                                            <?php else: ?>
                                                <?php echo e(trans('cynoebook::account.ebooks.no')); ?>

                                            <?php endif; ?>
                                        </td>
                                        
                                        <td><?php echo e($ebook->created_at->toFormattedDateString()); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\Modules/Admin/Resources/views/dashboard/include/latest-ebooks.blade.php ENDPATH**/ ?>