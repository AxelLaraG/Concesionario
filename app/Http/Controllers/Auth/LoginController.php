<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario as Usuarios;
use App\Models\Rol;
use Session;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        //$f = $this->auth->attempt($credentials, $request->has('remember'));
        $f = Auth::attempt($credentials, $request->filled('remember'));
        //echo "f: ".$f."<br>";
        if ($f) {
            $usr_current = Auth::user();
            return view('home')->with('usuario', $usr_current);
        }
        return view('mensaje.msj2')->with('msg', 'USUARIO O CONTRASEÑA INCORRECTA');

    }

    public function getLogout()
    {
        //destroy --> destruir la variable se session
        $this->auth->logout();
        Session::flush();
        return view('plantilla');
    }

    public function getAlta()
    {
        return view('alta');
    }

    public function postAlta(Request $request)
    {
        $datos = $request->all();
        Usuarios::create([
            'usuario' => $datos['username'],
            'password' => Hash::make($datos['password']),
            'status' => $datos['status'],
            'id_rol' => $datos['id_rol'],
        ]);
        return redirect('login');
    }

}