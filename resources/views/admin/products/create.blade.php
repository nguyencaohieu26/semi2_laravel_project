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
            <form method="POST" enctype="multipart/form-data" action="{{route('products_resource.store')}}" id="form-create-product" class="needs-validation" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" placeholder="Enter product name" value="{{old('name')}}" name="name" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Product code is required!</div>
                        @error('name')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="product_artist">Artist</label>
                        <select class="product_artist form-control" name="product_artist" style="height: 44px" id="product_artist">
                            @foreach($artists as $artist)
                                <option {{(old('product_artist') == $artist->id) ? "selected" :"" }} value="{{$artist->id}}">{{$artist->name}}</option>
                            @endforeach
                        </select>
                        @error('product_artist')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <p class="mb-1" style="font-size: 14px;color: #757575">Image</p>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" value="{{old('image')}}" name="image" id="upload_img1" required>
                                <label class="custom-file-label" for="upload_img1">{{old('image') ? old('image') : "Choose file" }}</label>
                                <div class="invalid-feedback">Image is required</div>
                            </div>
                        </div>
                        @error('image')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="product_size">Size</label>
                        <input type="text" class="form-control" id="product_size" placeholder="Enter product size" value="{{old('size')}}" name="size" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Product size is required!</div>
                        @error('size')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="product_price">Start Price</label>
                        <input type="text" class="form-control" id="product_price" placeholder="Enter product price" value="{{old('price')}}" name="price" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Product size is required!</div>
                        @error('price')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="product_status">Status</label>
                        <select class="product_status form-control" name="product_status" style="height: 44px" id="product_status">
                            @foreach($product_status as $status)
                                <option value="{{$status->id}}">{{$status->name}}</option>
                            @endforeach
                        </select>
                        @error('product_status')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="product_date_start">Date Start</label>
                        <input type="date" class="form-control" id="product_date_start" value="{{old('product_date_start')}}" name="product_date_start" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Date Start is required!</div>
                        @error('product_date_start')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="product_date_end">Date End</label>
                        <input type="date" class="form-control" id="product_date_end" value="{{old('product_date_end')}}" name="product_date_end" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Date End is required!</div>
                        @error('product_date_end')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="product_description">Description</label>
                            <textarea class="form-control"  required id="product_description" name="description" rows="5">{{old('description')}}</textarea>
                        </div>
                        @error('description')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                </div>
               <div>
                   <p class="mb-2"  style="font-size: 14px;color: #757575">Category</p>
                   <div class="form-row px-4 form-group">
                       @foreach($categories as $key => $category)
                           @if(old('categories') !== null)
                               @foreach(old('categories') as $id)
                                       <div class="form-check col-6 col-sm-3 col-md-2 mb-2">
                                           <input
                                               class="form-check-input" {{$id == $category->id ? "checked" : ""}} name="categories[]" type="checkbox" value="{{$category->id}}" id="{{$category->id.'-'.$category->name}}">
                                           <label class="form-check-label" for="{{$category->id.'-'.$category->name}}">{{$category->name}}</label>
                                       </div>
                               @endforeach
                           @else
                               <div class="form-check col-6 col-sm-3 col-md-2 mb-2">
                                   <input
                                       class="form-check-input" name="categories[]" type="checkbox" value="{{$category->id}}" id="{{$category->id.'-'.$category->name}}">
                                   <label class="form-check-label" for="{{$category->id.'-'.$category->name}}">{{$category->name}}</label>
                               </div>
                           @endif
                       @endforeach
                   </div>
                   @error('categories')<div class="error-message">{{$message}}</div>@enderror
               </div>
                <div class="pb-3">
                    <button class="btn btn-submit py-2 font-weight-bold" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('script_tag')
    <script>
        $(".custom-file-input").on("change", function() {
            let fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        //
        CKEDITOR.replace( 'product_description' );
        //
        $('#product_price').on('input',function (){
            let format1 = formatPriceInput($(this).val());
            let format2 = format1.replaceAll(',','')
            $(this).val(formatPriceInput(format2));
        });
        //
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            form.classList.add('was-validated');
                        }else{
                             let price = document.querySelector('#product_price').value;
                            document.querySelector('#product_price').value = price.replaceAll(',','');
                            form.classList.add('was-validated');
                        }
                    }, false);
                });
            }, false);
        })();
        //
        function formatPriceInput(num){
            return num.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }
    </script>
@endsection
