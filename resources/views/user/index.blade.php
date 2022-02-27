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
    <div class="form-user p-3 rounded h-100">
        <div class="bg-white p-4 pb-5 rounded">
            <form method="post" action="{{route('users_resource.update',$user->id)}}"
                  enctype="multipart/form-data" class="needs-validation pt-3" novalidate>
                @csrf
                @method('PUT')
                <div class="form-row mb-3">
                    <div class="col-8 col-sm-4 col-md-3 col-lg-2 rounded overflow-hidden mb-2 mb-sm-0">
                        <img style="max-height: 140px" class="rounded" width="100%" src="images_store/accounts/{{$user->avatar}}" alt="{{$user->lastname ."-".$user->firstname.'avatar'}}"/>
                        <div class="custom-file mt-2">
                            <input type="file" class="custom-file-input" name="image" id="customFile">
                            <label class="custom-file-label" for="customFile">{{old('image',optional($user ?? null)->avatar)}}</label>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-9 col-lg-10">
                        <div class="form-row">
                            <div class="mb-3 col-12 col-sm-6">
                                <label for="firstname" class="text-capitalize">first name</label>
                                <input type="text" name="f_name" class="form-control" id="firstname"  placeholder="First Name"
                                       value="{{old('f_name',optional($user ?? null)->firstname)}}" required>
                                <div class="valid-feedback">look good!</div>
                                <div class="invalid-feedback">First name is required</div>
                                @error('f_name')<div class="error-message">{{$message}}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label for="lastname" class="text-capitalize">last name</label>
                                <input type="text" name="l_name" class="form-control" id="lastname" placeholder="Last Name"
                                       value="{{old('l_name',optional($user ?? null)->lastname)}}" required>
                                <div class="valid-feedback">look good!</div>
                                <div class="invalid-feedback">Last name is required</div>
                                @error('l_name')<div class="error-message">{{$message}}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <label for="email" class="text-capitalize">email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                       value="{{old('email',optional($user ?? null)->email)}}" required>
                                <div class="valid-feedback">look good!</div>
                                <div class="invalid-feedback">Email is required</div>
                                @error('email')<div class="error-message">{{$message}}</div>@enderror
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="birthday" class="text-capitalize">birthday</label>
                                <input type="date" name="birthday" class="form-control" id="birthday"
                                       value="{{old('birthday',optional($user ?? null)->date_of_birth)}}" required>
                                <div class="valid-feedback">look good!</div>
                                <div class="invalid-feedback">Birthday is required</div>
                                @error('birthday')<div class="error-message">{{$message}}</div> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-12 col-md-4 mb-3">
                        <label for="address" class="text-capitalize">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address"
                               value="{{old('address',optional($user ?? null)->address)}}" required>
                        <div class="valid-feedback">look good!</div>
                        <div class="invalid-feedback">Address is required</div>
                        @error('address')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <label for="address" class="text-capitalize">Phone</label>
                        <input type="text" name="phone" class="form-control" id="address" placeholder="Phone"
                               value="{{old('address',optional($user ?? null)->phone)}}" required>
                        <div class="valid-feedback">look good!</div>
                        <div class="invalid-feedback">Phone is required</div>
                        @error('address')<div class="error-message">{{$message}}</div>@enderror
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <label for="gender">Gender</label>
                        <select class="custom-select" style="height: 44px" id="gender" name="gender" required>
                            <option disabled value="">Choose gender</option>
                            <option value="0" {{old('gender',optional($user ?? null)->gender) === 0 ? 'selected' :""}}>Female</option>
                            <option value="1" {{old('gender',optional($user ?? null)->gender) === 1 ? 'selected' :""}}>Male</option>
                            <option value="2" {{old('gender',optional($user ?? null)->gender) === 2 ? 'selected' :""}}>Other</option>
                        </select>
                        <div class="invalid-feedback">Please select a valid gender.</div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-submit mt-1" style="padding-top:8px;padding-bottom:8px">Update Info</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script_tag')
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                let forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                let validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        //
        $(".custom-file-input").on("change", function () {
            let fileName = $(this).val().split("\\").pop();
            console.log($('#customFile').filename);
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        //
        let inputOldPassword         = $('#old-password');
        let inputNewPassword         = $('#new-password');
        let inputConfirmNewPassword  = $('#confirm-new-password');

        function showMessInput(input,message,flag){
            if(flag){
                input.parent().removeClass('error');
            }else{
                input.parent().removeClass('success');
            }
            input.parent().addClass(`${flag ? 'success' : 'error'}`);
            const small = input.parent().children('p');
            small.text(message);
        }

        function checkPassword(input){
            let mediumRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$");
            let isValidPassword = false;
            if(mediumRegex.test(input.value)){
                showMessInput(input,`Look good!`,true);
                isValidPassword = true;
                console.log('run');
            }else{
                console.log('run');
                showMessInput(input,`${input.attr('name')}
                minimum eight characters, at least one uppercase letter, one lowercase
                letter and one number`,false)
            }
            return isValidPassword;
        }

        $('#change-password-form').submit(e=>{
            e.preventDefault();
            let isAllValid = false;
            if(checkPassword(inputNewPassword)){
                isAllValid = true;
            }
            if(!checkRequired([inputOldPassword])){
                isAllValid = true;
            }
            if(!checkRequired([inputConfirmNewPassword])){
                if(checkPasswordMatch(inputNewPassword,inputConfirmNewPassword)){
                    isAllValid = true;
                }
            }
            console.log(inputNewPassword.val());
            console.log(isAllValid);
            if(isAllValid){
                e.preventDefault();
                // $.ajax({
                //     url:`changePassword`,
                //     method:'POST',
                //     data:{oldPassword:inputOldPassword.val(),newPassword:inputNewPassword.val()},
                //     success:result =>{
                //         if(result.status === 1){
                //             alert('Change Password Successfully');
                //         }else{
                //             showMessInput(inputOldPassword,'Old password not match',false);
                //         }
                //     }
                // })
            }
        })


        function checkRequired(inputArray){
            let isRequired = false;
            inputArray.forEach(function (input){
                if (input.val().trim() === '') {
                    showMessInput(input, `${input.attr('name')} is required`,false);
                    isRequired = true;
                } else {showMessInput(input,`Look good!`,true);}
            });
            return isRequired;
        }
        function checkPasswordMatch(input1,input2){
            if(input1.val() !== input2.val()) {
                showMessInput(input2,'Confirm password not match',false);
                return false;
            }
            return  true;
        }
    </script>
@endsection




