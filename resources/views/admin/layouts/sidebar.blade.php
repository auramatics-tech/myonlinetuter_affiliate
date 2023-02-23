<div class="col-auto width-left col-md-3 col-xl-2 px-0 bg-light">
    <div class="d-flex flex-column align-items-center align-items-sm-start ps-lg-4 ps-sm-3 py-lg-5 py-3 text-white min-vh-100">
        <div class="px-2">
            <a href="dashboard.html" class="d-flex align-items-center pb-md-3 mb-md-0 mx-md-auto text-white text-decoration-none pe-lg-4 pe-sm-3 mx-sm-auto">
                <figure class="side_logo">
                    <img src="{{asset('admin/images/logo.svg')}}" alt="" class="d-none d-md-inline">
                    <img src="{{asset('admin/images/small-logo.png')}}" alt="" class="d-inline d-md-none">
                </figure>
            </a>
            <div class="mx-auto pe-lg-4 pe-sm-4">
                <div class="active_dot"></div>
                <figure class="user_profile_fig">
                    @if(!empty(auth()->user()->getMedia('avatars')->last()->getUrl('thumb')))
                    <img src="{{ auth()->user()->getMedia('avatars')->last()->getUrl('thumb') }}" alt="Avatar" class="w-100 rounded-circle">
                    @else
                    <img src="{{asset('admin/images/Avatar.png')}}" alt="">
                    @endif
                </figure>
            </div>
            <div class="text-center fs-24px fw-400 black-color font-lexend pe-lg-4 pe-4 mb-xl-4 d-none d-md-block">
                {{auth()->user()->fname.' '.(isset(auth()->user()->lname) ? auth()->user()->lname : '')}}</div>
        </div>
        <ul class="pl_name nav nav-pills flex-column mb-0 align-items-center align-items-sm-start w-100" id="menu">
            <li class="nav-item active">
                <a href="dashboard.html" class="nav-link align-middle p-0">
                    <img src="{{asset('admin/images/dashboard.svg')}}" alt="" class="float-start" />
                    <span class="ms-3 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://auramatics.com/myonlinetutor/affiliate-admin/affliateUrls.html" class="nav-link p-0 align-middle">
                    <img src="{{asset('admin/images/url.svg')}}" alt="" class="float-start" />
                    <span class="ms-3 d-none d-sm-inline">Affliate URLs</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="referrals.html" class="nav-link p-0 align-middle">
                    <img src="{{asset('admin/images/referral.svg')}}" alt="" class="float-start" />
                    <span class="ms-3 d-none d-sm-inline">Referrals</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="payouts.html" class="nav-link p-0 align-middle">
                    <img src="{{asset('admin/images/coin-stack.svg')}}" alt="" class="float-start" />
                    <span class="ms-3 d-none d-sm-inline">Payouts</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.update_profile')}}" class="nav-link p-0 align-middle">
                    <img src="{{asset('admin/images/setting.svg')}}" alt="" class="float-start" />
                    <span class="ms-3 d-none d-sm-inline">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>