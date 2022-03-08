@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','User Info')

@section('navbar')
    @include('components.navbarUser')
@endsection

@section('header')
    @include('components.headerUser')
@endsection

@section('content')
    <section class="user-cart-container">
        {{--  message  --}}
        <div class="response-message position-fixed" style="right: 1rem;top: 5.5rem;z-index: 1000">
            @if(session('create-artist'))
                <div class="alert alert-success">{{session('create-artist')}}</div>
            @endif
            @if(session('error-pay'))
                <div class="alert alert-danger">{{session('error-pay')}}</div>
            @endif
        </div>
        <div class="pt-3 px-4">
            <div class="user-cart-filter">
                <form id="user-cart-search-form">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-sm-0">
                            <input  name="name" class="form-control" aria-label="product_name" placeholder="Search by product name">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-sm-0">
                            <select class="form-control h-100" aria-label="bid-status" name="bid-status">
                                <option value="">Choose Auction Status</option>
                                <option value="1">Bidding</option>
                                <option value="3">Payment</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-md-2 mt-2 mt-md-0">
                            <select class="form-control h-100" aria-label="sort-highest" name="sort-highest">
                                <option value="">Sort Highest Price</option>
                                <option value="0">Price Ascending</option>
                                <option value="1">Price Descending</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-md-2 mt-2 mt-md-0">
                            <select class="form-control h-100" aria-label="sort-time-bid" name="sort-timeBid">
                                <option value="">Sort Time Bid</option>
                                <option value="0">Newest</option>
                                <option value="1">Oldest</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-md-2 mt-2 mt-md-0">
                            <select class="form-control h-100" aria-label="sort-time-bid-end" name="sort-timeBidEnd">
                                <option value="">Sort Time Bid End</option>
                                <option value="0">Nearly end</option>
                                <option value="1">More time</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex mt-2 justify-content-end">
                            <button type="submit" class="btn btn-submit font-weight-bold">Search</button>
                            <button id="btn-clear-search" type="button" class="btn btn-clear font-weight-bold ml-2">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mt-3">
                <div class="user-cart-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Stt</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Product</th>
                                <th scope="col">Your bid</th>
                                <th scope="col">Highest bid</th>
                                <th scope="col">Time of bid</th>
                                <th scope="col">End bid in</th>
                                <th scope="col">Bid status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody class="user-carts position-relative"></tbody>
                        </table>
                    </div>
                </div>
                <div class="no-data-container p-3 text-center"></div>
            </div>
            <div class="pagination-custom mt-auto">
                <ul class="d-flex pb-3"></ul>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="modalHistoryBid" tabindex="-1" aria-labelledby="bidLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title font-italic" id="bidLabel">
                        <i class="ti-briefcase"></i>
                        <span>History Bid</span>
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Amount of bid</th>
                            <th scope="col">Date bid</th>
                        </tr>
                        </thead>
                        <tbody id="history-bid-container"></tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('script_tag')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
        });
        //Variables
        let accountID       = {!! json_decode(Auth::user()->id) !!};
        let userCartAuction = $('.user-carts');
        let historyUserProductBidContainer = $('#history-bid-container');
        let cartPagination  = $('.pagination-custom ul');
        let cartNoDataContainer = $(".no-data-container");

        let userCardFilter ={
            productName: undefined,
            timeEndBid:undefined,
            timeBid:undefined,
            highestPrice:undefined,
            bidStatus:undefined,
            page:1
        }

        getCartUserAuction(userCardFilter);
        function getCartUserAuction(search){
            cartNoDataContainer.hide();
            $.ajax({
                url:`/userCart`,
                method:'GET',
                data:{
                    account:accountID,
                    productName:search.productName,
                    timeEndBid:search.timeEndBid,
                    timeBid:search.timeBid,
                    highestPrice:search.highestPrice,
                    bidStatus:search.bidStatus,
                    page:search.page
                },
                success:result =>{
                        console.log(result);
                    if(result.data.length > 0){
                        userCartAuction.html("")
                        result.data.forEach((item,index) =>{
                            let textBidStatus = item.bid_status_id === 1 ? 'bidding' : 'payment'
                            let cartItem = `
                            <tr>
                                <td>${(result.currentPage - 1)*result.perPage + index + 1}</td>
                                <td><img width="50px" class="rounded" src="/images_store/products/${item.image}" alt="${item.name}"></td>
                                <td ><a class="text-dark" href="/products/${item.product_id}?Art=${item.name}"><span class="product-cart-user-name">${item.name}</span></a></td>
                                <td style="color: rebeccapurple;font-size: 12px" class="font-italic">${formatter.format(item.max_bid)}</td>
                                <td style="color: #DD4A48;font-size: 12px" class="font-italic">${formatter.format(item.current_price)}</td>
                                <td style="font-size: 12px" class="text-secondary">${item.created_at}</td>
                                <td style="font-size: 12px" class="text-secondary">
                                    <div class="d-flex justify-content-between" data-countdown="${item.date_end}"></div>
                                </td>
                                <td><span class="${item.bid_status_id === 1 ? 'bidding' : 'payment'}">${textBidStatus}</span></td>
                                <td class="d-flex">
                                      <div><a class="text-success" onclick="getHistoryBidUser(${item.product_id})" data-toggle="modal" data-target="#modalHistoryBid"><i class="ti-eye border-right pr-1"></i></a></div>
                                      <div><a class="text-primary" onclick="payAuctionArt(${item.product_id},${item.bid_status_id})"><i class="ti-money border-right px-1"></i></a></div>
                                      <div class="text-danger" onclick="giveUpAuctionArt(${item.product_id})"><i class="ti-close pl-1"></i></div>
                                </td>
                            </tr>
                            `
                            userCartAuction.append(cartItem);
                            //
                            $('[data-countdown]').each(function() {
                                let $this = $(this), finalDate = $(this).data('countdown');
                                $this.countdown(finalDate, function(event) {
                                    let dayFormat = `<div class="days d-flex flex-column align-items-center"><span class="font-weight-bolder">${event.offset.totalDays < 10 ? "0"+event.offset.totalDays : event.offset.totalDays}</span><p class="mb-0" style="font-size: 10px">days</p></div>`
                                    let countDownTimeEle = `
                                        ${dayFormat}
                                        <div class="hours d-flex flex-column align-items-center"><span class="font-weight-bolder">${event.offset.hours < 10 ? "0"+event.offset.hours : event.offset.hours}</span><p class="mb-0" style="font-size: 10px">hours</p></div>
                                        <div class="minutes d-flex flex-column align-items-center"><span class="font-weight-bolder">${event.offset.minutes < 10 ? "0"+event.offset.minutes : event.offset.minutes}</span><p class="mb-0" style="font-size: 10px">minutes</p></div>
                                        <div class="seconds d-flex flex-column align-items-center"><span class="font-weight-bolder">${event.offset.seconds < 10 ? "0"+event.offset.seconds : event.offset.seconds}</span><p class="mb-0" style="font-size: 10px">seconds</p></div>
                                    `
                                    $this.html(countDownTimeEle);
                                });
                            });
                        });
                        //#######
                        cartPagination.html('');
                        const totalPage = result.total;
                        const numberPerPage = result.perPage;
                        if(totalPage > 10){
                            for(let i =1; i<= Math.ceil(totalPage/numberPerPage);i++){
                                let pageItem = `<li  class="page-item-custom ${i === search.page ? "active" : ""}" onclick="getCartUserAuction({account:${accountID},productName:${search.productName},timeEndBid:${search.timeEndBid},timeBid:${search.timeBid},highestPrice:${search.highestPrice},bidStatus:${search.bidStatus},page:${i}})">${i}</li>`;
                                cartPagination.append(pageItem);
                            }
                        }
                    }else{
                        userCartAuction.html('');
                        cartPagination.html('');
                        cartNoDataContainer.show().html(`
                                <i style="font-size: 30px" class="ti-package"></i>
                                <p>No data found</p>
                        `)
                    }
                }
            })
        }

        $('#user-cart-search-form').submit(function (e){
            e.preventDefault();
            let formData =  $('#user-cart-search-form').serializeArray();
            console.log(formData);
            getCartUserAuction({
                productName:formData[0].value ? formData[0].value : undefined,
                timeEndBid:formData[4].value ? formData[4].value : undefined,
                timeBid:formData[3].value ? formData[3].value : undefined,
                highestPrice:formData[2].value ? formData[2].value :  undefined,
                bidStatus:formData[1].value ? formData[1].value : undefined,
                page:1
            })
        });

        $('#btn-clear-search').click(function (){
            $('#user-cart-search-form')[0].reset();
            getCartUserAuction(userCardFilter);
        });

        function getHistoryBidUser(productID){
            $.ajax({
                url:`/userProductHistoryBid`,
                method:'GET',
                data:{account:accountID,product:productID},
                success:result =>{
                    historyUserProductBidContainer.html("");
                    if(result.data.data.length >0){
                        result.data.data.forEach((item,index) =>{
                            let historyItem =
                                `   <tr>
                                        <th scope="row">${(result.currentPage - 1) * result.perPage + index + 1}</th>
                                        <td style="font-size: 14px;color: rgba(8,54,61,0.82)" class="font-italic">${formatter.format(item.amount_of_bid)}</td>
                                        <td style="color: mediumpurple;font-size: 14px" class="font-italic">${item.created_at}</td>
                                    </tr>`
                            historyUserProductBidContainer.append(historyItem);
                        })
                    }
                }
            })
        }

        function payAuctionArt(productID,status){
            if(status === 1){
                setTimeout(clearMessage,1000);
                $('.response-message').html('').append(`
                    <div class="alert alert-danger">Can not payment now</div>
                `)
            }else{
                window.location.replace(`http://127.0.0.1:8000/user/checkout/${productID}`);
            }
        }

        function giveUpAuctionArt(productID){
            $.ajax({
                url:`/giveUpAuctionBid`,
                method:`GET`,
                data:{product:productID,account:accountID},
                success:result=>{
                    if(result.status === 1){

                    }
                }
            })
        }
        //
        setTimeout(clearMessage,1000);
        function clearMessage(){
            $('.response-message').addClass('active')
            setTimeout(()=>{$('.response-message').removeClass('active')},3000);
        }
    </script>
@endsection




