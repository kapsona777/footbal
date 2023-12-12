<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash; 

class UserController extends Controller
{   
    public function register(){
        return view('register');
    }

    public function registerUser(Request $request){ 

        $token = md5(rand(1, 10) . microtime());
        $users = new Users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->token = $token;
        $users->password = Hash::make($request->password);
        $users->created_at = date('Y-m-d H:i:s');
        $users->updated_at = date('Y-m-d H:i:s');
        $users->save();


        return redirect('/')->with('status', 'You have been registered successfully');
    }

    public function login(){
        return view('login');
    }

    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required'
        ]);

        $user = Users::where('email', $request->email)->first(); 
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('user', $user); 
                return redirect('/viewTeams');
            }else{
                return back()->with('error', 'Invalid password');
            }
        }else{
            return back()->with('error', 'No user found for this email');
        }
    }

    public function logout(){
        if(session()->has('user')){
            session()->pull('user'); 
            return redirect('/login');
        }
    }


}
