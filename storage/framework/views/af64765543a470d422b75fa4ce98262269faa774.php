<!DOCTYPE html>
<html lang="<?php echo e(locale()); ?>">
<head>
    <base href="<?php echo e(url('/')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title> <?php echo $__env->yieldContent('title'); ?> - <?php echo e(setting('site_name','eBook Admin')); ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	

	<!-- Fonts and icons -->
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <?php $__currentLoopData = $assets->allCss(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $css): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(v($css)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<?php echo $__env->make('admin::include.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body data-background-color="<?php echo e(setting('theme_background_color','bg1')); ?>">

            
	<div class="wrapper">
        <!-- Main Header -->
            <?php echo $__env->make('admin::include.header',['fullwidth'=>false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- End Main Header -->
		
        <!-- Sidebar -->
             <?php echo $__env->make('admin::include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
                    <div class="page-header">
                        <?php echo $__env->yieldContent('page-header'); ?>
                    </div>
                    <div class="row">
                        <?php echo $__env->make('admin::include.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    
                     <?php echo $__env->yieldContent('content'); ?>
                    
                </div>
			</div>
             
			<footer class="footer">
				<div class="container-fluid">
                    <?php echo $__env->make('admin::include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>	
				</div>
			</footer>
		</div>
		
	</div>
	
    <?php $__currentLoopData = $assets->allJs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $js): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script src="<?php echo e(v($js)); ?>"></script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
    
</body>
</html>

<?php /**PATH C:\xampp\htdocs\Modules/Admin/Resources/views/layout.blade.php ENDPATH**/ ?>