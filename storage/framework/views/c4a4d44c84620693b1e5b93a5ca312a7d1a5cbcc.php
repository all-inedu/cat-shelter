<style>
    .forgot {
        height: 100vh;
    }

    .forgot-bg {
        width: 100%;
        height: 100vh;
        object-fit: fill;
    }

    @media  screen and (max-width: 600px) {
        .forgot-bg {
            width: 100%;
            height: auto;
            object-fit: fill;
        }
    }
</style>


<?php $__env->startSection('template'); ?>
    <div class="container-fluid login">
        <div class="row align-items-center">
            <div class="col-md-6 p-0 mb-md-0 mb-3">
                <img src="<?php echo e(asset('img/bg-login.png')); ?>" alt="Login" class="login-bg w-100">
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Forgot Password</h3>
                <p class="text-center">Please enter your email to reset your password</p>
                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user">Email</label>
                                <input type="email" name="" id="user" class="form-control"
                                    autocomplete="false" readonly onfocus="this.removeAttribute('readonly');">
                            </div>
                            <button class="btn btn-secondary mt-3 w-100" type="submit"><i
                                    class="bi bi-box-arrow-in-right me-1"></i>
                                Reset Password</button>
                            <div class="mt-5 text-center text-muted">
                                I've remembered my password,
                                <a href="/login" class="text-decoration-none fw-bold text-muted">
                                    Login now!
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/home/auth/forgot.blade.php ENDPATH**/ ?>