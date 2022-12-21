<div class="row">
<div class="col-sm-12">
    <h4 class="page-title border-bottom"><i class="fas fa-flag" aria-hidden="true"></i> <?php echo e(clean(trans('admin::dashboard.latest_reportedebooks'))); ?></h4>
    <div class="card">
            
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-hover ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(clean(trans('admin::dashboard.table.latest_reportedebooks.ebook'))); ?></th>
                                    <th><?php echo e(clean(trans('admin::dashboard.table.latest_reportedebooks.reported_user'))); ?></th>
                                    <th><?php echo e(clean(trans('admin::dashboard.table.latest_reportedebooks.date'))); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $inc=0; ?>
                                <?php $__currentLoopData = $latestReportedEbooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $inc++; ?>
                                    <tr>
                                        <td>
                                        <?php echo e($inc); ?>

                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.ebooks.edit', $ebook)); ?>"><?php echo e($ebook->ebook->title); ?></a>
                                            
                                        </td>
                                        
                                        <td>
                                            <?php if($ebook->user()->exists()): ?>
                                                <?php echo e($ebook->user->full_name); ?>

                                            <?php else: ?>
                                                <?php echo e('Guest'); ?>

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
</div>
<?php /**PATH C:\xampp\htdocs\Modules/Admin/Resources/views/dashboard/include/latest_reportedebooks.blade.php ENDPATH**/ ?>