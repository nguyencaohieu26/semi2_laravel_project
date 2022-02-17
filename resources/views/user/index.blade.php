@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Dashboard')

@section('navbar')
    @include('components.navbarUser')
@endsection

@section('header')
    @include('components.headerUser')
@endsection

@section('content')
    <!-- main content area start -->
    <div class="main-content-inner">
        <div class="response-message position-fixed" style="right: 1rem;top: 5.5rem;z-index: 1000">
            @if(session('create-user'))
                <div class="alert alert-success">{{session('create-user')}}</div>
            @endif
            @if(session('edit-user'))
                <div class="alert alert-success">{{session('edit-user')}}</div>
            @endif
        </div>
        <div class="px-4 pt-3"><a href="{{route('accounts_resource.create')}}">Create User</a></div>
        <div class="pt-3 d-flex flex-column">
            <div class="user-admin-filter">
                <form id="user-search-form">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <input id="blog_id-input" name="id" class="form-control" aria-label="artists_id"
                                   placeholder="Search by blog id"/>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-md-0">
                            <input id="blog_name-input" name="name" class="form-control" aria-label="artists_name"
                                   placeholder="Search by blog title">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-md-0">
                            <input id="blog_name-input" type="date" name="name" class="form-control"
                                   aria-label="artists_name" placeholder="Search by blog title">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-md-0">
                            <select class="form-control h-100" aria-label="status" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-2 d-flex mt-2">
                            <button type="submit" class="btn btn-primary font-weight-bold">Search</button>
                            <button id="btn-clear-search--2" type="button"
                                    class="btn btn-outline-secondary font-weight-bold ml-2">Clear
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="user-admin-list py-3 ">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">IDs</th>
                            <th scope="col">FirstName</th>
                            <th scope="col">LastName</th>
                            <th scope="col" class="text-capitalize">date_of_birthday</th>
                            <th scope="col" class="text-capitalize">gender</th>
                            <th scope="col" class="text-capitalize">email</th>
                            <th scope="col" class="text-capitalize">avatar</th>
                            <th scope="col" class="text-capitalize">password</th>
                            <th scope="col" class="text-capitalize">balance</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

