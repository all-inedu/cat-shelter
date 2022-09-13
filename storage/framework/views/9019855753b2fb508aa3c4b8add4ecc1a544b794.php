<style>
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


<?php $__env->startSection('title', 'Cats - Admin Dashboard'); ?>

<?php $__env->startSection('page-title', 'Cat List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            
            <form action="">
                <?php echo csrf_field(); ?>
                <div class="row g-3 align-items-cente">
                    <div class="col-md-11">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select id="age" class="form-control w-100" name="state">
                                    <option></option>
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?> Month</option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="type" class="form-select" name="state">
                                    <option></option>
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?> Month</option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="weight" class="form-select" name="state">
                                    <option></option>
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <option value="<?php echo e($i); ?>"><?php echo e(1); ?> Kg</option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="status" class="form-select" name="state">
                                    <option></option>
                                    <option value="unadopted">Undadopted</option>
                                    <option value="adopted">Adopted</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn button-primary w-100">
                            <i class="bi bi-search me-1"></i>
                            Filter
                        </button>
                    </div>
                </div>
                <div class="mt-3">
                    <form action="">
                        <?php echo csrf_field(); ?>
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <input type="text" name="" placeholder="Search" class="form-control">
                            <div class="search text-end" style="width: 4%">
                                <button class="btn button-primary ps-3 pe-2" type="submit">
                                    <i class="bi bi-search"></i>&nbsp;
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </form>

            
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
                            <th nowrap class="text-end">Action</th>
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
                                    <a href="<?php echo e(url('/admin/cat/' . $i)); ?>" class="btn button-primary">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Detail
                                    </a>
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

    <script>
        $(document).ready(function() {
            $('#age').select2({
                placeholder: "Select age",
            });
            $('#type').select2({
                placeholder: "Select type",
            });
            $('#weight').select2({
                placeholder: "Select weight",
            });
            $('#status').select2({
                placeholder: "Select status",
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/admin/cat.blade.php ENDPATH**/ ?>