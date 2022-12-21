<div id="myac-hl" class="profile-icon dropdown pull-right" >
    <a class="btn dropdown-toggle" href="#" id="my-account-hl" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <?php if(auth()->guard()->check()): ?>
            <?php if(isset($currentUser->avatar->path)): ?>
                <img src="<?php echo e($currentUser->avatar->path); ?>" alt="..." class="avatar-img rounded-circle">
            <?php else: ?>
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <?php endif; ?>
        <?php else: ?>
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        <?php endif; ?>  
        <span class="caret"></span>
    </a>
    
    

    <ul class="dropdown-menu" aria-labelledby="my-account-hl">
    <?php if(auth()->guard()->check()): ?>
        <li>
            <a href="<?php echo e(route('account.dashboard.index')); ?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            <?php echo e(clean(trans('cynoebook::account.links.my_account'))); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('user.profile.show',auth()->user()->username)); ?>">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <?php echo e(clean(trans('cynoebook::account.links.my_profile'))); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('account.favorite.index')); ?>">
                <i class="fa fa-heart" aria-hidden="true"></i>
                <?php echo e(clean(trans('cynoebook::account.links.my_favorite'))); ?>

            </a>
        </li>
        <li>
            <a href="<?php echo e(route('account.reviews.index')); ?>">
                <i class="fa fa-comment" aria-hidden="true"></i>
                <?php echo e(clean(trans('cynoebook::account.links.my_reviews'))); ?>

            </a>
        </li>
        
        <li>
            <a href="<?php echo e(route('logout')); ?>">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <?php echo e(clean(trans('cynoebook::account.links.logout'))); ?>

            </a>
        </li>
        
        <?php if(setting('enable_ebook_upload')): ?>
        <li role="separator" class="divider"></li>
        <li>
            <a href="<?php echo e(route('ebooks.upload')); ?>">
            
            <i class="fa fa-upload" aria-hidden="true"></i>
            <?php echo e(clean(trans('cynoebook::account.links.upload_ebook'))); ?>

            </a>
        </li>
        <?php endif; ?>
        <li role="separator" class="divider"></li>
        <?php if(auth()->user()->hasRoleName('admin')): ?>
            <li>
                <a href="<?php echo e(route('admin.dashboard.index')); ?>">               
                <i class="fa fa-dashboard" aria-hidden="true"></i>
                <?php echo e(clean(trans('cynoebook::account.links.admin_dashboard'))); ?>

                </a>
            </li>
        <?php endif; ?>
    <?php else: ?>
        <li><a href="<?php echo e(route('login')); ?>"><?php echo e(clean(trans('user::auth.sign_in'))); ?></a></li>
        <?php if(setting('enable_registrations')): ?>
            <li><a href="<?php echo e(route('register')); ?>"><?php echo e(clean(trans('user::auth.sign_up'))); ?></a></li>
        <?php endif; ?>
    <?php endif; ?>
    </ul>
</div>
    <div class="search-area pull-right">

        <form action="<?php echo e((request()->has('category') && isset($slug) &&  $slug!='' ) ? route('categories.index',$slug) : route('ebooks.index')); ?>" method="GET" id="search-box-form">  
            <div class="search-box hidden-sm hidden-xs">
                <input type="text" name="query" class="search-box-input" placeholder="<?php echo e(clean(trans('cynoebook::layout.search_for_ebooks'))); ?>" value="<?php echo e(request('query')); ?>">

                <div class="search-box-button">
                    <button class="search-box-btn btn btn-primary" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>

                    <select id="search-box-category" class="select search-box-select custom-select-black">
                        <option value="" data-url="<?php echo e(route('ebooks.index')); ?>" selected><?php echo e(clean(trans('cynoebook::layout.categories'))); ?></option>

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <option value="<?php echo e($category->slug); ?>" data-url="<?php echo e(route('categories.show',$category->slug)); ?>" <?php echo e(request('category') === $category->slug ? 'selected' : ''); ?>>
                                <?php echo e($category->name); ?>    
                                
                            </option>
                           
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>
            </div>
                       
            <div class="mobile-search visible-sm visible-xs">
                <div class="dropdown">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>

                    <div class="dropdown-menu">
                        <div class="search-box">
                            <input type="search" name="query" class="search-box-input" placeholder="<?php echo e(clean(trans('cynoebook::layout.search_for_ebooks'))); ?>">

                            <div class="search-box-button">
                                <button type="submit" class="search-box-btn btn btn-primary">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>          
    </div>
    
    
    
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/include/search_box.blade.php ENDPATH**/ ?>