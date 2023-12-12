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

        $users = new Users();
        $users->name = $request->name;
        $users->email = $request->email; 
        $users->password = Hash::make($request->password);
        $users->created_at = date('Y-m-d H:i:s');
        $users->updated_at = date('Y-m-d H:i:s');
        $users->save();


        return redirect('/')->with('status', 'You have been registered successfully');
    }

    public function login(){
        return view('welcome');
    }

    public function loginUser(Request $request){ 
        $userEmail = $request->email;
        $userPassword = $request->password;

        $email = Users::where('email', $userEmail)->first();
        if($email){
            if(Hash::check($userPassword, $email->password)){
                $request->session()->put('user', $email);
                return redirect('/viewTeams');
            }else{
                return back()->with('status', 'Invalid Password');
            }
        }else{
            return back()->with('status', 'Invalid Email');
        }
    }

    public function logout(){
        if(session()->has('email')){
            session()->pull('user');
            return view('/login');
        }
    } 

}
