<style>
    .nav li {
        margin: 5px 0;
    }

    .nav-item {
        background: rgb(44, 125, 160);
        background: linear-gradient(90deg, rgba(44, 125, 160, 1) 0%, rgba(184, 222, 239, 1) 100%);
        display: block;
        width: 100%;
        border-radius: 10px;
        transition: all 0.3s;
    }


    .nav-link,
    .nav-link span {
        display: block;
        width: 100%;
        margin-left: 20px;
        color: rgb(58, 58, 58) !important;
    }

    .nav-item .nav-link,
    .nav-item .nav-link span,
    .nav-item:hover .nav-link,
    .nav-item:hover .nav-link span {
        color: #fff !important;
    }

    .nav-link:hover,
    .nav-link span:hover {
        color: rgb(44, 125, 160) !important;
    }

    .border-title {
        width: 5px;
        height: auto;
        background: rgb(44, 125, 160);
        background: linear-gradient(184deg, rgba(44, 125, 160, 1) 0%, rgba(255, 255, 255, 1) 100%);
        border-radius: 5px;
        margin-right: 10px;
    }
</style>



<?php $__env->startSection('template'); ?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 ps-sm-2 px-0">
                <div
                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 shadow-sm sticky-md-top">
                    <a href="<?php echo e(url('admin/dashboard')); ?>"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto px-md-5 px-0 text-white text-decoration-none w-100">
                        <img src="<?php echo e(asset('img/logo.png')); ?>" alt="cat shelter" class="w-100 px-md-3 px-0">
                    </a>
                    
                    <h6 class="cat-text-primary mt-2">Menu</h6>
                    <ul class="nav nav-pills flex-column  mb-0 align-items-center align-items-sm-start w-100"
                        id="menu">
                        <li class="<?php echo e(request()->is('admin/dashboard') ? 'nav-item' : ''); ?>">
                            <a href="<?php echo e(url('admin/dashboard')); ?>" class="nav-link align-middle px-0">
                                <i class="fs-5 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="<?php echo e(request()->is('admin/blog*') ? 'nav-item' : ''); ?>">
                            <a href="<?php echo e(url('admin/blog')); ?>" class="nav-link px-0 align-middle">
                                <i class="fs-5 bi-sticky"></i> <span class="ms-1 d-none d-sm-inline">Blog Post</span>
                            </a>
                        </li>
                        <li class="<?php echo e(request()->is('admin/cat*') ? 'nav-item' : ''); ?>">
                            <a href="<?php echo e(url('admin/cat')); ?>" class="nav-link px-0 align-middle">
                                <i class="fs-5 bi-card-list"></i> <span class="ms-1 d-none d-sm-inline">Cat List</span></a>
                        </li>
                        <li class="<?php echo e(request()->is('admin/shelter*') ? 'nav-item' : ''); ?>">
                            <a href="<?php echo e(url('admin/shelter')); ?>" class="nav-link px-0 align-middle ">
                                <i class="fs-5 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Shelter
                                    List</span>
                            </a>
                        </li>
                        <li class="<?php echo e(request()->is('admin/adopter*') ? 'nav-item' : ''); ?>">
                            <a href="<?php echo e(url('admin/adopter')); ?>" class="nav-link px-0 align-middle">
                                <i class="fs-5 bi-person-bounding-box"></i> <span class="ms-1 d-none d-sm-inline">Adopter
                                    List</span>
                            </a>
                            
                        </li>
                    </ul>
                    <hr>
                    <h6 class="cat-text-primary">System</h6>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100"
                        id="menu">
                        <li class="<?php echo e(request()->is('admin/logout') ? 'nav-item' : ''); ?>">
                            <a href="#" class="nav-link align-middle px-0">
                                <form action="<?php echo e(url('admin/logout')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="border-0 bg-transparent text-muted">
                                        <i class="fs-5 bi-box-arrow-right"></i> <span
                                            class="ms-1 d-none d-sm-inline">Logout</span>
                                    </button>
                                </form>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none">
                            <span class="d-none d-sm-inline mx-1">
                                © 2022 . All Rights Reserved
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="bg-white shadow-sm p-3">
                    <div class="d-flex align-items-center">
                        <div class="admin-img me-2">
                            <i class="fs-1 bi-person-circle"></i>
                        </div>
                        <div class="admin-profile">
                            <p class="m-0 p-0"> Cat Shelter</p>
                            <small>Administrator</small>
                        </div>
                    </div>
                </div>
                <div class="p-3" style="background: #f2f2f281; min-height:90vh;">

                    
                    <div class="my-1">
                        <div class="bg-white p-2 rounded">
                            <div class="d-flex">
                                <div class="border-title"></div>
                                <p class="p-0 m-0 fw-bold">
                                    <?php echo $__env->yieldContent('page-title'); ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-0 pt-2">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/template/admin/main.blade.php ENDPATH**/ ?>