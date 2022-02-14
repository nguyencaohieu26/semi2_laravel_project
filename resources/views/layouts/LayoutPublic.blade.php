<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BOOTSTRAP LINK STYLESHEET  --}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    {{--  CUSTOM LINK STYLESHEET  --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    {{--    --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    {{--    --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <title>@yield('page-title')</title>
</head>
<body>
{{-- HEADER --}}
    @include('components.header')
{{-- MAIN CONTENT --}}
    <main class="main-content">
        @yield('content')
    </main>
{{-- FOOTER --}}
<footer>
    <div>
        <!-- footer larger -->
        <div class="footer__static-1 py-5 d-none d-md-block">
            <div class="px-5">
                <div class="row px-3">
                    <div class="footer__logo col-md-6 col-lg-3">
                        <a href="/" class="footer__logo-link">
                            <h3>Art's Auction</h3>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4>About Us</h4>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="#">About Art's Auction</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Location</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="">Blog</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Privacy</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Term & Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4>Services</h4>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="#">Auctions</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Buy Now</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Selling</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Art Finance</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4>Help</h4>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Payment</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Shipping</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Buying guides</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Selling guides</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="#">SiteMap</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer small -->
        <div class="container-lg p-5 d-block d-md-none">
            <div class="accordion border rounded" id="footerAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                About Us
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#footerAccordion">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right"></i> <span>About Art's Auction</span> </a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right"></i> <span> Location</span></a></li>
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right"></i> <span> Blog</span></a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right"></i> <span>Privacy</span> </a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right"></i> <span>Term & Conditions</span> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Services
                            </button>
                        </h2>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#footerAccordion">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right mr-2"></i><span>Auctions</span></a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right mr-2"></i><span>Buy Now</span></a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right mr-2"></i><span>Selling</span></a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right mr-2"></i><span>Art Finance</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Help
                            </button>
                        </h2>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#footerAccordion">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right mr-2"></i><span>FAQ</span></a></li>
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right mr-2"></i><span>Contact Us</span></a></li>
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right mr-2"></i><span>Payment</span></a></li>
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right mr-2"></i><span>Shipping</span></a></li>
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right mr-2"></i><span>Buying guides</span></a></li>
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right mr-2"></i><span>Selling guides</span></a></li>
                                <li><a class="d-block" href="#"><i class="fas fa-caret-right mr-2"></i><span>SiteMap</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom -->
        <div class="footer__static-2 border-top py-3">
            <div class="container-lg px-5">
                <div class="row align-items-center">
                    <div class="col-md-6 order-2 mt-2 mt-md-0 order-md-0">
                        <p class="footer-copyright text-center">&copy; 2022 Art's Auction. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 order-1">
                        <nav>
                            <ul class="footer__social-list list-unstyled d-flex align-items-center justify-content-center justify-content-md-end">
                                <li class="footer__social-item"><a href="{{route('error-page')}}" class="footer__social-link"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__social-item"><a href="{{route('error-page')}}" class="footer__social-link"><i class="fab fa-twitter"></i></a></li>
                                <li class="footer__social-item"><a href="{{route('error-page')}}" class="footer__social-link"><i class="fab fa-instagram"></i></a></li>
                                <li class="footer__social-item"><a href="{{route('error-page')}}" class="footer__social-link"><i class="fab fa-youtube-square"></i></a></li>
                                <li class="footer__social-item"><a href="{{route('error-page')}}" class="footer__social-link"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script defer src="{{mix('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
@yield('script-tag')
</body>
</html>
