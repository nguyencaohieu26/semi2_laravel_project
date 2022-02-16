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
            <form method="POST" action="/products_resource/{{$product->id}}" id="form-edit-product" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </section>
@endsection
@section('script_tag')
    <script></script>
@endsection
