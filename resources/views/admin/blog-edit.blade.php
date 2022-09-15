<style>

</style>
@extends('template.admin.main')

@section('title', 'Blogs - Admin Dashboard')

@section('page-title')
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="fw-bold text-muted">
            Blog Post
        </div>
        <a href="{{ url('admin/blog/3') }}" class="btn button-primary">
            <i class="bi bi-arrow-left me-1"></i>
            Back
        </a>
    </div>
@endsection

@section('notif')
    <div class="mt-2">
        @if($errors->any())
            {!! implode('', $errors->all('<div class="alert alert-danger mb-0" role="alert">:message</div>')) !!}
        @endif
    </div>
    
    <!-- Session Status -->
    @if(session()->has('update-blog-successful'))
        <div class="alert alert-success mb-0 fade show" role="alert">
            {{ session()->get('update-blog-successful') }}
        </div>
    @endif
@endsection

@section('content')
    <div class="row p-0 g-2">

        <div class="col-12 bg-white p-3">
            <h2 class="mb-0 pb-0">Edit a Blog Post</h2>
            <hr class="hr-cat mb-5">
            <form action="{{ route('admin.blog.update', ['id' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Blog Title :
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Category :
                    </div>
                    <div class="col-md-10">
                        <select id="cat" class="form-control w-50" name="category[]" multiple>
                            <option></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if (in_array($category->id, $blog->category()->select('categories.id')->get()->makeHidden('pivot')->pluck('id')->toArray()))
                                        {{ "selected" }}
                                    @endif
                                    >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Thumbnail :
                    </div>
                    <div class="col-md-10">
                        <div class="d-flex">
                            <input type="file" name="thumbnail" class="form-control w-25" id="btn-upload">
                            <span class="p-2 old-file">{{ $blog->thumbnail }}</span>
                        </div>
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Description :
                    </div>
                    <div class="col-md-10">
                        <textarea name="content" class="form-control" rows="13">{!! $blog->content !!}</textarea>
                    </div>
                </div>
                <div class="my-3 text-end">
                    <button type="submit" class="btn btn-secondary px-3">
                        <i class="bi bi-pencil"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#cat').select2({
                placeholder: "Select category",
            });
        });

        $("#btn-upload").change(function (e) {
            var uploaded_file = $(this).val()
            if (uploaded_file !== null) {
                $('.old-file').hide()
            }
        })
    </script>
@endsection
