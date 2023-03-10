<?php if(setting('cookie_bar_enabled') && json_decode(Cookie::get('show_cookie_bar', true))): ?>
    <cookie-bar inline-template>
        <div class="cookie-bar-wrap" :class="{ show: show }">
            <div class="container d-flex">
                <div class="col-xl-10 col-lg-12">
                    <div class="row">
                        <div class="cookie-bar">
                            <div class="cookie-bar-text">
                                <?php echo trans('cynoebook::layout.cookie_bar_text'); ?>

                            </div>

                            <div class="cookie-bar-action">
                                <button class="btn btn-primary btn-accept" @click="accept">
                                    <?php echo e(trans('cynoebook::layout.got_it')); ?>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </cookie-bar>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/include/cookie_bar.blade.php ENDPATH**/ ?>