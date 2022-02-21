@extends('layouts.LayoutPublic')
@section('page-title',$product->name)
@section('content')
    <section>
        <div class="container-lg mt-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="product-thumbnail border rounded overflow-hidden">
                        <img height="100%" width="100%" alt="{{$product->name}}" src="/images_store/products/{{$product->image}}"/>
                    </div>
                    <div class="product-content mt-3">
                        <h3>{{$product->name}}</h3>
                        <p>
                            <span>{{$product->name}}</span> specialized agent training, our multi-channel expertise encourages engagement that increases satisfaction and drives conversion. The modern world is in a continuous movement and people everywhere are looking for quick accessing our multi-channel expertise encourages engagement that increases satisfaction and drives conversion.
                        </p>
                        <div class="border border-primary rounded py-3 mb-3">
                            <h5 style="border-left: 6px solid darkblue;background: rgba(11,44,79,0.62)" class="text-white px-3 py-2 font-weight-bold">Auction History</h5>
                            <p class="px-3 mb-1">
                                <span>Auction start at: </span><span class="font-italic font-weight-bold">{{date("F d, Y", strtotime($product->date_start))}}</span>
                            </p>
                            <p class="px-3 mb-0">
                                <span>Auction end at: </span><span class="font-italic font-weight-bold">{{date("F d, Y", strtotime($product->date_end))}}</span>
                            </p>
                        </div>
                        <div class="border border-primary rounded py-3 mb-3">
                            <h5 style="border-left: 6px solid darkblue;background: rgba(11,44,79,0.62)" class="text-white px-3 py-2 font-weight-bold">Vendor Information</h5>
                            <div class="px-3">
                                <p class="mb-1">Address: New York</p>
                                <div class="d-flex justify-content-between">
                                    <span>4.71 rating from 10 reviews</span>
                                    <div>
                                        <i style="color: #FFDD00" class="fas fa-star"></i>
                                        <i style="color: #FFDD00" class="fas fa-star"></i>
                                        <i style="color: #FFDD00" class="fas fa-star"></i>
                                        <i style="color: #FFDD00" class="fas fa-star"></i>
                                        <i style="color: #FFDD00" class="fas fa-star-half"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border border-primary rounded py-3 mb-3">
                            <h5 style="border-left: 6px solid darkblue;background: rgba(11,44,79,0.62)" class="text-white px-3 py-2 font-weight-bold">Reviews</h5>
                            <div class="product-review-container">
                                <p>There are no reviews yet</p>
                            </div>
                            <h5>Be the first to review <span>{{$product->name}}</span></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="product-info rounded p-3">
                        <h4 class="pr-4">{{$product->name}}</h4>
                        <div class="d-flex position-relative">
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                                <div class="mr-2 font-weight-bold mb-0">
                                    <i class="fas fa-user-tag"></i>
                                    <span>Artist: </span>
                                    <span class="text-success font-weight-bold mb-0">{{$product->artists->name}}</span>
                                </div>
                                <div class="">
                                    <p class="mb-0">SKU: <span class="font-weight-bold">KS935RUR{{$product->id}}</span></p>
                                </div>
                            </div>
                            <p class="product-status position-absolute">
                                {{$product->product_status->name}}
                            </p>
                        </div>
                        <div class="mt-1">
                            <p class="mb-0" style="font-size: 13px">Size: <span class="font-italic" >{{$product->size}}</span></p>
                            <p class="mb-0 font-weight-bold">Description</p>
                            <div class="position-relative">
                                <div class="font-italic overflow-hidden product-description mb-0">
                                    {{$product->description}}
                                </div>
                                <p class="mb-0 btn-view-more-description font-weight-bold">view more..</p>
                            </div>
                            <div class="product-start-price border border-secondary p-1 rounded mt-1">
                                <p class="mb-0 font-italic">
                                    <span class="font-weight-bold mr-1">Start price: </span>
                                    <span style="font-size: 18px">${{$product->start_price}}</span>
                                </p>
                            </div>
                            <div class="product-auction-container mt-2">
                                @if($product->product_status->id == 2)
                                    <div class="position-relative mt-3">
                                        <span class="mb-1">Auction Start In:</span>
                                        <div class="count-down-container count-down-container--3" data-countdown="{{$product->date_start}}"></div>
                                    </div>
                                @elseif($product->product_status->id == 1)
                                    <div class="position-relative mt-2">
                                        <span class="">Auction End In:</span>
                                        <div class="count-down-container count-down-container--3" data-countdown="{{$product->date_end}}"></div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="mb-2">
                                            <span>Current Price: $</span>
                                            <span class="text-danger" style="font-size: 17px"> {{$product->current_price}}</span>
                                        </p>
                                        <form id="form-bid-product" class="form-bid-product d-flex align-items-center">
                                            <div class="position-relative">
                                                <input aria-label="input-bid" class="pl-4" type="text" value="{{$product->current_price}}"/>
                                                <div class="position-absolute" style="top: 8px;left: 10px"><i class="fa-solid fa-dollar-sign"></i></div>
                                            </div>
                                            <button class="ml-2" type="submit">Bid</button>
                                        </form>
                                    </div>
                                @else
                                    <div class="mt-3">
                                        <h5 class="font-weight-bold">Auction Have Ended</h5>
                                        <p class="">
                                            <span>
                                                <i class="fa-solid fa-gavel"></i>The last price:
                                            </span>
                                            <span class="text-success" style="font-size: 17px">${{$product->current_price}}</span>
                                        </p>
                                    </div>
                                @endif
                            </div>
                            <div class="mt-3">
                                <p class="mb-0"><i class="fas fa-clipboard-list"></i> Category: </p>
                                <div class="product-category mt-1 d-flex flex-wrap" style="gap: 10px">
                                    @foreach($product->categories as $category)
                                            <span style="font-size: 13px" class="border border-secondary rounded p-1">{{$category->name}}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div data-toggle="modal" data-target="#staticBackdrop" class="mt-2" style="cursor: pointer">
                                <p class="mb-0">Condition of sale</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Conditions Of Sale</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        CONDITIONS OF SALE FOR ART'S AUCTION
                        ONLINE-ONLY SALES: AUCTIONS AND BUY-NOW
                        PLEASE READ THESE CONDITIONS OF SALE AND THE SALE PARTICULARS CAREFULLY
                        BEFORE PLACING ANY BID ON A LOT OR BUYING ANY LOT USING BUY-NOW.
                        THESE CONDITIONS OF SALE AND THE SALE PARTICULARS, ALONG WITH THE IMPORTANT
                        NOTICES AND EXPLANATION OF CATALOGUING PRACTICE, SET OUT THE TERMS AND
                        CONDITIONS ON WHICH WE OFFER THE LOTS LISTED IN THIS SALE. BY REGISTERING TO BID
                        AND/OR BY BIDDING AT AUCTION OR BUYING USING BUY-NOW, YOU AGREE TO THESE TERMS
                        AND CONDITIONS AND THEY WILL BECOME CONTRACTUALLY BINDING ON YOU. THEY ALSO
                        DESCRIBE CERTAIN LIMITATIONS AND EXCLUSIONS OF LIABILITY FOR CHRISTIE’S AND THE
                        SELLER OF A LOT, WHERE APPLICABLE. UNLESS WE OWN A LOT ( SYMBOL), CHRISTIE’S
                        ACTS AS AGENT FOR THE SELLER.
                        PLEASE ENSURE THAT YOU HAVE UNDERSTOOD ALL CHARGES, FEES AND TAXES THAT MAY
                        BE APPLIED TO YOUR BID PRICE OR BUY-NOW PRICE BEFORE YOU PLACE YOUR BID. THESE
                        WILL DEPEND UPON WHERE THE LOT IS LOCATED AT THE TIME OF PURCHASE.
                        AA THESE CONDITIONS OF SALE - BINDING ON YOU
                        1. These Conditions of Sale set out the terms on which Art’s Auction Limited of 22/F Alexandra House,
                        18 Chater Rd, Central, Hong Kong (referred to as Christie’s, "we", "us", "our" and "ourselves" in these
                        Conditions of Sale) and the seller offer the lots for sale.
                        2. Words and expressions which are in bold in these Conditions of Sale have the meaning set out in the glossary
                        which is set out in paragraph I of these Conditions of Sale.
                        3. By registering and/or by bidding in an auction, or where you (also referred to as the "buyer” and “your” in these
                        Conditions of Sale) purchase a lot using Buy-Now, you agree that these Conditions of Sale and the Sale
                        Particulars shall be contractually binding on you.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('script-tag')
    <script>
        let productDescriptionEle = $('.product-description');
        $('.btn-view-more-description').click(function (){
            if(productDescriptionEle.hasClass('active')){
                $(this).text('view more')
            }else{
                $(this).text('hide')
            }
            productDescriptionEle.toggleClass('active');
        })
        $('[data-countdown]').each(function() {
            let $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                let dayFormat = `<div class="days"><span class="font-weight-bolder">${event.offset.totalDays < 10 ? "0"+event.offset.totalDays : event.offset.totalDays}</span><p class="mb-0" style="font-size: 10px">days</p></div>`
                let countDownTimeEle = `
                    ${dayFormat}
                    <div class="hours"><span class="font-weight-bolder">${event.offset.hours < 10 ? "0"+event.offset.hours : event.offset.hours}</span><p class="mb-0" style="font-size: 10px">hours</p></div>
                    <div class="minutes"><span class="font-weight-bolder">${event.offset.minutes < 10 ? "0"+event.offset.minutes : event.offset.minutes}</span><p class="mb-0" style="font-size: 10px">minutes</p></div>
                    <div class="seconds"><span class="font-weight-bolder">${event.offset.seconds < 10 ? "0"+event.offset.seconds : event.offset.seconds}</span><p class="mb-0" style="font-size: 10px">seconds</p></div>
                `
                $this.html(countDownTimeEle);
            });
        });
    </script>
@endsection
