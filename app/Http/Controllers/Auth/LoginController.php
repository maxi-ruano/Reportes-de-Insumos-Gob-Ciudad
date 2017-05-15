<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\SysUsers;
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
    protected $username = 'username';
    protected $redirectTo = '/asd';
    protected $redirectAfterLogout = 'public/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout(Request $request)
    {
      $this->guard()->logout();

      $request->session()->flush();

      $request->session()->regenerate();

      return redirect('/admin/login');
    }

    public function login(Request $request)
    {
      $this->validateLogin($request);

      $user = SysUsers::where('username', $request->username)
                   ->where('password',md5($request->password))
                   ->first();

      if(!empty($user)){
        Auth::login($user, true);
        return redirect('/admin/bedel');
      }else{
        return $this->sendFailedLoginResponse($request);
      }
/*
      if (Auth::attempt(['username' => $user->username, 'password' => $user->password], true)) {
        dd('si');// The user is being remembered...
      }else{
        dd('no');
      }
*/

      //return redirect('/admin/bedel');
    }

    public function setPasswordAttribute($password){
      $this->attributes['password'] = md5($password);
    }

    public function username()
    {
        return 'username';
    }


}
