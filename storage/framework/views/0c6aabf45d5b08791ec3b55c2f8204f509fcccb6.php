<style>
    .navbar-image {
        width: 70px !important;
    }

    .banner {
        position: relative;
        height: 50vh;
        overflow: hidden;
    }

    .banner img {
        width: 100%;
        object-fit: cover;
        object-position: top;
    }
</style>



<?php $__env->startSection('template'); ?>
    <div class="bg-light shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2 p-2">
                    <img src=<?php echo e(asset('img/logo.png')); ?> alt="logo" class="navbar-image">
                </div>
                <div class="col-md-8 col-10 d-flex justify-content-md-center justify-content-end">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Cat Shelter</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item mx-md-3 mx-0">
                                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                                        </li>
                                        <li class="nav-item mx-md-3 mx-0">
                                            <a class="nav-link" href="/cats">Cats</a>
                                        </li>
                                        <li class="nav-item mx-md-3 mx-0">
                                            <a class="nav-link" href="/blogs">Blogs</a>
                                        </li>
                                        <li class="d-md-none d-block mt-3">
                                            <a href="#login" class="btn btn-sm btn-secondary w-100">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-2 text-end d-md-block d-none">
                    <a href="#login" class="btn btn-sm btn-secondary">Login</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 banner">
        <?php echo $__env->yieldContent('banner'); ?>
    </div>

    <div class="container pt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\Documents\Project\cat-shelter\resources\views/template/home/main.blade.php ENDPATH**/ ?>