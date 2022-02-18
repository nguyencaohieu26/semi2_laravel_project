@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Blogs')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="blogs-admin-container">
        {{--  message  --}}
        <div class="response-message position-fixed" style="right: 1rem;top: 5.5rem;z-index: 1000">
            @if(session('create-blog'))
                <div class="alert alert-success">{{session('create-blog')}}</div>
            @endif
            @if(session('edit-blog'))
                <div class="alert alert-success">{{session('edit-blog')}}</div>
            @endif
        </div>
        <div class="px-4 pt-3"><a href="{{route('blogs_resource.create')}}">Create Blog</a></div>
        {{--        --}}
        <div class="py-3 px-4 d-flex flex-column">
            <div class="artists-admin-filter">
                <form id="blog-search-form">
                    <div class="form-row">
                        <div class="col-12 col-sm-6 col-md-4">
                            <input id="blog_id-input" name="id" class="form-control" aria-label="blog_id"
                                   placeholder="Search by blog id"/>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mt-2 mt-sm-0">
                            <input id="blog_name-input" name="name" class="form-control" aria-label="blog_title"
                                   placeholder="Search by blog title">
                        </div>
                        <div class="col-12 col-md-4 mt-2 mt-md-0">
                            <select class="form-control h-100" aria-label="status" name="status">
                                <option value="">Choose status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mt-2">
                            <label>Date Start</label>
                            <input  type="date" name="date_start" class="form-control" aria-label="date_start">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mt-2">
                            <label>Date End</label>
                            <input  type="date" name="date_end" class="form-control" aria-label="date_end">
                        </div>
                        <div class="col-4 d-flex mt-2 justify-content-end align-items-end">
                            <button type="submit" class="btn btn-submit font-weight-bold">Search</button>
                            <button id="btn-clear-search--2" type="button"
                                    class="btn btn-clear font-weight-bold ml-2">Clear
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-3">
                <div class="blogs-admin-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">IDs</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Tag</th>
                                <th scope="col">Status</th>
                                <th scope="col">Create At</th>
                                <th scope="col" class="text-right pr-3">Action</th>
                            </tr>
                            </thead>
                            <tbody class="blogs-list position-relative"></tbody>
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

        let blogFieldSearch = {
            "id": undefined,
            "name": undefined,
            "date_start":undefined,
            "date_end":undefined,
            "status": undefined,
            "page": 1,
        }

        getBlogs(blogFieldSearch);

        function getBlogs(search) {
            $.ajax({
                url: '/blogs_resource',
                data: {
                    name: search.name,
                    page: search.page,
                    date_start:search.date_start,
                    date_end:search.date_end,
                    id: search.id,
                    status: search.status
                },
                method: 'GET',
                success: (result) => {
                    console.log(result);
                    if (result.data.length > 0) {
                        $('.blogs-list').html('');
                        $('.no-data-container').hide();
                        result.data.forEach(blog => {
                            let item = `
                                <tr>
                                    <th scope="row">${blog.id}</th>
                                    <td class="blogs-image">
                                        <img width="100%" style="height:80px" class="rounded" src="/images_store/blogs/${blog.image}" alt="${blog.title}"/>
                                   </td>
                                    <td class="blog-name">${blog.title}</td>
                                    <td class="blog-author">${blog.author}</td>
                                    <td class="blog-tag">${blog.tag}</td>
                                    <td style="font-size: 13px" class="${blog.status === 1 ? "text-success" : "text-danger"}">${blog.status === 1 ? "Active" : "Inactive"}</td>
                                    <td class="" style="font-size: 12px">${new Date(blog.created_at).toLocaleDateString("en-US",{ year: 'numeric', month: 'long', day: 'numeric' })}</td>
                                    <td class="d-flex justify-content-end">
                                        <div><a class="text-success" href="/blogs_resource/${blog.id}/edit"><i class="ti-pencil-alt2 pr-1 border-right"></i></a></div>
                                        <div class="text-danger" onclick="deleteBlog(${blog.id})"><i class="ti-trash pl-1"></i></div>
                                    </td>
                                <tr>
                            `
                            $('.blogs-list').append(item);
                        });
                        $('.pagination-custom ul').html('');
                        const totalPage = result.total;
                        const numberPerPage = result.per_page;
                        for (let i = 1; i <= Math.ceil(totalPage / numberPerPage); i++) {
                            let pageItem = `<li onclick="getBlogs({name:${search.name},id:${search.id},status:${search.status},date_start:${search.date_start},date_end:${search.date_end},page: ${i}})" class="page-item-custom ${i === search.page ? "active" : ""}">${i}</li>`;
                            $('.pagination-custom ul').append(pageItem);
                        }
                    } else {
                        $('.blogs-list').html('');
                        $('.pagination-custom ul').html('');
                        $('.no-data-container').show().html(`
                                <i style="font-size: 30px" class="ti-package"></i>
                                <p>No data found</p>
                        `)
                    }
                }
            })
        }

        function deleteBlog(id) {
            $.confirm({
                title: `<h5>Remove Blog</h5>`,
                content: `<div>
                            <p>Are you sure to delete the blog!</p>
                          </div>`,
                autoClose: 'cancelAction|8000',
                buttons: {
                    confirm: function () {
                        console.log('run');
                        $.ajax({
                            url: `/blogs_resource/${id}`,
                            method: 'POST',
                            data: {id: id, _method: "DELETE"},
                            success: (result) => {
                                getBlogs(blogFieldSearch);
                                $('.response-message').html('').addClass('active').append(`
                                    <div class="alert alert-success">${result}</div>
                                `);
                                setTimeout(() => {
                                    $('.response-message').removeClass('active')
                                }, 2000);
                            }
                        })
                    },
                    cancelAction: function () {
                    },
                }
            });
        }

        //Search
        $('#blog-search-form').submit(event => {
            event.preventDefault();
            let formData = $('#blog-search-form').serializeArray();
            let nameSearch = formData[1].value ? formData[1].value : undefined;
            let idSearch = formData[0].value ? formData[0].value : undefined;
            let statusSearch = formData[2].value ? formData[2].value :undefined;
            let date_startSearch = formData[3].value ? formData[3].value : undefined;
            let date_endSearch = formData[4].value ? formData[4].value : undefined;
            getBlogs({name: nameSearch, id: idSearch, status: statusSearch,date_start:date_startSearch,date_end:date_endSearch ,page: 1});
        });
        //
        $('#btn-clear-search--2').click(() => {
            $('#blog-search-form')[0].reset();
            getBlogs(blogFieldSearch);
        });

        setTimeout(clearMessage, 1000);

        function clearMessage() {
            $('.response-message').addClass('active')
            setTimeout(() => {
                $('.response-message').removeClass('active')
            }, 2000);
        }
    </script>
@endsection
