@extends('admin.layouts.master')
@section('css')
<style>
    .invalid-feedback {
        display: block !important;
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
                    @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if(Session::has('error'))
                    <div class="alert alert-danger text-center">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <div class="row mb-md-5 mb-4">
                        <div class="col-lg-5 col-12 mb-3">
                            <h3 class="fs-30px fw-600 font-lexend black-color">Change Profile Picture</h3>
                            <p class="mb-0 fs-18px fw-400 font-lexend black-color">Change your Profile Picture from
                                here</p>
                        </div>
                        <div class="col-lg-7 col-12">
                            <form action="{{route('admin.updateprofilephoto')}}" method="post" enctype="multipart/form-data" id="user_avatar_form">
                                @csrf
                                <label for="user_avatar" class="input_card d-flex align-items-center gap-3 upload_card">
                                    <input type="file" name="avatar" id="user_avatar" class="d-none">
                                    @if(!empty(auth()->user()->getMedia('avatars')->last()->getUrl('thumb')))
                                    <img src="{{ auth()->user()->getMedia('avatars')->last()->getUrl('thumb') }}" alt="Avatar" class="w-100">
                                    @else
                                    <span class="fs-18px fw-400 font-lexend black-color">Upload an Image</span>
                                    @endif
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="row mb-md-5 mb-3">
                        <div class="col-lg-5 col-12 mb-3">
                            <h3 class="fs-30px fw-600 font-lexend black-color">Change Password</h3>
                            <p class="mb-0 fs-18px fw-400 font-lexend black-color">Change your password from here
                            </p>
                        </div>
                        <div class="col-lg-7 col-12">
                            <form action="{{route('admin.change_password')}}" method="post">
                                @csrf
                                <div class="input_card_parent border-0 px-md-3 px-0">
                                    <h6 class="fw-400 fs-24px font-lexend">Previous Password</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="password" name="current_password" class="fs-18px fw-400 font-lexend black-color w-100 border-0" placeholder="Write your previous password here" />
                                        @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">New Password</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="password" name="password" class="fs-18px fw-400 font-lexend black-color w-100 border-0" placeholder="Write your New password here" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">Retype New Password</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="password" name="password_confirmation" class="fs-18px fw-400 font-lexend black-color w-100 border-0" placeholder="Re-Write your New password here" />
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <button type="submit" class="primary-btn">Change Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mb-md-5 mb-3">
                        <div class="col-lg-5 col-12 mb-3">
                            <h3 class="fs-30px fw-600 font-lexend black-color">Change Email</h3>
                            <p class="mb-0 fs-18px fw-400 font-lexend black-color">Change your Email from here</p>
                        </div>
                        <div class="col-lg-7 col-12">
                            <form action="{{route('admin.update_email')}}" method="post">
                                @csrf
                                <div class="input_card_parent border-0 px-md-3 px-0">
                                    <h6 class="fw-400 fs-24px font-lexend">Previous Email</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="email" name="old_email" value="{{auth()->user()->email}}" class="fs-18px fw-400 font-lexend black-color w-100 border-0" placeholder="Write your previous Email Address here" />
                                        @error('old_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">New Email</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="email" name="new_email" class="fs-18px fw-400 font-lexend black-color w-100 border-0" placeholder="Write your New Email Address here" />
                                        @error('new_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <button type="submit" class="primary-btn">Change Email</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mb-md-5 mb-3">
                        <div class="col-lg-5 col-12 mb-3">
                            <h3 class="fs-30px fw-600 font-lexend black-color">Payout Method</h3>
                            <p class="mb-0 fs-18px fw-400 font-lexend black-color">Add Payment Method</p>
                        </div>
                        <div class="col-lg-7 col-12">
                            <form action="" method="post">
                                @csrf
                                <div class="input_card_parent border-0 px-md-3 px-0">
                                    <h6 class="fw-400 fs-24px font-lexend">Payout Type</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <select name="payout_type" id="" class="fs-18px fw-400 font-lexend black-color w-100 border-0">
                                            <option value="Bank">Bank</option>
                                            <option value="Paypal">Paypal</option>
                                        </select>
                                        @error('payout_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">Account Name</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="text" name="account_name" class="fs-18px fw-400 font-lexend black-color w-100 border-0" />
                                        @error('account_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">Account Number</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="text" name="account_no" class="fs-18px fw-400 font-lexend black-color w-100 border-0" />
                                        @error('account_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">Account Type</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <select name="account_type" id="" class="fs-18px fw-400 font-lexend black-color w-100 border-0">
                                            <option value="Saving">Saving</option>
                                            <option value="Current">Current</option>
                                        </select>
                                        @error('account_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">Bank Name</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="text" name="bank_name" class="fs-18px fw-400 font-lexend black-color w-100 border-0" />
                                        @error('bank_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">Branch Code</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="text" name="branch_code" class="fs-18px fw-400 font-lexend black-color w-100 border-0" />
                                        @error('branch_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">Routing Number</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="text" name="routing_number" class="fs-18px fw-400 font-lexend black-color w-100 border-0" />
                                        @error('routing_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <h6 class="fw-400 fs-24px font-lexend">SWIFT Code</h6>
                                    <label for="" class="input_card d-flex align-items-center gap-3 my-3">
                                        <input type="text" name="swift_code" class="fs-18px fw-400 font-lexend black-color w-100 border-0" />
                                        @error('swift_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <button type="submit" class="primary-btn">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).on('change', '#user_avatar', function() {
        $('#user_avatar_form').submit();
    })
</script>
@endsection