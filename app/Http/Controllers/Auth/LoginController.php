<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth; 
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('back/auth/login');
    }
    public function login (Request $request)
    {
    
        
            $this->validate($request, [
                           'phone'=> "required|numeric|regex:/^(09)+[0-9]{9}$/",
                           'password' => 'required|string|min:8',
                            // recaptchaFieldName() => recaptchaRuleName(),
                ]);

                if (Auth::attempt(['phone' => $request->phone, 'password' 
                    => $request->password], $request->get('remember'))) {
                        return view('back/index');

                 }
        return back()->withInput($request->only('email', 'remember'))->with('warning', 'کاربری با این مشخصات یافت نشد!');
    }
}
