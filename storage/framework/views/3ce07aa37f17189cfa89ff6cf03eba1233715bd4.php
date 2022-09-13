<style>
    .thumbnail-pic {
        width: 200px;
        height: 200px;
        border-radius: 50% !important;
        position: relative;
        overflow: hidden;
        background: #dedede;
    }

    .thumbnail-pic img {
        object-fit: 100%;
        object-position: center;
    }

    .user {
        border-left: 5px solid #dedede;
        padding-left: 20px;
    }

    .result {
        position: relative;
        max-height: 50vh;
        overflow: auto
    }

    .thumbnail-cat {
        width: 90px;
        height: 70px;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        background: #dedede;
    }

    .thumbnail-cat img {
        object-fit: cover;
        object-position: center;
    }
</style>


<?php $__env->startSection('title', 'Blogs - Admin Dashboard'); ?>

<?php $__env->startSection('page-title'); ?>
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="fw-bold text-muted">
            Cat Detail
        </div>
        <a href="<?php echo e(url('admin/blog')); ?>" class="btn button-primary">
            <i class="bi bi-arrow-left me-1"></i>
            Back
        </a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="thumbnail-pic">
                        <img src="https://cataas.com/cat?type=1" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Shelter Name</h3>
                    <hr class="hr-cat">
                    <ul class="mt-3 text-muted" style="margin-left: -12px">
                        <li>Email:shelter@cat.com</li>
                        <li>Phone Number: +62814242323</li>
                        <li>Address: Jalan Jeruk Kembar</li>
                        <li>Cat Totoal: 4</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    
    <div class="row mt-2">
        <div class="col-12 bg-white p-3">
            <h5>List of Cat</h5>
            <hr class="hr-cat mb-3">
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="cat-bg-primary">
                        <tr>
                            <th nowrap>No</th>
                            <th nowrap>Name</th>
                            <th nowrap>Type</th>
                            <th nowrap>Age</th>
                            <th nowrap>Weight</th>
                            <th nowrap>Thumbnail</th>
                            <th nowrap>Status</th>
                            <th nowrap>Published Date</th>
                            <th nowrap class="text-end">Adopter Name</th>
                        </tr>
                    </thead>
                    <tbody class="text-muted">
                        <?php for($i = 1; $i < 8; $i++): ?>
                            <tr class="align-middle">
                                <td><?php echo e($i); ?></td>
                                <td nowrap>Title Name</td>
                                <td>Category</td>
                                <td>6 Month</td>
                                <td>
                                    4 Kg
                                </td>
                                <td class="text-center">
                                    <div class="thumbnail-cat">
                                        <img src="https://cataas.com/cat?type=<?php echo e($i); ?>" class="w-100"
                                            loading="lazy">
                                    </div>
                                </td>
                                <td>Unadopted</td>
                                <td>24 August 2022</td>
                                <td nowrap class="text-end">
                                    Manuel
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example" class="mt-1">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link ps-2" href="#" aria-label="Previous">
                            <span aria-hidden="true">&nbsp;<i class="bi bi-arrow-left"></i></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link ps-2" href="#" aria-label="Next">
                            <span aria-hidden="true">&nbsp;<i class="bi bi-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/admin/shelter-view.blade.php ENDPATH**/ ?>