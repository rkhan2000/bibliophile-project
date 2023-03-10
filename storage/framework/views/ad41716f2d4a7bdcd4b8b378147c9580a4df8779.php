<?php if(setting('newsletter_enabled') && (setting('newsletter_display')=='both' || setting('newsletter_display')=='popup' )  && json_decode(Cookie::get('show_newsletter_popup', true))): ?>
    <newsletter-popup inline-template>
        <div class="modal newsletter-wrap fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="newsletter-inner">
                            <div class="newsletter-left">
                                <h1 class="title">
                                    <?php echo e(trans('cynoebook::layout.subscribe_to_our_newsletter')); ?>

                                </h1>

                                <p class="sub-title">
                                    <?php echo e(trans('cynoebook::layout.subscribe_to_our_newsletter_subtitle')); ?>

                                </p>

                                <form @submit.prevent="subscribe" class="newsletter-form">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            v-model="email"
                                            class="form-control"
                                            placeholder="<?php echo e(trans('cynoebook::layout.enter_your_email_address')); ?>"
                                        >

                                        <span class="error-message" v-if="error" v-text="error"></span>

                                        <button class="btn btn-primary btn-subscribe" v-if="subscribed">
                                            <i class="fa fa-check"></i>
                                            <?php echo e(trans('cynoebook::layout.subscribed')); ?>

                                        </button>

                                        <button
                                            class="btn btn-primary btn-subscribe"
                                            :class="{ 'btn-loading': subscribing }"
                                            v-else
                                        >
                                            <?php echo e(trans('cynoebook::layout.subscribe')); ?>

                                        </button>
                                    </div>

                                    <span class="error-message" v-if="error" v-text="error"></span>
                                </form>

                                <div class="form-group newsletter-checkbox">
                                    <div class="form-check">
                                        <input type="checkbox" v-model="disable_popup" id="do_not_show_popup_again">

                                        <label for="do_not_show_popup_again" class="form-check-label">
                                            <?php echo e(trans('cynoebook::layout.don\'t_show_this_popup_again')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="newsletter-right" style="background-image: url(<?php echo e($newsletterBgImage); ?>)"></div>

                            <button type="button" class="close" data-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </newsletter-popup>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/include/newsletter.blade.php ENDPATH**/ ?>