<div class="top-nav">
    <div class="container">
        <div class="top-nav-wrapper clearfix">
            <div class="top-nav-left pull-left">
                <?php if(count(supported_locales()) > 1): ?>
                <div class="dropdown supported_locales">
                    <?php
                        $options='';
                        
                        $languageName='';
                        foreach (supported_locales() as $locale => $language) {
                            $class='';
                            if(locale() === $locale){
                                $class='active';  
                                $languageName=$language["name"];
                            }
                            $options.='<li class="'.$class.'"><a href="'.localized_url($locale).'" >'.$language["name"].'</a></li>';
                        }
                    ?>
                    
                    <a class="btn dropdown-toggle" href="#" id="supported_locales" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-language" aria-hidden="true"></i>
                        <?php echo e($languageName); ?>

                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="supported_locales">
                    <?php echo $options; ?>

                    </ul>
                </div>
                <?php endif; ?>
            </div>

            <div class="top-nav-right pull-right">
                
                <ul class="social-links list-inline">
                    <?php if($socialLinks->isNotEmpty()): ?>
                        <?php $__currentLoopData = $socialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(! is_null($link)): ?>
                                <li><a href="<?php echo e($link); ?>"><i class="fa fa-<?php echo e($icon); ?>" aria-hidden="true"></i></a></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    
                    
                    <?php if(auth()->guard()->check()): ?>
                        <li><a href="<?php echo e(route('user.profile.show',auth()->user()->username)); ?>"><?php echo e(clean(trans('cynoebook::layout.hello'))); ?>, <?php echo e(auth()->user()->first_name); ?>!</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo e(route('login')); ?>"><?php echo e(clean(trans('user::auth.sign_in'))); ?></a></li>
                        <?php if(setting('enable_registrations')): ?>
                            <li><a href="<?php echo e(route('register')); ?>"><?php echo e(clean(trans('user::auth.sign_up'))); ?></a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
                
                
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/include/top_nav.blade.php ENDPATH**/ ?>