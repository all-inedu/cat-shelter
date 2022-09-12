<style>
    .thumbnail {
        width: 120px;
        height: 80px;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        background: #dedede;
    }

    .thumbnail img {
        object-fit: cover;
        object-position: center;
    }
</style>
@extends('template.admin.main')

@section('title', 'Blogs - Admin Dashboard')

@section('page-title')
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="fw-bold text-muted">
            Blog Post
        </div>
        <a href="{{ url('admin/blog/new') }}" class="btn cat-bg-primary">
            <i class="bi bi-plus me-1"></i>
            Create
        </a>
    </div>
@endsection

@section('content')
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            {{-- Search --}}
            <form action="">
                @csrf
                <div class="d-flex align-items-center justify-content-between w-100">
                    <input type="text" name="" placeholder="Search" class="form-control">
                    <div class="search text-end" style="width: 4%">
                        <button class="btn cat-bg-primary ps-3 pe-2" type="submit">
                            <i class="bi bi-search"></i>&nbsp;
                        </button>
                    </div>
                </div>
            </form>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="cat-bg-primary">
                        <tr>
                            <th nowrap>No</th>
                            <th nowrap>Title</th>
                            <th nowrap>Category Name</th>
                            <th nowrap>Description</th>
                            <th nowrap>Thumbnail</th>
                            <th nowrap class="text-end">Published Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-muted">
                        @for ($i = 1; $i < 8; $i++)
                            <tr class="align-middle">
                                <td>{{ $i }}</td>
                                <td nowrap>Title Name</td>
                                <td>Category</td>
                                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam eligendi earum
                                    voluptatibus est porro adipisci, voluptates natus blanditiis quaerat at veritatis
                                    dolorem, molestias quae? Nostrum sequi a repellendus veniam magni?</td>
                                <td class="text-center">
                                    <div class="thumbnail">
                                        <img src="https://cataas.com/cat?type={{ $i * 12 }}" class="w-100">
                                    </div>
                                </td>
                                <td class="text-end">24 July 2022</td>
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
