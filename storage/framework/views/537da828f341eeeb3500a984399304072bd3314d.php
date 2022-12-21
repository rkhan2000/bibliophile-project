<?php $__env->startSection('title', clean(trans('user::auth.sign_in'))); ?>

<?php $__env->startSection('content'); ?>
    <div class="container container-login">
        <?php echo $__env->make('admin::include.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h3 class="text-center"><?php echo e(clean(trans('user::auth.sign_in'))); ?></h3>
        <div class="login-form">
            <form method="POST" action="<?php echo e(route('admin.login.post')); ?>">
                <?php echo e(csrf_field()); ?>

                
                <div class="form-group <?php echo e($errors->has('email') ? 'has-error': ''); ?>">
                    <label for="email"><?php echo e(clean(trans('user::auth.email'))); ?> <span class="required-label">*</span></label>

                    <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="email" placeholder="<?php echo e(clean(trans('user::attributes.users.email'))); ?>" autofocus>
                    <?php if($errors->has('email')): ?>
                        <span class="help-block"><?php echo e(clean($errors->first('email'))); ?></span>
                    <?php endif; ?>
                    
                </div>
                
                <div class="form-group <?php echo e($errors->has('password') ? 'has-error': ''); ?>">
					<label for="password" class="placeholder"><?php echo e(clean(trans('user::auth.password'))); ?> <span class="required-label">*</span></label>
					<a href="<?php echo e(route('admin.reset')); ?>" class="link float-right">
                        <?php echo e(clean(trans('user::auth.forgot_password'))); ?>

                    </a>
					<div class="position-relative">
						<input type="password" class="form-control" name="password" placeholder="<?php echo e(clean(trans('user::attributes.users.password'))); ?>">
						<div class="show-password">
							<i class="icon-eye"></i>
						</div>
					</div>
                    
                    <?php if($errors->has('password')): ?>
                        <span class="help-block"><?php echo e(clean($errors->first('password'))); ?></span>
                    <?php endif; ?>
				</div>
                
                
                <div class="form-group form-action-d-flex mb-3">
					<div class="custom-control custom-checkbox">
						<input type="hidden" name="remember_me" value="0">
                        <input type="checkbox" name="remember_me"  value="1" id="remember_me" class="custom-control-input">
						<label class="custom-control-label m-0" for="remember_me"><?php echo e(clean(trans('user::attributes.auth.remember_me'))); ?></label>
					</div>
                    
                    <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" data-loading><?php echo e(clean(trans('user::auth.sign_in'))); ?></button>
                    
				</div>
            </form>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::admin.auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/User/Resources/views/admin/auth/login.blade.php ENDPATH**/ ?>