<style>

</style>


<?php $__env->startSection('title', 'Shelter - Admin Dashboard'); ?>

<?php $__env->startSection('page-title', 'Shelter List'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            
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

            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="cat-bg-primary">
                        <tr>
                            <th nowrap>No</th>
                            <th nowrap>Shelter Name</th>
                            <th nowrap>Phone Number</th>
                            <th nowrap>Email</th>
                            <th nowrap>Address</th>
                            <th nowrap class="text-center">Unadopted Cat</th>
                            <th nowrap class="text-center">Adopted Cat</th>
                            <th nowrap class="text-center">Total Cat</th>
                            <th nowrap>Joined Date</th>
                            <th nowrap class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-muted">
                        <?php for($i = 1; $i < 8; $i++): ?>
                            <tr class="align-middle">
                                <td><?php echo e($i); ?></td>
                                <td nowrap>Shelter Name</td>
                                <td>62812421421</td>
                                <td>admin@gmail.com</td>
                                <td>Jl Jeruk Kembar Bloq Q9 No 15</td>
                                <td class="text-center">3 Cats</td>
                                <td class="text-center">3 Cats</td>
                                <td class="text-center">6 Cats</td>
                                <td class="text-end">24 July 2022</td>
                                <td nowrap class="text-end">
                                    <a href="<?php echo e(url('/admin/shelter/' . $i)); ?>" class="btn button-primary">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/admin/shelter.blade.php ENDPATH**/ ?>