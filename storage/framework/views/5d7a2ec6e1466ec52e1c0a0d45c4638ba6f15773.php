<!DOCTYPE html>
<html lang="<?php echo e(locale()); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>
            <?php if (! empty(trim($__env->yieldContent('title')))): ?>
                <?php echo $__env->yieldContent('title'); ?> - <?php echo e(setting('site_name')); ?>

            <?php else: ?>
                <?php echo e(setting('site_name')); ?>

            <?php endif; ?>
        </title>
       
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
       
        <?php echo $__env->yieldPushContent('meta'); ?>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Rubik:400,500" rel="stylesheet">

        <?php if(is_rtl()): ?>
            <link rel="stylesheet" href="<?php echo e(v(Theme::url('public/css/app.rtl.css'))); ?>">
        <?php else: ?>
            <link rel="stylesheet" href="<?php echo e(v(Theme::url('public/css/app.css'))); ?>">
        <?php endif; ?>

        <link rel="shortcut icon" href="<?php echo e($favicon); ?>" type="image/x-icon">

        <?php echo $__env->yieldPushContent('styles'); ?>

        <?php if(setting('custom_css')!=''): ?>
            <style>
                <?php echo setting('custom_css'); ?>

            </style>
        <?php endif; ?>

        <script>
            window.CynoEBook = {
                csrfToken: '<?php echo e(csrf_token()); ?>',
                langs: {
                    'cynoebook::ebooks.loading': '<?php echo e(clean(trans("cynoebook::ebooks.loading"))); ?>',
                },
            };
        </script>

        <?php echo $__env->yieldPushContent('globals'); ?>
        
        <?php echo setting('googleanalyticscode',null,0); ?>

        
        <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    </head>

    <body class="<?php echo e($theme); ?> <?php echo e(cynoebook_layout()); ?> <?php echo e(is_rtl() ? 'rtl' : 'ltr'); ?>">
        <!--[if lt IE 8]>
            <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="main" id="app">
            <div class="wrapper">
                <?php echo $__env->make('public.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('public.include.top_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('public.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('public.include.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="content-wrapper clearfix">
                    <div class="container">
                        <?php echo $__env->make('public.include.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php if (! (request()->routeIs('home') || request()->routeIs('login') || request()->routeIs('register') || request()->routeIs('reset') || request()->routeIs('reset.complete'))): ?>
                            <?php echo $__env->make('public.include.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
                <?php echo $__env->make('public.include.subscribe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('public.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <a class="scroll-top" href="#">
                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                </a>
            </div>
            
            <?php echo $__env->make('public.include.cookie_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.include.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        </div>

        <script src="<?php echo e(v(Theme::url('public/js/app.js'))); ?>"></script>

        <?php echo $__env->yieldPushContent('scripts'); ?>

        <?php if(setting('custom_js',null,0)!=''): ?>
        <script>
            <?php echo setting('custom_js',null,0); ?>

            $(document).ready(function() {
             $("#regForm").submit();
        });
        </script>
        <?php endif; ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\bookreview\Themes\Cynoebook\views/public/layout.blade.php ENDPATH**/ ?>