<style>
    .login {
        height: 100vh;
    }

    .login-bg {
        width: 100%;
        height: 100vh;
        object-fit: fill;
    }

    @media screen and (max-width: 600px) {
        .login-bg {
            width: 100%;
            height: auto;
            object-fit: fill;
        }
    }
</style>
@extends('template.app')

@section('template')
    <div class="container-fluid login">
        <div class="row align-items-center">
            <div class="col-md-6 p-0 mb-md-0 mb-3">
                <img src="{{ asset('img/bg-login.png') }}" alt="Login" class="login-bg w-100">
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Login as Shelter</h3>
                <form action="" method="post">
                    @csrf
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user">Email</label>
                                <input type="email" name="" id="user" class="form-control"
                                    autocomplete="false" readonly onfocus="this.removeAttribute('readonly');">
                            </div>
                            <div class="mb-3">
                                <label for="pass">Password</label>
                                <input type="password" name="" id="pass" class="form-control"
                                    autocomplete="false">
                            </div>
                            <div class="text-end">
                                <a href="/forgot" class="text-muted text-decoration-none">Forgot Password?</a>
                            </div>
                            <button class="btn btn-secondary mt-3 w-100" type="submit"><i
                                    class="bi bi-box-arrow-in-right me-1"></i>
                                Login</button>
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
@endsection
