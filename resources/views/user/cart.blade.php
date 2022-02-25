@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','User Info')

@section('navbar')
    @include('components.navbarUser')
@endsection

@section('header')
    @include('components.headerUser')
@endsection

@section('content')
    <section class="">
        <div>Cart</div>
    </section>
@endsection

@section('script_tag')
    <script></script>
@endsection




