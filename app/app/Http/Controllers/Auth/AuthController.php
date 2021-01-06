<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Log;
use Redirect;
use Session;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lname' => 'required|max:255',
            'fname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'lname' => $data['lname'],
            'fname' => $data['fname'],
            'email' => $data['email'],
            'rol' => $date['rol'],
            'estado' => $date['estado'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Get the path to the login route.
     *
     * @return string
     */
    public function getLogin(){
        return view('auth/login');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');

        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            $user = \Auth::getLastAttempted(); 
            if($user->estado == 1){    
                    $log = [
                    'desc'=>'Ingreso al sistema',
                    'email'=>\Auth::user()->email,
                    ];

                    Log::create($log);

                    return Redirect::to('/home');
            }else{
                $log = [
                    'email' => \Auth::user()->email,
                    'desc' =>'Cuenta no activa intento ingresar al sistema',
                ];
  
                Log::create($log);
                $this->auth->logout();
                return  view("auth.login")->withInput($request->only('email', 'remember')) ->withErrors([ 'active' => 'El usuario que desea ingresar se encuentra desactivado.' ]); 
            }
        }
           return view("auth.login")->withInput($request->flashOnly('email'))->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }

    protected function postRegister(Request $request)
    {
        $this->validate($request, [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'rol' =>    'required',
        'password' => 'required',
        ]);

        $data = $request;

        $user=new User;
        $user->fname=$data['fname'];
        $user->lname=$data['lname'];
        $user->rol=$date['rol'];
        $user->estado='1';
        $user->email=$data['email'];
        $user->password=bcrypt($data['password']);

        if($user->save()){
            return view('registerdone');

        }

    }

    protected function getLogout()
    {
        $this->auth->logout();
        Session::flush();
        return redirect('/');
    }
}
