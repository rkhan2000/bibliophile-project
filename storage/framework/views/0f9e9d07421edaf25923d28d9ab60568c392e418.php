<?php $__env->startSection('title'); ?>
<?php if(request()->has('category')): ?>
    <?php if(request()->has('query')): ?>
        <?php echo e(clean(trans('cynoebook::ebooks.search_results_for'))); ?>: "<?php echo e(request('query')); ?>"
    <?php else: ?>
    <?php echo e(optional($view_category)->name); ?>  - <?php echo e(clean(trans('cynoebook::ebooks.ebooks'))); ?>

    <?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <?php if(request()->has('query') || request()->has('category')): ?>
        
        
        <?php if(request()->has('category')): ?>
            <li><a href="<?php echo e(route('categories.index')); ?>"><?php echo e(clean(trans('cynoebook::ebooks.categories'))); ?></a></li>
        
            <?php if(request()->has('query')): ?>
                <li><a href="<?php echo e(route('categories.show', request('category'))); ?>"><?php echo e(optional($view_category)->name); ?></a></li>
            <?php else: ?>
                <li class="active"> <?php echo e(optional($view_category)->name); ?> </li>
            <?php endif; ?>
        <?php else: ?>
            <li><a href="<?php echo e(route('ebooks.index')); ?>"><?php echo e(clean(trans('cynoebook::ebooks.ebooks'))); ?></a></li>
        <?php endif; ?>
        
        <?php if(request()->has('query')): ?>
            <li class="active"><?php echo e(clean(trans('cynoebook::ebooks.search_results_for'))); ?>:<?php echo e(request('query')); ?></li>
        <?php endif; ?>
        
    <?php else: ?>
        <li class="active"><?php echo e(clean(trans('cynoebook::ebooks.ebooks'))); ?></li>
    <?php endif; ?>
    
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="ebook-list">
        <div class="row">
            <?php echo $__env->make('public.ebooks.partials.filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-md-9 col-sm-12">
                <?php if(setting('cynoebook_ad1_section_enabled')): ?>
                    <?php echo $__env->make('public.home.sections.advertisement',['ad'=>setting('cynoebook_ad_1')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?> 
                <div class="ebook-list-header clearfix">
                    <div class="search-result-title pull-left">
                        <?php if(request()->has('category')): ?>
                             <?php if(request()->has('query')): ?>
                               <h3><?php echo e(clean(trans('cynoebook::ebooks.search_results_for'))); ?>: "<?php echo e(request('query')); ?>"</h3>
                             <?php else: ?>
                                <h3><?php echo e(optional($view_category)->name); ?> - <?php echo e(clean(trans('cynoebook::ebooks.ebooks'))); ?> </h3>
                             <?php endif; ?>
                        <?php endif; ?>
                     
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

                        <div class="form-group">
                            <select class="custom-select-black" onchange="location = this.value">
                               
                                <option value="<?php echo e(fullUrlWithWithoutQuery(request(),['sort' => 'latest'],['category'])); ?>" <?php echo e(($sortOption = request()->query('sort')) === 'latest' ? 'selected' : ''); ?>>
                                    <?php echo e(clean(trans('cynoebook::ebooks.sort_options.latest'))); ?>

                                </option>

                                <option value="<?php echo e(fullUrlWithWithoutQuery(request(),['sort' => 'alphabetic'],['category'])); ?>" <?php echo e(($sortOption = request()->query('sort')) === 'alphabetic' ? 'selected' : ''); ?>>
                                    <?php echo e(clean(trans('cynoebook::ebooks.sort_options.alphabetic'))); ?>

                                </option>

                                <option value="<?php echo e(fullUrlWithWithoutQuery(request(),['sort' => 'toprated'],['category'])); ?>"<?php echo e($sortOption === 'toprated' ? 'selected' : ''); ?>>
                                    <?php echo e(clean(trans('cynoebook::ebooks.sort_options.top_rated'))); ?>

                                </option>

                                <option value="<?php echo e(fullUrlWithWithoutQuery(request(),['sort' => 'relevance'],['category'])); ?>"<?php echo e($sortOption === 'relevance' ? 'selected' : ''); ?>>
                                    <?php echo e(clean(trans('cynoebook::ebooks.sort_options.relevance'))); ?>

                                </option>
                            </select>
                        </div>                  
                       
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="ebook-list-result clearfix">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane <?php echo e(($viewMode = request('viewMode', setting('ebook_vide_mode','grid'))) === 'grid' ? 'active' : ''); ?>">
                            <div class="row">
                                <div class="grid-ebooks separator">
                                    <?php if($viewMode === 'grid'): ?>
                                        <?php $__empty_1 = true; $__currentLoopData = $ebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <?php echo $__env->make('public.ebooks.partials.ebook_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <h3><?php echo e(clean(trans('cynoebook::ebooks.no_ebooks_were_found'))); ?></h3>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div id="list-view" class="tab-pane <?php echo e($viewMode === 'list' ? 'active' : ''); ?>">
                            <?php if($viewMode === 'list'): ?>
                                <?php $__empty_1 = true; $__currentLoopData = $ebooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ebook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo $__env->make('public.ebooks.partials.list_view_ebook_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h3><?php echo e(clean(trans('cynoebook::ebooks.no_ebooks_were_found'))); ?></h3>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="pull-right">
                    <?php echo e($ebooks->links()); ?>

                </div>
                <?php if(setting('cynoebook_ad2_section_enabled')): ?>
                    <?php echo $__env->make('public.home.sections.advertisement',['ad'=>setting('cynoebook_ad_2')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?> 
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/index.blade.php ENDPATH**/ ?>