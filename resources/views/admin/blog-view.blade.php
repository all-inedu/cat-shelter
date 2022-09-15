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
        {{-- <img src="https://cataas.com/cat?type=1" alt="thumbnail" class="w-100"> --}}
        <img src="{{ asset('blogs/'.$blog->thumbnail) }}" alt="thumbnail" class="w-100">
    </div>
    <div class="mb-3 text-end">
        <a href="{{ url('/admin/blog/'.$id.'/edit') }}" class="btn btn-secondary"><i class="bi bi-pencil-square me-1"></i>Edit</a>
        <button data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger"><i
                class="bi bi-trash2 me-1"></i>Delete</button>
    </div>
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            <div class="d-flex align-items-center mb-4">
                @foreach ($blog->category as $category)
                    <div class="badge bg-secondary me-3">{{ $category->name }}</div>
                @endforeach
                <div class="text-muted">
                    <i class="bi bi-calendar-event"></i> {{ date('d M Y', strtotime($blog->updated_at)) }}
                </div>
            </div>

            <h3>
                {{ $blog->title }}
                <hr class="hr-cat mb-3">
            </h3>
            <p class="p-0 b-0">
                {{ $blog->content }}
            </p>
        </div>
    </div>

    <!-- Session Status -->
    @if(session()->has('reply-success'))
        <div class="alert alert-success mb-0 fade show" role="alert">
            {{ session()->get('reply-success') }}
        </div>
    @endif

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />

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
                        <?php $no = ($comments->currentpage()-1)* $comments->perpage() + 1;?>
                        @foreach ($comments as $comment)
                            <tr class="align-middle">
                                <td>{{ $no++ }}</td>
                                <td nowrap>{{ $comment->from }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $comment->description }}</td>
                                <td>{{ date('d M Y H:i:s', strtotime($comment->updated_at)) }}</td>
                                <td nowrap>
                                    <button class="btn button-primary btn-reply" data-id="{{ $comment->id }}" data-bs-toggle="modal">
                                        @if (!$comment->replies)
                                        <i class="bi bi-reply me-1"></i>
                                        Reply
                                        @else
                                        View Reply
                                        @endif
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                        @unless (count($comments)) 
                            <tr align="center">
                                <td colspan="7">No comment</td>
                            </tr>
                        @endunless
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                {{ $comments->links() }}
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
        </div>
    </div>

    {{-- Delete Blog --}}
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"id="delete" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <form action="{{ route('admin.blog.delete', ['id' => $blog->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
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
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"id="reply" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form action="{{ route('admin.blog.reply.comment') }}" method="post">
                @csrf
                <input type="hidden" name="add-id" value="">
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
                                    <strong class="text-muted s-username">Username</strong> <br>
                                    <small class="s-date"></small>
                                </div>
                            </div>
                            <p class="mt-2 mb-0 s-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti beatae, illo ducimus quasi
                                aliquid quae aut, voluptatum dolore dolor id non expedita cupiditate officiis esse, ex ipsam
                                adipisci dolores aliquam?
                            </p>
                        </div>

                        <div class="mt-4">
                            <textarea name="r-desc" id="reply-box" class="form-control" rows="5" placeholder="Reply here .."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>
                            Close
                        </button>
                        <button type="submit" class="btn button-primary" id="btn-save">
                            <i class="bi bi-save me-1"></i>
                            Save changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(".btn-reply").each(function () {
            $(this).click(function () {

                var id = $(this).data('id');
                $("input[name=add-id]").val(id);

                $.ajax({
                    url: "{{ route('admin.blog.view.comment') }}",
                    data: {
                        id: id
                    },
                }).done(function (obj) {
                    
                    $("#reply").modal('show')

                    $(".s-username").html(obj.from)
                    $(".s-date").html(obj.updated_at)
                    $(".s-desc").html(obj.description)

                    if (obj.replies !== null) {
                        
                        $("#reply-box").val(obj.replies.description)
                    } else {

                        $("#reply-box").val('')
                    }
                })
            })
        });
    </script>
@endsection
