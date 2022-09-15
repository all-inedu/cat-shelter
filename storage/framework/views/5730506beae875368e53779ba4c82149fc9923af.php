<style>
    .reset {
        height: 100vh;
    }

    .reset-bg {
        width: 100%;
        height: 100vh;
        object-fit: fill;
    }

    @media  screen and (max-width: 600px) {
        .reset-bg {
            width: 100%;
            height: auto;
            object-fit: fill;
        }
    }
</style>


<?php $__env->startSection('template'); ?>
    <div id="app">
        <div class="container-fluid reset">
            <div class="row align-items-center">
                <div class="col-md-6 p-0 mb-md-0 mb-3">
                    <img src="<?php echo e(asset('img/bg-login.png')); ?>" alt="Login" class="reset-bg w-100">
                </div>
                <div class="col-md-6">
                    <h3 class="text-center">Reset Password</h3>
                    <form action="" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label for="user">Email</label>
                                    <input type="email" name="" id="user" class="form-control"
                                        autocomplete="false" readonly onfocus="this.removeAttribute('readonly');">
                                </div>
                                <div class="mb-2">
                                    <label for="pass">Password</label>
                                    <div class="position-relative overflow-hidden">
                                        <div class="position-absolute pointer" style="right:10px; top:10px; z-index:999"
                                            onclick="vPassword('pass')">
                                            <i class="bi bi-eye-slash" id="passIcon"></i>
                                        </div>
                                        <input type="password" name="" id="pass" class="form-control"
                                            autocomplete="false">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="pass">Password Confirmation</label>
                                    <div class="position-relative overflow-hidden">
                                        <div class="position-absolute pointer" style="right:10px; top:10px; z-index:999"
                                            onclick="vPassword('pass_confirm')">
                                            <i class="bi bi-eye-slash" id="pass_confirmIcon"></i>
                                        </div>
                                        <input type="password" name="" id="pass_confirm" class="form-control"
                                            autocomplete="false">
                                    </div>
                                </div>
                                <button class="btn btn-secondary mt-3 w-100" type="submit"><i
                                        class="bi bi-box-arrow-in-right me-1"></i>
                                    Reset Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function phoneNumber() {
            $('#phone').val('+628')
        }

        function vPassword($id) {
            var x = document.getElementById($id);
            if (x.type === "password") {
                x.type = "text";
                $('#' + $id + 'Icon').removeClass('bi bi-eye-slash')
                $('#' + $id + 'Icon').addClass('bi bi-eye')
            } else {
                x.type = "password";
                $('#' + $id + 'Icon').removeClass('bi bi-eye')
                $('#' + $id + 'Icon').addClass('bi bi-eye-slash')
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dl6\OneDrive\Documents\Project\cat-shelter\resources\views/home/auth/reset.blade.php ENDPATH**/ ?>