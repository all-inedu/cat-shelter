<style>
    .thumbnail-pic {
        width: 200px;
        height: 200px;
        border-radius: 50% !important;
        position: relative;
        overflow: hidden;
        background: #dedede;
    }

    .thumbnail-pic img {
        object-fit: 100%;
        object-position: center;
    }

    .user {
        border-left: 5px solid #dedede;
        padding-left: 20px;
    }

    .result {
        position: relative;
        max-height: 50vh;
        overflow: auto;
        border: 2px solid #dedede;
        padding: 5px;
    }

    .thumbnail-cat {
        width: 90px;
        height: 70px;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        background: #dedede;
    }

    .thumbnail-cat img {
        object-fit: cover;
        object-position: center;
    }
</style>
@extends('template.admin.main')

@section('title', 'Blogs - Admin Dashboard')

@section('page-title')
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="fw-bold text-muted">
            Adopter Detail
        </div>
        <a href="{{ url('admin/blog') }}" class="btn button-primary">
            <i class="bi bi-arrow-left me-1"></i>
            Back
        </a>
    </div>
@endsection

@section('content')
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="thumbnail-pic">
                        <img src="https://cataas.com/cat?type=1" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Adopter Name</h3>
                    <hr class="hr-cat">
                    <ul class="mt-3 text-muted" style="margin-left: -12px">
                        <li>Email:shelter@cat.com</li>
                        <li>Phone Number: +62814242323</li>
                        <li>Address: Jalan Jeruk Kembar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{-- Cats --}}
    <div class="row mt-2">
        <div class="col-12 bg-white p-3">
            <h5>List of Cat</h5>
            <hr class="hr-cat mb-3">
            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="cat-bg-primary">
                        <tr>
                            <th nowrap>No</th>
                            <th nowrap>Name</th>
                            <th nowrap>Type</th>
                            <th nowrap>Age</th>
                            <th nowrap>Weight</th>
                            <th nowrap>Thumbnail</th>
                            <th nowrap>Status</th>
                            <th nowrap>Request Date</th>
                            <th nowrap class="text-end">Screening</th>
                        </tr>
                    </thead>
                    <tbody class="text-muted">
                        @for ($i = 1; $i < 8; $i++)
                            <tr class="align-middle">
                                <td>{{ $i }}</td>
                                <td nowrap>Title Name</td>
                                <td>Category</td>
                                <td>6 Month</td>
                                <td>
                                    4 Kg
                                </td>
                                <td class="text-center">
                                    <div class="thumbnail-cat">
                                        <img src="https://cataas.com/cat?type={{ $i }}" class="w-100"
                                            loading="lazy">
                                    </div>
                                </td>
                                <td>Pending</td>
                                <td>24 August 2022</td>
                                <td nowrap class="text-end">
                                    <button class="btn button-primary" data-bs-toggle="modal" data-bs-target="#result">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Result
                                    </button>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example" class="mt-1">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link ps-2" href="#" aria-label="Previous">
                            <span aria-hidden="true">&nbsp;<i class="bi bi-arrow-left"></i></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link ps-2" href="#" aria-label="Next">
                            <span aria-hidden="true">&nbsp;<i class="bi bi-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    {{-- Screening Result --}}
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"id="result" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>Screening Result</h5>
                    <hr class="hr-cat mb-3">
                    <div class="user d-flex align-items-center">
                        <div class="icon me-2">
                            <i class="bi bi-person-circle fs-1"></i>
                        </div>
                        <div class="username">
                            <strong class="text-muted">Username</strong> <br>
                            <small>25 August 2022</small>
                        </div>
                    </div>
                    <div class="result mt-4">
                        @for ($i = 1; $i <= 10; $i++)
                            <div class="list">
                                <p class="m-0 p-0 mb-2">
                                    <strong>
                                        Lorem ipsum dolor sit amet consectetur?
                                    </strong>
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, nesciunt. In
                                    facere
                                    iure
                                    debitis, fuga totam saepe porro neque vitae, repudiandae facilis asperiores natus
                                    inventore
                                    sint eveniet repellendus quod voluptas.
                                </p>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
