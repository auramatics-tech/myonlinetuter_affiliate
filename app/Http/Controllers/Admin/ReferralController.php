<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserReferralId;
use App\Models\ReferralHistory;
use DB;

class ReferralController extends Controller
{

    public  function index()
    {
        $my_referral_ids = UserReferralId::where('user_id',auth()->user()->id)->pluck('referral_id')->toarray();
        $ref_history = ReferralHistory::whereIn('refral_ids',$my_referral_ids)->paginate(10);
        $allstatus = ReferralHistory::groupBy('status')->pluck('status')->toarray();
        // echo '<pre>';print_r($status);die;
        return view('admin.referral.index',compact('ref_history','allstatus'));
    }
}
