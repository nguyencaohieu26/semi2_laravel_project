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
            <form method="POST" action="/blogs_resource/{{$blog->id}}" id="form-create-blog"
                  class="needs-validation" novalidate enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="FormTitle" class="text-dark text-capitalize font-weight-bold">title</label>
                        <input type="text" name="title" class="form-control" id="FormTitle" placeholder="Enter Title..."
                               value="{{old ('title', optional($blog ?? null)->title)}}" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Title is required</div>
                        @error('title')
                        <div class="error-message">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="FormAuthor" class="text-dark text-capitalize font-weight-bold">Author Name</label>
                        <input type="text" name="author" class="form-control" placeholder="Enter Author ..."
                               value="{{old ('author', optional($blog ?? null)->author)}}" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Author is required</div>
                        @error('author')
                        <div class="error-message">{{$message}}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="" class="text-dark text-capitalize font-weight-bold">Upload Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" value="{{old('upload_img',optional($blog ?? null)->image)}}" name="upload_img" id="upload_img" required>
                            <label class="custom-file-label" for="upload_img">Choose file</label>
                            <div class="invalid-feedback">Image is required</div>
                        </div>
                        @error('upload_img')
                        <div class="error-message">{{$message}}</div>
                        @enderror
                    </div>
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="exampleFormControlSelect1"--}}
{{--                               class="text-dark text-capitalize font-weight-bold">Status</label>--}}
{{--                        <select class="custom-select" id="validationDefault04" required>--}}
{{--                            <option selected disabled value="">Choose...</option>--}}
{{--                            <option>...</option>--}}
{{--                        </select>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please select a valid status--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1" class="text-dark text-capitalize font-weight-bold">content
                            title</label>
                        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"
                                  placeholder="Content..." required>{{old('upload_img',optional($blog ?? null)->content_post)}}</textarea>
                        <div class="invalid-feedback">
                            Content is required
                        </div>
                        @error('content')
                        <div class="error-message">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
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
