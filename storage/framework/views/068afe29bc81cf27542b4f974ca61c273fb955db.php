<a href="<?php echo e(route('ebooks.show', $ebook->slug)); ?>" class="ebook-card">
    <div class="ebook-card-inner">
        <div class="ebook-image clearfix">
            <ul class="ebook-ribbon list-inline">
                <?php if($ebook->isPrivateEbook()): ?>
                    <li><span class="ribbon bg-red"><i class="fa fa-user-secret" aria-hidden="true"></i> <?php echo e(clean(trans('cynoebook::ebook_card.private'))); ?></span></li>
                <?php endif; ?>
                <?php if($ebook->isFeatured()): ?>
                    <li><span class="ribbon bg-green"><i class="fa fa-star" aria-hidden="true"></i> <?php echo e(clean(trans('cynoebook::ebook_card.featured'))); ?></span></li>
                <?php endif; ?>
            </ul>

            <?php if(! $ebook->book_cover->exists): ?>
                <div class="image-placeholder">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                </div>
            <?php else: ?>
                <div class="image-holder">
                    <img src="<?php echo e($ebook->book_cover->path); ?>">
                </div>
            <?php endif; ?>
            <?php if(auth()->user()): ?>
            <div class="hover-action">
                <?php if($ebook->user_id==auth()->user()->id): ?>
                    <form method="GET" action="<?php echo e(route('ebooks.edit', ['slug' => $ebook->slug])); ?>">
                        
                        <button type="submit" class="btn btn-icon btn-icon-mini btn-round btn-primary" data-toggle="tooltip" data-placement="<?php echo e(is_rtl() ? 'left' : 'right'); ?>" title="<?php echo e(clean(trans('cynoebook::account.ebooks.edit_ebook'))); ?>">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                    </form>
                    <form method="GET" action="<?php echo e(route('ebooks.delete', ['slug' => $ebook->slug])); ?>" onsubmit="return confirm('<?php echo e(clean(trans('cynoebook::account.ebooks.delete_confirm_message'))); ?>')">
                        <?php echo e(csrf_field()); ?>

                            
                        <button type="submit" class="btn btn-icon btn-icon-mini btn-round btn-danger" data-toggle="tooltip" data-placement="<?php echo e(is_rtl() ? 'left' : 'right'); ?>" title="<?php echo e(clean(trans('cynoebook::account.ebooks.delete_ebook'))); ?>">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                    </form>
                    
                <?php endif; ?>
                
            </div>
            <?php endif; ?>
        </div>

        <div class="ebook-content clearfix">
            <span class="ebook-name div-ellipsis">
                <?php if($ebook->isPasswordProtected()): ?>
                    <i class="fa fa-lock has-error" aria-hidden="true" ></i>
                <?php endif; ?>
                <?php echo e(mb_strimwidth($ebook->title, 0, 35, "...")); ?>

            </span>
            <span class="ebook-name div-ellipsis ebook-authors">
                <?php echo e(clean(trans('cynoebook::ebook.authors'))); ?>: 
                <?php echo e(mb_strimwidth($ebook->getAuthors(), 0, 28, "...")); ?>

            </span>
            
        </div>
        
        <div class="more-details-wrapper">
            
            <?php if($ebook->isFavorite()): ?>
                <form method="POST" action="<?php echo e(route('account.favorite.destroy',$ebook)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="_method" value="delete">   
                
                    <button type="submit" class="btn btn-favorite" data-toggle="tooltip" data-placement="<?php echo e(is_rtl() ? 'left' : 'right'); ?>" title="<?php echo e(clean(trans('cynoebook::ebook_card.remove_from_favorite'))); ?>">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                    </button>
                </form>
            <?php else: ?>   
            <form method="POST" action="<?php echo e(route('favorite.store')); ?>">
                <?php echo e(csrf_field()); ?>

                    
                <input type="hidden" name="ebook_id" value="<?php echo e($ebook->id); ?>">
                    <button type="submit" class="btn btn-favorite" data-toggle="tooltip" data-placement="<?php echo e(is_rtl() ? 'left' : 'right'); ?>" title="<?php echo e(clean(trans('cynoebook::ebook_card.add_to_favorite'))); ?>">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                </button>
            </form>
            <?php endif; ?> 
            <?php echo $__env->make('public.ebooks.partials.ebook.rating', ['rating' => $ebook->avgRating()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="div-ellipsis ebook-category" data-toggle="tooltip" data-placement="top" title="<?php echo e($ebook->implodeCategories()); ?>">
                <i class="fa fa-folder-o"></i> In <?php echo e(mb_strimwidth($ebook->implodeCategories(), 0, 10, "...")); ?>

            </div>
        </div>
    </div>
</a>

<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/ebook_card.blade.php ENDPATH**/ ?>