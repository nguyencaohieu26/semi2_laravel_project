<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{!! asset('admin/assets/css/styles.css') !!}">
    <link rel="stylesheet" href="{!! asset('admin/assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
{{--    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>--}}
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xl-4 col-md-8 col-sm-12 mx-auto mt-5">
            <h4 class="font-weight-bold text-center">Create an account</h4>
            <p class="text-center mb-4" style="font-size: 12px">Creating an account allows you to discover more, stay up
                to date and manage your activity.</p>
            <form method="POST" action="{{route('auth.save')}}" class="needs-validation" novalidate>
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                @if(Session::get('error'))
                    <div class="alert alert-danger">
                        {{Session::get('error')}}
                    </div>
                @endif

                @csrf
{{--                @method('PUT')--}}
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <input type="text" name="name" class="form-control w-100" id="name"
                               placeholder="Enter Name" value="{{old('name')}}" required>
                        <div class="valid-feedback">look good!</div>
                        <span class="text-danger">
                            @error('name'){{$message}}@enderror
                        </span>
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="email" name="email" class="form-control w-100" id="email"
                               placeholder="Email Address" value="{{old('email')}}" required>
                        <div class="valid-feedback">look good!</div>
                        {{--                        <div class="invalid-feedback">Enter Email</div>--}}
                        <span class="text-danger">
                            @error('email'){{$message}}@enderror
                        </span>
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="password" name="password" class="form-control w-100 password position-relative"
                               id="pass"
                               placeholder="password" value="{{old('password')}}" required>
                        <span style="position: absolute;top: 7px;right: 16px;" class="icon__eye">
                        <i class="fa-solid fa-eye"></i>
                        </span>
                        <div class="valid-feedback">look good!</div>
                        <div class="invalid-feedback">Enter Email</div>
                        <span class="text-danger">
                            @error('password'){{$message}}@enderror
                        </span>
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" name="receive_email" id="receive_email"
                           value="{{old('receive_email')}}" required>
                    <span>
                        <label for="receive_email" class="form-check-label font-weight-normal">I would like to receive email updates</label>
                    </span>
                    <div class="invalid-feedback">
                        Required Areceive email updates
                    </div>
                    @error('receive_email')
                    <div class="error-message">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-check mb-4">
                    <input type="checkbox" class="form-check-input" name="agree_terms" id="agree_terms"
                           value="{{old('agree_terms')}}" required>
                    <span>
                        <label for="agree_terms" class="form-check-label font-weight-normal">I have read and agree to the <a
                                href="#" class="text-decoration-none">Privacy Policy</a> , sothebys.com <a href="#"
                                                                                                           class="text-decoration-none">Terms & Conditions</a> and metaverse.sothebys.com <a
                                href="#" class="text-decoration-none">Terms of Service</a> </label>
                    </span>
                    <div class="invalid-feedback">
                        Agree to terms and conditions
                    </div>
                    @error('agree_terms')
                    <div class="error-message">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="w-100 btn btn-dark">Register</button>
                <p class="text-center mt-4">Already have an account?
                    <a href="{{route('auth.check')}}" class="text-decoration-none">Log in</a>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
</html>



