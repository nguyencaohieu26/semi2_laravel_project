@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Bids')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="bids-admin-container">
        {{--  message  --}}
        <div class="response-message position-fixed" style="right: 1rem;top: 5.5rem;z-index: 1000"></div>
        <div class="py-3 px-4 d-flex flex-column">
            <div class="bids-admin-filter">
                <form id="bids-admin-search-form">
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
            <div class=" mt-3">
                <div class="bids-admin-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Stt</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">User Email</th>
                                <th scope="col">Newest Bid</th>
                                <th scope="col">Create At</th>
                                <th scope="col">Auction end in</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-right pr-3">Action</th>
                            </tr>
                            </thead>
                            <tbody class="bids-list position-relative"></tbody>
                        </table>
                    </div>
                </div>
                <div class="no-data-container p-3 text-center"></div>
            </div>
            <div class="pagination-custom mt-2">
                <ul class="d-flex"></ul>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="modalHistoryProductBid" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h6 class="modal-title font-italic" id="modal-title">
                        <i class="ti-file"></i>
                        <span>History Product Bids</span>
                    </h6>
                    <div class="ml-3 d-none d-md-block w-50">
                        <form id="search-form-history" class="d-flex align-items-center">
                            <input aria-label="search-user-email-input" id="search-user-email-input" class="form-control" type="text" placeholder="Search user email..."/>
                            <button class="btn-submit border-0 rounded ml-2">Search</button>
                        </form>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">User email</th>
                            <th scope="col">Amount of bid</th>
                            <th scope="col">Date bid</th>
                        </tr>
                        </thead>
                        <tbody id="table-history-bid"></tbody>
                    </table>
                    <div>
                        <nav class="pagination-container" aria-label="Page navigation example">
                            <ul class="pagination"></ul>
                        </nav>
                    </div>
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
        let bidProductContainer         = $('.bids-list ');
        let paginationBidProduct        = $('.pagination-custom ul');
        let noDataContainerBidProduct   = $('.no-data-container');
        let tableHistoryBidContainer    = $('#table-history-bid');
        let paginationBidHistoryList    = $('.pagination-container ul');

        let searchBidProductFilter = {
            productName:undefined,
            email:undefined,
            sortPrice:undefined,
            sortCreateAt:undefined,
            sortDateEnd:undefined,
            page:1
        }
        getProductAuction(searchBidProductFilter);
        function getProductAuction(search){
            $.ajax({
                url:`/getProductBid`,
                method:'GET',
                data:{
                    productName:search.productName,
                    email:search.email,
                    sortPrice:search.sortPrice,
                    sortCreateAt:search.sortCreateAt,
                    sortDateEnd:search.sortDateEnd,
                    page:search.page
                },
                success:result=>{
                    noDataContainerBidProduct.hide();
                    if(result.data.length > 0){
                        bidProductContainer.html("");
                        result.data.forEach((item,index) =>{
                            console.log(item);
                            let date = new Date(item.date_end);
                            let textBidStatus = item.bid_status_id === 1 ? 'bidding' : 'payment'
                            let itemBid = `
                             <tr>
                                    <th scope="row">${(result.currentPage - 1) * result.perPage + index + 1}</th>
                                    <td ><span class="product-bid-name">${item.name}</span></td>
                                    <td class="font-italic" style="font-size: 12px;color: #0b315b">${item.email}</td>
                                    <td class="font-italic" style="color: mediumpurple;font-size: 12px">${formatter.format(item.max_bid)}</td>
                                    <td style="font-size: 12px" class="font-italic text-secondary">${item.created_at}</td>
                                    <td style="font-size: 12px" class="text-secondary">
                                        <div class="d-flex justify-content-between" data-countdown="${item.date_end}"></div>
                                    </td>
                                    <td><span class="${item.bid_status_id === 1 ? 'bidding' : 'payment'}">${textBidStatus}</span></td>
                                    <td class="d-flex align-items-center justify-content-end">
                                        <div><a class="text-success" onclick="getProductBidsList(${item.product_id})" data-toggle="modal" data-target="#modalHistoryProductBid"><i class="ti-eye border-right pr-1"></i></a></div>
                                        <div><a class="text-primary" onclick="paymentBidAuction(${date.getTime()},${item.id},${item.product_id},${item.bid_status_id})"><i class="ti-medall border-right px-1"></i></a></div>
                                        <div style="position: relative;top: -1px"><a class="text-danger"><i class="fa fa-pause pl-1" aria-hidden="true"></i></a></div>
                                    </td>
                             <tr>
                            `
                            bidProductContainer.append(itemBid);
                        })
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
                        paginationBidProduct.html('');
                        const totalPage = result.total;
                        const numberPerPage = result.perPage;
                        if(totalPage > 10){
                            for(let i =1; i<= Math.ceil(totalPage/numberPerPage);i++){
                                let pageItem = `<li  class="page-item-custom ${i === search.page ? "active" : ""}" onclick="getProductAuction({productName:${search.productName},email:${search.email},sortPrice:${search.sortPrice},sortCreateAt:${search.sortCreateAt},sortDateEnd:${search.sortDateEnd},page:${i}})">${i}</li>`;
                                paginationBidProduct.append(pageItem);
                            }
                        }
                    }else{
                        bidProductContainer.html('');
                        paginationBidProduct.html('');
                        noDataContainerBidProduct.show().html(`
                                <i style="font-size: 30px" class="ti-package"></i>
                                <p>No data found</p>
                        `)
                    }
                }
            })
        }
        //
        function getProductBidsList(productID,page = 1,emailSearch = undefined){
            $.ajax({
                url:`/getHistoryBid`,
                method:'GET',
                data:{product:productID,page:page,emailSearch:emailSearch},
                success:result=>{
                    console.log(result);
                    tableHistoryBidContainer.html('');
                    if(result.data.data.length > 0){
                        result.data.data.forEach((item,index) =>{
                            let historyItem = `
                                <tr>
                                    <th scope="row">${(result.currentPage - 1)*result.perPage + index + 1}</th>
                                    <td style="font-size: 13px;color: #0f77e5" class="font-italic">${item.email}</td>
                                    <td style="font-size: 13px;color: palevioletred" class="font-italic">${formatter.format(item.amount_of_bid)}</td>
                                    <td style="font-size: 13px" class="text-secondary font-italic">${item.created_at}</td>
                                </tr>
                            `
                            tableHistoryBidContainer.append(historyItem);
                        });
                        paginationBidHistoryList.html("");
                        console.log(Math.ceil(result.total/result.perPage));
                        if(result.total > 12){
                            for(let i = 1; i <= Math.ceil(result.total/result.perPage);i++){
                                let pageItem = `<li class="page-item ${i === page ? "active" : ''}"><a class="page-link"  onclick="getProductBidsList(${productID},${i},undefined)" href="#">${i}</a></li>`;
                                paginationBidHistoryList.append(pageItem);
                            }
                        }
                    }
                }
            });
            $('#search-form-history').submit(e=>{
                e.preventDefault();
                getProductBidsList(productID,1,$('#search-user-email-input').val());
            })
        }
        //
        function paymentBidAuction(dateEnd,bidID,productID,bidStatusGet){
            console.log(bidStatusGet);
            //check date end
            if(bidStatusGet !== 3){
                let today = new Date();
                if(today.getTime() >= dateEnd){
                    $.ajax({
                        url:`/changeBidAccountStatus`,
                        method:'GET',
                        data:{bidID,bidStatus:3,productID},
                        success:result =>{
                            getProductAuction(searchBidProductFilter);
                            $('.response-message').html('').addClass('active').append(`
                                        <div class="alert alert-success">${result.message}</div>`);
                            setTimeout(()=>{$('.response-message').removeClass('active')},4000);
                        }
                    });
                }else{
                    $('.response-message').html('').addClass('active').append(`
                                        <div class="alert alert-danger">Auction time is not end!</div>`);
                    setTimeout(()=>{$('.response-message').removeClass('active')},4000);
                }
            }else{
                $('.response-message').html('').addClass('active').append(`
                                        <div class="alert alert-danger">Email already send to the user</div>`);
                setTimeout(()=>{$('.response-message').removeClass('active')},4000);
            }
        }

    </script>
@endsection
