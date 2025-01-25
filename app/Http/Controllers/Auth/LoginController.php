<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        // Validate input
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'otp' => 'required',
        ]);

        // Dummy OTP for testing
        $testOtp = '1234';

        // Check if the OTP is valid
        if ($request->otp !== $testOtp) {
            return back()->withErrors(['otp' => 'Invalid OTP'])->withInput();
        }

        // Perform further authentication logic
        // Example: Check user credentials and log them in
        $user = User::where('name', $request->name)
            ->where('phone', $request->phone)
            ->first();
// dd($user);
        if (!$user) {
            return back()->withErrors(['name' => 'Invalid credentials'])->withInput();
        }

        // Log the user in
        auth()->login($user);

        
        //return redirect()->route('index');

        return redirect()->intended('/index');

    }
}
