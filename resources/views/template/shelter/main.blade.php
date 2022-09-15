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

@extends('template.app')

@section('template')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 ps-sm-2 px-0">
                <div
                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 shadow-sm sticky-md-top">
                    <a href="{{ url('shelter/dashboard') }}"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto px-md-5 px-0 text-white text-decoration-none w-100">
                        <img src="{{ asset('img/logo.png') }}" alt="cat shelter" class="w-100 px-md-3 px-0">
                    </a>
                    {{-- <hr class="bg-dark"> --}}
                    <h6 class="cat-text-primary mt-2">Menu</h6>
                    <ul class="nav nav-pills flex-column  mb-0 align-items-center align-items-sm-start w-100"
                        id="menu">
                        <li class="{{ request()->is('shelter/dashboard') ? 'nav-item' : '' }}">
                            <a href="{{ url('shelter/dashboard') }}" class="nav-link align-middle px-0">
                                <i class="fs-5 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('shelter/cat*') ? 'nav-item' : '' }}">
                            <a href="{{ url('shelter/cat') }}" class="nav-link px-0 align-middle">
                                {{-- <img src="{{ asset('img/cat.svg') }}"> --}}
                                <i class="fs-5 bi-card-list"></i>
                                <span class="ms-1 d-none d-sm-inline">
                                    Cat List
                                </span>
                            </a>
                        </li>
                        <li class="{{ request()->is('shelter/adopter*') ? 'nav-item' : '' }}">
                            <a href="{{ url('shelter/adopter') }}" class="nav-link px-0 align-middle">
                                <i class="fs-5 bi-person-bounding-box"></i> <span class="ms-1 d-none d-sm-inline">Adopter
                                    List</span>
                            </a>
                            {{-- <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span>
                                        1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span>
                                        2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span>
                                        3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span>
                                        4</a>
                                </li>
                            </ul> --}}
                        </li>
                    </ul>
                    <hr>
                    <h6 class="cat-text-primary">System</h6>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100"
                        id="menu">
                        <li class="{{ request()->is('shelter/logout') ? 'nav-item' : '' }}">
                            <a href="#" class="nav-link align-middle px-0">
                                <form action="{{ url('shelter/logout') }}" method="POST">
                                    @csrf
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
                        <div class="shelter-img me-2">
                            <i class="fs-1 bi-person-circle"></i>
                        </div>
                        <div class="shelter-profile">
                            <p class="m-0 p-0">Shelter Name</p>
                            <small>Shelter</small>
                        </div>
                    </div>
                </div>
                <div class="p-3" style="background: #f2f2f281; min-height:90vh;">

                    {{-- Menu Name --}}
                    <div class="my-1">
                        <div class="bg-white p-2 rounded">
                            <div class="d-flex">
                                <div class="border-title"></div>
                                <p class="p-0 m-0 fw-bold">
                                    @yield('page-title')
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-0 pt-2">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
