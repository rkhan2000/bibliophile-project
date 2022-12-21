<?php $__env->startSection('title'); ?>
        <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li><a href="<?php echo e(route('users.index')); ?>"><?php echo e(clean(trans('user::users.users'))); ?></a></li>
    <li class="active"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="ebook-list">
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="ebook-list-sidebar user-details clearfix">
                    <div class="user-details-section clearfix">
                        
                        <?php if( ! $user->avatar->exists): ?>
                            <div class="default-placeholder">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </div>
                        <?php else: ?>
                            <div class="image-placeholder">
                                <img src="<?php echo e($user->avatar->path); ?>">
                            </div>
                        <?php endif; ?>
                        
                        <h4><?php echo e($user->full_name); ?></h4>
                        <span class="role" data-toggle="tooltip" title="<?php echo e(is_null($user->created_at) ? '' : $user->created_at->toFormattedDateString()); ?>">
                            ( <?php echo e(clean(trans('user::users.joined'))); ?>  <?php echo e(is_null($user->created_at) ? '&mdash;' : $user->created_at->diffForHumans()); ?> )
                        </span>
                        
                        <p class="details-section">
                            <?php echo e($user->about); ?>

                        </p>
                    </div>
                    <ul class="social-links list-inline"> 
                        <?php if($user->facebook!=''): ?>
                            <li><a href="<?php echo e($user->facebook); ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                        <?php if($user->twitter!=''): ?>
                            <li><a href="<?php echo e($user->twitter); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                        <?php if($user->google!=''): ?>
                            <li><a href="<?php echo e($user->google); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                        <?php if($user->instagram!=''): ?>
                            <li><a href="<?php echo e($user->instagram); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                        <?php if($user->linkedin!=''): ?>
                            <li><a href="<?php echo e($user->linkedin); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                        <?php if($user->youtube!=''): ?>
                            <li><a href="<?php echo e($user->youtube); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            
            <div class="col-md-8 col-sm-12">
                <div class="ebook-list-header clearfix">
                    <div class="search-result-title pull-left">
                           
                        <h3><?php echo e(clean(trans('cynoebook::ebooks.books_by'))); ?> <?php echo e($user->full_name); ?></h3>
                        <span><?php echo e(intl_number($ebooks->total())); ?> <?php echo e(trans_choice('cynoebook::ebooks.ebooks_found', $ebooks->total())); ?></span>
                    </div>

                    <div class="search-result-right pull-right">
                        <ul class="nav nav-tabs">
                            <li class="view-mode <?php echo e(($viewMode = request('viewMode', setting('ebook_vide_mode','grid'))) === 'grid' ? 'active' : ''); ?>">
                                <a href="<?php echo e($viewMode === 'grid' ? '#' : request()->fullUrlWithQuery(['viewMode' => 'grid'])); ?>" title="<?php echo e(clean(trans('cynoebook::ebooks.grid_view'))); ?>">
                                    <i class="fa fa-th-large" aria-hidden="true"></i>
                                </a>
                            </li>

                            <li class="view-mode <?php echo e($viewMode === 'list' ? 'active' : ''); ?>">
                                <a href="<?php echo e($viewMode === 'list' ? '#' : request()->fullUrlWithQuery(['viewMode' => 'list'])); ?>" title="<?php echo e(clean(trans('cynoebook::ebooks.list_view'))); ?>">
                                    <i class="fa fa-th-list" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="ebook-list-result clearfix">
                    <div class="tab-content">
                        <?php if($viewMode === 'grid'): ?>
                            <div id="grid-view" class="tab-pane <?php echo e(($viewMode = request('viewMode', setting('ebook_vide_mode','grid'))) === 'grid' ? 'active' : ''); ?>">
                                <div class="row">
                                    <div class="grid-ebooks separator">
                                        
                                            <?php $__empty_1 = true; $__currentLoopData = $ebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <?php echo $__env->make('public.ebooks.partials.ebook_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <h3><?php echo e(clean(trans('cynoebook::ebooks.no_ebooks_were_found'))); ?></h3>
                                            <?php endif; ?>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($viewMode === 'list'): ?>
                        <div id="list-view" class="tab-pane <?php echo e($viewMode === 'list' ? 'active' : ''); ?>">
                            
                                <?php $__empty_1 = true; $__currentLoopData = $ebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo $__env->make('public.ebooks.partials.list_view_ebook_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h3><?php echo e(clean(trans('cynoebook::ebooks.no_ebooks_were_found'))); ?></h3>
                                <?php endif; ?>
                            
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="pull-right">
                    <?php echo e($ebooks->links()); ?>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/account/profile/show.blade.php ENDPATH**/ ?>