<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    protected $redirectTo = "http://localhost:8000/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'contactNumber';
    }
 

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        return "Username o password errate";
    }
    protected function authenticated(Request $request, $user)
    {
        return "ok";
    }
    protected function loggedOut(Request $request)
    {
    }
}
