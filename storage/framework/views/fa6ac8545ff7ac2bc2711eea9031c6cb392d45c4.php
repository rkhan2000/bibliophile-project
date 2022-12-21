<?php echo $__env->make('files::admin.pdf_picker.book-cover', [
    'title' => trans('ebook::ebooks.form.book_cover'),
    'inputName' => 'files[book_cover]',
    'file' => $ebook->bookcover,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<hr>
<?php echo e(Form::select('file_type', clean(trans('ebook::attributes.file_type')), $errors, clean(trans('ebook::ebooks.form.file_type')), $ebook, ['required' => true])); ?>


<div class="link-field external_link-field <?php echo e(old('file_type', $ebook->file_type) !== 'external_link' ? 'd-none' :''); ?>">
    <?php echo e(Form::text('file_url', trans('ebook::ebooks.form.book_file_external'), $errors, $ebook, ['required' => true])); ?>

</div>

<div class="link-field embed_code-field <?php echo e(old('file_type', $ebook->file_type) !== 'embed_code' ? 'd-none' :''); ?>" >
   <?php echo e(Form::textarea('embed_code', clean(trans('ebook::ebooks.form.embed_code')), $errors, $ebook, ['rows' => 2,'required' => true,'help'=> clean(trans('ebook::ebooks.form.embed_code_help_text'))])); ?>


</div>
<?php
    $allowedFileTypes=get_allowed_file_types();
    $allowedAudioFileTypes=get_allowed_file_types('audio');
    $allowedFileTypes=implode (",", $allowedFileTypes);
    $allowedAudioFileTypes=implode (",", $allowedAudioFileTypes);
?>
<div class="link-field upload-field <?php echo e(old('file_type', $ebook->file_type ?? 'upload') !== 'upload' ? 'd-none' :''); ?>">
    <?php echo $__env->make('files::admin.pdf_picker.single', [
        'title' => trans('ebook::ebooks.form.book_file'),
        'inputName' => 'files[book_file]',
        'file' => $ebook->bookfile,
        'fileType' => $allowedFileTypes,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="link-field audio-field <?php echo e(old('file_type', $ebook->file_type) !== 'audio' ? 'd-none' :''); ?>">
    <?php echo $__env->make('files::admin.pdf_picker.multiple', [
        'title' => trans('ebook::ebooks.form.audio_book_files'),
        'inputName' => 'files[audio_book_files][]',
        'files' => $ebook->audioBookFiles,
        'fileType' => $allowedAudioFileTypes,
        'inputValidation'=>'audio_files_count'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if( $ebook->audioBookFiles->isNotEmpty()): ?>
        <?php echo e(Form::text('audio_files', '', $errors, '', [ 'required' => true,' readonly'=>true,'style'=>'display:none;','value'=>'1','class'=>'audio_files_count'])); ?>

    <?php else: ?>
        <?php echo e(Form::text('audio_files', '', $errors, '', [ 'required' => true,' readonly'=>true,'style'=>'display:none;','value'=>'','class'=>'audio_files_count'])); ?>

    <?php endif; ?>
</div>


<?php $__env->startPush('scripts'); ?>
    <script>
    (function () {
        "use strict";
            $('#file_type').on('change', (e) => {
                $('.link-field').addClass('d-none');
                $(`.${e.currentTarget.value}-field`).removeClass('d-none');
            });
    })();
    </script>
    <style>
    [data-notify="container"] { z-index: 9999 !important; }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\Modules/Ebook/Resources/views/admin/ebooks/tabs/bookcoveandpdf.blade.php ENDPATH**/ ?>