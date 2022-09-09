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

                <!-- Session Status -->
                <x-auth-session-status class="mb-4 alert alert-success" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

                <h3 class="text-center"><b>Login as Shelter</b></h3>
                <form action="{{ route('login') }}" class="mt-5" method="post">
                    @csrf
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="user">Email</label>
                                <input type="email" name="email" id="user" class="form-control"
                                    autocomplete="false" readonly onfocus="this.removeAttribute('readonly');">
                            </div>
                            <div class="mb-3">
                                <label for="pass">Password</label>
                                <input type="password" name="password" id="pass" class="form-control"
                                    autocomplete="false">
                            </div>
                            @if (Route::has('password.request'))
                            <div class="text-end">
                                <a href="{{ route('password.request', ['access' => 'shelter']) }}" class="text-muted text-decoration-none">Forgot Password?</a>
                            </div>
                            @endif
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
@endsection
