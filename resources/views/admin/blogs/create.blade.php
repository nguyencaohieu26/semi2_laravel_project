@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Create Blog')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="create-blog-container">
        <div class="pt-3 px-4">
            <form method="POST" action="{{route('blogs_resource.store')}}" id="form-create-blog" class="needs-validation" novalidate>
                @csrf
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </section>
@endsection
@section('script_tag')
    <script></script>
@endsection
