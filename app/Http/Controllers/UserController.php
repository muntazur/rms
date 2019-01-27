<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class UserController extends Controller
{
    //
    public function loginHome()
    {
        return view('users.loginHome');
    }
    public function registerHome()
    {
        return view('users.registerHome');
    }
    public function loginChecker(Request $request)
    {
        
        $user = DB::table('users')->select('email','password')->where(['email'=>$request->email,'password'=>$request->password])->first();
        if($user)
        {  
            Session::put('key','You are logged in');
            $session = Session::get('key');
            if($session){
              return view('Home.internal');
            }
        }
        else 
        { 
          Session::put('incorrect','Incorrect Email or Password');
          return view('users.loginHome');
        }
    }
    public function storeRegisterInformation(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        
        $input_pasw = $request->password;
        $conf_pasw = $request->conf_password;

        if($conf_pasw != $input_pasw)
        {
            Session::put('mismatch','oops! password mismatched');
            return view('users.registerHome');
        }
        else $user->save();
       
        return view('Home.external');
    }

    public function logout()
    {   
        Session::put('key',null);
        return view('Home.external');
    }
}
