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
        <div class="pt-3 px-4">
            <div class="user-cart-filter"></div>
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

        getCartUserAuction();
        function getCartUserAuction(){
            $.ajax({
                url:`/userCart`,
                method:'GET',
                data:{account:accountID,},
                success:result =>{
                    if(result.data.length > 0){
                        result.data.forEach((item,index) =>{
                            console.log(item);
                            let cartItem = `
                            <tr>
                                <td>${index + 1}</td>
                                <td><img width="50px" class="rounded" src="/images_store/products/${item.image}" alt="${item.name}"></td>
                                <td><a href="/products/${item.product_id}?Art=${item.name}"></a>${item.name}</td>
                                <td style="color: rebeccapurple;font-size: 12px" class="font-italic">${formatter.format(item.max_bid)}</td>
                                <td style="color: #DD4A48;font-size: 12px" class="font-italic">${formatter.format(item.current_price)}</td>
                                <td style="font-size: 12px" class="text-secondary">${item.created_at}</td>
                                <td style="font-size: 12px" class="text-secondary">${item.date_end}</td>
                                <td class="d-flex">
                                      <div><a class="text-success" onclick="getHistoryBidUser(${item.product_id})" data-toggle="modal" data-target="#modalHistoryBid"><i class="ti-eye border-right pr-1"></i></a></div>
                                      <div><a class="text-primary" onclick="payAuctionArt(${item.product_id})"><i class="ti-money border-right px-1"></i></a></div>
                                      <div class="text-danger" onclick="giveUpAuctionArt(${item.product_id})"><i class="ti-close pl-1"></i></div>
                                </td>
                            </tr>
                            `
                            userCartAuction.append(cartItem);
                        });
                    }else{

                    }
                }
            })
        }

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

        function payAuctionArt(productID){

        }

        function giveUpAuctionArt(productID){

        }
    </script>
@endsection




