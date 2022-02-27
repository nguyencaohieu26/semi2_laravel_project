<div class="shadow-sm pb-2">
    <div class="header__top py-2">
        <nav>
            <ul class="d-flex list-unstyled justify-content-center justify-content-md-end px-5 mb-0">
                @if(Auth::check())
                    <li class="position-relative">
                        <div class="button-54 d-flex align-items-center border p-1 px-3 rounded">
                            <img width="20px" height="20px" style="border-radius: 50%" alt="user-avatar" src="{{asset('images_store/accounts/avatar-no-img.png')}}"/>
                            <p class="mb-0 ml-2 email-user" style="font-size: 12px">{{Auth::user()->email}}</p>
                            <i class="fas fa-angle-down ml-1" style="font-size: 10px"></i>
                        </div>
                        @php $role = Auth::user()->role;@endphp
                        <div class="btn-login-public position-absolute d-flex flex-column">
                            <a class="d-inline-block" href="{{route('logout-account')}}">
                                <button class="button-48" role="button">
                                    <span class="text d-flex">
                                        <span class="mr-2"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                                        <span>Logout</span>
                                    </span>
                                </button>
                            </a>
                            <a class="d-inline-block" href="{{strcmp($role,"ADMIN") == 0 ? route('admin-home-index') : route('user-home-index')}}">
                                <button class="button-48" role="button">
                                    <span class="text d-flex">
                                        <span class="mr-2"><i class="fas fa-tachometer-alt"></i></span>
                                        <span>Go Dashboard</span>
                                    </span>
                                </button>
                            </a>
                        </div>
                    </li>
                @else
                    <li><a href="{{route('login-account')}}" class="header__top-link font-weight-bold px-3">LOG IN</a></li>
                @endif
                <li class="position-relative px-3 d-flex align-items-center">
                    <a class="header__top-link" href="#">ABOUT</a>
                    <div class="header__top-submenu position-absolute">
                        <ul class="list-unstyled">
                            <li><a href="{{route('about-page')}}">About Us</a></li>
                            <li><a href="{{route('error-page')}}">Our Partner</a></li>
                        </ul>
                    </div>
                </li>
                <li class="d-flex align-items-center"><a href="{{route('blog-page')}}" class="header__top-link">BLOG</a></li>
                <li class="d-flex align-items-center"><a href="{{route('error-page')}}" class="header__top-link px-3">FAQ</a></li>
                <li class="d-flex align-items-center"><a href="{{route('contact-page')}}" class="header__top-link">CONTACT US</a></li>
            </ul>
        </nav>
    </div>
    <hr class="my-0 mb-2">
    <div class="header__top--nav px-5 d-flex">
        <nav class="navbar navbar-expand-lg navbar-light flex-grow-1">
            <a class="navbar-brand header__logo-link" href="{{route('home-index')}}">Art's Auction</a>
            <div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header__main-nav" aria-controls="header__main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-black-50"><i class="fa-solid fa-bars-staggered"></i></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="header__main-nav">
                <ul class="navbar-nav pr-xl-5 main-nav-ui position-relative">
                    <li class="nav-item">
                        <a class="nav-link nav__main-link" href="{{route('products-page')}}">AUCTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__main-link" href="{{route('error-page')}}">DEPARTMENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__main-link" href="{{route('products-page')}}">BUY NOW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav__main-link" href="{{route('products-page')}}">SELL</a>
                    </li>
                </ul>
                <div class="my-2 my-lg-0 position-relative search-container">
                    <input class="form-control mr-sm-2 pr-5" id="home_search" type="search" placeholder="Search for art" aria-label="Search">
                    <div class="search-icon position-absolute"><i class="fa-solid fa-magnifying-glass"></i></div>
                    <div id="main-search-container" class="position-absolute">
                    </div>
                </div>
            </div>
        </nav>
        <div class="position-relative open-cart-user" >
            <div class="ml-2 border rounded-circle position-relative" style="padding: 6px 8px; cursor: pointer;top: 16px">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6h-2c0-2.76-2.24-5-5-5S7 3.24 7 6H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-7-3c1.66 0 3 1.34 3 3H9c0-1.66 1.34-3 3-3zm7 17H5V8h14v12zm-7-8c-1.66 0-3-1.34-3-3H7c0 2.76 2.24 5 5 5s5-2.24 5-5h-2c0 1.66-1.34 3-3 3z"/></svg>
            </div>
            @if(Auth::check())
            <div class="user-auction-number position-absolute" id="user-auction-number"><p class="mb-0"></p></div>
            <div class="user-auction-cart" id="user-auction-cart"></div>
            @endif
        </div>
    </div>
</div>
