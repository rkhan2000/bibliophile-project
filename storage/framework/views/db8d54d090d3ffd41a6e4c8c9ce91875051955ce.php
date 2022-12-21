<?php if(setting('newsletter_enabled') && (setting('newsletter_display')=='both' || setting('newsletter_display')=='footer' )): ?>
    <newsletter-subscription inline-template>
        <section class="subscribe-wrap d-flex justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <div class="subscribe">
                            <div class="row align-items-center">
                                <div class="col-sm-12 col-md-6">
                                    <div class="subscribe-text">
                                        <span class="title">
                                            <?php echo e(trans('cynoebook::layout.subscribe_to_our_newsletter')); ?>

                                        </span>

                                        <span class="sub-title">
                                            <?php echo e(trans('cynoebook::layout.subscribe_to_our_newsletter_subtitle')); ?>

                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="subscribe-field">
                                        <form @submit.prevent="subscribe">
                                            <div class="form-group">
                                                <input
                                                    type="text"
                                                    v-model="email"
                                                    class="form-control"
                                                    placeholder="<?php echo e(trans('cynoebook::layout.enter_your_email_address')); ?>"
                                                >

                                                <button
                                                    type="submit"
                                                    class="btn btn-primary btn-subscribe"
                                                    v-if="subscribed"
                                                    v-cloak
                                                >
                                                    <i class="fa fa-check"></i>
                                                    <?php echo e(trans('cynoebook::layout.subscribed')); ?>

                                                </button>

                                                <button
                                                    type="submit"
                                                    class="btn btn-primary btn-subscribe"
                                                    :class="{ 'btn-loading': subscribing }"
                                                    v-else
                                                    v-cloak
                                                >
                                                    <?php echo e(trans('cynoebook::layout.subscribe')); ?>

                                                </button>
                                            </div>
                                            <span class="error-message" v-if="error" v-text="error"></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </newsletter-subscription>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\bookreview\Themes\Cynoebook\views/public/include/subscribe.blade.php ENDPATH**/ ?>