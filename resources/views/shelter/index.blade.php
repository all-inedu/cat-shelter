<style>
    .recent-list {
        max-height: 70vh;
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
</style>
@extends('template.shelter.main')

@section('title', 'Shelter Dashboard - Cat Shelter')

@section('page-title', 'Home')

@section('content')
    <div class="row p-0 g-2 align-items-stretch">
        {{-- Total Cats --}}
        <div class="col-md-3">
            <div class="bg-white rounded p-3 shadow-sm">
                <h6>Total of Cats</h6>
                <hr class="hr-cat">
                <div class="row mt-2 g-2 row-cols-1">
                    <div class="col">
                        <div class="card text-center border-0 shadow-sm">
                            <div class="card-header cat-bg-primary">
                                Unadopted Cat
                            </div>
                            <div class="card-body">
                                <h3 class="cat-text-primary">5</h3>
                                <h5 class="cat-text-secondary">Cat</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center border-0 shadow-sm">
                            <div class="card-header cat-bg-primary">
                                Adopted Cat
                            </div>
                            <div class="card-body">
                                <h3 class="cat-text-primary">3</h3>
                                <h5 class="cat-text-secondary">Cat</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="bg-white rounded p-3 shadow-sm">
                <h6>Latest Adoption Request List</h6>
                <hr class="hr-cat mb-3">
                <div class="recent-list position-relative overflow-auto">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="cat-bg-primary text-center">
                                <tr>
                                    <th nowrap>No</th>
                                    <th nowrap>Thumbnail</th>
                                    <th nowrap>Cat Name</th>
                                    <th nowrap>Adopter Name</th>
                                    <th nowrap>Phone Number</th>
                                    <th nowrap>Adoption Request Date</th>
                                    <th nowrap class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-muted text-center">
                                @for ($i = 1; $i < 4; $i++)
                                    <tr class="align-middle">
                                        <td>{{ $i }}</td>
                                        <td class="text-center">
                                            <div class="thumbnail-cat">
                                                <img src="https://cataas.com/cat?type={{ $i }}" class="w-100"
                                                    loading="lazy">
                                            </div>
                                        </td>
                                        <td nowrap>Cat Name</td>
                                        <td>Adopter Name</td>
                                        <td>62823523523</td>
                                        <td>24 August 2022</td>
                                        <td nowrap class="text-end">
                                            <a href="{{ url('/admin/cat/' . $i) }}" class="btn button-primary"
                                                data-bs-toggle="modal" data-bs-target="#result">
                                                <i class="bi bi-info-circle me-1"></i>
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Screening Result --}}
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"id="result" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>Screening Result</h5>
                    <hr class="hr-cat mb-3">
                    <div class="user ">
                        <div class="d-flex align-items-center">
                            <div class="icon me-2">
                                <i class="bi bi-person-circle fs-1"></i>
                            </div>
                            <div class="username ms-2">
                                <strong class="text-muted">Username</strong> <br>
                                <small>25 August 2022</small>
                            </div>
                        </div>
                        <p class="my-2 p-0">
                            <small>Address:</small> <br>
                            Lorem, ipsum dolor sit amet consectetur <br>
                            Lorem ipsum
                        </p>
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

                    <div class="action-btn">
                        <a href="https://wa.me/62819242323" target="_blank" type="button" class="btn btn-success">
                            <i class="bi bi-whatsapp me-1"></i>
                            Contact First
                        </a>
                        <button type="button" class="btn button-primary" data-bs-toggle="modal" data-bs-target="#approve">
                            <i class="bi bi-save me-1"></i>
                            Approve
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Approve --}}
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"id="approve" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4>
                        Are you sure you want this person to adopt your cat?
                    </h4>
                    <div class="d-flex w-100 justify-content-center my-3">
                        <hr class="hr-cat w-50">
                    </div>
                    <div class="">
                        <button class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>
                            No
                        </button>
                        <a class="btn btn-success">
                            <i class="bi bi-check-circle me-1"></i>
                            Yes
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
