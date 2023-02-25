@extends('admin.layouts.master')
@section('css')
<style>
    .invalid-feedback{
        display:block !important;
    }
</style>
@endsection
@section('content')
<section class="login-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <figure class="left_img_cover m-0">
                    <img src="{{asset('admin/images/register.jpg')}}" alt="">
                </figure>
            </div>
            <div class="col-md-6 px-0 d-flex flex-column align-items-center justify-content-start right_text_cover">
                <div class="login_content">
                    <div class="top_child text-center mb-4">
                        <figure>
                            <img src="{{asset('admin/images/logo.svg')}}" alt="">
                        </figure>
                        <h1 class="fs-30px gray-color-900 font-poppins fw-600">Affiliate Registration</h1>
                    </div>
                    <div class="middle_child">
                        <form class="row" action="{{route('admin.register')}}" method="post">
                            @csrf
                            <div class="form-group col-md-6 ps-md-0">
                                <input type="hidden" name="ref" value="{{isset(request()->ref) ? request()->ref : ''}}">
                                <input type="text" name="fname" class="global_input" placeholder="eg. john" value="{{old('fname')}}" required>
                                <label class="global_label">First Name</label>
                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 pe-md-0">
                                <input type="text" name="lname" class="global_input" placeholder="eg. doe" value="{{old('lname')}}" required>
                                <label class="global_label">Last Name</label>
                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 px-md-0">
                                <input type="email" name="email" class="global_input" placeholder="eg. mail@email.com" value="{{old('email')}}" required>
                                <label class="global_label">Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 ps-md-0">
                                <input type="text" name="city" class="global_input" placeholder="eg. New York" value="{{old('city')}}" required>
                                <label class="global_label">City</label>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 pe-md-0">
                                <input type="text" name="state" class="global_input" placeholder="eg. Dublin" value="{{old('state')}}" required>
                                <label class="global_label">State</label>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 ps-md-0">
                                <input type="text" name="country" class="global_input" placeholder="eg. Denmark" value="{{old('country')}}" required>
                                <label class="global_label">Country</label>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 pe-md-0">
                                <input type="text" name="website" class="global_input" placeholder="eg. myonlinetutor.com" value="{{old('website')}}">
                                <label class="global_label">Website</label>
                            </div>
                            <div class="form-group col-md-12 px-md-0">
                                <input type="password" name="password" class="global_input" placeholder="Set your password here"  required>
                                <label class="global_label">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 px-md-0">
                                <input type="password" name="password_confirmation" class="global_input" placeholder="Rewrite the password here" required>
                                <label class="global_label">Confirm Password</label>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12 px-md-0 mb-0">
                                <button class="primary-btn" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="bottom_child">
                        <div class="signin_buttons text-center">
                            <a href="" type="button" class="secondary-btn text-decoration-none mt-3"><object class="me-3" type="image/svg+xml" data="./images/google.svg"></object>Sign in
                                with Google</a>
                            <a href="" type="button" class="secondary-btn text-decoration-none mt-3"><object class="me-3" type="image/svg+xml" data="./images/facebook.svg"></object>Sign in
                                with Facebook</a>
                        </div>
                        <div class="text_signin text-center mt-3">
                            <span class="gray-color-300 ">Already have an account? <a href="{{route('admin.home')}}" class="primary-color">Sign in</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection