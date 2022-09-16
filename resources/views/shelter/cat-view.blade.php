<style>
    .thumbnail {
        height: 40vh;
        border-radius: 10px !important;
        position: relative;
        overflow: hidden;
    }

    .thumbnail img {
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
        overflow: auto
    }
</style>
@extends('template.shelter.main')

@section('title', 'Cats - Shelter Dashboard')

@section('page-title')
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="fw-bold text-muted">
            Cat Detail
        </div>
        <a href="{{ url('shelter/cat') }}" class="btn button-primary">
            <i class="bi bi-arrow-left me-1"></i>
            Back
        </a>
    </div>
@endsection

@section('content')
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            <div class="row">
                <div class="col-6">
                    <h3>Cat Name</h3>
                    <hr class="hr-cat">
                </div>
                <div class="col-6 text-end">
                    <a href="{{ url('shelter/cat/3/edit') }}" class="btn btn-secondary"><i
                            class="bi bi-pencil-square me-1"></i>Edit</a>
                    <button data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger"><i
                            class="bi bi-trash2 me-1"></i>Delete</button>
                </div>
                <div class="col-md-6 mt-3">
                    <ul class="text-muted" style="margin-left: -12px">
                        <li>Type: Orange Cat</li>
                        <li>Age: 9 Month</li>
                        <li>Weight: 3 Kg</li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, ad quam! Laborum sint placeat, unde
                        laudantium tempora mollitia, quo exercitationem quam nobis quidem voluptates quas eos dolor dolore
                        deleniti deserunt! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquam iusto
                        perferendis assumenda! Voluptas modi dolore, tempore minima iure nam impedit, quia fugiat ea sint
                        repellat maxime perspiciatis quos suscipit?
                    </p>
                </div>
                <div class="col-md-6">
                    <section id="cat-thumbnail" class="splide">
                        <div class="splide__track pb-3">
                            <ul class="splide__list">
                                @for ($i = 1; $i < 4; $i++)
                                    <li class="splide__slide">
                                        <div class="thumbnail shadow-sm">
                                            <img src="https://cataas.com/cat?type={{ $i }}" alt="thumbnail"
                                                class="w-100">
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


    {{-- Adoption Request --}}
    <div class="row mt-2">
        <div class="col-12 bg-white p-3">
            <h5>List of People Who Want to Adopt a Cat</h5>
            <hr class="hr-cat mb-3">
            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="cat-bg-primary">
                        <tr>
                            <th nowrap>No</th>
                            <th nowrap>Adopter Name</th>
                            <th nowrap>Email</th>
                            <th nowrap>Phone Number</th>
                            <th nowrap>Address</th>
                            <th nowrap>Adoption Request Date</th>
                            <th nowrap>Status</th>
                            <th nowrap class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-muted">
                        <tr class="align-middle">
                            <td>1</td>
                            <td nowrap>Username</td>
                            <td>user@gmail.com</td>
                            <td>
                                62817242423
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            </td>
                            <td>
                                25 August 2022
                            </td>
                            <td nowrap>
                                <div class="badge bg-success">
                                    <i class="bi bi-check me-1"></i> Adopter
                                </div>
                            </td>
                            <td nowrap>
                                <button class="btn button-primary" data-bs-toggle="modal" data-bs-target="#result">
                                    <i class="bi bi-info me-1"></i>
                                    Detail
                                </button>
                            </td>
                        </tr>
                        @for ($i = 1; $i < 8; $i++)
                            <tr class="align-middle">
                                <td>{{ $i }}</td>
                                <td nowrap>Username</td>
                                <td>user@gmail.com</td>
                                <td>
                                    62817242423
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </td>
                                <td>
                                    25 August 2022
                                </td>
                                <td>-</td>
                                <td nowrap>
                                    <button class="btn button-primary" data-bs-toggle="modal" data-bs-target="#result">
                                        <i class="bi bi-info me-1"></i>
                                        Detail
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

    {{-- Delete Cat --}}
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"id="delete" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="" method="delete">
                        <h5>
                            Are you sure <br>
                            you want delete this?
                        </h5>
                        <div class="d-flex justify-content-center">
                            <hr class="hr-cat mt-1 mb-3 w-50">
                        </div>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>
                            Close
                        </button>
                        <button type="submit" class="btn button-primary">
                            <i class="bi bi-trash2 me-1"></i>
                            Yes, Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Screening Result --}}
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"id="result" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form action="" method="post">
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

                        <div class="action-btn">
                            <a href="https://wa.me/62819242323" target="_blank" type="button" class="btn btn-success">
                                <i class="bi bi-whatsapp me-1"></i>
                                Contact First
                            </a>
                            <button type="button" class="btn button-primary" data-bs-toggle="modal"
                                data-bs-target="#approve">
                                <i class="bi bi-save me-1"></i>
                                Approve
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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
    <script>
        new Splide('#cat-thumbnail', {
            type: 'loop',
            gap: 30,
        }).mount();
    </script>
@endsection
