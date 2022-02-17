@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Artists')

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
            @if(session('create-artist'))
                <div class="alert alert-success">{{session('create-artist')}}</div>
            @endif
            @if(session('edit-artist'))
                <div class="alert alert-success">{{session('edit-artist')}}</div>
            @endif
        </div>
        <div class="px-4 pt-3"><a href="{{route('artists_resource.create')}}">Create Artist</a></div>
        {{--        --}}
        <div class="pt-3 px-4 d-flex flex-column">
            <div class="artists-admin-filter">
                <form id="artist-search-form">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <input id="artist_id-input" name="id" class="form-control" aria-label="artists_id" placeholder="Search by artist id"/>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-sm-0">
                            <input id="artist_name-input" name="name" class="form-control" aria-label="artists_name" placeholder="Search by name">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-md-0">
                            <select class="form-control h-100" aria-label="status" name="status">
                                <option value="">Choose status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-2 d-flex mt-2 mt-md-0 align-items-start">
                            <button type="submit" class="btn btn-submit font-weight-bold">Search</button>
                            <button id="btn-clear-search" type="button" class="btn btn-clear font-weight-bold ml-2">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-3">
                <div class="artists-admin-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Stt</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody class="artists-list position-relative"></tbody>
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

        let artistFieldSearch = {
            "name":undefined,
            "id":undefined,
            "status":undefined,
            "page":1,
        }

        getArtists(artistFieldSearch);
        function getArtists(search){
            $.ajax({
                url:'/artists_resource',
                data:{
                    name:search.name,
                    page:search.page,
                    id:search.id,
                    status:search.status
                },
                method:'GET',
                success:(result)=>{
                    if(result.data.length > 0){
                        $('.artists-list').html('');
                        $('.no-data-container').hide();
                        result.data.forEach(artist=>{
                            let item = `
                                <tr>
                                    <th scope="row">${artist.id}</th>
                                    <td class="artist-name">${artist.name}</td>
                                    <td class="font-italic" style="font-size: 12px">${new Date(artist.date_of_birth).toLocaleDateString("en-US",{ year: 'numeric', month: 'long', day: 'numeric' })}</td>
                                    <td class="artist-description">${artist.description}</td>
                                    <td style="font-size: 13px" class="font-weight-bold ${artist.status === 1 ? "text-success" : "text-danger"}">${artist.status === 1 ? "Active" : "Inactive"}</td>
                                    <td class="d-flex">
                                        <div><a class="text-success" href="/artists_resource/${artist.id}/edit "><i class="ti-pencil-alt2"></i></a></div>
                                        <div class="text-danger" onclick="deleteArtist(${artist.id})"><i class="ti-trash"></i></div>
                                    </td>
                                <tr>
                            `
                            $('.artists-list').append(item);
                        });
                        $('.pagination-custom ul').html('');
                        const totalPage = result.total;
                        const numberPerPage = result.per_page;
                        for(let i =1; i<=Math.ceil(totalPage/numberPerPage);i++){
                            let pageItem = `<li onclick="getArtists({name:${search.name},id:${search.id},status:${search.status},page: ${i}})" class="page-item-custom ${i === search.page ? "active" : ""}">${i}</li>`;
                            $('.pagination-custom ul').append(pageItem);
                        }
                    }else{
                        $('.artists-list').html('');
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
        function deleteArtist(id){
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
                            url:`/artists_resource/${id}`,
                            method:'POST',
                            data:{id:id,_method:"DELETE"},
                            success:(result)=>{
                                getArtists(artistFieldSearch);
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
        $('#artist-search-form').submit(event=>{
            event.preventDefault();
            let formData = $('#artist-search-form').serializeArray();
            let nameSearch   = formData[1].value;
            let idSearch     = formData[0].value;
            let statusSearch = formData[2].value;
            getArtists({name:nameSearch,id:idSearch,status:statusSearch,page:1});
        });
        //Clear search
        $('#btn-clear-search').click(()=>{
            $('#artist-search-form')[0].reset();
            getArtists(artistFieldSearch);

        });
        setTimeout(clearMessage,1000);
        function clearMessage(){
            $('.response-message').addClass('active')
            setTimeout(()=>{$('.response-message').removeClass('active')},2000);
        }
    </script>
@endsection
