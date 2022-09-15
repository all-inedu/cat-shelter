<style>
    .thumbnail-cat {
        width: 100%;
        height: 150px;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        background: #dedede;
    }

    .thumbnail-cat img {
        height: 100%;
        border-radius: 10px;
        object-fit: cover;
        transition: all .3s;
    }

    .card {
        border: 2px solid #dedede4a !important;
    }

    .card-cat:hover .thumbnail-cat img {
        transform: scale(1.1)
    }

    .card-cat {
        border-radius: 15px !important;
    }

    .card-blog {
        position: relative;
        overflow: hidden;
        border-radius: 15px 15px !important;
        cursor: pointer;
    }

    .card-blog img {
        height: 200px;
        object-fit: cover;
        background: #dedede;
    }
</style>


<?php $__env->startSection('title', 'Cat Shelter'); ?>

<?php $__env->startSection('banner'); ?>
    <img src="https://picsum.photos/800" alt="banner">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="container pt-4">
        <div class="row row-cols-1">
            
            <div class="col">
                <h4>The Most Popular Cats</h4>
                <hr class="w-25 mt-1 mb-3">
                <div class="splide" id="popular">
                    <div class="splide__track">
                        <ul class="splide__list my-0">
                            <?php for($i = 0; $i < 10; $i++): ?>
                                <li class="splide__slide">
                                    <div class="card shadow-sm card-cat">
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="thumbnail-cat">
                                                        <img src="https://cataas.com/cat?type=<?php echo e($i); ?>"
                                                            alt="thumbnail" class="w-100" loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="col-8 position-relative">
                                                    <h6 class="text-muted py-0 my-0">Jenis</h6>
                                                    <h5 class="mb-0 pb-0">Lorem ipsum dolor sit</h5>
                                                    <div class="mb-3">
                                                        <span class="badge text-bg-light shadow-sm fw-light">3 Month</span>
                                                        <span class="badge text-bg-light shadow-sm fw-light">1 Kg</span>
                                                    </div>
                                                    <div class="position-absolute" style="bottom:0;">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#catDetail"
                                                            class="btn button-primary btn-sm shadow-sm">
                                                            Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>

            
            <div class="col mt-5">
                <h4>Recent of Cat Adopted</h4>
                <hr class="w-25 mt-1 mb-3">
                <div class="splide" id="adopted">
                    <div class="splide__track">
                        <ul class="splide__list my-0">
                            <?php for($i = 11; $i < 20; $i++): ?>
                                <li class="splide__slide">
                                    <div class="card shadow-sm card-cat">
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="thumbnail-cat">
                                                        <img src="https://cataas.com/cat?type=<?php echo e($i); ?>"
                                                            alt="thumbnail" class="w-100" loading="lazy">
                                                    </div>
                                                </div>
                                                <div class="col-8 position-relative">
                                                    <h6 class="text-muted py-0 my-0">Jenis</h6>
                                                    <h5 class="mb-0 pb-0">Lorem ipsum dolor sit</h5>
                                                    <p class="my-0">Adopter : Haxxxxx</p>
                                                    <div class="mb-3">
                                                        <span class="badge text-bg-light shadow-sm fw-light">3 Month</span>
                                                        <span class="badge text-bg-light shadow-sm fw-light">1 Kg</span>
                                                    </div>
                                                    <div class="position-absolute" style="bottom:0;">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#catDetail"
                                                            class="btn button-primary btn-sm shadow-sm">
                                                            Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col mt-5 text-center">
                <a href="/cats" class="btn button-primary">More <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>

    
    <div class="container mt-5 pt-3">
        <div class="row row-cols-1">
            <div class="col text-center">
                <h4>
                    Recent of Blogs
                </h4>
                <div class="w-100 d-flex justify-content-center">
                    <hr class="w-25 mt-1 mb-3 text-center">
                </div>

                <div class="row row-cols-md-2 row-cols-1 align-items-stretch g-3 justify-content-center">
                    <?php for($i = 1; $i < 5; $i++): ?>
                        <div class="col">
                            <div class="card card-blog h-100 shadow-sm">
                                <img src="https://cataas.com/cat?type=<?php echo e($i); ?>" alt="blogs" class="w-100"
                                    loading="lazy">
                                <div class="card-body text-start">
                                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                                    <div class="d-flex align-items-center">
                                        <span class="badge text-bg-secondary shadow-sm m-0">
                                            Category
                                        </span>
                                        <span class="ms-3">
                                            <i class="bi bi-calendar2-plus me-1"></i>
                                            24 July 2022
                                        </span>
                                    </div>
                                    <p class="my-0 mt-3">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eius consequatur
                                        nemo sed minus similique possimus id rem officiis facilis rerum eligendi at in quae,
                                        corporis dolorum perspiciatis perferendis asperiores...
                                    </p>
                                    <a href="/blogs/<?php echo e($i); ?>" class="btn btn-sm button-primary mt-3">Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col text-center mt-3">
                <a href="/blogs" class="btn button-primary">More <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>

    
    <div class="container my-5 pt-5">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="https://picsum.photos/500/200" alt="about-us" class="w-100">
            </div>
            <div class="col-md-7">
                <h4 class="pb-3">About Us</h4>
                <h5>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint quasi, cum beatae veritatis enim eum
                    explicabo ex libero.
                </h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum voluptas ab qui necessitatibus enim illo
                    itaque odit, incidunt exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quis
                    et alias maxime vero ullam quaerat dolor illo ut! Recusandae culpa temporibus, dolore eos illo quidem
                    nemo architecto fugit eius? </p>
            </div>
        </div>
    </div>

    
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"id="catDetail" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="p-2 position-relative overflow-hidden">
                    <div class="position-absolute" style="right: 0; top:0; z-index:10">
                        <button type="button" class="btn bg-white text-danger" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="bi bi-x-circle"></i>
                        </button>
                    </div>
                    <section class="splide" id="catSplide" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php for($i = 1; $i <= 3; $i++): ?>
                                    <li class="splide__slide">
                                        <div class="thumbnail-cat">
                                            <img src="https://cataas.com/cat?type=<?php echo e($i); ?>" alt="cat detail"
                                                class="w-100">
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

    <script>
        new Splide('#popular', {
            perPage: 2,
            arrows: false,
            pagination: false,
            gap: 20,
            padding: {
                'left': 0,
                'right': '200px'
            },
            breakpoints: {
                640: {
                    perPage: 1,
                    pagination: true,
                    gap: 10,
                    padding: 0,
                },
            },
        }).mount();

        new Splide('#adopted', {
            perPage: 2,
            arrows: false,
            pagination: false,
            gap: 20,
            padding: {
                'left': 0,
                'right': '200px'
            },
            breakpoints: {
                640: {
                    perPage: 1,
                    pagination: true,
                    gap: 10,
                    padding: 0,
                },
            },
        }).mount();

        new Splide('#catSplide', {
            type: 'fade'
        }).mount();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/home/index.blade.php ENDPATH**/ ?>