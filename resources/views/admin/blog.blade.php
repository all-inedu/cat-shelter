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
        <a href="{{ url('admin/blog/new') }}" class="btn button-primary">
            <i class="bi bi-plus me-1"></i>
            Create
        </a>
    </div>
@endsection

@section('notif')
    <div class="mt-2">
        @if(session()->has('add-blog-successful'))
          <div class="alert alert-success mb-0 fade show" role="alert">
            {{ session()->get('add-blog-successful') }}
          </div>
        @elseif(session()->has('delete-blog-success'))
            <div class="alert alert-success mb-0 fade show" role="alert">
                {{ session()->get('delete-blog-success') }}
            </div>
        @endif
    </div>
@endsection

@section('content')
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            {{-- Search --}}
            <form action="{{ route('admin.blog') }}" method="GET">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <input type="text" name="search_query" placeholder="Search" class="form-control">
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
                    <thead class="cat-bg-primary">
                        <tr>
                            <th nowrap>No</th>
                            <th nowrap>Title</th>
                            <th nowrap>Category Name</th>
                            <th nowrap>Description</th>
                            <th nowrap>Thumbnail</th>
                            <th nowrap>Published Date</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-muted">
                        <?php $no = ($blogs->currentpage()-1)* $blogs->perpage() + 1;?>
                        @foreach ($blogs as $blog)
                            <tr class="align-middle">
                                <td>{{ $no++ }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    @foreach ($blog->category as $category)
                                    <div class="cat-bg-primary m-1 p-1 px-2 rounded">
                                        {{ $category->name }}
                                    </div>
                                    @endforeach
                                </td>
                                <td>{{ $blog->content }}</td>
                                <td class="text-center">
                                    @if ($blog->thumbnail)
                                        <div class="thumbnail">
                                            <img src="{{ asset('blogs/'.$blog->thumbnail) }}" class="w-100 h-100">
                                        </div>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @if ($blog->published_date)
                                        {{ date('M d, Y H:i', strtotime($blog->published_date)) }}
                                    @else
                                        {{ "not published" }}
                                    @endif
                                </td>
                                <td nowrap>
                                    <a href="{{ url('/admin/blog/' . $blog->id) }}" class="btn button-primary">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        @unless (count($blogs)) 
                            <tr>
                                <td colspan="7">No data</td>
                            </tr>
                        @endunless
                    </tbody>
                </table>
            </div>
            {{-- <nav aria-label="Page navigation example" class="mt-1">
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
            </nav> --}}
            {{-- Pagination --}}
            <div class="d-flex justify-content-end">
                {{ $blogs->links() }}
            </div>
        </div>

    </div>
@endsection
