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
                        <div class="col-12 col-sm-6 col-md-2">
                            <input name="name" class="form-control" aria-label="" placeholder="Search by name">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <select class="form-control h-100" aria-label="" name="category">
                                @php $categories = \App\Models\Category::all(); @endphp
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <select class="form-control h-100" aria-label="" name="category">
                                @php $status_product = \App\Models\Product_Status::all(); @endphp
                                @foreach($status_product as $status)
                                    <option value="{{$status->id}}">{{$status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
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
                            <tbody class="">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td class="d-flex">
                                    <div class="text-success"><i class="ti-pencil-alt2"></i></div>
                                    <div class="text-danger" onclick="deleteProduct(1)"><i class="ti-trash"></i></div>
                                </td>
                            </tr>
                            </tbody>
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
        getProducts();

        function getProducts(){
            $.ajax({
                url:'/products_resource',
                method:'GET',
                success:(result)=>{
                    console.log(result);
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
