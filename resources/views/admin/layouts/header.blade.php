<div class="d-flex align-items-center gap-lg-5 gap-3">
    <div class="search_form me-auto w-100">
        <form method="get">
            <div class="input-group global-card py-lg-2 py-1 px-2">
                <span class="input-group-text border-0 bg-none" id="basic-addon1"> <object data="{{asset('admin/images/search.svg')}}" type="image/svg+xml"></object></span>
                <input type="text" class="form-control border-0 bg-none" placeholder="Search here..." aria-label="q" aria-describedby="basic-addon1" name="q">
            </div>
        </form>
    </div>
    <div class="notification_div">
        <div class="bg-danger position-absolute black-color note_count">1</div>
        <object data="{{asset('admin/images/notifications_none.svg')}}" type="image/svg+xml"></object>
    </div>
    <div class="user_profiledropdown d-none d-md-inline">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="active_dot"></div>
            <figure class="m-0">
                @if(!empty(auth()->user()->getMedia('avatars')->last()))
                <img src="{{ auth()->user()->getMedia('avatars')->last()->getUrl('thumb') }}" alt="Avatar" width="40" height="40" class="rounded-circle">
                @else
                <img src="{{asset('admin/images/Avatar.png')}}" alt="hugenerd" width="40" height="40" class="rounded-circle">
                @endif
            </figure>
        </a>
        <ul class="dropdown-menu dropdown-menu-light text-small shadow">
            <li><a class="dropdown-item" href="{{route('admin.update_profile')}}">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{route('admin.logout')}}">Sign out</a></li>
        </ul>

    </div>
</div>