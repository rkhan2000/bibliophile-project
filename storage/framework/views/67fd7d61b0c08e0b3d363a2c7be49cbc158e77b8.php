<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
    <div class="ebook-details">
        <h2 class="ebook-name">
            <?php if($ebook->isPasswordProtected()): ?>
                <i class="fa fa-lock has-error" aria-hidden="true" ></i>
            <?php endif; ?>
            
            <?php echo e($ebook->title); ?>

             <div class="clearfix"></div>   
        </h2>
        <div class="ebook-statistics m-b-10">
            <?php if(setting('reviews_enabled')): ?>
                <?php echo $__env->make('public.ebooks.partials.ebook.rating', ['rating' => $ebook->avgRating()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <span class="ebook-review pull-left">
                    (<?php echo e(intl_number($ebook->reviews->count())); ?> <?php echo e(clean(trans('cynoebook::ebook.user_reviews'))); ?>)
                </span>
            <?php endif; ?>
            
            <span class="ebook-view pull-left" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::ebook.views'))); ?>">
                <i class="fa fa-eye"></i> &nbsp; <?php echo e($ebook->viewed); ?>

            </span>
            
            <?php if(setting('enable_ebook_download')): ?>
                <?php if( $ebook->file_type!='embed_code' ): ?>
                    <span class="ebook-download ebook-incat pull-left" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::ebook.download'))); ?>">
                        <i class="fa fa-download"></i> &nbsp; <?php echo e($ebook->download); ?>

                    </span>
                <?php endif; ?>
            <?php endif; ?>
            <div class="clearfix"></div> 
        </div>
        <div class="clearfix"></div> 
        <div class="ebook-byinon m-b-10">
            <span class="ebook-user pull-left"><?php echo e(clean(trans('cynoebook::ebook.by'))); ?> 
                <?php if($ebook->user()->exists()): ?>
                    <a href="<?php echo e(route('user.profile.show',$ebook->user->username)); ?>"><?php echo e($ebook->user->full_name); ?></a>
                <?php else: ?>
                    <?php echo e(clean(trans('cynoebook::ebook_card.guest'))); ?>

                <?php endif; ?>
            </span>
            
            <span class="ebook-on pull-left"> <?php echo e(clean(trans('cynoebook::ebook.posted_on'))); ?> <a href="#"><?php echo e($ebook->created_at->toFormattedDateString()); ?></a></span>
            <div class="clearfix"></div> 
            <span class="ebook-incat pull-left ">
                <?php echo e(clean(trans('cynoebook::ebook.in_category'))); ?> -  
                <?php $__currentLoopData = $ebook->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('categories.show',$category->slug)); ?>">
                        <?php echo e($category->name); ?><?php echo e((!$loop->last) ? ', ' : ''); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </span>
            <div class="clearfix"></div> 
        </div>
        <div class="clearfix"></div> 
        <div class="ebook-other m-b-10">
            <span class="ebook-authors show"> 
                <label><?php echo e(trans('cynoebook::ebook.authors')); ?>:</label>
                <?php $__currentLoopData = $ebook->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($author->is_verified && $author->is_active ): ?>
                        <a href="<?php echo e(route('authors.show', $author->slug)); ?>"><?php echo e($author->name); ?></a><?php echo e((!$loop->last) ? ', ' : ''); ?>

                    <?php else: ?>
                        <?php echo e($author->name); ?><?php echo e((!$loop->last) ? ', ' : ''); ?>

                    <?php endif; ?>      
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </span>
        
            <?php if(! is_null($ebook->isbn)): ?>
                <span class="ebook-isbn-number show"> 
                    <label><?php echo e(trans('cynoebook::ebook.isbn_number')); ?>:</label>
                    <?php echo e($ebook->isbn); ?>

                </span>
            <?php endif; ?>
                     
            <?php if(! is_null($ebook->publisher)): ?>
                <span class="ebook-publisher pull-left "> 
                    <label><?php echo e(trans('cynoebook::ebook.published_by')); ?>:</label>
                    <?php echo e($ebook->publisher); ?>

                </span>
            <?php endif; ?>
        
            <?php if(! is_null($ebook->publication_year)): ?>
                <span  class="ebook-publication-year pull-left"> 
                    <label><?php echo e(trans('cynoebook::ebook.in_year')); ?>:</label>
                    <?php echo e($ebook->publication_year); ?>

                </span>
            <?php endif; ?> 
                  
            <div class="clearfix"></div> 
            
            <?php if(! is_null($ebook->key_word)): ?>
                <span  class="ebook-key_word show"> 
                    <label><?php echo e(trans('cynoebook::ebook.key_word')); ?>:</label>
                    <?php echo e($ebook->key_word); ?>

                </span>
            <?php endif; ?>

            <?php if(! is_null($ebook->target_reader)): ?>
                <span  class="ebook-target_reader show"> 
                    <label><?php echo e(trans('cynoebook::ebook.target_reader')); ?>:</label>
                    <?php echo e($ebook->target_reader); ?>

                </span>
            <?php endif; ?>

            <div class="clearfix"></div> 

            <?php if(! is_null($ebook->book_edition)): ?>
                <span  class="ebook-book_edition show "> 
                    <label><?php echo e(trans('cynoebook::ebook.book_edition')); ?>:</label>
                    <?php echo e($ebook->book_edition); ?>

                </span>
            <?php endif; ?>
            
            <?php if(! is_null($ebook->number_of_pages)): ?>
                <span class="ebook-number_of_pages show "> 
                    <label> <?php echo e(trans('cynoebook::ebook.number_of_pages')); ?>:</label>
                    <?php echo e($ebook->number_of_pages); ?>

                </span>
            <?php endif; ?>
            
             
            <?php if(! is_null($ebook->book_language)): ?>
                <span class="ebook-book_language show "> 
                    <label><?php echo e(trans('cynoebook::ebook.book_language')); ?>:</label>
                    <?php echo e($ebook->book_language); ?>

                </span>
            <?php endif; ?>
            
             
            <?php if(! is_null($ebook->country_origin)): ?>
                <span class="ebook-country_origin show"> 
                    <label><?php echo e(trans('cynoebook::ebook.country_origin')); ?>:</label>
                    <?php echo e($ebook->country_origin); ?>

                </span>
            <?php endif; ?>
            
            
        </div>
        
        <div class="clearfix"></div> 
            <?php if(! is_null($ebook->short_description)): ?>
                <div class="ebook-brief"><?php echo e($ebook->short_description); ?></div>
                <div class="clearfix"></div>
            <?php endif; ?> 
        <div class="ebook-action m-b-10"> 
            <?php if(! is_null($ebook->buy_url)): ?>
                <a href="<?php echo e($ebook->buy_url); ?>" target="_blank" class="btn btn-primary pull-left">
                    <?php echo e(clean(trans('cynoebook::ebook.buy_now'))); ?>

                    <?php if(! is_null($ebook->price)): ?>
                    <?php echo e($ebook->price); ?>

                    <?php endif; ?>
                </a>
            <?php endif; ?>
            <div class="pull-right">               
                <span class="pull-left" style="margin-right: 5px;">                   
                    <?php if($ebook->isFavorite()): ?>
                        <form method="POST" action="<?php echo e(route('account.favorite.destroy',$ebook)); ?>">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="delete">                         
                            <button type="submit" class="btn btn-favorite btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::ebook_card.remove_from_favorite'))); ?>">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </button>
                        </form>
                    <?php else: ?>   
                        <form method="POST" action="<?php echo e(route('favorite.store')); ?>">
                            <?php echo e(csrf_field()); ?>    
                            <input type="hidden" name="ebook_id" value="<?php echo e($ebook->id); ?>">
                            <button type="submit" class="btn btn-favorite btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::ebook_card.add_to_favorite'))); ?>">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    <?php endif; ?>  
                </span>
                
            
                <?php if(setting('enable_ebook_report')): ?>
                    <?php if(auth()->guard()->check()): ?>
                    <button type="button" id="btn-reportBook" class="btn btn-primary btn-sm btn-right-actions"  data-target="#reportBook" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::ebook.report'))); ?>"><i class="fa fa-flag" aria-hidden="true" ></i></button>
                    <?php echo $__env->make('public.ebooks.partials.ebook.report.report', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                <?php endif; ?>
            
                
                <?php if($ebook->password=='' &&  $unlock): ?>
                    <?php if(setting('enable_ebook_print_dis')): ?>
                        <button type="button" class="btn btn-primary btn-sm btin-print" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::ebook.print'))); ?>"><i class="fa fa-print" aria-hidden="true" ></i></button>
                    <?php endif; ?>
                    <?php if(setting('enable_ebook_download')): ?>
                        <?php if($ebook->file_type=='upload' ): ?>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('ebooks.download',[$ebook->slug,id_encode($ebook->book_file->id)])); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::ebook.download'))); ?>"><i class="fa fa-download" aria-hidden="true" ></i></a>
                        <?php endif; ?>
                        <?php if( $ebook->file_type=='external_link'): ?>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('ebooks.download',$ebook->slug)); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::ebook.download'))); ?>"><i class="fa fa-download" aria-hidden="true" ></i></a>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
                
                <?php if(auth()->user()): ?>
                    <?php if($ebook->user_id==auth()->user()->id): ?>
                        <a href="<?php echo e(route('ebooks.edit', ['slug' => $ebook->slug])); ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::account.ebooks.edit_ebook'))); ?>">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                            
                        <a href="<?php echo e(route('ebooks.delete', ['slug' => $ebook->slug])); ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::account.ebooks.delete_ebook'))); ?>" onclick="return confirm('<?php echo e(clean(trans('cynoebook::account.ebooks.delete_confirm_message'))); ?>')">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>   
            </div>
            <div class="clearfix"></div>
        </div> 
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script>
    function PrintPDF(elem)
    {
        var objFra = document.getElementsByClassName(elem);
        objFra.contentWindow.focus();
        objFra.contentWindow.print();
    }
    (function () {
        "use strict";
        
        
        $(document).ready(function(){
            <?php if(report_form_has_error($errors)): ?>
                $('body').append('<div class="right-actions-overlay"></div>');
                $("#reportBook").addClass('open');
                $(".right-actions-overlay").show();
            <?php endif; ?>
        }); 
    })();     
    
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/ebook/details.blade.php ENDPATH**/ ?>