@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Products')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="products-admin-container">
        {{--  message  --}}
        <div class="response-message position-fixed" style="right: 1rem;top: 5.5rem;z-index: 1000">
            @if(session('create-product'))
                <div class="alert alert-success">{{session('create-product')}}</div>
            @endif
            @if(session('edit-product'))
                <div class="alert alert-success">{{session('edit-product')}}</div>
            @endif
        </div>
        <div class="px-4 pt-3"><a href="{{route('products_resource.create')}}">Create Product</a></div>
        {{--  main  --}}
        <div class="pt-3 px-4">
            <div class="products-admin-filter">
                <div class=" position-relative">
                    <div class="d-sm-none d-flex align-items-center mb-2">
                        <p class="mr-2">Filter</p>
                        <div class="btn-product-filter">
                            <span class="product-filter-status position-absolute d-inline-block"></span>
                            <svg class="border rounded" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/></svg>
                        </div>
                    </div>
                    <form id="product-filter-form" class="product-filter-form">
                        <div class="form-row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <input name="id" class="form-control" aria-label="product_id" placeholder="Search by product id"/>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mt-2 mt-sm-0">
                                <input name="name" class="form-control" aria-label="" placeholder="Search by name">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mt-2 mt-md-0">
                                <select class="form-control h-100" aria-label="" name="category">
                                    <option value="">Choose category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mt-2">
                                <select class="form-control h-100" aria-label="" name="status">
                                    <option value="">Choose status</option>
                                    @foreach($productStatus as $status)
                                        <option value="{{$status->id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mt-2">
                                <select class="form-control h-100" aria-label="" name="artist">
                                    <option value="" selected>Choose artist</option>
                                    @foreach($artists as $artist)
                                        <option value="{{$artist->id}}">{{$artist->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 col-md-4 mt-2 d-flex align-items-start justify-content-end">
                                <button type="submit" class="btn btn-submit font-weight-bold mr-2">Search</button>
                                <button type="button" class="btn btn-clear font-weight-bold clear-search">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=" mt-3">
                <div class="products-admin-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">IDs</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Name</th>
                                <th scope="col">Artist</th>
                                <th scope="col">Price</th>
                                <th scope="col">Auction Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody class="product-list position-relative"></tbody>
                        </table>
                    </div>
                </div>
                <div class="no-data-container p-3 text-center"></div>
            </div>
            <div class="pagination-custom pb-4 mt-4">
                <ul class="d-flex"></ul>
            </div>
        </div>
        <section>
            <!-- Modal -->
            <div class="modal fade" id="modalDetailProduct" tabindex="-1" aria-labelledby="product-modal-label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                        </div>
                        <div class="modal-body border-0" id="modal-product-detail"></div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary clear-search" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
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
        let productFieldSearch = {
            "name":undefined,
            "id":undefined,
            "status":undefined,
            "price":undefined,
            "category":undefined,
            "artist":undefined,
            "page":1,
        }
        getProducts(productFieldSearch);
        //s
        function getProducts(search){
            $.ajax({
                url:'/products_resource',
                data:{
                    name:search.name,
                    page:search.page,
                    id:search.id,
                    category:search.category,
                    size:search.size,
                    price:search.price,
                    status:search.status,
                    artist:search.artist,
                },
                method:'GET',
                success:(result)=>{
                    if(result.data.length > 0){
                        $('.product-list').html('');
                        $('.no-data-container').hide();
                        result.data.forEach((product)=>{
                            let cateList = ``;
                            for(let i = 0; i < product.categories.length;i++){
                                let cate = `<p style="font-size: 13px">${product.categories[i].name}</p>`
                                cateList +=cate;
                            }
                            let item = `
                                <tr class="">
                                   <th scope="row">${product.id}</th>
                                   <td class="product-image">
                                        <img width="70px" style="height: 50px" class="rounded" src="/images_store/products/${product.image}" alt=""/>
                                   </td>
                                    <td class="product-name" >${product.name}</td>
                                    <td class="product-name" >${product.artists.name}</td>
                                    <td class="product-start-price font-italic" style="font-size: 12px;color: #68329b">${formatter.format(product.start_price)}</td>
                                    <td class="product-status" >${product.product_status.name}</td>
                                    <td class="d-flex" >
                                        <div><a class="text-success" href="#" onclick="viewProductDetail(${product.id})" data-toggle="modal" data-target="#modalDetailProduct"><i class="ti-eye border-right pr-1"></i></a></div>
                                        <div><a class="text-primary" href="/products_resource/${product.id}/edit "><i class="ti-pencil-alt2 border-right px-1"></i></a></div>
                                        <div class="text-danger" onclick="deleteProduct(${product.id})"><i class="ti-trash pl-1"></i></div>
                                   </td>
                                <tr>
                            `
                            $('.product-list').append(item);
                        });

                        $('.pagination-custom ul').html('');
                        const totalPage = result.total;
                        const numberPerPage = result.per_page;
                        for(let i =1; i<=Math.ceil(totalPage/numberPerPage);i++){
                            let classPageActive = i === search.page ? "active" : "";
                            let pageItem = `<li onclick="getProducts({name:${search.name},id:${search.id},status:${search.status},page: ${i},price:${search.price},artist:${search.artist},size:${search.size}})" class="page-item-custom ${classPageActive}">${i}</li>`;
                            $('.pagination-custom ul').append(pageItem);
                        }
                    }else{
                        $('.product-list').html('');
                        $('.pagination-custom ul').html('');
                        $('.no-data-container').show().html(`
                                <i style="font-size: 30px" class="ti-package"></i>
                                <p>No data found</p>
                        `)
                    }
                }
            })
        }
        //
        function deleteProduct(id){
            $.confirm({
                title: `<h5>Remove Product</h5>`,
                content: `<div><p>Are you sure to delete the product!</p></div>`,
                autoClose: 'cancelAction|8000',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            url:`/products_resource/${id}`,
                            method:'POST',
                            data:{id:id,_method:"DELETE"},
                            success:(result)=>{
                                getProducts(productFieldSearch);
                                $('.response-message').html('').addClass('active').append(`
                                    <div class="alert alert-success">${result}</div>
                                `);
                                setTimeout(()=>{$('.response-message').removeClass('active')},2000);
                            }
                        })
                    },
                    cancelAction: function () {},
                }
            });
        }
        //
        function viewProductDetail(id){
            $.ajax({
                url:`/products_resource/${id}`,
                method:'GET',
                success:(product)=>{
                    let categoryList = ``;
                    product.categories.forEach(cate =>{
                       let categoryItem = `<p class="mb-0 product-category-item">${cate.name}</p>`
                        categoryList +=categoryItem;
                    });
                    let productDetail = `
                        <div class="">
                            <div class="row">
                                <div class="col-12 col-lg-5 position-relative">
                                    <img width="100%" src="/images_store/products/${product.image}" alt="${product.name}"/>
                                    <p class="product-detail-status text-white position-absolute bg-dark rounded" style="top: 10px; left: 1.5rem;padding: 3px 10px"><span style="font-size: 12px">${product.product_status.name}</span></p>
                                </div>
                                <div class="col-12 mt-2 mt-lg-0 col-lg-7">
                                    <h4>${product.name}</h4>
                                    <div class="d-flex flex-wrap mt-1">
                                           ${categoryList}
                                    </div>
                                    <p class="mb-0 mt-2 font-italic"><span>Artist: </span> <span>${product.artists.name}</span></p>
                                    <div class="d-flex justify-content-between mt-2">
                                        <p><span>Date Start:</span><span class="font-italic font-weight-bold ml-2 text-secondary" style="font-size: 12px">${new Date(product.date_start).toLocaleDateString("en-US",{ year: 'numeric', month: 'long', day: 'numeric' })}</span></p>
                                        <p><span>Date End:</span><span class="font-italic font-weight-bold ml-2 text-secondary" style="font-size: 12px">${new Date(product.date_end).toLocaleDateString("en-US",{ year: 'numeric', month: 'long', day: 'numeric' })}</span></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0"><span>Size: </span> <span style="font-size: 13px">${product.size}</span></p>
                                        <p class="mb-0"><span>Start Price:</span> <span class="ml-2 text-success font-italic" style="font-size: 13px">${formatter.format(product.start_price)}</span></p>
                                        <p class="mb-0"><span>Current Bid:</span><span class="ml-2 text-danger font-italic" style="font-size: 13px">${(product.current_price > product.start_price) ? formatter.format(product.current_price) : "No Bid"}</span></p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                               <div class="product-detail-content mt-2">
                                   <h6 class="mb-2">Description</h6>
                                   <div style="max-height: 300px;overflow-y: scroll" >
                                            ${product.description}
                                   </div>
                               </div>
                               </div>
                            </div>
                        </div>
                    `
                    $('#modal-product-detail').html('').append(productDetail);
                }
            })
        }
        //
        setTimeout(clearMessage,1000);
        function clearMessage(){
            $('.response-message').addClass('active')
            setTimeout(()=>{$('.response-message').removeClass('active')},2000);
        }
        //
        $('#product-filter-form').submit(e =>{
            e.preventDefault();
            let formData = $('#product-filter-form').serializeArray();
            getProducts({
                "name":formData[1].value ? formData[1].value : undefined,
                "id":formData[0].value ? formData[0].value : undefined,
                "category":formData[2].value ? formData[2].value : undefined,
                "status":formData[3].value ? formData[3].value : undefined,
                "price":undefined,
                "artist":formData[4].value ? formData[4].value : undefined,
                "page":1,
            });
            $('.product-filter-status').addClass('addBG').html(countFilter(formData));
            $('.product-filter-form').removeClass('active');
        });
        function countFilter(arr){
            let count = 0;
            for(let i = 0; i< arr.length;i++){
                if(arr[i].value !== "")count++;
            }
            return count;
        }
        //
        $('.clear-search').click(()=>{
           $('#product-filter-form')[0].reset();
            getProducts(productFieldSearch);
            $('.product-filter-status').removeClass('addBG').html(countFilter(productFieldSearch));
            $('.product-filter-form').removeClass('active');
        });
        //
        $('.btn-product-filter').click(function (){
            $('.product-filter-form').toggleClass('active');
        });
    </script>
@endsection
