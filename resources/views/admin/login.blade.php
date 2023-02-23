@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<section class="login-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <figure class="left_img_cover m-0">
                    <img src="{{asset('admin/images/login.jpg')}}" alt="">
                </figure>
            </div>
            <div class="col-md-6 px-0 d-flex flex-column align-items-center justify-content-center right_text_cover">
                <div class="login_content">
                    <div class="top_child text-center mb-4">
                        <figure>
                            <img src="{{asset('admin/images/logo.svg')}}" alt="">
                        </figure>
                        <h1 class="fs-30px gray-color-900 font-poppins fw-600">Welcome back Affiliate</h1>
                        <span class="gray-color-300 mt-3 fs-14px font-montserrat">Enter your details to login</span>
                        @if(Session::has('success'))
                        <div class="alert alert-success text-center">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                    </div>
                    <div class="middle_child">
                        <form action="{{route('admin.login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="global_input" placeholder="eg. mail@email.com" required autocomplete="off">
                                <label class="global_label">Email</label>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="global_input" required autocomplete="off">
                                <label class="global_label">Password</label>
                            </div>
                            <div class="form-group d-flex justify-content-between align--center">
                                <label for="" class="d-flex align-items-center"> <input type="checkbox" value=""> <span class="gray-color-600 fs-14px fw-500 font-poppins ms-2">Remember Me</span></label>
                                <a href="#" class="fs-14px fw-500 font-poppins text-decoration-none">Forgot password?</a>
                            </div>
                            <button  class="primary-btn" type="submit">Sign in</button>
                        </form>
                    </div>
                    <div class="bottom_child">
                        <div class="signin_buttons text-center">
                            <a href="" type="button" class="secondary-btn text-decoration-none mt-3"><object class="me-3" type="image/svg+xml" data="./images/google.svg"></object>Sign in with Google</a>
                            <a href="" type="button" class="secondary-btn text-decoration-none mt-3"><object class="me-3" type="image/svg+xml" data="./images/facebook.svg"></object>Sign in with Facebook</a>
                        </div>
                        <div class="text_signin text-center mt-3">
                            <span class="gray-color-300 ">Don’t have an account? <a href="{{route('admin.signup')}}" class="primary-color">Sign up</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection