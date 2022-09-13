<style>
    .recent-list {
        max-height: 300px;
    }
</style>
@extends('template.admin.main')

@section('title', 'Admin Dashboard - Cat Shelter')

@section('page-title', 'Home')

@section('content')
    <div class="row p-0 g-2 align-items-stretch">
        {{-- Total Cats --}}
        <div class="col-md-6">
            <div class="bg-white rounded p-3 shadow-sm">
                <h6>Total of Cats</h6>
                <hr class="hr-cat">
                <div class="row mt-2 g-2">
                    <div class="col-md-6">
                        <div class="card text-center border-0 shadow-sm">
                            <div class="card-header cat-bg-primary">
                                Unadopted Cat
                            </div>
                            <div class="card-body">
                                <h3 class="cat-text-primary">{{ $total_of_cat['unadopted'] }}</h3>
                                <h5 class="cat-text-secondary">Cat</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center border-0 shadow-sm">
                            <div class="card-header cat-bg-primary">
                                Adopted Cat
                            </div>
                            <div class="card-body">
                                <h3 class="cat-text-primary">{{ $total_of_cat['adopted'] }}</h3>
                                <h5 class="cat-text-secondary">Cat</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Blog/Shelter/Adopter --}}
        <div class="col-md-6 ">
            <div class="bg-white rounded p-3 h-100 shadow-sm">
                <div class="row g-2 h-100">
                    <div class="col-md-4 position-relative overflow-hidden h-100">
                        <h6>Total of Blogs</h6>
                        <hr class="hr-cat">
                        <div class="card cat-bg-primary text-center border-0 shadow-sm mt-3">
                            <div class="card-body text-center">
                                <h3 class="text-white">{{ $total_blog }}</h3>
                                <h5 class="text-white">Blogs</h5>
                            </div>
                        </div>
                        <div class="text-end position-absolute" style="bottom:0; right:0">
                            <hr class="hr-cat">
                        </div>
                    </div>
                    <div class="col-md-4 position-relative overflow-hidden h-100">
                        <h6>Total of Shelter</h6>
                        <hr class="hr-cat">
                        <div class="card cat-bg-primary text-center border-0 shadow-sm mt-3">
                            <div class="card-body text-center">
                                <h3 class="text-white">{{ $total_shelter }}</h3>
                                <h5 class="text-white">Shelter</h5>
                            </div>
                        </div>
                        <div class="text-end position-absolute" style="bottom:0; right:0">
                            <hr class="hr-cat">
                        </div>
                    </div>
                    <div class="col-md-4 position-relative overflow-hidden h-100">
                        <h6>Total of Adopter</h6>
                        <hr class="hr-cat">
                        <div class="card cat-bg-primary text-center border-0 shadow-sm mt-3">
                            <div class="card-body text-center">
                                <h3 class="text-white">{{ $total_adopter }}</h3>
                                <h5 class="text-white">Adopter</h5>
                            </div>
                        </div>
                        <div class="text-end position-absolute" style="bottom:0; right:0">
                            <hr class="hr-cat">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-0 g-2 align-items-stretch mt-1">
        <div class="col-md-6">
            <div class="bg-white rounded p-3 h-100 shadow-sm">
                <h6>Recent Adoption List</h6>
                <hr class="hr-cat">
                <div class="recent-list table-responsive mt-3">
                    <table class="table">
                        <thead class="cat-bg-primary">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Cat Name</th>
                                <th>Adopter Name</th>
                                <th>Adopted Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($recent_adoption as $adoption)
                                <tr class="text-center text-muted align-middle">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $adoption->cat->name }}</td>
                                    <td>{{ $adoption->adopter->name }}</td>
                                    <td>{{ date('d M Y H:i', strtotime($adoption->updated_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="bg-white rounded p-3 h-100 shadow-sm">
                <h6>Recent Blog List</h6>
                <hr class="hr-cat">
                <div class="recent-list table-responsive mt-3">
                    <table class="table">
                        <thead class="cat-bg-primary">
                            <tr class="text-center align-middle">
                                <th nowrap>No</th>
                                <th nowrap>Blog Name</th>
                                <th nowrap>Category Name</th>
                                <th nowrap>Description</th>
                                <th nowrap>Published Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($recent_blog as $blog)
                                <tr class="text-center text-muted align-middle">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        @foreach ($blog->category as $category)
                                        <div class="bg-primary m-1">
                                            {{ $category->name }}
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="" style="width:300px">
                                            {{ $blog->content }}
                                        </div>
                                    </td>
                                    <td>{{ date('d M Y H:i', strtotime($blog->created_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
