@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Edit Category')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="edit-category-container">
        <div class="pt-3 px-4">
            <form method="POST" enctype="multipart/form-data" action="/categories_resource/{{$category->id}}" id="form-create-category" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="category_code">Category Code</label>
                        <input type="text" class="form-control" id="category_code" placeholder="Enter category code" value="{{old('category_code',optional($category ?? null)->category_code)}}" name="category_code" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Category code is required!</div>
                        @error('category_code')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="category_name">Category Name</label>
                        <input type="text" class="form-control" name="name" id="category_name" placeholder="Enter category name" value="{{old('name',optional($category ?? null)->name)}}" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Category code is required!</div>
                        @error('name')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" value="{{old('upload_img',optional($category ?? null)->image)}}" name="upload_img" id="upload_img">
                                <label class="custom-file-label" for="upload_img">{{old('upload_img',optional($category ?? null)->image)}}</label>
                                <div class="invalid-feedback">Image is required</div>
                            </div>
                        </div>
                    </div>
                    @error('upload_img')<div class="error-message">{{$message}}</div>@enderror
                </div>
                <button class="btn btn-primary font-weight-bold" type="submit">Submit form</button>
            </form>
        </div>
    </section>
@endsection
@section('script_tag')
    <script>
        $(".custom-file-input").on("change", function() {
            let fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection
