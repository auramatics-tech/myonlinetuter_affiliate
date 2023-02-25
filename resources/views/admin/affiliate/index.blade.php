@extends('admin.layouts.master')
@section('css')
<style>
    .invalid-feedback {
        display: block !important;
    }

    img {
        cursor: pointer !important;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row flex-nowrap">
        @include('admin.layouts.sidebar')
        <div class="col width-right py-lg-5 py-md-4 py-3">
            <div class="container">
                @include('admin.layouts.header')
                <div class="main_content mt-5">
                    <div class="row mb-5">
                        <div class="col-lg-5 col-12 mb-3">
                            <h3 class="fs-30px fw-600 font-lexend black-color">Referral URL</h3>
                            <p class="mb-0 fs-18px fw-400 font-lexend black-color">Share your Referral URL with your
                                audience to earn Commission</p>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="input_card d-flex align-items-center gap-3">
                                <object data="{{asset('admin/images/url.svg')}}" type="image/svg+xml" width="18" height="18"></object>
                                <span class="fs-18px fw-400 font-lexend black-color" id="pre_url">{{route('home')}}?ref={{auth()->user()->get_first_referral_id->referral_id}}</span>
                                <span class="ms-auto"><img src="{{asset('admin/images/content_copy.svg')}}" onclick="copyToClipboard('#pre_url')" width="18" height="18" class="ms-auto" /></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-md-5 mb-3">
                        <div class="col-lg-5 col-12 mb-3">
                            <h3 class="fs-30px fw-600 font-lexend black-color">Referral URL Generator</h3>
                            <p class="mb-0 fs-18px fw-400 font-lexend black-color">Use this form to generate a
                                referral link.</p>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="input_card_parent">
                                <h6 class="fw-400 fs-24px font-lexend">Page URL</h6>
                                <div class="input_card d-flex align-items-center gap-3 my-3">
                                    <span class="fs-18px fw-400 font-lexend black-color" id="home_url">{{route('home')}}</span>
                                    <span class="ms-auto"><img src="{{asset('admin/images/content_copy.svg')}}" onclick="copyToClipboard('#home_url')" width="18" height="18" class="ms-auto" /></span>
                                </div>
                                <h6 class="fw-400 fs-24px font-lexend">Campaign Name</h6>
                                <p class="mb-0 fs-18px fw-400 font-lexend black-color">Enter an optional campaign
                                    name to help track performance.</p>
                                <div class="input_card d-flex align-items-center gap-3 my-3">
                                    <input class="fs-18px fw-400 w-75 border-0 font-lexend black-color" placeholder="{{auth()->user()->get_last_referral_id->referral_id}}" id="referral_val" type="text" />
                                    <span class="ms-auto"><button class="btn primary-btn btn-sm create_url">Create</button></span>
                                </div>
                                <h6 class="fw-400 fs-24px font-lexend">Generated referral URL</h6>
                                <p class="mb-0 fs-18px fw-400 font-lexend black-color">Share this URL with your
                                    audience.</p>
                                <div class="input_card d-flex align-items-center gap-3 my-3">
                                    <object data="{{asset('admin/images/url.svg')}}" type="image/svg+xml" width="18" height="18"></object>
                                    <span class="fs-18px fw-400 font-lexend black-color" id="created_url">{{route('home')}}?ref={{auth()->user()->get_last_referral_id->referral_id}}</span>
                                    <span class="ms-auto"><img src="{{asset('admin/images/content_copy.svg')}}" onclick="copyToClipboard('#created_url')" width="18" height="18" class="ms-auto" /></span>
                                </div>
                                <h6 class="fw-400 fs-24px font-lexend">Share this URL</h6>
                                <div class="input_card d-flex align-items-center gap-5 my-3">
                                    <a href="" class="d-flex align-items-center gap-3 text-decoration-none">
                                        <object data="{{asset('admin/images/twitter.svg')}}" type="image/svg+xml" width="25" height="25"></object>
                                        <span class="fs-18px fw-400 font-lexend black-color">Twitter</span>
                                    </a>
                                    <a href="" class="d-flex align-items-center gap-3 text-decoration-none">
                                        <object data="{{asset('admin/images/gmail.svg')}}" type="image/svg+xml" width="25" height="25"></object>
                                        <span class="fs-18px fw-400 font-lexend black-color">Email</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        alert("Copied the URL: " + $temp.val());
    }
    $(document).on('click', '.create_url', function() {
        var referral_id = $('#referral_val').val();
        if (referral_id) {
            $.ajax({
                method:"POST",
                url:"{{route('admin.create_referral')}}",
                data:{
                    referral_id:referral_id,
                    "_token":"{{csrf_token()}}",
                },
                success:function(data){
                    $('#created_url').html("{{route('home')}}?ref="+data.ref.referral_id);
                    swal(data.msg);
                }
            })
        }else{
            swal("Enter an optional campaign name.");
        }

    })
</script>
@endsection