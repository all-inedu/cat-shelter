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

    .label-image {
        width: 90px;
        height: 90px;
        border: 2px dashed rgb(167, 167, 167);
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2em;
        cursor: pointer;
    }

    .img-preview {
        width: 90px;
        height: 90px;
        object-fit: cover;
        object-position: center;
        border: 2px dashed rgb(167, 167, 167);
        cursor: pointer;
    }
</style>
@extends('template.shelter.main')

@section('title', 'Cats - Shelter Dashboard')

@section('page-title')
    <div class="d-flex w-100 justify-content-between align-items-center">
        <div class="fw-bold text-muted">
            Cat
        </div>
        <a href="{{ url('shelter/cat/1') }}" class="btn button-primary">
            <i class="bi bi-arrow-left me-1"></i>
            Back
        </a>
    </div>
@endsection

@section('content')
    <div class="row p-0 g-2">
        <div class="col-12 bg-white p-3">
            <h4>Edit Some Cat Details</h4>
            <hr class="hr-cat mb-3">
            {{-- Search --}}
            <form action="">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            Name:
                            <input type="text" name="name" id="user"
                                class="form-control @error('name') is-invalid @enderror" autocomplete="false" readonly
                                onfocus="this.removeAttribute('readonly');">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            Breed:
                            <select name="breed" id="breed" class="form-control @error('breed') is-invalid @enderror">
                                <option value=""></option>
                                <option value="1">Test 1</option>
                                <option value="2">Test 2</option>
                                <option value="3">Test 3</option>
                            </select>
                            @error('breed')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    Age:
                                    <div class="d-flex align-items-center">
                                        <input type="number" name="age" id="user" step="0.5"
                                            class="form-control w-50 @error('age') is-invalid @enderror"
                                            autocomplete="false" readonly onfocus="this.removeAttribute('readonly');">
                                        <label class="ms-2 fw-light">Month</label>
                                    </div>
                                    @error('age')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    Weight:
                                    <div class="d-flex align-items-center">
                                        <input type="number" name="weight" id="user" step="0.1"
                                            class="form-control w-50 @error('weight') is-invalid @enderror"
                                            autocomplete="false" readonly onfocus="this.removeAttribute('readonly');">
                                        <label class="ms-2 fw-light">Kg</label>
                                    </div>
                                    @error('weight')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 text-md-center">
                            Image:
                            <div class="d-flex mt-2 w-100 justify-content-md-center">
                                <div class="file-1 mx-md-1">
                                    <label for="file-1" class="label-image">
                                        <i class="bi bi-plus icon-1"></i>
                                        <img id="frame1" src="" class="img-preview preview-1 d-none"
                                            for='file-1' />
                                    </label>
                                    <input type="file" id="file-1" name="image[]" class="d-none"
                                        onchange="preview(1)">
                                </div>
                                <div class="file-2 mx-md-1">
                                    <label for="file-2" class="label-image">
                                        <i class="bi bi-plus icon-2"></i>
                                        <img id="frame2" src="" class="img-preview preview-2 d-none"
                                            for='file-2' />
                                    </label>
                                    <input type="file" id="file-2" name="image[]" class="d-none"
                                        onchange="preview(2)">
                                </div>
                                <div class="file-3 mx-md-1">
                                    <label for="file-3" class="label-image">
                                        <i class="bi bi-plus icon-3"></i>
                                        <img id="frame3" src="" class="img-preview preview-3 d-none"
                                            for='file-3' />
                                    </label>
                                    <input type="file" id="file-3" name="image[]" class="d-none"
                                        onchange="preview(3)">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-2s">
                        Description:
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="10"></textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-12 text-center">
                        <button class="btn btn-secondary mt-3" type="submit"><i
                                class="bi bi-box-arrow-in-right me-1"></i>
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#breed').select2({
                placeholder: "Select breed",
            });
        });

        function preview(id) {
            $('.icon-' + id).addClass('d-none')
            $('.preview-' + id).removeClass('d-none')
            $('#frame' + id).attr('src', URL.createObjectURL(event.target.files[0]));
            // frame1.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
