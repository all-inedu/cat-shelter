<style>
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
@extends('template.shelter.main')

@section('title', 'Cats - Shelter Dashboard')

@section('page-title')
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="fw-bold text-muted">
            Cat List
        </div>
        <a href="{{ url('shelter/cat/new') }}" class="btn button-primary">
            <i class="bi bi-plus me-1"></i>
            Add
        </a>
    </div>
@endsection

@section('content')
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            {{-- Search --}}
            <form action="">
                @csrf
                <div class="row g-3 align-items-cente">
                    <div class="col-md-11">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select id="age" class="form-control w-100" name="state">
                                    <option></option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }} Month</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="type" class="form-select" name="state">
                                    <option></option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }} Month</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="weight" class="form-select" name="state">
                                    <option></option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ 1 }} Kg</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="status" class="form-select" name="state">
                                    <option></option>
                                    <option value="unadopted">Undadopted</option>
                                    <option value="adopted">Adopted</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn button-primary w-100">
                            <i class="bi bi-search me-1"></i>
                            Filter
                        </button>
                    </div>
                </div>
                <div class="mt-3">
                    <form action="">
                        @csrf
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <input type="text" name="" placeholder="Search" class="form-control">
                            <div class="search text-end" style="width: 4%">
                                <button class="btn button-primary ps-3 pe-2" type="submit">
                                    <i class="bi bi-search"></i>&nbsp;
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </form>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="cat-bg-primary text-center">
                        <tr>
                            <th nowrap>No</th>
                            <th nowrap>Cat Name</th>
                            <th nowrap>Breed</th>
                            <th nowrap>Age</th>
                            <th nowrap>Weight</th>
                            <th nowrap>Thumbnail</th>
                            <th nowrap>Adoption Request</th>
                            <th nowrap>Adoption Status</th>
                            <th nowrap>Status</th>
                            <th nowrap>Published Date</th>
                            <th nowrap class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-muted text-center">
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
                                    <div class="d-flex justify-content-center w-100">
                                        <div class="thumbnail-cat">
                                            <img src="https://cataas.com/cat?type={{ $i }}" class="w-100"
                                                loading="lazy">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="badge bg-info rounded-pill">
                                        <i class="bi bi-person me-1"></i>
                                        10 Persons
                                    </div>
                                </td>
                                <td>
                                    <div class="badge bg-warning rounded-pill">
                                        <i class="bi bi-search-heart me-1"></i>
                                        Unadopted
                                    </div>
                                    <div class="badge bg-success rounded-pill">
                                        <i class="bi bi-check me-1"></i>
                                        Adopted
                                    </div>
                                </td>
                                <td>
                                    <div class="badge bg-danger rounded-pill">
                                        <i class="bi bi-lock me-1"></i>
                                        Close
                                    </div>
                                    <div class="badge bg-primary rounded-pill">
                                        <i class="bi bi-unlock me-1"></i>
                                        Open
                                    </div>
                                </td>
                                <td>24 August 2022</td>
                                <td nowrap class="text-end">
                                    <a href="{{ url('/shelter/cat/' . $i) }}" class="btn button-primary">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Detail
                                    </a>
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

    <script>
        $(document).ready(function() {
            $('#age').select2({
                placeholder: "Select age",
            });
            $('#type').select2({
                placeholder: "Select type",
            });
            $('#weight').select2({
                placeholder: "Select weight",
            });
            $('#status').select2({
                placeholder: "Select status",
            });
        });
    </script>
@endsection
