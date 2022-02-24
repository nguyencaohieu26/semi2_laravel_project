@extends('layouts.LayoutPublic')
@section('page-title','Products')
@section('content')
    <section>
    {{--  BANNER  --}}
        <section class="products_banner px-5">
            <img width="100%" height="100%" src="https://images.unsplash.com/photo-1579695114441-573c26d8de54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1173&q=80" alt="">
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
                    <div class="mr-3">
                        <select id="select-product-sort-type" name="sortType" class="form-control" aria-label="sortType">
                            <option value="" selected>Default</option>
                            <option value="0">Price Ascending</option>
                            <option value="1">Price Descending</option>
                            <option value="2">Title Ascending</option>
                            <option value="3">Title Descending</option>
                        </select>
                    </div>
                    <div style="min-width: 35%">
                        <input class="form-control w-100" id="find-product-input" type="text" placeholder="Search by name..." aria-label="search">
                    </div>
                </div>
            </div>
        </section>
    {{--  LIST PRODUCTS  --}}
        <section class="px-5 mt-4">
            <div class="row position-relative">
                {{--    --}}
                <div class="lot-filter-container d-xl-block col-xl-2 border-right">
                    <div class="mb-3">
                        <button class="btn btn-outline-primary p-1" id="clearSearch">Clear all</button>
                    </div>
                    <div class="mb-4">
                        <h5 class="border-bottom pb-2"><i class="fa-brands fa-galactic-republic"></i> <span class="font-weight-bold">Filter price</span></h5>
                        <div aria-label="filter-product-price" type="text" id="amount" class="price mb-3" readonly></div>
                        <div id="slider-range"></div>
                    </div>
                    <div class="mb-2">
                        <h5 class="border-bottom pb-2"><i class="fa-brands fa-galactic-republic"></i> <span class="font-weight-bold">Lots Status</span></h5>
                        <div class="form-status">
                            @foreach($productStatus as $status)
                                <div>
                                    <input id="{{$status->name."".$status->id}}" value="{{$status->id}}" class="position-relative status-input-checkbox"  type="checkbox">
                                    <label for="{{$status->name."".$status->id}}">{{$status->name}}</label>
                                </div>
                            @endforeach
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
                                    <input id="{{$category->category_code}}" name="category[]" {{(isset($categoryID) && $categoryID == $category->id) ? "checked" : ""}} value="{{$category->id}}" class="position-relative category-input-checkbox" type="checkbox">
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
                                    <input id="{{$artist->name.'-'.$artist->id}}" value="{{$artist->id}}" name="artists[]" class="position-relative artist-input-checkbox" type="checkbox">
                                    <label for="{{$artist->name.'-'.$artist->id}}">{{$artist->name}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{--    --}}
                <div class="col-12 col-xl-10">
                    <div class="row" id="product_list"></div>
                    <div id="pagination-custom" class="pagination-custom mt-auto">
                        <ul class="d-flex list-unstyled"></ul>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
@section('script-tag')
    <script>
            let statusList      = [];
            let categoryList    = [];
            let artistList      = [];
            let rangeMinPrice   = undefined;
            let rangeMaxPrice   = undefined;
            let cate = {!! json_encode($categoryID) !!};
            if(cate != null){categoryList.push(cate)}

            let productList             = $('#product_list');
            let paginateContainer       = $('#pagination-custom ul');
            let inputStatusCheckBox     = document.querySelectorAll('.status-input-checkbox');
            let inputCategoryCheckBox   = document.querySelectorAll('.category-input-checkbox');
            let inputArtistCheckBox     = document.querySelectorAll('.artist-input-checkbox');
            let inputSearchTitle        = $('#find-product-input');
            let sortValue               = undefined;
            const openFilterButtonEle = document.querySelector('.auction-lot-filter-btn');

            //
            genderSlider();
            function genderSlider(){
                $( "#slider-range" ).slider({
                    range: true,
                    min: 0,
                    max: 20000,
                    values: [1000, 6000 ],
                    slide: function( event, ui ) {
                        $('#amount').html('').append(
                            `
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="far fa-flag text-success mr-2"  style="font-size: 12px"></i>
                                <span class="font-italic">${ui.values[0]}</span>
                            </div>
                            <div><i class="fas fa-long-arrow-alt-right"></i></div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-bullseye text-danger mr-2"  style="font-size: 12px"></i>
                                <span class="font-italic">${ui.values[1]}</span>
                            </div>
                        </div>`
                        )
                        rangeMinPrice = ui.values[0];
                        rangeMaxPrice = ui.values[1];
                        submitFilter();
                    }
                });
            }
            genderDisplayPrice();
            function genderDisplayPrice(){
                $('#amount').html('').append(`
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="far fa-flag text-success mr-2" style="font-size: 12px"></i>
                            <span class="font-italic">${$( "#slider-range" ).slider( "values", 0 )}</span>
                        </div>
                        <div><i class="fas fa-long-arrow-alt-right"></i></div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-bullseye text-danger mr-2" style="font-size: 12px"></i>
                            <span class="font-italic">${$( "#slider-range" ).slider( "values", 1 )}</span>
                        </div>
                    </div>`)
            }

            rangeMinPrice = $("#slider-range" ).slider( "values", 0 );
            rangeMaxPrice = $( "#slider-range" ).slider( "values", 1);

            let searchProductField      = {
                name:undefined,
                artist:artistList.length > 0 ? artistList : undefined,
                status:statusList.length > 0 ? statusList : undefined,
                category:categoryList.length > 0 ? categoryList : undefined,
                priceMin:rangeMinPrice,
                priceMax:rangeMaxPrice,
                sortType:undefined,
                page:1,
            }
            //
            getProducts(searchProductField);
            //
            function getProducts(search){
                $.ajax({
                    url:`products_resource`,
                    method:'GET',
                    data:{
                        name:search.name,
                        artist:search.artist,
                        category:search.category,
                        status:search.status,
                        priceMin:search.priceMin,
                        priceMax:search.priceMax,
                        sortType:search.sortType,
                        page:search.page,
                    },
                    success:(result)=>{
                        productList.html('');
                        if(result.data.length > 0){
                            result.data.forEach(item =>{
                                let today = new Date().getTime();
                                let dayStart = new Date(item.date_start);
                                let dayCount;
                                if(dayStart.getTime() > today){
                                    dayCount = item.date_start;
                                }else{
                                    dayCount = item.date_end;
                                }
                                let productItem = `
                                   <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                                        <div class="auction-lot-item mb-3">
                                            <a href="/products/${item.id}">
                                                <div class="lot-thumbnail position-relative overflow-hidden">
                                                    <img class="border" style="height: 300px" width="100%" src="images_store/products/${item.image}" alt="${item.name}"/>
                                                    <div class="lot-id-container d-flex mb-2 position-absolute" style="top: 1rem;left: 10px">
                                                        <p class="m-0 border p-1 font-weight-bold text-white rounded" style="background: rgba(0,0,0,0.3)">LOT <span class="lot-id">${item.id}</span></p>
                                                    </div>
                                                    <div class="count-down-container count-down-container--lot position-absolute p-0"  data-countdown="${dayCount}"></div>
                                                    <div class="auction-lot-item-btn position-absolute"><button class="border-0 rounded">View bid</button></div>
                                                </div>
                                                <div class="lot-content mt-2 p-2">
                                                    <h5 class="lot-content-name font-weight-bold">${item.name}</h5>
                                                    <div class="my-2 d-flex flex-wrap justify-content-between border-bottom pb-1">
                                                        <p style="font-size: 11px" class="font-italic text-dark font-weight-bold mb-0 mr-1">
                                                            <i class="fas fa-tags text-danger"></i>
                                                            <span>${item.product_status.name}</span>
                                                        </p>
                                                        <p style="font-size: 11px" class="lot-content-artist text-dark font-italic font-weight-bold mb-0">
                                                            <i class="fas fa-user-tag text-primary"></i>
                                                            <span>${item.artists.name}</span>
                                                        </p>
                                                    </div>
                                                    <div class="">
                                                        <p class="lot-content-start-price mb-1">
                                                            <span class="font-weight-bold mr-1 d-inline-block" style="width: 80px;color: black;font-size: 13px">Starting bid: </span>
                                                            <span class="text-success font-italic font-weight-bold" style="font-size: 12px">$<span class="price">${item.start_price}</span></span>
                                                        </p>
                                                        <p class="lot-content-current-bid mb-1">
                                                            <span class="font-weight-bold mr-1 d-inline-block" style="width: 80px;color: black;font-size: 13px">Current bid:</span>
                                                            <span class="text-danger font-italic font-weight-bold p-1" style="font-size: 12px"><span class="price">${item.current_price > 0 ? "$"+item.current_price : "No bid"}</span></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                `
                                productList.append(productItem);
                                //show paginate
                                paginateContainer.html('');
                                const totalPage = result.total;
                                const numberPerPage = result.per_page;
                                for(let i =1; i<=Math.ceil(totalPage/numberPerPage);i++){
                                    let pageItem = `<li class="mr-1 ${i === search.page ? "active" : ""}" onclick="submitFilter(${i})"
                                    class="page-item-custom">${i}</li>`;
                                    paginateContainer.append(pageItem);
                                }
                                //show countdown time
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
                            });
                        }else{
                            paginateContainer.html('');
                            productList.html('').append(`
                                <div class="mt-5 text-center w-100">
                                    <i class="fas fa-box-open fa-2x"></i>
                                    <p>No art found!</p>
                                </div>
                            `)
                        }
                    }

                })
            }
            //
            openFilterButtonEle.addEventListener('click',()=>{
                document.querySelector('.lot-filter-container').classList.toggle('active');
            });
            //
            inputStatusCheckBox.forEach(item =>{
                   item.addEventListener('click',function (e){
                       if(item.checked){
                           statusList.push(e.target.value);
                       }else{
                           statusList = statusList.filter((num) => {
                               return num !== e.target.value
                           });
                       }
                       submitFilter();
                   });
            });

            inputArtistCheckBox.forEach(item =>{
                item.addEventListener('click',function (e){
                    if(item.checked){
                        artistList.push(e.target.value);
                    }else{
                        artistList = artistList.filter((num) => {
                            return num !== e.target.value
                        });
                    }
                    submitFilter();
                });
            });

            inputCategoryCheckBox.forEach(item =>{
                item.addEventListener('click',function (e){
                    if(item.checked){
                        categoryList.push(e.target.value);
                    }else{
                        categoryList = categoryList.filter((num) => {
                            return num !== e.target.value
                        });
                    }
                    submitFilter();
                });
            });

            inputSearchTitle.on('input',function (){
                submitFilter();
            });

            $('#select-product-sort-type').change((e)=>{
                sortValue = e.currentTarget.value;
                submitFilter();
            });

            $('#clearSearch').click(function (){
               submitFilter(1,true)
            });
            //
            function submitFilter(pageNum = 1,clear = false){
                    if(!clear){
                        getProducts(
                            {
                                name:inputSearchTitle.val() ? inputSearchTitle.val() : undefined,
                                artist:artistList.length > 0 ? artistList : [],
                                category:categoryList.length > 0 ? categoryList : [],
                                priceMin:rangeMinPrice ? rangeMinPrice : undefined,
                                priceMax:rangeMaxPrice ? rangeMaxPrice : undefined,
                                status:statusList.length > 0 ? statusList : [],
                                sortType:sortValue ? sortValue : undefined,
                                page:pageNum,
                            }
                        )
                    }else{
                        inputSearchTitle.val('');
                        rangeMinPrice = 1000;
                        rangeMaxPrice = 6000;
                        inputCategoryCheckBox.forEach(item =>{
                           item.checked = false;
                        });
                        inputArtistCheckBox.forEach(item =>{
                            item.checked = false;
                        })
                        inputStatusCheckBox.forEach(item =>{
                            item.checked = false;
                        })
                        $('#select-product-sort-type').val('');
                        genderSlider();
                        genderDisplayPrice();
                        statusList      = [];
                        categoryList    = [];
                        artistList = [];
                        getProducts(searchProductField);
                    }
            }


    </script>
@endsection
