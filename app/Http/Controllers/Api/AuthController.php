<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserReferralId;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request)
    {
        $credentials = Validator::make($request->all(), [
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6'],//, 'confirmed'
        ]);

        if ($credentials->fails()) {
            $errors = $credentials->errors();
            return $this->sendError($errors->first(), [], 200);
        } else {
            $user = new User();
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->country = $request->country;
            $user->password = Hash::make($request->password);
            $user->role = 1;
            if(isset($request->ref) && $request->ref != ''){
                $ref = UserReferralId::where(['referral_id'=>$request->ref,'status'=>1])->first();
                $user->parent_id = $ref->user_id;
            }
            $user->save();
            $create_ref = new UserReferralId();
            $create_ref->user_id =  $user->id;
            $number = random_int(100000, 999999);
            $create_ref->referral_id = $number;
            $create_ref->save();
            $success['id'] =  $user->id;
            $success['token'] =  $user->createToken(env('APP_NAME'))->plainTextToken;
            $success['user'] =  $user;

            return $this->sendResponse($success, 'User registered successfully');
        }
    }
    public function user(){
        $user = Auth::user();
        return $this->sendResponse($user, 'User detail');
    }


}
