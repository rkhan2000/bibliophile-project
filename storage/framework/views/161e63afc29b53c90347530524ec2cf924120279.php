<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
    <?php if($ebook->password=='' &&  $unlock): ?>
    <div class="panel-group " id="ebook-files-preview" role="tablist" aria-multiselectable="true">
        <!--Main File-->
        <?php
            $inc=1;
            $addAudiojs=1;
        ?>
        <!--Files-->
        <?php if(!empty($availableFiles)): ?>
            <?php $__currentLoopData = $availableFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel panel-default">
                    <div class="panel-heading text-left" role="tab" id="heading-file-<?php echo e($inc); ?>">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#ebook-files-preview" href="#collapse-file-<?php echo e($inc); ?>" aria-expanded="true" aria-controls="collapse-file-<?php echo e($inc); ?>">
                            <?php echo e(clean(trans('cynoebook::ebook.file'))); ?>: <?php echo e($file['filename']!='' ? $file['filename'] :  $ebook->title); ?>

                            </a>
                            <?php if(setting('enable_ebook_download')): ?>
                                <?php if( $ebook->file_type=='audio'  ): ?>
                                    <a class="btn btn-primary btn-sm pull-right" href="<?php echo e(route('ebooks.download',[$ebook->slug,id_encode($file['file']->id)])); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo e(clean(trans('cynoebook::ebook.download'))); ?>"><i class="fa fa-download" aria-hidden="true" ></i></a>
                                    <div class="clearfix"></div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div id="collapse-file-<?php echo e($inc); ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-file-<?php echo e($inc); ?>">
                        <div class="panel-body">
                            <?php if($file['viewer']=='embed'): ?>
                                <?php echo $ebook->embed_code; ?>

                            <?php endif; ?>
                            <?php if($file['viewer']=='pdf'): ?>
                                <div id="disp-pdf-<?php echo e($inc); ?>">
                                    <?php if($file['type']!='external'): ?>
                                        <iframe src="<?php echo e(Theme::url('pdfViewer/web/viewer.html?file='.$file['url'])); ?>" id="ipdf" frameborder="0" style="border:0;width: 100%;height: 500px;"></iframe>
                                    <?php else: ?>                   
                                        <?php echo $__env->make('public.ebooks.viewer.pdfviewer', ['ebook'=>$ebook,'url'=>$file['url'],'type'=>$file['type'],'num'=>$inc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if($file['viewer']=='epub'): ?>
                                <iframe class="print-file" src="<?php echo e(route('ebooks.epubReader',$ebook->slug)); ?>" id="epub-<?php echo e($inc); ?>" frameborder="0" style="width: 100%;height: 500px;"></iframe>
                            <?php endif; ?>
                            <?php if($file['viewer']=='audio'): ?>
                                <?php echo $__env->make('public.ebooks.viewer.audio', ['ebook'=>$ebook,'url'=>$file['url'],'filename'=>$file['filename'],'num'=>$inc,'addjs'=>$addAudiojs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php
                                    $addAudiojs=0;
                                ?>
                            <?php endif; ?>
                            <?php if($file['viewer']=='gview'): ?>
                                <?php echo $__env->make('public.ebooks.viewer.gview', ['ebook'=>$ebook,'url'=>$file['url'],'num'=>$inc], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
                    $inc++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>    
   
        
    <?php else: ?>
            <button type="submit" class="btn btn-danger btn-lg btn-right-actions"  data-target="#unlockBook" id="btn-unlockBook" ><i class="fa fa-lock"></i> <?php echo e(clean(trans('cynoebook::ebook.unlock'))); ?></button>
            
            <div class="right-actions" id="unlockBook">
                <div class="title"><?php echo e(clean(trans('cynoebook::ebook.password_header'))); ?></div>
                <div class="action-content">
                    <div id="action-movefile">
                        <form method="POST" action="<?php echo e(route('ebooks.unlock',$ebook->slug)); ?>" id="ebook-unlock-form" name="ebook-unlock-form">    
                            <?php echo e(csrf_field()); ?>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="form-group row  <?php echo e($errors->has('unlockpassword') ? 'has-error' : ''); ?>" >
                                    <label for="unlockpassword" class="col-md-12 text-left"><?php echo e(clean(trans('cynoebook::ebook.password'))); ?></label>
                                    <div class="col-md-12 p-0">
                                        <input type="password" class="form-control" name="unlockpassword" required>
                                        <?php if($errors->has('unlockpassword')): ?>
                                            <span class="error-message text-left"><?php echo e(clean($errors->first('unlockpassword'))); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group text-left">
                                    <button type="submit" class="btn btn-primary btn-lg" data-loading><?php echo e(clean(trans('cynoebook::ebook.unlock'))); ?></button>
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
                <div class="action-toggle">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
            </div>

                
    <?php endif; ?>
</div>

<?php $__env->startPush('scripts'); ?>
    
    <script>
        (function () {
            "use strict";
            
            $(document).ready(function() {
                /* $('.btin-print').on("click", function () {
                  $('.print-file').printThis({canvas:true});
                }); */
                <?php if($ebook->password!='' &&  !$unlock): ?>
                    $('body').append('<div class="right-actions-overlay"></div>');
                    $("#unlockBook").addClass('open');
                    $(".right-actions-overlay").show();
                <?php endif; ?>
                
                $("#ebook-unlock-form").bind("keypress", function(e) {
                    if (e.keyCode == 13) {
                        return false;
                    }
                });
                
            });
            
        })();  
    </script>

<?php $__env->stopPush(); ?>


<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/ebook/view-files.blade.php ENDPATH**/ ?>