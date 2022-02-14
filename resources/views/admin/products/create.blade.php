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
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </section>
@endsection
@section('script_tag')
    <script></script>
@endsection
