<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title border-bottom"><?php echo e(clean(trans("admin::dashboard.ebooks"))); ?></h4>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-book"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category"><?php echo e(clean(trans("admin::dashboard.total_ebooks"))); ?></p>
                            <h4 class="card-title"><?php echo e($totalEbook); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-book text-success"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category"><?php echo e(clean(trans("admin::dashboard.this_month"))); ?></p>
                            <h4 class="card-title"><?php echo e($thisMonthEbook); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-book  text-primary"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category"><?php echo e(clean(trans("admin::dashboard.today"))); ?></p>
                            <h4 class="card-title"><?php echo e($todayEbook); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-flag text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category"><?php echo e(clean(trans("admin::dashboard.total_reported_ebooks"))); ?></p>
                            <h4 class="card-title"><?php echo e($totalReportedEbooks); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Modules/Admin/Resources/views/dashboard/include/ebooks.blade.php ENDPATH**/ ?>