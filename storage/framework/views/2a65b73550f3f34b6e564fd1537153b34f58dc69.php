<style>
    .card {
        border-radius: 10px !important;
    }

    .thumbnail-cat {
        height: 200px;
        overflow: hidden;
        border-radius: 10px;
    }

    .thumbnail-cat img {
        height: 200px;
        object-fit: cover;
        object-position: center;
        transition: all 0.3s;
    }

    .card-body:hover .thumbnail-cat img {
        transform: scale(1.2);
    }
</style>



<?php $__env->startSection('title', 'Cat Shelter'); ?>

<?php $__env->startSection('banner'); ?>
    <div class="bg-secondary py-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                    <h2 class=" text-white">Find Your Dream Cat</h2>
                </div>
            </div>
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

<?php $__env->startSection('content'); ?>
    <div class="container pb-5 mb-3">
        <div class="row">
            <div class="col">
                <h4>List of Cat</h4>
            </div>
        </div>
        <div class="row row-cols-3 align-items-stretch g-3">
            <?php for($i = 1; $i <= 6; $i++): ?>
                <div class="col">
                    <div class="card border-0 shadow h-100">
                        <div class="status-cat position-absolute" style="z-index: 5; right:10px; top:10px;">
                            <?php if($i % 2 == 0): ?>
                                <div class="badge bg-info fw-light px-3">
                                    <i class="bi bi-cart-check-fill me-1"></i> Unadopted
                                </div>
                            <?php else: ?>
                                <div class="badge bg-success fw-light px-3">
                                    <i class="bi bi-shield-lock me-1"></i> Adopted
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body position-relative overflow-hidden">
                            <div class="thumbnail-cat">
                                <img src="https://cataas.com/cat?type=<?php echo e($i); ?>" alt="thumbnail" class="w-100"
                                    loading="lazy">
                            </div>
                            <div class="desc-cat mt-3 mb-5">
                                <h5>Cat Name</h5>
                                <h6>Type | Weight</h6>
                                <ul class="text-muted" style="margin-left:-10px;">
                                    <li>Age: 9 Month</li>
                                    <li>Weight: 2kg</li>
                                </ul>
                                <p class="pb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                            </div>
                            <div class="desc-detail position-absolute" style="bottom: 18px">
                                <button class="btn btn-sm button-primary rounded-pill px-3" data-bs-toggle="modal"
                                    data-bs-target="#catDetail">More Detail <i class="bi bi-info-circle ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <nav aria-label="Page navigation example" class="mt-3">
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


        
        <div class="modal fade" id="catDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="p-2 position-relative overflow-hidden">
                        <div class="position-absolute" style="right: 0; top:0; z-index:10">
                            <button type="button" class="btn bg-white text-danger" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i class="bi bi-x-circle"></i>
                            </button>
                        </div>
                        <section class="splide" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php for($i = 1; $i <= 3; $i++): ?>
                                        <li class="splide__slide">
                                            <div class="thumbnail-cat">
                                                <img src="https://cataas.com/cat?type=<?php echo e($i); ?>"
                                                    alt="cat detail" class="w-100">
                                            </div>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="modal-body">
                        <h5>Cat Name</h5>
                        <h6>Type | Weight</h6>
                        <ul class="text-muted" style="margin-left:-10px;">
                            <li>Age: 9 Month</li>
                            <li>Weight: 2kg</li>
                        </ul>
                        <p class="pb-0">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere dignissimos nam
                            provident ea deserunt minima asperiores itaque temporibus facilis soluta perferendis voluptatum
                            laborum corrupti excepturi quae consectetur, velit quis tempora.
                        </p>
                        <div class="text-center pt-3">
                            <a href="/screening/1" class="btn btn-sm button-primary px-3 rounded-pill"> <i
                                    class="bi bi-cart-plus me-1"></i>
                                Adopt Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        new Splide('.splide', {
            type: 'fade'
        }).mount();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/home/cats.blade.php ENDPATH**/ ?>