@extends('layouts.LayoutLogin')
@section('page-title','Login')
@section('content')
    <section class="login-container px-3">
        <div>

        </div>
        <div class="row login-container-content">
        <div class="login-loader active" id="animationWindow"></div>
            <div class="d-none d-md-block col-md-7 p-0 h-100">
                <div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner h-100">
                        <div class="carousel-item h-100 active">
                            <img height="100%" src="{{asset('images/login-img-1.jpg')}}" class="d-block w-100" alt="login-image-1">
                            <div class="login-slider-content position-absolute py-4 px-3 rounded animate__animated animate__fadeInDown animate__delay-2s" style="bottom: 3.5rem; left: 1.5rem;min-width: 300px">
                                <a class="" href="{{route('products-page')}}">
                                    <h5>Van Gogh Art Collection</h5>
                                    <p class="mb-0">On View In London</p>
                                    <p class="mb-0" style="color: rgba(222,169,42,0.78)">See more</p>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img height="100%" src="{{asset('images/login-img-3.jpg')}}" class="d-block w-100" alt="login-image-3">
                            <div class="login-slider-content position-absolute py-4 px-3 rounded animate__animated animate__fadeInLeft animate__delay-1s" style="bottom: 3.5rem; left: 1.5rem;min-width: 300px">
                                <a class="" href="{{route('products-page')}}">
                                    <h5>Modern & Contemporary Art Auction</h5>
                                    <p class="mb-0">On View In London</p>
                                    <p class="mb-0" style="color: rgba(222,169,42,0.78)">See more</p>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img height="100%" src="{{asset('images/login-img-2.jpg')}}" class="d-block w-100" alt="login-image-2">
                            <div class="login-slider-content position-absolute py-4 px-3 rounded animate__animated animate__fadeInRight animate__delay-1s" style="bottom: 3.5rem; left: 1.5rem;min-width: 300px">
                                <a class="" href="{{route('products-page')}}">
                                    <h5>Japanese Art Collection</h5>
                                    <p class="mb-0">On View In New York</p>
                                    <p class="mb-0" style="color: rgba(222,169,42,0.78)">See more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 d-flex align-items-center flex-column p-4 mt-5">
                    @if(Session::has('error-login'))
                        <div class="position-absolute login-error-message active px-4">
                            <div class="alert alert-danger w-100" style="padding: 6px 12px">
                                <p class="mb-0" style="font-size: 13px">{{Session::get('error-login')}}</p>
                            </div>
                        </div>
                    @endif
                    <div class="align-self-start align-self-sm-center">
                        <h3>
                            <span><i style="font-size:32px" class="fas fa-house"></i></span>
                            <span>Log in</span></h3>
                        <p class="text-secondary" style="font-size: 14px">Enter your credentials to access your account.</p>
                    </div>
                    <form method="POST" class="needs-validation" action="{{route('login-validate')}}" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-12 mb-3">
                                <label for="login-email">Email</label>
                                <input type="email" class="form-control" value="{{old('email')}}" id="login-email" name="email" placeholder="example@gmail.com" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Email is required!</div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="login-password">Password</label>
                                <input type="password" class="form-control" id="login-password" name="password" placeholder="enter password..." value="{{old('password')}}" required>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Password is required!</div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary w-100" type="submit">Login</button>
                            <button type="button" class="btn btn-login-google mt-3 w-100">
                                <img width="25px" src="{{asset('images/Google__G__Logo.svg.png')}}" alt="google-icon"/>
                                <span class="ml-2 position-relative" style="top: 2px">Sign in with Google</span>
                            </button>
                        </div>
                    </form>
                <div class="mt-auto">
                    <p class="mb-0" style="font-size: 13px;font-weight: 600">
                        <span class="text-secondary mr-1">Don't have an account yet?</span>
                        <a href="{{route('signup-account')}}" class="">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-tag')
<script>
        //
        let animData = {
            wrapper: document.querySelector('#animationWindow'),
            animType: 'svg',
            loop: true,
            prerender: true,
            autoplay: true,
            path: 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/35984/LEGO_loader.json'
        };
        let anim = bodymovin.loadAnimation(animData);
        anim.setSpeed(3.4);
        //
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                let forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                let validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        //
        setTimeout(()=>{
            document.querySelector('.login-loader').classList.remove('active');
        },1800)
        //
        const loginMesContainer = document.querySelector('.login-error-message');
        if(loginMesContainer){
            setTimeout(()=>{
                loginMesContainer.classList.remove('active');
            },3000);
        }
</script>
@endsection
