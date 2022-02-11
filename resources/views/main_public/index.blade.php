@extends('layouts.LayoutPublic')
@section('page-title','Home')
@section('content')
    <div>
        {{--  BANNER  --}}
        <section class="px-5">
            <div class="home-banner position-relative">
                <img width="100%" alt="home_banner" src="{{asset('./images/banner1.jpg')}}">
                <div class="home-banner__content position-absolute">
                    <p>
                        Find, sell and <br> collect truly rare artworks
                    </p>
                    <a class="home-banner-btn" href="#">DISCOVER</a>
                </div>
            </div>
        </section>

        {{--  BROWSE THE CATEGORY  --}}
        <section class="p-5 browse-the-category">
            <div>
                <h3 class="main-section-heading position-relative">Browse by category</h3>
                <div class="category-slider mt-3">
                   @foreach($categories as $category)
                        <div class="category-slider-item">
                            <a href="#">
                                <div>
                                    <img src="{{$category['image']}}" class="d-block w-100" alt="{{"category"."-".$category['name']}}">
                                </div>
                                <div  class="text-center">
                                    <span><p class="mt-3 m-0">{{$category['name']}}</p></span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{--  TRENDING AUCTIONS  --}}
        <section class="px-5 home-trending-auctions">
            <div>
                <h3 class="main-section-heading position-relative">Trending auctions</h3>
                <div class="pt-2 d-flex align-items-center justify-content-between">
                    <p class="mt-0">See what's popular across thousands of items</p>
                    <a href="#">
                        <span class="mr-1">Views All</span>
                        <i style="font-size: 10px" class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
                <div>
                    <div class="row" style="height: 650px">
                        <div class="col-lg-6 h-100 position-relative">
                            <div style="height: 85%">
                                <img height="100%" width="100%" src="{{asset($trending_products['0']['image'])}}" alt="">
                            </div>
                            <div class="count-down-container position-absolute" data-countdown="{{$trending_products['0']['date_end']}}"></div>
                            <div class="upcoming-lot-content">
                                <h4>{{$trending_products['0']['name']}}</h4>
                                <p>Starting bid: $<span>{{$trending_products['0']['start_price']}}</span></p>
                            </div>
                        </div>
                        <div class="col-lg-6 h-100">
                            <div class="row">
                                <div class="col-lg-6 position-relative" style="height: 300px">
                                    <div style="height: 80%">
                                        <img height="100%" width="100%" src="{{asset($trending_products['1']['image'])}}" alt="">
                                    </div>
                                    <div class="count-down-container position-absolute" data-countdown="{{$trending_products['1']['date_end']}}"></div>
                                    <div class="upcoming-lot-content">
                                        <h4>{{$trending_products['1']['name']}}</h4>
                                        <p>Starting bid: $<span>{{$trending_products['1']['start_price']}}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 position-relative" style="height: 300px">
                                    <div style="height: 80%">
                                        <img height="100%" width="100%" src="{{asset($trending_products['2']['image'])}}" alt="">
                                    </div>
                                    <div class="count-down-container position-absolute" data-countdown="{{$trending_products['2']['date_end']}}"></div>
                                    <div class="upcoming-lot-content">
                                        <h4>{{$trending_products['2']['name']}}</h4>
                                        <p>Starting bid: $<span>{{$trending_products['2']['start_price']}}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 position-relative" style="height: 300px">
                                    <div style="height: 80%">
                                        <img height="100%" width="100%" src="{{asset($trending_products['3']['image'])}}" alt="">
                                    </div>
                                    <div class="count-down-container position-absolute" data-countdown="{{$trending_products['3']['date_end']}}"></div>
                                    <div class="upcoming-lot-content">
                                        <h4>{{$trending_products['3']['name']}}</h4>
                                        <p>Starting bid: $<span>{{$trending_products['3']['start_price']}}</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 position-relative" style="height: 300px">
                                    <div style="height: 80%">
                                        <img height="100%" width="100%" src="{{asset($trending_products['4']['image'])}}" alt="">
                                    </div>
                                    <div class="count-down-container position-absolute" data-countdown="{{$trending_products['4']['date_end']}}"></div>
                                    <div class="upcoming-lot-content">
                                        <h4>{{$trending_products['3']['name']}}</h4>
                                        <p>Starting bid: $<span>{{$trending_products['4']['start_price']}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--  UPCOMMING AUCTIONS  --}}
        <section class="p-5 home-upcoming-auctions">
            <div>
                <h3 class="main-section-heading position-relative">Upcoming lot auctions</h3>
                <div class="row mt-4">
                    @foreach($upcoming_products as $upcoming_product)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#">
                                <div class="upcoming-lot-item overflow-hidden">
                                    <div class="upcoming-lot-thumbnail position-relative">
                                        <img src="{{$upcoming_product['image']}}" alt="{{$upcoming_product['name']}}">
                                        <div class="btn-zoom-lot position-absolute">
                                            <button>View more</button>
                                        </div>
                                        <div class="count-down-container position-absolute" data-countdown="{{$upcoming_product['date_start']}}"></div>
                                    </div>
                                    <div class="upcoming-lot-content">
                                        <h5>{{$upcoming_product['name']}}</h5>
                                        <p class="m-0">Starting bid: <span>${{$upcoming_product['start_price']}}</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{--   START BUY NOW  --}}
        <section class="buy__now mt-4">
            <div class="px-5 h-100">
                <div class="row row-bg m-0">
                    <div class="col-sm-12 col-md-7 px-4 py-5">
                        <a href="#">
                            <h3>Buy now</h3>
                            <p class="buy__now-text">Buy or sell fine art on your schedule</p>
                            <p class="buy__now-btn mt-4 d-inline-block">Browser Auction Now</p>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-5 p-0 position-relative">
                        <a href="#" class="glightbox">
                            <div class="position-absolute play-btn"><i class="fas fa-play fa-2x"></i></div>
                            <img width="100%" src="{{asset('./images/banner7.jpg')}}" alt="banner-img7">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{--  FEATURE STORIES & BLOG  --}}
        <section class="p-5">
            <div>
                <h3 class="main-section-heading position-relative">Feature stories & blog</h3>
                    <div class="mt-4">
                        <div class="row blog-background">
                            <div class="col-md-6">
                                <div class="rounded overflow-hidden">
                                    <img width="100%" src="{{asset($blogs['1']['ImgUrl'])}}" alt="{{asset($blogs['1']['blogTitle'])}}">
                                </div>
                                <div class="mt-2">
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <h4>{{$blogs['1']['blogTitle']}}</h4>
                                        <p class="mb-0" style="font-size: 11px">{{date("F d, Y", strtotime($blogs['1']['date']))}}</p>
                                    </div>
                                    <p class="mb-0">
                                        <i class="fa-solid fa-tags" ></i>
                                        <span class="ml-1">{{$blogs['1']['blogTag']}}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="rounded overflow-hidden">
                                            <img width="100%" src="{{asset($blogs['2']['ImgUrl'])}}" alt="{{asset($blogs['2']['blogTitle'])}}">
                                        </div>
                                        <div class="my-3">
                                            <div class="d-flex justify-content-between flex-wrap">
                                                <h4>{{$blogs['2']['blogTitle']}}</h4>
                                                <p class="mb-0" style="font-size: 11px">{{date("F d, Y", strtotime($blogs['2']['date']))}}</p>
                                            </div>
                                            <p class="mb-0">
                                                <i class="fa-solid fa-tags"></i><span class="ml-1">{{$blogs['2']['blogTag']}}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div>
                                            <div class="rounded overflow-hidden">
                                                <img width="100%" src="{{asset($blogs['3']['ImgUrl'])}}" alt="{{asset($blogs['3']['blogTitle'])}}">
                                            </div>
                                            <div class="my-3">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <h4>{{$blogs['3']['blogTitle']}}</h4>
                                                    <p class="mb-0" style="font-size: 11px">{{date("F d, Y", strtotime($blogs['3']['date']))}}</p>
                                                </div>
                                                <p class="mb-0">
                                                    <i class="fa-solid fa-tags" ></i>
                                                    <span class="ml-1">{{$blogs['3']['blogTag']}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="rounded overflow-hidden">
                                                <img width="100%" src="{{asset($blogs['4']['ImgUrl'])}}" alt="{{asset($blogs['4']['blogTitle'])}}">
                                            </div>
                                            <div class="my-3">
                                                <div class="d-flex justify-content-between flex-wrap">
                                                    <h4>{{$blogs['4']['blogTitle']}}</h4>
                                                    <p class="mb-0" style="font-size: 11px">{{date("F d, Y", strtotime($blogs['4']['date']))}}</p>
                                                </div>
                                                <p class="mb-0">
                                                    <i class="fa-solid fa-tags" ></i>
                                                    <span class="ml-1">{{$blogs['4']['blogTag']}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        {{--   GUIDE TO BUY & SELL  --}}
        <section class="guide__sell-buy mb-5">
            <div class="px-5">
                <div class="d-flex justify-content-between gutter-row flex-wrap">
                    <div class="gutter-col p-4 border">
                        <a href="{{route('error-page')}}">
                            <span>HOW TO</span>
                            <h4 class="d-flex align-items-center">Buy with us <span><i class="fas fa-chevron-right"></i></span></h4>
                        </a>
                    </div>
                    <div class="gutter-col p-4 border">
                        <a href="{{route('error-page')}}">
                            <span>HOW TO</span>
                            <h4 class="d-flex align-items-center">Sell with us <span><i class="fas fa-chevron-right"></i></span></h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- MORE FROM ART'S AUCTION --}}
        <section class="more__from-us">
          <div class="p-5">
              <div class="pb-3 more__from-us--1">
                  <h3 class="text-white mb-5">More from Art's Auction</h3>
                  <div class="row">
                      <div class="col-sm-12 col-lg-6 d-flex align-items-center px-4">
                          <div class="row  more__from-us-item">
                              <!-- Button trigger modal -->
                              <div class="col-md-6 more__from-us-item-content p-4" data-toggle="modal" data-target="#modal-more-from-us">
                                  <h5 class="mb-2">Sign up for our weekly email</h5>
                                  <p>All the best feature, the latest news about upcoming auctions, events and more...</p>
                              </div>
                              <div class="col-md-6 p-0 pr-lg-3">
                                  <img width="100%" src="{{asset('./images/banner13.jpg')}}" alt="email_sub-img">
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-6 d-flex items-center px-4 mt-4 mt-lg-0">
                          <a href="{{route('error-page')}}">
                              <div class="row more__from-us-item">
                                  <div class="col-md-6 more__from-us-item-content p-4">
                                      <h5 class="mb-2">Art's Auction Art Finance</h5>
                                      <p>Our in-house Art Finance team is available to design bespoke financial strategies to monetize your art collection</p>
                                  </div>
                                  <div class="col-md-6 p-0">
                                      <img width="100%" src="{{asset('./images/banner14.jpg')}}" alt="finance_info-mess">
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="py-3 more__from-us--2">
                  <div class="row">
                      <div class="col-md-4 mt-sm-2 mt-md-4 mt-lg-0">
                          <img width="100%" src="{{asset('./images/banner15.jpg')}}" alt="example-img">
                      </div>
                      <div class="col-md-4 mt-4 mt-lg-0 ">
                          <img width="100%" src="{{asset('./images/banner16.jpg')}}" alt="example-img">
                      </div>
                      <div class="col-md-4 mt-4 mt-lg-0">
                          <img width="100%" src="{{asset('./images/banner17.jpg')}}" alt="example-img">
                      </div>
                  </div>
              </div>
          </div>
        </section>

        {{--  START MODAL EMAIL  --}}
        <section class="">
            <div class="modal fade" id="modal-more-from-us" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CONTACT WITH US</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="needs-validation" novalidate>
                                <div>
                                    <input aria-label="firstname" type="text" class="form-control" placeholder="First Name" name="firstname" required>
                                    <p class=""></p>
                                </div>
                                <div class="mt-3">
                                    <input aria-label="lastname" type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                                    <p class=""></p>
                                </div>
                                <div class="d-flex justify-content-between my-3 subscribe-email-form">
                                    <div class="email-title-1">
                                        <input  aria-label="email" type="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="h-100 email-title-2">
                                        <div class="input-group">
                                            <select class="custom-select" aria-label="Title" id="inputGroupSelect04" name="title" required>
                                                <option selected>Title</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mrs</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-outline-primary d-inline w-100">Submit</button>
                                </div>
                            </form>
                            <div>
                                <p class="text-center mt-2" style="font-size: 11px;">
                                    We will never pass your personal information to anyone outside of Art's Auction for their own marketing purposes without your consent. For more information about how Sothenby's processes your data.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script-tag')

    <script>
        const lightbox = GLightbox({
            'href': 'https://youtu.be/7Vnr_9y-rUI',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
        });
    </script>
    <script>
        $('.category-slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5
        });

        $('[data-countdown]').each(function() {
            let $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                let dayFormat = `<div class="days"><span class="font-weight-bolder">${event.offset.days < 10 ? "0"+event.offset.days : event.offset.days}</span><p class="mb-0" style="font-size: 10px">days</p></div>`
                let countDownTimeEle = `
                    ${event.offset.days < 1 ? "" : dayFormat}
                    <div class="hours"><span class="font-weight-bolder">${event.offset.hours < 10 ? "0"+event.offset.hours : event.offset.hours}</span><p class="mb-0" style="font-size: 10px">hours</p></div>
                    <div class="minutes"><span class="font-weight-bolder">${event.offset.minutes < 10 ? "0"+event.offset.minutes : event.offset.minutes}</span><p class="mb-0" style="font-size: 10px">minutes</p></div>
                    <div class="seconds"><span class="font-weight-bolder">${event.offset.seconds < 10 ? "0"+event.offset.seconds : event.offset.seconds}</span><p class="mb-0" style="font-size: 10px">seconds</p></div>
                `
                $this.html(countDownTimeEle);
            });
        });
    </script>
@endsection
