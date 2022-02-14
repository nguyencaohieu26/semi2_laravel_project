@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Create Product')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="create-product-container">
        <div class="pt-3 px-4">
            <form method="POST" action="{{route('products_resource.store')}}" id="form-create-product" class="needs-validation" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" placeholder="Enter product name" value="{{old('product_name')}}" name="name" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Product code is required!</div>
                        @error('product_name')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="product_artist">Artist</label>
                        <input type="text" class="form-control" id="product_artist" placeholder="Enter product artist" value="{{old('product_artist')}}" name="artist" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Product artist is required!</div>
                        @error('product_artist')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <p class="mb-1" style="font-size: 14px;color: #757575">Image</p>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" value="{{old('upload_img')}}" name="upload_img" id="upload_img" required>
                                <label class="custom-file-label" for="upload_img">Choose file</label>
                                <div class="invalid-feedback">Image is required</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="product_size">Size</label>
                        <input type="text" class="form-control" id="product_size" placeholder="Enter product size" value="{{old('product_size')}}" name="size" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Product size is required!</div>
                        @error('product_size')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="product_price">Start Price</label>
                        <input type="text" class="form-control" id="product_price" placeholder="Enter product price" value="{{old('product_price')}}" name="price" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Product size is required!</div>
                        @error('product_price')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="product_date-start">Date Start</label>
                        <input type="date" class="form-control" id="product_date-start" value="{{old('product_date-start')}}" name="product_date-start" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Date Start is required!</div>
                        @error('product_date-start')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="product_date-end">Date End</label>
                        <input type="date" class="form-control" id="product_date-end" value="{{old('product_date-end')}}" name="product_date-end" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Date End is required!</div>
                        @error('product_date-end')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-12">

                    </div>
                </div>
               <div>
                   <p class="mb-2"  style="font-size: 14px;color: #757575">Category</p>
                   <div class="form-row px-4">
                       @foreach(\App\Models\Category::all() as $category)
                           <div class="form-check col-6 col-sm-3 col-md-2 mb-2">
                               <input class="form-check-input" name="category[]" type="checkbox" value="{{$category->id}}" id="{{$category->id.'-'.$category->name}}">
                               <label class="form-check-label" for="{{$category->id.'-'.$category->name}}">{{$category->name}}</label>
                           </div>
                       @endforeach
                   </div>
               </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </section>
@endsection
@section('script_tag')
    <script></script>
@endsection
