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
    <div id="app">
        <div class="container-fluid register">
            <div class="row align-items-center">
                <div class="col-md-6 p-0 mb-md-0 mb-3">
                    <img src="{{ asset('img/bg-login.png') }}" alt="Login" class="register-bg w-100">
                </div>
                <div class="col-md-6">
                    
                    <h3 class="text-center">Sign up as Shelter</h3>

                    
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
                    <form action="" method="post">
                        @csrf
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Full Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        autocomplete="false" value="{{ old('name') }}" readonly onfocus="this.removeAttribute('readonly');">
                                </div>
                                <div class="mb-3">
                                    <label for="user">Email</label>
                                    <input type="email" name="email" id="user" class="form-control"
                                        autocomplete="false" value="{{ old('email') }}" readonly onfocus="this.removeAttribute('readonly');">
                                </div>
                                <div class="mb-3">
                                    <label for="user">Phone Number</label>
                                    <input type="tel" name="phone" id="phone" class="form-control"
                                        placeholder="+6281xxxxxx" value="{{ old('phone') }}" onfocus="phoneNumber()" onblur="phoneNumberOut()">
                                </div>
                                <div class="mb-3">
                                    <label for="pass">Password</label>
                                    <div class="position-relative overflow-hidden">
                                        <div class="position-absolute pointer" style="right:10px; top:10px; z-index:999"
                                            onclick="vPassword('pass')">
                                            <i class="bi bi-eye-slash" id="passIcon"></i>
                                        </div>
                                        <input type="password" name="password" id="pass" class="form-control"
                                            autocomplete="false">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pass">Password Confirmation</label>
                                    <div class="position-relative overflow-hidden">
                                        <div class="position-absolute pointer" style="right:10px; top:10px; z-index:999"
                                            onclick="vPassword('pass_confirm')">
                                            <i class="bi bi-eye-slash" id="pass_confirmIcon"></i>
                                        </div>
                                        <input type="password" name="password_confirmation" id="pass_confirm" class="form-control"
                                            autocomplete="false">
                                    </div>
                                </div>
                                <button class="btn btn-secondary mt-3 w-100" type="submit"><i
                                        class="bi bi-box-arrow-in-right me-1"></i>
                                    Sign Up Now</button>
                                <div class="mt-5 text-center text-muted">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="text-decoration-none fw-bold text-muted">
                                        Login here
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function phoneNumber() {
            var phone = $("#phone").val();
            if (phone == "")
                $("#phone").val('+628');
        }

        function phoneNumberOut() {
            var phone = $("#phone").val();
            if (phone == "+628") 
                $("#phone").val('');
            
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
@endsection
