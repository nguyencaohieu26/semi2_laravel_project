@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Categories')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="artists-admin-container">
        {{--  message  --}}
        <div class="response-message position-fixed" style="right: 1rem;top: 5.5rem;z-index: 1000">
            @if(session('create-category'))
                <div class="alert alert-success">{{session('create-category')}}</div>
            @endif
            @if(session('edit-category'))
                <div class="alert alert-success">{{session('edit-category')}}</div>
            @endif
        </div>
        <div class="px-4 pt-3"><a href="{{route('categories_resource.create')}}">Create Category</a></div>
        {{--        --}}
        <div class="p-3 px-4 d-flex flex-column">
            <div class="category-admin-filter">
                <form id="category-search-form">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <input id="category_id-input" name="id" class="form-control" aria-label="category_id" placeholder="Search by category id"/>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-sm-0">
                            <input id="category_name-input" name="name" class="form-control" aria-label="category_name" placeholder="Search by name">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-md-0">
                            <input id="category_code-input" name="code" class="form-control" aria-label="category_code" placeholder="Search by category code">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-md-0">
                            <select class="form-control h-100" aria-label="status" name="status">
                                <option value="" selected>Choose status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex mt-2 justify-content-end">
                            <button type="submit" class="btn btn-submit font-weight-bold">Search</button>
                            <button id="btn-clear-search--1" type="button" class="btn btn-clear font-weight-bold ml-2">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-3">
                <div class="categories-admin-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category Code</th>
                                <th scope="col">Status</th>
                                <th scope="col">On/Off</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody class="category-list position-relative"></tbody>
                        </table>
                    </div>
                </div>
                <div class="no-data-container p-3 text-center"></div>
            </div>
            <div class="pagination-custom mt-auto">
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
        //
        let categoryFieldSearch = {
            "name":undefined,
            "id":undefined,
            "status":undefined,
            "code":undefined,
            "page":1,
        }
        //
        getCategories(categoryFieldSearch);
        //
        function getCategories(search){
            $.ajax({
                url:'/categories_resource',
                data:{name:search.name,page:search.page,id:search.id,status:search.status,code:search.code},
                method:'GET',
                success:(result)=>{
                    console.log(result.data);
                    if(result.data.length > 0){
                        $('.category-list').html('');
                        $('.no-data-container').hide();
                        result.data.forEach((category)=>{
                            let item = `
                                <tr class="">
                                   <th scope="row" style="line-height: 70px">${category.id}</th>
                                   <td class="category-image">
                                    <img width="70px" style="height: 50px" class="rounded mt-2" src="/images_store/categories/${category.image}" alt=""/>
                                   </td>
                                   <td class="category-name" style="line-height: 70px">${category.name}</td>
                                   <td class="category-code" style="line-height: 70px">${category.category_code}</td>
                                   <td class="category-code ${category.status === 1 ? "text-success" : "text-danger"}" style="line-height: 70px;font-size: 13px">${category.status === 1 ? "Active":"Inactive"}</td>
                                   <td class="" style="line-height: 70px">change</td>
                                    <td class="d-flex" style="line-height: 70px">
                                        <div><a class="text-success" href="/categories_resource/${category.id}/edit "><i class="ti-pencil-alt2"></i></a></div>
                                        <div class="text-danger" onclick="deleteCategory(${category.id})"><i class="ti-trash"></i></div>
                                   </td>
                                <tr>
                            `
                            $('.category-list').append(item);
                        });
                        $('.pagination-custom ul').html('');
                        const totalPage = result.total;
                        const numberPerPage = result.per_page;
                        for(let i =1; i<=Math.ceil(totalPage/numberPerPage);i++){
                            let pageItem = `<li onclick="getCategories({name:${search.name},id:${search.id},status:${search.status},page: ${i},code:${search.code}})" class="page-item-custom ${i === search.page ? "active" : ""}">${i}</li>`;
                            $('.pagination-custom ul').append(pageItem);
                        }
                    }else{
                        $('.category-list').html('');
                        $('.pagination-custom ul').html('');
                        $('.no-data-container').show().html(`
                                <i style="font-size: 30px" class="ti-package"></i>
                                <p>No data found</p>
                        `)
                    }
                }
            })
        }
        //
        function deleteCategory(id){
            $.confirm({
                title: `<h5>Remove Category</h5>`,
                content: `<div>
                            <p>Are you sure to delete the category!</p>
                          </div>`,
                autoClose: 'cancelAction|8000',
                buttons: {
                    confirm: function () {
                        console.log('run');
                        $.ajax({
                            url:`/categories_resource/${id}`,
                            method:'POST',
                            data:{id:id,_method:"DELETE"},
                            success:(result)=>{
                                getCategories(categoryFieldSearch);
                                $('.response-message').html('').addClass('active').append(`
                                    <div class="alert alert-success">${result}</div>
                                `);
                                setTimeout(()=>{$('.response-message').removeClass('active')},2000);
                            }
                        })
                    },
                    cancelAction: function () {},
                }
            });
        }
        //Search
        $('#category-search-form').submit(event=>{
            event.preventDefault();
            let formData = $('#category-search-form').serializeArray();
            let nameSearch   = formData[1].value ? formData[1].value : undefined;
            let idSearch     = formData[0].value ? formData[0].value : undefined;
            let codeSearch = formData[2].value ? formData[2].value : undefined;
            let statusSearch = formData[3].value ? formData[3].value : undefined;
            getCategories({name:nameSearch,id:idSearch,status:statusSearch ,page: 1,code:codeSearch})
        });
        //Clear search
        $('#btn-clear-search--1').click(()=>{
            $('#category-search-form')[0].reset();
            getCategories(categoryFieldSearch);
        });
        //
        setTimeout(clearMessage,1000);
        function clearMessage(){
            $('.response-message').addClass('active')
            setTimeout(()=>{$('.response-message').removeClass('active')},2000);
        }

    </script>
@endsection
