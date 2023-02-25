<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserReferralId;
use DB;

class AffiliateController extends Controller
{

    public  function index()
    {
        return view('admin.affiliate.index');
    }
    public function create_referral(Request $request){
        $this->validate($request, [
            'referral_id' => ['required'],
        ]);
        $ref = UserReferralId::where(['referral_id'=>$request->referral_id,'status'=>1])->first();
        if(empty($ref)){
            $ref = new UserReferralId();
            $ref->user_id = auth()->user()->id;
            $ref->referral_id = $request->referral_id;
            $ref->save();
            $msg = "Url created successfully";
        }else{
            $msg = "Campaign name already exist.";
        }
       
        return response(['ref'=>$ref,'msg'=>$msg]);
    }
}
