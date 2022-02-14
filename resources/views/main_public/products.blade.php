@extends('layouts.LayoutPublic')
@section('page-title','Products')
@section('content')
    <section>
    {{--  BANNER  --}}
        <section class="products_banner px-5">
            <img width="100%" height="600px" src="https://images.unsplash.com/photo-1579695114441-573c26d8de54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1173&q=80" alt="">
            <div></div>
        </section>
    {{--  FILTER  --}}
        <section class="px-5 mt-4">
            <div class="row">
                <div class="col-12 col-sm-4 col-lg-2 d-flex align-items-center">
                    <h4 class="mr-2 mb-0 font-weight-bold">Filter by</h4>
                    <div class="border d-block d-xl-none auction-lot-filter-btn"><i class="fa-solid fa-filter"></i></div>
                </div>
                <div class="col-12 col-sm-8 col-lg-10 d-flex align-items-center mt-2 mt-sm-0 justify-content-sm-end">
                    <div class="mr-3">Sort by</div>
                    <div style="min-width: 35%">
                        <input class="form-control w-100" type="text" placeholder="Search by name..." aria-label="search">
                    </div>
                </div>
            </div>
        </section>
    {{--  LIST PRODUCTS  --}}
        <section class="px-5 mt-4">
            <div class="row position-relative">
                {{--    --}}
                <div class="lot-filter-container d-xl-block col-xl-2 border-right">
                    <div class="mb-2"><h5 class="border-bottom pb-2"><i class="fa-brands fa-galactic-republic"></i> <span class="font-weight-bold">Filter price</span></h5></div>
                    <div class="mb-2">
                        <h5 class="border-bottom pb-2"><i class="fa-brands fa-galactic-republic"></i> <span class="font-weight-bold">Lots Status</span></h5>
                        <div class="form-status">
                            <div>
                                <input id="6" class="position-relative" style="top: 2px" type="checkbox">
                                <label for="6">Live Now</label>
                            </div>
                            <div>
                                <input id="8" class="position-relative" style="top: 2px" type="checkbox">
                                <label for="8">Upcoming Now</label>
                            </div>
                            <div>
                                <input id="7" class="position-relative" style="top: 2px" type="checkbox">
                                <label for="7"></label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <h5 class="border-bottom pb-2">
                            <i class="fa-brands fa-galactic-republic"></i>
                            <span class="font-weight-bold">Category</span>
                        </h5>
                        <div class="form-category">
                            @foreach($categories as $category)
                                <div>
                                    <input id="{{$category->category_code}}" name="category" class="position-relative" style="top: 2px" type="checkbox">
                                    <label for="{{$category->category_code}}">{{$category->name}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-2">
                        <h5 class="border-bottom pb-2">
                            <i class="fa-brands fa-galactic-republic"></i>
                            <span class="font-weight-bold">Artist</span>
                        </h5>
                        <div class="form-artist">
                            @foreach($artists as $artist)
                                <div>
                                    <input id="{{$artist->name.'-'.$artist->id}}" name="artist" class="position-relative" style="top: 2px" type="checkbox">
                                    <label for="{{$artist->name.'-'.$artist->id}}">{{$artist->name}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-outline-primary">Clear all</button>
                    </div>
                </div>
                {{--    --}}
                <div class="col-12 col-xl-10">
                    <div class="row">
                        @for($i = 0; $i < 8; $i++)
                            <div class="col-12 col-sm-6 col-md-3 col-xl-4">
                                <div class="auction-lot-item mb-3">
                                    <a href="#">
                                        <div class="lot-thumbnail position-relative overflow-hidden">
                                            <img class="border" style="max-height: 300px" width="100%" src="https://art.art/wp-content/uploads/2021/09/fatcat_art.jpg" alt=""/>
                                            <div class="lot-id-container d-flex mb-2 position-absolute" style="top: 1rem;left: 10px">
                                                <p class="m-0 border p-1 font-weight-bold text-white rounded" style="background: rgba(0,0,0,0.3)">LOT <span class="lot-id">1</span></p>
                                            </div>
                                            <div class="count-down-container count-down-container--lot position-absolute p-0"  data-countdown="2022/02/16"></div>
                                            <div class="auction-lot-item-btn position-absolute"><button class="border-0 rounded">View bid</button></div>
                                        </div>
                                        <div class="lot-content mt-2">
                                            <h5 class="lot-content-name font-weight-bold">Konstantin Dmitriyevich Balmont (1867-1942)</h5>
                                            <p class="lot-content-artist font-italic text-secondary mb-2">A postcard from American. 1905</p>
                                            <div class="d-flex justify-content-between">
                                                <p class="lot-content-start-price mb-3">
                                                    <span class="font-weight-bold mr-1 d-inline-block" style="width: 80px;color: black;font-size: 13px">Starting bid: </span>
                                                    <span class="text-success font-italic border border-success p-1 rounded font-weight-bold" style="font-size: 12px">$<span class="price">1000</span></span>
                                                </p>
                                                <p class="lot-content-current-bid">
                                                    <span class="font-weight-bold mr-1 d-inline-block" style="width: 80px;color: black;font-size: 13px">Current bid:</span>
                                                    <span class="text-danger font-italic font-weight-bold border rounded border-danger p-1" style="font-size: 12px">$<span class="price">1200</span></span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
@section('script-tag')
    <script>
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
    <script>
        const openFilterButtonEle = document.querySelector('.auction-lot-filter-btn');
        openFilterButtonEle.addEventListener('click',()=>{
            document.querySelector('.lot-filter-container').classList.toggle('active');
        });
    </script>
@endsection
