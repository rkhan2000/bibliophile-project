<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body" id="files-table">
                <div class="table-responsive">
                   
                        <table class="display table table-striped table-hover" >
                            <thead>
                                 <tr>
                                    <?php echo $__env->make('admin::include.table.select-all',["name"=>clean(trans('files::files.files'))], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <th><?php echo e(clean(trans('files::files.table.file'))); ?></th>
                                    <th><?php echo e(clean(trans('files::files.table.name'))); ?></th>
                                    <th><?php echo e(clean(trans('files::files.table.size'))); ?></th>
                                    <th><?php echo e(clean(trans('files::files.table.extension'))); ?></th>
                                    <th data-sort><?php echo e(clean(trans('admin::admin.table.created'))); ?></th>
                                    <th><?php echo e(clean(trans('files::files.table.action'))); ?></th>
                                </tr>
                            </thead>

                            <tbody></tbody>
                        </table>
                </div>
            </div>
        </div>
    
    </div>
</div><?php /**PATH C:\xampp\htdocs\Modules/Files/Resources/views/admin/files/include/table.blade.php ENDPATH**/ ?>