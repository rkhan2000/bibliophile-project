<?php
    if (isset($approved) and $approved == true) {
        $comments = $model->approvedComments;
    } else {
        $comments = $model->comments;
    }
?>
<div class="col-lg-12">
<?php if($comments->count() < 1): ?>
    <div class="alert alert-warning"><?php echo e(clean(trans('cynoebook::comments.there_are_no_comments_for_this_ebook'))); ?></div>
<?php endif; ?>

<ul class="list-unstyled">
    <?php
        $comments = $comments->sortBy('created_at');

        if (isset($perPage)) {
            $page = request()->query('page', 1) - 1;

            $parentComments = $comments->where('child_id', '');

            $slicedParentComments = $parentComments->slice($page * $perPage, $perPage);

            $m = Config::get('comments.model'); // This has to be done like this, otherwise it will complain.
            $modelKeyName = (new $m)->getKeyName(); // This defaults to 'id' if not changed.

            $slicedParentCommentsIds = $slicedParentComments->pluck($modelKeyName)->toArray();

            // Remove parent Comments from comments.
            $comments = $comments->where('child_id', '!=', '');

            $grouped_comments = new \Illuminate\Pagination\LengthAwarePaginator(
                $slicedParentComments->merge($comments)->groupBy('child_id'),
                $parentComments->count(),
                $perPage
            );

            $grouped_comments->appends(['comment'=>'true'])->withPath(request()->url());
        } else {
            $grouped_comments = $comments->groupBy('child_id');
        }
    ?>
    <?php $__currentLoopData = $grouped_comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment_id => $comments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <?php if($comment_id == ''): ?>
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('comments::_comment', [
                    'comment' => $comment,
                    'grouped_comments' => $grouped_comments
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php if(isset($perPage)): ?>
    <?php echo e($grouped_comments->links()); ?>

<?php endif; ?>
</div>
<div class="col-lg-12">
<?php if(auth()->guard()->check()): ?>
    <?php echo $__env->make('comments::_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(Config::get('comments.guest_commenting') == true): ?>
    <?php echo $__env->make('comments::_form', [
        'guest_commenting' => true
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="message"><?php echo e(clean(trans('cynoebook::comments.leave_your_comment'))); ?><span>*</span></label>
                <textarea required class="form-control   <?php if($errors->has('message')): ?> error <?php endif; ?>" name="message" rows="3"></textarea>
            </div>
            <div class="alert alert-warning"><?php echo e(clean(trans('cynoebook::comments.you_must_log_in_to_post_a_comment'))); ?></div>
            
            <a href="<?php echo e(route('login')); ?>" class="btn btn-primary pull-right"><?php echo e(clean(trans('cynoebook::comments.log_in'))); ?></a>
        </div>
    </div>
<?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\resources\views/vendor/comments/components/comments.blade.php ENDPATH**/ ?>