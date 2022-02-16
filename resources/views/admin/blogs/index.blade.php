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
        <div class="pt-3 px-4 d-flex flex-column">
            <div class="artists-admin-filter">
                <form id="blog-search-form">
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
            <div class=" mt-3">
                <div class="blogs-admin-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">IDs</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Thumbnail</th>
                                {{--                                <th scope="col">Tag</th>--}}
                                <th scope="col">Status</th>
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
            "id": '',
            "title": '',
            "author": '',
            "status": '',
            'created_at': '',
            "page": 1,
        }

        getBlogs(blogFieldSearch);

        function getBlogs(search) {
            $.ajax({
                url: '/blogs_resource',
                data: {name: search.name, page: search.page, id: search.id, status: search.status},
                method: 'GET',
                success: (result) => {
                    if (result.data.length > 0) {
                        $('.blogs-list').html('');
                        $('.no-data-container').hide();
                        result.data.forEach(blogs => {
                            let item = `
                                <tr>
                                    <th scope="row">${blogs.id}</th>
                                    <td class="artist-name">${blogs.title}</td>
                                    <td class="artist-description">${blogs.author}</td>
                                    <td class="blogs-image">
                                    <img width="70px" style="height: 50px" class="rounded mt-2" src="/images_store/blogs/${blogs.image}" alt=""/>
                                   </td>
                                    <td style="font-size: 13px" class="font-weight-bold ${blogs.status === 1 ? "text-success" : "text-danger"}">${blogs.status === 1 ? "Active" : "Inactive"}</td>
                                    <td class="d-flex">
                                        <div><a class="text-success" href="/artists_resource/${blogs.id}/edit "><i class="ti-pencil-alt2"></i></a></div>
                                        <div class="text-danger" onclick="deleteBlog(${blogs.id})"><i class="ti-trash"></i></div>
                                    </td>
                                <tr>
                            `
                            $('.blogs-list').append(item);
                        });
                        $('.pagination-custom ul').html('');
                        const totalPage = result.total;
                        const numberPerPage = result.per_page;
                        for (let i = 1; i <= Math.ceil(totalPage / numberPerPage); i++) {
                            let pageItem = `<li onclick="getBlogs({name:'',id:'',status:'',page: ${i}})" class="page-item-custom ${i === search.page ? "active" : ""}">${i}</li>`;
                            $('.pagination-custom ul').append(pageItem);
                        }
                    } else {
                        $('.no-data-container').show();
                        $('.no-data-container').html(`
                                <i style="font-size: 30px" class="ti-package"></i>
                                <p>No data found</p>
                        `)
                    }
                }
            })
        }

        function deleteBlog(id) {
            $.confirm({
                title: `<h5>Remove Artist</h5>`,
                content: `<div>
                            <p>Are you sure to delete the artist!</p>
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
                                getArtists(artistFieldSearch);
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

        Search
        $('#blog-search-form').submit(event => {
            event.preventDefault();
            let formData = $('#blog-search-form').serializeArray();
            let nameSearch = formData[1].value;
            let idSearch = formData[0].value;
            let statusSearch = formData[2].value;
            getArtists({name: nameSearch, id: idSearch, status: statusSearch, page: 1});
        });

        Clear
        search
        $('#btn-clear-search--2').click(() => {
            getBlogs(artistFieldSearch);
            $('#artist_id-input').val('');
            $('#artist_name-input').val('');
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
