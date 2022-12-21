<?php $markdown = app('Parsedown'); ?>
<?php ($markdown->setSafeMode(true)); ?>

<?php if(isset($reply) && $reply === true): ?>
  <div id="comment-<?php echo e($comment->getKey()); ?>" class="media" style="display: flex;">
<?php else: ?>
  <li id="comment-<?php echo e($comment->getKey()); ?>" class="media" style="display: flex;">
<?php endif; ?>


<?php if(isset($comment->commenter->email) && isset($comment->commenter->avatar->path)): ?>
    <img src="<?php echo e($comment->commenter->avatar->path); ?>" alt="..." class="avatar-img rounded-circle" style="width: 65px;height: 65px;border-radius: 5px;">
<?php else: ?>
    <img src="<?php echo e(url('modules/admin/images/user-icon.png')); ?>" alt="..." class="avatar-img rounded" style="width: 65px;height: 65px;border-radius: 5px;">
<?php endif; ?>
        
    <div class="media-body p-l-15">
            <h5 class="m-b-10"><?php echo e($comment->commenter->full_name ?? $comment->guest_name); ?> <small class="text-muted">- <?php echo e($comment->created_at->diffForHumans()); ?></small></h5>
            <div  class="m-b-10"style="white-space: pre-wrap;"><?php echo $markdown->line($comment->comment); ?></div>
            <div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reply-to-comment', $comment)): ?>
                    <a href="#" data-toggle="modal" data-target="#reply-modal-<?php echo e($comment->getKey()); ?>" class="text-uppercase1 p-l-15"><?php echo e(clean(trans('cynoebook::comments.reply'))); ?></a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-comment', $comment)): ?>
                    <a href="#" data-toggle="modal" data-target="#comment-modal-<?php echo e($comment->getKey()); ?>" class="p-l-15"><?php echo e(clean(trans('cynoebook::comments.edit'))); ?></a>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-comment', $comment)): ?>
                    <a href="<?php echo e(route('comments.destroy', $comment->getKey())); ?>" onclick="event.preventDefault();document.getElementById('comment-delete-form-<?php echo e($comment->getKey()); ?>').submit();" class="text-danger p-l-15"><?php echo e(clean(trans('cynoebook::comments.delete'))); ?></a>
                    <form id="comment-delete-form-<?php echo e($comment->getKey()); ?>" action="<?php echo e(route('comments.destroy', $comment->getKey())); ?>" method="POST" style="display: none;">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                    </form>
                <?php endif; ?>
            </div>
            
            

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-comment', $comment)): ?>
                <div class="modal fade" id="comment-modal-<?php echo e($comment->getKey()); ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" action="<?php echo e(route('comments.update', $comment->getKey())); ?>">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php echo e(clean(trans('cynoebook::comments.edit_comment'))); ?>

                                    <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                    </button>
                                    
                                    </h5>
                                    
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="message"><?php echo e(clean(trans('cynoebook::comments.update_your_comment'))); ?>:</label>
                                        <textarea required class="form-control" name="message" rows="3"><?php echo e($comment->comment); ?></textarea>
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><?php echo e(clean(trans('cynoebook::comments.cancel'))); ?></button>
                                    <button type="submit" class="btn btn-sm btn-primary"><?php echo e(clean(trans('cynoebook::comments.update'))); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('reply-to-comment', $comment)): ?>
                <div class="modal fade " id="reply-modal-<?php echo e($comment->getKey()); ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" action="<?php echo e(route('comments.reply', $comment->getKey())); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php echo e(clean(trans('cynoebook::comments.reply_to_comment'))); ?>

                                    <button type="button" class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                    </button>
                                    </h5>
                                    
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="message"><?php echo e(clean(trans('cynoebook::comments.leave_your_comment'))); ?>:</label>
                                        <textarea required class="form-control" name="message" rows="3"></textarea>
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><?php echo e(clean(trans('cynoebook::comments.cancel'))); ?></button>
                                    <button type="submit" class="btn btn-sm btn-primary"><?php echo e(clean(trans('cynoebook::comments.reply'))); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            

            
            <?php if($grouped_comments->has($comment->getKey())): ?>
                <?php $__currentLoopData = $grouped_comments[$comment->getKey()]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('comments::_comment', [
                        'comment' => $child,
                        'reply' => true,
                        'grouped_comments' => $grouped_comments
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            
        </div>
       

  
<?php if(isset($reply) && $reply === true): ?>
  </div>
<?php else: ?>
  </li><hr>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\resources\views/vendor/comments/_comment.blade.php ENDPATH**/ ?>