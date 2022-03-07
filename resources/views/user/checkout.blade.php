@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Checkout')

@section('navbar')
    @include('components.navbarUser')
@endsection

@section('header')
    @include('components.headerUser')
@endsection

@section('content')
    <section class="checkout-page-container pb-4">
        <div class="pt-3 px-4">
            <h3>Checkout</h3>
            <div class="row mt-2">
                <div class="col-12 col-md-8 order-2 order-md-0">
                    <div class="p-3 rounded" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                        <h6 class="mb-3">Shipping Address</h6>
                        <form id="form-check-out" class="needs-validation" novalidate action="{{route('CheckOutAuction')}}">
                            <div class="form-row">
                                <div class="col-12 mb-4">
                                    <label class="label-checkout">Email  <span class="text-danger">*</span></label>
                                    <input aria-label="user-email" type="email" class="form-control" value="{{old('email',optional($user ?? null)->email)}}" placeholder="enter email.." name="email" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Email is required!</div>
                                </div>
                                <div class="form-check ml-2 mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="check-box-newsletter">
                                    <label class="form-check-label font-italic" style="font-size: 13px" for="check-box-newsletter">Subscribe to Newsletter</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-4">
                                    <label class="label-checkout">First name  <span class="text-danger">*</span></label>
                                    <input aria-label="user-firstname" type="text" class="form-control" value="{{old('firstname',optional($user ?? null)->firstname)}}" placeholder="enter first name" name="firstname" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">First name is required!</div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="label-checkout">Last name  <span class="text-danger">*</span></label>
                                    <input aria-label="user-lastname" type="text" class="form-control" value="{{old('lastname',optional($user ?? null)->lastname)}}" placeholder="enter last name" name="lastname" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Last name is required!</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 mb-4">
                                    <label class="label-checkout">Street address 1 <span class="text-danger">*</span></label>
                                    <input aria-label="user-address-1" type="text" class="form-control" value="{{old('user-address1',optional($user ?? null)->address)}}" placeholder="street address 1" name="user-address1" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Street address: Line 1 is required!</div>
                                </div>
                                <div class="col-12 mb-4">
                                    <label class="label-checkout">Street address 2 <span class="text-danger">*</span></label>
                                    <input aria-label="user-address-2" type="text" class="form-control" placeholder="street address 2" name="user-address2" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Street address: Line 2 is required!</div>
                                </div>
                                <div class="col-12 mb-4">
                                    <label class="label-checkout">Phone <span class="text-danger">*</span></label>
                                    <input aria-label="user-phone" type="text" class="form-control" value="{{old('user-phone',optional($user ?? null)->phone)}}" placeholder="enter phone number" name="user-phone" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Phone number is required!</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-sm-6 mb-4">
                                    <label class="label-checkout">City <span class="text-danger">*</span></label>
                                    <select aria-label="user-city" class="custom-select pt-3" name="user-city" required>
                                        <option selected disabled value="">Choose City</option>
                                        <option value="1">Ha Noi</option>
                                        <option value="2">New York</option>
                                        <option value="3">Okazaki</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid city</div>
                                </div>
                                <div class="col-12 col-sm-6 mb-4">
                                        <label class="label-checkout">Country <span class="text-danger">*</span></label>
                                        <select aria-label="user-country" class="custom-select pt-3 pb-2" name="user-country" required>
                                            <option selected disabled value="">Choose Country</option>
                                            <option value="1">Viet Nam</option>
                                            <option value="2">United State</option>
                                            <option value="3">Japan</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid country</div>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="form-row">
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="bg-white rounded p-3">
                                        <h6 class="mb-3">Shipping Methods</h6>
                                        <div class="form-check d-flex justify-content-between flex-wrap">
                                            <div>
                                                <input class="form-check-input input-shipping" type="radio" name="exampleRadios" id="exampleRadios1" required value="5.5">
                                                <label class="form-check-label font-weight-bold" style="font-size: 13px" for="exampleRadios1">$5.00</label>
                                            </div>
                                            <p class="mb-0 text-secondary" style="font-size: 13px;line-height: 1.4">Fixed</p>
                                            <p class="mb-0 text-secondary" style="font-size: 13px;line-height: 1.4">Flat Rate</p>
                                        </div>
                                        <div class="form-check d-flex justify-content-between mt-1 flex-wrap">
                                            <div>
                                                <input class="form-check-input input-shipping" type="radio" name="exampleRadios" id="exampleRadios2" required value="15">
                                                <label class="form-check-label font-weight-bold" style="font-size: 13px" for="exampleRadios2">$15.00</label>
                                            </div>
                                            <p class="mb-0 text-secondary" style="font-size: 13px;line-height: 1.4">Table Rate</p>
                                            <p class="mb-0 text-secondary" style="font-size: 13px;line-height: 1.4">Best Way</p>
                                        </div>
                                        <div class="mt-4 position-relative">
                                            <label class="label-checkout">Delivery Date <span class="text-danger">*</span></label>
                                            <input type="date" aria-label="date-delivery" value="{{old('date-delivery')}}" required name="date-delivery" class="form-control">
                                            <div class="invalid-feedback">Delivery date is required!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="bg-white rounded p-3">
                                        <h6 class="mb-3">Payment Methods</h6>
                                        <div>
                                            <div class="form-check d-flex justify-content-between flex-wrap">
                                                <div>
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" required value="15">
                                                    <label class="form-check-label font-weight-bold" style="font-size: 12px" for="exampleRadios2">Credit Card Direct Post</label>
                                                </div>
                                            </div>
                                            <div class="form-check d-flex justify-content-between mt-2 flex-wrap">
                                                <div>
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" required value="15">
                                                    <label class="form-check-label d-flex align-items-center flex-wrap" style="font-size: 12px" for="exampleRadios2">
                                                        <img width="40px" class="border rounded" alt="paypal-method-img" src="{{asset('images/paypal-image.png')}}"/>
                                                        <span class="mx-2 font-weight-bold">Paypal Express Checkout</span>
                                                        <a href="#">What's paypal!</a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-check d-flex justify-content-between mt-2 flex-wrap">
                                                <div>
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" required value="15">
                                                    <label class="form-check-label font-weight-bold" style="font-size: 12px" for="exampleRadios2">Check/ Money order</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input aria-label="total-order-price-input" type="hidden" name="total-order" class="total-order-price-input">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-4 order-1 mb-4 mb-md-0 order-md-0">
                    <div class="rounded p-3" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
                        <h6>Order Summary</h6>
                        <div class="mt-3">
                           <img class="rounded" id="check-out-image-product" width="100%" src="/images_store/products/{{$product->image}}" alt="{{$product->name}}"/>
                        </div>
                        <div class="mt-3">
                            <p style="font-size: 17px" class="mb-2 pb-2 border-bottom">{{$product->name}}</p>
                            <p class="mb-1 d-flex justify-content-between">
                                <span>Final Price: </span>
                                <span>$ <span class="font-italic">{{number_format($product->current_price, 0, ',', '.')}}</span></span>
                            </p>
                            <p class="mb-2 d-flex justify-content-between">
                                <span>Shipping: </span>
                                <span style="font-size: 13px" class="font-italic font-weight-bold" id="shipping-price">Not yet calculated</span>
                            </p>
                            <p class="mb-0 pt-1 d-flex justify-content-between border-top border-danger">
                                <span class="font-weight-bold">Order Total </span>
                                <span class="font-weight-bold" style="color: #EF6D6D"><span class="font-italic" id="order-total-price">$ {{number_format($product->current_price, 0, ',', '.')}}</span></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script_tag')
    <script>
        let selectShippingEle   = document.querySelectorAll('.input-shipping');
        let shippingPriceEle    = document.querySelector('#shipping-price');
        let totalOrderPriceEle  = document.querySelector('#order-total-price');
        let olderTotalOrderPrice = {!! json_encode($product->current_price) !!};

        let formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
        });
        selectShippingEle.forEach(item=>{
          item.addEventListener('change',function (e){
              shippingPriceEle.innerText = formatter.format(e.target.value);
              let formatTotalOrder = parseFloat(olderTotalOrderPrice) + parseFloat(e.target.value);
              totalOrderPriceEle.innerText = formatter.format(formatTotalOrder);
              document.querySelector('.total-order-price-input').value = formatTotalOrder;
              console.log(document.querySelector('.total-order-price-input'));
          });
        })
    </script>
@endsection




