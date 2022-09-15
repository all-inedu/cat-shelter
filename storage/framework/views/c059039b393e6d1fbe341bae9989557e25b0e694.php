<style>
    .recent-list {
        max-height: 300px;
    }
</style>


<?php $__env->startSection('title', 'Admin Dashboard - Cat Shelter'); ?>

<?php $__env->startSection('page-title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row p-0 g-2 align-items-stretch">
        
        <div class="col-md-6">
            <div class="bg-white rounded p-3 shadow-sm">
                <h6>Total of Cats</h6>
                <hr class="hr-cat">
                <div class="row mt-2 g-2">
                    <div class="col-md-6">
                        <div class="card text-center border-0 shadow-sm">
                            <div class="card-header cat-bg-primary">
                                Unadopted Cat
                            </div>
                            <div class="card-body">
                                <h3 class="cat-text-primary"><?php echo e($total_of_cat['unadopted']); ?></h3>
                                <h5 class="cat-text-secondary">Cat</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center border-0 shadow-sm">
                            <div class="card-header cat-bg-primary">
                                Adopted Cat
                            </div>
                            <div class="card-body">
                                <h3 class="cat-text-primary"><?php echo e($total_of_cat['adopted']); ?></h3>
                                <h5 class="cat-text-secondary">Cat</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-md-6 ">
            <div class="bg-white rounded p-3 h-100 shadow-sm">
                <div class="row g-2 h-100">
                    <div class="col-md-4 position-relative overflow-hidden h-100">
                        <h6>Total of Blogs</h6>
                        <hr class="hr-cat">
                        <div class="card cat-bg-primary text-center border-0 shadow-sm mt-3">
                            <div class="card-body text-center">
                                <h3 class="text-white"><?php echo e($total_blog); ?></h3>
                                <h5 class="text-white">Blogs</h5>
                            </div>
                        </div>
                        <div class="text-end position-absolute" style="bottom:0; right:0">
                            <hr class="hr-cat">
                        </div>
                    </div>
                    <div class="col-md-4 position-relative overflow-hidden h-100">
                        <h6>Total of Shelter</h6>
                        <hr class="hr-cat">
                        <div class="card cat-bg-primary text-center border-0 shadow-sm mt-3">
                            <div class="card-body text-center">
                                <h3 class="text-white"><?php echo e($total_shelter); ?></h3>
                                <h5 class="text-white">Shelter</h5>
                            </div>
                        </div>
                        <div class="text-end position-absolute" style="bottom:0; right:0">
                            <hr class="hr-cat">
                        </div>
                    </div>
                    <div class="col-md-4 position-relative overflow-hidden h-100">
                        <h6>Total of Adopter</h6>
                        <hr class="hr-cat">
                        <div class="card cat-bg-primary text-center border-0 shadow-sm mt-3">
                            <div class="card-body text-center">
                                <h3 class="text-white"><?php echo e($total_adopter); ?></h3>
                                <h5 class="text-white">Adopter</h5>
                            </div>
                        </div>
                        <div class="text-end position-absolute" style="bottom:0; right:0">
                            <hr class="hr-cat">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-0 g-2 align-items-stretch mt-1">
        <div class="col-md-6">
            <div class="bg-white rounded p-3 h-100 shadow-sm">
                <h6>Recent Adoption List</h6>
                <hr class="hr-cat">
                <div class="recent-list table-responsive mt-3">
                    <table class="table">
                        <thead class="cat-bg-primary">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Cat Name</th>
                                <th>Adopter Name</th>
                                <th>Adopted Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $recent_adoption; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adoption): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center text-muted align-middle">
                                    <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($adoption->cat->name); ?></td>
                                    <td><?php echo e($adoption->adopter->name); ?></td>
                                    <td><?php echo e(date('d M Y H:i', strtotime($adoption->updated_at))); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="bg-white rounded p-3 h-100 shadow-sm">
                <h6>Recent Blog List</h6>
                <hr class="hr-cat">
                <div class="recent-list table-responsive mt-3">
                    <table class="table">
                        <thead class="cat-bg-primary">
                            <tr class="text-center align-middle">
                                <th nowrap>No</th>
                                <th nowrap>Blog Name</th>
                                <th nowrap>Category Name</th>
                                <th nowrap>Description</th>
                                <th nowrap>Published Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $recent_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-center text-muted align-middle">
                                    <td><?php echo e($no++); ?></td>
                                    <td>
                                        <div style="width: 400px">
                                            <?php echo e($blog->title); ?>

                                        </div>
                                    </td>
                                    <td>
                                        <?php $__currentLoopData = $blog->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="badge cat-bg-primary m-1">
                                                <?php echo e($category->name); ?>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td>
                                        <div class="" style="width:400px">
                                            <?php echo e(substr($blog->content, 0, 30)); ?> ...
                                        </div>
                                    </td>
                                    <td><?php echo e(date('d M Y H:i', strtotime($blog->created_at))); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/admin/index.blade.php ENDPATH**/ ?>