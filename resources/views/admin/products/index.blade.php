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
                <form>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-2">
                            <input name="id" class="form-control" aria-label="product_id" placeholder="Search by product id"/>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <input name="name" class="form-control" aria-label="" placeholder="Search by name">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <select class="form-control h-100" aria-label="" name="category">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-md-2">
                            <select class="form-control h-100" aria-label="" name="category">
                                @foreach($productStatus as $status)
                                    <option value="{{$status->id}}">{{$status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-md-2">
                            <select class="form-control h-100" aria-label="" name="artist">
                                @foreach($artists as $artist)
                                    <option value="{{$artist->id}}">{{$artist->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2 mt-2">
                            <button type="submit" class="btn btn-primary font-weight-bold">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-3">
                <div class="products-admin-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Stt</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
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
            <div class="pagination-custom">
                <ul class="d-flex"></ul>
            </div>
        </div>
    </section>
@endsection
@section('script_tag')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let productFieldSearch = {
            "name":1,
            "id":undefined,
            "status":undefined,
            "price":undefined,
            "artist":undefined,
            "size":undefined,
            "page":1,
        }
        getProducts(productFieldSearch);

        function getProducts(search){
            $.ajax({
                url:'/products_resource',
                data:{
                    name:search.name,
                    page:search.page,
                    id:search.id,
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
                            let item = `
                                <tr class="">
                                   <th scope="row" style="line-height: 70px">${product.id}</th>
                                   <td class="category-image">
                                    <img width="70px" style="height: 50px" class="rounded mt-2" src="/images_store/products/${product.image}" alt=""/>
                                   </td>
                                   <td class="category-name" style="line-height: 70px">${product.name}</td>
                                    <td class="d-flex" style="line-height: 70px">
                                        <div><a class="text-success" href="#"><i class="ti-pencil-alt2"></i></a></div>
                                        <div class="text-danger" ><i class="ti-trash"></i></div>
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
                        $('.no-data-container').show().html(`
                                <i style="font-size: 30px" class="ti-package"></i>
                                <p>No data found</p>
                        `)
                    }
                }
            })
        }
        function deleteProduct(){
            $.ajax({
                url:'/products_resource/1',
                method:'DELETE',
                success:(result)=>{
                  console.log(result);
                }
            })
        }
    </script>
@endsection
