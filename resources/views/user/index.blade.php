@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','User Info')

@section('navbar')
    @include('components.navbarUser')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <div class="form-user px-3">
        <form method="post" action="" enctype="multipart/form-data" class="needs-validation pt-3" novalidate>
            @csrf
            @method('PUT')
            {{--  first + last  --}}
            <div class="form-row mb-2">
                {{--  first name  --}}
                <div class="col-md-6">
                    <label for="firstname" class="text-capitalize font-weight-bold text-dark">first name</label>
                    <input type="text" name="f_name" class="form-control" id="firstname" placeholder="First Name"
                           value="{{old('f_name')}}" required>
                    <div class="valid-feedback">look good!</div>
                    @error('f_name')<div class="error-message">{{$message}}</div>@enderror
                </div>
                {{-- last name  --}}
                <div class="col-md-6">
                    <label for="lastname" class="text-capitalize font-weight-bold text-dark">last name</label>
                    <input type="text" name="l_name" class="form-control" id="firstname" placeholder="Last Name"
                           value="{{old('l_name')}}" required>
                    <div class="valid-feedback">look good!</div>
                    @error('l_name')<div class="error-message">{{$message}}</div>@enderror
                </div>
            </div>
            {{--  date + email  --}}
            <div class="form-row mb-2">
                {{--  email  --}}
                <div class="col-md-6">
                    <label for="email" class="text-capitalize font-weight-bold text-dark">email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                           value="{{old('email')}}" required>
                    <div class="valid-feedback">look good!</div>
                    @error('email')<div class="error-message">{{$message}}</div>@enderror
                </div>
                {{--  birthday  --}}
                <div class="col-md-6">
                    <label for="birthday" class="text-capitalize font-weight-bold text-dark">birthday</label>
                    <input type="date" name="birthday" class="form-control" id="birthday"
                           value="{{old('birthday')}}" required>
                    @error('birthday')
                    <div class="error-message">{{$message}}</div>
                    @enderror
                </div>
            </div>
            {{-- gender + avatar  --}}
            <div class="form-row mb-2">
                {{--  avatar  --}}
                <div class="col-md-6">
                    <label for="" class="text-dark text-capitalize font-weight-bold">Upload Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" value="{{old('upload_img')}}" name="upload_img"
                               id="upload_img">
                        <label class="custom-file-label" for="upload_img">Choose file</label>
                        <div class="invalid-feedback">Image is required</div>
                    </div>
                    @error('upload_img')
                    <div class="error-message">{{$message}}</div>
                    @enderror
                </div>
                {{-- gender  --}}
                <div class="col-md-6">
                    <label for="gender" class="text-capitalize font-weight-bold text-dark">gender</label><br>
                    <div class="d-flex mt-2">
                        <div class="form-check">
                            <input type="radio" name="gender" class="form-check-input" id="male" value="{{old('gender')}}">
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check ml-3">
                            <input type="radio" name="gender" class="form-check-input" id="female" value="{{old('gender')}}">
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check ml-3">
                            <input type="radio" name="gender" class="form-check-input" id="other" value="{{old('gender')}}">
                            <label for="other" class="form-check-label">Other</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-submit mt-3">submit</button>
        </form>
    </div>
@endsection

@section('script_tag')
    <script>
        $(".custom-file-input").on("change", function () {
            let fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection




