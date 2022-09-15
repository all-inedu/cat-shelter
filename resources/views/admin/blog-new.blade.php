<style>

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

@section('notif')
    <div class="mt-2">
        @if($errors->any())
            {!! implode('', $errors->all('<div class="alert alert-danger mb-0" role="alert">:message</div>')) !!}
        @endif
    </div>
@endsection

@section('content')
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            <h2 class="mb-0 pb-0">Create a Blog Post</h2>
            <hr class="hr-cat mb-5">

            <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Blog Title :
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Category :
                    </div>
                    <div class="col-md-10">
                        <select id="cat" class="form-control w-50" name="category[]" multiple="multiple">
                            <option></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Thumbnail :
                    </div>
                    <div class="col-md-10">
                        <input type="file" name="thumbnail" class="form-control w-25">
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-2">
                        Description :
                    </div>
                    <div class="col-md-10">
                        <textarea id="" name="content" class="form-control" rows="13"></textarea>
                    </div>
                </div>
                <div class="my-3 text-end">
                    <button type="submit" class="btn btn-secondary px-3">
                        <i class="bi bi-plus-square me-1"></i> Create
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
    </script>
@endsection
