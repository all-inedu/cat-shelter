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

@section('title', 'Adopters - Shelter Dashboard')

@section('page-title', 'Adopter List')

@section('content')
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            {{-- Search --}}
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

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="cat-bg-primary text-center">
                        <tr>
                            <th nowrap>No</th>
                            <th nowrap>Adopter Name</th>
                            <th nowrap>Phone Number</th>
                            <th nowrap>Email</th>
                            <th nowrap>Cat Name</th>
                            <th nowrap>Thumbnail</th>
                            <th nowrap class="text-end">Adopted Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-muted text-center">
                        @for ($i = 1; $i < 8; $i++)
                            <tr class="align-middle">
                                <td>{{ $i }}</td>
                                <td nowrap>Adopter Name</td>
                                <td>62812421421</td>
                                <td>admin@gmail.com</td>
                                <td>Cat Name 1</td>
                                <td nowrap>
                                    <div class="d-flex justify-content-center w-100">
                                        <div class="thumbnail-cat">
                                            <img src="https://cataas.com/cat?type={{ $i }}" class="w-100"
                                                loading="lazy">
                                        </div>
                                    </div>
                                </td>
                                <td nowrap class="text-end">
                                    24 July 2022
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
@endsection
