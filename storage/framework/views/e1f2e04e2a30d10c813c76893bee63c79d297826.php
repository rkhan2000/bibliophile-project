<div class="row">
<div class="col-sm-12">
    <h4 class="page-title border-bottom"><i class="fa fa-star" aria-hidden="true"></i> <?php echo e(clean(trans('admin::dashboard.latest_reviews'))); ?></h4>
    <div class="card">
            
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-hover ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(clean(trans('admin::dashboard.table.latest_reviews.ebook'))); ?></th>
                                    <th><?php echo e(clean(trans('admin::dashboard.table.user'))); ?></th>
                                    <th><?php echo e(clean(trans('admin::dashboard.table.latest_reviews.rating'))); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $inc=0; ?>
                                <?php $__currentLoopData = $latestReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestReview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $inc++; ?>
                                    <tr>
                                        <td>
                                        <?php echo e($inc); ?>

                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.reviews.edit', $latestReview)); ?>">
                                                <?php echo e($latestReview->ebook->title); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.reviews.edit', $latestReview)); ?>">
                                                <?php echo e($latestReview->reviewer_name); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.reviews.edit', $latestReview)); ?>">
                                                <?php echo e($latestReview->rating); ?>

                                            </a>
                                        </td>
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
</div><?php /**PATH C:\xampp\htdocs\Modules/Admin/Resources/views/dashboard/include/latest_reviews.blade.php ENDPATH**/ ?>