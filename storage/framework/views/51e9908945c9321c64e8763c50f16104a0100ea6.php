<?php $__env->startSection('title', clean(trans('user::auth.sign_in'))); ?>

<?php $__env->startSection('content'); ?>
    <div class="form-wrapper">
        <?php echo $__env->make('public.include.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="form form-page form-overlay-layer">
            <div class="top-overlay"></div>
            <form method="POST" action="<?php echo e(route('login.post')); ?>" class="login-form clearfix">
                <?php echo e(csrf_field()); ?>


                <div class="login form-inner clearfix">
                    

                    <h3><?php echo e(clean(trans('user::auth.sign_in'))); ?></h3>

                    <div class="form-group <?php echo e($errors->has('email') ? 'has-error': ''); ?>">
                        <label for="email"><?php echo e(clean(trans('user::auth.email'))); ?><span>*</span></label>

                        <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="email" placeholder="<?php echo e(clean(trans('user::attributes.users.email'))); ?>" autofocus>

                        <div class="input-icon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>

                        <?php if($errors->has('email')): ?>
                            <span class="error-message"><?php echo e(clean($errors->first('email'))); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group <?php echo e($errors->has('password') ? 'has-error': ''); ?>">
                        <label for="password"><?php echo e(clean(trans('user::auth.password'))); ?><span>*</span></label>

                        <input type="password" name="password" class="form-control" id="password" placeholder="<?php echo e(clean(trans('user::attributes.users.password'))); ?>">

                        <div class="input-icon">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>

                        <?php if($errors->has('password')): ?>
                            <span class="error-message"><?php echo e(clean($errors->first('password'))); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="clearfix"></div>

                    <button type="submit" class="btn btn-primary btn-center btn-login" data-loading>
                        <?php echo e(clean(trans('user::auth.sign_in'))); ?>

                    </button>

                    <div class="checkbox pull-left">
                        <input type="hidden" value="0">
                        <input type="checkbox" value="1" id="remember">

                        <label for="remember"><?php echo e(clean(trans('user::auth.remember_me'))); ?></label>
                    </div>

                    <a href="<?php echo e(route('reset')); ?>" class="forgot-password pull-right">
                        <?php echo e(clean(trans('user::auth.forgot_password'))); ?>

                    </a>
                    <div class="clearfix"></div>
                    <?php if(setting('enable_registrations')): ?>
                    <div class="login-account text-center">
                        <span class="msg"><?php echo e(clean(trans('user::auth.dont_have_an_account_yet'))); ?></span>
                        <a href="<?php echo e(route('register')); ?>" id="show-signup" class="link"><?php echo e(clean(trans('user::auth.sign_up'))); ?></a>
                    </div>
                    <?php endif; ?>
                    <div class="clearfix"></div> 
                    <div class="social-login-buttons text-center">
                        <?php if(count(app('enabled_social_login_providers')) !== 0): ?>
                            <div class="hline btn-primary">
                                <span class="hline-innertext btn-primary"><?php echo e(clean(trans('user::auth.or'))); ?></span>
                            </div>
                            
                        <?php endif; ?>

                        <?php if(setting('facebook_login_enabled')): ?>
                            <a href="<?php echo e(route('login.redirect', ['provider' => 'facebook'])); ?>" class="btn btn-facebook">
                                <i class="fa fa-facebook fa-fw"></i>
                                <?php echo e(clean(trans('user::auth.log_in_with_facebook'))); ?>

                            </a>
                        <?php endif; ?>

                        <?php if(setting('google_login_enabled')): ?>
                            <a href="<?php echo e(route('login.redirect', ['provider' => 'google'])); ?>" class="btn btn-google">
                                <i class="fa fa-google fa-fw"></i>
                                <?php echo e(clean(trans('user::auth.log_in_with_google'))); ?>

                            </a>
                        <?php endif; ?>
                    </div>
        
                </div>
            </form>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/auth/login.blade.php ENDPATH**/ ?>