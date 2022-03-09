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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
    {{--    --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    {{--    --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    {{--    --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    {{--    --}}
    <link rel="stylesheet" href="{{asset('image-zoom-plugin-master/image-zoom-plugin-master/css/image-zoom.css')}}">
    <title>@yield('page-title')</title>
</head>
<body>
<div class="overlay" id="overlay">
    <div class="lds-hourglass"></div>
</div>
{{-- HEADER --}}
    @include('components.header')
{{-- MAIN CONTENT --}}
    <main class="main-content">
        @yield('content')
    </main>
{{-- FOOTER --}}
<footer>
    @if(Auth::check())
        @php $accountID = Auth::user()->id @endphp
    @endif
    <div>
        <!-- footer larger -->
        <div class="footer__static-1 py-5 d-none d-md-block">
            <div class="px-5">
                <div class="row px-3">
                    <div class="footer__logo col-md-6 col-lg-3">
                        <a href="{{route('home-index')}}" class="footer__logo-link">
                            <h3>Art's Auction</h3>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4>About Us</h4>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('about-page')}}">About Art's Auction</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('error-page')}}">Location</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('blog-page')}}">Blog</a>
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
                                <a href="{{route('products-page')}}">Auctions</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('products-page')}}">Buy Now</a>
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
                                <a href="{{route('error-page')}}">FAQ</a>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <a href="{{route('contact-page')}}">Contact Us</a>
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
                                <a href="{{route('error-page')}}">SiteMap</a>
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
                                <li><a class="d-block" href="{{route('products-page')}}"><i class="fas fa-caret-right mr-2"></i><span>Buy Now</span></a></li>
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
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right mr-2"></i><span>FAQ</span></a></li>
                                <li><a class="d-block" href="{{route('about-page')}}"><i class="fas fa-caret-right mr-2"></i><span>Contact Us</span></a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right mr-2"></i><span>Payment</span></a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right mr-2"></i><span>Shipping</span></a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right mr-2"></i><span>Buying guides</span></a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right mr-2"></i><span>Selling guides</span></a></li>
                                <li><a class="d-block" href="{{route('error-page')}}"><i class="fas fa-caret-right mr-2"></i><span>SiteMap</span></a></li>
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
<script  src="{{mix('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="{{asset('image-zoom-plugin-master/image-zoom-plugin-master/js/image-zoom.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@yield('script-tag')

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function (){
            let homeSearch = $('#home_search');
            let searchContainer = $('#main-search-container');

            $('.button-54').click(function (){
                $('.btn-login-public').toggleClass('active');
            });
            searchContainer.hide();
            homeSearch.on('input',function (){
            $.ajax({
                url:'search/products',
                data:{title:$(this).val()},
                method:"GET",
                success:(result)=>{
                    console.log(result);
                    searchContainer.html('');
                    if(result.length > 0){
                        result.forEach(item =>{
                           let artItem = `
                           <a href="/products/${item.id}">
                                <div class="d-flex search-item">
                                    <div><img class="rounded" height="80px" width="80px" src="images_store/products/${item.image}" alt="${item.name}"/></div>
                                    <div>
                                         <p class="name mb-1 font-weight-bold">${item.name}</p>
                                         <div class="">
                                            <p class="artist mb-0">Artist: <span class="font-weight-bold">${item.artists.name}</span></p>
                                            <p class="status mb-0">Status: <span class="font-weight-bold">${item.product_status.name}</span></p>
                                            <p class="bid mb-0">Current Bid: <span class="${item.current_price > 0 ? "text-success" : "text-danger"} font-weight-bold">${item.current_price > 0 ? item.current_price : "No bid"}</span></p>
                                         </div>
                                    </div>
                                </div>
                            </a>
                           `
                            searchContainer.show().append(artItem);
                        });
                    }else{
                        searchContainer.show().append(`
                            <div class="px-1 py-3 text-center text-secondary">
                                <i class="fas fa-box-open fa-2x"></i>
                                <p>No art found!</p>
                            </div>
                        `);
                    }
                }
            })
        });
        //####################
        searchContainer.on('mouseleave',function (){
            searchContainer.hide();
        })
        setTimeout(()=>{
            $('#overlay').hide();
        },1200)
    });
    //####################
    const filterProductContainer = document.querySelector('.lot-filter-container');
    const btnOpenFilterContainer =document.querySelector('.auction-lot-filter-btn');
    let numberBidUser = $('#user-auction-number');
    let cartUserContainer = $('#user-auction-cart');
    let accountID = {!! Auth::check() ? $accountID : "undefined" !!};
    if(btnOpenFilterContainer && filterProductContainer){
        window.addEventListener('click',function (e){
            if(e.target !== filterProductContainer
                && e.target !== btnOpenFilterContainer
                && e.target !== btnOpenFilterContainer.querySelector('i')
                &&  !filterProductContainer.contains(e.target)
            ){document.querySelector('.lot-filter-container').classList.remove('active');}

        })
    }

    if(accountID){
        getCartUser();
    }
    function getCartUser(){
        $.ajax({
            url:`/userCart`,
            data:{account:accountID ? accountID : undefined},
            method:'GET',
            success: result=>{
                if(result.data.length > 0){
                    cartUserContainer.html("");
                    numberBidUser.children('p').text(result.total);
                    result.data.forEach((item,index) =>{
                        if(index < 5){
                            let bid_status = `${item.bid_status_id === 1 ? "bidding" : (item.bid_status_id === 2 ? "giveup" : (item.bid_status_id === 3 ? "payment" : "success"))}`;
                                let itemBid = `
                                    <div class="mb-3 p-1 cartuser-item rounded">
                                         <a href="/products/${item.product_id}?Art=${(item.name).replaceAll(' ','-')}">
                                            <div class="d-flex">
                                                <div class="mr-2">
                                                    <img height="100%" width="70px" class="rounded" src="/images_store/products/${item.image}" alt="${item.name}"/>
                                                </div>
                                                <div class="w-100">
                                                    <h6 class="mb-1" style="color: #0c5460">${item.name}</h6>
                                                    <div class="d-flex justify-content-between">
                                                        <p style="font-size: 13px" class="mb-0 text-secondary">Current price: <span class="font-italic text-success">${item.current_price}</span></p>
                                                        <p style="font-size: 12px" class="mb-0 border p-1 rounded">${bid_status}</p>
                                                    </div>
                                                    <p style="font-size: 13px" class="mb-0 text-secondary">Your Bid: <span class="font-italic text-danger">${item.max_bid}</span></p>
                                                </div>
                                            </div>
                                         </a>
                                    <div>
                                `
                                cartUserContainer.append(itemBid);
                        }else{
                            $('.view-more-auction-user').remove();
                            cartUserContainer.append(`<div class="view-more-auction-user text-center"><a style="font-size:13px" href="{{route('user-cart')}}">view more</a></div>`)
                        }
                    });
                }else{
                    numberBidUser.hide();
                    cartUserContainer.hide();
                }
            }
        });
    }
</script>
</body>
</html>
