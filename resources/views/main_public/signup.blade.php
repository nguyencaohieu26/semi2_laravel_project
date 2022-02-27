@extends('layouts.LayoutLogin')
@section('page-title','Login')
@section('content')
    <section class="sign-up-container px-3">
        <div class="sign-up-container-content">
            <h5>Sign up with your email</h5>
            <p style="font-size: 12px;font-weight: 500" class="mb-3"><span class="text-secondary">Already have an account? </span> <a href="{{route('login-account')}}" style="color: #5552ff">Sign in</a></p>
            <form method="POST" action="{{route('accounts_resource.store')}}" class="needs-validation sign-up-form" novalidate id="sign-up-form">
                @csrf
                <div class="form-row">
                    <div class="col-6" style="margin-bottom: 30px">
                        <label class="label-custom">First name</label>
                        <input aria-label="firstname" name="firstname" id="first-name" placeholder="nguyen" value="{{old('firstname')}}" type="text" class="form-control" required>
                        <p class="mb-0"></p>
                        @error('firstname')<div class="alert alert-danger mb-0" style="font-size: 12px">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-6" style="margin-bottom: 30px">
                        <label class="label-custom">Last name</label>
                        <input type="text" aria-label="lastname" name="lastname" id="last-name" placeholder="hieu" class="form-control" value="{{old('lastname')}}" required>
                        <p class="mb-0"></p>
                        @error('lastname')<div class="alert alert-danger mb-0" style="font-size: 12px">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-6" style="margin-bottom: 30px">
                        <label class="label-custom">Email</label>
                        <input type="email" aria-label="email" name="email" id="email" placeholder="nguyenhieu@gmail.com" class="form-control" value="{{old('email')}}" required>
                        <p class="mb-0"></p>
                        @error('email')<div class="alert alert-danger mb-0" style="font-size: 12px">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-6" style="margin-bottom: 30px">
                        <label class="label-custom">Password</label>
                        <input type="password" aria-label="password" name="password" id="password" placeholder="password124" value="{{old('password')}}" class="form-control" required>
                       <p class="mb-0"></p>
                        @error('password')<div class="alert alert-danger mb-0" style="font-size: 12px">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12" style="margin-bottom: 30px">
                        <label class="label-custom">Confirm password</label>
                        <input type="password" aria-label="confirm-password" id="confirm-password" name="confirm-password" value="{{old('confirm-password')}}" placeholder="password124" class="form-control" required>
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input name="Term" aria-label="term" class="form-check-input" style="height: auto" type="checkbox" value="" id="term" required>
                        <label style="font-size: 13px" class="form-check-label" for="input-term">I agree to the <span style="color: #5552ff">Terms of Service </span> and <span style="color: #5552ff">Privacy Policy</span></label>
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="w-100 mt-5">
                    <button class="btn w-100" type="submit">Create account</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('script-tag')
    <script>

        const signUpFormEle         = document.querySelector('#sign-up-form');
        const inputFirstNameEle     = document.querySelector('#first-name');
        const inputLastNameEle      = document.querySelector('#last-name');
        const inputEmailEle         = document.querySelector('#email');
        const inputPasswordEle      = document.querySelector('#password');
        const inputConfirmPassword  = document.querySelector('#confirm-password');
        const inputAcceptTermEle    = document.querySelector('#term');

        function showMessInput(input,message,flag){
            if(flag){
                input.parentElement.classList.remove('error');
            }else{
                input.parentElement.classList.remove('success');
            }
            input.parentElement.classList.add(`${flag ? 'success' : 'error'}`);
            const small = input.parentElement.querySelector('p');
            small.innerText = message;
        }

        //Check Email
        function checkEmailValid(input) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (re.test(input.value.trim())) {
                showMessInput(input,'Look good!',true);
            } else {
                showMessInput(input,'Email is not valid',false);
            }
        }

        //Check Required Field
        function checkRequiredValid(inputArray){
            let isRequired = false;
            inputArray.forEach(function (input){
                if (input.value.trim() === '' && input.type !== 'checkbox') {
                    showMessInput(input, `${getFieldName(input)} is required`,false);
                    isRequired = true;
                }
                if(input.type === 'checkbox'){
                    if(input.checked === false){
                        showMessInput(input, `${getFieldName(input)} is required`,false);
                        isRequired = true;
                    }
                } else {
                    showMessInput(input,`Look good!`,true);
                }
            });
            return isRequired;
        }
        //Check Input Length
        function checkLength(input,min,max){
            if(input.value.length < min){
                showMessInput(input,`${getFieldName(input)} must be at least ${min} characters`,false);
            }else if(input.value.length > max){
                showMessInput(input,`${getFieldName(input)} must be less than ${max} characters`,false);
            }else{
                showMessInput(input,'Look good!',true);
            }
        }
        //Check Password
        function checkPasswordMatch(input1,input2){
            if(input1.value !== input2.value){
                showMessInput(input2,`Password Not Match`,false);
            }
        }

        // Get Field Name
        function getFieldName(input) {
            return input.name;
        }

        signUpFormEle.addEventListener('submit',function (e){
            if(checkRequiredValid([inputFirstNameEle,inputLastNameEle,inputEmailEle,inputPasswordEle,inputConfirmPassword,inputAcceptTermEle])){
                checkLength(inputFirstNameEle,2,30);
                checkLength(inputPasswordEle,6,30);
                checkLength(inputLastNameEle,2,30);
                checkEmailValid(inputEmailEle);
                checkPasswordMatch(inputPasswordEle,inputConfirmPassword);
                e.preventDefault();
            }
        });

    </script>
@endsection
