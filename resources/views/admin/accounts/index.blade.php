@extends('layouts.LayoutAdmin')

{{-- Custom name for location pages --}}
@section('location_page','Users')

@section('navbar')
    @include('components.navbarAdmin')
@endsection

@section('header')
    @include('components.headerAdmin')
@endsection

@section('content')
    <section class="users-admin-container">
        <div class="pt-3 px-4 d-flex flex-column">
            <div class="users-admin-filter">
                <form id="user-search-form">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <input  name="id" class="form-control" aria-label="user_id" placeholder="Search by user id"/>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-sm-0">
                            <input  name="name" class="form-control" aria-label="user_name" placeholder="Search by name">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-md-0">
                            <input  name="email" class="form-control" aria-label="user_email" placeholder="Search by email">
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mt-2 mt-md-0">
                            <select class="form-control h-100" aria-label="role" name="role">
                                <option value="">Choose role</option>
                                <option value="1">USER</option>
                                <option value="2">ADMIN</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex mt-2 justify-content-end">
                            <button type="submit" class="btn btn-submit font-weight-bold">Search</button>
                            <button id="btn-clear-search" type="button" class="btn btn-clear font-weight-bold ml-2">Clear</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-3">
                <div class="users-admin-list">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Stt</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody class="users-list position-relative"></tbody>
                        </table>
                    </div>
                </div>
                <div class="no-data-container p-3 text-center"></div>
            </div>
            <div class="pagination-custom mt-auto">
                <ul class="d-flex pb-3"></ul>
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
        let userListContainer       = $('.users-list');
        let paginationContainer     = $('.pagination-custom ul');
        let noDataContainer         = $('.no-data-container');
        let accountFieldSearch = {
            name:undefined,
            id:undefined,
            role:undefined,
            email:undefined,
            page:1,
        }
        getUsers(accountFieldSearch);

        function getUsers(search){
            $.ajax({
                url:`/users_resource`,
                method:'GET',
                data:{
                    'name' :search.name,
                    'id'   :search.id,
                    'email':search.email,
                    'role' :search.role,
                    'page' :search.page,
                },
                success:result =>{
                    if(result.data.length > 0){
                        console.log(result.data);
                        noDataContainer.hide();
                        userListContainer.html('');
                        result.data.forEach(user =>{
                            let gender = user.gender === 1 ? 'Male' : (user.gender === 0 ? 'Female' : 'Other');
                            let genderClasses = user.gender === 1 ? 'text-danger' : (user.gender === 0 ? 'text-primary' : 'text-secondary');
                            let userItem = `
                            <tr>
                                <td>${user.id}</td>
                                <td><img width="40px" src="/images_store/accounts/${user.avatar}" alt="${user.firstname + " "+user.lastname}"/></td>
                                <td>${user.firstname + " "+user.lastname}</td>
                                <td>${user.email}</td>
                                <td class="${genderClasses}" style="font-size: 12px">${gender}</td>
                                <td class="font-italic" style="font-size: 12px;color: #0c5460">${new Date(user.date_of_birth).toLocaleDateString("en-US",{ year: 'numeric', month: 'long', day: 'numeric' })}</td>
                                <td class="" style="font-size: 12px">${user.role}</td>
                                <td class="d-flex">
                                    <div><a class="text-success" onclick="alert('No function found!')"><i class="ti-eye border-right pr-2"></i></a></div>
                                    <div class="text-danger" onclick="alert('No function found!')"><i class="ti-trash pl-2"></i></div>
                                </td>
                            </tr>
                            `
                            userListContainer.append(userItem);
                        })
                            //#######
                            paginationContainer.html('');
                            const totalPage = result.total;
                            const numberPerPage = result.per_page;
                            for(let i =1; i<=Math.ceil(totalPage/numberPerPage);i++){
                                let pageItem = `<li onclick="getUsers({id:${search.id},name:${search.name},email:${search.email},role:${search.role},page:${i}})" class="page-item-custom ${i === search.page ? "active" : ""}">${i}</li>`;
                                paginationContainer.append(pageItem);
                            }
                    }else{
                        userListContainer.html('');
                        paginationContainer.html('');
                        noDataContainer.show().html(`
                                <i style="font-size: 30px" class="ti-package"></i>
                                <p>No data found</p>`)
                    }
                }
            })
        }
        $('#btn-clear-search').click(function (){
            $('#user-search-form')[0].reset();
            getUsers(accountFieldSearch)
        });
        $('#user-search-form').submit(e=>{
            e.preventDefault();
            let formData =  $('#user-search-form').serializeArray();
            getUsers({
                'name' :formData[1].value ? formData[1].value : undefined,
                'id'   :formData[0].value ? formData[0].value : undefined,
                'email':formData[2].value ? formData[2].value : undefined,
                'role' :formData[3].value ? formData[3].value : undefined,
                'page' :1,
            })
        })
        //#########

    </script>
@endsection
