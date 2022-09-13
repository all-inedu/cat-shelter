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

    .comment-list {
        border-left: 4px solid #dedede;
        padding-left: 15px;
    }
</style>
@extends('template.admin.main')

@section('title', 'Blogs - Admin Dashboard')

@section('page-title')
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="fw-bold text-muted">
            Blog Post
        </div>
        <a href="{{ url('admin/blog') }}" class="btn button-primary">
            <i class="bi bi-arrow-left me-1"></i>
            Back
        </a>
    </div>
@endsection

@section('content')
    <div class="thumbnail shadow-sm mb-2">
        <img src="https://cataas.com/cat?type=1" alt="thumbnail" class="w-100">
    </div>
    <div class="mb-3 text-end">
        <a href="{{ url('/admin/blog/3/edit') }}" class="btn btn-secondary"><i class="bi bi-pencil-square me-1"></i>Edit</a>
        <button data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger"><i
                class="bi bi-trash2 me-1"></i>Delete</button>
    </div>
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            <div class="d-flex align-items-center mb-4">
                <div class="badge bg-secondary me-3">Category Name</div>
                <div class="text-muted">
                    <i class="bi bi-calendar-event"></i> 24 July 2022
                </div>
            </div>

            <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit
                <hr class="hr-cat mb-3">
            </h3>
            <p class="p-0 b-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam beatae tenetur quia unde quaerat voluptatum
                recusandae vitae iste, doloribus esse. Numquam officiis beatae ad in dignissimos aliquam, deleniti quos non.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, repellendus qui vitae cumque tempora
                sequi aliquam quidem dignissimos alias rem dolorem quae eum vel suscipit unde inventore animi distinctio
                ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quae quibusdam explicabo at
                ducimus quis nemo exercitationem mollitia fugit maiores animi quos, itaque doloremque rem veniam. Officiis
                magnam eum repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse eaque similique
                quaerat, et, dolorum vitae soluta corrupti, molestiae rem dolor voluptas necessitatibus consequuntur quasi
                deserunt ab officia doloremque sit beatae! <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, praesentium accusamus voluptatum amet quas
                laudantium commodi, veniam maxime assumenda nostrum quaerat distinctio. Obcaecati, velit fugiat quaerat
                nostrum asperiores nesciunt ea? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit maiores
                tenetur autem optio saepe, nam error, aspernatur obcaecati, laboriosam consequatur porro nobis! Dolores qui
                soluta ad perspiciatis non quidem consectetur? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum quisquam non ullam minus deserunt, in officia sunt sint earum enim maiores temporibus, debitis
                architecto quo ut explicabo vero eum illum. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Deleniti officiis accusamus, numquam iusto animi excepturi ipsam sequi, dicta quod sunt illo rerum vel qui
                maiores autem aliquam sit maxime illum.
            </p>
        </div>
    </div>


    {{-- Comments --}}
    <div class="row mt-2">
        <div class="col-12 bg-white p-3">
            <h5>Comments</h5>
            <hr class="hr-cat mb-3">
            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="cat-bg-primary">
                        <tr>
                            <th nowrap>No</th>
                            <th nowrap>Username</th>
                            <th nowrap>Email</th>
                            <th nowrap>Comment</th>
                            <th nowrap>Comment Date</th>
                            <th nowrap class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-muted">
                        @for ($i = 1; $i < 8; $i++)
                            <tr class="align-middle">
                                <td>{{ $i }}</td>
                                <td nowrap>Username</td>
                                <td>user@gmail.com</td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam eligendi earum
                                    voluptatibus est porro adipisci, voluptates natus blanditiis quaerat at veritatis
                                    dolorem, molestias quae? Nostrum sequi a repellendus veniam magni?
                                </td>
                                <td>24 July 2022</td>
                                <td nowrap>
                                    <button class="btn button-primary" data-bs-toggle="modal" data-bs-target="#reply">
                                        <i class="bi bi-reply me-1"></i>
                                        Reply
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

    {{-- Delete Blog --}}
    <div class="modal fade" id="delete" tabindex="-1">
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

    {{-- Add Comment --}}
    <div class="modal fade" id="reply" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form action="" method="post">
                <div class="modal-content">
                    <div class="modal-body">
                        <h5>Comments</h5>
                        <hr class="hr-cat mb-3">
                        <div class="comment-list">
                            <div class="user d-flex align-items-center">
                                <div class="icon me-2">
                                    <i class="bi bi-person-circle fs-1"></i>
                                </div>
                                <div class="username">
                                    <strong class="text-muted">Username</strong> <br>
                                    <small>25 August 2022</small>
                                </div>
                            </div>
                            <p class="mt-2 mb-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti beatae, illo ducimus quasi
                                aliquid quae aut, voluptatum dolore dolor id non expedita cupiditate officiis esse, ex ipsam
                                adipisci dolores aliquam?
                            </p>
                        </div>

                        <div class="mt-4">
                            <textarea name="" id="" class="form-control" rows="5" placeholder="Reply here .."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>
                            Close
                        </button>
                        <button type="submit" class="btn button-primary">
                            <i class="bi bi-save me-1"></i>
                            Save changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script></script>
@endsection
