@extends('layouts.LayoutPublic')
@section('page-title','Home')
@section('content')
    <div>
        {{--  BANNER  --}}
        <section class="px-5">
            <div class="home-banner position-relative">
                <img width="100%" alt="home_banner" src="{{asset('./images/banner1.jpg')}}">
                <div class="home-banner__content position-absolute">
                    <p>Find, sell and <br> collect truly rare artworks</p>
                    <a class="home-banner-btn" href="{{route('products-page')}}">DISCOVER</a>
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
                            <a href="{{route('products-page',['categoryID'=>$category->id])}}">
                                <div>
                                    <img src="/images_store/categories/{{$category->image}}" class="d-block w-100" alt="{{"category"."-".$category->name}}">
                                </div>
                                <div  class="text-center">
                                    <span><p class="mt-3 m-0">{{$category->name}}</p></span>
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
                <div class="pt-2 d-flex align-items-center justify-content-between flex-wrap">
                    <p class="mt-0">See what's popular across thousands of items</p>
                    <a href="{{route('products-page')}}">
                        <span class="mr-1">Views All</span>
                        <i style="font-size: 10px" class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
                <div>
                    <div class="home-trending-lots">
                        <div class="large-trending-lots h-100% position-relative overflow-hidden rounded">
                            <div class="image overflow-hidden">
                                <img width="100%" height="100%" src="images_store/products/{{$trending_products['0']->image}}" alt="{{$trending_products['0']->name}}">
                                <div class="btn-view-more position-absolute">
                                    <a class="btn btn-primary p-1" href="/products/{{$trending_products['0']->id}}?Art={{str_replace(' ','-',$trending_products['0']->name)}}?Artist={{str_replace(' ','-',$trending_products['0']->artists->name)}}">View more</a>
                                </div>
                            </div>
                            <div class="count-down-container count-down-container--1 position-absolute" data-countdown="{{$trending_products['0']->date_end}}"></div>
                            <div class="upcoming-lot-content">
                                <h4>
                                    <a href="/products/{{$trending_products['0']->id}}?Art={{str_replace(' ','-',$trending_products['0']->name)}}?Artist={{str_replace(' ','-',$trending_products['0']->artists->name)}}" class="text-white p-1">{{$trending_products['0']->name}}</a>
                                </h4>
                                <p class="mb-0">
                                    <i class="fas fa-user-tag"></i>
                                    <span>{{$trending_products['0']->artists->name}}</span>
                                </p>
                                <div class="d-flex">
                                    <p class="mb-0">Starting bid: <span style="font-size: 13px;color: #6EBF8B" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['0']->start_price , 0, ',', '.')}}</span></p>
                                    <p class="mb-0 ml-3">Current bid:
                                        @if($trending_products['0']->current_price > 0)<span style="font-size: 13px;color: #FF9F45" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['0']->current_price , 0, ',', '.')}}</span>
                                        @else <span style="font-size: 13px;color: #EF6D6D" class="font-italic font-weight-bold">No bid</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="small-trending-lots">
                                <div class="small-trending-lots-item position-relative overflow-hidden rounded">
                                    <div class="image overflow-hidden">
                                            <img width="100%" height="100%" src="images_store/products/{{$trending_products['1']->image}}" alt="{{$trending_products['1']->name}}">
                                        <div class="btn-view-more position-absolute">
                                            <a class="btn btn-primary text-white p-1" href="/products/{{$trending_products['1']->id}}?Art={{str_replace(' ','-',$trending_products['1']->name)}}?Artist={{str_replace(' ','-',$trending_products['1']->artists->name)}}">View more</a>
                                        </div>
                                    </div>
                                    <div class="count-down-container count-down-container--2 position-absolute" data-countdown="{{$trending_products['1']->date_end}}"></div>
                                    <div class="upcoming-lot-content">
                                        <h4>
                                            <a href="/products/{{$trending_products['1']->id}}?Art={{str_replace(' ','-',$trending_products['1']->name)}}?Artist={{str_replace(' ','-',$trending_products['1']->artists->name)}}" class="text-white p-1">{{$trending_products['1']->name}}</a>
                                        </h4>
                                        <p class="mb-0">
                                            <i class="fas fa-user-tag"></i>
                                            <span>{{$trending_products['1']->artists->name}}</span></p>
                                        <div class="d-flex">
                                            <p class="mb-0">Starting bid: <span style="font-size: 13px;color: #6EBF8B" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['1']->start_price , 0, ',', '.')}}</span></p>
                                            <p class="mb-0 ml-3">Current bid:
                                                @if($trending_products['1']->current_price > 0)<span style="font-size: 13px;color: #FF9F45" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['1']->current_price, 0, ',', '.')}}</span>
                                                @else <span style="font-size: 13px;color: #EF6D6D" class="font-italic font-weight-bold">No bid</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="small-trending-lots-item position-relative overflow-hidden rounded trending-lot-load-more">
                                    <div class="image overflow-hidden">
                                            <img width="100%" height="100%" src="images_store/products/{{$trending_products['2']->image}}" alt="{{$trending_products['2']->name}}">
                                        <div class="btn-view-more position-absolute">
                                            <a class="btn btn-primary text-white p-1" href="/products/{{$trending_products['2']->id}}?Art={{str_replace(' ','-',$trending_products['2']->name)}}?Artist={{str_replace(' ','-',$trending_products['2']->artists->name)}}">View more</a>
                                        </div>
                                    </div>
                                    <div class="count-down-container count-down-container--2 position-absolute" data-countdown="{{$trending_products['2']->date_end}}"></div>
                                    <div class="upcoming-lot-content">
                                        <h4>
                                            <a href="/products/{{$trending_products['2']->id}}?Art={{str_replace(' ','-',$trending_products['2']->name)}}?Artist={{str_replace(' ','-',$trending_products['2']->artists->name)}}" class="text-white p-1">{{$trending_products['2']->name}}</a>
                                        </h4>
                                        <p class="mb-0">
                                            <i class="fas fa-user-tag"></i>
                                            <span>{{$trending_products['2']->artists->name}}</span></p>
                                        <div class="d-flex">
                                            <p class="mb-0">Starting bid: <span style="font-size: 13px;color: #6EBF8B" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['2']->start_price, 0, ',', '.')}}</span></p>
                                            <p class="mb-0 ml-3">Current bid:
                                                @if($trending_products['2']->current_price > 0)<span style="font-size: 13px;color: #FF9F45" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['2']->current_price, 0, ',', '.')}}</span>
                                                @else <span style="font-size: 13px;color: #EF6D6D" class="font-italic font-weight-bold">No bid</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="small-trending-lots-item position-relative overflow-hidden rounded trending-lot-load-more">
                                    <div class="image overflow-hidden">
                                            <img width="100%" height="100%" src="images_store/products/{{$trending_products['3']->image}}" alt="{{$trending_products['3']->name}}">
                                        <div class="btn-view-more position-absolute">
                                            <a class="btn btn-primary text-white p-1" href="/products/{{$trending_products['3']->id}}?Art={{str_replace(' ','-',$trending_products['3']->name)}}?Artist={{str_replace(' ','-',$trending_products['3']->artists->name)}}">View more</a>
                                        </div>
                                    </div>
                                    <div class="count-down-container count-down-container--2 position-absolute" data-countdown="{{$trending_products['3']->date_end}}"></div>
                                    <div class="upcoming-lot-content">
                                        <h4>
                                            <a href="/products/{{$trending_products['3']->id}}?Art={{str_replace(' ','-',$trending_products['3']->name)}}?Artist={{str_replace(' ','-',$trending_products['3']->artists->name)}}" class="text-white p-1">{{$trending_products['3']->name}}</a>
                                        </h4>
                                        <p class="mb-0">
                                            <i class="fas fa-user-tag"></i>
                                            <span>{{$trending_products['3']->artists->name}}</span></p>
                                        <div class="d-flex">
                                            <p class="mb-0">Starting bid: <span style="font-size: 13px;color: #6EBF8B" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['3']->start_price, 0, ',', '.')}}</span></p>
                                            <p class="mb-0 ml-3">Current bid:
                                                @if($trending_products['3']->current_price > 0)<span style="font-size: 13px;color: #FF9F45" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['3']->current_price, 0, ',', '.')}}</span>
                                                @else <span style="font-size: 13px;color: #EF6D6D" class="font-italic font-weight-bold">No bid</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="small-trending-lots-item position-relative overflow-hidden rounded trending-lot-load-more">
                                    <div class="image overflow-hidden">
                                        <img width="100%" height="100%" src="images_store/products/{{$trending_products['4']->image}}" alt="{{$trending_products['4']->name}}">
                                        <div class="btn-view-more position-absolute">
                                            <a href="/products/{{$trending_products['4']->id}}?Art={{str_replace(' ','-',$trending_products['4']->name)}}?Artist={{str_replace(' ','-',$trending_products['4']->artists->name)}}" class="btn btn-primary text-white p-1">View more</a>
                                        </div>
                                    </div>
                                    <div class="count-down-container count-down-container--2 position-absolute" data-countdown="{{$trending_products['4']->date_end}}"></div>
                                    <div class="upcoming-lot-content">
                                        <h4>
                                            <a href="/products/{{$trending_products['4']->id}}?Art={{str_replace(' ','-',$trending_products['4']->name)}}?Artist={{str_replace(' ','-',$trending_products['4']->artists->name)}}" class="text-white p-1">{{$trending_products['4']->name}}</a>
                                        </h4>
                                        <p class="mb-0">
                                            <i class="fas fa-user-tag"></i>
                                            <span>{{$trending_products['4']->artists->name}}</span></p>
                                        <div class="d-flex">
                                            <p class="mb-0">Starting bid: <span style="font-size: 13px;color: #6EBF8B" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['4']->start_price, 0, ',', '.')}}</span></p>
                                            <p class="mb-0 ml-3">Current bid:
                                                @if($trending_products['4']->current_price > 0)<span style="font-size: 13px;color: #FF9F45" class="font-italic font-weight-bold"><i class="fad fa-dollar-sign"></i>{{number_format($trending_products['4']->start_price, 0, ',', '.')}}</span>
                                                @else <span style="font-size: 13px;color: #EF6D6D" class="font-italic font-weight-bold">No bid</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 text-center" id="home-trending-auctions-btn">
                <button class="btn btn-primary p-1" id="btn-load-more-trending-lot">Load more</button>
            </div>
        </section>

        {{--  UPCOMMING AUCTIONS  --}}
        <section class="px-5 py-4 home-upcoming-auctions mt-5">
            <div>
                <h3 class="main-section-heading position-relative">Upcoming lot auctions</h3>
                <div class="row mt-4">
                    @foreach($upcoming_products as $key => $upcoming_product)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 {{$key >= 3 ? "load-more-upcoming-lots" : ""}}">
                            <a href="/products/{{$upcoming_product->id}}?Art={{str_replace(' ','-',$upcoming_product->name)}}?Artist={{str_replace(' ','-',$upcoming_product->artists->name)}}">
                                <div class="upcoming-lot-item overflow-hidden">
                                    <div class="upcoming-lot-thumbnail position-relative">
                                        <img src="/images_store/products/{{$upcoming_product->image}}" alt="{{$upcoming_product->name}}">
                                        <div class="btn-zoom-lot position-absolute">
                                            <button>View more</button>
                                        </div>
                                        <div class="count-down-container position-absolute" data-countdown="{{$upcoming_product->date_start}}"></div>
                                    </div>
                                    <div class="upcoming-lot-content">
                                        <h5 style="color: #F2AA4CFF">{{$upcoming_product->name}}</h5>
                                        <p class="m-0">Starting bid: <span class="ml-2 font-italic" style="text-decoration: underline">${{number_format($upcoming_product->start_price, 0, ',', '.')}}</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="text-center d-block d-md-none">
                    <button class="p-1 btn btn-primary" id="btn-load-more-upcoming-lot">Load more</button>
                </div>
            </div>
        </section>

        {{--   START BUY NOW  --}}
        <section class="buy__now mt-4">
            <div class="px-5 h-100">
                <div class="row row-bg m-0">
                    <div class="col-sm-12 col-md-7 px-4 py-5">
                        <a href="{{route('products-page')}}">
                            <h3>Buy now</h3>
                            <p class="buy__now-text">Buy or sell fine art on your schedule</p>
                            <p class="buy__now-btn mt-4 d-inline-block">Browser Auction Now</p>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-5 p-0 position-relative">
                        <a href="#" class="glightbox">
                            <div class="position-absolute play-btn"><i class="fas fa-play fa-2x"></i></div>
                            <img height="100%" width="100%" src="{{asset('./images/banner7.jpg')}}" alt="banner-img7">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{--  FEATURE STORIES & BLOG  --}}
        <section class="p-5">
            <div>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h3 class="main-section-heading position-relative">Feature stories & blog</h3>
                    <a href="{{route('blog-page')}}">
                        <span>View All</span>
                        <i style="font-size: 10px" class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
                    <div class="mt-4">
                        <div class="main-blog-container">

                            <div class="left-side left-main-blog">
                                <div class="image rounded overflow-hidden">
                                    <img height="100%" width="100%" src="/images_store/blogs/{{$blogs['0']->image}}" alt="{{$blogs['0']->title}}">
                                </div>
                                <div class="blog-content mt-2">
                                    <a href="{{route('blog-detail-page',$blogs[0]->id)}}"><h5>{{$blogs['0']->title}}</h5></a>
                                    <div class="d-flex justify-content-between align-items-center add-shadow">
                                        <p class="mb-0">
                                            <i class="fa-solid fa-tags text-danger" ></i>
                                            <span class="ml-1">{{$blogs['0']->tag}}</span>
                                        </p>
                                        <p class="mb-0 font-italic" style="font-size: 11px">{{date("F d, Y", strtotime($blogs['0']->created_at))}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="right-side">
                                    <div class="middle-main-blog">
                                        <div class="image rounded overflow-hidden">
                                            <img height="100%" width="100%" src="/images_store/blogs/{{$blogs['1']->image}}" alt="{{$blogs['1']->title}}">
                                        </div>
                                        <div class="content my-2">
                                            <a href="{{route('blog-detail-page',$blogs[1]->id)}}"><h5>{{$blogs['1']->title}}</h5></a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-0">
                                                    <i class="fa-solid fa-tags text-danger"></i><span class="ml-1">{{$blogs['1']->tag}}</span>
                                                </p>
                                                <p class="mb-0 font-italic" style="font-size: 11px">{{date("F d, Y", strtotime($blogs['1']->created_at))}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="right-main-blog">
                                        <div class="right-main-blog-1">
                                            <div class="image rounded overflow-hidden">
                                                <img height="100%" width="100%" src="/images_store/blogs/{{$blogs['2']->image}}" alt="{{$blogs['2']->title}}">
                                            </div>
                                            <div class="content pt-2">
                                                <a href="{{route('blog-detail-page',$blogs[2]->id)}}"><h5>{{$blogs['2']->title}}</h5></a>
                                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                    <p class="mb-0">
                                                        <i class="fa-solid fa-tags text-danger" ></i>
                                                        <span class="ml-1">{{$blogs['2']->tag}}</span>
                                                    </p>
                                                    <p class="mb-0 font-italic" style="font-size: 11px">{{date("F d, Y", strtotime($blogs['2']->created_at))}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="right-main-blog-1">
                                            <div class="image rounded overflow-hidden">
                                                <img height="100%" width="100%" src="/images_store/blogs/{{$blogs['3']->image}}" alt="{{$blogs['3']->title}}">
                                            </div>
                                            <div class="content pt-2">
                                                <a href="{{route('blog-detail-page',$blogs[3]->id)}}"><h5>{{$blogs['3']->title}}</h5></a>
                                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                    <p class="mb-0 mr-3">
                                                        <i class="fa-solid fa-tags text-danger" ></i>
                                                        <span class="ml-1">{{$blogs['3']->tag}}</span>
                                                    </p>
                                                    <p class="mb-0 font-italic" style="font-size: 11px">{{date("F d, Y", strtotime($blogs['3']->created_at))}}</p>
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
        //#######################
        $('.category-slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive:[
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                }
            ],
        });
        //#######################
        $('[data-countdown]').each(function() {
            let $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                if(event.type === "update"){
                    let dayFormat = `<div class="days"><span class="font-weight-bolder">${event.offset.totalDays < 10 ? "0"+event.offset.totalDays : event.offset.totalDays}</span><p class="mb-0" style="font-size: 10px">days</p></div>`
                    let countDownTimeEle = `
                        ${dayFormat}
                        <div class="hours"><span class="font-weight-bolder">${event.offset.hours < 10 ? "0"+event.offset.hours : event.offset.hours}</span><p class="mb-0" style="font-size: 10px">hours</p></div>
                        <div class="minutes"><span class="font-weight-bolder">${event.offset.minutes < 10 ? "0"+event.offset.minutes : event.offset.minutes}</span><p class="mb-0" style="font-size: 10px">minutes</p></div>
                        <div class="seconds"><span class="font-weight-bolder">${event.offset.seconds < 10 ? "0"+event.offset.seconds : event.offset.seconds}</span><p class="mb-0" style="font-size: 10px">seconds</p></div>
                    `
                    $this.html(countDownTimeEle);
                }else{
                   event.currentTarget.style.display = "none";
                }
            });
        });
        //#######################
        $('#btn-load-more-upcoming-lot').click(function (){
            $('.load-more-upcoming-lots').each(function (){
                $(this).addClass('active');
            });
            $(this).hide();
        });
        $('#btn-load-more-trending-lot').click(function (){
            $('.trending-lot-load-more').each(function (){
                $(this).addClass('active');
            });
            $(this).hide();
        });
        //#######################
    </script>
@endsection
