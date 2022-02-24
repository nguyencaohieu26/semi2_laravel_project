@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Edit Product')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="edit-product-container">
        <div class="pt-3 px-4">
            <form method="POST" enctype="multipart/form-data" action="/products_resource/{{$product->id}}" id="form-edit-product" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" placeholder="Enter product name" value="{{old('name',optional($product ?? null)->name)}}" name="name" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Product name is required!</div>
                        @error('name')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="product_artist">Artist</label>
                        <select class="product_artist form-control" name="product_artist" style="height: 44px" id="product_artist">
                            @foreach($listArtists as $artist)
                                <option @if(old('product_artist',optional($product ?? null)->artist_id) == $artist->id) selected @endif  value="{{$artist->id}}">{{$artist->name}}</option>
                            @endforeach
                        </select>
                        @error('product_artist')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <p class="mb-1" style="font-size: 14px;color: #757575">Image</p>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" value="{{old('image',optional($product ?? null)->image)}}" name="image" id="upload_img1">
                                <label class="custom-file-label" for="upload_img1">{{old('image',optional($product ?? null)->image)}}</label>
                                <div class="invalid-feedback">Image is required</div>
                            </div>
                        </div>
                        @error('image')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="size">Size</label>
                        <select class="size form-control" name="size" style="height: 44px" id="size">
                            @foreach($sizes as $size)
                                <option value="{{$size->id}}"  @if(old('size',optional($product ?? null)->size_id) == $size->id) selected @endif>{{$size->name}}</option>
                            @endforeach
                        </select>
                        @error('size')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-md-3 mb-3 position-relative">
                        <label for="product_price">Start Price</label>
                        <input type="text" class="form-control pl-4" id="product_price" placeholder="Enter product price" value="{{old('price',optional($product ?? null)->start_price)}}" name="price" required>
                        <div class="position-absolute" style="top: 2.5rem;left: .9rem">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                        </div>
                        @error('price')<div class="error-message">{{$message}}</div>@enderror
                        <div class="invalid-feedback" id="message-invalid-price">Product price is required!</div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="product_status">Status</label>
                        <select class="product_status form-control" name="product_status" style="height: 44px" id="product_status">
                            @foreach($product_status as $status)
                                <option @if(old('product_status',optional($product ?? null)->status_id) == $status->id) selected @endif value="{{$status->id}}">{{$status->name}}</option>
                            @endforeach
                        </select>
                        @error('product_status')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="product_date_start">Date Start</label>
                        <input type="date" class="form-control" id="product_date_start" value="{{old('product_date_start',optional($product ?? null)->date_start)}}" name="product_date_start" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Date Start is required!</div>
                        @error('product_date_start')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-6 mb-3">
                        <label for="product_date_end">Date End</label>
                        <input type="date" class="form-control" id="product_date_end" value="{{old('product_date_end',optional($product ?? null)->date_end)}}" name="product_date_end" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Date End is required!</div>
                        @error('product_date_end')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="product_description">Description</label>
                            <textarea class="form-control"  required id="product_description" name="description" rows="5">{{old('description',optional($product ?? null)->description)}}</textarea>
                        </div>
                        @error('description')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-12">
                        <p class="mb-2"  style="font-size: 14px;color: #757575">Category</p>
                        <div class="form-row px-4 form-group mb-0" id="category-container-select">
                            @php $oldCate = old('categories');@endphp
                        </div>
                        <div class="invalid-feedback mb-2" id="category-message-warning">Looks good!</div>
                        @error('categories')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                </div>
                <div class="pb-3 mt-2">
                    <button class="btn btn-submit py-2" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('script_tag')
    <script>
        //###############################
        $(".custom-file-input").on("change", function() {
            let fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        //############################
        CKEDITOR.replace( 'product_description' );
        //############################
        const functionRenderCategories = ()=>{
            let oldcate = {!! json_encode($oldCate) !!};
            let categories = {!! json_encode($categories) !!};
            let product = {!! json_encode($product) !!};
            let listProductCategory = product.categories.map(cate => cate.id);
            renderCategories();
            function renderCategories(){
                if(!oldcate){
                    categories.forEach(item =>{
                        if(listProductCategory.indexOf(item.id) !== -1){
                            renderCategoryCheckbox(item,true);
                        }else{
                            renderCategoryCheckbox(item,false);
                        }
                    });
                }else{
                    categories.map(item =>{
                        if(oldcate.indexOf(item.id.toString()) !== -1){
                            renderCategoryCheckbox(item,true);
                        }else{
                            renderCategoryCheckbox(item,false);
                        }
                    })
                }
            }
            function renderCategoryCheckbox(item,flag){
                let container = document.querySelector('#category-container-select');
                let div = document.createElement('div');
                div.className = 'form-check col-6 col-sm-3 col-md-2 mb-1';
                div.innerHTML = `
                   <input class="form-check-input" ${flag ? 'checked' : ""}  name="categories[]" type="checkbox" value="${item.id}" id="${item.id+'-'+item.name}">
                              <label class="form-check-label" for="${item.id+'-'+item.name}">${item.name}</label>
                   `
                container.appendChild(div);
            }
        }

        functionRenderCategories();
        //###############################
        $('#product_price').on('input',function (){
            let format1 = formatPriceInput($(this).val());
            let format2 = format1.replaceAll(',','')
            $(this).val(formatPriceInput(format2));
        });
        //
        function formatPriceInput(num){
            return num.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }

        //###############################
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                let forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                let validation = Array.prototype.filter.call(forms, function(form) {
                    //
                    let checkbox = document.getElementsByName("categories[]");
                    let price = document.querySelector('#product_price').value;
                    let checked;
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            form.classList.add('was-validated');
                        }else{
                            for (let i = 0; i < checkbox.length; i += 1) {
                                checked = (checkbox[i].checked || checked === true);
                            }
                            if(checked === false){
                                event.preventDefault();
                                for (let i = 0; i < checkbox.length; i += 1) {
                                    checkbox[i].setAttribute('required','required');
                                }
                                document.querySelector('#category-message-warning').style.display = 'block';
                                document.querySelector('#category-message-warning').innerHTML = 'Category is required';
                                setTimeout(()=>{
                                    for (let i = 0; i < checkbox.length; i += 1) {
                                        checkbox[i].removeAttribute('required');
                                    }
                                },1000);
                            } else{
                                document.querySelector('#product_price').value = price.replaceAll(',','');
                                form.classList.add('was-validated');
                            }
                        }
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
