@extends('layouts.LayoutPublic')
@section('page-title',$product->name)
@section('content')
    <section>
        <div class="btn-open-product-info d-block d-md-none">
            <i class="fas fa-info"></i>
        </div>
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
                            <p class="mb-0 px-3" id="no-review">There are no reviews yet</p>
                            <div id="product-review-container" class="product-review-container px-3 mb-2">
                            </div>
                            <h5 class="px-3">Be the first to review <span>{{$product->name}}</span></h5>
                            <p class="mb-1 text-secondary font-italic px-3">Your email address will not be published. Required fields are marked *</p>
                            <div class="px-3">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Name*</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Mark" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">Name is required</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Email*</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="example@gmail.com" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">Email is required</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Review</label>
                                        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 product-info-small">
                    <div class="d-block d-md-none mb-2" id="btn-close-product-info" style="cursor: pointer">
                        <i class="fas fa-times-circle"></i>
                    </div>
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
                            <p class="mb-0" style="font-size: 13px">Size: <span class="font-italic" >{{$product->sizes->name}}</span></p>
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
                                            <span class="text-danger" style="font-size: 17px" id="product-current-price"></span>
                                        </p>
                                        <form id="form-bid-product" class="form-bid-product d-flex align-items-center">
                                            <div class="position-relative">
                                                <input aria-label="input-bid" id="bid-input" class="pl-4" type="text" value="{{$product->current_price}}"/>
                                                <div class="position-absolute" style="top: 8px;left: 10px"><i class="fa-solid fa-dollar-sign"></i></div>
                                            </div>
                                            <button class="ml-2" type="submit"><span>Bid</span></button>
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

        <div class="container-lg mt-4">
            <h3>Related Products</h3>
            <div class="mt-3">
                <div class="row">
                    @foreach($relatedProduct as $relaProduct)
                        <a href="products/{{$relaProduct->id}}"></a>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="auction-lot-item mb-3 border border-primary rounded">
                                <a href="/products/{{$relaProduct->id}}">
                                    <div class="lot-thumbnail position-relative overflow-hidden">
                                        <img class="border" style="height: 250px" width="100%" src="/images_store/products/{{$relaProduct->image}}" alt="{{$relaProduct->name}}"/>
                                        <div class="lot-id-container d-flex mb-2 position-absolute" style="top: 1rem;left: 10px">
                                            <p class="m-0 border p-1 font-weight-bold text-white rounded" style="background: rgba(0,0,0,0.3)">LOT <span class="lot-id">{{$relaProduct->id}}</span></p>
                                        </div>
                                        <div class="count-down-container count-down-container--lot position-absolute p-0"  data-countdown="{{$relaProduct->date_end}}"></div>
                                        <div class="auction-lot-item-btn position-absolute"><button class="border-0 rounded">View bid</button></div>
                                    </div>
                                    <div class="lot-content mt-2 p-2">
                                        <h5 class="lot-content-name font-weight-bold">{{$relaProduct->name}}</h5>
                                        <div class="d-flex justify-content-between flex-wrap border-bottom pb-1">
                                            <p class="lot-content-artist font-italic text-dark mb-0">
                                                <i class="fas fa-user-tag text-primary"></i>
                                                <span style="font-size: 12px" class="font-weight-bold">{{$relaProduct->artists->name}}</span>
                                            </p>
                                            <p class="font-italic text-dark mr-1 mb-0">
                                                <i class="fas fa-tags text-danger"></i>
                                                <span style="font-size: 12px" class="font-weight-bold">{{$relaProduct->product_status->name}}</span>
                                            </p>
                                        </div>
                                        <div class="mt-2">
                                            <p class="lot-content-start-price mb-1">
                                                <span class="font-weight-bold mr-1 d-inline-block" style="width: 80px;color: black;font-size: 13px">Starting bid: </span>
                                                <span class="text-success font-italic p-1 font-weight-bold" style="font-size: 12px">$<span class="price">{{$relaProduct->start_price}}</span></span>
                                            </p>
                                            <p class="lot-content-current-bid mb-1">
                                                <span class="font-weight-bold mr-1 d-inline-block" style="width: 80px;color: black;font-size: 13px">Current bid:</span>
                                                <span class="text-danger font-italic font-weight-bold p-1" style="font-size: 12px"><span class="price">{{$relaProduct->current_price > 0 ? "$".$relaProduct->current_price : "No bid"}}</span></span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let idProduct = {!! json_encode($product->id) !!};
        let productDescriptionEle = $('.product-description');
        let openProductInfoEle = document.querySelector('.btn-open-product-info');
        let closeProductInfoEle = document.querySelector('#btn-close-product-info');
        let productInfoEle = document.querySelector('.product-info-small');

        $('.btn-view-more-description').click(function (){
            if(productDescriptionEle.hasClass('active')){
                $(this).text('view more')
            }else{
                $(this).text('hide')
            }
            productDescriptionEle.toggleClass('active');
        })
        //

        openProductInfoEle.addEventListener('click',()=>{
           productInfoEle.classList.add('active');
        });
        closeProductInfoEle.addEventListener('click',()=>{
           productInfoEle.classList.remove('active');
        });
        //
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

        //
        $('#form-bid-product').submit(e=>{
            e.preventDefault();
            let bidValue = $('#bid-input').val();
            $.ajax({
                url:`/bidProduct`,
                method:'GET',
                data:{id:idProduct,bid:bidValue.replaceAll(',','')},
                success:result =>{
                    console.log(result);
                }
            });
        })

        getCurrentPrice();
        setInterval(getCurrentPrice,1000);
        function getCurrentPrice(){
            console.log(idProduct);
            $.ajax({
                url:`/getcurrentprice`,
                data:{id:idProduct},
                method:'GET',
                success:result =>{
                    $('#product-current-price').html(result[0].current_price);
                }
            })
        }
        let bidInputEle = document.querySelector('#bid-input');
        if(bidInputEle != null){
            bidInputEle.addEventListener('input',()=>{
                    let format1 = formatPriceInput(bidInputEle.value);
                    let format2 = format1.replaceAll(',','')
                    bidInputEle.value = formatPriceInput(format2);
            });
        }

        function formatPriceInput(num){
            return num.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }
        (function() {
            'use strict';
            // window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                let forms = document.getElementsByClassName('needs-validation');
                let reviewContainerEle = document.querySelector('#product-review-container');
                // Loop over them and prevent submission
                let validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            form.classList.add('was-validated');
                        }else{
                            event.preventDefault();
                            document.querySelector('#no-review').style.display= 'none';
                            let inputName = $('#validationCustom01');
                            let inputEmail = $('#validationCustom02');
                            let inputText = $('#exampleFormControlTextarea1');
                            form.classList.add('was-validated');
                            let item = document.createElement('div');
                            item.innerHTML = `
                                <div class="pb-2 border-bottom">
                                <div class="d-flex justify-content-between align-items-center mt-1">
                                    <p class="mb-0">
                                        <i class="fas fa-user-alt"></i>
                                        <span class="font-weight-bold">${inputName.val()}</span></p>
                                    <p class="mb-0 text-secondary font-italic" style="font-size: 12px">${new Date()}<p>
                                </div>
                                <p class="mb-0">${inputText.val()}</p>
                                </div>
                            `
                            reviewContainerEle.appendChild(item);
                            inputName.val('');
                            inputEmail.val('');
                            inputText.val('');
                            document.querySelector('#invalidCheck').checked = false;
                            form.classList.remove('was-validated');
                        }
                    }, false);
                });
            // }, false);
        })();

        CKEDITOR.replace( 'exampleFormControlTextarea1' );
    </script>
@endsection
