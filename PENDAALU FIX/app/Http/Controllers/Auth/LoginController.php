<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    
    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required|string', //validasi kolom username, tapi bisa username atau email
            'password' => 'required|string|min:6',
        ]);
    
        //cek auth akan menggunakan email ataau user
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    
        //menampung info login berdasar value cek diatas
        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];
    
        //login
        if(auth()->attempt($login)){
            //jika berhasil -> home
            return redirect()->route('home');
        }
    
        //jika salah
        return redirect()->route('login')->with(['error' => 'Username/Password salah!']);
    }

}
