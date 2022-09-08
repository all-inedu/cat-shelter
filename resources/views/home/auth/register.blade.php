<style>
    .register {
        height: 100vh;
    }

    .register-bg {
        width: 100%;
        height: 100vh;
        object-fit: fill;
    }

    @media screen and (max-width: 600px) {
        .register-bg {
            width: 100%;
            height: auto;
            object-fit: fill;
        }
    }
</style>
@extends('template.app')

@section('template')
    <div class="container-fluid register">
        <div class="row align-items-center">
            <div class="col-md-6 p-0 mb-md-0 mb-3">
                <img src="{{ asset('img/bg-login.png') }}" alt="Login" class="register-bg w-100">
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Sign up as Shelter</h3>
                <form action="" method="post">
                    @csrf
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <label for="name">Full Name</label>
                                <input type="text" name="" id="name" class="form-control"
                                    autocomplete="false" readonly onfocus="this.removeAttribute('readonly');">
                            </div>
                            <div class="mb-2">
                                <label for="user">Email</label>
                                <input type="email" name="" id="user" class="form-control"
                                    autocomplete="false" readonly onfocus="this.removeAttribute('readonly');">
                            </div>
                            <div class="mb-2">
                                <label for="user">Phone Number</label>
                                <input type="tel" name="" id="phone" class="form-control"
                                    placeholder="+6281xxxxxx" onfocus="phoneNumber()">
                            </div>
                            <div class="mb-2">
                                <label for="pass">Password</label>
                                <input type="password" name="" id="pass" class="form-control"
                                    autocomplete="false">
                            </div>
                            <div class="mb-2">
                                <label for="pass">Password Confirmation</label>
                                <input type="password" name="" id="pass" class="form-control"
                                    autocomplete="false">
                            </div>
                            <button class="btn btn-secondary mt-3 w-100" type="submit"><i
                                    class="bi bi-box-arrow-in-right me-1"></i>
                                Sign Up Now</button>
                            <div class="mt-5 text-center text-muted">
                                Already have an account?
                                <a href="/login" class="text-decoration-none fw-bold text-muted">
                                    Login here
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function phoneNumber() {
            // let first = $('#phone').val()
            // console.log(first.substring(0, 1))
            // if (first.substring(0, 1) == 0) {
            //     let real = first.substring(2, 12)
            //     $('#phone').val('628' + real)
            // }
            $('#phone').val('+628')

        }
    </script>
@endsection
