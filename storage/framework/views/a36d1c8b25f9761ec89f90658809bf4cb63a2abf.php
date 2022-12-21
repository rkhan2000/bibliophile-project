<div id="description" class="description tab-pane fade in <?php echo e(request()->has('comment') || request()->has('reviews') || review_form_has_error($errors) || comment_form_has_error($errors) ? '' : 'active'); ?>">
    <?php echo $ebook->description; ?>

</div>
<?php /**PATH C:\xampp\htdocs\Themes\Cynoebook\views/public/ebooks/partials/ebook/tab_contents/description.blade.php ENDPATH**/ ?>