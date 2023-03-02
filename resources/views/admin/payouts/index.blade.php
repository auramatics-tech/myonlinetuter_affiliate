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
                            <span class="fw-400 fs-16px font-lexend black-color">Payment Method</span>
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
                                    <option value="">All Status Type</option>
                                    <option value="">All Status Type</option>
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
                            <h3 class="fs-30px fw-600 font-lexend black-color">Payouts</h3>
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
                                    <tr>
                                        <td data-label="Date" scope="row">1/11/2050</td>
                                        <td data-label="Amount">1</td>
                                        <td data-label="Payment Method">Bank</td>
                                        <td data-label="Status">
                                            <div class="badge_div">paid</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Date" scope="row">1/11/2050</td>
                                        <td data-label="Amount">50</td>
                                        <td data-label="Payment Method">Paypal</td>
                                        <td data-label="Status">
                                            <div class="badge_div">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Date" scope="row">1/11/2050</td>
                                        <td data-label="Amount">205</td>
                                        <td data-label="Payment Method">Bank</td>
                                        <td data-label="Status">
                                            <div class="badge_div">paid</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Date" scope="row">1/11/2050</td>
                                        <td data-label="Amount">2050</td>
                                        <td data-label="Payment Method">Payoneer</td>
                                        <td data-label="Status">
                                            <div class="badge_div">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Date" scope="row">1/11/2050</td>
                                        <td data-label="Amount">11</td>
                                        <td data-label="Payment Method">Paypal</td>
                                        <td data-label="Status">
                                            <div class="badge_div">paid</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Date" scope="row">1/11/2050</td>
                                        <td data-label="Amount">2050</td>
                                        <td data-label="Payment Method">Bank</td>
                                        <td data-label="Status">
                                            <div class="badge_div">paid</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-between">
                                <ul class="pagination pagination-left">
                                    <li class="page-item"><a class="page-link" href="{{$payouts->previousPageUrl()}}">&lt; Previous</a></li>
                                </ul>
                                {{ $payouts->withQueryString()->onEachSide(0)->links("pagination::bootstrap-4") }}
                                <ul class="pagination pagination-right">
                                    <li class="page-item"><a class="page-link" href="{{$payouts->nextPageUrl()}}">Next &gt;</a></li>
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
                method: "POST",
                url: "{{route('admin.create_referral')}}",
                data: {
                    referral_id: referral_id,
                    "_token": "{{csrf_token()}}",
                },
                success: function(data) {
                    $('#created_url').html("{{route('home')}}?ref=" + data.ref.referral_id);
                    swal(data.msg);
                }
            })
        } else {
            swal("Enter an optional campaign name.");
        }

    })
</script>
@endsection