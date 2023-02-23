<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\User;
use DB;

class AdminController extends Controller
{

    public  function index()
    {
        return view('admin.profile');
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
        echo "<pre>";print_r($request->all());die;
    }
}
