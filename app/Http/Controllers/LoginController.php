<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    //
    public function signin(){
        return view ('signin');
    }


    public function signinAuth(Request $request){
        $email = $request->input('email');
        $passwordUser = $request->input('password');
    
        $user = User::where('email', $email)->first();
        $firstName = $user->firstName;
        if(!$user || $user->password !== $passwordUser){
            return redirect('/signin?msg=error');
        } else {
            Session::put('user', $email . "," . $firstName);
            
            return redirect('/');
        }
    }

    public function logout(){
        Session::flush();
        
        return redirect('signin');
       
    }


    
}
