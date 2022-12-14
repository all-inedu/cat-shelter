<style>

</style>


<?php $__env->startSection('title', 'Blogs - Admin Dashboard'); ?>

<?php $__env->startSection('page-title'); ?>
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="fw-bold text-muted">
            Blog Post
        </div>
        <a href="<?php echo e(url('admin/blog/3')); ?>" class="btn button-primary">
            <i class="bi bi-arrow-left me-1"></i>
            Back
        </a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            <h2 class="mb-0 pb-0">Edit a Blog Post</h2>
            <hr class="hr-cat mb-5">
            <form action="" method="POST">
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Blog Title :
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Category :
                    </div>
                    <div class="col-md-10">
                        <select id="cat" class="form-control w-50" name="category">
                            <option></option>
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <option value="<?php echo e($i); ?>">Category <?php echo e($i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Thumbnail :
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control w-25">
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Description :
                    </div>
                    <div class="col-md-10">
                        <textarea name="" id="" class="form-control" rows="13"></textarea>
                    </div>
                </div>
                <div class="my-3 text-end">
                    <button type="submit" class="btn btn-secondary px-3">
                        <i class="bi bi-plus-square me-1"></i> Create
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#cat').select2({
                placeholder: "Select category",
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/admin/blog-edit.blade.php ENDPATH**/ ?>