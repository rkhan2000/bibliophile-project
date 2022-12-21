<?php $__env->startComponent('admin::include.page.header'); ?>
    <?php $__env->slot('title', clean(trans('category::categories.categories'))); ?>

    <li class="nav-item"><?php echo e(clean(trans('category::categories.categories'))); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <a href="#" class="collapse-all"><?php echo e(clean(trans('category::categories.tree.collapse_all'))); ?></a> |
                <a href="#" class="expand-all"><?php echo e(clean(trans('category::categories.tree.expand_all'))); ?></a>
                
            </div>
            <div class="card-body" id="menus-table">
                
                <div class="category-tree"></div>
            </div>
        </div>
    
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header clearfix">
                <div class="pull-right">
                    <button class="btn btn-primary  ml-auto add-root-category"><?php echo e(clean(trans('category::categories.tree.add_root_category'))); ?></button>
                    <button class="btn btn-primary ml-auto add-sub-category disabled"><?php echo e(clean(trans('category::categories.tree.add_sub_category'))); ?></button>
                
                </div>
            </div>
            <form method="POST" action="<?php echo e(route('admin.categories.store')); ?>" class="form-horizontal" id="category-form" novalidate>
            <?php echo e(csrf_field()); ?>

                <div class="card-body">
                    <?php echo e(Form::text('name', clean(trans('category::attributes.name')), $errors, null, ['required' => true])); ?>

                    <div id="slug-field" class="d-none">
                    <?php echo e(Form::text('slug', clean(trans('category::attributes.slug')), $errors)); ?>

                    </div>
                    <?php echo e(Form::checkbox('is_searchable', clean(trans('category::attributes.is_searchable')), clean(trans('category::categories.form.show_this_category_in_search_box')), $errors)); ?>

                    <?php echo e(Form::checkbox('is_active', clean(trans('category::attributes.is_active')), clean(trans('category::categories.form.enable_the_category')), $errors)); ?>

                    
                </div>
                <div class="card-footer">
                    <div class="form-group clearfix">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary" data-loading>
                                <?php echo e(clean(trans('admin::admin.buttons.save'))); ?>

                            </button>

                            <button type="button" class="btn btn-danger btn-delete-category d-none" data-loading>
                                <?php echo e(clean(trans('admin::admin.buttons.delete'))); ?>

                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <form method="POST" id="categories-delete-form" action="">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('delete')); ?>

            
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Modules/Category/Resources/views/admin/categories/index.blade.php ENDPATH**/ ?>