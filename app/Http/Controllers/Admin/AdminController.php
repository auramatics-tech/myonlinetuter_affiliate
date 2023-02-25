<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\User;
use App\Models\UserAccountDetail;
use DB;

class AdminController extends Controller
{

    public  function index()
    {
        $account_detail = UserAccountDetail::where('user_id',auth()->user()->id)->first();
        return view('admin.profile',compact('account_detail'));
    }
    public function updateprofilephoto(Request $request)
    {
        $this->validate($request, [
            'avatar' => ['required'],
        ]);
        $user = Auth::user();
        $user->addMediaFromRequest('avatar')
            ->toMediaCollection('avatars');
        return back()->with('success', 'Avatar updated successfuly');
    }
    public function change_password(Request $request){
        $this->validate($request, [
            'current_password' => ['required'],
            'password' => ['required'],
            'password_confirmation' => ['required'],
        ]);
        $data = $request->except('_token');
        $check = Hash::check($data['current_password'], auth()->user()->password);
        if(!$check)
        {
            return redirect()->back()->with('error', 'Your current password is wrong.'); 
        }
        if($data['password'] != $data['password_confirmation'])
        {
            return redirect()->back()->with('error', 'New password and confirm password does not match.');  
        }
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);
        return redirect()->back()->with('success', 'Password changed successfully.'); 
    }
    public function update_email(Request $request){
        $this->validate($request, [
            'old_email' => ['required'],
            'new_email' => ['required']
        ]);
        if(auth()->user()->email != $request->old_email){
            return redirect()->back()->with('error', 'Your current email is wrong.'); 
        }
        $check_user = User::where('email',$request->new_email)->first();
        if(!empty($check_user)){
            return redirect()->back()->with('error', 'Email already exist.'); 
        }else{
            $user = User::where('id',auth()->user()->id)->update(['email'=>$request->new_email]);
        }
        return back()->with('success','Email updated successfully');
    }
    public function update_user_account_detail(Request $request){
        $this->validate($request, [
            'payout_type' => ['required'],
            'account_name' => ['required'],
            'account_no' => ['required'],
            'account_type' => ['required'],
            'bank_name' => ['required']
        ]);
        $account_detail = UserAccountDetail::where('user_id',auth()->user()->id)->first();
        if(empty($account_detail)){
            $account_detail = new UserAccountDetail();
        }
        $account_detail->user_id = auth()->user()->id;
        $account_detail->payout_type = $request->payout_type;
        $account_detail->account_name = $request->account_name;
        $account_detail->account_no = $request->account_no;
        $account_detail->account_type = $request->account_type;
        $account_detail->bank_name = $request->bank_name;
        $account_detail->branch_code = $request->branch_code;
        $account_detail->routing_number = $request->routing_number;
        $account_detail->swift_code = $request->swift_code;
        $account_detail->save();
        return back()->with('success','Data updated successfully');
    }
}
