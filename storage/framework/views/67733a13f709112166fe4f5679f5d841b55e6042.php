<div id="comments" class="comments tab-pane fade in clearfix <?php echo e(request()->has('comment') || comment_form_has_error($errors) ? 'active' : ''); ?>">
    <div class="row p-t-15">
        <div class="col-lg-12 ">
        <?php echo $__env->make('comments::components.comments', [
            'model' => $ebook,
            'approved' => true,
            'perPage' => 20
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
    (function () {
        "use strict";
        $( document ).ready(function() {
            var hash = window.location.hash.substr(1);
            if(hash.indexOf('comment-') != -1){
                console.log(hash);
                $("#comment-tab a").trigger('click');
                $('html, body').animate({
                    scrollTop: $("#comment-tab").offset().top
                }, 'slow');
            }
        });
    })();
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/ebook/tab_contents/comments.blade.php ENDPATH**/ ?>