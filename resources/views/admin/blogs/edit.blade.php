@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Create Blog')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="create-blog-container">
        <div class="pt-3 px-4">
            <form method="POST" action="/blogs_resource/{{$blog->id}}" id="form-edit-blog"
                  class="needs-validation" novalidate enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="title" class="text-dark text-capitalize font-weight-bold">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title..."
                               value="{{old ('title',optional($blog ?? null)->title)}}" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Title is required</div>
                        @error('title')
                        <div class="error-message">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="author_name" class="text-dark text-capitalize font-weight-bold">Author Name</label>
                        <input type="text" id="author_name" name="name" class="form-control" placeholder="Enter author ..."
                               value="{{old ('name',optional($blog ?? null)->author)}}" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Author is required</div>
                        @error('name')
                        <div class="error-message">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="" class="text-dark text-capitalize font-weight-bold">Upload Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" value="{{old('upload_img',optional($blog ?? null)->image)}}" name="upload_img" id="upload_img">
                            <label class="custom-file-label" for="upload_img">{{old('upload_img',optional($blog ?? null)->image)}}</label>
                            <div class="invalid-feedback">Image is required</div>
                        </div>
                        @error('upload_img')
                            <div class="error-message">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="author_tag" class="text-dark text-capitalize font-weight-bold">Tag</label>
                        <input id="author_tag" class="form-control" type="text" placeholder="Enter tag..." value="{{old('tag',optional($blog ?? null)->tag)}}" name="tag" required/>
                        <div class="invalid-feedback">Tag is required</div>
                        @error('tag')
                        <div class="error-message">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="content_post" class="text-dark text-capitalize font-weight-bold">Content</label>
                        <textarea class="form-control" name="content_post" id="content_post" rows="5"
                                  placeholder="Content..." required>{{old('content_post',optional($blog ?? null)->content_post)}}</textarea>
                        <div class="invalid-feedback">Content look good</div>
                        <div class="valid-feedback">Looks good!</div>
                        @error('content_post')
                        <div class="valid-feedback">Looks good!</div>
                        @enderror
                    </div>
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
