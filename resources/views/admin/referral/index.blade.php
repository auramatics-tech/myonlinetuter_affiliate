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
                <div class="main_content mt-4">
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <span class="fw-400 fs-16px font-lexend black-color">Amount</span>
                            <span class="fw-400 fs-16px font-lexend float-end black-color">Clear</span>
                            <label for="" class="select_card d-flex align-items-center gap-3 mt-1">
                                <select name="" id="" class="fs-18px fw-400 font-lexend black-color w-100 border-0">
                                    <option value="">All Price</option>
                                    <option value="">All Price</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <span class="fw-400 fs-16px font-lexend black-color">Status</span>
                            <span class="fw-400 fs-16px font-lexend float-end black-color">Clear</span>
                            <label for="" class="select_card d-flex align-items-center gap-3 mt-1">
                                <select name="" id="" class="fs-18px fw-400 font-lexend black-color w-100 border-0">
                                    @if(count($allstatus))
                                    @foreach($allstatus as $status)
                                    <option value="{{ $status}}">{{ $status}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </label>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <span class="fw-400 fs-16px font-lexend black-color">Date</span>
                            <span class="fw-400 fs-16px font-lexend float-end black-color">Clear</span>
                            <label for="" class="select_card d-flex align-items-center gap-3 mt-1">
                                <select name="" id="" class="fs-18px fw-400 font-lexend black-color w-100 border-0">
                                    <option value="">All Time</option>
                                    <option value="">All Time</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="card referral_card">
                        <div class="p-3 child_one">
                            <h3 class="fs-30px fw-600 font-lexend black-color">Referrals</h3>
                            <p class="mb-0 fs-18px fw-400 font-lexend black-color">{{auth()->user()->fname.' '.(isset(auth()->user()->lname) ? auth()->user()->lname : '')}}.</p>
                        </div>
                        <div class="tableResponsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="w-100px d-flex align-tems-center justify-content-between">
                                                Reference
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="w-100px d-flex align-tems-center justify-content-between">
                                                Amount <img src="{{asset('admin/images/down-arr.svg')}}"></div>
                                        </th>
                                        <th scope="col">
                                            <div class="w-300px d-flex align-tems-center justify-content-between">
                                                Description
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="w-150px d-flex align-tems-center justify-content-between">
                                                Status <img src="{{asset('admin/images/down-arr.svg')}}"></div>
                                        </th>
                                        <th scope="col">
                                            <div class="w-100px d-flex align-tems-center justify-content-between">
                                                Date <img src="{{asset('admin/images/down-arr.svg')}}"></div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($ref_history))
                                    @foreach($ref_history as $hostory)
                                    <tr>
                                        <th data-label="Reference" scope="row">{{$hostory->refral_ids}}</th>
                                        <td data-label="Amount">{{isset($hostory->amount) ? $hostory->amount : ''}}</td>
                                        <td data-label="Description">{{$hostory->descriptions}}</td>
                                        <td data-label="Status">
                                            <div class="badge_div">{{$hostory->status}}</div>
                                        </td>
                                        <td data-label="Date">{{date('d-M-Y',strtotime($hostory->created_at))}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-between">
                                <ul class="pagination pagination-left">
                                    <li class="page-item"><a class="page-link" href="{{$ref_history->previousPageUrl()}}">&lt; Previous</a></li>
                                </ul>
                                {{ $ref_history->withQueryString()->onEachSide(0)->links("pagination::bootstrap-4") }}
                                <ul class="pagination pagination-right">
                                    <li class="page-item"><a class="page-link" href="{{$ref_history->nextPageUrl()}}">Next &gt;</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection