<style>
    .blog-banner {
        background: url('https://cdn.wallpapersafari.com/69/55/GNaTK4.jpg');
        background-position: bottom;
        background-size: cover;
    }

    .thumbnail-blog {
        height: 200px;
        overflow: hidden;
        border-radius: 10px;
    }

    .thumbnail-blog img {
        height: 200px;
        object-fit: cover;
        object-position: center;
        transition: all 0.3s;
    }
</style>

@extends('template.home.main')

@section('title', 'Cat Shelter')

@section('banner')
    <div class="blog-banner">
        <div class="container py-5">
            <h2 class="text-white">Blogs</h2>
            <h5 class="fw-light text-white pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nihil
                assumenda
                eveniet est
                consectetur, enim
                velit nostrum natus distinctio esse minus fuga quis suscipit excepturi magni labore reprehenderit iure
                earum!</h5>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="d-flex align-items-center">
                    <input type="text" name="" placeholder="Search" class="form-control me-2">
                    <button class="btn button-primary py-2 pe-2" style="width:5%"><i
                            class="bi bi-search"></i>&nbsp;</button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-9">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="row g-3 align-items-center">
                        <div class="col-md-8 order-md-1 order-2">
                            <div class="blog-category fw-light text-muted">
                                <div class="badge bg-secondary fw-light">Category</div>
                                <i class="bi bi-calendar me-1"></i> 24 July 2022
                            </div>
                            <div class="cat-desc mt-2">
                                <h5>Lorem ipsum dolor sit amet consectetur</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dolor sunt laborum
                                    explicabo sapiente, repellendus, sint esse eligendi eaque odio tenetur dolores dolorum
                                    porro
                                    suscipit et, neque vitae officia laudantium! Lorem ipsum, ...</p>
                            </div>
                            <a href="/blogs/{{ $i }}" class="btn btn-sm button-primary rounded-pill px-3">
                                More Detail <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                        <div class="col-md-4 order-md-2 order-1">
                            <div class="thumbnail-blog">
                                <img src="https://cataas.com/cat?type={{ $i }}" alt="blogs" class="w-100">
                            </div>
                        </div>
                    </div>
                    <hr>
                @endfor

                <nav aria-label="Page navigation example" class="mt-3">
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
    </div>


@endsection
