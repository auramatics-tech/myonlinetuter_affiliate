<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReferralHistory;
use App\Models\UserReferralId;
use DB;

class PayoutsController extends Controller
{

    public  function index()
    {
        $my_referral_ids = UserReferralId::where('user_id',auth()->user()->id)->pluck('referral_id')->toarray();
        $payouts = ReferralHistory::whereIn('refral_ids',$my_referral_ids)->paginate(10);
        return view('admin.payouts.index',compact('payouts'));
    }
}
