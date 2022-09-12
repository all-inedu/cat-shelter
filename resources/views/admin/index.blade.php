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
                                <h3 class="cat-text-primary">2</h3>
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
                                <h3 class="cat-text-primary">1</h3>
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
                                <h3 class="text-white">2</h3>
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
                                <h3 class="text-white">2</h3>
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
                                <h3 class="text-white">2</h3>
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
                            @for ($i = 1; $i <= 5; $i++)
                                <tr class="text-center text-muted align-middle">
                                    <td>{{ $i }}</td>
                                    <td>Cat Name</td>
                                    <td>Adopter Name</td>
                                    <td>24 July 2022</td>
                                </tr>
                            @endfor
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
                            @for ($i = 1; $i <= 5; $i++)
                                <tr class="text-center text-muted align-middle">
                                    <td>{{ $i }}</td>
                                    <td nowrap>Cat Name</td>
                                    <td nowrap>Adopter Name</td>
                                    <td>
                                        <div class="" style="width:300px">
                                            Lorem ipsum dolor sit amet consectetur adipisicing..
                                        </div>
                                    </td>
                                    <td>24 July 2022</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
