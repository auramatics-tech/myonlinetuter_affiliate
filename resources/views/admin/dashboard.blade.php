@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row flex-nowrap">
       @include('admin.layouts.sidebar')
        <div class="col width-right py-lg-5 py-md-4 py-3">
            <div class="container">
            @include('admin.layouts.header')
                <div class="main_content mt-4">
                    <div class="mb-5">
                        <h3 class="fs-30px fw-600 font-lexend">Summary</h3>
                        <div class="row mt-4">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card secondary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Referrals</span>
                                        <span class="fs-14px fw-500 font-lexend success-color">
                                            <object data="{{asset('admin/images/Icon-success.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">$550.21k</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-secondary">
                                                <object data="{{asset('admin/images/doller.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card primary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Visit</span>
                                        <span class="fs-14px fw-500 font-lexend success-color">
                                            <object data="{{asset('admin/images/Icon-success.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">$10k</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-primary">
                                                <object data="{{asset('admin/images/arrow.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card secondary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Conversion
                                            Rate</span>
                                        <span class="fs-14px fw-500 font-lexend danger-color">
                                            <object data="{{asset('admin/images/Icon-danger.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">0%</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-secondary">
                                                <object data="{{asset('admin/images/camera.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h3 class="fs-30px fw-600 font-lexend">Last 30 Days</h3>
                        <div class="row mt-4">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card secondary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Referrals</span>
                                        <span class="fs-14px fw-500 font-lexend success-color">
                                            <object data="{{asset('admin/images/Icon-success.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">$550.21k</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-secondary">
                                                <object data="{{asset('admin/images/doller.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card primary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Visit</span>
                                        <span class="fs-14px fw-500 font-lexend success-color">
                                            <object data="{{asset('admin/images/Icon-success.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">10k</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-primary">
                                                <object data="{{asset('admin/images/arrow.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card secondary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Conversion
                                            Rate</span>
                                        <span class="fs-14px fw-500 font-lexend danger-color">
                                            <object data="{{asset('admin/images/Icon-danger.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">0%</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-secondary">
                                                <object data="{{asset('admin/images/camera.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card primary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Unpaid
                                            Referrals</span>
                                        <span class="fs-14px fw-500 font-lexend success-color">
                                            <object data="{{asset('admin/images/Icon-success.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">10k</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-primary">
                                                <object data="{{asset('admin/images/doller.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card secondary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Paid
                                            Referrals</span>
                                        <span class="fs-14px fw-500 font-lexend success-color">
                                            <object data="{{asset('admin/images/Icon-success.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">$550.21k</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-secondary">
                                                <object data="{{asset('admin/images/doller.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card primary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Unpaid
                                            Earnings</span>
                                        <span class="fs-14px fw-500 font-lexend success-color">
                                            <object data="{{asset('admin/images/Icon-success.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">10k</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-primary">
                                                <object data="{{asset('admin/images/doller.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="global-card sum_card secondary-border-shadow p-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="fs-16px fw-500 font-lexend gray-color-500 text-uppercase">Total
                                            Earnings</span>
                                        <span class="fs-14px fw-500 font-lexend success-color">
                                            <object data="{{asset('admin/images/Icon-success.svg')}}" type="image/svg+xml" class="me-2"></object>
                                            +16.24%
                                        </span>
                                    </div>
                                    <div class="my-3 fs-24px fw-500 font-lexend gray-color-500">$550.21k</div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#" class="fs-14px fw-500 font-lexend gray-color-500">View all
                                            orders</a>
                                        <div class="ms-3">
                                            <div class="box bg-secondary">
                                                <object data="{{asset('admin/images/doller.svg')}}" type="image/svg+xml"></object>
                                            </div>
                                        </div>
                                    </div>
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