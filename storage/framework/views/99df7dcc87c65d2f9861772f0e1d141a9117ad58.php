<style>
    .login {
        height: 100vh;
    }

    .login-bg {
        width: 100%;
        height: 100vh;
        object-fit: fill;
    }

    @media  screen and (max-width: 600px) {
        .login-bg {
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
                <div class="position-absolute" style="top:10px;">
                    <a href="/" class="text-decoration-none text-muted"><i class="bi bi-arrow-left me-1"></i> Home</a>
                </div>

                <!-- Session Status -->
                

                <h3 class="text-center"><b>Login as Shelter</b></h3>
                <form action="<?php echo e(route('login')); ?>" class="mt-5" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user">Email</label>
                                <input type="email" name="email" id="user"
                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="false" readonly
                                    onfocus="this.removeAttribute('readonly');">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="pass">Password</label>
                                <input type="password" name="password" id="pass"
                                    class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="false">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <?php if(Route::has('password.request')): ?>
                                <div class="text-end">
                                    <a href="<?php echo e(route('password.request', ['access' => 'shelter'])); ?>"
                                        class="text-muted text-decoration-none">Forgot Password?</a>
                                </div>
                            <?php endif; ?>
                            <button class="btn btn-secondary mt-3 w-100" type="submit"><i
                                    class="bi bi-box-arrow-in-right me-1"></i>
                                Login
                            </button>
                            <div class="mt-5 text-center text-muted">
                                Dont have an account?
                                <a href="/register" class="text-decoration-none fw-bold text-muted">
                                    Sign Up now
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/home/auth/login.blade.php ENDPATH**/ ?>