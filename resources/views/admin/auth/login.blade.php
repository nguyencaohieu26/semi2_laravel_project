<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{!! asset('admin/assets/css/styles.css') !!}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xl-4 col-md-8 col-sm-12 mx-auto mt-5">
            <h4 class="mb-4 font-weight-bold text-center">Log in to your account</h4>
            <form method="post" action="{{route('auth.check')}}" class="needs-validation" novalidate>
                @if(Session::get('error'))
                    <div class="alert alert-warning">
                        {{Session::get('error')}}
                    </div>
                @endif
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <input type="email" name="email" class="form-control w-100" id="email"
                               placeholder="Email Address" value="{{old('email')}}" required>
                        <div class="valid-feedback">look good!</div>
                        <div class="invalid-feedback">Enter Email</div>
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
                    <div class="ml-auto mb-4">
                        <a href="#" class="text-decoration-none">Forgot Your password ?</a>
                    </div>
                </div>
                <button type="submit" class="w-100 btn btn-dark">Login</button>
                <p class="text-center mt-4">Don't have an account?
                    <a href="{{route('auth.save')}}" class="text-decoration-none">Sign up</a>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
</html>


