<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserReferralId;
class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }
    

    public function index()
    {
        return view('admin.login');
    }
    public function signup(){
        return view('admin.signup');
    }

    public function authenticate(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user_details = User::where('email', $request->email)->first();
        if (isset($user_details->id)) {
            // Attempt to log the user in
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1], $request->remember)) {
                // if successful, then redirect to their intended location
                return redirect()->route('admin.dashboard');
            }
        }

        $invalid = 'Invalid email or password.';
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember', 'invalid'))->withErrors([
            $request->email => 'Invalid username or password',
        ]);
    }
    public function admin_register(Request $request){
       
        $this->validate($request, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
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
        return redirect()->route('admin.home')->with('success','Registered successfully.');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.home');
    }
}
