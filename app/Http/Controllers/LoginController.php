<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;

class LoginController extends Controller
{
    public function form_login()
    {
        return view('modules.auth.form_login');
    }

    public function form_register()
    {
        return view('modules.auth.form_register');
    }

    public function register(Request $request)
    {
        $input = $request->all();
        $user = User::create([
            "names"=>$input["names"],
            "lastnames"=>$input["lastnames"],
            "email"=>$input["email"],
            "password"=>Hash::make($input["password"], [
                'memory' => 1024,
                'time' => 2,
                'threads' => 2
            ])
        ]);
        return redirect()->route('login.form_login')->with([
            "color"=>"success",
            "message"=>"Se ha registrado con exito"
        ]);
    }

    public function auth(Request $request)
    {
        $user = User::where('email', '=', $request->input('email'))->first();

        if ($user){
            $password = $request->input('password');
            if (Hash::check($password,$user->password)){

                session(['USER'=>$user]);

                return redirect()->route('dashboard.index');

            }else{
                return redirect()->route('login.form_login')->with([
                    'color'=>'danger',
                    'message'=>'Correo electronico o contraseña incorrectos.'
                ]);
            }
        }else{
            return redirect()->route('login.form_login')->with([
                'color'=>'danger',
                'message'=>'Correo electronico o contraseña incorrectos.'
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login.form_login');
    }
}
