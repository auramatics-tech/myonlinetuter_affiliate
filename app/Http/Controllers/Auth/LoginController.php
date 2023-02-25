<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserReferralId;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/affiliate-admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user_data = Socialite::driver('google')->user();
        if (isset($user_data->user['email'])) {
            $user = User::where('email', $user_data->user['email'])->first();
            if (empty($user)) {
                $user = new User();
                $user->fname = $user_data->user['name'];
                $user->email = $user_data->user['email'];
                $user->google_id = $user_data->user['id'];
                $user->password = Hash::make(123456);
                $user->role = 1;
                $user->save();
                $this->generate_referral_code();
            }
            if (Auth::guard('admin')->attempt(['email' => $user->email,'password' => 123456, 'role' => 1])) {
                // if successful, then redirect to their intended location
                return redirect()->route('admin.dashboard');
            }
        }
        return back()->with('error', 'Something went wrong');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        // handle user login or registration
        // ...
    }
    public function generate_referral_code()
    {
        $create_ref = new UserReferralId();
        $create_ref->user_id =  $user->id;
        $number = random_int(100000, 999999);
        $create_ref->referral_id = $number;
        $create_ref->save();
    }
}
