<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
           'email'=> 'required',
           'password'=>'required'
        ]);
     $password = $request->password;
        $user = User::where(['email' => $request->email])->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                Auth::login($user);
                if(Auth::check()){
                    return redirect('/redirect');
                }
            }
        }
    }
    public function register(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=>'required'
         ]);
        $user = User::create([
           'name' =>$request->name,
           'email'=>$request->email,
           'password'=>$request->password
        ]);
        if($user){
            Auth::login($user);
            if(Auth::check()){
                return redirect('/')->withSuccess('User Registerd Succefully');
            }
        }
        
      if(validator()->fails()){
            return redirect()->back()->withErrors(validator());
          }

    }
    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
